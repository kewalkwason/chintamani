<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body>
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      @include('admin.includes.header')
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          @include('admin.includes.sidebar')
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  @include('admin.includes.footer_script')
</body>

</html>
