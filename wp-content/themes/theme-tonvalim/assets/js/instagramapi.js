var feed = new Instafeed({
    get: 'user',
    userId: 3295626329,
    accessToken: '3295626329.a4f81a9.b13a9b826cd6490f901dca9891cfdfae',
    template: '<div><a href="{{link}}"><img src="{{image}}" /></a></div>',
    target: 'instafeed',
    after: function () {
        $('#instafeed').slick({
            slidesToShow: 5
        });
    }
});
feed.run();