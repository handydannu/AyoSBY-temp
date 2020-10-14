          <!-- S: Footer Level 2 -->
          <section id="ftr-level-2">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="col-profile-content">
                    <div class="profile-logo"></div>
                    <h4><?php echo $this->config->item('footer')['about_title']; ?></h4>
                    <!-- <p class="profile-content"><?php echo $this->config->item('footer')['about_content']; ?></p>
                    <ul class="profile-links">
                      <li><a><i class="fa fa-institution"></i>&nbsp;&nbsp;<?php echo $this->config->item('footer')['office_address']; ?></a></li>
                      <li><a><i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;<?php echo $this->config->item('footer')['office_phone']; ?></a></li>
                      <li><a href="mailto:<?php echo $this->config->item('footer')['office_email']; ?>"><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;<?php echo $this->config->item('footer')['office_email']; ?></a></li>
                    </ul> -->
                    <ul id="ftr-social-feed">
                      <li class="mg-right-5">
                        <a class="ftr-ico-fb" href="<?php echo $this->config->item('social_url')['facebook']; ?>" target="_blank" title="Like Fan Page AyoTasik.com on Facebook">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li class="mg-right-5">
                        <a class="ftr-ico-tw" href="<?php echo $this->config->item('social_url')['twitter']; ?>" target="_blank" title="Follow @<?php echo $this->config->item('social_acc')['twitter']; ?> on Twitter">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li class="mg-right-5">
                        <a class="ftr-ico-ig" href="<?php echo $this->config->item('social_url')['instagram']; ?>" target="_blank" title="Follow @<?php echo $this->config->item('social_acc')['instagram']; ?> on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li class="mg-right-5">
                        <a class="ftr-ico-yt" href="<?php echo $this->config->item('social_url')['youtube']; ?>" target="_blank" title="Subscribe YouTube AyoChannel">
                          <i class="fa fa-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a class="ftr-ico-rss" href="<?php echo site_url(); ?>rss" target="_blank" title="RSS Feed AyoBandung.com">
                          <i class="fa fa-rss"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- E: Footer Level 2 -->
