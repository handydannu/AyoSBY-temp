<h4 class="pt-2 mml-1">
  <a class="roll-link" href="<?php echo site_url('video'); ?>"><span data-title="LAINNYA >>"><i class="fas fa-video"></i> VIDEO TERBARU</span></a>
</h4>

<div class="row">
    <?php
      $dc = content_time($video[0]['date']);
      $dp = id_time($video[0]['date']);

      $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[0]['video_id'] . '/' . $video[0]['name'];
      $url_img = 'http://i.ytimg.com/vi/' . $video[0]['video'] . '/hqdefault.jpg';
    ?>  
  <div class="col-lg-5 col-sm-5 p-1 img-zoom">
      <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-sm shade" src="<?php echo $url_img; ?>">
  </div>
  <div class="col-lg-7 col-sm-7 pl-2">  
    <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>
    <a href="<?php echo $url; ?>"><p class="sub-head-16">
      <?php echo $video[0]['title']; ?>
      
    </p></a>
  </div><!-- number 1 -->
  
  <?php for($i = 1; $i < 4; $i++) { ?>
                    <?php
                      $dc = content_time($video[$i]['date']);
                      $dp = id_time($video[$i]['date']);

                      $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/' . $video[$i]['name'];
                      $url_img = 'http://i.ytimg.com/vi/' . $video[$i]['video'] . '/hqdefault.jpg';
                    ?>
  <div class="col-4 p-1">
      <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-thumb shade" src="<?php echo $url_img; ?>">
      <div>
        <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i>&nbsp;<?php echo $dp; ?></span>       
        <p class="sub-head-14">
          <?php echo $video[$i]['title']; ?>
        </p>
      </div>
      </a>
  </div>
                    <?php } ?>

</div><!-- end gaya hidup -->