$(document).ready(function() {                        
    $.fn.pageMe = function(opts){
        var $this = this,
            defaults = {
                perPage: 3
            },
            settings = $.extend(defaults, opts);                              
        var listElement = $this;
        var perPage = settings.perPage; 
        var children = listElement.children();
        var pager = $('.pager');                                
        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
            console.log(children.size());
        }                                
        if (typeof settings.pagerSelector!="undefined") {
            console.log(settings.pagerSelector);
            pager = $(settings.pagerSelector);
        }                                
        var numItems = children.size();
        var numPages = Math.ceil(numItems/perPage);
        pager.data("curr",0);                                
        var curr = 0;
        while(numPages > curr){
            $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
            curr++;
        }                                
        pager.find('.page_link:first').addClass('active');                                
        children.css('display', 'none');
        children.slice(0, perPage).css('display', '');                                
        pager.find('li a').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
        });                                
        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            if($('.active').prev('.page_link').length==true){
                goTo(goToPage);
            }
        }                                 
        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            if($('.active_page').next('.page_link').length==true){
                goTo(goToPage);
            }
        }                                
        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;                                    
            children.css('display','none').slice(startAt, endOn).css('display','');
            pager.attr("curr",page);
        }                    
    };
    $('#listStuff').pageMe({pagerSelector:'#listStuffPager',childSelector:'.col-md-4',perPage:3});                        
});