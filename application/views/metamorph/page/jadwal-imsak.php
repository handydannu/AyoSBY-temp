<?php $this->load->view($this->config->item('template_name') . 'header'); ?>



        <!-- S: Main Container -->

        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php //echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              
              <article class="col-md-8">
                <!-- S: Breadcrumb -->
                <div class="col-news-breadcrumb">
                  <div class="pa">
                   <a href="<?php echo site_url(); ?>">Home</a>
                    / <a href="<?php echo base_url();?>pencarian" class="active">Jadwal Imsakiyah Ramadhan 1441 H / 2020 H</a>
                  </div>
                </div>
                <!-- E: Breadcrumb -->
              <div class="line-in">Jadwal Imsakiyah Ramadhan 1441 H / 2020 H</div>
              <div class="clear"></div>
              <img src="assets/img/imsakiyah/Jadwal.jpg" style="width: 100%;">
             
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