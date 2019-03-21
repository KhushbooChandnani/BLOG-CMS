<?php
    ob_start();
    require_once("includes/bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASEURL;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASEURL;?>css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php
        require_once("includes/layouts/navigation.php");
    ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <?php
//            Helper::sectionYield("blogs");
          require_once("includes/layouts/blogs.php");
        ?>

        <!-- Sidebar Widgets Column -->
        <?php
          require_once("includes/layouts/sidebar.php");
        ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
            Helper::sectionYield("footer");
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo BASEURL;?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
