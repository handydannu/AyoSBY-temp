<h4 class="pt-2 mml-1">
              <a class="roll-link" href="<?php echo base_url();?>hot-news"><span data-title="LAINNYA >>"><i class="fas fa-fire"></i> HOT NEWS</span></a>
            </h4>

          <div class="row">
          <div class="col-lg-6 col-sm-6 p-1 img-zoom">
            <?php
              $dc = content_time($umum[0]['post_date_created']);
              $dp = id_time($umum[0]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $umum[0]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[0]['post_id'] . '/';
            ?>
              <a href="<?php echo $url; ?>">
                <img class="img-fluid headline-img-med" src="<?php echo $url_img . $umum[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
              </a>
            <div>
              <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
              <p>
                <a class="sub-head-20" href="#"><?php echo $umum[0]['post_title']; ?></a>
              </p>
            </div>    

            <?php for($i = 1; $i < count($umum); $i++) { ?>
            <?php
              $dc = content_time($umum[$i]['post_date_created']);
              $dp = id_time($umum[$i]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $umum[$i]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[$i]['post_id'] . '/';
            ?>
            <div class="headline-sub">
              <span class="mt-0">
                <a class="sub-head-16" href="<?php echo $url; ?>"><?php echo $umum[$i]['post_title']; ?></a>
              </span>
            </div>      
            <?php } ?>

          </div>

          <div class="col-lg-6 col-sm-6 p-1 img-zoom">
            <?php
              $dc = content_time($explore[0]['post_date_created']);
              $dp = id_time($explore[0]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $explore[0]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore[0]['post_id'] . '/';
            ?>
              <a href="<?php echo $url; ?>">
                <img class="img-fluid headline-img-med" src="<?php echo $url_img . $explore[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
              </a>
            <div>
              <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></</span>        
              <p>
                <a class="sub-head-20" href="<?php echo $url; ?>"><?php echo $explore[0]['post_title']; ?></a>
              </p>
            </div>    

            <?php for($i = 1; $i < count($explore); $i++) { ?>
            <?php
              $dc = content_time($explore[$i]['post_date_created']);
              $dp = id_time($explore[$i]['post_date']);

              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $explore[$i]['slug'];
              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore[$i]['post_id'] . '/';
            ?>
            <div class="headline-sub">
              <span class="mt-0">
                <a class="sub-head-16" href="<?php echo $url; ?>"><?php echo $explore[$i]['post_title']; ?></a>
              </span>
            </div>      
            <?php } ?>
          </div>      
        </div><!-- end hot news -->