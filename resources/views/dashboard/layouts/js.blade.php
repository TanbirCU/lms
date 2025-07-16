{{-- from admin panel --}}
 <!-- JAVASCRIPT -->
<script src="{{ asset('/assets/admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('/assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets/admin/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('/assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('/assets/admin/js/pages/dashboard.init.js') }}"></script>
{{-- from admin panel --}}
<!-- Required datatable js -->
<script src="{{ asset('/') }}assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/jszip/jszip.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ asset('/') }}assets/admin/js/pages/datatables.init.js"></script>

{{-- Toaster Start --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

{{-- Toaster End --}}
<script>

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

</script>

 <script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'success') }}";
        switch(type){
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

{{-- sweetalert start --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
<script>
    function confirmDelete(categoryId) {
        // SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to undo this action!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                // Find the corresponding form by categoryId and submit it
                document.getElementById('deleteForm_' + categoryId).submit();
            }
        });
    }
</script>
{{-- sweetalert end --}}

<!-- Summernote js -->
<script src="{{ asset('/') }}assets/admin/libs/summernote/summernote-bs4.min.js"></script>
 <!-- Summernote js -->
 {{-- <script src="assets/libs/summernote/summernote-bs4.min.js"></script> --}}

<!-- init js -->
<script src="{{ asset('/') }}assets/admin/js/pages/form-editor.init.js"></script>
<!--tinymce js-->
<script src="{{ asset('/') }}assets/admin/libs/tinymce/tinymce.min.js"></script>


<script src="{{asset('/')}}assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/admin/libs/summernote/summernote-bs4.min.js"></script>



@stack('js')
