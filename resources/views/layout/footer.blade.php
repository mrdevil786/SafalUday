</div>
<!-- CONTAINER END -->
</div>
</div>
<!--app-content close-->

</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <span id="year"></span> <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>.
                Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> NRS
                    Enterprise </a> All rights
                reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('../assets/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('../assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('../assets/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('../assets/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('../assets/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('../assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('../assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('../assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('../assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/rounded-barchart.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('../assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('../assets/js/select2.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('../assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('../assets/plugins/apexchart/irregular-data-series.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('../assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/dashboard.sampledata.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('../assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('../assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('../assets/js/typehead.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('../assets/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('../assets/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('../assets/js/custom.js') }}"></script>

<!-- FORMVALIDATION JS -->
<script src="{{ asset('../assets/js/form-validation.js') }}"></script>

<!-- INTERNAL Notifications js -->
<script src="{{ asset('../assets/plugins/notify/js/jquery.growl.js') }}"></script>

@yield('custom-script')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var alert = document.getElementById('mainPageAlert');
            if (alert) {
                alert.remove();
            }
        }, 5000);
    });
</script>

</body>

</html>
