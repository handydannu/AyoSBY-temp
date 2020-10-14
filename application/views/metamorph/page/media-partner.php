<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php //echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <div class="col-news-title col-page-title">
                  <h3>Media Partner</h3>
                </div>
                
                <div class="col-news-content col-page-content col-page-advertise">
                  <p><strong>Proposal dapat dikirim ke:</strong></p>
                  <p>Kantor <strong><span class="ayo-orange">Ayo</span>Surabaya.com</strong></p>
                  <p class="contact-info"><strong>Alamat</strong>: Jl. Erlangga Tengah 3 No. 17 Semarang 50241</p>
                  <p class="contact-info"><strong>Email</strong>: semarang@ayomedia.com</p>
                  <p class="contact-info"><strong>WhatsApp</strong>: +62 813-2661-8427</p>
                  <p class="contact-info">
                    <strong>LINE</strong>: <a href="https://line.me/R/ti/p/%40ayobandung.com" target="_blank" title="Line @ayobandung.com">@ayobandung.com</a> (gunakan @), atau scan QR code Akun Line di bawah ini:
                    <img id="line-qr" src="assets/img/page-advertise/socmed_line_qr.jpg" class="img-responsive" />
                  </p>
                  <p>&nbsp;</p>
                  <p class="contact-info"><strong>Lokasi Pada Google Maps</strong>:</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1385217019533!2d110.4239588153013!3d-6.992961470430454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5f7ff6c531%3A0x9e863969a7fe66f0!2sJl.%20Erlangga%20Tengah%20No.3%2C%20Pleburan%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050241!5e0!3m2!1sid!2sid!4v1571309411460!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>       
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