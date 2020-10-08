<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]-->
<html lang="en">
<head>  
  <!-- script meta dll -->
  <?php include 'components/header-scripts.php';?>  

</head>
<body>

<header>  
  <!-- header -->
  <?php include 'components/header-area.php';?>
</header>

<!-- nav -->
<?php include 'components/navbar.php';?>
  
  <?php include 'main/sticky-kuping.php';?> 

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->           

      <!-- left sidebar   --> 
      <?php //include 'main/left-sidebar.php';?>   
      <!-- main content --> 
      <?php include 'views/read.php';?>      
      <!-- right sidebar --> 
      <?php include 'main/right-sidebar.php';?>

    </div><!-- /.row utama -->
    
  </div><!-- /.container 1 -->

  <!-- container section 2 -->
  <div class="container">  
    <!-- section banner horizontal --> 
    <?php include 'components/banner-hor.php';?>
    <!-- section 3 kategori -->      
    <?php include 'components/below-cat.php';?>
  </div><!-- container section 2 -->

  <!-- Footer -->
  <footer class="pt-3 bg-dark footer-line">  
  <?php include 'components/footer.php';?>
  </footer>


  <!-- javascript --> 
  <?php include 'components/footer-scripts.php';?> 
</body>
</html>