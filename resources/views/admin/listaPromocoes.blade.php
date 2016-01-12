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