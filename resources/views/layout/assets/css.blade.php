<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/boxicons.css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/flag-icons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/flatpickr/flatpickr.css" />

<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('admin') }}/assets/vendor/js/helpers.js"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('admin') }}/assets/vendor/js/template-customizer.js"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('admin') }}/assets/js/config.js"></script>




@yield('injected-css')
