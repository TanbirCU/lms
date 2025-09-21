@extends('dashboard.master')

@section('title', 'Course List')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modules List</h4>
                <p>Here You Will See Modules List.</p>

                <div class="mb-3">
                    <label for="courseFilter" class="form-label">Filter by Course</label>
                    <select id="courseFilter" class="form-select">
                        <option value="">-- Select Course --</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>

                <table id="lessonsTable" class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Course Name</th>
                            <th>Module Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $module->module_name }}</td>
                                <td>{{ $module->course->course_name }}</td>
                                <td>{{ $module->description }}</td>
                                <td>
                                    <a href="{{ route('admin.modules.edit', $module->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.modules.destroy', $module->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this module?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div><!-- Card body end -->
        </div><!-- Card end -->
    </div><!-- Col end -->
</div><!-- Row end -->
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#courseFilter').change(function () {
            let courseId = $(this).val();

            $.ajax({
                url: "{{ route('admin.lessons.byCourse') }}",
                type: 'GET',
                data: { course_id: courseId },
                success: function (response) {
                    let rows = '';

                    if (response.length > 0) {
                        response.forEach(function (lesson) {
                            rows += `
                                <tr>
                                    <td>${lesson.title}</td>
                                    <td>${lesson.lesson_date}</td>
                                    <td>${lesson.lesson_time}</td>
                                    <td>${lesson.zoom_link ? `<a href="${lesson.zoom_link}" target="_blank">Join</a>` : 'N/A'}</td>
                                </tr>
                            `;
                        });
                    } else {
                        rows = `
                            <tr>
                                <td colspan="4" class="text-center">No lessons found for this course.</td>
                            </tr>
                        `;
                    }

                    $('#lessonsTable tbody').html(rows);
                },
                error: function () {
                    alert("Something went wrong while fetching lessons.");
                }
            });
        });
    });
</script>
@endpush
