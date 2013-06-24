var url = 'https://api.dailymile.com/people/howtorunfree/entries.json';    
    // web-servers don't allow cross-site JSON requests (for security reasons), so you have to use something called JSONP, which is known as json-padding. lets you do cross-domain requests by adding a callback
    
    $.getJSON(url + "?callback=?", function(data) {
      // the ?callback=? part is the jsonp thingy
      for (var i = 0; i < 7; i++) {
        // This only lets me call 4 items...lame
        var distance = data.entries[i].workout.distance.value;
        var round = Math.round(distance);
        var xDist = round * 5;
        var units = data.entries[i].workout.distance.units;
        var unitBrev = units.substring(0,2);
        $('.week').append("<span>" + xDist + "</span>");
        $('.markers').append("<div>" + round + "</div>");
       
      }
        var day = data.entries[0].workout.distance.value;
        var dayUnit = data.entries[0].workout.distance.units;
        var duBrev = units.substring(0,2);
        $('.today').append(day + " " + duBrev);
    });