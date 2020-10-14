        
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/assets/js/vendor/jquery-ui.min.js?v=1.11.4"></script>   
        <!-- <script src="http://ayosemarang.com/assets/js/vendor/bootstrap.min.js?v=3.3.4"></script> -->
        <script src="/assets/js/vendor/jquery.nicescroll.min.js?v=3.6.0"></script>
        <script src="/assets/js/vendor/jquery.easing.min.js?v=1.3" type="text/javascript"></script>
        <script src="/assets/js/vendor/jquery.easy-ticker.min.js?v=2.0" type="text/javascript"></script>
        <script src="/assets/js/vendor/jquery.marquee.min.js?v=1.3.1" type="text/javascript"></script>
        <script src="/assets/js/vendor/jquery.pause.min.js?v=0.1" type="text/javascript"></script>
        <script src="/assets/js/vendor/lightslider.js?v=1.1.2" type="text/javascript"></script>
        <script src="/assets/js/vendor/jquery.lazyload.min.js?v=1.9.3" type="text/javascript"></script>
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script src="/assets/js/vendor/riza.simple-slide-banner.js?v=1.0" type="text/javascript"></script> -->
        <?php if($this->uri->segment(1) == 'index') { // only for index page ?>
        <script src="/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?v=2.4.4" type="text/javascript"></script>
        <?php } ?>
        <script src="/assets/js/main.js?v=1.0"></script>
        <?php if($this->input->get('q') != '') { // To show Google Custom Search ?>
        <script>
           $(document).ready(function(){
              $('#hdr-search').slideDown();
              $('#hdr-newsticker').slideUp();
              $("#src-input").focus(); // set focus on search input
              $('#btn-search').children('span').addClass('btn-main-active'); // apply active style
           });
        </script>
        <?php } ?>
        <?php if($this->uri->segment(1) == 'index') { // only for index page ?>
        <script type="text/javascript">
          $(document).ready(function(){
            /* Documentation: https://github.com/AuspeXeu/bootstrap-datetimepicker */
            var el_dtp = $('#datetimepicker').val();
            
            /* Datepicker */
            $('#datetimepicker').datetimepicker({
              initialDate: el_dtp,
              format: 'dd/mm/yyyy',
              startDate: '2018-01-01',
              pickTime: false,
              weekStart: 1,
              todayBtn:  true,
              autoclose: true,
              todayHighlight: true,
              startView: 2,
              minView: 2,
              keyboardNavigation: true,
              forceParse: true
            });
          });
        </script>
        <?php } ?>


      <!--   <?php get_alexa(); ?> -->

      <!--   <?php get_google_analytics(); ?> -->

      <!--   <?php get_statcounter(); ?> -->
