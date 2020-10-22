<!-- breaking news ticker -->
<div class="col-md-12 mt-2"> 
    <?php $this->load->view($this->config->item('template_name') . 'headline-newsticker'); ?>
</div>

<?php
      $dc = content_time($headline[0]['post_date_created']);
      $dp = id_time($headline[0]['post_date']);

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $headline[0]['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[0]['post_id'] . '/';
    ?>
<div class="col-md-6 mt-2 pt-2 pr-2"><!-- big picture -->
  <a href="<?php echo $url; ?>" class="card bg-dark text-white shadow-sm border-0 rounded-0">
    <img class="img-fluid headline-img" src="<?php echo $url_img . $headline[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
    <div class="card-img-overlay headline-grid d-flex flex-column align-items-start">
        <p class="sub-head-20 mt-2 text-white"><?php echo $headline[0]['post_title']; ?></p>                    
        <span class="badge badge-hl font-weight-normal mr-2 rounded-0"><?php echo substr($headline[0]['post_date'], 11, 5).' WIB'?></span>
    </div>
   </a>
</div><!-- /big picture -->

<div class="col-md-6 mt-2"><!-- small picture-->
    <div class="row">
      <div class="col-md-6 pl-1 pr-1">
      <?php for($i = 1; $i < 3; $i++) { ?>
      <?php
        $dc = content_time($headline[$i]['post_date_created']);
        $dp = id_time($headline[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $headline[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[$i]['post_id'] . '/';
      ?>
       <a href="<?php echo $url; ?>" class="card bg-dark text-white shadow-sm border-0 mt-2 rounded-0">
          <img class="img-fluid mx-auto d-block headline-img-med shade" src="<?php echo $url_img . $headline[$i]['post_image_content']; ?>">
          <div class="card-img-overlay headline-grid d-flex flex-column align-items-start">
              <p class="sub-head-16 text-white"><?php echo $headline[$i]['post_title']; ?></p>                    
              <span class="badge badge-hl font-weight-normal mr-2 rounded-0"><?php echo substr($headline[$i]['post_date'], 11, 5).' WIB'?></span>
          </div>
      </a>    
      <?php } ?>

      </div>

      <div class="col-md-6 pl-1">
             <?php for($i = 3; $i < 5; $i++) { ?>
      <?php
        $dc = content_time($headline[$i]['post_date_created']);
        $dp = id_time($headline[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $headline[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $headline[$i]['post_id'] . '/';
      ?>
       <a href="<?php echo $url; ?>" class="card bg-dark text-white shadow-sm border-0 mt-2 rounded-0">
          <img class="img-fluid mx-auto d-block headline-img-med shade" src="<?php echo $url_img . $headline[$i]['post_image_content']; ?>" alt="Card image cap">
          <div class="card-img-overlay headline-grid d-flex flex-column align-items-start">
              <p class="sub-head-16 text-white"><?php echo $headline[$i]['post_title']; ?></p>                    
              <span class="badge badge-hl font-weight-normal mr-2 rounded-0"><?php echo substr($headline[$i]['post_date'], 11, 5).' WIB'?></span>
          </div>
      </a>    
      <?php } ?>
      </div> 
 </div>  
</div><!-- eksperiment-->