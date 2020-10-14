<!--


              <section class="col-cat-news col-md-4 col-sm-12 col-xs-12 mg-top-20">
                <div class="col-std-title col-title-box-3">
                  <h3>
                    <a href="http://microsite.ayobandung.com/bjb/" title="Menuju ke Halaman Arsip &quot;Ayo Korporasi&quot;">
                      <!~~ <i class="fa fa-bullhorn"></i>&nbsp;&nbsp; ~~>
                      Ayo Korporasi
                    </a>
                  </h3>
                </div>
                <div class="col-std-content">
                  <ul>
                    <li class="col-list-parent">
                      <a href="http://microsite.ayobandung.com/bjb/" class="col-link-parent">
                        <img src="http://ayobandung.com/assets/ads/2018/08/bjb-agt3.jpg" class="img-responsive" />
                        <span class="col-thumb-title">
                          Komitmen bank bjb Lahirkan Wirausaha Muda di Industri Kreatif
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </section>

 -->
          <!-- S: Sidebar: Korporasi -->
           <section class="col-md-4 col-xs-12 mg-top-20">
             <div id="popular-news">
               <div class="headline-bu"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;&nbsp;Ayo Korporasi<div class="headline-bu-content"></div></div>
                  <a href="http://microsite.ayobandung.com/bjb/" target="_blank" title="">
                  <img src="https://www.ayobandung.com/assets/ads/2019/02/thumb-feb2019.jpg" class="img-responsive" />
                  <h3><div class="ad">
                   Kredit UMKM bank bjb Kokohkan Ekonomi Warga
                  </div></h3>
                </a>
             </div>
           </section>
          <!-- E: Sidebar: Korporasi -->

          <!-- S: Sidebar: Display 1 -->
               <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                  <div class="headline-bu">&nbsp;&nbsp;Tag Populer
                    <div class="headline-bu-content"></div>
                  </div>
                  <?php $tag_populer = array_slice($tag_populer, 0, 5); $i = 1; ?>
                      <?php foreach($tag_populer as $r) { ?>
                  <div class="pt">
                    <a href="#">
                      #&nbsp;<?php echo $r['tag']; ?>
                    </a>
                  </div>
                  <?php } ?>  
              </section> 
              <!-- E: Sidebar: Display 1 -->

            <!-- S: Sidebar: Display 1 -->
             <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                <div id="banner-display-1">
                  <a href="#" target="_blank" title="">
                    <!--<img src="/assets/img/widget/ayo-netizen.png" class="img-responsive" />-->
                    <img src="<?php site_url();?>assets/ads/2018/06/ayobandung.com-terverifikasi.jpg" class="img-responsive" />
                  </a>
                </div>
              </section> 
              <!-- E: Sidebar: Display 1 -->

              <!-- S: Sidebar: Display 1 -->
               <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                  <div class="headline-bu">&nbsp;&nbsp;Ayo Netizen
                    <div class="headline-bu-content"></div>
                  </div>
                  <div class="pa-tag">
                    <p><b>Ayo Salurkan Hobi Menulis di Ayo Netizen</b></p>
                      <div class="headline-footer-ayo"></div>
                    <p style="margin-top: 15px;">Menurut kalian Bogor itu apa? Apa hanya sebuah kota tempat kalian jatuh dan bangun untuk cinta? Atau kota dengan sejarah, kuliner, kebaikan manusia, wisata, dan kreativitas yang menarik?</p>
                  </div>
                  <div class="col-md-12 text-center mg-top-20">
                    <a href="<?php echo site_url();?>ayo-netizen" title="Menuju Halaman Ayo Netizen" class="btn-ayo">Ayo Netizen</a>
                  </div>
              </section> 
              <!-- E: Sidebar: Display 1 -->

              <!-- S: Sidebar: NETIZEN -->
              <!--<section class="col-cat-news col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <div id="custom-content-1" style="border: 2px dashed #FF0004">
                  <div class="custom-title" style="border-bottom: 2px dashed #FF0004">
                    <h3>
                      <a href="<?php echo site_url(); ?>netizen" target="_blank" title="Menuju Halaman Arsip Netizen/Netizen"><img src="/assets/img/widget/netizen-tasik.png" class="img-responsive" /></a>
                    </h3>
                  </div>
                  <div class="custom-content" style="padding-right: 5px;">
                    <ul>
                      <?php for($i = 0; $i < count($netizen); $i++) { ?>
                        <?php

                          $dc = content_time($netizen[$i]['post_date_created']);
                          $dp = id_time($netizen[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/' . /*$kodim[$i]['category_id'] . '/' .*/ $netizen[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/';
                        ?>
                      <li>
                        <a href="<?php echo $url; ?>">
                          <span class="custom-meta">
                            <span class="custom-list-title"><?php echo $netizen[$i]['post_title']; ?></span>
                          </span>
                          <img src="<?php echo $url_img . $netizen[$i]['post_image_thumb']; ?>" />
                        </a>




                      </li>
                      <?php } ?>
                    </ul>
                  </div>

                </div>
                <div class="link-archive text-center" >
                  <a href="<?php echo site_url(); ?>netizen" target="_blank" title="Menuju Halaman Arsip Netizen/Netizen">Arsip &raquo;</a>
                </div>
              </section>-->
              <!-- E: Sidebar: NETIZEN -->






              <!-- S: Sidebar: Popular -->
              <!--<section class="col-md-4 col-xs-12 mg-top-20">
                <div id="popular-news">
                  <div class="popular-title">
                    <h3>
                      <i class="glyphicon glyphicon-fire"></i>&nbsp;&nbsp;
                      Terpopuler
                    </h3>
                  </div>
                  <div class="popular-content">
                    <ul>
                     
                    <?php foreach($popular as $p) { ?>
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
                          <span class="popular-meta">
                            <span class="popular-list-title"><?php echo $p['post_title']; ?></span>
                            <span class="popular-count-viewers"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;Dibaca <?php echo $p['hits']; ?> Kali</span>
                          </span>
                          
                            <img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />
                         
                        </a>
                      </li>
                    <?php } ?>
                    </ul>
                  </div>
                </div>
              </section>-->
              
           <div class="col-cat-news mg-out">
            <section class="col-md-4 col-sm-12 col-xs-12 mg-top-15">
              <div class="headline-bu">&nbsp;&nbsp;Terpopuler
                <div class="headline-bu-content"></div>
              </div>
                      <!--<div class="popular-title">
                        <h3>
                          <i class="glyphicon glyphicon-fire"></i>&nbsp;&nbsp;
                          Terpopuler
                        </h3>
                      </div>-->
                      <p>&nbsp;</p>
                      <!--<div class="popular-content">-->
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
                                <div class="view-visitor">
                                  Dibaca <?php echo $p['hits']; ?> Kali
                                </div>
                                  <!--<img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />-->
                              </li>
                            </a>
                            <?php } ?>
                          </ol>
                        </div>
                      </div>
                       <!--<div>
                    <ul>-->
                    <!--<ul>
                    <?php foreach($popular as $p) { ?>
                      <?php
                        
                        $dc = content_time($p['post_date_created']);
                        $dp = id_time($p['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';                      
                      ?>
                      <li>
                        <a href="<?php echo $url; ?>">
                          <span class="popular-meta">
                            <span class="popular-list-title"><?php echo $p['post_title']; ?></span>
                            <span class="popular-count-viewers"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;Dibaca <?php echo $p['hits']; ?> Kali</span>
                          </span>
                            <img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />
                        </a>
                      </li>

                    <?php } ?>
                    </ul>-->
              </section>

              <!-- E: Sidebar: Popular -->

              <!-- S: Socmed Widget -->
              <section class="col-md-4 col-xs-12 mg-top-20">
                <div class="headline-bu">&nbsp;&nbsp;Sosial Media<div class="headline-bu-content"></div></div>
               <div id="popular-news">
                  <p>&nbsp;</p>
                   <!--<div class="popular-title">
                    <h3>
                    Social Media
                    </h3>
                  </div>-->
                  <div class="popular-content">
                   
                    <a class="twitter-timeline" data-width="400" data-height="1100" data-theme="light" href="https://twitter.com/AyoBogorCom">Tweets by AyoCirebon</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <br>
                    
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/423530" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
                  </div>
                </div>
              </section>
              <!-- E: Socmed Widget -->
              <!-- S: Sidebar: Display 1 -->
              <!-- <section class="col-banner-display col-md-4 col-xs-12 mg-top-20">
                <div id="banner-display-1">
                  <a href="" target="_blank" title="">
                    <img src="media/img/banner/display-terverifikasi.jpg" class="img-responsive" />
                  </a>
                </div>
              </section> -->
              <!-- E: Sidebar: Display 1 -->
 
              <!-- S: Sidebar: Display 2 -->
              <section class="col-banner-display col-md-4 col-xs-12 mg-top-10">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="11366f4f7508a2acf23b5bac-text/javascript"></script>
                    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-6344910443143463" data-ad-slot="2568689035"></ins>
                    <script type="11366f4f7508a2acf23b5bac-text/javascript">
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!--<div id="banner-display-2">
                  <a href="http://ayobandung.com/?q=dprd&sa=" target="_blank" title="Kabar DPRD Jabar">
                    <img src="<?php site_url();?>assets/ads/2018/06/dprd-1.jpg" class="img-responsive" />
                  </a>
                </div>-->
              </section>
              <!-- E: Sidebar: Display 2 -->

              <!-- S: Sidebar: Display 3 -->
              <!-- <section class="col-banner-display col-md-4 col-xs-12 mg-top-10">
                <div id="banner-display-3">
                  <a href="http://ayobandung.com/assets/img/ads/pajak-1juta.jpg" target="_blank" title="Ke mana satu juta uang pajak kita?">
                    <img src="http://ayobandung.com/assets/img/ads/pajak-1juta.jpg" class="img-responsive" />
                  </a>
                </div>
              </section> -->
              <!-- E: Sidebar: Display 3 -->

             <!--
 S: Sidebar: Kodim 0704 Banjarnegara              <section class="col-cat-news col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <div id="custom-content-1">
                  <div class="custom-title">
                    <h3>
                      <a href="<?php echo site_url(); ?>kodim-0704-banjarnegara" target="_blank" title="Menuju Halaman Arsip Kodim 0704/Banjarnegara">Kodim 0704 Banjarnegara</a>
                    </h3>
                  </div>
                  <div class="custom-content">
                    <ul>
                      <?php for($i = 0; $i < count($kodim); $i++) { ?>
                        <?php
                          // error_reporting(E_ALL);
                          $dc = content_time($kodim[$i]['post_date_created']);
                          $dp = id_time($kodim[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $kodim[$i]['post_id'] . '/' . /*$kodim[$i]['category_id'] . '/' .*/ $kodim[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $kodim[$i]['post_id'] . '/';
                        ?>
                      <li>
                        <a href="<?php echo $url; ?>">
                          <span class="custom-meta">
                            <span class="custom-list-title"><?php echo $kodim[$i]['post_title']; ?></span>
                          </span>
                          <img src="<?php echo $url_img . $kodim[$i]['post_image_thumb']; ?>" />
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="link-archive text-center">
                  <a href="<?php echo site_url(); ?>kodim-0704-banjarnegara" target="_blank" title="Menuju Halaman Arsip Kodim 0704/Banjarnegara">Arsip &raquo;</a>
                </div>
              </section>
              E: Sidebar: Kodim 0704 Banjarnegara
 -->

              <!-- S: Sidebar: google ads -->
<!--

              <section class="col-banner-display col-md-4 col-xs-12 mg-top-10">
                <div id="banner-display-6">
                  <!~~ <a href="" target="_blank" title="">
                    <img src="media/img/banner/display-dprd.jpg" class="img-responsive" />
                  </a> ~~>
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <ins class="adsbygoogle"
                       style="display:inline-block; width:300px; height:250px"
                       data-ad-client="ca-pub-6344910443143463"
                       data-ad-slot="2568689035"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </section>

 -->

              <!-- E: Sidebar: google ads -->
