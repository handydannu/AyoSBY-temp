<div style="background:#FFFFFF; padding: 0px 5px 10px 5px; margin-top: 10px">

 

            <!-- S: Row Categories -->
            <div class="col-cat-news mg-out"> <!-- mg-top-15 -->

              <section class="col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>metropolitan" title="Menuju ke Halaman Arsip &quot;umum&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Metropolitan
                      <div class="headline-bu-content"></div>
                  </div>
                </a>
                  <div class="headline-footer"></div> 
                <!--<div class="col-std-title col-title-box-1">
                  <h3><i class="fa fa-newspaper-o"></i>&nbsp;
                    <a href="<?php echo site_url(); ?>metropolitan" title="Menuju ke Halaman Arsip &quot;umum&quot;">
                     <b style="color: #FFF;">Umum</b>
                    </a>
                  </h3>
                </div>-->
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($metropolitan[0]['post_date_created']);
                      $dp = id_time($metropolitan[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $metropolitan[0]['post_id'] . '/' . /*$umum[0]['category_id'] . '/' .*/ $metropolitan[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $metropolitan[0]['post_id'] . '/';

                      // _d($url_img . $umum[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $metropolitan[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $metropolitan[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $metropolitan[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /*<span class="col-thumb-excerpt">
                        <?php echo limit_words($umum[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($metropolitan); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($metropolitan[$i]['post_date_created']);
                        $dp = id_time($metropolitan[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $metropolitan[$i]['post_id'] . '/' . /*$umum[$i]['category_id'] . '/' .*/ $metropolitan[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $metropolitan[$i]['post_id'] . '/';

                        // _d($url_img . $umum[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $metropolitan[$i]['post_title']; ?>
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
                <a href="<?php echo site_url(); ?>berita-bogor" title="Menuju ke Halaman Arsip &quot;Berita Bogor&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Berita Bogor
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
                      $dc = content_time($berita_bogor[0]['post_date_created']);
                      $dp = id_time($berita_bogor[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_bogor[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $berita_bogor[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_bogor[0]['post_id'] . '/';

                      // _d($url_img . $semarang_raya[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $berita_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $berita_bogor[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $berita_bogor[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($semarang_raya[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($berita_bogor); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($berita_bogor[$i]['post_date_created']);
                        $dp = id_time($berita_bogor[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_bogor[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $berita_bogor[$i]['slug'];
                        
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $berita_bogor[$i]['post_id'] . '/';
                        // _d($url_img . $semarang_raya[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $berita_bogor[$i]['post_title']; ?>
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
                <a href="<?php echo site_url(); ?>explore-bogor" title="Menuju ke Halaman Arsip &quot;Explore Bogor&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Explore Bogor
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
                      $dc = content_time($explore_bogor[0]['post_date_created']);
                      $dp = id_time($explore_bogor[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_bogor[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $explore_bogor[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_bogor[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                        <!-- <img data-original="<?php echo $url_img . $explore_tasik[0]['post_image_content']; ?>" class="img-responsive img-lazy" />
                        <noscript> -->
                          <img src="<?php echo $url_img . $explore_bogor[0]['post_image_content']; ?>" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $explore_bogor[0]['post_title']; ?>
                        </span>
                      </a>
                      <?php /* <span class="col-thumb-excerpt">
                        <?php echo limit_words($explore_tasik[0]['post_summary'], 15); ?>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" class="read-more">Selengkapnya<i class="glyphicon glyphicon-chevron-right"></i></a>
                      </span> */ ?>
                    </li>
                    <?php for($i = 1; $i < count($explore_bogor); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($explore_bogor[$i]['post_date_created']);
                        $dp = id_time($explore_bogor[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_bogor[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $explore_bogor[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $explore_bogor[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $explore_bogor[$i]['post_title']; ?>
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
