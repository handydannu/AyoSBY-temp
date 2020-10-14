
                <div class="recent-content">
                  <ul>
                    <?php // _d($recent); ?>
                    <?php foreach($recent as $r) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($r['post_date_created']);
                        $dp = waktu_lalu($r['post_date'], true);

                        // Define URL and URL Image
                        $url      = '';
                        $url_img  = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . '/';
                        if($r['post_type'] == $this->config->item('post_type')['photo']) { // photo format: photos
                          $url                    = site_url('view');
                          $r['category_link']     = 'foto';
                          $r['category_name']     = 'Foto';
                          $icon                   = 'camera';
                        } else if($r['post_type'] == $this->config->item('post_type')['video']) { // video format: video
                          $url                    = site_url('watch');
                          $url_img                = 'http://i.ytimg.com/vi/' . $r['post_image_content'] . '/';
                          $r['post_image_thumb']  = 'hqdefault.jpg';
                          $icon                   = 'video-camera';
                        } else { // article format: article (set as default condition)
                          $url    = site_url('read');
                          $icon   = 'folder-open';
                        }
                        $url .= '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . '/' . $r['slug'];

                        // _d($url_img . $r['post_image_thumb']);
                      ?>
                    <li>
                      <span class="recent-list">
                        <span class="recent-meta">
                        
                         <span class="recent-category">
                            <a href="<?php echo site_url($r['category_link']); ?>"><?php echo $r['category_name']; ?></a>&nbsp;  
                          </span>
                            <span class="recent-date">
                            &nbsp;<?php echo $dp; ?>
                          </span>
                          <a href="<?php echo $url; ?>" class="recent-list-title"><?php echo $r['post_title']; ?>
                          <span class="recent-list-desc"><?php echo limit_words($r['post_summary'], 10); ?></span>
                          <br>
                          <button class="readmore">Selengkapnya</button>
                          </a>
                         
                        </span>
                        <a href="<?php echo $url; ?>">
                            <img src="<?php echo $url_img . $r['post_image_thumb'] ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" />
                        </a>
                      </span>
                    </li>
                    <?php } ?>    
                  </ul>
                </div>
                <!-- E: Recent Section -->