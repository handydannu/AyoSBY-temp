<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column --> 
      <!-- left sidebar --> 
      <?php $this->load->view($this->config->item('template_name') . 'sidebar-left'); ?> 

      <div class="col-lg-6 col-sm-12 mt-3">

  <h4 class="pt-2 mml-1">
    <span data-title="CARI BERITA"><i class="fas fa-search"></i> CARI BERITA</span>
  </h4>

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
  <hr class="new1">

  <!-- berita terbaru -->        
  <?php $this->load->view($this->config->item('template_name') . 'latest-news'); ?>
    
</div>    <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?>