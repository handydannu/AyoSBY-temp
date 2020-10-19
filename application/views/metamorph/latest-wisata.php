<!-- list wisata -->
        <h4 class="pt-2 mml-2">
          <a class="roll-link" href="<?php echo site_url(); ?>wisata"><span data-title="LAINNYA >>"><i class="fas fa-tram"></i> WISATA SURABAYA</span></a>
        </h4>
        <div class="rounded-0 mt-3">
          <div class="shade">
            <?php
              $dc = content_time($wisata[0]['post_date_created']);
              $dp = id_time($wisata[0]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $wisata[0]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[0]['post_id'] . '/';
            ?>
            <a href="<?php echo $url; ?>">
              <img class="img-fluid" src="<?php echo $url_img . $wisata[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
            </a>
          </div>
          <div>
            <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
              <p>
                <a class="sub-head-20" href="<?php echo $url; ?>"><?php echo $wisata[0]['post_title']; ?></a>
              </p>
          </div>

          <ul class="list-group list-group-flush left-orange-title mt-3">            
          <?php for($i = 1; $i < count($wisata); $i++) { ?>
            <?php
              $dc = content_time($wisata[$i]['post_date_created']);
              $dp = id_time($wisata[$i]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $wisata[$i]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[$i]['post_id'] . '/';
            ?>
            <li class="pop-list">
              <a class="sub-head-16" href="<?php echo $url; ?>"><?php echo $wisata[$i]['post_title']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>