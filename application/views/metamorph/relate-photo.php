<!-- BAGIAN BERITA TERKAIT -->
<div class="row">
  <?php for($i = 0; $i < count($photo['related']['data']); $i++) { ?>
  <div class="col-3 p-1">
     <?php
        $dc = content_time($photo['related']['data'][$i]['post_date_created']);
        $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo['related']['data'][$i]['post_id'] . '/' . /*$photo['related']['data'][$i]['category_id'] . '/' .*/ $photo['related']['data'][$i]['post_name'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo['related']['data'][$i]['post_id'] . '/';
      ?>
      <a href="<?php echo $url; ?>">
        <img class="img-fluid headline-img-thumb shade" src="<?php echo $url_img . $photo['related']['data'][$i]['post_image_thumb']; ?>">
        <div>        
          <p class="sub-head-14">
            <?php echo $photo['related']['data'][$i]['post_title']; ?>
          </p>
        </div>
      </a>
  </div>
  <?php } ?> 

</div><!-- END BERITA TERKAIT -->
