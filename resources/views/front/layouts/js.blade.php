<!-- JS here -->
    <script src="{{asset('/assets/front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/popper.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/one-page-nav-min.js')}}"></script>
    <script src="{{asset('/assets/front/js/slick.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/ajax-form.js')}}"></script>
    <script src="{{asset('/assets/front/js/wow.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('/assets/front/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/assets/front/js/plugins.js')}}"></script>
    <script src="{{asset('/assets/front/js/main.js')}}"></script>
    
    <!-- jQuery (required for Toastr) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @stack('js')

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000"
        };

        $(document).ready(function() {
            @if(session('message'))
                toastr.success("{{ session('message') }}");
            @endif

            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif
        });
    </script>