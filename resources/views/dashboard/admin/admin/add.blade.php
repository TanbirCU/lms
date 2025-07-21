@extends('dashboard.master')

@section('title', 'Add Admin')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Admin</h4>
                <p class="">Here You Will Add New Admin.</p>

                {{-- Start Form --}}
                <form id="adminAdd" action="" method="post" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="name" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email" value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Mobile</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="mobile" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10 input-group">
                                    <input class="form-control" type="password" name="password" id="example-password-input">
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="togglePassword('example-password-input', this)">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="address" value="" id="example-text-input">
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
                                    <button type="submit" class="btn btn-primary">Add Admin</button>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script>
        // Initialize image preview
        document.addEventListener('DOMContentLoaded', function () {
            initImagePreview('#image-input');
        });
        function togglePassword(fieldId, iconElement) {
            const field = document.getElementById(fieldId);
            const icon = iconElement.querySelector('i');

            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
       $(document).ready(function () {
            ajaxFormSubmitJQ('#adminAdd', {
                url: "{{ route('admin.admin_adds.store') }}", // ✅ Or use '/teacher/add'
                method: 'POST',
                onSuccess: function (response) {
                    toastr.success(response.message || 'Admin added successfully!');
                    adminAdd.reset();
                    window.location.href = "{{ route('admin.admin_adds.index') }}";
                }
            });
        });
    </script>
@endpush
