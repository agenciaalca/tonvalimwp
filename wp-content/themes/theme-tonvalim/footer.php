<!--<footer>-->
    <div class="copyright">© TON VALIM. ALL RIGHTS RESERVED. DESENVOLVIDO POR AGÊNCIA ALCA</div>        
</footer>  

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/c0cfec55-b221-4cdf-92b9-f3538fd258a9-loader.js" ></script>
<?php wp_footer(); ?>

<script>
//
//// var username= "bsbcolchoes";
//    var limit = 3;
//    var setSize = "SDSD";
//
//    $(document).ready(function () {
////
//        $.ajax({
//            type: "GET",
//            dataType: "jsonp",
//            cache: false,
//            url: 'https://api.instagram.com/v1/users/322548972/media/recent/?&access_token=322548972.1677ed0.fb6b8f7b7c2740dfb336abea8134adac',
//            success: function (data) {
//                for (var i = 0; i < limit; i += 1) {
//                    if (setSize == "medium") {
//                        var size = data.data[i].images.thumbnail.url;
//                    } else if (setSize == "medium") {
//                        var size = data.data[i].images.low_resolution.url;
//                    } else {
//                        var size = data.data[i].images.standard_resolution.url;
//                    }
//                    $("#insta").append("<a href='" + size + "'><li><img width='' class='img-responsive' alt='project' src='" + size + "' class='roid'/></li></a>");
//                }
//
//            }
//        });

//    });

$(document).ready(function(){
  var gram, imgs;

  function initializeCarousel(imgs){
    for(var i = 0; i < imgs.length; i++){
      var img = $(imgs)[i];

      //adds the expanding white bg to all <li> elements
      $(img).append('<div class="bg"></div>');

      //adds necessary classes to have the carousel show up properly
      if(i == 0){
        $(img).addClass('selected');
      }else if(i == 1){
        $(img).addClass('next');
      }else{
        $(img).addClass('next-more');
      }
    }

    //only allows the currently 'selected' image to link out
    $('li a', gram).click(function(event){
      if(!$(this).parent().hasClass('selected')){
        event.preventDefault();
      }
    });

    //not the fanciest way to set up prev/next but it works
    function nextImage(){
      if($('.selected', gram).index() < imgs.length - 1){
        $('.prev', gram).removeClass('prev').addClass('prev-more');
        $('.selected', gram).removeClass('selected').addClass('prev');
        $('.next', gram).removeClass('next').addClass('selected');
        $('.next-more', gram).first().removeClass('next-more').addClass('next');
      }
    }

    function prevImage(){
      if($('.selected', gram).index() > 0){
        $('.next', gram).removeClass('next').addClass('next-more');
        $('.selected', gram).removeClass('selected').addClass('next');
        $('.prev', gram).removeClass('prev').addClass('selected');
        $('.prev-more', gram).last().removeClass('prev-more').addClass('prev');
      }
    }

    $('.next-btn').click(nextImage);
    $('.prev-btn').click(prevImage);
  }


	//refer to https://github.com/michael-lynch/instagram-lite for more details
  $('#gram-carousel').instagramLite({
    clientID: '322548972.1677ed0.fb6b8f7b7c2740dfb336abea8134adac',//replace this with your issued client id
    username: 'cristiianefaria',//swap this with whomever's username you'd like to show up
    urls: true,
    success: function() {
      //BAM! Dah magikh is happenin' here!
      gram = $('#gram-carousel');
      imgs = $('li', gram);
      initializeCarousel(imgs);
    }
  });
});

</script>
</body>

</html>