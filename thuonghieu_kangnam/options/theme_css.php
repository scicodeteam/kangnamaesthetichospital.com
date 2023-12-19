<?php
    // Home page
    if(is_home() || is_front_page()) {
        include(locate_template("Module/Home/slider_1_0_1/sass/slider_1_0_1.min.css"));
        include(locate_template("Module/Home/service_15_0_0/sass/service_15_0_0.min.css"));
        include(locate_template("Module/Home/person_11_0_0/sass/person_11_0_0.min.css"));
        include(locate_template("Module/Home/video_12_0_0/sass/video_12_0_0.min.css"));
        include(locate_template("Module/Home/person_12_0_0/sass/person_12_0_0.min.css"));
        include(locate_template("Module/Home/basis_9_0_0/sass/basis_9_0_0.min.css"));
        include(locate_template("Module/Home/doctor_10_0_0/sass/doctor_10_0_0.min.css"));
        include(locate_template("Module/Home/news_10_0_0/sass/news_10_0_0.min.css"));
    } else{
        // Inside Page 
        include(locate_template("Module/Post/post_1_0_0/sass/post_1_0_0.min.css"));
        include(locate_template("Module/Post/breadcrumb_1_0_0/sass/breadcrumb_1_0_0.min.css"));
        include(locate_template("Module/Post/post_author_1_0_0/sass/post_author_1_0_0.min.css"));
        include(locate_template("Module/Post/tool_info_2_0_0/sass/tool_info_2_0_0.min.css"));
        include(locate_template("Module/Post/postOther_mz_1_0_0/sass/postOther_mz_1_0_0.min.css"));
        include(locate_template("Module/Post/sidebar_1_0_0/sass/sidebar_1_0_0.min.css"));
        include(locate_template("Module/Category/cate_1_0_0/sass/cate_1_0_0.min.css"));        
        include(locate_template("Module/Category/pagination_1_0_0/sass/pagination_1_0_0.min.css"));
    }
    // All Page
    include(locate_template('Module/assets/sass/lib.min.css')); 
    include(locate_template('Module/assets/sass/custom.min.css')); 
    include(locate_template("Module/Header/header_20_0_0/sass/header_20_0_0.min.css"));
    // include(locate_template("Module/Footer/footer_5_0_0/sass/footer_5_0_0.min.css"));
    include(locate_template("Module/Footer/footer_knhn_1_0_0/sass/footer_knhn_1_0_0.min.css"));
    include(locate_template("Module/Other/tool_info_1_2_0/sass/tool_info_1_2_0.min.css"));
    include(locate_template("Module/Popup/popup_map_1_0_0/sass/popup_map_1_0_0.min.css"));
    include(locate_template("Module/Popup/regist_kn_hn_1_0_0/sass/regist_kn_hn_1_0_0.min.css"));
?>