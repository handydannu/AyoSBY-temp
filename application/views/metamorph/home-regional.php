                    <!-- S: Regional Section -->
                    <div id="regional-news">
                      <div class="headline-bu">Terbaru Regional</div>
                        <div class="headline-footer-sidebar" style="margin-bottom: 30px;"></div>
                    </div>
                    <div class="regional-content mg-bottom-25">
                      <ul>
                        <?php if(!empty($feed['bekasi'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['bekasi']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['bekasi']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['bekasi']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['bekasi']['base_url']; ?>" target="_blank">AyoBekasi.net</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['bekasi']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['bekasi']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['bekasi']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?> 
                        <?php if(!empty($feed['bogor'])) { ?>
                        <li class="even">
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['bogor']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['bogor']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['bogor']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['bogor']['base_url']; ?>" target="_blank">AyoBogor.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['bogor']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['bogor']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['bogor']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?> 
                        <?php if(!empty($feed['cirebon'])) { ?>
                        <li class="even">
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['cirebon']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['cirebon']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['cirebon']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['cirebon']['base_url']; ?>" target="_blank">AyoCirebon.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['cirebon']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['cirebon']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['cirebon']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['yogya'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['yogya']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['yogya']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['yogya']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['yogya']['base_url']; ?>" target="_blank">AyoYogya.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['yogya']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['yogya']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['yogya']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['batang'])) { ?>
                        <li class="even">
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['batang']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['batang']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['batang']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['batang']['base_url']; ?>" target="_blank">AyoBatang.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['batang']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['batang']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['batang']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['purwakarta'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['purwakarta']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['purwakarta']['post_title']; ?></a>
                             
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['purwakarta']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['purwakarta']['base_url']; ?>" target="_blank">AyoPurwakarta.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['purwakarta']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['purwakarta']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['purwakarta']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['tegal'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['tegal']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['tegal']['post_title']; ?></a>
                             
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['tegal']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['tegal']['base_url']; ?>" target="_blank">AyoTegal.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['tegal']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['tegal']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['tegal']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['semarang'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['semarang']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['semarang']['post_title']; ?></a>
                             
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['semarang']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['semarang']['base_url']; ?>" target="_blank">AyoSemarang.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['semarang']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['semarang']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['semarang']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['jakarta'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['jakarta']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['jakarta']['post_title']; ?></a>
                          
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['jakarta']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['jakarta']['base_url']; ?>" target="_blank">AyoJakarta.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['jakarta']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['jakarta']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['jakarta']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['tasik'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['tasik']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['tasik']['post_title']; ?></a>
                             
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['tasik']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['tasik']['base_url']; ?>" target="_blank">AyoTasik.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['tasik']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['tasik']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['tasik']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['banten'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $feed['banten']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $feed['banten']['post_title']; ?></a>
                              
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($feed['banten']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $feed['banten']['base_url']; ?>" target="_blank">AyoBanten.com</a>
                              </span>
                            </span>
                            <a href="<?php echo $feed['banten']['post_url']; ?>" target="_blank" class="regional-list-img">
                              <img data-original="<?php echo $feed['banten']['post_img']; ?>" class="img-lazy" />
                              <noscript>
                                <img src="<?php echo $feed['banten']['post_img']; ?>" />
                              </noscript>
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                    <!-- E: Regional Section -->
