<?php $this->load->view($this->config->item('template_name') . 'main-top'); ?>
  
  <div class="container"><!-- Page main container-->     
    
    <div class="row"><!-- main Column --> 
     
      <div class="col-lg-8 col-sm-12 mt-3"><!-- main col read -->

      <!-- breadcrumb -->
      <nav aria-label="breadcrumb" style="background-color: #e2e0e0; padding: 10px 15px; margin-left: -15px;">
          <?php if(isset($article['post']['category_id'])) { // category_id should exist first ?>
          <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url(); ?>">Home</a>
          <?php } ?>
          <?php if($article['category_parent_id'] !== false) { ?>
          / <a class="sub-head-20 ayo-orange text-uppercase" href="<?php echo site_url($article['category_parent_id']['category_link']); ?>"><?php echo $article['category_parent_id']['category_name']; ?></a>  
          / <a href="<?php echo site_url($article['post']['category_link']); ?>" class="sub-head-18 text-uppercase"><?php echo $article['post']['category_name']; ?>
            <?php } else { }?></a>
      </nav><!-- breadcrumb -->
        
      <h1 class="mt-2">
        <?php echo $article['post']['post_title']; ?>
      </h4>

      <span class="date-posted"><?php echo id_time($article['post']['post_date_created']); ?></span> 


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
        <span class="img-photographer"><?php echo $article['post']['post_author_name'] ?></span>          
          <?php if($article['post']['post_source'] != '') { ?>      
          &nbsp;&nbsp;<i class="fas fa-project-diagram"></i> SOURCE<span class="img-photographer"> <?php echo $article['post']['post_source']; ?></span>
          <?php } ?>
          <?php if($article['post']['post_editor'] != '') { ?>
          &nbsp;&nbsp;<i class="fas fa-user-clock"></i> EDITOR
          <span class="img-photographer"><?php echo $article['post']['nama']; ?></span>
          <?php } ?>
      </div>

      <?php
        $dc = content_time($article['post']['post_date_created']);
        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $article['post']['post_id'] . '/';
      ?>
      <img class="img-fluid post-img shade" src="<?php echo $url_img . $article['post']['post_image_content']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';">

      <div class="dashing mt-1 mb-1">  
        <span class="img-caption"><?php echo $article['post']['post_image_caption']; ?></span>
        &nbsp;
      </div>

      <section>
        <?php
          // Content
          echo htmlspecialchars_decode(
            preg_replace('/\[.*?\]/', '',
              $article['post']['post_content']
            )
          );
        ?>
      </section>

                    <center><!-- google ads -->
                      <div id='div-gpt-ad-1567136321673-0'>
                        <script>
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567136321673-0'); });
                        </script>
                      </div>
                    </center>

      <span><i class="fas fa-hashtag"></i> TAG TERKAIT</span>
      <div class="txt-tag">
        <ul>
        <?php
          if(!empty($article['tags'])) {
            foreach($article['tags'] as $at) {
           ?>
        <li style="list-style: none;display: inline-block;margin:6px 2px">
          <span>
            <a href="<?php echo site_url('tag/' . $at['slug']); ?>"><?php echo $at['tag']; ?></a>
          </span>
        </li>
          <?php
              }
            }
          ?>
        </ul>
      </div>

          <script>
              function addLink() {
              var editor = "<?php echo $article['post']['nama']; ?>";
              var body_element = document.getElementsByTagName('body')[0];
              var selection;
              selection = window.getSelection();
              var pagelink = "<br/><br/>---------<br/>Artikel ini sudah Terbit di <?php echo $this->config->item('page_meta')['site_name']; ?>, dengan Judul <?php echo $article['post']['post_title']; ?>, pada URL "+document.location.href+" <br/><br/>Penulis: <?php echo $article['post']['post_author_name'] ?><br/>Editor : <?php echo $article['post']['nama']; ?>"; // change this if you want
              var copytext = selection + pagelink;
              var newdiv = document.createElement('div');
              newdiv.style.position='absolute';
              newdiv.style.left='-99999px';
              body_element.appendChild(newdiv);
              newdiv.innerHTML = copytext;
              selection.selectAllChildren(newdiv);
              window.setTimeout(function() {
              body_element.removeChild(newdiv);
              },0);
              }document.oncopy = addLink;
          </script>

      <!-- berita terkait -->
      <h4 class="pt-2 mml-1">
        <span data-title="LAINNYA >>"><i class="far fa-newspaper"></i> BERITA TERKAIT</span>
      </h4>
      <?php $this->load->view($this->config->item('template_name') . 'relate-news'); ?>
      
          <div id="fb-root">
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=176650753609026&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-colorscheme="light" data-numposts="10" data-width="100%"></div>
          </div>

      </div><!-- end col read -->

      <?php $this->load->view($this->config->item('template_name') . 'sidebar-right'); ?>

  </div>

</div><!-- /.container 1 -->

<?php $this->load->view($this->config->item('template_name') . 'main-bottom'); ?> 