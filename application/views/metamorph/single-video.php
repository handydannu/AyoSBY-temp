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
                    / <a href="<?php echo site_url('video'); ?>" class="active">Video</a>
                  </div>
                </div>

                <div class="col-news-title">
                  <h3><?php echo $video[0]['title']; ?></h3>
                </div>
                <div class="col-news-meta">
                  <span class="news-meta-datetime"><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<?php echo id_time($video[0]['date']); ?></span>
                  <span class="news-meta-author"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $video[0]['source']; // TO DO: Need to fix this 'source' -> 'author'! ?></span>
                </div>

                <div class="col-news-content">
                  <div class="embed-video">  
                    <iframe width="100%" height="398" src="https://www.youtube.com/embed/<?php echo $video[0]['video']; ?>" frameborder="0" allowfullscreen style="display: block; margin: auto;"></iframe>
                  </div>
                  <?php 
                    // Content
                    echo htmlspecialchars_decode(
                      preg_replace('/\[.*?\]/', '', 
                        $video[0]['description']
                      )
                    ); 
                  ?>
                </div>

                <div class="news-meta-footer">
                  <?php if($video[0]['source'] != '') { ?>
                  <p>Source: YouTube<?php // echo $video[0]['source']; ?></p>
                  <?php } ?>
                  <?php if($video[0]['nama'] != '') { ?>
                  <p>Editor: <?php echo $video[0]['nama']; ?></p>
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
                    <div class="sharethis-inline-share-buttons" style="text-align: center;"></div>
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

                <!-- S: Related/ Recent Video -->
                <section class="col-md-12">
                  <div class="news-related">
                    <br>
                    <div class="headline-bu">
                        <i class="fa fa-chain"></i>&nbsp;&nbsp;Video Lainnya
                    </div>
                      <div class="headline-footer"></div> 
                    <div class="news-related-content">
                      <ul>
                        <?php for($i = 0; $i < count($video['related']); $i++) { // $limit = 10 ?>
                          <?php if($i % 2 == 0) { ?>
                        <div class="row">    
                          <?php } ?>

                          <?php
                            $dc = content_time($video['related'][$i]['date']);
                            $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video['related'][$i]['video_id'] . '/' . $video['related'][$i]['name'];
                            $url_img = 'http://i.ytimg.com/vi/' . $video['related'][$i]['video'] . '/hqdefault.jpg';
                          ?>

                          <li class="col-md-6 col-xs-12 <?php echo ($i == 2 || $i == 3 || $i == 6 || $i == 7) ? 'even' : ''; ?>">
                            <a href="<?php echo $url; ?>">
                            <span class="related-list-title"><?php echo $video['related'][$i]['title']; ?></span>
                            <span class="related-list-image">
                              <img data-original="<?php echo $url_img; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $url_img; ?>" />
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
                <!-- E: Related/ Recent Video -->

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
                        var js, fjs = d.getElementsByTagName(s)[0]; // carefully to replace this index array
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