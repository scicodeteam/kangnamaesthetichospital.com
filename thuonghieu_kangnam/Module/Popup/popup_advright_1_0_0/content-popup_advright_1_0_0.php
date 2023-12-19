<?php 
  $name = 'popup_advright_1_0_0';
  $path = get_template_directory_uri();
  $path = $path.'/Module/Home/'.$name;
	if($check == 0){
		echo "
      <style>
        .popup_advright_1_0_0 {
          display: block !important;
          position: fixed;
          bottom: 36px;
          right: 3%;
          width: 80px;
          text-align: center;
          z-index: 98;
          background-color: #C75050;
          border: 1px solid #CCCCCC;
          color: #FFFFFF;
          cursor: pointer;
          display: block;
          float: right;
          margin: 0;
          padding: 0 7px;
        }
        .popup_advright_1_0_0_box {
          bottom: 0;
          right: 0;
          position: fixed;
          z-index: 98 !important;
          transition: 0.3s;
        }
        .popup_advright_1_0_0_close {
          background-color: #C75050;
          border: 1px solid #CCCCCC;
          color: #FFFFFF;
          cursor: pointer;
          display: block;
          float: right;
          margin: 0;
          padding: 0 7px;
          font-family: Arial, Helvetica, sans-serif;
        }

        @media (max-width: 414px) {
          .popup_advright_1_0_0_box {
            bottom: 53px;
            display:none;
          }
        }
      </style>
    ";
    if ( !function_exists( 'popup_advright_1_0_0' ) ) :
      
      add_action('wp_footer', 'popup_advright_1_0_0');
      function popup_advright_1_0_0(){ 
        echo '
          <script type="text/javascript">
            $(".popup_advright_1_0_0_close").click(function () {
              $(".popup_advright_1_0_0_box").css({
                  "display" : "none",
              });
            });
          </script>
        ';           
      };
    endif;		
	}  
?>

<div class="popup_advright_1_0_0_box" >
  <div class="popup_advright_1_0_0_close">
      x
  </div>
  <div class="popup_advright_1_0_0_desc">
      <?php
          $data = explode("\n",  $field["data"]);
          echo '
              <a target="_blank" rel="nofollow" href="'.$data[1].'" title="'.$data[0].'">
                  <picture>
                    <source media="(max-width:600px)" srcset="'.$data[3].'" alt="'.$data[0].'">
                    <img src="'.$data[2].'" alt="'.$data[0].'">
                  </picture>
              </a>
          ';
      ?>
  </div>
</div>

   
        