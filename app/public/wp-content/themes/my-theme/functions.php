
<?php 

function bestdealsinfo_files(){
    wp_enqueue_script( 'main-univ-js',get_theme_file_uri( '/build/index.js'),array('jquery'),'1.0',true );
    wp_enqueue_style('bestdealsinfo_main_styles',get_theme_file_uri( '/build/style-index.css' ));
    wp_enqueue_style('bestdealsinfo_extra_styles',get_theme_file_uri( '/build/index.css' ));
    wp_enqueue_style('custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','bestdealsinfo_files');


