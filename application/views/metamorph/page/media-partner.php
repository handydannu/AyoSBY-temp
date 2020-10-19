<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column --> 

      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-arrow p-0">
          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" class="text-uppercase pl-3">Home</a></li>
          <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">Media Partner</li>
        </ol>
      </nav><!-- breadcrumb -->

      <section>          
        <button class="btn-darkmode" onclick="myFunction()"><i class="fas fa-lightbulb"></i> DARK MODE</button>
        <h2 class="page-subheader mt-3">Media Partner</h2>

        <p><strong>Proposal dapat dikirim ke:</strong></p>
        <p>Kantor <strong><span class="ayo-orange">Ayo</span>Surabaya</strong></p>
        <p><strong>Alamat</strong>: Jl. Erlangga Tengah 3 No. 17 Semarang 50241</p>
        <p><strong>Email</strong>: semarang@ayomedia.com</p>
        <p><strong>WhatsApp</strong>: +62 813-2661-8427</p>
        <p><strong>LINE</strong>: <a href="https://line.me/R/ti/p/%40ayobandung.com">@ayobandung.com</a> (gunakan @), atau scan QR code Akun Line di bawah ini: </p>
        <img class="img-fluid mx-auto d-block mb-2" src="https://www.ayosurabaya.com/assets/img/page-advertise/socmed_line_qr.jpg">
        <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.277271806632!2d110.426114!3d-6.992948000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5f7ff6c531%3A0x9e863969a7fe66f0!2sJl.%20Erlangga%20Tengah%20No.3%2C%20Pleburan%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050241!5e0!3m2!1sid!2sid!4v1601969756504!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      </section>       

    </div><!-- end col read -->

    <!-- right sidebar inner --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 