function get_post(){
	/**
	 * El hashtag se debe leer de la table evento, por ahora
	 * esta estatico.
	 */
	$.ajax({
		url: '/twitter/post/flisolcucuta2012',
		type: 'GET',
		dataType: 'json',
		success: function(data){
			buildTimeLine(data);
		}
	});	
}

function buildTimeLine(data){
	var html = ''
	var nt = 0;
	var t_info = data.results;
	while(nt < 10){
		html += "<div class='tweet_row'>" +
			"<div class='tweet_image'><img src='"+ 
			t_info[nt]['profile_image_url'] +"'/></div>" +
			"<div class='tweet_content'><b>"+ t_info[nt]['from_user_name'] +"</b>" +
			"<br/>" + t_info[nt]['text'] + 
			"</div></div>";
		nt++;
	}
	$('#twitter_time').html(html);
}
