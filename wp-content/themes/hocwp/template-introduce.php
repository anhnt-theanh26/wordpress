<?php
/**
 * Template Name: introduce
 */
?>
<?php include('header.php'); ?>

<div class="row">
    <div class="col-6 border">
        <h1>This is content of page introduce</h1>
    </div>
    <div class="col-6 border">
        <?php get_template_part('includes/section', 'content')  ?>
    </div>
</div>

<?php include('footer.php') ?>