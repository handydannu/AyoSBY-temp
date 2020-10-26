<!-- sidebar kiri hilang kalau mobile -->
<div class="col-lg-2 col-sm-12 mt-3 fading">  
  <!-- banner vertical -->           
  <?php $this->load->view($this->config->item('template_name') . 'banner-ver'); ?>        
  <!-- latest netizen -->
  <?php $this->load->view($this->config->item('template_name') . 'latest-netizen'); ?>    
  <!-- banner vertical sticky -->        
  <div class="sidebar-sticky mt-4 mb-2">
    <?php $this->load->view($this->config->item('template_name') . 'banner-ver'); ?> 
  </div>
</div><!-- sidebar kiri -->