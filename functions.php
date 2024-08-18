<?php
function my_body_class($classes)
{
    if (is_page()) {
      $page = get_post();
      $classes[] = $page->post_name;
    }
    return $classes;
}
add_filter('body_class', 'my_body_class');
?>