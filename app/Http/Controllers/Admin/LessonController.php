<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; // Assuming you have a Course model
use App\Models\Lesson; // Assuming you have a Course model
use App\Services\ZoomService; // Assuming you have a ZoomService for handling Zoom API interactions
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lessons'] = Lesson::all(); 
        return view('dashboard.admin.lessons.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses'] = Course::all();
        return view('dashboard.admin.lessons.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request, ZoomService $zoomService)
    {
        $request->validate([
            'course_id'    => 'required|exists:courses,id',
            'title'        => 'required|string|max:255',
            'lesson_date'  => 'required|date',
            'lesson_time'  => 'required',
            'description'  => 'nullable|string',
        ]);

        $datetime = $request->lesson_date . ' ' . $request->lesson_time;

        try {
            $zoom = $zoomService->createMeeting($request->title, $datetime);
            dd($zoom); // Debugging line, remove in production
        } catch (\Exception $e) {
            return back()->with('error', 'Zoom meeting failed: ' . $e->getMessage());
        }

        Lesson::create([
            'course_id'       => $request->course_id,
            'title'           => $request->title,
            'description'     => $request->description,
            'lesson_date'     => $request->lesson_date,
            'lesson_time'     => $request->lesson_time,
            'zoom_link'       => $zoom['join_url'] ?? null,
            'zoom_start_url'  => $zoom['start_url'] ?? null,
            'zoom_meeting_id' => $zoom['id'] ?? null,
        ]);

        return redirect()->route('admin.courses.index')
                        ->with('message', 'Lesson & Zoom meeting created successfully!');
    }


    public function uploadRecording(Request $request, Lesson $lesson)
    {
        $request->validate([
            'recording_url' => 'required|url',
        ]);

        $lesson->update(['recording_url' => $request->recording_url]);

        return back()->with('success', 'Recording uploaded.');
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
        //
    }
}
