<!DOCTYPE html>
<html lang="en">


<head>

  <?php

    //Meta
    include_once('structure/header/meta.php');

    //Favicon
    include_once('structure/header/favicon.php');

    //Title
    include_once('structure/header/title.php');

    //CSS
    include_once('structure/header/style.php');

  ?>

</head>

<!-- body -->
<body data-spy="scroll" data-target=".navbar" data-offset="90">

  <?php

    //Loader
    include_once('structure/content/loader/index.php');

    //Header
    include_once('structure/content/header/index.php');

  ?>

  <!-- page piling -->
  <div id="pagepiling">

    <?php

      //Page 1
      //Introduction
      include_once('structure/content/body/introduction/index.php');

      //Page 2
      //About
      include_once('structure/content/body/about/index.php');

      //Page 3
      //Expertise
      include_once('structure/content/body/expertise/index.php');

      //Page 4
      //Timeline
      include_once('structure/content/body/timeline/index.php');

      //Page 5
      //Portfolio
      include_once('structure/content/body/portfolio/index.php');

      //Page 6
      //Contact
      include_once('structure/content/body/contact/index.php');

      //Application Programming
      //include_once('structure/content/body/programming_application.php');

      //Database
      //include_once('structure/content/body/database.php');

      //Database
      //include_once('structure/content/body/framework_web.php');

    ?>

  </div>
  <!-- end page piling -->

  <!-- START ANIMATED CURSOR -->
  <div id="aimated-cursor">
      <div id="cursor">
          <div id="cursor-loader"></div>
      </div>
  </div>
  <!-- END ANIMATED CURSOR -->

  <?php

    //Script
    include_once('structure/footer/script.php');

  ?>



</body>
<!-- end body -->

</html>
