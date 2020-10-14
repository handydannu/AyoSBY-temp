                    <!-- S: Photo Section -->
                    <div class="col-cat-news mg-out">
                      <div class="col-photo-title">
                        <h3>
                          <a href="<?php echo site_url();?>foto" title="Menuju ke Halaman &quot;Ayo Foto&quot;">
                            <b style="color: #FFFFFF;"><i class="fa fa-camera"></i>&nbsp;&nbsp;Ayo Foto</b>
                          </a>
                        </h3>
                      </div>
                      <div class="col-photo-content">
                        <?php for($i = 0; $i < count($photo); $i++) { ?>
                          <?php
                            // error_reporting(E_ALL);
                            $dc = content_time($photo[$i]['post_date_created']);

                            $url[$i] = site_url('view') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/' . /*$photo[$i]['category_id'] . '/' .*/ $photo[$i]['post_name'];
                            $url_img[$i] = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $photo[$i]['post_id'] . '/';
                          ?>
                        <?php } ?>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[0]; ?>">
                                  <img src="<?php echo $url_img[0] . $photo[0]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[0]; ?>">
                                  <div class="photoline"></div><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[0]['post_title']; ?></div>
</a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[1]; ?>">
                                  <img src="<?php echo $url_img[1] . $photo[1]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                               <div class="photoline"></div><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[1]['post_title']; ?></div></a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[2]; ?>"><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <img src="<?php echo $url_img[2] . $photo[2]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                                <div class="photoline"></div>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[2]['post_title']; ?></div></a>
                              </figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[3]; ?>">
                                  <img src="<?php echo $url_img[3] . $photo[3]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                                <div class="photoline"></div><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[3]['post_title']; ?></div></a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[4]; ?>">
                                  <img src="<?php echo $url_img[4] . $photo[4]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                                <div class="photoline"></div><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[4]['post_title']; ?></div></a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[5]; ?>">
                                  <img src="<?php echo $url_img[5] . $photo[5]['post_image_thumb']; ?>" onerror="this.src='<?php echo base_url();?>assets/img/nophoto.png';" class="img-responsive" />
                              </a>
                              <figcaption>
                                <div class="photoline"></div><i class="fa fa-camera" style="color: rgba(0, 0, 0, 0.4);position: absolute;top: -90px;right: 150px;"></i>
                                  <div class="title-caption">&nbsp;&nbsp;&nbsp;<?php echo $photo[5]['post_title']; ?></div></a>
                              </figcaption>
                            </figure>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <!-- E: Photo Section -->
