
          <!-- S: Sidebar: Korporasi -->
           <section class="col-md-4 col-xs-12 mg-top-20">
             <div id="popular-news">
               <div class="headline-bu"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;&nbsp;Ayo Korporasi</div>
                  <a href="http://microsite.ayobandung.com/bjb/" target="_blank" title="">
                  <img src="https://ayobandung.com/images/01.jpg" class="img-responsive" />
                  <h3><div class="ad">
                    Sokong Pertumbuhan Ekonomi Warga Lewat Dorongan Berwirausaha
                  </div></h3>
                </a>
             </div>
           </section>
          <!-- E: Sidebar: Korporasi -->
         
              <!-- S: Sidebar: Display 1 -->
               <!-- <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                  <div class="headline-bu">Tag Populer</div>
                  <div class="headline-footer-sidebar"></div>
                  <?php //$tag_populer = array_slice($tag_populer, 0, 5); $i = 1; ?>
                      <?php //foreach($tag_populer as $r) { ?>
                  <div class="pt">
                    <?php //$a = $r['slug'];?>
                    <a href="<?php //echo site_url('tag/' . $a); ?>">
                      #&nbsp;<?php //echo $r['tag']; ?>
                    </a>
                  </div>
                  <?php //} ?>  
              </section>  -->
              <!-- E: Sidebar: Display 1 -->

              <?php
                $futureDate = '2020-08-02';
                $d = new DateTime($futureDate);
                $dif = $d->diff(new DateTime())->format('%R');

                if ($dif != "+") {
                ?>
               <!-- S: Sidebar: Display 1 -->
              <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                  <div id="banner-display-1">
                    <a href="#" target="_blank" title="">
                      <img src="https://cdn.ayobandung.com/upload/bank_image/small/Selamat_Hari_Raya_Idul_Adha_thumb.png" class="img-responsive" />
                    </a>
                  </div>
                </section> 
              <!-- E: Sidebar: Display 1 -->
              <?php }
                  ?>
            
             <!-- S: Sidebar: NETIZEN -->
              <section class="col-cat-news col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <div id="custom-content-1" style="border: 2px dashed #35579f">
                  <div class="custom-title" style="border-bottom: 2px dashed #35579f">
                    <h3>
                      <a href="http://ayosurabaya.com/netizen" target="_blank" title="Menuju Halaman Arsip Netizen/Netizen"><img src="<?php echo base_url();?>assets/img/widget/netizen-surabaya.png" class="img-responsive" /></a>
                    </h3>
                  </div>
                  <div class="custom-content" style="padding-right: 5px;">
                    <ul>
                      <?php foreach($netizen as $p) { ?>
                            <?php
                              // error_reporting(E_ALL);
                              $dc = content_time($p['post_date_created']);
                              $dp = id_time($p['post_date']);

                              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
                              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';

                              // _d($url_img . $p['post_image_thumb']);
                            ?>
                                                                    <li>                        
                        <a href="<?php echo $url; ?>">
                          <span class="custom-meta">
                            <span class="custom-list-title"> <?php echo $p['post_title']; ?></span>
                          </span>
                          <img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />
                        </a>
                      </li>
                      <?php } ?>                                   
                    </ul>
                  </div>
                </div>
              </section> 
              <!-- E: Sidebar: NETIZEN --> 

            <div class="">
            <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
              <div class="headline-bu">
                Berita Terpopuler
              </div>
              <div class="headline-footer-sidebar">
              </div>
 
              <div id="popular-news">
                <div class="pa">
                            <ol>
                            <?php foreach($popular as $p) { ?>
                            <?php
                              // error_reporting(E_ALL);
                              $dc = content_time($p['post_date_created']);
                              $dp = id_time($p['post_date']);

                              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
                              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';

                              // _d($url_img . $p['post_image_thumb']);
                            ?>
                            <a href="<?php echo $url; ?>">
                              <li>
                                <?php echo $p['post_title']; ?>
                                <!-- <div class="view-visitor">
                                  Dibaca <?php //echo $p['hits']; ?> Kali
                                </div> -->
                              </li>
                            </a>
                            <?php } ?>
                          </ol>
                </div>
              </div>
            </section>
              <!-- E: Sidebar: Popular -->

              <!-- S: Sidebar: Display 1 -->
             <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                <div id="banner-display-1">
                  <a href="#" target="_blank" title="">
                    <img src="<?php echo base_url();?>assets/ads/2018/06/ayobandung.com-terverifikasi.jpg" class="img-responsive" />
                  </a>
                </div>
              </section> 
              <!-- E: Sidebar: Display 1 -->

              <!-- S: Sidebar: Display 1 -->
               <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                  <div class="headline-bu">Ayo Netizen</div>
                  <div class="headline-footer-sidebar"></div>
                  <div class="pa-tag">
                    <p><b>Ayo Salurkan Hobi Menulis di Ayo Netizen</b></p>
                      <div class="headline-footer-ayo"></div>
                    <p style="margin-top: 15px;">Menurut kalian Surabaya itu apa? Apa hanya sebuah kota tempat kalian jatuh dan bangun untuk cinta? Atau kota dengan sejarah, kuliner, kebaikan manusia, wisata, dan kreativitas yang menarik?</p>
                  </div>
                  <div class="col-md-12 text-center mg-top-20">
                    <a href="<?php echo site_url();?>ayo-netizen" title="Menuju Halaman Ayo Netizen" class="btn-ayo">Ayo Netizen</a>
                  </div>
              </section> 
              <!-- E: Sidebar: Display 1 -->

              <!-- S: Socmed Widget -->
              <!-- <section class="col-md-4 col-xs-12 mg-top-20">
                <div class="headline-bu">Sosial Media</div>
                <div class="headline-footer-sidebar"></div>
               <div id="popular-news">
                  <div class="popular-content">
                    <a class="twitter-timeline" data-width="400" data-height="1100" data-theme="light" href="https://twitter.com/ayosurabayacom">Tweets by AyoSurabaya</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <br>
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/709041" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
                  </div>
                </div>
              </section> -->
              <!-- E: Socmed Widget -->

              <?php
                    $futureDate = '2020-05-20';
                    $d = new DateTime($futureDate);
                    $dif = $d->diff(new DateTime())->format('%R');

                    if ($dif != "+") {
                    ?>
                      <!-- S: Sidebar: Display 6 -->
                      <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                        <div id="banner-display-1">
                          <a href="#" target="_blank" title="">
                            <img src="https://www.ayobandung.com/assets/ads/2020/05/amsi_camp.jpg" class="img-responsive" />
                          </a>
                        </div>
                      </section>
                      <!-- E: Sidebar: Display 6 -->
                  <?php }
                  ?>

              <section class="col-banner-display col-md-4 col-xs-12 mg-top-10">
                <?php //$this->load->view($this->config->item('template_name') . 'page/imsakiyah'); ?>
              </section>
              

             

             
