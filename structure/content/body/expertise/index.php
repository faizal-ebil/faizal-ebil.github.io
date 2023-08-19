

<!-- expertise -->
<section class="section bg-skills" id="page3">

  <!-- background overlay -->
  <div class="bg-overlay bg-black"></div>
  <!-- end background overlay -->

  <!-- container -->
  <div class="container h-100">

    <!-- row -->
    <div class="row h-100">

      <!-- col -->
      <div class="col-12 my-auto">

        <!-- row -->
        <div class="row">

          <!-- expertise -->
          <div id="expertise_slider" class="owl-carousel owl-theme">

            <?php

              //Programming Web
              include_once('sub/programming_web.php');

              //Programming Mobile
              include_once('sub/programming_mobile.php');

              //Programming Application
              include_once('sub/programming_application.php');

            ?>

          </div>
          <!-- end expertise -->

        </div>
        <!-- end row -->

      </div>
      <!-- end col -->

    </div>
    <!-- end row -->

  </div>
  <!-- end container -->

</section>
<!-- end expertise -->
