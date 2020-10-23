<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->    

      <div class="col-lg-8 col-sm-12 mt-3">

      <!-- breadcrumb -->
      <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
        <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
        / <a class="sub-head-18 active text-uppercase" href="<?php echo site_url($tmeta['slug']); ?>"><?php echo $tmeta['tag']; ?></a>          
      </nav><!-- breadcrumb -->

        <h4 class="pt-2 mml-1 text-uppercase">
          <span data-title="LAINNYA >>"><i class="far fa-newspaper"></i>&nbsp;<?php echo $tmeta['tag']; ?></span>
        </h4>

      <div class="row">
        <!-- list tag -->

       <?php for($i = 0; $i < count($tag); $i++) { ?>
                        <?php
                          $dc = content_time($tag[$i]['post_date_created']);
                          $dp = id_time($tag[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $tag[$i]['post_id'] . '/' . $tag[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $tag[$i]['post_id'] . '/';
                        ?>
        <div class="col-lg-4 col-sm-4 p-1">
            <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-sm shade float-left" src="<?php echo $url_img . $tag[$i]['post_image_thumb']; ?>"></a>
        </div>
        <div class="col-lg-8 col-sm-8 pl-2 mt-1">            
          <span class="sub-head-cat sub-head-box"><?php echo $tmeta['tag']; ?></span> 
          <span class="sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
          <p class="mt-2">
            <a class="sub-head-18" href="<?php echo $url; ?>"><?php echo $tag[$i]['post_title']; ?></a>
          </p>
        </div><!-- number 1 -->
        <div class="col-lg-12"><hr class="lb-0"></div>        
        <?php } ?>       
                  

      </div><!-- list berita -->

        <?php if ($page['links'] != '') { ?>          
        <?php echo $page['links']; ?>
        <?php } ?>
             

    </div>

      <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 