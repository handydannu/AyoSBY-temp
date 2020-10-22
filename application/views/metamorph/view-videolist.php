<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->    

    <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->
     <!-- breadcrumb -->
    <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
      <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
     / <a class="sub-head-18 text-uppercase active" href="<?php echo site_url('video'); ?>">VIDEO</a>          
   </nav><!-- breadcrumb -->

       <section class="mt-3">
    <div class="row">
       <?php for($i = 0; $i < count($video); $i++) { ?>
                    <?php
                      $dc = content_time($video[$i]['date']);
                      $dp = id_time($video[$i]['date']);

                      $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/' . $video[$i]['name'];
                      $url_img = 'http://i.ytimg.com/vi/' . $video[$i]['video'] . '/hqdefault.jpg';
                    ?>
      
        <div class="col-lg-6 col-md-6 col-sm-6">
        <a href="<?php echo $url; ?>">
        <img class="img-fluid post-img shade" src="<?php echo $url_img; ?>">
        <span class="date-posted" style="color: #000;"> <?php echo $dp; ?></span>
        <h5>
          <?php echo $video[$i]['title']; ?>
        </h5>
      </a>
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