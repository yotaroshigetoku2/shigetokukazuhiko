<?php
/*
Template Name:テンプレート
*/
?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header class="page-header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <?php get_template_part('includes/nav'); ?>
  <h1></h1>
</header>
<main>
  <div class="inner">
    <?php the_content(); ?>
  </div>
</main>

<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>

</html>