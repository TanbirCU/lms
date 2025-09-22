<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Module::with('course');

        if ($request->course_id) {
            $query->where('course_id', $request->course_id);
        }
        
        if ($request->ajax()) {
             $query->where('course_id',$request->course_id);
        }
        
        $data['modules'] = $query->get();
        $data['courses'] = Course::all();

        return view('dashboard.admin.course_modules.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses'] = Course::all();
        return view('dashboard.admin.course_modules.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'module_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
        ]);

        Module::create($request->only('course_id', 'module_name', 'description', 'position'));

        return response()->json(['message' => 'Module created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['module'] = Module::findOrFail($id);
        $data['courses'] = Course::all();
        return view('dashboard.admin.course_modules.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'module_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
        ]);

        $module = Module::findOrFail($id);
        $module->update($request->only('course_id', 'module_name', 'description', 'position'));

        return response()->json(['message' => 'Module updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        return redirect()->route('admin.modules.index')->with('message', 'Module deleted successfully.');
    }
}
