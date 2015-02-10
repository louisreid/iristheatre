<?php
/* -------------------------------------
    Easy Fancybox Styleheet Conversion
   ------------------------------------- */

  header('Content-type: text/css; charset=utf-8', true);
  ob_start("iepathfix_compressor");

  function iepathfix_compressor($buffer) {
    global $url;
    /* Relative path fix : add 'walleriboxlite/'
     * IE6 path fix : replace relative with full path */
    $buffer = str_replace(array("url('", "AlphaImageLoader(src='walleriboxlite/"), array("url('walleriboxlite/", "AlphaImageLoader(src='" . $url . "/walleriboxlite/" ), $buffer);
    /* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs and newlines */
    $buffer = str_replace(array("\r", "\n", "\t"), '', $buffer);
    /* and squeeze some more */
    $buffer = str_replace(array(", ", ": ", " {", "{ ", " }", "} ", "; ", " 0;"), array(",", ":", "{", "{", "}", "}", ";", ";"), $buffer);
    return $buffer;
  }

  $url = ( ( isset($_SERVER['HTTPS']) ) ? "https://" : "http://" ) . htmlspecialchars( $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']), ENT_QUOTES);

  /* the css file */
  $version = preg_match( '`^\d{1,2}\.\d{1,2}(\.\d{1,2})?$`' , $_GET['ver'] ) ? $_GET['ver'] : '';
  include( './walleriboxlite/jquery.walleriboxlite-' . htmlspecialchars( $version , ENT_QUOTES) . '.css' );

  /* extra styles */
  echo '.walleriboxlite-hidden{display:none}';

  ob_end_flush();
?>
