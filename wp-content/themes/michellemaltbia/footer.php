     <footer>
         <div class="container-fluid" style="background: #333;padding:30px;">
             <div class="col-xs-12 text-center">
                 <ul id="social-media-list">
                     <li>
                         <a href="mailto:hi@michellemaltbia.com?Subject=Let's%20Chat" target="_top">
                             <img src="<?php echo get_bloginfo('template_directory');?>/images/email.png" alt="Shoot me a message!">
                         </a>
                     </li>
                     <li>
                         <a href="http://www.github.com/mmaltbia">
                             <img src="<?php echo get_bloginfo('template_directory');?>/images/github.png" alt="Github">
                         </a>
                     </li>
                     <li>
                         <a href="http://linkedin.com/in/michellemaltbia">
                             <img src="<?php echo get_bloginfo('template_directory');?>/images/linkedin.png" alt="LinkedIn">
                         </a>
                     </li>
                     <li>
                         <a href="http://www.twitter.com/michellemaltbia">
                             <img src="<?php echo get_bloginfo('template_directory');?>/images/twitter.png" alt="Twitter">
                         </a>
                     </li>
                 </ul>
             </div>
             <div class="col-xs-12 text-center" style="color: #fff;">
                 &copy; Michelle Maltbia - All Rights Reserved - 2016.
             </div>
         </div>
    </footer>
    
    <script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/vivus/dist/vivus.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/script.js"></script>


     <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
     <script>
         (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
     </script>
     <?php wp_footer(); ?>
     </body>
</html>