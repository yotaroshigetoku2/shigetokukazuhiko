<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<?php
function register_script()
{
  wp_register_script('shigetokukazuhiko_common', get_template_directory_uri() . '/js/common.js');
  wp_register_script('scroll', get_template_directory_uri() . '/js/scroll.js');
}
?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>