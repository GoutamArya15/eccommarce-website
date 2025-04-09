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
       toastr.options = {
           "closeButton": true,
           "debug": false,
           "newestOnTop": true,
           "progressBar": true,
           "positionClass": "toast-top-right",
           "preventDuplicates": true,
           "onclick": null,
           "showDuration": "300",
           "hideDuration": "1000",
           "timeOut": "5000",
           "extendedTimeOut": "1000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut"
       }
       @if (session('success'))
           toastr.success("{{ session('success') }}");
       @elseif (session('error'))
           toastr.error("{{ session('error') }}");
       @elseif (session('info'))
           toastr.info("{{ session('info') }}");
       @elseif (session('warning'))
           toastr.warning("{{ session('warning') }}");
       @endif
   </script>

   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   </body>

   </html>
