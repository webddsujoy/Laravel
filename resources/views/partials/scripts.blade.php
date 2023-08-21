@include('partials.config')
<script src="{{asset('/assets/admin')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/assets/admin')}}/js/common/custom.js"></script>
<script src="{{asset('/assets/admin')}}/js/common/auth.js"></script>
<script src="{{asset('/assets/admin')}}/js/common/guard.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/ladda_loader/jquery.buttonLoader.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('/assets/admin')}}/dist/js/adminlte.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="{{asset('/assets/admin')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('/assets/admin')}}/dist/js/demo.js"></script>
<script src="{{asset('/assets/admin')}}/dist/js/pages/dashboard2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('/assets/admin')}}/js/custom/logout.js"></script>
<script>
    ifNotAuthanticate();
    getProfileDetails();
</script>

@yield('scripts')