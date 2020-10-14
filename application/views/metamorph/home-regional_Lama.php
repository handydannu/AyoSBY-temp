                    <!-- S: Regional Section -->
                    <div id="regional-news">
                      <div class="regional-title">
                        <h3>
                          <i class="fa fa-globe"></i>&nbsp;&nbsp;
                          Terbaru Regional
                        </h3>
                      </div>
                    </div>
                    <div class="regional-content mg-bottom-25">
                      <ul>
                        <?php if(!empty($c['feed']['bekasi'])) { ?>
                        <li>
                          <span class="regional-list">
                            <span class="regional-meta">
                              <a href="<?php echo $c['feed']['bekasi']['post_url']; ?>" target="_blank" class="regional-list-title"><?php echo $c['feed']['bekasi']['post_title']; ?></a>
                              <span class="regional-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo id_time($c['feed']['bekasi']['post_date_created']); ?>
                              </span>
                              <span class="regional-category">
                                <i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="<?php echo $c['feed']['bekasi']['base_url']; ?>" target="_blank">AyoBekasi.net</a>
                              </span>
                            </span>
                            <a href="<?php echo $c['feed']['bekasi']['post_url']; ?>" target="_blank" class="regional-list-img">
                                <img src="<?php echo $c['feed']['bekasi']['post_img']; ?>" />
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
                                <img src="<?php echo $feed['bogor']['post_img']; ?>" />
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['cirebon'])) { ?>
                        <li>
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
                                <img src="<?php echo $feed['cirebon']['post_img']; ?>" />
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                        <?php if(!empty($feed['tasik'])) { ?>
                        <li class="even">
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
                                <img src="<?php echo $feed['purwakarta']['post_img']; ?>" />
                            </a>
                          </span>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                    <!-- E: Regional Section -->