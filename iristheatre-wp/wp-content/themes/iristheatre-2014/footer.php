<?php ?>
        </main>
      </div>
      <div class="wrapper--site-footer">
        <footer class="site-footer">
          <div class="footer-head">
            <a class="logo-footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img class="logo--header" src="<?php echo get_template_directory_uri(); ?>/img/logo-red.png" alt="">
            </a>
            <p class="footer-strapline">Supporting the next generation of professional theatre practitioners.</p>
            <div class="footer-social">
              Social:
              <a href="https://www.facebook.com/pages/Iris-Theatre/212084672144025"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook-steel.png" alt=""></a>
              <a href="https://twitter.com/iristheatre/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter-steel.png" alt=""></a>
              <a href="https://vimeo.com/iristheatr"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-vimeo-steel.png" alt=""></a>
            </div>
          </div>
          <div class="footer-body">

          <?php wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'nav-main--footer',
            'menu_id' => 'footer-menu',
            'menu_class' => '',
            'theme_location' => 'footer-menu'
            ));
          ?>

          <div class="footer-newsletter">
            <?php dynamic_sidebar( 'email-signup' ); ?>
          </div>

          </div>
        </footer>
      </div>
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.fluidbox.js"></script>
      
      <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
      <script type='text/javascript' id="__bs_script__">//<![CDATA[
          document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.1.6.5.js'><\/script>".replace(/HOST/g, location.hostname).replace(/PORT/g, location.port));
      //]]></script>
    </body>
</html>