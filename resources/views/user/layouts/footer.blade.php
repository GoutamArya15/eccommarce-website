<div id="footer-bottom">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>© 2024 Organic. All rights reserved.</p>
            </div>

            <div class="col-md-6 credit-link text-start text-md-end">
                <select id="languageSwitcher" onchange="changeLanguage(this.value)">
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    <option value="pb" {{ app()->getLocale() == 'pb' ? 'selected' : '' }}>pubnjabi</option>
                </select>
                <p>HTML Template by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distributed By <a
                        href="https://themewagon.com">ThemeWagon</a> </p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script> --}}
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
{{-- toaster css --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- toaster css --}}
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
<script>
    function changeLanguage(locale) {
        console.log(window.location.href = '{{ route('change.language', '') }}/' + locale);
        window.location.href = '{{ route('change.language', '') }}/' + locale;
    }
</script>
