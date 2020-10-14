<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <!-- S: Breadcrumb -->
                <div class="col-news-breadcrumb">
                  <div class="pa">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <?php if($cmeta['parent_id'] > 0) { ?>
                    / <a href="<?php echo site_url($cmeta['data_parent']['category_link']); ?>"><?php echo $cmeta['data_parent']['category_name']; ?></a>
                    / <a href="<?php echo site_url($cmeta['category_link']); ?>" class="active"><?php echo $cmeta['category_name']; ?></a>
                    <?php } else { ?>
                    / <a href="<?php echo site_url($cmeta['category_link']); ?>" class="active"><?php echo $cmeta['category_name']; ?></a>
                    <?php } ?>
                    <!-- <li><a href="" class="rss" title="RSS Feed"><i class="fa fa-rss"></i></a></li> -->
                  </div>
                  <!--<ul>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <?php if($cmeta['parent_id'] > 0) { ?>
                    <li><a href="<?php echo site_url($cmeta['data_parent']['category_link']); ?>"><?php echo $cmeta['data_parent']['category_name']; ?></a></li>
                    <li><a href="<?php echo site_url($cmeta['category_link']); ?>" class="active"><?php echo $cmeta['category_name']; ?></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo site_url($cmeta['category_link']); ?>" class="active"><?php echo $cmeta['category_name']; ?></a></li>
                    <?php } ?>
                    <!-- <li><a href="" class="rss" title="RSS Feed"><i class="fa fa-rss"></i></a></li> -->
                  <!--</ul>-->
                </div>
                <!-- E: Breadcrumb -->

                <div class="col-md-12">
                  <!-- S: Archive Title Head -->
                  <div class="row">
                    <div class="col-md-12 col-news-archive-head">
                      <!--<h3><i class="fa fa-folder-open"></i>&nbsp;&nbsp;<?php echo $cmeta['category_name']; ?></h3>-->
                    </div>
                  </div>
                  <!-- E: Archive Title Head -->


                  <!~~ S: Headline of Archive Section ~~>
                  <div class="row mg-bottom-15" id="headline-archive-slider">
                    <div class="headline-bu"><?php echo $cmeta['category_name']; ?><div class="headline-bu-content"></div></div>
                    <ul class="headline-archive-list">
                      <?php if (count($category) >= 5) { $lc = 5; } else { $lc = count($category); } // loop count ?>
                      <?php for($i = 0; $i < $lc; $i++) { ?>
                        <?php
                          $dc = content_time($category[$i]['post_date_created']);
                          $dp = id_time($category[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $category[$i]['post_id'] . '/' . $category[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $category[$i]['post_id'] . '/';
                        ?>
                      <li data-thumb="<?php echo $url_img . $category[$i]['post_image_thumb']; ?>">
                        <figure>
                          <img src="<?php echo $url_img . $category[$i]['post_image_content']; ?>" class="img-responsive" />
                          <figcaption style="    bottom: 0px;">
                            <span class="headline-post-meta">
                              <span class="date">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<?php echo $dp; ?>
                              </span>
                              <span class="author">
                                <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $category[$i]['author']; // looks like this is for reporter name instead of editor name ?>
                              </span>
                            </span>
                            <span class="headline-post-author">
                            </span>
                            <a href="<?php echo $url; ?>">
                              <?php echo $category[$i]['post_title']; ?>
                            </a>
                            <?php /* <span class="headline-desc">
                              <?php echo limit_words($category[$i]['post_summary'], 25); ?>
                            </span> */ ?>
                          </figcaption>
                        </figure>
                      </li>
                    <?php } ?>
                    </ul>
                  </div>
                  <!~~ E: Headline of Archive Section ~~>

     
 
             <!-- S: News List -->
                  <div class="row archive-news-content">
                    <ul>
                      <?php for($i = 0; $i < count($category); $i++) { ?>
                        <?php
                          $dc = content_time($category[$i]['post_date_created']);
                          $dp = id_time($category[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $category[$i]['post_id'] . '/' . $category[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $category[$i]['post_id'] . '/';
                        ?>
                      <li>
                        <span class="archive-news-list">
                          <span class="archive-news-meta">
                            <b style="color:#EA0028;"><?php echo $cmeta['category_name']; ?></b>
                            <span class="archive-news-date" style="color:#959595;">
                              <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $dp; ?>
                            </span>
                            <a href="<?php echo $url; ?>" class="archive-news-list-title"><?php echo $category[$i]['post_title']; ?></a>
                            <!--<span class="archive-news-date" style="color:#959595;">
                              <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $dp; ?>
                            </span>-->
                            <span class="archive-news-list-desc"><?php echo limit_words($category[$i]['post_summary'], 20); ?></span>
                          </span>
                          <a href="<?php echo $url; ?>">
                            <!-- <img data-original="<?php echo $url_img . $category[$i]['post_image_thumb']; ?>" class="img-lazy" />
                            <noscript> -->
                              <img src="<?php echo $url_img . $category[$i]['post_image_thumb']; ?>" />
                            <!-- </noscript> -->
                          </a>
                        </span>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <!-- E: News List -->
                </div>
 
                <!-- S: Pagination -->
                <?php if ($page['links'] != '') { ?>
                <div class="row">
                  <div class="col-md-12 col-pagination">
                    <ul>
                      <?php echo $page['links']; ?>
                      <!-- <li><a href="" class="active">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li><a href="">5</a></li>
                      <li><a href="">Berikutnya <i class="fa fa-angle-right"></i></a></li>
                      <li><a href="">Akhir <i class="fa fa-angle-double-right"></i></a></li> -->
                    </ul>
                  </div>
                </div>
                <?php } ?>
                <!-- E: Pagination -->

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