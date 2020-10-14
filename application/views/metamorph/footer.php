        <!-- S: Main Footer -->
        <footer>

        <!-- <ins class="arunn" data-zone-arun="tq7s2i8yvl"></ins>
        <script type="text/javascript">
          (function() {
            var a = document.createElement("script"),
                b = document.getElementsByTagName("script")[0];
            a.src = "https://d.audiencerun.com/c/tq7s2i8yvl?d="+ (new Date).getTime() + "&r=";
            try{
              a.src += encodeURIComponent(top.document.referrer)
              } catch (c) {
                a.src += encodeURIComponent(document.referrer)
                }
                a.type = "text/javascript";
                a.async = !0;
                b.parentNode.insertBefore(a, b)
          })();
        </script> -->

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