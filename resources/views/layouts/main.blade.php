<!DOCTYPE html>
<html lang="en">
  <head>
    @include("layouts.head")
  </head>
  <body>
    <!-- navbar -->
    @include("layouts.nav");

    <!-- content -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          @include("layouts.left_content");
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
         
          @yield("content")
          
        </div>
      </div>
    </div>

   @include("layouts.js_under")
  </body>
</html>