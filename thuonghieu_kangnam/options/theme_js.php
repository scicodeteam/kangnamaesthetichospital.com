<?php
    // Home Page
    if(is_home() || is_front_page()) {
        include(locate_template('Module/assets/js/tiny-slider.min.js')); 
        include(locate_template('Module/Home/slider_1_0_1/js/slider_1_0_1.min.js')); 
        include(locate_template('Module/Home/person_11_0_0/js/person_11_0_0.min.js')); 
    } 
    // All Page
    include(locate_template('Module/assets/js/lib.min.js')); 
    include(locate_template('Module/assets/js/module.min.js')); 
    include(locate_template('Module/Header/header_20_0_0/js/header_20_0_0.min.js')); 
    include(locate_template('Module/Popup/popup_map_1_0_0/js/popup_map_1_0_0.min.js')); 
    include(locate_template('Module/Popup/pop_formreg_1_2_0/js/pop_formreg_1_2_0.min.js')); 
?>