jQuery(document).ready(function(){    
    jQuery(".owl-carousel-banner").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:0,                        
        nav:false,
        dots:true,            
        mouseDrag: true,
        touchDrag: true,  
        lazyLoad: true,                              
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });       
    jQuery(".owl-carousel-service").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:5,                        
        nav:true,
        navText: ["<i class=\"fa fa-chevron-left\"></i>","<i class=\"fa fa-chevron-right\"></i>"],
        dots:false,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        responsive:{   
            0:{
                items:1
            },                                                         
            740:{
                items:5
            }
        }
    });     
});         