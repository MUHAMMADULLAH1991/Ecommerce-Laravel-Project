<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin | Dashboard</title>
    @include('admin.includes.style')
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('admin.includes.header')
      <!--end::Header-->
      @include('admin.includes.sidebar')
      <!--begin::App Main-->
      @yield('content')
      <!--end::App Main-->
      @include('admin.includes.footer')
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
   @includeIf('admin.includes.script')
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
