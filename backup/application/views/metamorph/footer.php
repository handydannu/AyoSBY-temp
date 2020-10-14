        <!-- S: Main Footer -->
        <footer>

<!-- 
          <div class="ftr-banner-bottom text-center">
            <!~~ <a href="javascript:;" target="_blank" title="Bank bjb Syariah"> ~~>
            <a href="javascript:;" target="" title="Bank bjb Syariah">
              <!~~ <img src="/assets/ads/2018/06/bjb-syariah-1100-alt.jpg?w=1100" class="img-responsive" /> ~~>
              <img src="/assets/ads/2018/06/bjb-syariah-936.jpg?w=936" class="img-responsive" />
            </a>
          </div>
 -->

          <?php $this->load->view($this->config->item('template_name') . 'footer-level-1'); ?>
          
          <?php $this->load->view($this->config->item('template_name') . 'footer-level-2'); ?>

          <?php $this->load->view($this->config->item('template_name') . 'footer-level-3'); ?>

          <!-- S: Scroll To Top Navigation -->   
          <a class="scroll-to-top" style="display: none;">
            <i class="glyphicon glyphicon-chevron-up"></i>
          </a>
          <!-- E: Scroll To Top Navigation -->
        </footer>
        <!-- E: Main Footer -->

        <?php $this->load->view($this->config->item('template_name') . 'footer-loadscript'); ?>
        
        <!--
        [PAGE INFO]
        Page rendered in {elapsed_time} seconds.
        Page served on SRV1-C-34. 
        -->
    </body>
</html>