<div class="container">
  <!-- ads top -->
  <div id="fix-banner-top">
    <a href="#" target="_blank" title="AyoSurabaya">
      <img class="img-fluid" src="https://cdn.ayobandung.com/upload/bank_image/medium/BJB_Amazing_Sureprize.png?w=1197" class="img-responsive" title="" style="">
    </a>
  </div><!-- end ads top -->

    <div class="row"><!-- header utama --> 

      <div class="col-lg-3 pt-3 mt-3 text-center"><!-- medsos area -->
        <div class="medsos mt-2">
          <a href="<?php echo $this->config->item('social_url')['facebook']; ?>" target="_blank" title="Follow @<?php echo $this->config->item('social_acc')['facebook']; ?> on Facebook" class="medsos-icon fb-bg"><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="<?php echo $this->config->item('social_url')['twitter']; ?>" target="_blank" title="Follow @<?php echo $this->config->item('social_acc')['twitter']; ?> on Twitter" class="medsos-icon twt-bg"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="https://www.instagram.com/ayosurabaya_official" title="Follow @<?php echo $this->config->item('social_acc')['instagram']; ?> on Instagram" class="medsos-icon ig-bg"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="<?php echo $this->config->item('social_url')['youtube']; ?>" target="_blank" title="Subscribe YouTube AyoChannel" class="medsos-icon yt-bg"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="<?php echo site_url(); ?>rss" target="_blank" title="RSS Feed AyoSurabaya.com" class="medsos-icon rss-bg"><i class="fas fa-rss fa-2x"></i></a>
        </div>  
      </div><!-- end medsos area -->

      <div class="col-lg-6 pt-3 mt-3 text-center"><!-- logo area -->
        <a href="<?php echo site_url(); ?>"><img class="img-fluid" src="https://www.ayosurabaya.com/assets/img/ayosurabaya-logo.png?w=400"></a>
        <div class="logo-text">SEMUA TENTANG SURABAYA</div>
      </div><!-- end logo area -->
      
      <div class="col-lg-3 pt-3 mt-3 text-center"><!-- date area -->
          <div class="bg-date-nav">
            <i class="fas fa-calendar"></i>&nbsp;<span id="tanggalwaktu"></span>
          </div>
      </div><!-- end area -->

    </div> <!-- end row header utama -->
</div>