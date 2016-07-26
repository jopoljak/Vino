<?php get_header(); ?>

<section id="onas">
    <?php 
    $page = get_posts( array( 'name' => 'onas', 'post_type' => 'page' ));
    if ($page) {
        echo $page[0]->post_content;
    }
    ?>
</section>

<section id="vinohrady">
  <?php 
    $page = get_posts( array( 'name' => 'vinohrady', 'post_type' => 'page' ));
    if ($page) {
        echo $page[0]->post_content;
    }
    ?>
</section>

<section id="vina">
  <?php 
    $page = get_posts( array( 'name' => 'vina', 'post_type' => 'page' ));
    if ($page) {
        echo $page[0]->post_content;
    }
    ?>
</section>
<section id="kontakt">
  <?php 
    $page = get_posts( array( 'name' => 'kontakt', 'post_type' => 'page' ));
    if ($page) {
        echo $page[0]->post_content;
    }
    ?>
</section>
<?php get_footer(); ?>