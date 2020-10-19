   <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
          <span class="d-flex align-items-center"><i class="fas fa-fire"></i>&nbsp;BREAKING</span>
        </div>
        <div class="bg-light p-1">

        <marquee class="news-scroll mt-1" behavior="scroll" direction="left" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();"> 

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
          <span class="dot"></span> 
          <a href="<?php echo $url; ?>"><?php echo $r['post_title']; ?></a> 
          <?php } ?> 
        </marquee></div>
        
    </div>