<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS THEME</title>
    <link rel="stylesheet" href="wp-content/themes/ds_theme/style.css">
</head>
<body>
    <nav>
        <?php
        wp_nav_menu(array('theme_location'=>'primary'));
        ?>
    </nav>