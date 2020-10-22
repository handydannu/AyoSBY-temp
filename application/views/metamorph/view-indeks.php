<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>

  <div class="container"><!-- Page 1 -->     

    <div class="row"><!-- main Column --> 
      <!-- left sidebar --> 
      <?php $this->load->view($this->config->item('template_name') . 'sidebar-left'); ?> 
      
      <div class="col-lg-6 col-sm-12 mt-3">

  <h4 class="pt-2 mml-1">
    <span data-title="INDEKS BERITA"><i class="fas fa-list-ol"></i> INDEKS BERITA</span>
  </h4>

  <form action="<?php echo site_url('index'); ?>" method="post" role="form" id="form-src-idx" class="mb-2 mml-1" style="background-color: #e6e6e6;padding: 10px 20px;">
    <div class="form-row align-items-center">
      <div class="col-sm-4 mt-1">     
         <div class="input-group">
            <input placeholder="Pilih tanggal" type="text" class="form-control datepicker rounded-0" name="input_date" value="<?php echo $input_date; ?>" id="datetimepicker">
            <div class="input-group-append">
              <span class="input-group-text rounded-0" id="tgl_indeks"><i class="far fa-calendar-alt"></i></span>
            </div>
          </div>
      </div>
      <div class="col-sm-6 mt-1">        
          <select id="index-category" name="category_id" class="form-control rounded-0"><i class="fas fa-list-alt"></i>
            <option value="0" <?php echo ($category_id == 0) ? 'selected="selected"' : ''; ?>>Semua Kanal</option>
            <option value="1" <?php echo ($category_id == 1) ? 'selected="selected"' : ''; ?>>Surabaya Raya</option>
            <option value="19" <?php echo ($category_id == 19) ? 'selected="selected"' : ''; ?>>Umum</option>
            <option value="5" <?php echo ($category_id == 5) ? 'selected="selected"' : ''; ?>>Persebaya</option>
            <option value="7" <?php echo ($category_id == 7) ? 'selected="selected"' : ''; ?>>Wisata</option>
            <option value="9" <?php echo ($category_id == 9) ? 'selected="selected"' : ''; ?>>Trending</option>
            <option value="991" <?php echo ($category_id == 991) ? 'selected="selected"' : ''; ?>>Foto</option>
            <option value="992" <?php echo ($category_id == 992) ? 'selected="selected"' : ''; ?>>Video</option>
          </select>
      </div>
      <div class="col-sm-2 mt-1">      
        <button name="tampilkan"  type="submit" class="btn btn-surabaya rounded-0">PILIH</button>
      </div>
    </div>
  </form>

  <div class="row">
    <!-- list indeks -->
    <?php // _d($index); ?>
      <?php $i = 0; ?>
      <?php foreach ($index as $idx) { ?>
        <?php
          $dc   = content_time($idx['post_date_created']);

          if($idx['post_type'] == $this->config->item('post_type')['photo']) {
            $idx['category_link']     = 'foto';
            $idx['category_name']     = 'Foto';
            $url    = site_url('view');
            $icon   = 'camera';
          } else if($idx['post_type'] == $this->config->item('post_type')['video']) {
            $url    = site_url('watch');
            $icon   = 'video-camera';
          } else {
            $url    = site_url('read');
            $icon   = 'folder-open';
          }
          $url  .= '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $idx['post_id'] 
                . '/' . $idx['slug'];
          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $idx['post_id'] . '/';
        ?>
    <div class="col-lg-5 col-sm-5 p-1">
        <a href="<?php echo $url; ?>"><img class="img-fluid headline-img-sm shade" src="<?php echo $url_img . $idx['post_image_thumb']; ?>"></a>
    </div>
    <div class="col-lg-7 col-sm-7 pl-2 mt-1">            
      <span class="mt-0 sub-head-cat"><a href="<?php echo site_url($idx['category_link']); ?>" class="sub-head-box"><?php echo $idx['category_name']; ?></a></span> 
      <span class="mt-0 sub-head-date"><i class="fas fa-clock"></i> &nbsp;<?php echo substr($idx['post_date'], 11, 5).' WIB' ?></span>        
      <p class="mt-2">
        <a class="sub-head-18" href="<?php echo $url; ?>"><?php echo $idx['post_title'] ?></a>
      </p>
    </div><!-- number 1 -->
    <div class="col-lg-12"><hr class="lb-0"></div>
    <?php } ?>
  </div><!-- berita terbaru -->      

</div>
      <!-- right sidebar --> 
    <?php $this->load->view($this->config->item('template_name') . 'sidebar-right'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?>