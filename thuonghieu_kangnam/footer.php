    <?php get_template_part('Module/module_footer'); ?>   
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/Module/media/dist/jquery.min.js"></script> -->


    <?php wp_footer(); ?>

    <?php include(locate_template('Module/Other/tool_info_1_2_0/tool_info_1_2_0.php')); ?>
    <?php include(locate_template('Module/Popup/popup_map_1_0_0/popup_map_1_0_0.php')); ?>
    <?php //include(locate_template('Module/Popup/popup_1_1_0/popup_1_1_0.php')); ?>
    <?php //include(locate_template('Module/Footer/pop_formreg_1_2_0/pop_formreg_1_2_0.php')); ?>
    <?php //get_template_part('Module/Popup/popup_call_1_0_0/popup_call_1_0_0'); ?>
    <?php //include(locate_template('Module/Popup/popup_regist_1_0_1/popup_regist_1_0_1.php')); ?>
    <?php //include(locate_template('Module/Popup/popup_regist_1_0_2/popup_regist_1_0_2.php')); ?>
    <?php //include(locate_template('Module/Popup/popup_regist_1_0_8/popup_regist_1_0_8.php')); ?>
    <?php include(locate_template('Module/Popup/social_1_0_0/social_1_0_0.php')); ?>
    <?php 
        echo $css_inline;
        echo $js_inline;
    ?>
    <?php get_template_part('options/code_tracking/code_tracking'); ?>
    <script src="https://benhvienthammykangnam.com.vn/css/lib/js_v2.min.js?v=1"></script>
    <script>
        <?php include(locate_template('options/theme_js.php')); ?>
    </script>
    
</body>

</html>