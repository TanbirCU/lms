@extends('dashboard.master')

@section('title', 'Edit Module')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Module for a Course</h4>
                <p class="">Here You Can Update Module Information.</p>

                {{-- Start Form --}}
                <form id="moduleEdit" action="{{ route('admin.modules.update', $module->id) }}" method="post" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            {{-- Course Selection --}}
                            <div class="form-group row">
                                <label for="course-select" class="col-md-2 col-form-label">Select Course</label>
                                <div class="col-md-10">
                                    <select class="form-control select2-multiple" name="course_id" id="course-select" required>
                                        <option value="">Select a course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}" {{ $module->course_id == $course->id ? 'selected' : '' }}>
                                                {{ $course->course_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Module Name --}}
                            <div class="form-group row">
                                <label for="module-name-input" class="col-md-2 col-form-label">Module Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="module_name" value="{{ $module->module_name }}" id="module-name-input">
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="form-group row">
                                <label for="example-textarea-input" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description" id="example-textarea-input" rows="3">{{ $module->description }}</textarea>
                                </div>
                            </div> 

                            {{-- Position --}}
                            <div class="form-group row">
                                <label for="position-input" class="col-md-2 col-form-label">Position</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="position" value="{{ $module->position }}" id="position-input">
                                </div>
                            </div> 
                            
                            {{-- Submit Button --}}
                            <div class="row mb-3 align-items-center mt-5">
                                <div class="col-md-3 text-md-end"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update Module</button>
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
    $(document).ready(function () {
        $('.select2-multiple').select2({
            placeholder: "Select an option",
            allowClear: true
        });

        ajaxFormSubmitJQ('#moduleEdit', {
            url: "{{ route('admin.modules.update', $module->id) }}",
            method: 'POST', // will be overridden by @method('PUT')
            onSuccess: function (response) {
                window.location.href = "{{ route('admin.modules.index') }}";
                toastr.success(response.message || 'Module updated successfully!');
            }
        });
    });
</script>
@endpush
