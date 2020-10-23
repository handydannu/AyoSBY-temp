<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?> 
  <div class="container"><!-- Page main container-->   
    <div class="row"><!-- main Column --> 
      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

        <!-- breadcrumb -->
        <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
          <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
         / <a class="text-uppercase" href="<?php echo site_url('foto'); ?>">FOTO</a>          
      </nav><!-- breadcrumb -->

        
          <h1 class="mt-2">
            <?php echo $photo['slide'][0]['post_title']; ?>
          </h4>

          <!-- AddToAny END -->
          <span class="date-posted"><?php echo id_time($photo['slide'][0]['post_date_created']); ?></span>

          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style mb-1 mt-1">
          <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
          <a class="a2a_button_facebook"></a>
          <a class="a2a_button_twitter"></a>
          <a class="a2a_button_email"></a>
          <a class="a2a_button_whatsapp"></a>
          <button class="btn-darkmode" onclick="myFunction()"><i class="fas fa-lightbulb"></i> DARK MODE</button>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.num_services = 6;
          a2a_config.icon_color = "#35579f";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>


          <div class="mt-2 mb-1">  
            <i class="fas fa-pen fa-xs"></i> PENULIS
            <span class="img-photographer"><?php echo $photo['slide'][0]['nama'];?></span>
              <?php if($photo['slide'][0]['post_source'] != '') { ?>
                    &nbsp;&nbsp;<i class="fas fa-project-diagram"></i> SOURCE<span class="img-photographer"><?php echo $photo['slide'][0]['post_source']; ?></span>
                    <?php } ?>
                    &nbsp;<i class="fas fa-user-clock"></i> EDITOR
                    <?php if($photo['slide'][0]['nama'] != '') { ?>
                    <span class="img-photographer"> <?php echo $photo['slide'][0]['nama']; ?></span>
              <?php } ?>
            </span>
          </div>
          
          <!-- photo carousel -->
              <?php
                    $dc = content_time($photo['slide'][0]['post_date_created']); // for efficiency purposes not getting looped
                    foreach ($photo['slide'] as $ps) {
                          $url_img = $this->config->item('images_photos_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $ps['photo_id'] . '/';
              ?>
              <div class="mt-2">
                <img class="d-block w-100" src="<?php echo $url_img . $ps['image']; ?>">
                <p><?php echo $ps['description']; ?></p>
              </div>

              <?php } ?>

          <section>
            <center><!-- google ads -->
                      <div id='div-gpt-ad-1567136321673-0'>
                        <script>
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567136321673-0'); });
                        </script>
                      </div>
                    </center>
          </section>

        <!-- article ads -->
        <div class="col-12">
          <a href="<?php echo base_url();?>ayo-netizen"><img class="shade img-fluid ads-rectangle" src="https://www.ayosurabaya.com/assets/img/widget/ayo-netizen.jpg">
        </div><!-- article ads -->
        
        <!-- berita terkait -->
        <h4 class="mt-3 mml-1">
          <span data-title="LAINNYA >>"><i class="far fa-newspaper"></i> PHOTO LAINNYA</span>
        </h4>
        <?php $this->load->view($this->config->item('template_name') . 'relate-photo'); ?>

        <div id="fb-root"><!-- fb comment -->
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=176650753609026&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
          <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-colorscheme="light" data-numposts="10" data-width="100%"></div>
        </div><!--/ fb comment -->

    </div><!-- end col read -->

  <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 