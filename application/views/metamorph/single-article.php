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
                  <?php if(isset($article['post']['category_id'])) { // category_id should exist first ?>
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <?php } ?>
                    <?php if($article['category_parent_id'] !== false) { ?>
                    / <a href="<?php echo site_url($article['category_parent_id']['category_link']); ?>"><?php echo $article['category_parent_id']['category_name']; ?></a>
                    / <a href="<?php echo site_url($article['post']['category_link']); ?>" class="active"><?php echo $article['post']['category_name']; ?></a>
                    <?php } else { ?>
                    / <a href="<?php echo site_url($article['post']['category_link']); ?>" class="active"><?php echo $article['post']['category_name']; ?></a>
                    <?php } ?>
                  </div>
                </div>

                <div class="col-news-title">
                  <h3><?php echo $article['post']['post_title']; ?></h3>
                </div>
                <div class="col-news-meta">
                  <span class="news-meta-datetime"><i class="glyphicon glyphicon-time"></i>&nbsp;&nbsp;<?php echo id_time($article['post']['post_date_created']); ?></span>
                  <span class="news-meta-author"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $article['post']['post_author_name'] ?></span>
                </div>
                <div class="col-news-content">
                  <figure>
                    <?php
                      $dc = content_time($article['post']['post_date_created']);
                      $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['post']['post_id'] . '/';
                    ?>
                    <img src="<?php echo $url_img . $article['post']['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                    <figcaption><?php echo $article['post']['post_image_caption']; ?></figcaption>
                    <!-- /21622890900/ID_ayosurabaya.com_pc_article_Mid1_300x250//336x280//640x360 -->
                    <center>
                      <div id='div-gpt-ad-1567136321673-0'>
                        <script>
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567136321673-0'); });
                        </script>
                      </div>
                    </center>
                  </figure>

                  <?php
                    // Content
                    echo htmlspecialchars_decode(
                      preg_replace('/\[.*?\]/', '',
                        $article['post']['post_content']
                      )
                    );
                  ?>
                </div>

                <div class="col-news-tags">
                  <h4><i class="fa fa-tags"></i>&nbsp;&nbsp;Tags Terkait</h4>
                  <ul>
                    <?php
                      if(!empty($article['tags'])) {
                        foreach($article['tags'] as $at) {
                    ?>
                    <li><a href="<?php echo site_url('tag/' . $at['slug']); ?>"><?php echo $at['tag']; ?></a></li>
                    <?php
                        }
                      }
                    ?>
                  </ul>
                </div>

                <div class="news-meta-footer">
                  <?php if($article['post']['post_source'] != '') { ?>
                  <p>Source: <?php echo $article['post']['post_source']; ?></p>
                  <?php } ?>
                  <?php if($article['post']['post_editor'] != '') { ?>
                  <p>Editor: <?php echo $article['post']['nama']; ?></p>
                  <?php } ?>
                </div>
            <script>
                function addLink() {
                var editor = "<?php echo $article['post']['nama']; ?>";
                var body_element = document.getElementsByTagName('body')[0];
                var selection;
                selection = window.getSelection();
                var pagelink = "<br/><br/>---------<br/>Artikel ini sudah Terbit di <?php echo $this->config->item('page_meta')['site_name']; ?>, dengan Judul <?php echo $article['post']['post_title']; ?>, pada URL "+document.location.href+" <br/><br/>Penulis: <?php echo $article['post']['post_author_name'] ?><br/>Editor : <?php echo $article['post']['nama']; ?>"; // change this if you want
                var copytext = selection + pagelink;
                var newdiv = document.createElement('div');
                newdiv.style.position='absolute';
                newdiv.style.left='-99999px';
                body_element.appendChild(newdiv);
                newdiv.innerHTML = copytext;
                selection.selectAllChildren(newdiv);
                window.setTimeout(function() {
                body_element.removeChild(newdiv);
                },0);
                }document.oncopy = addLink;
            </script>
               
                <div class="col-md-12 pd-free">
                  <div class="news-share-btn text-center">
                    <div class="col-md-12">
                      <span class="news-share-btn-title">
                        <i class="fa fa-share-alt"></i>&nbsp;&nbsp;
                        Ayo Bagikan!
                      </span>
                    </div>
                    <div class="col-md-12">
                      <div class="sharethis-inline-share-buttons" style="text-align: center;"></div></center>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>

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

                <!-- S: Form Comment -->
                <section class="col-md-12">
                    <div class="headline-bu">
                         <i class="fa fa-comments"></i>&nbsp;&nbsp;
                      Komentar
                    </div>
                    <div class="headline-footer"></div>
                    <style>
                      #custom-content-1 {
                        margin: 10px auto 10px;
                        background: #F0E38E;
                        padding: 7.5px 7.5px 10px;
                      }

                      #custom-content-1 p {
                        font-size: 14px;
                        margin: 0px;
                      }
                    </style>
                    <div id="custom-content-1" class="text-center">
                      <p>Komentar sepenuhnya menjadi tanggung jawab pribadi seperti diatur dalam <strong>UU ITE</strong></p>
                    </div>

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

                <!-- S: Related News -->
                <!-- <section class="col-md-12">
                  <div class="news-related">
                    <br>
                    <div class="headline-bu">
                        <i class="fa fa-chain"></i>&nbsp;&nbsp;Artikel Lainnya
                    </div>
                      <div class="headline-footer"></div> 
                    <div class="news-related-content">
                      <ul>
                        <?php //for($i = 0; $i < count($article['related']); $i++) { ?>
                          <?php //if($i % 2 == 0) { ?>
                        <div class="row">
                          <?php //} ?>

                          <?php
                            //$dc = content_time($article['related'][$i]['post_date_created']);
                            //$url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['related'][$i]['post_id'] . '/' . $article['related'][$i]['slug'];
                            //$url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['related'][$i]['post_id'] . '/';
                          ?>

                          <li class="col-md-6 col-xs-12 <?php //echo ($i == 2 || $i == 3 || $i == 6 || $i == 7) ? 'even' : ''; ?>">
                            <a href="<?php //echo $url; ?>">
                            <span class="related-list-title"><?php //echo $article['related'][$i]['post_title']; ?></span>
                            <span class="related-list-image">
                              <img data-original="<?php //echo $url_img . $article['related'][$i]['post_image_thumb']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php //echo $url_img . $article['related'][$i]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" />
                              </noscript>
                            </span>
                            </a>
                          </li>

                          <?php //if($i % 2 == 1) { ?>
                        </div>
                          <?php //} ?>
                        <?php //} ?>

                      </ul>
                    </div>
                  </div>
                </section> -->
                <!-- E: Related News -->

                

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
