
              
                    <!~~ S: Video Section ~~>

                    <div class="col-media-box">
                      <div class="headline-bu">
                        <i class="fa fa-video-camera"></i>&nbsp;&nbsp;Ayo Video
                          <div class="headline-bu-content"></div>
                      </div>
                      <a href="<?php echo site_url();?>video" style="float: right;color: #EA0028;">Lihat Semua
                    </div>
                      </a>
                      <div class="headline-footer"></div> 
                      
                      <div class="col-video-content">
                        <?php for($i = 0; $i < count($video); $i++) { ?>
                          <?php
                            // error_reporting(E_ALL);
                            $dc = content_time($video[$i]['date']);
                            // $dp = id_time($video[$i]['post_date']);

                            $url[$i] = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/' . /*$video[$i]['category_id'] . '/' .*/ $video[$i]['name'];
                            // $url_img[$i] = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/';
                            // Source: https://stackoverflow.com/a/4221127/9796214
                            // $url_img[$i] = explode('?v=', $video[$i]['youtube']); // need to make sure why using explode?
                            // $url_img[$i] = 'http://i.ytimg.com/vi/' . $url_img[$i][1] . '/hqdefault.jpg';
                            $url_img[$i] = 'http://i.ytimg.com/vi/' . $video[$i]['video'] . '/hqdefault.jpg';

                            // _d($url_img . $video[$i]['post_image_thumb']);
                          ?>
                        <?php } ?> 
                        <div class="row">
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[0]; ?>">
                                <img data-original="<?php echo $url_img[0]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[0]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[0]; ?>"><?php echo $video[0]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                           <figure>
                              <a href="<?php echo $url[1]; ?>">
                                <img data-original="<?php echo $url_img[1]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[1]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[1]; ?>"><?php echo $video[1]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                           <div class="col-md-4">
                           <figure>
                              <a href="<?php echo $url[2]; ?>">
                                <img data-original="<?php echo $url_img[2]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[2]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[2]; ?>"><?php echo $video[2]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <figure>
                              <a href="<?php echo $url[3]; ?>">
                                <img data-original="<?php echo $url_img[3]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[3]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[3]; ?>"><?php echo $video[3]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                          <div class="col-md-4">
                           <figure>
                              <a href="<?php echo $url[4]; ?>">
                                <img data-original="<?php echo $url_img[4]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[4]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[4]; ?>"><?php echo $video[4]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                           <div class="col-md-4">
                           <figure>
                              <a href="<?php echo $url[5]; ?>">
                                <img data-original="<?php echo $url_img[5]; ?>" class="img-responsive img-lazy" />
                                <noscript>
                                  <img src="<?php echo $url_img[5]; ?>" class="img-responsive" />
                                </noscript>
                                <div class="cover-play">
                                  <i class="fa fa-play-circle-o"></i>
                                </div>
                              </a>
                              <figcaption>
                                <a href="<?php echo $url[5]; ?>"><?php echo $video[5]['title']; ?></a>
                              </figcaption>
                            </figure>
                          </div>
                        </div>
                           
                        </div>                     
                    <!~~ E: Video Section ~~>
                    
 