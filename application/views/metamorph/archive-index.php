<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <!-- S: Breadcrumb -->
                <div class="col-news-breadcrumb">
                  <div class="pa">
                   <a href="<?php echo site_url(); ?>">Home</a>
                    / <a href="/index" class="active">Index</a>
                  </div>
                </div>
                <!-- E: Breadcrumb -->

                <div class="col-index-title">
                  <h3><?php echo id_time($q_input_date); ?></h3>
                </div>
                <div class="col-index-content">
                  <div id="col-form-src-idx">
                    <form action="<?php echo site_url('index'); ?>" method="post" class="form-inline" role="form" id="form-src-idx">
                      <div class="form-group">
                        <div class="input-group date">
                          <input type="text" name="input_date" class="form-control" data-date-format="dd/mm/yyyy" value="<?php echo $input_date; ?>" id="datetimepicker" autocomplete="off" />
                          <label for="datetimepicker" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></label>
                        </div>     
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <select id="index-category" name="category_id" class="form-control">
                            <option value="0" <?php echo ($category_id == 0) ? 'selected="selected"' : ''; ?>>Semua Kanal</option>
                            <option value="1" <?php echo ($category_id == 1) ? 'selected="selected"' : ''; ?>>Surabaya Raya</option>
                            <option value="19" <?php echo ($category_id == 19) ? 'selected="selected"' : ''; ?>>Umum</option>
                            <option value="5" <?php echo ($category_id == 5) ? 'selected="selected"' : ''; ?>>Persebaya</option>
                            <option value="7" <?php echo ($category_id == 7) ? 'selected="selected"' : ''; ?>>Wisata</option>
                            <option value="9" <?php echo ($category_id == 9) ? 'selected="selected"' : ''; ?>>Pendidikan</option>
                            <option value="991" <?php echo ($category_id == 991) ? 'selected="selected"' : ''; ?>>Foto</option>
                            <option value="992" <?php echo ($category_id == 992) ? 'selected="selected"' : ''; ?>>Video</option>
                          </select>
                          <label for="index-category" class="input-group-addon"><i class="fa fa-folder-open"></i></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button name="tampilkan" type="submit" class="btn btn-warning">Lihat Indeks</button>
                      </div>       
                    </form>
                  </div>
                  <div class="line-in">Indeks Berita</div>
                  <div class="clear"></div>
                  <ul>
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
                      ?>
                    <li <?php echo ($i % 2 == 1) ? 'class="even"' : ''; ?>>
                      <span class="index-title-list"><a href="<?php echo $url; ?>" target="_blank" title="<?php echo $idx['post_title'] ?>"><?php echo $idx['post_title'] ?></a></span>
                      <span class="index-meta-list">
                        <span class="index-meta-time"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo substr($idx['post_date'], 11, 5).' WIB' ?></span>
                        <span class="index-meta-category"><i class="fa fa-<?php echo $icon; ?>"></i>&nbsp;&nbsp;<a href="<?php echo site_url($idx['category_link']); ?>" target="_blank" title="<?php echo $idx['category_name']; ?>"><?php echo $idx['category_name']; ?></a></span>
                      </span>
                    </li>
                      <?php $i++; ?>
                    <?php } ?>
                  </ul>
                </div>
				<?php $this->load->view($this->config->item('template_name') . 'home-recent-indek'); ?>
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