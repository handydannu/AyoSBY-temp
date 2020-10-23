<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?> 
  <div class="container"><!-- Page main container-->   
    <div class="row"><!-- main Column --> 
      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
          <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
         / <a class="text-uppercase" href="<?php echo site_url('video'); ?>">VIDEO</a>          
      </nav><!-- breadcrumb -->

        
          <h1 class="mt-2">
            <?php echo $video[0]['title']; ?>
          </h4>

          <!-- AddToAny END -->
          <span class="date-posted">&nbsp;<?php echo id_time($video[0]['date']); ?></span> | <span class="sub-head-author">&nbsp;<?php echo $video[0]['source']; ?></span>


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
            <i class="fas fa-pen fa-xs"></i> SUMBER
            <span class="img-photographer"><?php echo $video[0]['source'];?></span>
             <?php if($video[0]['source'] != '') { ?>
              <i class="fab fa-youtube"></i>
                    <span class="img-photographer">Source: YouTube</span>
                    <?php } ?>
                    <?php if($video[0]['nama'] != '') { ?>
              &nbsp;&nbsp;<i class="fas fa-user-clock"></i> EDITOR
            <span class="img-photographer">
                    <?php echo $video[0]['nama']; ?>
                  </span>
              <?php } ?>
            </span>
          </div>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video[0]['video']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="dashing mt-1 mb-1">
          </div>

          <section>
          <p>
            <?php 
                    // Content
                    echo htmlspecialchars_decode(
                      preg_replace('/\[.*?\]/', '', 
                        $video[0]['description']
                      )
                    ); 
                  ?>
          </p>          
          </section>

            <center><!-- google ads -->
                      <div id='div-gpt-ad-1567136321673-0'>
                        <script>
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567136321673-0'); });
                        </script>
                      </div>
                    </center>

        <!-- article ads -->
        <div class="col-12">
          <img class="shade img-fluid ads-rectangle" src="https://www.ayosurabaya.com/assets/img/widget/ayo-netizen.jpg">
        </div><!-- article ads -->

        <h4 class="mt-3 mml-1">
          <span data-title="LAINNYA >>"><i class="far fa-newspaper"></i> VIDEO LAINNYA</span>
        </h4>
        <?php $this->load->view($this->config->item('template_name') . 'relate-video'); ?>

        <div id="fb-root">
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0]; // carefully to replace this index array
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=176650753609026&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
          <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-colorscheme="light" data-numposts="10" data-width="100%"></div>
        </div>
      
</div><!-- end col read -->

  <?php $this->load->view($this->config->item('template_name') . 'sidebar-right-inner'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 