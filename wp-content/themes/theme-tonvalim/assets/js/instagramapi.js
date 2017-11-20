var feed = new Instafeed({
    get: 'user',
    userId: 3295626329,
    accessToken: '3295626329.a4f81a9.b13a9b826cd6490f901dca9891cfdfae',
    template: '<div><img src="{{image}}" /></div>',
    target: 'instafeed',
    after: function () {
        $('#instafeed').slick({
            dots: true,
            infinite: true,
            slidesToShow: 10,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }
});
feed.run();