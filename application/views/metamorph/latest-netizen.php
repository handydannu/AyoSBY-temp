<!-- netizen -->
        <h4 class="pt-2">
          <a class="roll-link" href="<?php echo base_url();?>netizen"><span data-title="LAINNYA >>"><i class="fas fa-comments"></i> AYONETIZEN</span></a>
        </h4>
        <div class="rounded-0 mr-2">
          <?php
      $dc = content_time($netizen[0]['post_date_created']);
      $dp = id_time($netizen[0]['post_date']);

      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $netizen[0]['slug'];
      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[0]['post_id'] . '/';
    ?>
          <a href="<?php echo $url; ?>">
              <img class="img-fluid headline-img-thumb" src="<?php echo $url_img . $netizen[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">            
            <div>
            <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
              <p class="sub-head-20">
               <?php echo $netizen[0]['post_title']; ?>
              </p>
            </div>
          </a>

          <ul class="list-group list-group-flush left-orange-title mt-3">
            <?php for($i = 1; $i < count($netizen); $i++) { ?>
      <?php
        $dc = content_time($netizen[$i]['post_date_created']);
        $dp = id_time($netizen[$i]['post_date']);

        $url = 'read' . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $netizen[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/';
      ?>
            <li class="pop-list">
              <a class="sub-head-14" href="<?php echo $url; ?>"><?php echo $netizen[$i]['post_title']; ?></a>
            </li>
                 
    <?php } ?>
          </ul>
        </div><!-- netizen -->