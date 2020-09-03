$(document).ready(function(){
   $('.blog .page_item').on('click', function(){
        if($(this).hasClass('active')) return;
        
        $('.blog .page_item.active').removeClass('active');
        $(this).addClass('active');
        let target = $(this).attr('target-content');
        $('.blog-group.active').removeClass('active');
        $('.blog-group.'+target).addClass('active');
   });
   
   $('.blog .next-page_item').on('click', function(){
       var nextItem = $('.blog .page_item.active').next();
       if(nextItem.hasClass('next-page_item')) return;
       
       $('.blog .page_item.active').removeClass('active');
       nextItem.addClass('active');
       let target = nextItem.attr('target-content');
       $('.blog-group.active').removeClass('active');
       $('.blog-group.'+target).addClass('active');
   });
   
   
   $('.gallery-pagination .page_item').on('click', function(){
        if($(this).hasClass('active')) return;
        
        $('.gallery-pagination .page_item.active').removeClass('active');
        $(this).addClass('active');
        let target = $(this).attr('target-content');
        $('.gallary-group.active').removeClass('active');
        $('.gallary-group.'+target).addClass('active');
   });
   
   $('.gallery-pagination .next-page_item').on('click', function(){
       var nextItem = $('.gallery-pagination .page_item.active').next();
       if(nextItem.hasClass('next-page_item')) return;
       
       $('.gallery-pagination .page_item.active').removeClass('active');
       nextItem.addClass('active');
       let target = nextItem.attr('target-content');
       $('.gallary-group.active').removeClass('active');
       $('.gallary-group.'+target).addClass('active');
   });
   
   $('.gallery-pagination .prev-page_item').on('click', function(){
       var prevItem = $('.gallery-pagination .page_item.active').prev();
       if(prevItem.hasClass('prev-page_item')) return;
       
       $('.gallery-pagination .page_item.active').removeClass('active');
       prevItem.addClass('active');
       let target = prevItem.attr('target-content');
       $('.gallary-group.active').removeClass('active');
       $('.gallary-group.'+target).addClass('active');
   });
});