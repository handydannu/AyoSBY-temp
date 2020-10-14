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
                <!-- <div class="col-news-breadcrumb"> -->
                  <!-- <ul> -->
                    <!-- <li><a href="<?php echo site_url(); ?>">Home</a></li> -->
                    <!-- <li><a href="" class="rss" title="RSS Feed"><i class="fa fa-rss"></i></a></li> -->
                  <!-- </ul> -->
                <!-- </div> -->
                <!-- E: Breadcrumb -->

                <div class="col-news-title col-page-title">
                  <h3>Terms &amp; Conditions</h3>
                </div>
                
                <div class="col-news-content col-page-content">
                  <p>Pengguna yang mengunjungi/ mengakses/ memanfaatkan fitur layanan <strong><span class="ayo-orange">Ayo</span>Bogor.com</strong> dianggap telah membaca, memahami dan menyetujui syarat-syarat dan ketentuan layanan yang berlaku di situs ini.</p>

                  <p><strong><span class="ayo-orange">Ayo</span>Bogor.com</strong> berhak untuk menambah atau mengurangi peraturan dan/ atau menambah syarat-syarat dan ketentuan yang berlaku setiap saat tanpa pemberitahuan terlebih dahulu dan pengguna terikat oleh setiap perubahan tersebut.</p>

                  <p>Pengguna yang memanfaatkan fitur ayoBogor.com wajib untuk mematuhi Ketentuan Layanan dan aturan perundang undangan yang berlaku. Pengelola berhak untuk memuat atau tidak memuat, mengedit dan atau menghapus data atau informasi yang disampaikan pengguna.</p>

                  <p>Komentar adalah tanggapan pribadi dan sepenuhnya tanggungjawab pengguna atau diluar tanggungjawab ayoBogor.com. Pengelola berhak untuk memuat atau tidak memuat atau mengubah kata-kata yang berbau pelecehan, intimidasi, atau kata-kata yang menyerang/ tidak sesuai dengan norma-norma suku, agama, ras, dan antar golongan.</p>
                </div>

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