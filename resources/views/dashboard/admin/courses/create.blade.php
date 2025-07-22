@extends('dashboard.master')

@section('title', 'Add Course')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Course</h4>
                <p class="">Here You Will Add New Course.</p>

                {{-- Start Form --}}
                <form id="courseAdd" action="" method="post" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Course Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="course_name" value="" id="example-text-input">
                                </div>
                            </div>
                            
                            
                          
                        
                            <div class="form-group row">
                                <label for="example-file-input" class="col-md-2 col-form-label">Photo</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="photo" id="image-input">
                                </div>
                            </div>
                            {{-- Submit Button --}}
                            <div class="row mb-3 align-items-center mt-5">
                                <div class="col-md-3 text-md-end"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add Course</button>
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
   
@endpush
