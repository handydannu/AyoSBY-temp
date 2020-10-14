
        <!-- S: Main Header -->
        <header>
          <?php if($nav['site_view_mobile'] == false) { // on desktop view ?>
          <!-- S: Fix Banner Top -->
         <div id="fix-banner-top">
            <a href="http://www.bankbjb.co.id" target="_blank" title="Bank bjb">
<!--              <img src="<?php echo site_url();?>assets/ads/2018/06/fix-banner-bjb-1-1100.jpg?w=1197" class="img-responsive" />-->
				<img src="https://www.ayobandung.com/assets/ads/2019/02/bjb-debit-feb2019.jpg?w=1197" class="img-responsive" />
            </a>
          </div>
          <!-- E: Fix Banner Top -->
          <?php } ?>

          <div id="hdr-main">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-3">
                  <div id="hdr-logo">
                    <a class="logo-flat" href="<?php echo site_url(); ?>" title="<?php echo $this->config->item('page_meta')['site_name']; ?> - <?php echo $this->config->item('page_meta')['title']; ?>">
                      <?php echo site_meta_dynamic()['logo']; ?>
                    </a>
                    <div class="clearfix"></div>
                    <h1 class="logo-desc">
                      <?php echo site_meta_dynamic()['desc']; ?>
                      <?php // echo $this->config->item('page_meta')['title']; ?>
                    </h1>
                    <div class="clearfix"></div>
                    <!-- <h2 class="logo-tagline">
                      <?php echo $this->config->item('page_meta')['title']; ?>
                    </h2> -->
                    <!-- <span class="todays-date-bg">
                      <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                      Senin, 16 April 2018
                    </span> -->
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
                      <!-- <li>
                        <a class="hdr-ico-rss mg-right-10" href="/feed" target="_blank" title="RSS Feed AyoBandung.com">
                          <i class="fa fa-rss"></i>
                        </a>
                      </li> -->
                    </ul>
                  </div>
                </div>
                <!-- E: Social Media & RSS Feed Icon -->

                <!-- S: Main Menu Button -->
                <div class="col-md-3 col-xs-6">
                  <div id="hdr-mainmenu">
                    <button id="btn-search" for="src-input">
                      <span class="glyphicon glyphicon-search"></span>
                      <div class="clearfix"></div>
                      <span class="icon-label">Cari</span>
                    </button>
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

          <!-- S: Today's Date -->
          <!-- <div id="hdr-todays-date" style="">
            <div class="container">
              <span class="todays-date-bg">
                <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                Minggu, 17 Mei 2015
              </span>
            </div>
          </div> -->
          <!-- E: Today's Date -->

          <div id="hdr-presubnav">
            <!-- S: Header Main Menu Alternative -->
            <nav id="hdr-mainmenu-alt">
              <div class="container container-mainmenu">
                <!-- <div class="row">
                  <div class="col-md-12"> -->
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
                        </ul>
                      </li>
                      <li><a href="www.ayojakarta.com">Home</a></li>
                    	<li>
                        <a href="<?php echo site_url(); ?>berita-bogor">Metropolitan&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>explore-bogor">Explore Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>bisnis-bogor">Bisnis Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>kampus-bogor">Kampus Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>ikon-bogor">Ikon Bogor</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="<?php echo site_url(); ?>berita-bogor">Bodetabek&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>explore-bogor">Explore Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>bisnis-bogor">Bisnis Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>kampus-bogor">Kampus Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>ikon-bogor">Ikon Bogor</a></li>
                        </ul>
                      </li>
<!--
                      <li>
                        <a href="<?php echo site_url(); ?>nasional">Umum&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo site_url(); ?>nasional">Nasional</a></li>
                          <li><a href="<?php echo site_url(); ?>internasional">Internasional</a></li>
                        </ul>
                      </li>
