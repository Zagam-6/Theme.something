<?php
// Template Name: Page avec header
?>

<header>
    <h1>Page ave header</h1>
</header>
<div class="container">
<?php if (have_posts()){
    while (have_posts()){
        the_post();?>

        <h1><?php the_title();?></h1>
        <p><?php the_content();?></p>
        <?php
    }
}
?>
<?php  get_template_part('template-parts/section','bouton');  ?>
</div>

<?php get_footer();?>