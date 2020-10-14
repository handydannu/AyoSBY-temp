
        <!-- S: Main Header -->
        <header style="padding-top: 50px;background-image: url('https://www.ayobandung.com/assets/img/imsakiyah/bg.png');background-repeat: no-repeat;background-size: cover;">
          <?php if($nav['site_view_mobile'] == false) { // on desktop view ?>
          <!-- S: Fix Banner Top -->
          <div id="fix-banner-top">
            <a href="#" target="_blank" title="AyoSurabaya">
              <!-- <img src="/assets/ads/stoper/Resize_Ayo-Surabaya_Landscape.gif" class="img-responsive" /> -->
              <!-- <img src=" https://www.ayobandung.com/assets/ads/2020/01/bjb_resize.jpg?w=1197" class="img-responsive" /> -->
              <img src="https://www.ayobandung.com/assets/ads/2020/05/hut59bjb.jpg?w=1197" class="img-responsive" />
            </a>
          </div>
          <!-- E: Fix Banner Top -->
          <?php } ?>

          <div id="hdr-main" >
            <div class="container">
              <div class="row">

                <div class="col-md-1 hidden-xs">
                  <img src="https://www.ayobandung.com/assets/img/imsakiyah/bulan.png" style="position: absolute;text-align: center;margin-left: 150px;">
                </div>

                <div class="col-md-4 col-md-push-3">
                  <div id="hdr-logo">
                    <a class="logo-flat" href="<?php echo site_url(); ?>" title="<?php echo $this->config->item('page_meta')['site_name']; ?> - <?php echo $this->config->item('page_meta')['title']; ?>">
                      <?php echo site_meta_dynamic()['logo']; ?>
                    </a>
                    <div class="clearfix"></div>
                    <h1 class="logo-desc" style="color: #fff;">
                      <?php echo site_meta_dynamic()['desc']; ?>
                      <?php // echo $this->config->item('page_meta')['title']; ?>
                    </h1>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <!-- S: Social Media & RSS Feed Icon -->
                <div class="col-md-3 col-md-pull-6 col-xs-6">
                  <div id="hdr-social-feed">
                    <ul>
                      <li>
                        <a class="hdr-ico-fb mg-right-5" href="<?php echo $this->config->item('social_url')['facebook']; ?>" target="_blank" title="Like Fan Page AyoTasik.com on Facebook">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a class="hdr-ico-tw mg-right-5" href="<?php echo $this->config->item('social_url')['twitter']; ?>" target="_blank" title="">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a class="hdr-ico-ig mg-right-5" href="<?php echo $this->config->item('social_url')['instagram']; ?>" target="_blank" title="Follow @ayotasik on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a class="hdr-ico-yt mg-right-10" href="<?php echo $this->config->item('social_url')['youtube']; ?>" target="_blank" title="Subscribe AyoChannel on YouTube">
                          <i class="fa fa-youtube"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <span class="todays-date-bg todays-date-bg-side" style="background: none;color: #fff;">
                    &nbsp;&nbsp;
                  <script type="text/javascript">
                        /* Check The Date -- BETA */
                        var mydate = new Date();
                        var year = mydate.getYear();
                        if (year < 1000) {
                          year += 1900
                        }
                        var day = mydate.getDay()
                        var month = mydate.getMonth()
                        var daym = mydate.getDate()
                        if (daym < 10){
                          daym = "0"+daym
                        }
                        var dayarray = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
                        var montharray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        document.write(""+dayarray[day]+",  "+daym+" "+montharray[month]+" "+year+"");
                      </script>
                    </span>
                </div>
                <!-- E: Social Media & RSS Feed Icon -->
                <div class="col-md-1 hidden-xs">
                  <img src="https://www.ayobandung.com/assets/img/imsakiyah/ramadan.png" style="margin-left: 24px;">
                </div>
                <!-- S: Main Menu Button -->
                <div class="col-md-3 col-xs-6">
                  <div id="hdr-mainmenu">
                    <a href="<?php echo base_url();?>pencarian">
                      <button id="btn-search" for="src-input">
                        <span class="glyphicon glyphicon-search" style="color: #fff;"></span>
                        <div class="clearfix"></div>
                        <span class="icon-label" style="color: #fff;">Cari</span>
                      </button>
                    </a>
                    <button id="btn-menu" style="display: none;">
                      <span class="glyphicon glyphicon-menu-hamburger"></span>
                      <div class="clearfix"></div>
                      <span class="icon-label">Menu</span>
                    </button>
                  </div>
                </div>
                <!-- E: Main Menu Button -->

              </div>
            </div>
          </div>

          <div id="hdr-presubnav">
            <!-- S: Header Main Menu Alternative -->
            <nav id="hdr-mainmenu-alt">
              <div class="container container-mainmenu">
                    <ul class="list-parent">
                      <li>
                        <a href="<?php echo site_url(); ?>" class="ayo-menu-link"><span class="ayo-menu-icon"></span></a>
                        <ul class="list-child ayo-menu-link-child">
                          <li><a href="http://ayobandung.com" target="_blank" title="AyoBandung.com"><strong><span class="ayo-orange">Ayo</span>Bandung</strong>.com</a></li>
                          <li><a href="http://ayobekasi.net" target="_blank" title="AyoBekasi.net"><strong><span class="ayo-orange">Ayo</span>Bekasi</strong>.net</a></li>
                          <li><a href="http://ayobogor.com" target="_blank" title="AyoBogor.com"><strong><span class="ayo-orange">Ayo</span>Bogor</strong>.com</a></li>
                          <li><a href="http://ayocirebon.com" target="_blank" title="AyoCirebon.com"><strong><span class="ayo-orange">Ayo</span>Cirebon</strong>.com</a></li>
                          <li><a href="http://ayopurwakarta.com" target="_blank" title="AyoPurwakarta.com"><strong><span class="ayo-orange">Ayo</span>Purwakarta</strong>.com</a></li>
                          <li><a href="http://ayotasik.com" target="_blank" title="AyoTasik.com"><strong><span class="ayo-orange">Ayo</span>Tasik</strong>.com</a></li>
                          <li><a href="http://www.ayobatang.com" target="_blank" title="AyoBatang.com"><strong><span class="ayo-orange">Ayo</span>Batang</strong>.com</a></li>
                          <li><a href="http://ayotegal.com" target="_blank" title="AyoTegal.com"><strong><span class="ayo-orange">Ayo</span>Tegal</strong>.com</a></li>
                          <li><a href="http://ayosemarang.com" target="_blank" title="AyoSemarang.com"><strong><span class="ayo-orange">Ayo</span>Semarang</strong>.com</a></li>
                          <li><a href="http://ayoyogya.com" target="_blank" title="AyoYogya.com"><strong><span class="ayo-orange">Ayo</span>Yogya</strong>.com</a></li>
                          <li><a href="http://www.ayobanten.com" target="_blank" title="AyoBanten.com"><strong><span class="ayo-orange">Ayo</span>Banten</strong>.com</a></li>
                          <li><a href="http://www.ayojakarta.com" target="_blank" title="AyoJakarta.com"><strong><span class="ayo-orange">Ayo</span>Jakarta</strong>.com</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo site_url(); ?>">Home</a></li>
                      <li>
                        <a href="<?php echo base_url();?>surabaya-raya">SURABAYA RAYA&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo base_url();?>surabaya">Surabaya</a></li>
                          <li><a href="<?php echo base_url();?>mojokerto">Mojokerto</a></li>
                          <li><a href="<?php echo base_url();?>gresik">Gresik</a></li>
                          <li><a href="<?php echo base_url();?>jombang">Jombang</a></li>
                          <li><a href="<?php echo base_url();?>sidoarjo">Sidoarjo</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>hot-news">Hot News&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo base_url();?>regional">Regional</a></li>
                          <li><a href="<?php echo base_url();?>nasional">Nasional</a></li>
                          <li><a href="<?php echo base_url();?>internasional">Internasional</a></li>
                          <li><a href="<?php echo base_url();?>unik">Unik</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo base_url();?>persebaya">PERSEBAYA</a></li>
                      <li>
                        <a href="<?php echo base_url();?>sport">Sport&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo base_url();?>arema">Arema</a></li>
                          <li><a href="<?php echo base_url();?>madura-united">Madura United</a></li>
                          <li><a href="<?php echo base_url();?>sepak-bola">sepak bola</a></li>
                        </ul>
                      </li>                          
                      <li>
                        <a href="<?php echo base_url();?>wisata">WISATA&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo base_url();?>kuliner">Kuliner</a></li>
                          <li><a href="<?php echo base_url();?>destinasi">Destinasi</a></li>
                          <li><a href="<?php echo base_url();?>gaya-hidup">Gaya Hidup</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>tren">Tren&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo base_url();?>otomotif">Otomotif</a></li>
                          <li><a href="<?php echo base_url();?>gadget">Gadget</a></li>
                          <li><a href="<?php echo base_url();?>fashion">Fashion</a></li>
                        </ul>
                      </li>   
                      <li><a href="<?php echo base_url();?>inovasi">INOVASI</a></li>    
                      <li><a href="<?php echo base_url();?>netizen">NETIZEN</a></li>
                      <li><a href="<?php echo base_url();?>foto">FOTO</a></li>
                      <li><a href="<?php echo base_url();?>index">INDEX</a></li>
                    </ul>
              </div>
            </nav>
            <!-- E: Header Main Menu Alternative -->
          </div>
        </header>
        <!-- E: Main Header -->

        <!-- S: Main Menu -->
        <nav id="nav-mainmenu" style="display: none;">
          <div class="nav-mainmenu" role="navigation">
            <ul class="nav-mainmenu-list">
              <li>
                <a class="nav-primary nav-close" href="http://ayosurabaya.com">HOME</a>
                <a class="nav-close-chevron" href="javascript:;" title="Tutup Menu Utama">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>surabaya-raya">SURABAYA RAYA</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                  <li><a href="<?php echo base_url();?>surabaya">Surabaya</a></li>
                  <li><a href="<?php echo base_url();?>mojokerto">Mojokerto</a></li>
                  <li><a href="<?php echo base_url();?>gresik">Gresik</a></li>
                  <li><a href="<?php echo base_url();?>jombang">Jombang</a></li>
                  <li><a href="<?php echo base_url();?>sidoarjo">Sidoarjo</a></li>
                </ul>
              </li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>hot-news">HOT NEWS</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                  <li><a href="<?php echo base_url();?>regional">Regional</a></li>
                  <li><a href="<?php echo base_url();?>nasional">Nasional</a></li>
                  <li><a href="<?php echo base_url();?>internasional">Internasional</a></li>
                  <li><a href="<?php echo base_url();?>unik">Unik</a></li>
                </ul>
              </li>
              <li><a class="nav-primary" href="<?php echo base_url();?>persebaya">PERSEBAYA</a></li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>sport">SPORT</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                 	<li><a href="<?php echo base_url();?>arema">Arema</a></li>
                    <li><a href="<?php echo base_url();?>madura-united">Madura United</a></li>
                    <li><a href="<?php echo base_url();?>sepak-bola">Sepak Bola</a></li>
                </ul>
              </li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>wisata">WISATA</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                  <li><a href="<?php echo base_url();?>kuliner">Kuliner</a></li>
                  <li><a href="<?php echo base_url();?>destinasi">Destinasi</a></li>
                  <li><a href="<?php echo base_url();?>gaya-hidup">Gaya Hidup</a></li>
                </ul>
              </li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>tren">TREN</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                  	<li><a href="<?php echo base_url();?>otomotif">Otomotif</a></li>
                    <li><a href="<?php echo base_url();?>gadget">Gadget</a></li>
                    <li><a href="<?php echo base_url();?>fashion">Fashion</a></li>
                </ul>
              </li>
              <li><a class="nav-primary" href="<?php echo base_url();?>inovasi">INOVASI</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>netizen">NETIZEN</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>foto">FOTO</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>index">INDEX</a></li>
            </ul>
          </div>
        </nav>
        <!-- E: Main Menu -->
