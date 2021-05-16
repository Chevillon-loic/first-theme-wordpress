<?php wp_enqueue_style('style', get_stylesheet_uri()); ?>
<!DOCTYPE html>
<html lang="<?php echo esc_attr(get_bloginfo('language')); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?= esc_html(get_bloginfo('name')); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">