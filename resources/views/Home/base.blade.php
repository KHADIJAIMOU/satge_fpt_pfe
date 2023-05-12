<!DOCTYPE html>
<html lang="zxx">
@include('Home.layouts.head')


<body id="Home">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- ================= HEADER ================= -->
    @include('Home.layouts.navbar')

    <!-- =============== HEADER END =============== -->

    <!-- ============ S-CROSSFIT-SLIDER ============ -->
    @yield("content")


    <!-- ================== FOOTER ================== -->
    



    <!-- ================== FOOTER ================== -->
    @include('Home.layouts.footer')

    <!-- ================ FOOTER END ================ -->



    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    @yield('scripts')

    <script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
    @if(session()->has('message'))
    toastr.success("{{ session()->get('message') }}");
    @endif

    
    </script> 
</body>


</html>