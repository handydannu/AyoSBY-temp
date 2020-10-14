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
                  <h3>Management &amp; Editorial</h3>
                </div>
                
                <div class="col-news-content col-page-content">
                  <h2 class="page-subheader">Management</h2>
                  <ul class="list-page-management">
                    <li><strong>Chief Executive Officer</strong> : Hilman Hidayat</li>
                    <li><strong>Chief Creative Officer</strong> : Ruddy Sukarno</li>
                    <li><strong>Chief Finance Officer</strong> : Endang Junaedi</li>
                    <li><strong>Chief Business Officer</strong> : Roberto A. M. Purba</li>
<!--                     <li><strong>GM Pengembangan &amp; Produksi</strong> : Dadan Muhanda</li> -->
                  </ul>
                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Editorial</h2>
                  <ul class="list-page-management">
                    <li><strong>Direktur Pemberitaan</strong> : Rahim Asyik</li>
                    <li><strong>Pemimpin Redaksi</strong> : Adi Ginanjar</li>
                    <li><strong>Editor</strong> : Andres Fatubun, Andri Ridwan Fauzi, Rizma Riyandi</li>
                    <li><strong>Editor Bahasa</strong> : M. Naufal Hafizh</li>
                    <li><strong>Reporter</strong> : Ananda M. Firdaus, Anggun Nindita, Arditya Pramono, Arfian Jammul, E. Reni Nuraisyah, Faqih R. Syafei, Hengky Sulaksono, Husnul Khatimah, Mildan Abdalloh, Dadi Haryadi, Nur Khansa Ranawati, Fathia Uqimul Haq, Arie Widiarto.</li>
                    <li><strong>Fotografer</strong> : Danny Ramdhani, Irfan Alfaritsi</li>
                    <!-- <li><strong>Videografer</strong> : Suhardi, Gifar Perdana Kusuma</li> -->
                    <li><strong>Video Editor</strong> : Muhammad Irfan Syah</li>
                  </ul>
                  <p>&nbsp;</p>

                  <h2 class="page-subheader">IT, Social Media and Creative</h2>
                  <ul class="list-page-management">
                    <li><strong>IT and Developer</strong> : Muhammad Riza Alifi, Ahmad Kusumadijaya, Rizal Muhammad H.</li>
                    <li><strong>Social Media Officer</strong> : Amelia Agustina, Astri Mayangsari, Yurizka Milantari, Levi Rachmalia, Bella Citra Putri Maharani, Reva Nur Azizah</li>
                    <li><strong>Designer</strong> : Satrio Iman N., Attia Dwi Pinasti, M. Irfan Abiyyudistira</li>
                    <!-- <li><strong>Motion Graphic</strong> : Defrina M. Rahma</li> -->
                  </ul>
                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Marketing &amp; Sales</h2>
                  <ul class="list-page-management">
                  <i><strong>GM Marketing Executive</strong> : Dadan Muhanda</i>
                    <li><strong>Marketing Executive</strong> : Kusnadi, Ellisa Nursanti</li>
                    <li><strong>Admin</strong> : Astri Dwi S., Marcella Alexandria</li>
                    <li><strong>Tax &amp; Finance</strong> : Liza Septiani</li>
                  </ul>
                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Publisher</h2>
                  <ul class="list-page-management">
                    <li><strong>PT. AYO MEDIA NETWORK</strong></li>
                    <li><i class="fa fa-institution"></i>&nbsp;&nbsp;Jl. Terusan Halimun No.50, Lkr. Sel., Lengkong, Kota Bandung, Jawa Barat 40264</li>
                    <li><i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;(024) 3514115</li>
                    <li><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;redaksi@ayomedia.com</li>
                  </ul>
                  <p><strong>SK Kemenkumham RI No. AHU-0010280.AH.01.01.TAHUN 2017</strong></p>
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