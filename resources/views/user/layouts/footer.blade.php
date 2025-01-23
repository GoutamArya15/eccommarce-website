<footer class="py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                    <img src="{{ asset('assets/images/logo.svg') }}" width="240" height="70" alt="logo">
                    <div class="social-links mt-3">
                        <ul class="d-flex list-unstyled gap-2">
                            <li>
                                <a href="#" class="btn btn-outline-light">
                                    <svg width="16" height="16">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-light">
                                    <svg width="16" height="16">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-light">
                                    <svg width="16" height="16">
                                        <use xlink:href="#youtube"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-light">
                                    <svg width="16" height="16">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-light">
                                    <svg width="16" height="16">
                                        <use xlink:href="#amazon"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-menu">
                    <h5 class="widget-title">Organic</h5>
                    <ul class="menu-list list-unstyled">
                        <li class="menu-item">
                            <a href="#" class="nav-link">About us</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Conditions </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Our Journals</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Careers</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Affiliate Programme</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Ultras Press</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-menu">
                    <h5 class="widget-title">Quick Links</h5>
                    <ul class="menu-list list-unstyled">
                        <li class="menu-item">
                            <a href="#" class="nav-link">Offers</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Discount Coupons</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Stores</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Track Order</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Shop</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Info</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-menu">
                    <h5 class="widget-title">Customer Service</h5>
                    <ul class="menu-list list-unstyled">
                        <li class="menu-item">
                            <a href="#" class="nav-link">FAQ</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Privacy Policy</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Returns & Refunds</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Cookie Guidelines</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="nav-link">Delivery Information</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                    <h5 class="widget-title">Subscribe Us</h5>
                    <p>Subscribe to our newsletter to get updates about our grand offers.</p>
                    <form class="d-flex mt-3 gap-0" action="index.html">
                        <input class="form-control rounded-start rounded-0 bg-light" type="email"
                            placeholder="Email Address" aria-label="Email Address">
                        <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
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
