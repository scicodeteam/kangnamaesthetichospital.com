<?php
// function enqueue_scripts_and_styles() {
//     wp_enqueue_style( 'style-comment', get_template_directory_uri() . '/options/comment/media/css/main.css',false,'1.0','all');
//     wp_enqueue_script( 'comment-jquery', get_template_directory_uri() . '/options/comment/media/js/comment.js', array(), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' ); 

/* comment */
  
	//like
	function like_comment() {
		$cid = isset($_POST['cid']) ? intval($_POST['cid']) : 0;
		$like = get_comment_meta( $cid, 'like', true );
		if($like===false){
			 
			   add_comment_meta( $comment_id, 'like', 1 );

			
		}else{
			update_comment_meta( $cid, 'like' , $like +1);
		}
		$like = get_comment_meta( $cid, 'like', true );
		echo $like;
		die();
	}
	add_action('wp_ajax_like_comment', 'like_comment');
	add_action('wp_ajax_nopriv_like_comment', 'like_comment');
	
	//them moi comment
	add_action('wp_ajax_add_comment', 'add_comment');
	add_action('wp_ajax_nopriv_add_comment', 'add_comment');
	function add_comment(){
		$cpId = isset($_POST['cpId']) ? intval($_POST['cpId']) : 0;
		$cpostId = isset($_POST['cpostId']) ? intval($_POST['cpostId']) : 0;
		$cname = isset($_POST['cname']) ? $_POST['cname'] : "";
		$cmobile = isset($_POST['cmobile']) ? $_POST['cmobile'] : "";
		$content = isset($_POST['content']) ? $_POST['content'] : "";
		$time = current_time('mysql');

		$data = array(
			'comment_post_ID' => $cpostId,
			'comment_author' => $cname,
			'comment_author_email' => $cmobile.'@email.com',
			'comment_author_url' => $cmobile,
			'comment_content' => $content,
			'comment_type' => '',
			'comment_parent' => $cpId, 
			'comment_author_IP' => get_the_user_ip() ,
			'comment_agent' =>  $_SERVER['HTTP_USER_AGENT'],
			'comment_date' => $time, 
			'comment_approved' => 1
		);

		$cId= wp_new_comment($data);
		if (is_numeric($cId)) {
			add_comment_meta( $cId, 'like', 0 );
		}
		echo $cId;
		die();
	}
	
	
	function get_the_user_ip() {
		if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
			//check ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
			//to check ip is pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
	function inst($oldstr){
		// $newstr = substr_replace($oldstr, "<p></p>", strrpos($oldstr, "."), 0);
		$newstr = str_replace(array("\n"), '<br />', $oldstr);
		// $newstr=$oldstr;
		// if(strpos($oldstr, ".",200)!==false){ 
		// 	$newstr = substr($oldstr, 0, strpos($oldstr, ".",200)+1) . "</span><span class='shide'>" . substr($oldstr, strpos($oldstr, ".",200)+1);
		// }else{
		
		// }
		return "<span class='sshow'>".$newstr."</span>";
	}
	
	
	
	
function more_comment(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 5;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;
	$post_id = (isset($_POST['post_id'])) ? $_POST['post_id'] : '';
	$type = (isset($_POST['type'])) ? $_POST['type'] : '';
	 
    header("Content-Type: text/html");
	$out="";
	
					 
						$args = array(
							'status'  => 'approve', 
							'parent'  => '0',
							'orderby' => 'comment_ID',
							'order' => 'DESC', 
							'post_id' => $post_id,  
						);
						$comments = get_comments( $args );
						$Ccount =0;
						foreach ( $comments as $comment ) :
							$Ccount =$Ccount+1;
							if($ppp*$page>$Ccount) continue;
							$comment_substr='';
							$args_sub = array(
								'status'  => 'approve', 
								'parent'  => $comment->comment_ID ,
								'post_id' => get_the_ID(), // use post_id, not post_ID
							);
							$comments_sub = get_comments( $args_sub );
							$count=0;
							$style="";
							foreach ( $comments_sub as $comment_sub ){
								//$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true )? intval(get_comment_meta( $comment_sub->comment_ID, 'like', true )]) : 0;
								

								$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true );
								if($like==false){$like=0;}
								$comment_content=inst($comment_sub->comment_content);
								$count =$count+1;
								if($count>3){  $style ="style='display:none;'";}
								$comment_substr=$comment_substr.'
									<div '.$style.'   class="pcm__c2 pcm'.$comment->comment_ID.'">
										<div class="pcm__content">'.$comment_content.'</div>';
										
								if(strpos($comment_content, "shide",0)!==false){
									$comment_substr=$comment_substr.'
										<div class="pcm__load">
												<div class="showLess">
												<svg class="svg-icon" viewBox="0 0 20 20">
													<path d="M14.776,10c0,0.239-0.195,0.434-0.435,0.434H5.658c-0.239,0-0.434-0.195-0.434-0.434s0.195-0.434,0.434-0.434h8.684C14.581,9.566,14.776,9.762,14.776,10 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.691-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.382,10c0-4.071-3.312-7.381-7.382-7.381C5.929,2.619,2.619,5.93,2.619,10c0,4.07,3.311,7.382,7.381,7.382C14.07,17.383,17.382,14.07,17.382,10"></path>
												</svg>
											</div>
											<div class="loadMore">
												<svg class="svg-icon" viewBox="0 0 20 20">
													<path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
												</svg>
											</div>	
										</div>';
								}
									$comment_substr=$comment_substr.'	
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="https://benhvienthammykangnam.vn/wp-content/uploads/2019/08/bs-tu-van-1.jpg" alt="'.$comment_sub->comment_author.'"></div>
												<div class="user_ct">
													<div class="user_name">'.$comment_sub->comment_author.'</div>
													<div class="user_time">'.$comment_sub->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment_sub->comment_ID.')">Thích <span class="like'.$comment_sub->comment_ID.'">*'.$like.'</span></a> 
													<!--<span>|</span><a class="reply">Trả lời</a>-->
												</div>
												<div class="info_ct">
													<div class="pcm__quickask pcm__quickask--run">
														<textarea name="" id="txtcomment'.$comment_sub->comment_ID.'" cols="30" rows="10" placeholder="Bình luận của bạn"></textarea>
														<button cpId="'.$comment_sub->comment_ID.'" cId="'.$comment_sub->comment_ID.'" rel="txtcomment'.$comment->comment_ID.'" class="cm_popform">TRẢ LỜI</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								';
							}
						
							//$like2 = get_comment_meta( $comment->comment_ID, 'like', true ) ? intval(get_comment_meta( $comment->comment_ID, 'like', true )]) : 0;
							$like2 = get_comment_meta( $comment->comment_ID, 'like', true );
							if($like2==false){$like2=0;}
							$comment_content=inst($comment->comment_content);
							$out=$out.'
								<article>
									<div class="pcm__c1">
										<div class="pcm__content">'.$comment_content.'</div>';
										
									if(strpos($comment_content, "shide",0)!==false){	
										$out=$out.'<div class="pcm__load">
											<div class="showLess">
											<svg class="svg-icon" viewBox="0 0 20 20">
												<path d="M14.776,10c0,0.239-0.195,0.434-0.435,0.434H5.658c-0.239,0-0.434-0.195-0.434-0.434s0.195-0.434,0.434-0.434h8.684C14.581,9.566,14.776,9.762,14.776,10 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.691-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.382,10c0-4.071-3.312-7.381-7.382-7.381C5.929,2.619,2.619,5.93,2.619,10c0,4.07,3.311,7.382,7.381,7.382C14.07,17.383,17.382,14.07,17.382,10"></path>
											</svg>
										</div>
										<div class="loadMore">
											<svg class="svg-icon" viewBox="0 0 20 20">
												<path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
											</svg>
										</div>	
										</div>';
									}
										$out=$out.'
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="/wp-content/themes/KNBrandNew_ver3/options/comment/media/images/avatar.jpg" alt=""></div>
												<div class="user_ct">
													<div class="user_name">'.$comment->comment_author.'</div>
													<div class="user_time">'.$comment->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment->comment_ID.')">Thích <span class="like'.$comment->comment_ID.'">*'.$like2.'</span></a> <span>|</span>
													<a class="reply">Trả lời</a>
												</div>
												<div class="info_ct">
													<div class="pcm__quickask pcm__quickask--run">
														<textarea name="" id="txtcomment'.$comment->comment_ID.'" cols="30" rows="10" placeholder="Bình luận của bạn"></textarea>
														<button cpId="'.$comment->comment_ID.'" cId="'.$comment->comment_ID.'"  rel="txtcomment'.$comment->comment_ID.'"  class="cm_popform">TRẢ LỜI</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									 '.$comment_substr.'';
									 if($count>5){
										echo '<div id="more'.$comment->comment_ID.'" class="pcm__more"><a href="javascript:$(\'.pcm'.$comment->comment_ID.'\').show();$(\'#more'.$comment->comment_ID.'\').hide();">Xem tất cả '.$count.' trả lời</a></div>';
									 }
									
								$out=$out.'</article>';
							
							 
							 
						endforeach;
					 
	 
	die($out);
}

