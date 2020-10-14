                <!-- S: Headline Section -->
                <div id="headline-slider">
                  <?php // _d($headline); ?>
                  <ul class="headline-list">
                    <?php foreach($headline as $h) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($h['post_date_created']);
                        $dp = id_time($h['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $h['post_id'] . '/' . /*$h['category_id'] . '/' .*/ $h['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $h['post_id'] . '/';

                        // _d($url_img . $h['post_image_thumb']);
                      ?>

                    <li data-thumb="<?php echo $url_img . $h['post_image_thumb']; ?>">
                      <div class="headline-bu">Berita Utama</div>
                      <figure>
                        <img src="<?php echo $url_img . $h['post_image_content']; ?>" style="width: 773px; height: 481.8px;" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <figcaption>

                          <a href="<?php echo $url; ?>">
                            &nbsp;<?php echo $h['post_title']; ?>
                          </a>
                          <div class="headline-line"></div>
                          <span class="headline-post-meta">
                            <span class="date">
                              <i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<?php echo $dp; ?>
                            </span>
                            <span class="author">
                              <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $h['author']; ?>
                            </span>
                          </span>
                        </figcaption>
                      </figure>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                <!-- E: Headline Section -->