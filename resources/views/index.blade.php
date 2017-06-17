<!DOCTYPE html>
<?php
define('url','http://localhost:8080/orangetech/public');
?>
<html lang="en" data-textdirection="LTR" class="loading">
  @include('head')
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

@include('loader')
    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->
  

@include('nav')


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
@include('sol-menu')
    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body" style="min-height: 1000px"><!-- project stats -->

           @yield('goster') 

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


@include('footer')

    @include('js')
  </body>
</html>