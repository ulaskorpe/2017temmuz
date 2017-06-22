<!DOCTYPE html>
<?php

//var_dump($_REQUEST);
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
    <div style="width: 100%;margin:auto;">

       <div style="min-height: 1000px; width: 70%;border: 0px solid black;margin-left: 300px;">
           @yield('goster') 
    </div>
    </div>
    
    <!-- ////////////////////////////////////////////////////////////////////////////-->




    @include('js')
  </body>
</html>