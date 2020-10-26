<h4 class="pt-3 mml-2">
  <span data-title="LAINNYA >>"><i class="fas fa-fire-alt"></i> TERPOPULER</span>
  </h4>
  <ul class="list-group list-group-flush mt-1">
    <?php foreach($popular as $p) { ?>
    <?php
      error_reporting(error_reporting() & ~E_NOTICE);
      $dc = content_time($p['post_date_created']);
      $dp = id_time($p['post_date']);
      $bil++;

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';

      // _d($url_img . $p['post_image_thumb']);
    ?>
    <li class="list-group-item">     
      <span class="list-numb"><?php echo $bil; ?></span>
        <a href="<?php echo $url; ?>" class="sub-head-16">
          <?php echo $p['post_title']; ?>        
        </a>
    </li>
    <?php } ?>
</ul>