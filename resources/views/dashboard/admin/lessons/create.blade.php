@extends('dashboard.master')

@section('title', 'Add Lesson')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Lesson for a Course</h4>
                <p class="">Here You Will Add New Lesson.</p>

                {{-- Start Form --}}
                <form id="lessonAdd" action="{{ route('admin.lessons.store') }}" method="post" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            {{-- Course Selection --}}
                            <div class="form-group row">
                                <label for="course-select" class="col-md-2 col-form-label">Select Course</label>
                                <div class="col-md-10">
                                    <select class="form-control select2-multiple" name="course_id" id="course-select" required>
                                        <option value="">Select a course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Lesson Title</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="title" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-textarea-input" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description" id="example-textarea-input" rows="3"></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label for="lesson-date" class="col-md-2 col-form-label">Lesson Date</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="lesson_date" id="lesson-date" required>
                                </div>      
                            </div>
                            <div class="form-group row">
                                <label for="lesson-time" class="col-md-2 col-form-label">Lesson Time</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="time" name="lesson_time" id="lesson-time" required>
                                </div>
                            </div>
                            {{-- Zoom Link --}}
                            
                            
                            {{-- Submit Button --}}
                            <div class="row mb-3 align-items-center mt-5">
                                <div class="col-md-3 text-md-end"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add lesson</button>
                                </div>
                            </div>

                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </form><!-- Form end -->
                {{-- End Form --}}
            </div><!-- Card body end -->
        </div><!-- Card end -->
    </div><!-- Col end -->
</div><!-- Row end -->
@endsection


@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            initImagePreview('#image-input');
        });
        $(document).ready(function () {
            $('.select2-multiple').select2({
                placeholder: "Select categories",
                allowClear: true
            });
             ajaxFormSubmitJQ('#courseAdd', {
                url: "{{ route('admin.courses.store') }}", // ✅ Or use '/teacher/add'
                method: 'POST',
                onSuccess: function (response) {
                    window.location.href = "{{ route('admin.courses.index') }}";
                    toastr.success(response.message || 'Course added successfully!');
                }
            });
        });

        
    </script>
   
@endpush
@push('css')
    <style>
        .select2-container .select2-selection--single {
                background-color: #fff;
                border: 1px solid #ced4da;
                height: 38px
            }

            .select2-container .select2-selection--single:focus {
                outline: 0
            }

            .select2-container .select2-selection--single .select2-selection__rendered {
                line-height: 36px;
                padding-left: 12px;
                color: #495057
            }

            .select2-container .select2-selection--single .select2-selection__arrow {
                height: 34px;
                width: 34px;
                right: 3px
            }

            .select2-container .select2-selection--single .select2-selection__arrow b {
                border-color: #adb5bd transparent transparent transparent;
                border-width: 6px 6px 0 6px
            }

            .select2-container .select2-selection--single .select2-selection__placeholder {
                color: #495057
            }

            .select2-container--open .select2-selection--single .select2-selection__arrow b {
                border-color: transparent transparent #adb5bd transparent !important;
                border-width: 0 6px 6px 6px !important
            }

            .select2-container--default .select2-search--dropdown {
                padding: 10px;
                background-color: #fff
            }

            .select2-container--default .select2-search--dropdown .select2-search__field {
                border: 1px solid #ced4da;
                background-color: #fff;
                color: #74788d;
                outline: 0
            }

            .select2-container--default .select2-results__option--highlighted[aria-selected] {
                background-color: #556ee6
            }

            .select2-container--default .select2-results__option[aria-selected=true] {
                background-color: #f8f9fa;
                color: #16181b
            }

            .select2-container--default .select2-results__option[aria-selected=true]:hover {
                background-color: #556ee6;
                color: #fff
            }

            .select2-results__option {
                padding: 6px 12px
            }

            .select2-dropdown {
                border: 1px solid rgba(0, 0, 0, .15);
                background-color: #fff;
                -webkit-box-shadow: 0 .75rem 1.5rem rgba(18, 38, 63, .03);
                box-shadow: 0 .75rem 1.5rem rgba(18, 38, 63, .03)
            }

            .select2-search input {
                border: 1px solid #f6f6f6
            }

            .select2-container .select2-selection--multiple {
                min-height: 38px;
                background-color: #fff;
                border: 1px solid #ced4da !important
            }

            .select2-container .select2-selection--multiple .select2-selection__rendered {
                padding: 2px 10px
            }

            .select2-container .select2-selection--multiple .select2-search__field {
                border: 0;
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-search__field::-webkit-input-placeholder {
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-search__field::-moz-placeholder {
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-search__field:-ms-input-placeholder {
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-search__field::-ms-input-placeholder {
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-search__field::placeholder {
                color: #495057
            }

            .select2-container .select2-selection--multiple .select2-selection__choice {
                background-color: #eff2f7;
                border: 1px solid #f6f6f6;
                border-radius: 1px;
                padding: 0 7px
            }

            .select2-container--default.select2-container--focus .select2-selection--multiple {
                border-color: #ced4da
            }

            .select2-container--default .select2-results__group {
                font-weight: 600
            }

            .select2-result-repository__avatar {
                float: left;
                width: 60px;
                margin-right: 10px
            }

            .select2-result-repository__avatar img {
                width: 100%;
                height: auto;
                border-radius: 2px
            }

            .select2-result-repository__statistics {
                margin-top: 7px
            }

            .select2-result-repository__forks,
            .select2-result-repository__stargazers,
            .select2-result-repository__watchers {
                display: inline-block;
                font-size: 11px;
                margin-right: 1em;
                color: #adb5bd
            }

            .select2-result-repository__forks .fa,
            .select2-result-repository__stargazers .fa,
            .select2-result-repository__watchers .fa {
                margin-right: 4px
            }

            .select2-result-repository__forks .fa.fa-flash::before,
            .select2-result-repository__stargazers .fa.fa-flash::before,
            .select2-result-repository__watchers .fa.fa-flash::before {
                content: "\f0e7";
                font-family: 'Font Awesome 5 Free'
            }

            .select2-results__option--highlighted .select2-result-repository__forks,
            .select2-results__option--highlighted .select2-result-repository__stargazers,
            .select2-results__option--highlighted .select2-result-repository__watchers {
                color: rgba(255, 255, 255, .8)
            }

            .select2-result-repository__meta {
                overflow: hidden
            }

    </style>
    
@endpush

