

(function($){
  Drupal.behaviors.myMod = {
    attach:function(){
      $('#blog_feed_next, #blog_feed_prev').on('click',function(){

        var currentPageNumber = $('.region-blog-feed').children('input:hidden').attr('current-page');

        var data = {
                    next_page: ++currentPageNumber
                   };
        console.log(data);
        $.getJSON(window.location.href,data,function(response){
          console.log(response);
        });

      });
    }

  }


})(jQuery);
