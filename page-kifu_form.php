<?php
/*
Template Name:寄付
*/
?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header class="page-header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <?php get_template_part('includes/nav'); ?>
  <h1>ご寄付</h1>
</header>
<main id="kifu_form">
  <div class="inner">
    <section class="form">
      <h2>寄付フォーム</h2>
      <div class="hubspot_form">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "44108431",
            formId: "70c76c59-377a-4ad3-8ebb-56ca0e0a7eac"
          });
        </script>
      </div>
    </section>
  </div>
</main>

<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>

</html>