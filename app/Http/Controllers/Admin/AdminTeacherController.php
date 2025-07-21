<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $data['teachers'] = Teacher::orderBy('id', 'desc')->get();
        return view('dashboard.admin.teacher.list', $data);
    }
    
    public function showAddTeacherForm()
    {
        return view('dashboard.admin.teacher.add');
    }
    public function storeTeacher(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'password' => 'required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new teacher
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->mobile;
        $teacher->address = $request->address;
        $teacher->password = bcrypt($request->password);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('assets/admin/images/teacher');

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);

            $teacher->photo = 'assets/admin/images/teacher/' . $filename; 
        }


        $teacher->save();

        return response()->json(['message' => 'Teacher added successfully!']);
    }
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        // Optionally, delete the photo file if it exists
        if ($teacher->photo && file_exists(public_path($teacher->photo))) {
            unlink(public_path($teacher->photo));
        }


        return redirect()->route('admin.teacher_list')->with('message', 'Teacher deleted successfully!');
    }
}
