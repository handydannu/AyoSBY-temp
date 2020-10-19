    <h4 class="pt-2 mml-1">
              <a class="roll-link" href="<?php echo site_url(); ?>persebaya"><span data-title="LAINNYA >>"><i class="fas fa-futbol"></i> KABAR PERSEBAYA</span></a>
            </h4>

        <div class="row">
        

    <?php for($i = 0; $i < count($persebaya); $i++) { ?>
      <?php
        $dc = content_time($persebaya[$i]['post_date_created']);
        $dp = id_time($persebaya[$i]['post_date']);

        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $persebaya[$i]['slug'];
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[$i]['post_id'] . '/';
      ?>
          <div class="col-4 p-1">
              <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-thumb shade" src="<?php echo $url_img . $persebaya[$i]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
              <div>
                <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> <?php echo $dp; ?></span>        
                <p class="sub-head-14">
                  <?php echo $persebaya[$i]['post_title']; ?>
                </p>
              </div>
              </a>
          </div>
        <?php } ?>
        </div><!-- END PERSEBAYA TERBARU -->