<div style="background:#FFFFFF; padding: 0px 5px 10px 5px; margin-top: 10px">

 

            <!-- S: Row Categories -->
            <div class="col-cat-news mg-out"> <!-- mg-top-15 -->

              <section class="col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>nasional" title="Menuju ke Halaman Arsip &quot;umum&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Umum
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div> 
                <!--<div class="col-std-title col-title-box-1">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>nasional" title="Menuju ke Halaman Arsip &quot;umum&quot;">
                     <b style="color: #FFF;">Umum</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($nasional[0]['post_date_created']);
                      $dp = id_time($nasional[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[0]['post_id'] . '/' . /*$umum[0]['category_id'] . '/' .*/ $nasional[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[0]['post_id'] . '/';

                      // _d($url_img . $umum[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $umum[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $umum[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $nasional[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /*<span class="col-thumb-excerpt">
                        <?php echo limit_words($umum[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($nasional); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($nasional[$i]['post_date_created']);
                        $dp = id_time($nasional[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[$i]['post_id'] . '/' . /*$umum[$i]['category_id'] . '/' .*/ $nasional[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $nasional[$i]['post_id'] . '/';

                        // _d($url_img . $umum[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $nasional[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>

                  </ul>
                </div>
                <!---->
                <a href="<?php echo site_url(); ?>explore-cirebon" title="Menuju ke Halaman Arsip &quot;Explore Cirebon&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Explore Cirebon
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <!--<div class="col-std-title col-title-box-3">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>explore-tasik" title="Menuju ke Halaman Arsip &quot;Explore Tasik&quot;">
                    <b style="color: #FFF;">Explore Tasik</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($explore_cirebon[0]['post_date_created']);
                      $dp = id_time($explore_cirebon[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_cirebon[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $explore_cirebon[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_cirebon[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $explore_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $explore_cirebon[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $explore_cirebon[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($explore_tasik[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($explore_cirebon); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($explore_cirebon[$i]['post_date_created']);
                        $dp = id_time($explore_cirebon[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_cirebon[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $explore_cirebon[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_cirebon[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $explore_cirebon[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  </ul>
                </div>
              </section>

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>berita-cirebon" title="Menuju ke Halaman Arsip &quot;Berita Cirebon&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Berita Cirebon
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <!--<div class="col-std-title col-title-box-3">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>explore-tasik" title="Menuju ke Halaman Arsip &quot;Explore Tasik&quot;">
                    <b style="color: #FFF;">Explore Tasik</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($berita_cirebon[0]['post_date_created']);
                      $dp = id_time($berita_cirebon[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_cirebon[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $berita_cirebon[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_cirebon[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $explore_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $berita_cirebon[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $berita_cirebon[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($explore_tasik[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($berita_cirebon); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($berita_cirebon[$i]['post_date_created']);
                        $dp = id_time($berita_cirebon[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_cirebon[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $berita_cirebon[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_cirebon[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $berita_cirebon[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  </ul>
                </div>
                <a href="<?php echo site_url(); ?>bisnis-cirebon" title="Menuju ke Halaman Arsip &quot;Bisnis Cirebon&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Bisnis Cirebon
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <!--<div class="col-std-title col-title-box-3">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>explore-tasik" title="Menuju ke Halaman Arsip &quot;Explore Tasik&quot;">
                    <b style="color: #FFF;">Explore Tasik</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($bisnis_cirebon[0]['post_date_created']);
                      $dp = id_time($bisnis_cirebon[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis_cirebon[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $bisnis_cirebon[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis_cirebon[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $explore_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $bisnis_cirebon[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $bisnis_cirebon[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($explore_tasik[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($bisnis_cirebon); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($bisnis_cirebon[$i]['post_date_created']);
                        $dp = id_time($bisnis_cirebon[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis_cirebon[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $bisnis_cirebon[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis_cirebon[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $bisnis_cirebon[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  </ul>
                </div>
              </section>
              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>berita-pantura" title="Menuju ke Halaman Arsip &quot;Berita Pantura&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Berita Pantura
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <!--<div class="col-std-title col-title-box-2">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>berita-tasik" title="Menuju ke Halaman Arsip &quot;Berita Tasik&quot;">
                      
                    <b style="color: #FFF;">Berita Tasik</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($berita_pantura[0]['post_date_created']);
                      $dp = id_time($berita_pantura[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_pantura[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $berita_pantura[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_pantura[0]['post_id'] . '/';

                      // _d($url_img . $semarang_raya[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $berita_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $berita_pantura[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $berita_pantura[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($semarang_raya[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($berita_pantura); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($berita_pantura[$i]['post_date_created']);
                        $dp = id_time($berita_pantura[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_pantura[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $berita_pantura[$i]['slug'];
                        
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_pantura[$i]['post_id'] . '/';
                        // _d($url_img . $semarang_raya[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $berita_pantura[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  </ul>
                </div>
                <a href="<?php echo site_url(); ?>hiburan-cirebon" title="Menuju ke Halaman Arsip &quot;Hiburan Cirebon&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Hiburan Cirebon
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <!--<div class="col-std-title col-title-box-3">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>explore-tasik" title="Menuju ke Halaman Arsip &quot;Explore Tasik&quot;">
                    <b style="color: #FFF;">Explore Tasik</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($hiburan_cirebon[0]['post_date_created']);
                      $dp = id_time($hiburan_cirebon[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $hiburan_cirebon[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $hiburan_cirebon[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $hiburan_cirebon[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $explore_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $hiburan_cirebon[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $hiburan_cirebon[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($explore_tasik[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($hiburan_cirebon); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($hiburan_cirebon[$i]['post_date_created']);
                        $dp = id_time($hiburan_cirebon[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $hiburan_cirebon[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $hiburan_cirebon[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $hiburan_cirebon[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $hiburan_cirebon[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  <!--kampus_cirebon-->
                  <?php for($i = 1; $i < count($kampus_cirebon); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($kampus_cirebon[$i]['post_date_created']);
                        $dp = id_time($kampus_cirebon[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $kampus_cirebon[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $kampus_cirebon[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $kampus_cirebon[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $kampus_cirebon[$i]['post_title']; ?>
                      </a>
                    </li>
                    <!-- <li class="col-list-child">
                      <a href="" class="even">
                        Sample Title
                      </a>
                    </li> -->
                  <?php } ?>
                  </ul>
                </div>
              </section>

              
            </div>
            <div class="clearfix"></div>





</div>
            <div class="clearfix"></div>
            <!-- E: Row Categories -->
