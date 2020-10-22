<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>
  <div class="container"><!-- Page 1 -->  

    <div class="row"><!-- main Column -->    
      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

   <!-- breadcrumb -->
    <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
      <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
     / <a class="sub-head-18 text-uppercase active" href="<?php echo site_url('foto'); ?>">FOTO</a>          
   </nav><!-- breadcrumb -->

  <section class="mt-3">
    <div class="row">
       <?php for($i = 0; $i < count($photo); $i++) { ?>
                    <?php
                      $dc = content_time($photo[$i]['post_date_created']);
                      $dp = id_time($photo[$i]['post_date']);

                      $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . $photo[$i]['post_name'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                    ?>
      
        <div class="col-lg-6 col-md-6 col-sm-6">
        <a href="<?php echo $url; ?>">
        <img class="img-fluid post-img shade" src="<?php echo $url_img . $photo[$i]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';"></a>
        <span class="date-posted"> <?php echo $dp; ?></span>
        <h5>
          <a href="<?php echo $url; ?>"><?php echo $photo[$i]['post_title']; ?></a>
        </h5>
      
       </div>
      <?php } ?>


    </div>
  </section>

  <?php if ($page['links'] != '') { ?>
    <div class="row">
      <div class="col-md-12">
        <ul>
          <?php echo $page['links']; ?>
        </ul>
      </div>
    </div>
    <?php } ?>

</div><!-- end col read -->

      <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 