add_action('wp_ajax_nopriv_more_comment', 'more_comment');
add_action('wp_ajax_more_more_comment', 'more_comment');







	
	
function more_comment2(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 5;
    $page = (isset($_POST['pageNumber2'])) ? $_POST['pageNumber2'] : 1;
	$post_id = (isset($_POST['post_id'])) ? $_POST['post_id'] : '';
	$type = (isset($_POST['type'])) ? $_POST['type'] : '';
	 
    header("Content-Type: text/html");
	$out="";
	
					 
						$args = array(
							'status'  => 'approve', 
							'parent'  => '0',
							'orderby' => 'meta_value_num',
							'order' => 'DESC', 
							'meta_key' => 'like',
							'post_id' => $post_id,  
						);
						$comments = get_comments( $args );
						$Ccount =0;
						foreach ( $comments as $comment ) :
							$Ccount =$Ccount+1;
							if($ppp*$page>$Ccount) continue;
							$comment_substr='';
							$args_sub = array(
								'status'  => 'approve', 
								'parent'  => $comment->comment_ID ,
								'post_id' => get_the_ID(), // use post_id, not post_ID
							);
							$comments_sub = get_comments( $args_sub );
							$count=0;
							$style="";
							foreach ( $comments_sub as $comment_sub ){
								//$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true )? intval(get_comment_meta( $comment_sub->comment_ID, 'like', true )]) : 0;
								$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true );
								if($like==false){$like=0;}
								$comment_content=inst($comment_sub->comment_content);
								$count =$count+1;
								if($count>3){  $style ="style='display:none;'";}
								$comment_substr=$comment_substr.'
									<div '.$style.'   class="pcm__c2 pcm'.$comment->comment_ID.'">
										<div class="pcm__content">'.$comment_content.'</div>';
										
								if(strpos($comment_content, "shide",0)!==false){
									$comment_substr=$comment_substr.'
										<div class="pcm__load">
												<div class="showLess">
												<svg class="svg-icon" viewBox="0 0 20 20">
													<path d="M14.776,10c0,0.239-0.195,0.434-0.435,0.434H5.658c-0.239,0-0.434-0.195-0.434-0.434s0.195-0.434,0.434-0.434h8.684C14.581,9.566,14.776,9.762,14.776,10 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.691-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.382,10c0-4.071-3.312-7.381-7.382-7.381C5.929,2.619,2.619,5.93,2.619,10c0,4.07,3.311,7.382,7.381,7.382C14.07,17.383,17.382,14.07,17.382,10"></path>
												</svg>
											</div>
											<div class="loadMore">
												<svg class="svg-icon" viewBox="0 0 20 20">
													<path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
												</svg>
											</div>	
										</div>';
								}
									$comment_substr=$comment_substr.'	
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="/wp-content/themes/KNBrandNew_ver3/options/comment/media/images/avatar.jpg" alt=""></div>
												<div class="user_ct">
													<div class="user_name">'.$comment_sub->comment_author.'</div>
													<div class="user_time">'.$comment_sub->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment_sub->comment_ID.')">Thích <span class="like'.$comment_sub->comment_ID.'">*'.$like.'</span></a> 
													<!--<span>|</span><a class="reply">Trả lời</a>-->
												</div>
												<div class="info_ct">
													<div class="pcm__quickask pcm__quickask--run">
														<textarea name="" id="txtcomment'.$comment_sub->comment_ID.'" cols="30" rows="10" placeholder="Bình luận của bạn"></textarea>
														<button cpId="'.$comment_sub->comment_ID.'" cId="'.$comment_sub->comment_ID.'" rel="txtcomment'.$comment->comment_ID.'" class="cm_popform">TRẢ LỜI</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								';
							}
						
							//$like2 = get_comment_meta( $comment->comment_ID, 'like', true ) ? intval(get_comment_meta( $comment->comment_ID, 'like', true )]) : 0;
							$like2 = get_comment_meta( $comment->comment_ID, 'like', true );
							if($like2==false){$like2=0;}
							$comment_content=inst($comment->comment_content);
							$out=$out.'
								<article>
									<div class="pcm__c1">
										<div class="pcm__content">'.$comment_content.'</div>';
										
									if(strpos($comment_content, "shide",0)!==false){	
										$out=$out.'<div class="pcm__load">
											<div class="showLess">
											<svg class="svg-icon" viewBox="0 0 20 20">
												<path d="M14.776,10c0,0.239-0.195,0.434-0.435,0.434H5.658c-0.239,0-0.434-0.195-0.434-0.434s0.195-0.434,0.434-0.434h8.684C14.581,9.566,14.776,9.762,14.776,10 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.691-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.382,10c0-4.071-3.312-7.381-7.382-7.381C5.929,2.619,2.619,5.93,2.619,10c0,4.07,3.311,7.382,7.381,7.382C14.07,17.383,17.382,14.07,17.382,10"></path>
											</svg>
										</div>
										<div class="loadMore">
											<svg class="svg-icon" viewBox="0 0 20 20">
												<path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
											</svg>
										</div>	
										</div>';
									}
										$out=$out.'
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="/wp-content/themes/KNBrandNew_ver3/options/comment/media/images/avatar.jpg" alt=""></div>
												<div class="user_ct">
													<div class="user_name">'.$comment->comment_author.'</div>
													<div class="user_time">'.$comment->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment->comment_ID.')">Thích <span class="like'.$comment->comment_ID.'">*'.$like2.'</span></a> <span>|</span>
													<a class="reply">Trả lời</a>
												</div>
												<div class="info_ct">
													<div class="pcm__quickask pcm__quickask--run">
														<textarea name="" id="txtcomment'.$comment->comment_ID.'" cols="30" rows="10" placeholder="Bình luận của bạn"></textarea>
														<button cpId="'.$comment->comment_ID.'" cId="'.$comment->comment_ID.'"  rel="txtcomment'.$comment->comment_ID.'"  class="cm_popform">TRẢ LỜI</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									 '.$comment_substr.'';
									 if($count>5){
										echo '<div id="more'.$comment->comment_ID.'" class="pcm__more"><a href="javascript:$(\'.pcm'.$comment->comment_ID.'\').show();$(\'#more'.$comment->comment_ID.'\').hide();">Xem tất cả '.$count.' trả lời</a></div>';
									 }
									
								$out=$out.'</article>';
							
							 
							 
						endforeach;
					 
	 
	die($out);
}

add_action('wp_ajax_nopriv_more_comment2', 'more_comment2');
add_action('wp_ajax_more_more_comment2', 'more_comment2');


function scrapeImage($text) {
    $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
    preg_match($pattern, $text, $link);
    $link = $link[1];
    $link = urldecode($link);
    return $link;

}
	
/* end comment */

?>