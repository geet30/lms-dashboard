//
// 3rd-Party Plugins JavaScript Includes
//

module.exports = [

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////  Mandatory Plugins Includes(do not remove or change order!)  ////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    // Jquery - jQuery is a popular and feature-rich JavaScript library. Learn more: https://jquery.com/
    'node_modules/jquery/dist/jquery.js',

    // Popper.js - Tooltip & Popover Positioning Engine used by Bootstrap. Learn more: https://popper.js.org
    'node_modules/@popperjs/core/dist/umd/popper.js',

    // Bootstrap - The most popular framework uses as the foundation. Learn more: http://getbootstrap.com
    'node_modules/bootstrap/dist/js/bootstrap.min.js',

    // Moment - Parse, validate, manipulate, and display dates and times in JavaScript. Learn more: https://momentjs.com/
    'node_modules/moment/min/moment-with-locales.min.js',

    // Wnumb - Number & Money formatting. Learn more: https://refreshless.com/wnumb/
    'node_modules/wnumb/wNumb.js',

    // ES6-Shim - ECMAScript 6 compatibility shims for legacy JS engines.  Learn more: https://github.com/paulmillr/es6-shim
    'node_modules/es6-shim/es6-shim.js',

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
///  Optional Plugins Includes(you can remove or add)  ///////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    // Select2 - Select2 is a jQuery based replacement for select boxes: https://select2.org/
    'node_modules/select2/dist/js/select2.full.js',
    'resources/assets/core/js/vendors/plugins/select2.init.js',

    // FormValidation - Best premium validation library for JavaScript. Zero dependencies. Learn more: https://formvalidation.io/
    'resources/assets/core/plugins/formvalidation/dist/js/FormValidation.full.min.js',
    'resources/assets/core/plugins/formvalidation/dist/js/plugins/Bootstrap5.min.js',

    // Bootstrap Maxlength - This plugin integrates by default with Twitter bootstrap using badges to display the maximum length of the field where the user is inserting text: https://github.com/mimo84/bootstrap-maxlength
    'node_modules/bootstrap-maxlength/src/bootstrap-maxlength.js',
    'resources/assets/core/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js',

    // Date Range Picker - A JavaScript component for choosing date ranges, dates and times: https://www.daterangepicker.com/
    'node_modules/bootstrap-daterangepicker/daterangepicker.js',

    // Inputmask - is a javascript library which creates an input mask: https://github.com/RobinHerbots/Inputmask
    'node_modules/inputmask/dist/inputmask.js',
    'node_modules/inputmask/dist/bindings/inputmask.binding.js',

    // noUiSlider - is a lightweight range slider with multi-touch support and a ton of features. It supports non-linear ranges, requires no external dependencies: https://refreshless.com/nouislider/
    // 'node_modules/nouislider/dist/nouislider.min.js',

    // The autosize - function accepts a single textarea element, or an array or array-like object (such as a NodeList or jQuery collection) of textarea elements: https://www.jacklmoore.com/autosize/
    // 'node_modules/autosize/dist/autosize.min.js',

    // Clipboard - Copy text to the clipboard shouldn't be hard. It shouldn't require dozens of steps to configure or hundreds of KBs to load: https://clipboardjs.com/
    // 'node_modules/clipboard/dist/clipboard.min.js',

    // Toastr - is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended: https://github.com/CodeSeven/toastr
    'resources/assets/core/plugins/toastr/build/toastr.min.js',

    // Apexcharts - modern charting library that helps developers to create beautiful and interactive visualizations for web pages: https://apexcharts.com/
    'node_modules/apexcharts/dist/apexcharts.min.js',

    // Bootstrap Session Timeout - Session timeout and keep-alive control with a nice Bootstrap warning dialog: https://github.com/orangehill/bootstrap-session-timeout
    'resources/assets/core/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',

    // ES6 Promise Polyfill - This is a polyfill of the ES6 Promise: https://github.com/lahmatiy/es6-promise-polyfill
    'node_modules/es6-promise-polyfill/promise.min.js',

    // Sweetalert2 - a beautiful, responsive, customizable and accessible (WAI-ARIA) replacement for JavaScript's popup boxes: https://sweetalert2.github.io/
    'node_modules/sweetalert2/dist/sweetalert2.min.js',
    'resources/assets/core/js/vendors/plugins/sweetalert2.init.js',

    // CountUp.js - is a dependency-free, lightweight JavaScript class that can be used to quickly create animations that display numerical data in a more interesting way.
    'node_modules/countup.js/dist/countUp.umd.js',

    // Tiny slider - for all purposes, inspired by Owl Carousel.
    // 'node_modules/tiny-slider/dist/min/tiny-slider.js',

    // A lightweight script to animate scrolling to anchor links
    'node_modules/smooth-scroll/dist/smooth-scroll.js',

    // Axios - Promise based HTTP client for the browser and node.js
    'node_modules/axios/dist/axios.js',
    'resources/assets/core/js/custom/axios/axios.init.js',

];

// window.axios.defaults.headers.common = {
// 'X-Requested-With': 'XMLHttpRequest',
// 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
// };
