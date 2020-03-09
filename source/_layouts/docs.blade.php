<!DOCTYPE html>
<html lang="en">
<head>
    @include('_partials.head')
</head>
<body>
    @include('_partials.header')

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2 mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone"></div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2">
                <div class="sidebar">
                    @include('_partials.sidebar')
                </div>
            </div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                <div class="docs">
                    <div id="deprecated">Unfortunately, this project has been discontinued.<br>
                    A member of the community has suggested the following <a href="https://medium.com/@rbrisita/laravel-and-angular-automated-800f342ab3cf">replacement</a>.<br>
                    This replacement is not affiliated with laravel-angular.io</div>
                    @yield('body')
                </div>
            </div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
        </div>
    </div>

    @include('_partials.footer')
</body>
</html>
