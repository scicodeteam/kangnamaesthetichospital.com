<?php

/*Dang Ky Ngay*/
function post_social_1_0_0_shortcode($atts,$content=null){
    $siteurl = get_permalink();
    static $count = 0;
    $count++;
    $post_time = get_field('post_time');
    if($post_time ==''):
        $post_time = '30 giây';
    endif;
    $style = '<style>
        .post_social_1_0_0{display:flex;flex-wrap:wrap;padding:10px 0 0}.post_social_1_0_0 a{text-decoration:none;display:inline-block}.post_social_1_0_0_time{width:70%}.post_social_1_0_0_icon{float:left;margin-right:5px}.post_social_1_0_0_icon svg{fill:#f05c5d;width:25px}.post_social_1_0_0_item-zalo::before{content:"";background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpEMUExRTE5ODA4NDkxMUVBOTgzOUM3QThFNUM3QTU4RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpEMUExRTE5OTA4NDkxMUVBOTgzOUM3QThFNUM3QTU4RCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQxQTFFMTk2MDg0OTExRUE5ODM5QzdBOEU1QzdBNThEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQxQTFFMTk3MDg0OTExRUE5ODM5QzdBOEU1QzdBNThEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WtxUTwAACm9JREFUeNq0WAlwVOUd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") no-repeat;background-size:100%;display:inline-block;width:36px;height:36px}.post_social_1_0_0_ct{font-family:Arial;line-height:1.7}.post_social_1_0_0_box{width:60%;text-align:right}.post_social_1_0_0_box svg{width:36px}.post_social_1_0_0_bottom{display:flex;flex-wrap:wrap;justify-content:flex-end}.post_social_1_0_0_bottom a{text-decoration:none;display:inline-block}@media (max-width: 320px){.post_social_1_0_0_item-zalo::before{width:28px;height:28px}.post_social_1_0_0_ct{font-size:14px}.post_social_1_0_0_box svg{width:26px}}
        @media screen and (max-width: 414px){.post_social_1_0_0{font-size:14px;}}

    </style>';
    if ($count > 1):
        $style = '';
    endif;
    return $style.'
 
        <div class="post_social_1_0_0">
            <div class="post_social_1_0_0_time">
                <div class="post_social_1_0_0_icon">
                    <svg viewBox="0 0 64 64" enable-background="new 0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(378.000000, 428.000000)"><path d="M-346.1-373.1c-12.6,0-22.9-10.3-22.9-22.9c0-12.6,10.3-22.9,22.9-22.9     c12.6,0,22.9,10.3,22.9,22.9C-323.1-383.4-333.4-373.1-346.1-373.1L-346.1-373.1z M-346.1-416.5c-11.3,0-20.4,9.2-20.4,20.4     s9.2,20.4,20.4,20.4s20.4-9.2,20.4-20.4S-334.8-416.5-346.1-416.5L-346.1-416.5z" id="Fill-131"></path><polyline points="-338.9,-384.3 -347.4,-392.8 -347.4,-408.3 -344.7,-408.3 -344.7,-393.9      -337,-386.2 -338.9,-384.3    "></polyline></g></g></svg>
                </div>
                <div class="post_social_1_0_0_ct">
                    <span>Mất '.$post_time.' để đọc</span>
                </div>
            </div>
            <div class="post_social_1_0_0_box">
                
            </div>
        </div>
        
                 
	';
}
add_shortcode('post_social_1_0_0','post_social_1_0_0_shortcode');
/*End Dang Ky Ngay*/
