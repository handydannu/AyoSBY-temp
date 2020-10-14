<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php //echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <div class="col-news-title col-page-title text-center">
                  <h3>Kuis Tebak Juara Piala Dunia 2018</h3>
                </div>
                <div class="col-news-content col-page-content">
                  <h3 class="text-center">&quot;<strong>Berhadiah Total Rp. 1 Juta!</strong>&quot;</h3>

                  <h2 class="page-subheader">Syarat &amp; Ketentuan</h2>

                  <ol class="list-page-subheader">
                    <li>
                      Follow 7 (tujuh) akun IG grup <strong><span class="ayo-orange">Ayo</span> Media Network</strong>:
                      <ol>
                        <li><a href="https://www.instagram.com/ayobandung_official" target="_blank">@ayobandung_official</a>
                        <li><a href="https://www.instagram.com/ayopersib" target="_blank">@ayopersib</a>
                        <li><a href="https://www.instagram.com/ayopurwakarta" target="_blank">@ayopurwakarta</a>
                        <li><a href="https://www.instagram.com/ayotasik" target="_blank">@ayotasik</a>
                        <li><a href="https://www.instagram.com/ayocirebon" target="_blank">@ayocirebon</a>
                        <li><a href="https://www.instagram.com/ayobogor" target="_blank">@ayobogor</a>
                        <li><a href="https://www.instagram.com/ayobekasinet" target="_blank">@ayobekasinet</a>
                      </ol>
                    </li>
                    <li>Jawab dengan komen dengan hashtag <strong>#KuisAyoBandung</strong> di salah satu IG Grup <strong><span class="ayo-orange">Ayo</span> Media Network</strong> di atas</li>
                    <li>Mention/ tag 5 (lima) orang temen kamu</li>
                    <li>Contoh jawaban: <code>Italia #KuisAyoBandung @teman1 @teman2 @teman3 @teman4 @teman5</code></li>
                    <li>Dipilih 3 (tiga) pemenang dengan hadiah:
                      <ol>
                        <li><strong>Juara 1 Rp500.000</strong></li>
                        <li><strong>Juara 2 Rp300.000</strong></li>
                        <li><strong>Juara 3 Rp200.000</strong></li>
                      </ol>
                    </li>
                    <li>Jika Pemenang lebih dari tiga akan dipilih secara acak, namun jawaban tercepat dan benar akan mendapatkan priortias pemenang</li>
                    <li>Periode kuis <strong>ditutup tanggal 7 Juli 2018</strong></li>
                    <li>Keputusan Juri tidak bisa diganggu gugat</li>
                    <li>Pemenang akan <strong>diumumkan</strong> di IG semua akun grup <strong><span class="ayo-orange">Ayo</span> Media Network</strong> pada <strong>17 Juli 2018</strong>.</li>
                  </ol>

                </div>

                <div class="col-md-12 pd-free">
                  <div class="news-share-btn text-center">
                    <div class="col-md-12">
                      <span class="news-share-btn-title">
                        <i class="fa fa-share-alt"></i>&nbsp;&nbsp;
                        Ayo Bagikan!
                      </span>
                    </div>
                    <div class="col-md-12">
                      <script type="text/javascript">
                      var addthis_share = {
                           url_transforms : {
                                shorten: {
                                     twitter: "bitly"
                                }
                           }, 
                           shorteners : {
                                bitly : {} 
                           }
                      }
                      </script>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b8e3d648ebb23b" async="async"></script>
                      <div class="addthis_inline_share_toolbox_4dz8" data-url="<?php echo current_url(); ?>" data-title="Kuis Tebak Juara Piala Dunia 2018"></div>
                    </div>
                  </div>
                </div>

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