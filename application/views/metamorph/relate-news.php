<!-- BAGIAN BERITA TERKAIT -->
<div class="row">

  <?php for($i = 0; $i < count($article['related']); $i++) { ?>
  <div class="col-md-3 p-1">
      <?php
            $dc = content_time($article['related'][$i]['post_date_created']);
            $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['related'][$i]['post_id'] . '/' . $article['related'][$i]['slug'];
            $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['related'][$i]['post_id'] . '/';
          ?>
      <a href="<?php echo $url; ?>">
        <img class="img-fluid headline-img-thumb shade" src="<?php echo $url_img . $article['related'][$i]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
        <div>        
          <p class="sub-head-14">
            <?php echo $article['related'][$i]['post_title']; ?>
          </p>
        </div>
      </a>
  </div>
  <?php } ?>                          
  
</div><!-- END BERITA TERKAIT -->