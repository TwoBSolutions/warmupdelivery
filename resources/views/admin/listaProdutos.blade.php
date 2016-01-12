@include('admin.layout.header')
<body>
    <section class="body">
        <!-- start: header -->
        @include('admin.layout.topo')
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('admin.layout.sidebar')
            <!-- end: sidebar -->

            <!-- start: page -->
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <section class="panel">
                        <div class="panel-body">

asdf
                        </div>
                        <!-- end: page -->
                    </section>
                </div>

            </section>
            <!-- Vendor -->
          	@include('admin.layout/scripts_master')

            <!-- Specific Page Vendor -->
            <script src="/admin/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
            <script src="/admin/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
            <script src="/admin/assets/vendor/jquery-appear/jquery.appear.js"></script>
            <script src="/admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
            <script src="/admin/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
            <script src="/admin/assets/vendor/flot/jquery.flot.js"></script>
            <script src="/admin/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
            <script src="/admin/assets/vendor/flot/jquery.flot.pie.js"></script>
            <script src="/admin/assets/vendor/flot/jquery.flot.categories.js"></script>
            <script src="/admin/assets/vendor/flot/jquery.flot.resize.js"></script>
            <script src="/admin/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
            <script src="/admin/assets/vendor/raphael/raphael.js"></script>
            <script src="/admin/assets/vendor/morris/morris.js"></script>
            <script src="/admin/assets/vendor/gauge/gauge.js"></script>
            <script src="/admin/assets/vendor/snap-svg/snap.svg.js"></script>
            <script src="/admin/assets/vendor/liquid-meter/liquid.meter.js"></script>
            <script src="/admin/assets/vendor/jqvmap/jquery.vmap.js"></script>
       

            <!-- Theme Base, Components and Settings -->
            <script src="/admin/assets/javascripts/theme.js"></script>

            <!-- Theme Custom -->
            <script src="/admin/assets/javascripts/theme.custom.js"></script>

            <!-- Theme Initialization Files -->
            <script src="/admin/assets/javascripts/theme.init.js"></script>
            <!-- Examples -->
            <script src="/admin/assets/javascripts/dashboard/examples.dashboard.js"></script>
        </body>
    </html>