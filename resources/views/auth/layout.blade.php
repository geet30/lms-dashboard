@extends('base.base')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication-->
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset(theme()->getIllustrationUrl('14.png')) }})">

            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ $theme->getPageUrl('') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo.svg') }}" class="h-45px"/>
                </a>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    @include('partials.flash.message')
                    {{ $slot }}
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication-->
    </div>
@endsection
@section('scripts')
    <!-- Prevent browser back button -->
    <script src="/custom/js/prevent.js"></script>
    @include('partials.flash.toast')
@endsection
