@extends('dashboard.master')

@section('title', 'Course List')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Course List</h4>
                <p class="">Here You Will See Course List.</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Course Name</th>
                                <th>Price</th>
                                <th>Small Description</th>
                                <th>Teachers</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->price }}</td>
                                    <td>{{ $course->small_description }}</td>
                                    <td>
                                        @foreach($course->teachers as $teacher)
                                            <span class="badge badge-info">{{ $teacher->name }}</span>
                                        @endforeach
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('admin.courses.show', $course->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data not found</td>
                                </tr>
                            @endforelse
                        

                        </tbody>
                    </table>
                {{-- Start Form --}}
                {{-- End Form --}}
            </div><!-- Card body end -->
        </div><!-- Card end -->
    </div><!-- Col end -->
</div><!-- Row end -->
@endsection

