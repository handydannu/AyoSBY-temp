<!-- Sidebar kanan -->
<div class="col-lg-4 col-sm-12 mt-3 mb-3">       
  <!-- ads banner 300 -->  
  <?php $this->load->view($this->config->item('template_name') . 'banner-300'); ?> 
  <!-- 10 populer -->  
  <?php $this->load->view($this->config->item('template_name') . 'latest-populer'); ?> 
  <!-- sticky area -->
  <div class="sidebar-sticky ">     
    <!-- latest wisata -->           
    <?php $this->load->view($this->config->item('template_name') . 'latest-wisata'); ?> 
    <div class="mt-3"><!-- ads banner --> 
      <?php $this->load->view($this->config->item('template_name') . 'banner-300'); ?> 
    </div>
  </div><!-- sticky -->
</div><!-- end Sidebar kanan -->