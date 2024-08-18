<?php
/*
Template Name:応援・お問い合わせふぉーむ
*/
?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header class="contact-form page-header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <?php get_template_part('includes/nav'); ?>
    <h1>応援のお願い・お問い合せ</h1>
</header>
<main id="contact">
  <div class="inner">
    <section id="contact_form" class="form">
      <h2>応援・お問い合わせフォーム</h2>
      <div class="hubspot_form">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "44108431",
            formId: "a152be57-f876-477d-94eb-f3c4f615c0a6"
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