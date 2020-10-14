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
                  <h3>Advertise</h3>
                </div>
                
                <div class="col-news-content col-page-content col-page-advertise">
                  <p><strong>Untuk pemasangan iklan, hubungi kami:</strong></p>
                  <p class="contact-info"><strong>Contact Person</strong>: Kusnadi/ Ellisa Nursanti</p>
                  <!-- <p>AyoBandung.com</p> -->
                  <p class="contact-info"><strong>Alamat</strong>: <!-- <i class="fa fa-institution"></i>&nbsp;&nbsp; -->Jl. Terusan Halimun No. 50, Kota Bandung, Jawa Barat, 40263.</p>
                  <p class="contact-info"><strong>Email</strong>: <!-- <i class="fa fa-envelope"></i>&nbsp;&nbsp; -->marketing@ayobandung.com</p>
                  <p class="contact-info"><strong>Telepon</strong>: <!-- <i class="fa fa-phone"></i>&nbsp;&nbsp; --> (022) 7351 7371</p>
                  <p class="contact-info"><strong>WhatsApp</strong>: <!-- <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; -->0811 217 4543</p>
                  <p class="contact-info">
                    <strong>LINE</strong>: <a href="https://line.me/R/ti/p/%40ayobandung.com" target="_blank" title="Line @ayobandung.com">@ayobandung.com</a> (gunakan @), atau scan QR code Akun Line di bawah ini:
                    <img id="line-qr" src="assets/img/page-advertise/socmed_line_qr.jpg" class="img-responsive" />
                  </p>
                  <p>&nbsp;</p>
                  <p class="contact-info"><strong>Lokasi Pada Google Maps</strong>:</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6929830103645!2d107.62379521477295!3d-6.92725379499494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e92ac4dae029%3A0x8d89dab3aff608a5!2sAyo+Media+Network+(Ayo+Bandung)!5e0!3m2!1sen!2sid!4v1545122491151" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                  
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