                <!-- S: Headline Section -->
                <div class="headline-bu" style="margin-top: 20px;">Ayo Foto
                </div><br>
                <ul id="rig">
                        <?php if (count($photo) >= 4){ $lc =4; } else { $lc = count($photo); } // loop count ?>
                        <?php for($i = 0; $i < $lc; $i++) { ?>
                        <?php
                          $dc = content_time($photo[$i]['post_date_created']);
                          $dp = id_time($photo[$i]['post_date']);

                          $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . $photo[$i]['post_name'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                        ?>
                    <li>
                        <a class="rig-cell" href="<?php echo $url ?>">
                            <img class="rig-img" src="<?php echo $url_img . $photo[$i]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">
                            <span class="rig-overlay"></span>
                            <span class="rig-text"><?php echo $photo[$i]['post_title']; ?></span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <br>
                  <a href="<?php echo site_url();?>ayo-netizen" target="_blank" title="">
                    <img src="<?php echo base_url();?>assets/img/widget/ayo-netizen.jpg" class="img-responsive" />
                  </a>
                
                <!-- E: Headline Section -->


