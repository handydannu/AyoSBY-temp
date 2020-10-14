              <!-- S: Side Banner 1 (Top Left) -->
             <div id="side-banner-1">
                <img src="https://www.ayosemarang.com/assets/ads/stoper/banner-semarang1.png?w=160" class="img-responsive" />

              </div>
              <!-- E: Side Banner 1 -->

              <!-- S: Side Banner 2 (Top Right) -->
              <div id="side-banner-2">
                <!-- <a href="javascript:;" target="_blank" title=""> -->
                <?php
                // Set Default Timezone to Surpress Warning!
                date_default_timezone_set('Asia/Jakarta');

                // Define Now Date
                $b['now_date']        = date('d');
                // Define Base Path
                $b['base_path']       = '' . base_url() . '/assets/ads/2018/06/';
                // Define Data for Mio
                $b['mio']['date']     = array(
                  '01', '02', '03',
                  '10', '11', '12',
                  '19', '20', '21',
                  '28', '29', '30'
                );
                $b['mio']['alt']      = 'Yamaha Mio S';
                $b['mio']['img']      = 'mio_slide_c.gif';

                // Define Data for NMax
                $b['nmax']['date']    = array(
                  '04', '05', '06',
                  '13', '14', '15',
                  '22', '23', '24',
                  '31'
                );
                $b['nmax']['alt']     = 'Yamaha NMax';
                $b['nmax']['img']     = 'nmax_slide_c.gif';

                // Define Data for NMax
                $b['aerox']['date']   = array(
                  '07', '08', '09',
                  '16', '17', '18',
                  '25', '26', '27'
                );
                $b['aerox']['alt']    = 'Yamaha Aerox';
                $b['aerox']['img']    = 'aerox_slide_c.gif';

                $b['set']['img'] = '';
                $b['set']['alt'] = '';
                if (in_array($b['now_date'], $b['mio']['date'])) {
                  $b['set']['img'] = $b['base_path'] . $b['mio']['img'];
                  $b['set']['alt'] = $b['mio']['alt'];
                } else if (in_array($b['now_date'], $b['nmax']['date'])) {
                  $b['set']['img'] = $b['base_path'] . $b['nmax']['img'];
                  $b['set']['alt'] = $b['nmax']['alt'];
                } else if (in_array($b['now_date'], $b['aerox']['date'])) {
                  $b['set']['img'] = $b['base_path'] . $b['aerox']['img'];
                  $b['set']['alt'] = $b['aerox']['alt'];
                }
                ?>
                <a href="http://www.ayosurabaya.com/media-partner"><img src="<?php echo base_url(); ?>assets/ads/stoper/Ayo-Surabaya.gif" alt="" title="" class="img-responsive" /></a>
                <!-- <img src="<?php echo $b['set']['img']; ?>?w=160" alt="<?php echo $b['set']['alt']; ?>" title="<?php echo $b['set']['alt']; ?>" class="img-responsive" /> -->
                <?php unset($b); // clear the variable 
                ?>
                </a> 

                
              </div>
         
              <!--