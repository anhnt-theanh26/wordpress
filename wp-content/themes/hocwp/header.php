<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học lập trình theme Wordpress</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- hiển thị thanh navbar menu -->
    <?php get_template_part('includes/section', 'menu'); ?>