<!doctype html>
<html lang="en">
<head>
    @include('partials.meta')

    @include('partials.head-links')
    @include('partials.analytics')
    @include('partials.clarity')
    <title>Thomaz Machado</title>

    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        <!--hero section start-->
        @include('components.hero')
        <!--hero section end-->

        <!--Portfolio start-->
        @include('components.portfolio')
        <!--Portfolio end-->

        <!--My skill start-->
        @include('components.skill')
        <!--My skill end-->

        <!--About me start-->
        @include('components.about')
        <!--About me end-->

        <!--Brand help start-->
{{--        @include('components.brands')--}}
        <!--Brand help end-->

        <!--Working together start-->
        @include('components.contact')
        <!--Working together end-->
    </main>

    @include('partials.footer')
    @include('partials.btn-scroll-top')
    @include('partials.scripts')

    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper.js') }}"></script>
    <script src="{{ asset('vendor/scrollcue/scrollCue.min.js') }}"></script>
    <script src="{{ asset('js/scrollcue.js') }}"></script>
</body>
</html>
