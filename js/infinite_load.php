<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$('.posts').masonry({
			columnWidth: 306,
			itemSelector: '.post',
			gutter: 30
		});

		$content.waitForImages( function () {
			$('.posts').masonry();
		});
	});
</script>
<script language="javascript" type="text/javascript">
	var page = 1;
	var loading = false;
	var moreToLoad = true;
	var $window = $(window);
	var $content = $('body .posts');
	var load_posts = function(){
		if( !moreToLoad ) {
			$('#LoadMoreDiv').hide();
			$('#LoadingDiv').hide();

			return;
		}

		loading = true;
		$('#LoadMoreDiv').hide();
		$('#LoadingDiv').show();
		page++;
		$.ajax({
			type       : "GET",
			data       : {pageNumber: page, category: "<?php echo $selected_category; ?>"},
			dataType   : "html",
			url        : "<?php bloginfo( 'url' ); ?>/wp-content/themes/outsystems_blog/loopHandler.php",
			beforeSend : function(){
			},
			success    : function(data){
				if (data == null || data == "") {
					loadMore = false;
					$('#LoadMoreDiv').hide();
					$('#LoadingDiv').hide();

					return ;
				}
				$data = jQuery(data);
				$content.append($data);
				$content.masonry( 'appended', $data, false);
				$content.waitForImages( function () {
					$content.masonry();
				});
				loading = false;
				$('#LoadingDiv').hide();
				$('#LoadMoreDiv').show();
			},
			error     : function(jqXHR, textStatus, errorThrown) {
				loading = false;
				$('#LoadingDiv').hide();
				$('#LoadingError').show();
			}
		});
	}

	$window.scroll(function() {
		var content_offset = $content.offset();
		if(!loading && ($window.scrollTop() + $window.height()) > ($content.scrollTop() + $content.height() + content_offset.top)) {
			load_posts();
		}
	});
</script>