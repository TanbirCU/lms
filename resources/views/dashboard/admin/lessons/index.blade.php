@extends('dashboard.master')

@section('title', 'Course List')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Course List</h4>
                <p>Here You Will See Course List.</p>

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
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Zoom Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->title }}</td>
                                <td>{{ $lesson->lesson_date }}</td>
                                <td>{{ $lesson->lesson_time }}</td>
                                <td>
                                    @if($lesson->zoom_link)
                                        <a href="{{ $lesson->zoom_link }}" target="_blank">Join</a>
                                    @else
                                        N/A
                                    @endif
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
