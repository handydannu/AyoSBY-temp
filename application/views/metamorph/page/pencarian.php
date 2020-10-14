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
                    / <a href="<?php echo base_url();?>pencarian" class="active">Pencarian</a>
                  </div>
                </div>
                <!-- E: Breadcrumb -->

                <script>
                (function() {
                  var cx = '013122640796285219442:wjc0th_7ijq';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
              <gcse:search></gcse:search>
              <style>
                .gsc-webResult.gsc-result {background: #FFFFFF !important;}
                .gsc-webResult.gsc-result:hover {background: #FFFFFF !important;}
                .gsc-input-box {border: 2px solid #35579f;}
                .gsc-search-button-v2, .gsc-search-button-v2:hover, .gsc-search-button-v2:focus {border-color: #35579f;background-color: #35579f;}
              </style>
              <div class="line-in">Berita Terbaru</div>
              <div class="clear"></div>
              <?php $this->load->view($this->config->item('template_name') . 'home-recent-indek'); ?>
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