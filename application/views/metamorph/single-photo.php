<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">

            <!-- S: Row 2 Column -->
            <div class="row">

              <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">
                <div class="col-news-breadcrumb">
                  <div class="pa">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    / <a href="<?php echo site_url('foto'); ?>" class="active">Foto</a>
                  </div>
                </div>

                <div class="col-news-title">
                  <h3><?php echo $photo['slide'][0]['post_title']; ?></h3>
                </div>
                <div class="col-news-meta">
                  <span class="news-meta-datetime"><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<?php echo id_time($photo['slide'][0]['post_date_created']); ?></span>
                  <span class="news-meta-author"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $photo['slide'][0]['nama']; // TO DO: Need to fix this 'nama'! ?></span>
                </div>

                <div class="mg-bottom-15" id="media-slider">
                  <ul class="media-single-slider">
                  <?php
                    $dc = content_time($photo['slide'][0]['post_date_created']); // for efficiency purposes not getting looped
                    foreach ($photo['slide'] as $ps) {
                          $url_img = $this->config->item('images_photos_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $ps['photo_id'] . '/';
                  ?>
                    <li data-thumb="<?php echo $url_img . $ps['image']; ?>">
                      <figure>
                        <img src="<?php echo $url_img . $ps['image']; ?>" class="img-responsive" />
                        <figcaption>
                            <?php echo $ps['description']; ?>
                        </figcaption>
                      </figure>
                    </li>
                  <?php } ?>
                  </ul>
                </div>

                <div class="news-meta-footer">
                  <?php if($photo['slide'][0]['post_source'] != '') { ?>
                  <p>Source: <?php echo $photo['slide'][0]['post_source']; ?></p>
                  <?php } ?>
                  <?php if($photo['slide'][0]['nama'] != '') { ?>
                  <p>Editor: <?php echo $photo['slide'][0]['nama']; ?></p>
                  <?php } ?>
                </div>

                <div class="col-md-12 pd-free">
                  <div class="news-share-btn text-center">
                    <div class="col-md-12">
                      <span class="news-share-btn-title">
                        <i class="fa fa-share-alt"></i>&nbsp;&nbsp;
                        Ayo Bagikan!
                      </span>
                    </div>
                    <div class="col-md-12">
                      <div class="sharethis-inline-share-buttons" style="text-align: center;"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pd-free mg-top-30">
                  <div class="news-response-btn text-center">
                    <div class="col-md-12">
                      <span class="news-response-btn-title">
                        Ayo Respon
                      </span>
                    </div>
                    <div class="col-md-12">
                      <div class="sharethis-inline-reaction-buttons"></div>
                    </div>
                  </div>
                </div>

                <!-- S: Related/ Recent Photo -->
                <section class="col-md-12">
                  <div class="news-related">
                    <br>
                    <div class="headline-bu">
                        <i class="fa fa-chain"></i>&nbsp;&nbsp;Foto Lainnya
                    </div>
                      <div class="headline-footer"></div> 
                    <div class="news-related-content">
                      <ul>
                        <?php for($i = 0; $i < count($photo['related']['data']); $i++) { // $limit = 10 ?>
                          <?php if($i % 2 == 0) { ?>
                        <div class="row">
                          <?php } ?>

                          <?php
                            $dc = content_time($photo['related']['data'][$i]['post_date_created']);
                            $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo['related']['data'][$i]['post_id'] . '/' . /*$photo['related']['data'][$i]['category_id'] . '/' .*/ $photo['related']['data'][$i]['post_name'];
                            $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo['related']['data'][$i]['post_id'] . '/';
                          ?>

                          <li class="col-md-6 col-xs-12 <?php echo ($i == 2 || $i == 3 || $i == 6 || $i == 7) ? 'even' : ''; ?>">
                            <a href="<?php echo $url; ?>">
                            <span class="related-list-title"><?php echo $photo['related']['data'][$i]['post_title']; ?></span>
                            <span class="related-list-image">
                              <img data-original="<?php echo $url_img . $photo['related']['data'][$i]['post_image_thumb']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $url_img . $photo['related']['data'][$i]['post_image_thumb']; ?>" />
                              </noscript>
                            </span>
                            </a>
                          </li>

                          <?php if($i % 2 == 1) { ?>
                        </div>
                          <?php } ?>
                        <?php } ?>

                      </ul>
                    </div>
                  </div>
                </section>
                <!-- E: Related/ Recent Photo -->
                <p>&nbsp;</p>
                <!-- S: Form Comment -->
                <section class="col-md-12">
                  <div class="headline-bu">
                         <i class="fa fa-comments"></i>&nbsp;&nbsp;
                      Komentar
                    </div>
                      <div class="headline-footer"></div>

                  <!-- S: Facebook Plugin Comment -->
                  <div class="fb_style">
                    <h3>Komentar</h3>
                    <div id="fb-root">
                      <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=176650753609026&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                      </script>
                      <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-colorscheme="light" data-numposts="10" data-width="100%"></div>
                    </div>
                   </div>
                   <!-- E: Facebook Plugin Comment -->

                </section>
                <!-- E: Form Comment -->

              </article>
              <!-- E: Content Container -->

              <!-- S: Sidebar -->
              <?php $this->load->view($this->config->item('template_name') . 'content-sidebar'); ?>
              <!-- E: Sidebar -->
            </div>
            <div class="clearfix"></div>
            <!-- E: Row 2 Column -->
          </div>
        </main>
        <!-- E: Main Container -->

<?php $this->load->view($this->config->item('template_name') . 'footer'); ?>
