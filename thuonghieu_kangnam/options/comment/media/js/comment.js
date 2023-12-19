jQuery(function($) {
	 

	$("#pop_sent").click(function() {
		var content = $("#" + $("#txtIdcontent").val()).val();
		var cId = $("#txtcId").val();
		var cpostId = $("#txtcpostId").val(); 
		var cpId = $("#txtcpId").val();
		var cname= $("#txtcname").val();
		var cmobile = $("#txtcmobile").val();
		if(cname==""){
			alert('Tên không được bỏ trống');
			return;
		}
		if(cmobile==""){
			alert('Mobile không được bỏ trống');
			return;
		}
		if(content==""){
			alert('Nội dung không được bỏ trống');
			return;
		}
		
		var str = 'cpostId='+ cpostId + '&cpId=' + cpId + '&cname=' + cname + '&cmobile=' + cmobile+ '&content=' + content+ '&action=add_comment';
		console.log(str);
		jQuery.ajax({
			type: "POST",
			dataType: "html",
			url: ajax_url,
			data: str,
			success: function(data){
				 // alert('Gửi bình luận thành công!');
				 $(".cm_pop_thank .background_overlay").fadeIn(500);
				 $(".cm_pop_thank .overlay_form").fadeIn(500);
				 /*if(isNaN(data)){
					alert('Gửi bình luận thành công!');
				 }else{
					//alert('Có lỗi trong quá trình gửi bình luận bạn vui lòng thử lại!');
					alert(data);
				 }*/
				$(".cm_pop #overlay_form_cm").fadeOut(500);
				$(".cm_pop .background_overlay").fadeOut(500);
			},
			error : function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
			}

		});

		return false;
		
		
		
		
	});
	$('body').on('click', '.cm_popform', function() { 
		$("#txtIdcontent").val($(this).attr("rel"));
		$("#txtcId").val($(this).attr("cId"));
		$("#txtcpId").val($(this).attr("cpId"));
		$(".cm_pop #overlay_form_cm").fadeIn(0);
		$(".cm_pop .background_overlay").fadeIn(500);
		$(".background_overlay").css("position","fixed");
		var left = (screen.width / 2) - (385 / 2);
		var top = (screen.height / 2) - (263 / 2) - 100;
		$(".cm_pop #overlay_form_cm").css({'position':'fixed','top':0 +'px','left':0 + 'px','z-index':9999});
 


	});
	$(".cm_pop_thank #close, .cm_pop_thank .background_overlay").click(function() {
		$("input").val("");
		$("#txtcomment").val("");
		$(".cm_pop_thank #overlay_form_cm").fadeOut(500);
		$(".cm_pop_thank .background_overlay").fadeOut(500);

	});
	$(".cm_pop #close, .cm_pop .background_overlay").click(function() {
		$(".cm_pop #overlay_form_cm").fadeOut(500);
		$(".cm_pop .background_overlay").fadeOut(500);
		 
	});
	
	function activeTab(obj)
	{
		$('.pcm ul li').removeClass('active');

		$(obj).addClass('active');

		var id = $(obj).find('a').attr('href');

		$('.pcm__tabitem').hide();

		$(id) .show();
	}

	$('.pcm__tabname li').click(function(){
		activeTab(this);
		return false;
	});
	activeTab($('.pcm__tabname li:first-child'));

	
	//more
	
	
	$('.pcm__content span:lt(1)').show();
    $('.loadMore').click(function () {
		$(this).parent().parent().find('.pcm__content .shide').show();
		$(this).hide();
		$('.showLess').show();
    });
    $('.showLess').click(function () {
		$(this).parent().parent().find('.pcm__content .shide').hide();
		$(this).hide();
		$('.loadMore').show();
    });
	$('.pcm__main').on('click', '.reply', function() {  
		$(this).parent().parent().parent().find('.info_ct').toggle();
	})
	
	$('.pcm__main article:lt(3)').show();
     
	
	$("a[href='#pcm']").on('click', function(event) {
		if (this.hash !== "") {
		  event.preventDefault();

		  var hash = this.hash;

		  $('html, body').animate({
			scrollTop: $(hash).offset().top - 120
		  }, 900, function(){

			window.location.hash = hash;
		  });
		} 
	  });
});


 

function likecm(id){
		if(getCookie('like'+id)) {
			alert('Bạn đã like bình luận này rồi!');
			return;
		}
		var str = 'cid='+ id + '&action=like_comment';
		console.log(str);
		jQuery.ajax({
			type: "POST",
			dataType: "html",
			url: ajax_url,
			data: str,
			success: function(data){
				 $('.like'+id).text('*' + data);
				 setCookie('like'+id);
			},
			error : function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
			}

		});
		//return false;
	}
	



function load_posts(){
	 
	pageNumber++;
	var str = 'type='+ post_id +'&post_id=' + post_id + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_comment';
	console.log(str);
	jQuery.ajax({
		type: "POST",
		dataType: "html",
		url: ajax_url,
		data: str,
		success: function(data){
			console.log(data);
			var $data = jQuery(data);
			if($data.length){
				jQuery(".pcm__main_a").append($data);
				 
			} else{
				jQuery("#pcm__tab1 .loadMoreAll").hide();
			}
		},
		error : function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus);
			//$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
		}

	});
	return false;
}





function load_posts2(){
	 
	pageNumber2++;
	var str = 'type='+ post_id +'&post_id=' + post_id + '&pageNumber2=' + pageNumber2 + '&ppp=' + ppp + '&action=more_comment2';
	console.log(str);
	jQuery.ajax({
		type: "POST",
		dataType: "html",
		url: ajax_url,
		data: str,
		success: function(data){
			console.log(data);
			var $data = jQuery(data);
			if($data.length){
				jQuery(".pcm__main_b").append($data);
				 
			} else{
				jQuery("#pcm__tab2 .loadMoreAll").hide();
			}
		},
		error : function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus);
			//$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
		}

	});
	return false;
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

