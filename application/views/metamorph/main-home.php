<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column -->    

      <!-- big headline top -->
      <?php $this->load->view($this->config->item('template_name') . 'headline'); ?> 
      <!-- left sidebar --> 
      <?php $this->load->view($this->config->item('template_name') . 'sidebar-left'); ?>       
      <!-- main content --> 
      <?php $this->load->view($this->config->item('template_name') . 'content-mid'); ?>
      <!-- right sidebar --> 
      <?php $this->load->view($this->config->item('template_name') . 'sidebar-right'); ?>

    </div><!-- /.row utama -->
    
  </div><!-- /.container 1 -->

  <!-- container section 2 -->
  <div class="container">  
    <!-- section gambar -->      
    <?php $this->load->view($this->config->item('template_name') . 'latest-photo'); ?>
    <!-- section banner horizontal --> 
    <?php $this->load->view($this->config->item('template_name') . 'banner-hor'); ?>
    <!-- section 3 kategori -->      
    <?php $this->load->view($this->config->item('template_name') . 'latest-belowcategory'); ?>
  </div><!-- container section 2 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 