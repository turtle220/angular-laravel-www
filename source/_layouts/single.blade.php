<!DOCTYPE html>
<html lang="en">
<head>
    @include('_partials.head')
</head>
<body>
    @include('_partials.header')
    <br><br>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3"></div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                @yield('body')
            </div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3"></div>
        </div>
    </div>
    @include('_partials.footer')

</body>
</html>
