   <!-- container-scroller -->
   <!-- plugins:js -->
   <script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
   <!-- endinject -->
   <!-- Plugin js for this page -->
   <script src="{{ asset('assets/admin/vendors/chart.js/chart.umd.js') }}"></script>
   <script src="{{ asset('assets/admin/js/data-table.js') }}"></script>
   <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
   {{-- <script src="{ asset('assets/admin/js/off-canvas.js') }}"></script>
      <script src="assets/js/dataTables.select.min.js"></script> --}}
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('assets/admin/js/template.js') }}"></script>
   <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
   <script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
   <!-- endinject -->
   <!-- Custom js for this page-->
   <script src="{{ asset('assets/admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
   <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
   <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
   <!-- End custom js for this page-->

   <script>
       @session('error')
       toastr.options.timeOut = 10000;
       toastr.success("{{ Session::get('error') }}");
       @endsession
   </script>
   </body>

   </html>
