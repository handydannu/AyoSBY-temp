<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->    

    <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

    <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-arrow p-0">
          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" class="text-uppercase pl-3">Home</a></li>
          <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">Terms and Conditions</li>
        </ol>
      </nav><!-- breadcrumb -->

      <section>          
      <button class="btn-darkmode" onclick="myFunction()"><i class="fas fa-lightbulb"></i> DARK MODE</button>
      <h2 class="page-subheader mt-3">Term and Conditions</h2>
      <p>Pengguna yang mengunjungi/ mengakses/ memanfaatkan fitur layanan <strong><span class="ayo-orange">Ayo</span>Surabaya</strong> dianggap telah membaca, memahami dan menyetujui syarat-syarat dan ketentuan layanan yang berlaku di situs ini.</p>

      <p><strong><span class="ayo-orange">Ayo</span>Surabaya</strong> berhak untuk menambah atau mengurangi peraturan dan/ atau menambah syarat-syarat dan ketentuan yang berlaku setiap saat tanpa pemberitahuan terlebih dahulu dan pengguna terikat oleh setiap perubahan tersebut.</p>

      <p>Pengguna yang memanfaatkan fitur <strong><span class="ayo-orange">Ayo</span>Surabaya</strong> wajib untuk mematuhi Ketentuan Layanan dan aturan perundang undangan yang berlaku. Pengelola berhak untuk memuat atau tidak memuat, mengedit dan atau menghapus data atau informasi yang disampaikan pengguna.</p>

      <p>Komentar adalah tanggapan pribadi dan sepenuhnya tanggungjawab pengguna atau diluar tanggungjawab <strong><span class="ayo-orange">Ayo</span>Surabaya</strong>. Pengelola berhak untuk memuat atau tidak memuat atau mengubah kata-kata yang berbau pelecehan, intimidasi, atau kata-kata yang menyerang/ tidak sesuai dengan norma-norma suku, agama, ras, dan antar golongan.</p>
      
      </section>       

    </div><!-- end col read -->

    <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 