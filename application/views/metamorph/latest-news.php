<h4 class="pt-2 mml-1">
    <span data-title="LAINNYA >>"><i class="far fa-newspaper"></i> BERITA TERBARU</span>
</h4>

  <div class="row">
    <?php // _d($recent); ?>
      <?php foreach($recent as $r) { ?>
        <?php
          // error_reporting(E_ALL);
          $dc = content_time($r['post_date_created']);
          $dp = waktu_lalu($r['post_date'], true);

          // Define URL and URL Image
          $url      = '';
          $url_img  = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . '/';
          if($r['post_type'] == $this->config->item('post_type')['photo']) { // photo format: photos
            $url                    = site_url('view');
            $r['category_link']     = 'foto';
            $r['category_name']     = 'Foto';
            $icon                   = 'camera';
          } else if($r['post_type'] == $this->config->item('post_type')['video']) { // video format: video
            $url                    = site_url('watch');
            $url_img                = 'http://i.ytimg.com/vi/' . $r['post_image_content'] . '/';
            $r['post_image_thumb']  = 'hqdefault.jpg';
            $icon                   = 'video-camera';
          } else { // article format: article (set as default condition)
            $url    = site_url('read');
            $icon   = 'folder-open';
          }
          $url .= '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . '/' . $r['slug'];

          // _d($url_img . $r['post_image_thumb']);
        ?>
    <!-- list terbaru -->
        <div class="col-lg-5 col-sm-5 p-1">
            <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-sm shade float-left" src="<?php echo $url_img . $r['post_image_thumb'] ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" ></a>
        </div>
        <div class="col-lg-7 col-sm-7 pl-2 mt-1">            
          <span class="sub-head-cat"><a href="<?php echo site_url($r['category_link']); ?>" class="sub-head-box"><?php echo $r['category_name']; ?></a></span> 
          <span class="sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
          <p class="mt-2">
            <a class="sub-head-18" href="<?php echo $url; ?>"><?php echo $r['post_title']; ?></a>
          </p>
        </div>
        <div class="col-lg-12"><hr class="lb-0"></div>  
        <?php } ?>
  </div>