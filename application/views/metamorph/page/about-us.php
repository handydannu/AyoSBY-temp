 <?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->    

      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

           <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-arrow p-0">
              <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" class="text-uppercase pl-3">Home</a></li>
              <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">About Us</li>
            </ol>
          </nav><!-- breadcrumb -->

          <section>          
          <button class="btn-darkmode" onclick="myFunction()"><i class="fas fa-lightbulb"></i> DARK MODE</button>
          <h2 class="page-subheader mt-3">About Us</h2>
          <p>Mengakses berita melalui internet sudah menjadi gaya hidup. Seiring dengan arus tersebut kami mencoba hadir untuk melengkapi pilihan dan kebutuhan pembaca, berharap membuat hidup anda makin berwarna.</p>

          <h2 class="page-subheader mt-3">Kenapa <strong><span class="ayo-orange">Ayo</span>Surabaya</strong></h2>
          <p>Tak dipungkiri lokalitas dan kecintaan pada tempat berpijak atau berasal sejatinya ada di setiap diri manusia. Karena itu segenap peristiwa, kabar atau kehebohan akan selalu menarik bagi mereka yang terlibat di dalamnya. Mencoba memenuhi kebutuhan dan kerinduan akan kabar dan cerita-cerita tempat bernaung inilah <strong><span class="ayo-orange">Ayo</span>Surabaya</strong> hadir dengan menawarkan konten situs berita yang lebih banyak bercerita tentang Surabaya.

          <p>Sejalan dengan semangat untuk memberi yang terbaik bagi Surabaya tercinta tentu kami tak cuma menawarkan berita.</p>

          <p>Kami juga memberikan ruang yang sangat luas bagi masyarakat dan komunitas untuk turut memberikan informasi melalui kanal <strong><span class="ayo-orange">Ayo</span>Netizen</strong>.</p>

          <p>Jadi, mimpi besar kami semoga <strong><span class="ayo-orange">Ayo</span>Surabaya</strong> tak hanya menjadi tempat mencari berita, tetapi juga rumah besar bagi interaksi dan informasi komunitas kota Surabaya.</p>

          <p>Semoga.</p>

          <h2 class="page-subheader mt-3">Visi <strong><span class="ayo-orange">Ayo</span>Surabaya</strong></h2>
          <p><strong><em>"Menjadi perusahaan multimedia nomor satu di Surabaya".</em></strong></p>


          <h2 class="page-subheader mt-3">Misi <strong><span class="ayo-orange">Ayo</span>Surabaya</strong></h2>
            <ol>
              <li>Mendekatkan diri dengan masyarakat di Surabaya</li>
              <li>Menyajikan berita seputar Surabaya</li>
              <li>Wadah sekaligus rumah bagi masyarakat di Surabaya dalam berbagai informasi</li>
              <li>Menyajikan informasi yang inspiratif, komunikatif dan semangat positif</li>
            </ol>
          </section>       

      </div><!-- end col read -->

      <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 