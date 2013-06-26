$(document).ready(function () {		
	$.jribbble.getShotsByPlayerId('coletownsend', function (playerShots) {
	    var html = [];
	
	    $.each(playerShots.shots, function (i, shot) {
	        html.push('<a href="' + shot.url + '" target="_blank">');
	        html.push('<img src="' + shot.image_url + '" ');
	        html.push('alt="' + shot.title + '"></a>');
	    });
	
	    $('#work').html(html.join(''));
	}, {page: 1, per_page: 4});
});
