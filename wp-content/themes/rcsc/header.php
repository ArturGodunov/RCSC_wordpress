<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
if ( in_category('place') ) {
    $mykey_values_coord = get_post_custom_values('Координаты');
    foreach ( $mykey_values_coord as $value ) {
        $bodyData = $value;
    }
}
endwhile;
endif;
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <title>RCSC</title>

        <?php wp_head(); ?>
    </head>
    <body data-coord="<?php echo $bodyData; ?>">