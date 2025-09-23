@extends('dashboard.master')

@section('title', 'Course Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-body">
  
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Course Header -->
                        <div class="course-header text-center">
                            <h1 class="mb-3">{{ $course->course_name }}</h1>
                            <p class="lead mb-0">{{ $course->short_description }}</p>
                        </div>

                        <!-- Course Content -->
                        <div class="row">
                            <!-- Left Column - Course Image and Details -->
                            <div class="col-lg-5 mb-4">
                                <img src="{{ asset($course->photo) }}" alt="Course Image" class="course-image mb-4">
                                <div class="description-box mb-4">
                                    <h4 class="section-title">Course Teachers</h4>
                                    <div class="teachers-container">
                                        @foreach($course->teachers as $teacher)
                                            <span class="teacher-badge">{{ $teacher->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                
                                <div class="description-box ">
                                    <h4 class="section-title">About This Course</h4>
                                    <p>{!! $course->description !!}</p>
                                </div>
                                
                                
                            </div>
                            
                            <!-- Right Column - Modules -->
                            <div class="col-lg-7">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="section-title m-0">Course Modules</h3>
                                    <span class="badge bg-primary">{{ $course->modules->count() }} Modules</span>
                                </div>
                                
                                <!-- Modules Loop -->
                                @foreach($course->modules as $index => $module)
                                <div class="module-card">
                                    <div class="module-header {{ $index > 0 ? 'collapsed' : '' }}" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#module{{ $module->id }}" 
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                        aria-controls="module{{ $module->id }}">
                                        <h5 class="mb-0">{{ $module->module_name }}</h5>
                                        <span class="arrow-icon"><i class="fas fa-chevron-down"></i></span>
                                    </div>

                                    <div class="collapse {{ $index === 0 ? 'show' : '' }}" id="module{{ $module->id }}">
                                        <div class="module-content">
                                            <p class="text-muted">{{ $module->description }}</p>
                                            
                                            @if($module->lessons->count() > 0)
                                            <h6 class="mb-3">Lessons in this module:</h6>
                                            <div class="lessons-container">
                                                @foreach($module->lessons as $lesson)
                                                    <div class="lesson-card">
                                                        <div class="lesson-header d-flex justify-content-between align-items-center">
                                                            <div class="lesson-title">
                                                                <i class="fas fa-play-circle lesson-icon"></i>
                                                                <strong>{{ $lesson->title }}</strong>
                                                            </div>
                                                            <span class="badge bg-success">Lesson</span>
                                                        </div>
                                                        <div class="lesson-body mt-2">
                                                            <p class="lesson-description">{{ $lesson->description }}</p>
                                                            <div class="lesson-meta">
                                                                <span><i class="far fa-calendar-alt"></i> {{ $lesson->lesson_date }}</span>
                                                                <span><i class="far fa-clock"></i> {{ $lesson->lesson_time }}</span>
                                                                <span><i class="fas fa-video"></i> <a href="{{ $lesson->zoom_link }}" target="_blank">Join Zoom</a></span>
                                                                <span><i class="fas fa-user-shield"></i> <a href="{{ $lesson->zoom_start_url }}" target="_blank">Start</a></span>
                                                                <span><i class="fas fa-hashtag"></i> {{ $lesson->zoom_meeting_id }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="alert alert-info">
                                                <i class="fas fa-info-circle me-2"></i>No lessons available in this module yet.
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Back Button -->
                        <div class="text-center mt-5">
                            <a href="{{ route('admin.courses.index') }}" class="btn back-btn text-white">
                                <i class="fas fa-arrow-left me-2"></i>Back to Course List
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
        
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #6f42c1;
            --accent-color: #36b9cc;
            --light-bg: #f8f9fc;
            --dark-text: #5a5c69;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Nunito', sans-serif;
            color: var(--dark-text);
        }

        .course-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .course-image {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            object-fit: cover;
            width: 100%;
            max-height: 250px;
        }

        .module-card {
            border: none;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .module-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .module-header {
            background-color: white;
            border-radius: 10px;
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .module-header.collapsed .arrow-icon {
            transform: rotate(0deg);
        }

        .module-header .arrow-icon {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }

        .module-content {
            padding: 20px;
            background-color: #f8fafc;
            border-top: 1px solid #e9ecef;
            border-radius: 0 0 10px 10px;
        }

        .teacher-badge {
            background-color: #e9f7ff;
            color: var(--primary-color);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-right: 8px;
            margin-bottom: 8px;
            display: inline-block;
        }

        .back-btn {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(37, 117, 252, 0.3);
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(37, 117, 252, 0.4);
        }

        .description-box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* ----------- LESSON DESIGN ----------- */
        .lessons-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .lesson-card {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-color);
        }

        .lesson-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.12);
        }

        .lesson-header {
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 8px;
        }

        .lesson-title {
            font-size: 1rem;
            color: var(--dark-text);
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .lesson-title .lesson-icon {
            color: var(--accent-color);
            font-size: 1.2rem;
            margin-right: 8px;
        }

        .lesson-body {
            padding-top: 10px;
        }

        .lesson-description {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .lesson-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            font-size: 0.85rem;
            color: #495057;
        }

        .lesson-meta i {
            color: var(--primary-color);
            margin-right: 5px;
        }
    </style>
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toggle arrow animation
        document.querySelectorAll('.module-header').forEach(header => {
            header.addEventListener('click', () => {
                header.classList.toggle('collapsed');
            });
        });
    </script>
@endpush

