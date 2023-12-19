<?php
    $type = 'Home';
    $link_module = 'Module_v2/'.$type.'/'.$name.'/';
    $path = get_template_directory_uri();
    $path = $path.'/'.$link_module;
    include(locate_template('/'.$link_module.'/'.$name.'.php'));
?>