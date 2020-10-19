<div class="row">
  <div class="col-md-4 col-sm-12 p-1 img-zoom"><!-- category 1 -->  
    <div class="headline-box"><i class="fas fa-globe-europe"></i> KABAR DUNIA</div> 
      <?php
      $dc = content_time($nasional[0]['post_date_created']);
      $dp = id_time($nasional[0]['post_date']);

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $nasional[0]['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[0]['post_id'] . '/';
    ?>
    <a href="<?php echo $url; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img . $nasional[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
    <div>
      <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
        <p class="sub-head-20">
          <?php echo $nasional[0]['post_title']; ?>
        </p>
    </div>

    <?php for($i = 1; $i < count($nasional); $i++) { ?>
      <?php
        $dc = content_time($nasional[$i]['post_date_created']);
        $dp = id_time($nasional[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $nasional[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[$i]['post_id'] . '/';
      ?>
      <div class="headline-sub">
        <span class="mt-0">
          <a class="sub-head-16" href="<?php echo $url; ?>"> <?php echo $nasional[$i]['post_title']; ?></a>
        </span>
      </div>       
    <?php } ?>
  </div><!-- category 1 -->

  <div class="col-md-4 col-sm-12 p-1 img-zoom"><!-- category 2 -->
    <div class="headline-box"><i class="fas fa-biking"></i> NASIONAL</div> 
    <?php
      $dc = content_time($internasional[0]['post_date_created']);
      $dp = id_time($internasional[0]['post_date']);

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $internasional[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $internasional[0]['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $internasional[0]['post_id'] . '/';
    ?>
    <a href="<?php echo $url; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img . $internasional[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
    <div>
      <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
        <p class="sub-head-20">
          <?php echo $internasional[0]['post_title']; ?>
        </p>
    </div>

    <?php for($i = 1; $i < count($internasional); $i++) { ?>
      <?php
        $dc = content_time($internasional[$i]['post_date_created']);
        $dp = id_time($internasional[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $internasional[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $internasional[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $internasional[$i]['post_id'] . '/';
      ?>
      <div class="headline-sub">
        <span class="mt-0">
          <a class="sub-head-16" href="<?php echo $url; ?>"> <?php echo $internasional[$i]['post_title']; ?></a>
        </span>
      </div>       
    <?php } ?>
  </div><!-- category 2 -->

  <div class="col-md-4 col-sm-12 p-1 img-zoom"><!-- category 3 -->
    <div class="headline-box"><i class="fas fa-map-signs"></i> TREN BISNIS</div>
    <?php
      $dc = content_time($bisnis[0]['post_date_created']);
      $dp = id_time($bisnis[0]['post_date']);

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $bisnis[0]['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[0]['post_id'] . '/';
    ?>
    <a href="<?php echo $url; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img . $bisnis[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
    <div>
      <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
        <p class="sub-head-20">
          <?php echo $bisnis[0]['post_title']; ?>
        </p>
      </div>
    </a>

    <?php for($i = 1; $i < count($bisnis); $i++) { ?>
      <?php
        $dc = content_time($bisnis[$i]['post_date_created']);
        $dp = id_time($bisnis[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $bisnis[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[$i]['post_id'] . '/';
      ?>
      <div class="headline-sub">
        <span class="mt-0">
          <a class="sub-head-16" href="<?php echo $url; ?>"> <?php echo $bisnis[$i]['post_title']; ?></a>
        </span>
      </div>       
    <?php } ?>
    </div>
</div>   <!-- section 3 dibawah -->