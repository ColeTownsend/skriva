String.prototype.commafy = function () {
    return this.replace(/(^|[^\w.])(\d{4,})/g, function($0, $1, $2) {
        return $1 + $2.replace(/\d(?=(?:\d\d\d)+(?!\d))/g, "$&,");
    });
};

Number.prototype.commafy = function () {
    return String(this).commafy();
};

$(document).ready(function () {		        
    $.jribbble.getPlayerById('coletownsend', function (player) {
    
    		var shots = [];
    		var shotCount = player.shots_count;
    		var pixels = (shotCount * 480000);
    		var pix = pixels.commafy();
    		shots.push('<a href="' + player.url + '" target="_blank">');
    		shots.push(pix + '</a>');
    		$('.pixels').html(shots.join(''));
    	});
});



