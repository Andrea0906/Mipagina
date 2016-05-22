<!DOCTYPE html>
<html>
<head>
	<meta shercet="UTF-8">
	<title>hola</title>
	<link rel="stylesheet" type="text/css" href="estilos2.css">
	<script>
	$(window).load(function(){  
    var spotlight = {  
        
        opacity : 0.2,  
  
     
        imgWidth : $('.spotlightWrapper ul li').find('img').width(),  
        imgHeight : $('.spotlightWrapper ul li').find('img').height()  
  
    };  
 
    $('.spotlightWrapper ul li').css({ 'width' : spotlight.imgWidth, 'height' : spotlight.imgHeight });  
  
    
    $('.spotlightWrapper ul li').hover(function(){  
  
     
        $(this).find('img').addClass('active').css({ 'opacity' : 1});  
  
      
        $(this).siblings('li').find('img').css({'opacity' : spotlight.opacity}) ;  
  
       
    }, function(){  
   
        $(this).find('img').removeClass('active');  
  
    });  
  
   
    $('.spotlightWrapper ul').bind('mouseleave',function(){  
        
        $(this).find('img').css('opacity', 1);  
    });  
  
});  
	</script>
</head>
<body>
	<div class='spotlightWrapper'>  
   <!-- start unordered list -->  
  <h1>Spotify efect</h1>
    <ul>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1460500063983-994d4c27756c?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1460378150801-e2c95cb65a50?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=674' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1458400411386-5ae465c4e57e?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=706' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1452827073306-6e6e661baf57?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=899' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1452215199360-c16ba37005fe?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=620' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1442551382982-e59a4efb3c86?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1440613905118-99b921706b5c?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1432117068802-b224427256a5?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1459664018906-085c36f472af?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1458724029936-2cc6ee38f5ef?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1457685373807-8c4d8be4c560?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=900' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1456930266018-fda42f7404a7?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=960' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1460750860062-82a52139a0d6?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=799' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1432637194732-34cedd856522?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=800' /></a></li>  
        <li><a href='#'><img src='https://images.unsplash.com/photo-1416169607655-0c2b3ce2e1cc?auto=compress&dpr=1&crop=entropy&fit=crop&w=1199&h=899' /></a></li>  
        <div class='clear'></div>  
    </ul>  
    <!-- end unordered list -->  
</div>  
<!-- end spolightWrapper div --> 
</body>
</html>