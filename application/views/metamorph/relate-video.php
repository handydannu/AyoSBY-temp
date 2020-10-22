<!-- BAGIAN BERITA TERKAIT -->
<div class="row">
  <?php for($i = 0; $i < count($video['related']); $i++) { ?>
  <div class="col-3 p-1">
     <?php
        $dc = content_time($video['related'][$i]['date']);
        $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video['related'][$i]['video_id'] . '/' . $video['related'][$i]['name'];
        $url_img = 'http://i.ytimg.com/vi/' . $video['related'][$i]['video'] . '/hqdefault.jpg';
      ?>
      <a href="<?php echo $url; ?>">
        <img class="img-fluid headline-img-thumb shade" src="<?php echo $url_img; ?>">
        <div>        
          <p class="sub-head-14">
            <?php echo $video['related'][$i]['title']; ?>
          </p>
        </div>
      </a>
  </div>
  <?php } ?> 

</div><!-- END BERITA TERKAIT -->
