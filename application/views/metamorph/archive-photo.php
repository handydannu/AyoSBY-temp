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
                  <ul>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('foto'); ?>" class="active">Foto</a></li>                
                  </ul>
                </div>
                <!-- E: Breadcrumb -->

                <div class="col-md-12">
                  <!-- S: Archive Title Head -->
                  <div class="row">
                    <div class="col-md-12 col-news-archive-head">
                      <h3><h3><i class="fa fa-camera"></i>&nbsp;&nbsp;Foto</h3></h3>
                    </div>
                  </div>
                  <!-- E: Archive Title Head -->

                  <!-- S: Headline of Archive Section -->
                  <div class="row mg-bottom-15" id="headline-archive-slider">
                    <ul class="headline-archive-list">
                      <?php if (count($photo) >= 5) { $lc = 5; } else { $lc = count($photo); } // loop count ?>
                      <?php for($i = 0; $i < $lc; $i++) { ?>
                        <?php
                          $dc = content_time($photo[$i]['post_date_created']);
                          $dp = id_time($photo[$i]['post_date']);

                          $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . $photo[$i]['post_name'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                        ?>
                      <li data-thumb="<?php echo $url_img . $photo[$i]['post_image_thumb']; ?>">
                        <figure>
                          <img src="<?php echo $url_img . $photo[$i]['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                          <figcaption>
                            <span class="headline-post-meta">
                              <span class="date">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<?php echo $dp; ?>
                              </span>
                              <span class="author">
                                <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $photo[$i]['nama']; // looks like this is for reporter name instead of editor name ?>
                              </span>
                            </span>
                            <span class="headline-post-author">
                            </span>
                            <a href="<?php echo $url; ?>">
                              <?php echo $photo[$i]['post_title']; ?>
                            </a>
                            <span class="headline-desc">
                              <?php echo limit_words($photo[$i]['post_summary'], 25); ?>
                            </span>
                          </figcaption>
                        </figure>
                      </li>
                    <?php } ?>
                    </ul>
                  </div>
                  <!-- E: Headline of Archive Section -->

                  <!-- S: News List -->
                  <div class="row archive-news-content">
                    <ul>
                      <?php for($i = 5; $i < count($photo); $i++) { ?>
                        <?php
                          $dc = content_time($photo[$i]['post_date_created']);
                          $dp = id_time($photo[$i]['post_date']);

                          $url = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . $photo[$i]['post_name'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                        ?>
                      <li>
                        <span class="archive-news-list">
                          <span class="archive-news-meta">
                            <a href="<?php echo $url; ?>" class="archive-news-list-title"><?php echo $photo[$i]['post_title']; ?></a>
                            <span class="archive-news-list-desc"><?php echo limit_words($photo[$i]['post_summary'], 25); ?></span>
                            <span class="archive-news-date">
                              <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $dp; ?>
                            </span>
                          </span>
                          <a href="<?php echo $url; ?>">
                              <img src="<?php echo $url_img . $photo[$i]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" />
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