-->
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Nasional</a>
                      </li>  
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Internasional</a>
                      </li>  						
                      <li>
                        <a href="<?php echo site_url(); ?>berita-bogor">Gaya Hidup&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>explore-bogor">Explore Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>bisnis-bogor">Bisnis Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>kampus-bogor">Kampus Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>ikon-bogor">Ikon Bogor</a></li>
                        </ul>
                      </li>						
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Hiburan</a>
                      </li>  						
                      <li>
                        <a href="<?php echo site_url(); ?>berita-bogor">Persija&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down fsz-11"></span></a>
                        <ul class="list-child">
                          <li><a href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>explore-bogor">Explore Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>bisnis-bogor">Bisnis Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>kampus-bogor">Kampus Bogor</a></li>
                          <li><a href="<?php echo site_url(); ?>ikon-bogor">Ikon Bogor</a></li>
                        </ul>
                      </li>						
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Olahraga</a>
                      </li>  
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Bisnis</a>
                      </li>  												
                      <li>
                        <a href="<?php echo site_url(); ?>foto">Netizen</a>
                      </li>  											
					  <li>
                        <a href="<?php echo site_url(); ?>foto">Potret</a>
                      </li>
                      <li>
                       <a href="<?php echo site_url(); ?>index">Index</a>
                      </li>
                    </ul>
                  <!-- </div>
                </div> -->
              </div>
            </nav>
            <!-- E: Header Main Menu Alternative -->
          </div>

          <div id="hdr-subnav">
            <!-- S: Search -->
            <div id="hdr-search" style="display: none;">
              <div class="container search-container">
                <form name="src-main" id="searchbox_013122640796285219442:utwsrap28se" action="<?php echo site_url(); ?>" class="form-inline" role="search" title="Google Custom Search on AyoBogor.com">
                  <ul>
                    <li><input type="text" name="q" id="src-input" class="src-input" placeholder="Kata Kunci Pencarian" /></li>
                    <li>
                      <button type="submit" name="sa" class="">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </li>
                  </ul>
         		 <!--<script>
                    (function() {
                    var cx = '013122640796285219442:2lyaxmalkwk';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                    })();
                  </script>
                  <gcse:searchresults-only></gcse:searchresults-only>-->
                  <script>
                  (function() {
                  var cx = '013122640796285219442:utwsrap28se';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                  })();
                </script>
                <gcse:searchresults-only></gcse:searchresults-only>
                  <style>
                    .gsc-control-cse.gsc-control-cse-id { margin-top: 15px; /* to hide the overlapping GCSE style */ }
                  </style>
                </form>
              </div>
            </div>
            <!-- E: Search -->

            <!-- S: News Ticker -->
            <div id="hdr-newsticker">
              <div class="container container-newsticker">
                <div class="row">
                  <div class="col-md-9 col-xs-12">
                    <div class="newsticker-label">
                      <i class="glyphicon glyphicon-bullhorn"></i>
                    </div>
                    <div id="newsticker-list" class="newsticker-content">
                      <ul>
                        <?php foreach($recent as $r) { ?>
                          <?php
                            $dc = content_time($r['post_date_created']);
                            $dp = id_time($r['post_date']);
                            $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . /*'/' . $r['category_id'] .*/ '/' . $r['slug'];
                          ?>
                        <li>
                          <a href="<?php echo $url; ?>"><?php echo $r['post_title']; ?></a>
                        </li>
                        <?php } ?>
                      </ul>
                      <div class="newsticker-control">
                        <button class="nticker-ctrl-up"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        <button class="nticker-ctrl-down"><span class="glyphicon glyphicon-chevron-down"></span></button>
                        <!-- <button class="nticker-ctrl-toggle"><span class="glyphicon glyphicon-pause"></span></button> -->
                      </div>
                    </div>
                    <!--
                      [ IMPORTANT NOTE ]
                      "display: none;" on #newsticker-marquee style,
                      that indicates has been prepared to secondary.
                      And it will be activated on small (mobile) resolution
                      using media query CSS.
                    -->
                    <div id="newsticker-marquee" class="newsticker-content">
                      <ul>
                        <?php foreach($recent as $r) { ?>
                          <?php
                            $dc = content_time($r['post_date_created']);
                            $dp = id_time($r['post_date']);
                            $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $r['post_id'] . /*'/' . $r['category_id'] .*/ '/' . $r['slug'];
                          ?>
                        <li>
                          <a href="<?php echo $url; ?>"><?php echo $r['post_title']; ?></a>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  <div class="col-todays-date col-md-3 col-xs-12">
                    <span class="todays-date-bg todays-date-bg-side">
                      <i class="fa fa-calendar"></i>&nbsp;&nbsp;
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
                </div>
              </div>
            </div>
            <!-- E: News Ticker -->
          </div>
        </header>
        <!-- E: Main Header -->

        <!-- S: Main Menu -->
        <nav id="nav-mainmenu" style="display: none;">
          <div class="nav-mainmenu" role="navigation">
            <ul class="nav-mainmenu-list">
              <!-- <li><a href="">Tutup</a></li> -->
              <li>
                <a class="nav-primary nav-close" href="http://ayobogor.com">Home</a>
                <a class="nav-close-chevron" href="javascript:;" title="Tutup Menu Utama">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </li>
              <li>
                <a class="nav-primary nav-parent" href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a>
                <a class="nav-child-chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="nav-child" style="display: none;">
                  <li><a href="<?php echo site_url(); ?>berita-bogor">Berita Bogor</a></li>
                  <li><a href="<?php echo site_url(); ?>explore-bogor">Explore Bogor</a></li>
                  <li><a href="<?php echo site_url(); ?>bisnis-bogor">Bisnis Bogor</a></li>
                  <li><a href="<?php echo site_url(); ?>kampus-bogor">Kampus Bogor</a></li>
                  <li><a href="<?php echo site_url(); ?>ikon-bogor">Ikon Bogor</a></li>
                </ul>
              </li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>nasional">Nasional</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>internasional">Internasional</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>foto">Ayo Foto</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>video">Ayo Video</a></li>
              <li><a class="nav-primary" href="<?php echo site_url(); ?>index">Index</a></li>
            </ul>
          </div>
        </nav>
        <!-- E: Main Menu -->
