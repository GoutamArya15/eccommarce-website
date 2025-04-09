@include('admin.includes.header')
<div class="container-scroller">
    @include('admin.includes.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.includes.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.footer')
