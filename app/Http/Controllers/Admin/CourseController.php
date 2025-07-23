<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; // Assuming you have a Course model
use App\Models\Teacher; // Assuming you have a Course model

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::with('teachers')->orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.courses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['teachers'] = Teacher::all(); 
        return view('dashboard.admin.courses.create', $data);
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
            'course_name' => 'required|string|max:255',
            'small_description' => 'required|string',
            'teacher_id' => 'required|array',
            'description' => 'required|string',
        ]);

       $course = Course::create([
            'course_name' => $request->course_name,
            'small_description' => $request->small_description,
            'description' => $request->description,
        ]);
        $course->teachers()->attach($request->teacher_id);

       if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('assets/admin/images/course');

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);

            $course->photo = 'assets/admin/images/course/' . $filename; 
        }
        $course->save();


        return response()->json(['message' => 'Teacher added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::with('teachers')->findOrFail($id);
        return view('dashboard.admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        if ($course->photo && file_exists(public_path($course->photo))) {
            unlink(public_path($course->photo));
        }

        return redirect()->route('admin.courses.index')->with('message', 'Course deleted successfully.');
    }
}
