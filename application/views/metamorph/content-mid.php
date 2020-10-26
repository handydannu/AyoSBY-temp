<div class="col-lg-6 col-sm-12 mt-3">
    <!-- berita terbaru -->        
  	<?php $this->load->view($this->config->item('template_name') . 'latest-news'); ?>
    <!-- BAGIAN PERSEBAYA TERBARU -->        
  	<?php $this->load->view($this->config->item('template_name') . 'latest-persebaya'); ?>
    <!-- hot news -->              
  	<?php $this->load->view($this->config->item('template_name') . 'latest-hotnews'); ?>  
    <!-- latest video --> 
  	<?php $this->load->view($this->config->item('template_name') . 'latest-video'); ?>    
</div>