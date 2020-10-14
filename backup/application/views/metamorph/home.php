
<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            <!-- S: Row Headline, Terbaru & Terpopuler -->
            <div class="row row-headline">
            <?php if($nav['site_view_mobile'] == false) { // on desktop view ?>
              <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>
            <?php } ?>

              <?php /***<!-- S: Banner KPU -->
              <div id="banner-kpu" class="alt">
                <div id="banner-kpu-button">
                  Show
                </div>
                <img src="/assets/ads/2018/06/kpu-big.jpg" />
              </div>
              <!-- E: Banner KPU -->***/ ?>

              <section id="headline-recent-section" class="col-md-8 col-xs-12 mg-top-20">
          	    <?php $this->load->view($this->config->item('template_name') . 'home-headline'); ?>
               <br>
               <?php $this->load->view($this->config->item('template_name') . 'home-ads'); ?>
  <!-- S: Banner w728 2 -->
         <!--     <div class="text-center mg-top-20">
                  <div id="banner-w550-2">
                    <a href="http://www.jabarprov.go.id/" target="_blank" title="">
                      <img src="/assets/img/page-advertise/73-pemprov-jabar-15-08-18.jpg?w=728" class="img-responsive" />
                    </a>
                  </div>
                </div>  ->>
                <!-- E: Banner w728 2 -->


                <?php /***<!-- S: Banner w550 1 -->
                <div class="text-center mg-top-20">
                  <div id="banner-below-headline-1">
                      <div class="banner-bg-text">
                        <h2>Selamat Hari Raya Idul Fitri</h2>
                        <p>1439 Hijriyah</p>
                      </div>
                      <img src="/assets/ads/2018/06/iklan-bersama-summarecon.gif" class="img-responsive" />
                  </div>
                </div>
                <!-- E: Banner w550 1 -->***/




                ?>

                <!-- S: Banner w550 1 -->
                <!-- <div class="text-center mg-top-20">
                  <div id="banner-w550-1">
                    <a href="" target="_blank" title="">
                      <img src="media/img/banner/banner-w550-1.jpg?w=550" class="img-responsive" />
                    </a>
                  </div>
                </div> -->
                <!-- E: Banner w550 1 -->

                <?php $this->load->view($this->config->item('template_name') . 'home-recent'); ?>
                <?php //$this->load->view($this->config->item('template_name') . 'home-interaktif'); ?>
                <?php //$this->load->view($this->config->item('template_name') . 'home-bisnis'); ?>
                <?php $this->load->view($this->config->item('template_name') . 'home-recent-foto'); ?>
                <!-- S: Banner w550 2 -->
                <!-- <div class="text-center mg-top-20">
                  <div id="banner-w550-2">
                    <a href="" target="_blank" title="">
                      <img src="media/img/banner/banner-w550-1.jpg?w=550" class="img-responsive" />
                    </a>
                  </div>
                </div> -->
                <!-- E: Banner w550 2 -->
              </section>

              <?php $this->load->view($this->config->item('template_name') . 'home-sidebar-level-1'); ?>

            </div>
            <div class="clearfix"></div>
            <!-- E: Row Headline, Terbaru & Terpopuler -->

            <!-- S: Slide Banner -->
            <!-- <div id="col-slide-banner" class="container">
              <div class="row">
                <div class="col-md-12 col-banner-container">
                  <div id="slide-banner-3" class="col-banner-list">
                    <a href="" title="Seleksi Calon Anggota Dewan Pengawas LPP RRI Periode 2015 - 2020">
                      <img src="media/img/banner/banner-3.jpg" class="img-responsive" />
                    </a>
                  </div>
                  <div id="slide-banner-2" class="col-banner-list" >
                    <a href="" title="Konsultasi Publik Draft RENSTRA 2015-2019">
                      <img src="media/img/banner/banner-2.jpg" class="img-responsive" />
                    </a>
                  </div>
                  <div id="slide-banner-1" class="col-banner-list">
                    <a href="" title="Kementrian Komunikasi dan Informatika RI - Kontes Desain Web 2015">
                      <img src="media/img/banner/banner-1.jpg" class="img-responsive" />
                    </a>
                  </div>
                  <div class="close-slide-banner-container">
                    <a class="close-slide-banner-btn">
                      <i class="glyphicon glyphicon-remove"></i>
                      <span>Tutup</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-photo"></div> -->
            <!-- E: Slide Banner -->
            <?php $this->load->view($this->config->item('template_name') . 'home-categories'); ?>
           
            <!-- S: Row Regional & Media: Photo & Video Section -->
            <section id="col-media">
              <div class="container pd-free">
                <div class="row">
                  <div class="col-md-8">

                    <!-- S: Banner w550 3 -->
                    <!-- <div class="text-center mg-bottom-15">
                      <div id="banner-w550-3">
                        <a href="http://ayobandung.com/read/2018/04/27/32051/apa-saja-hak-kamu-sebagai-konsumen-keuangan" target="_blank" title="Apa saja hak kamu sebagai konsumen keuangan?">
                          <img src="/assets/ads/2018/06/ojk-468x60.gif?w=468" class="img-responsive" />
                        </a>
                      </div>
                    </div> -->
                    <!-- E: Banner w550 3 -->

                    <?php //$this->load->view($this->config->item('template_name') . 'home-photo'); ?>

                    <!-- S: Banner w550 4 -->
                    <!-- <div class="text-center mg-bottom-15">
                      <div id="banner-w550-4">
                        <a href="" target="_blank" title="">
                          <img src="media/img/banner/banner-w550-1.jpg?w=550" class="img-responsive" />
                        </a>
                      </div>
                    </div> -->
                    <!-- E: Banner w550 4 -->

                    <?php $this->load->view($this->config->item('template_name') . 'home-video'); ?>

                    <!-- S: Banner w550 5 -->
                    <!-- <div class="text-center mg-bottom-15">
                      <div id="banner-w550-5">
                        <a href="" target="_blank" title="">
                          <img src="media/img/banner/banner-w550-1.jpg?w=550" class="img-responsive" />
                        </a>
                      </div>
                    </div> -->
                    <!-- E: Banner w550 5 -->

                    <?php $this->load->view($this->config->item('template_name') . 'home-regional'); ?>

                    <!-- S: Banner w550 6 -->
                    <!-- <div class="text-center mg-bottom-15">
                      <div id="banner-w550-6">
                        <a href="" target="_blank" title="">
                          <img src="media/img/banner/banner-w550-1.jpg?w=550" class="img-responsive" />
                        </a>
                      </div>
                    </div> -->
                    <!-- E: Banner w550 6 -->

                    <?php // $this->load->view($this->config->item('template_name') . 'home-recent-bottom'); ?>
                  </div>

                 <?php $this->load->view($this->config->item('template_name') . 'home-sidebar-level-2'); ?>
                  <?php //$this->load->view($this->config->item('template_name') . 'home-sidebar-regional'); ?>
                </div>
              </div>
            </section>
            
            <div class="clearfix"></div>
            <!-- E: Row Regional & Media: Photo & Video Section -->
          </div>
          <?php $this->load->view($this->config->item('template_name').'home-ads-footer');?>
        </main>
        <!-- E: Main Container -->


<?php $this->load->view($this->config->item('template_name') . 'footer'); ?>
