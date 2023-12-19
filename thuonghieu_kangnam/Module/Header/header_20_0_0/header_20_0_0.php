<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_20_0_0';
?>
<header class="header_20_0_0" id="header_20_0_0">
    <div class="container">
        <div class="header_20_0_0__box">
            <div class="header_20_0_0__box__section2">
                <?php
                    $postId = get_the_ID();
                    if($postId == 155879){
                        $div = 'h1';
                    } else {
                        $div = 'div';
                    }
                    echo '
                        <'.$div.' class="header_20_0_0__boxLogo">
                            <a href="/">
                                <img width="135" height="38" src="/css/lib/images/logo-kn.svg" alt="logo kangnam">
                            </a>
                        </'.$div.'>
                    ';
                ?>
                <div class="iconMidd header_20_0_0__boxNav" id="icon-menu">☰</div>
            </div>
            <div class="header_20_0_0__box__section header_20_0_0__boxMain" id="menu-show">
                <a href="#page1" class="header_20_0_0__box__item-logosb">
                    <img width="195" height="85" src="/css/lib/images/logo-kn-white.svg" alt="Kangnam">
                </a>
                <div class="header_20_0_0__flag header_20_0_0__flag-mb">
                    <a href="/en/"><img src="<?php echo $path ?>/images/en.gif?v=1" alt="en"></a>
                    <a href="/"><img src="<?php echo $path ?>/images/vi.gif" alt="vi"></a>
                </div>
                <ul class="menu">
                    <?php
            foreach( $field as $key2 => $value): 
                $j=1;
                foreach( $value as $key3 => $list):
                    $main_tt = explode("\n",  $list["titlePC"]);
                    if( $list['acf_fc_layout'] == 'menu_donPC' ):
                        echo '
                        ';
                    elseif( $list['acf_fc_layout'] == 'menu_subPC' ):
                        echo '
                        ';
                    elseif ( $list['acf_fc_layout'] == 'menu_sub_fullPC' ):
                        $main_tt = explode("\n",  $list["titlePC"]);
                        $main_ct = explode("&nbsp;",  $list["col1pc"]);
                        echo '
                            <li class="menuSub">
                                <a href="'.$main_tt[1].'" class="header_20_0_0__box__item arr">'.$main_tt[0].'</a> 
                                <div class="menuSubBox">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <p>
                                                <img width="340" height="221" class="no-lazy" src="'.$main_tt[2].'" alt="'.$main_tt[0].'">
                                            </p>
                                        </div>
                                        <div class="col-xl-4">
                                            '.$main_ct[0].'
                                        </div>
                                        <div class="col-xl-4">
                                            '.$main_ct[1].'
                                        </div>
                                    </div>
                                </div>
                            </li>
                        ';
                    endif;
                    $j++;
                endforeach;
            endforeach;
        ?>
                </ul>
            </div>
            <div class="header_20_0_0__flag header_20_0_0__flag-pc">
                <a href="/en/"><img src="<?php echo $path ?>/images/en.gif" alt="en"></a>
                <a href="/"><img src="<?php echo $path ?>/images/vi.gif" alt="vi"></a>
            </div>
            <a class="header_20_0_0__task" href="tel:0016502852885">
                    <i>
                        <img width="20" height="20" src="/wp-content/themes/thuonghieu_kangnam/Module/Other/tool_info_1_2_0/images/call.png" alt="Call">
                    </i>
        </a>
            <!-- <div class="header_20_0_0__task modal-btn" data-modal="search">
                <a class="header_20_0_0__boxSearch" >
                    <i class="icon-search-2">
                        <img width="20" height="20" src="<?php echo $path ?>/images/search.svg" alt="Search">
                    </i>
                </a>
            </div> -->
            <div class="header_20_0_0__box-bg" id="bg-menu">
            </div>
        </div>
    </div>                
</header>

<?php
  echo $js_inline;
?>