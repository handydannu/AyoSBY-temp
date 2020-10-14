<div style="background:#FFFFFF; padding: 0px 5px 10px 5px; margin-top: 10px">

            <!-- S: Row Categories --> 
            <div class="col-cat-news mg-out"> <!-- mg-top-15 -->

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>surabaya-raya" title="Menuju ke Halaman Arsip &quot;Surabaya Raya&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Surabaya Raya
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($surabaya_raya[0]['post_date_created']);
                      $dp = id_time($surabaya_raya[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $surabaya_raya[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $surabaya_raya[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $surabaya_raya[0]['post_id'] . '/';

                      // _d($url_img . $semarang_raya[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                          <img src="<?php echo $url_img . $surabaya_raya[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $surabaya_raya[0]['post_title']; ?>
                        </span>
                      </a>
                    </li>
                    <?php for($i = 1; $i < count($surabaya_raya); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($surabaya_raya[$i]['post_date_created']);
                        $dp = id_time($surabaya_raya[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $surabaya_raya[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $surabaya_raya[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $surabaya_raya[$i]['post_id'] . '/';

                        // _d($url_img . $semarang_raya[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $surabaya_raya[$i]['post_title']; ?>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </section>

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>hot-news" title="Menuju ke Halaman Arsip &quot;Hot News&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Hot News
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($umum[0]['post_date_created']);
                      $dp = id_time($umum[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $umum[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                          <img src="<?php echo $url_img . $umum[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <!-- </noscript> -->
                        <span class="col-thumb-title">
                          <?php echo $umum[0]['post_title']; ?>
                        </span>
                      </a>
                    </li>
                    <?php for($i = 1; $i < count($umum); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($umum[$i]['post_date_created']);
                        $dp = id_time($umum[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $umum[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $umum[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $umum[$i]['post_title']; ?>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </section>

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>persebaya" title="Menuju ke Halaman Arsip &quot;Persebaya&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Persebaya
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($persebaya[0]['post_date_created']);
                      $dp = id_time($persebaya[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[0]['post_id'] . '/' . /*$explore_tasik[0]['category_id'] . '/' .*/ $persebaya[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[0]['post_id'] . '/';

                      // _d($url_img . $explore_tasik[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                          <img src="<?php echo $url_img . $persebaya[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <span class="col-thumb-title">
                          <?php echo $persebaya[0]['post_title']; ?>
                        </span>
                      </a>
                    </li>
                    <?php for($i = 1; $i < count($persebaya); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($persebaya[$i]['post_date_created']);
                        $dp = id_time($persebaya[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[$i]['post_id'] . '/' . /*$explore_tasik[$i]['category_id'] . '/' .*/ $persebaya[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $persebaya[$i]['post_id'] . '/';

                        // _d($url_img . $explore_tasik[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $persebaya[$i]['post_title']; ?>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </section>
            </div>
            <div class="clearfix"></div>
            <!--  Col 2 -->
            <div class="col-cat-news mg-out"> <!-- mg-top-15 -->

              <section class="col-md-4 col-sm-12 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>wisata" title="Menuju ke Halaman Arsip &quot;Wisata&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Wisata
                  </div>
                </a>
                  <div class="headline-footer"></div> 
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($wisata[0]['post_date_created']);
                      $dp = id_time($wisata[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[0]['post_id'] . '/' . /*$umum[0]['category_id'] . '/' .*/ $wisata[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[0]['post_id'] . '/';

                      // _d($url_img . $umum[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                          <img src="<?php echo $url_img . $wisata[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <span class="col-thumb-title">
                          <?php echo $wisata[0]['post_title']; ?>
                        </span>
                      </a>
                    </li>
                    <?php for($i = 1; $i < count($wisata); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($wisata[$i]['post_date_created']);
                        $dp = id_time($wisata[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[$i]['post_id'] . '/' . /*$umum[$i]['category_id'] . '/' .*/ $wisata[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $wisata[$i]['post_id'] . '/';

                        // _d($url_img . $umum[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $wisata[$i]['post_title']; ?>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </section>

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
                <a href="<?php echo site_url(); ?>tren" title="Menuju ke Halaman Arsip &quot;Tren&quot;">
                  <div class="headline-bu">
                    <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Tren
                  </div>
                </a>
                  <div class="headline-footer"></div>
                <div class="col-std-content">
                  <ul>
                    <?php
                      // error_reporting(E_ALL);
                      $dc = content_time($bisnis[0]['post_date_created']);
                      $dp = id_time($bisnis[0]['post_date']);

                      $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[0]['post_id'] . '/' . /*$semarang_raya[0]['category_id'] . '/' .*/ $bisnis[0]['slug'];
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[0]['post_id'] . '/';

                      // _d($url_img . $semarang_raya[0]['post_image_thumb']);
                    ?>
                    <li class="col-list-parent">
                      <a href="<?php echo $url; ?>" class="col-link-parent">
                          <img src="<?php echo $url_img . $bisnis[0]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                        <span class="col-thumb-title">
                          <?php echo $bisnis[0]['post_title']; ?>
                        </span>
                      </a>
                    </li>
                    <?php for($i = 1; $i < count($bisnis); $i++) { ?>
                      <?php
                        // error_reporting(E_ALL);
                        $dc = content_time($bisnis[$i]['post_date_created']);
                        $dp = id_time($bisnis[$i]['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[$i]['post_id'] . '/' . /*$semarang_raya[$i]['category_id'] . '/' .*/ $bisnis[$i]['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $bisnis[$i]['post_id'] . '/';

                        // _d($url_img . $semarang_raya[$i]['post_image_thumb']);
                      ?>
                    <li class="col-list-child">
                      <a href="<?php echo $url; ?>">
                        <?php echo $bisnis[$i]['post_title']; ?>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </section>

              <section class="col-md-4 col-sm-6 col-xs-12 mg-top-15">
               
              </section>
            </div>
            <div class="clearfix"></div>





</div>
            <div class="clearfix"></div>
            <!-- E: Row Categories -->
