@include('admin.layout.header')
<body ng-controller="MainCtrl">
    <section class="body">
        <!-- start: header -->
        @include('admin.layout.topo')
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('admin.layout.sidebar')

            <section role="main" class="content-body">
            <header class="page-header">
                <h2>
                @yield('titlepage')
                </h2>
                {{-- <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.html">
                            <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Dashboard</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                </div> --}}
            </header>
            <!-- end: sidebar -->

            <!-- start: page -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <section class="panel">
                        <div class="panel-body">

							@yield('content')
                        </div>
                        <!-- end: page -->
                    </section>
                </div>

            </section>
            <!-- Vendor -->
          	@include('admin.layout/scripts_master')

            <!-- Specific Page Vendor -->
            <script src="/admin/assets/angular/js/angular.min.js"></script>
            <script src="http://maps.google.com/maps/api/js"></script>
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
            <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
            <script src="/admin/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
            <script src="/admin/assets/vendor/raphael/raphael.js"></script>
            <script src="/admin/assets/vendor/morris/morris.js"></script>
            <script src="/admin/assets/vendor/gauge/gauge.js"></script>
            <script src="/admin/assets/vendor/snap-svg/snap.svg.js"></script>
            <script src="/admin/assets/vendor/liquid-meter/liquid.meter.js"></script>
            <script src="/global/js/ng-map.min.js"></script>
            <script src="/admin/assets/vendor/angular-loading-bar-master/build/loading-bar.min.js"></script>
            <script src="/admin/assets/javascripts/mask.js"></script>
            <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>


      
            <script src="/admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>



          <!-- Examples -->
          <script src="/admin/assets/javascripts/forms/examples.advanced.form.js" /></script>
       

            <!-- Theme Base, Components and Settings -->
            <script src="/admin/assets/javascripts/theme.js"></script>

            <!-- Theme Custom -->
            <script src="/admin/assets/javascripts/theme.custom.js"></script>

            <!-- Theme Initialization Files -->
            <script src="/admin/assets/javascripts/theme.init.js"></script>
            <!-- Examples -->
            <script src="/admin/assets/javascripts/dashboard/examples.dashboard.js"></script>

            <script src="/admin/assets/angular/app.js"></script>
            <script src="/admin/assets/angular/controllers/MainCtrl.js"></script>
            <script src="/admin/assets/angular/controllers/CategoriaCtrl.js"></script>
            @yield('page_script')
            
            <script>
           jQuery(document).ready(function($) {
            $(function() {
                $('.toggleBtn').bootstrapToggle({
                  on: 'Sim',
                  off: 'Não'
                });
              })

              $(document).ready(function(){
                $('.datatable').DataTable();
            });
               $('.date').mask('00/00/0000');
                  $('.time').mask('00:00:00');
                  $('.date_time').mask('00/00/0000 00:00:00');
                  $('.cep').mask('00000-000');
                  $('.phone').mask('0000-0000');
                  $('.phone_with_ddd').mask('(00) 0000-0000');
                  $('.phone_us').mask('(000) 000-0000');
                  $('.mixed').mask('AAA 000-S0S');
                  $('.cpf').mask('000.000.000-00', {reverse: true});
                  $('.money2').mask('000.000.000.000.000,00', {reverse: true});
                  $('.money').mask("#.##0,00", {reverse: true});
                  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                    translation: {
                      'Z': {
                        pattern: /[0-9]/, optional: true
                      }
                    }
                  });
                  $('.ip_address').mask('099.099.099.099');
                  $('.percent').mask('##0,00%', {reverse: true});
                  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
                  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
                  $('.fallback').mask("00r00r0000", {
                      translation: {
                        'r': {
                          pattern: /[\/]/, 
                          fallback: '/'
                        }, 
                        placeholder: "__/__/____"
                      }
                    });
                  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
           });
                  
         
            </script>

        </body>
    </html>