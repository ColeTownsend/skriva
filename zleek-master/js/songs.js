var url = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=coletownsend&api_key=70536c5a9546e437282715143937b960&format=json'
    
    
    $.getJSON(url, function(data) {
      // the ?callback=? part is the jsonp thingy
        // This only lets me call 4 items...lame
        var track = data.recenttracks.track[0].name;
        var artist = data.recenttracks.track[0].artist.#text;
        var album = data.recentracks.track[0].image.#text;
        $('.album').append("<img src='" + album + "'>");
        $('.song').append("<span>" + artist + "</span>");
        $('.artist').append(artist);
    }); 

