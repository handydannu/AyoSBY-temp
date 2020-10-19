<h4 class="pt-2 mml-1">
  <a class="roll-link" href="#"><span data-title="LAINNYA >>"><i class="fas fa-camera"></i> GAMBAR TERBARU</a>
</h4>

<?php for($i = 0; $i < count($photo); $i++) { ?>
                          <?php
                            // error_reporting(E_ALL);
                            $dc = content_time($photo[$i]['post_date_created']);

                            $url[$i] = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . /*$photo[$i]['category_id'] . '/' .*/ $photo[$i]['post_name'];
                            $url_img[$i] = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                          ?>
                        <?php } ?>

<div class="row">
  <div class="col-md-4 col-sm-12 p-1 img-zoom">
    <a href="<?php echo $url[0]; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img[0] . $photo[0]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">      
      <div>    
        <p class="sub-head-16">
          <?php echo $photo[0]['post_title']; ?>
        </p>
     </div>
    </a>
  </div>

  <div class="col-md-4 col-sm-12 p-1 img-zoom">
    <a href="<?php echo $url[1]; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img[1] . $photo[1]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">      
      <div>    
        <p class="sub-head-16">
          <?php echo $photo[1]['post_title']; ?>
        </p>
     </div>
    </a>
  </div>

  <div class="col-md-4 col-sm-12 p-1 img-zoom">
    <a href="<?php echo $url[2]; ?>">
      <img class="img-fluid headline-img-bellow shade" src="<?php echo $url_img[2] . $photo[2]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">      
      <div>    
        <p class="sub-head-16">
          <?php echo $photo[2]['post_title']; ?>
        </p>
     </div>
    </a>
  </div>
</div>