
<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            <!-- S: Row Headline, Terbaru & Terpopuler -->
            <div class="row row-headline">
            <?php if($nav['site_view_mobile'] == false) { // on desktop view ?>
             <!--  <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?> -->
            <?php } ?>

              <section id="headline-recent-section" class="col-md-8 col-xs-12 mg-top-20">
          	    <?php $this->load->view($this->config->item('template_name') . 'home-headline'); ?>
               <br>
               <?php // $this->load->view($this->config->item('template_name') . 'home-corona'); ?>

                <?php $this->load->view($this->config->item('template_name') . 'home-recent'); ?>

                <?php //$this->load->view($this->config->item('template_name') . 'home-interaktif'); ?>

                <?php //$this->load->view($this->config->item('template_name') . 'home-bisnis'); ?>
              </section> 

              <?php $this->load->view($this->config->item('template_name') . 'home-sidebar-level-1'); ?>

            </div>
            <div class="clearfix"></div>
            <!-- E: Row Headline, Terbaru & Terpopuler -->
            <?php $this->load->view($this->config->item('template_name') . 'home-recent-foto'); ?>

            <?php $this->load->view($this->config->item('template_name') . 'home-categories'); ?>
           
            <!-- S: Row Regional & Media: Photo & Video Section -->
            <section id="col-media">
              <div class="container pd-free">
                <div class="row">
                  <div class="col-md-8">

                    <?php //$this->load->view($this->config->item('template_name') . 'home-photo'); ?>

                    <?php //$this->load->view($this->config->item('template_name') . 'home-video'); ?>

                    <?php //$this->load->view($this->config->item('template_name') . 'home-regional'); ?>

                    <?php //$this->load->view($this->config->item('template_name') . 'home-regional'); ?>

                    <?php // $this->load->view($this->config->item('template_name') . 'home-recent-bottom'); ?>
                    
                  </div>

                 <?php //$this->load->view($this->config->item('template_name') . 'home-sidebar-level-2'); ?>

                  <?php //$this->load->view($this->config->item('template_name') . 'home-sidebar-regional'); ?>
                </div>
              </div>
            </section>
            
            <div class="clearfix"></div>
            <!-- E: Row Regional & Media: Photo & Video Section -->
          </div>
          <?php //$this->load->view($this->config->item('template_name').'home-ads-footer');?>
        </main>
        <!-- E: Main Container -->

<?php //$this->load->view($this->config->item('template_name') . 'popup'); ?>

<?php $this->load->view($this->config->item('template_name') . 'footer'); ?>
