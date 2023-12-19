<!-- comment -->							
<div class="pcm" id="pcm">
		<div class="pcm__head">
			<p class="pcm__title">Ý kiến của bạn</p>
			<ul class="pcm__tabname">
				<li>
					<a href="#pcm__tab1">Mới nhất</a> <span>|</span>
				</li>
				<li>
					<a href="#pcm__tab2">Xem nhiều nhất</a>
				</li>

			</ul>
		</div>
		
		<style>
			.pcm__content span.shide {
				display: none;
				 
			}
			 .pcm__main article { 
				display: block;
			}
		</style>
		<script>
			var ppp = 3; // Post per page
			var post_id = <?php echo get_the_ID(); ?>;
			var pageNumber = 1;
			var pageNumber2 = 1;
			
		</script>
		<div class="pcm__tabct">
			
			<!-- tab1 -->
			<div class="pcm__tabitem" id="pcm__tab1">
				<div class="pcm__main pcm__main_a">
					<?php
						echo '<script>var ajax_url = "'.admin_url( 'admin-ajax.php' ).'";</script>';
						$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						$Ccount=0;
						$args = array(
							'status'  => 'approve',
							'number'  => '3',
							'parent'  => '0',
							'orderby' => 'comment_ID',
							'order' => 'DESC', 
							'post_id' => get_the_ID(), // use post_id, not post_ID
						);
						$comments = get_comments( $args );
						
						foreach ( $comments as $comment ) :
							$Ccount=$Ccount+1;
							$comment_substr='';
							$args_sub = array(
								'status'  => 'approve', 
								'parent'  => $comment->comment_ID ,
								'post_id' => get_the_ID(), // use post_id, not post_ID
							);
							$comments_sub = get_comments( $args_sub );
							$count=0;
							$style="";
							$avartar = scrapeImage(get_wp_user_avatar( $comment->comment_author_email )); 
							
							// if($avartar=="") $avartar="/wp-content/themes/thuonghieu_kangnam/options/comment/media/images/avatar.jpg";
							// $avartar="/wp-content/themes/thuonghieu_kangnam/options/comment/media/images/avatar.jpg";
							foreach ( $comments_sub as $comment_sub ){
								//var_dump( $comment_sub );
								//$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true )? intval(get_comment_meta( $comment_sub->comment_ID, 'like', true )]) : 0;
							
							$avartar2 = scrapeImage(get_wp_user_avatar($comment_sub->comment_author_email )); 
							
								if($avartar2=="") $avartar2="/wp-content/themes/thuonghieu_kangnam/options/comment/media/images/avatar.jpg";
								$like =  get_comment_meta( $comment_sub->comment_ID, 'like', true );
								if($like==false){$like=0;}
								$comment_content=inst($comment_sub->comment_content);
								$count =$count+1;
								if($count>3){  $style ="style='display:none;'";}
								$comment_substr= $comment_substr.' 
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
												<div class="user_pic"><img src="'.$avartar2.'" alt="'.$comment_sub->comment_author.'"></div>
												<div class="user_ct">
													<div class="user_name">'.$comment_sub->comment_author.'</div>
													<div class="user_time">'.$comment_sub->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment_sub->comment_ID.');">Thích <span class="like'.$comment_sub->comment_ID.'">*'.$like.'</span></a> 
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
							echo '
								<article>
									<div class="pcm__c1">
										<div class="pcm__content">'.$comment_content.'</div>';
										
									if(strpos($comment_content, "shide",0)!==false){	
										echo '<div class="pcm__load">
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
										echo '
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="'.$avartar.'" alt="'.$comment->comment_author.'"></div>
												<div class="user_ct">
													<div class="user_name">'.$comment->comment_author.'</div>
													<div class="user_time">'.$comment->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment->comment_ID.');">Thích <span class="like'.$comment->comment_ID.'">*'.$like2.'</span></a> <span>|</span>
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
									
								echo '</article>';
							
						endforeach;
					?>
				
				
					</div> 
					<?php if($Ccount>2): ?>
					 <div class="pcm__main">
						<div onclick="load_posts()" class="loadMoreAll">
							<span>Xem thêm</span>
						</div>
						<div class="showLessAll">
							<span>Thu nhỏ </span>
						</div>
					</div>
					<?php endif ?>
			</div>
			<!-- tab1 -->	
			
			
			<!-- tab2 -->
			<div class="pcm__tabitem" id="pcm__tab2">
				<div class="pcm__main pcm__main_b">
					<?php
						 
						$Ccount=0;
						$args = array(
							'status'  => 'approve',
							'number'  => '3',
							'parent'  => '0',
							'orderby' => 'meta_value_num',
							'order' => 'DESC', 
							'meta_key' => 'like',
							'post_id' => get_the_ID(), // use post_id, not post_ID
						);
						$comments = get_comments( $args );
						
						foreach ( $comments as $comment ) :
							$Ccount=$Ccount+1;
							$comment_substr='';
							$args_sub = array(
								'status'  => 'approve', 
								'parent'  => $comment->comment_ID ,
								'post_id' => get_the_ID(), // use post_id, not post_ID
							);
							$comments_sub = get_comments( $args_sub );
							$count=0;
							$style="";
							$avartar = scrapeImage(get_wp_user_avatar( $comment->comment_author_email )); 
								if($avartar=="") $avartar="/wp-content/themes/thuonghieu_kangnam/options/comment/media/images/avatar.jpg";
							foreach ( $comments_sub as $comment_sub ){
							
								// $avartar2 = scrapeImage(get_wp_user_avatar( $comments_sub->comment_author_email )); 
								// if($avartar2=="") $avartar2="/wp-content/themes/thuonghieu_kangnam/options/comment/media/images/avatar.jpg";
								$avartar2="https://benhvienthammykangnam.vn/wp-content/uploads/2019/08/bs-tu-van-1.jpg";
								
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
												<div class="user_pic"><img src="'.$avartar2.'" alt="'.$comment_sub->comment_author.'"></div>
												<div class="user_ct">
													<div class="user_name">'.$comment_sub->comment_author.'</div>
													<div class="user_time">'.$comment_sub->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment_sub->comment_ID.');">Thích <span class="like'.$comment_sub->comment_ID.'">*'.$like.'</span></a> 
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
							echo '
								<article>
									<div class="pcm__c1">
										<div class="pcm__content">'.$comment_content.'</div>';
										
									if(strpos($comment_content, "shide",0)!==false){	
										echo '<div class="pcm__load">
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
										echo '
										<div class="pcm__footer">
											<div class="pcm__user">
												<div class="user_pic"><img src="'.$avartar.'" alt="'.$comment->comment_author.'"></div>
												<div class="user_ct">
													<div class="user_name">'.$comment->comment_author.'</div>
													<div class="user_time">'.$comment->comment_date.'</div>
												</div>
											</div>
											<div class="pcm__info">
												<div class="info_hd">
													<a href="javascript:likecm('.$comment->comment_ID.');">Thích <span class="like'.$comment->comment_ID.'">*'.$like2.'</span></a> <span>|</span>
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
									
								echo '</article>';
							
						endforeach;
					?>
				
				
					</div> 
					<?php if($Ccount>2): ?>
					 <div class="pcm__main">
						<div onclick="load_posts2()" class="loadMoreAll">
							<span>Xem thêm</span>
						</div>
						<div class="showLessAll">
							<span>Thu nhỏ </span>
						</div>
					</div>
					<?php endif ?>
			</div>
			<!-- tab2 -->
			
		</div>
		<div class="pcm__quickask">
			<textarea name="" id="txtcomment" cols="30" rows="10" placeholder="Bình luận của bạn"></textarea>
			<button cpId="0" cId="0"  rel="txtcomment"  class="cm_popform">GỬI</button>
		</div>
	</div>
	 
	 
	 
	 
	 
	 				
	<div class="cm_pop">
			<div class="background_overlay" style="display:none"></div>
			<div id="overlay_form_cm" class="overlay_form" style="display:none">
				<div class="pop_box">
					<article>
						<div class="pop_hd">
							<div class="tt">GỬI Bình luận</div>
							<div class="desc">Nhập thông tin của bạn</div>
						</div>
						<div class="pop_fr">
							<div>
		 
								<input id="txtcname" name="txtcname" type="textbox" placeholder="Họ tên*:">
								<input id="txtcmobile" name="txtcmobile" type="textbox" placeholder="Điện thoại*:">
								<input id="txtcId" name="txtcId" type="textbox" style="display:none">
								<input id="txtcpId" name="txtcpId" type="textbox" style="display:none">
								<input id="txtIdcontent" name="txtIdcontent" type="textbox" style="display:none">
								<input id="txtcpostId" name="txtcpostId" value="<?php echo get_the_ID(); ?>" type="textbox" style="display:none">
								
							</div>
							<div>
								<input id="pop_sent" type="button" value="HOÀN THÀNH">
							</div>
						</div>
						<a href="javascript:void(0);" id="close"> 
							<svg viewbox="0 0 40 40">
								<path class="close-x" d="M 10,10 L 30,30 M 30,10 L 10,30" />
							</svg>
						</a>
					</article>
				</div>
			</div>
	</div>						
							
	<div class="cm_pop_thank">
		<div class="background_overlay" style="display:none"></div>
		<div id="overlay_form_cm" class="overlay_form" style="display:none">
			<div class="pop_box">
				<article>
					<div class="pop_hd">
						<div class="tt">Gửi ý kiến thành công</div>
						<div class="desc">Bệnh viện thẩm mỹ Kangnam đã nhận được ý kiến của bạn. Chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất. Xin cảm ơn !</div>
					</div>
					<a id="close">
						<svg viewbox="0 0 40 40">
							<path class="close-x" d="M 10,10 L 30,30 M 30,10 L 10,30" />
						</svg>
					</a>
				</article>
			</div>
		</div>
	</div>						
							
	<?php
		include(locate_template("/options/comment/media/css/comment_css.php"));
	?>
	<script src="<?php echo get_template_directory_uri(); ?>/Module/media/dist/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/options/comment/media/js/comment.js"></script>					
							
							
	 
	 
	 
	 
	 
<!-- end comment -->	