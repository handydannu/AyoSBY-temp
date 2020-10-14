                <!-- S: Recent Section -->
                <!--<div id="recent-news" class="recent-news">
                 
                  <div class="recent-title">
                    <h2>  <i class="fa fa-newspaper-o"></i>&nbsp; 
                      Terbaru
                    </h2>
                  </div>
                </div>-->
                <div class="headline-line-break"></div>
                <div class="recent-content">
                  <ul>

 			<!-- 
S: Recent AyoNetizen                    <li>
                      <span class="recent-list">
                        <span class="recent-meta">
                          <a href="<?php echo site_url('read/2018/08/14/36693/ayo-salurkan-hobi-menulis-di-ayo-netizen'); ?>" class="recent-list-title">Ayo Salurkan Hobi Menulis di Ayo Netizen</a> 
                          <span class="recent-list-desc">Menurut kalian Bandung itu apa? Apa hanya sebuah kota tempat kalian jatuh dan bangun untuk cinta? Atau kota dengan sejarah, kuliner, kebaikan manusia, wisata, dan kreativitas yang menarik?</span>
                          <span class="recent-date">
                            <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Jum'at, 27 April 2018 15:38 WIB 
                          </span>                          <span class="recent-category">
                            <i class="fa fa-folder-open"></i>&nbsp;&nbsp;<a href="<?php echo site_url('netizen'); ?>">AyoNetizen</a>
                          </span>
                        </span>
                        <a href="<?php echo site_url('read/2018/08/14/36693/ayo-salurkan-hobi-menulis-di-ayo-netizen'); ?>">
                          <img data-original="<?php echo site_url('images-bandung/post/articles/2018/08/14/36693/ayo-bandung_thumb.jpg'); ?>" class="img-lazy" />
                          <noscript>
                            <img src="<?php echo site_url('images-bandung/post/articles/2018/08/14/36693/ayo-bandung_thumb.jpg'); ?>" />
                          </noscript>
                        </a>
                      </span>
                    </li>                     
                     E: Recent AyoNetizen   
                                        
                  
 -->
                   
         
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
                          <!-- <img data-original="<?php echo $url_img . $r['post_image_thumb'] ?>" class="img-lazy" />
                          <noscript> -->
                            <img src="<?php echo $url_img . $r['post_image_thumb'] ?>" />
                          <!-- </noscript> -->
                        </a>
                      </span>
                    </li>
                    <?php } ?>
                    <!-- S: Recent Advertorial -->
                    <!-- <li>
                      <span class="recent-list">
                        <span class="recent-meta">
                          <a href="<?php echo site_url('read/2018/04/27/32051/apa-saja-hak-kamu-sebagai-konsumen-keuangan'); ?>" class="recent-list-title">Apa Saja Hak Kamu Sebagai Konsumen Keuangan?</a> -->
                          <!-- <span class="recent-list-desc">Selamat Hari Konsumen Nasional, Sobat Sikapi! Pada Jumat ini, kita masih akan membahas mengenai hak-hak yang kamu miliki sebagai konsumen.</span> -->
                          <!-- <span class="recent-date">
                            <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Jum'at, 27 April 2018 15:38 WIB
                          </span>
                          <span class="recent-category">
                            <i class="fa fa-folder-open"></i>&nbsp;&nbsp;<a href="<?php echo site_url('nasional'); ?>">Nasional</a>
                          </span>
                        </span>
                        <a href="<?php echo site_url('read/2018/04/27/32051/apa-saja-hak-kamu-sebagai-konsumen-keuangan'); ?>">
                          <img data-original="<?php echo site_url('images-bandung/post/articles/2018/04/27/32051/hari_konsumen_thumb.jpeg'); ?>" class="img-lazy" />
                          <noscript>
                            <img src="<?php echo site_url('images-bandung/post/articles/2018/04/27/32051/hari_konsumen_thumb.jpeg'); ?>" />
                          </noscript>
                        </a>
                      </span>
                    </li> -->
                    <!-- E: Recent Advertorial -->                    
                  </ul>
                  
                </div>
                <!-- E: Recent Section -->