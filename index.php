<!DOCTYPE html>
<html>
	<head>
		<title>Christensen Academy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Cameron Christensen">
		<meta name="keywords" content="computer science, programming, learn, java, javascript, html, css, binary, processing, flash, actionscript, image manipulation, game maker">
		<meta name="description" content="Learn computer science and programming for free.">
    <link rel="shortcut icon" href="img/logo16.png">
    <link rel="icon" type="image/png" Shref="http://example.com/myicon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/ca.css" rel="stylesheet">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30969336-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/showdown.js"></script>
	</head>
	<body>
  
  <div style="position:fixed;right:0;top:0;left:0;z-index:1;">
    <div class="nav-col">
      <a class="nav-column-header hidden-phone" href="#">Home</a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Getting Started with the Christensen Academy" class="nav-column-header hidden-phone" href="#getting-started">Intro</a>
      <a rel="tooltip" title="How to Use This Site" href="#how-to-use-this-site" class="getting-started-background nav-item"></a>
      <a rel="tooltip" title="Learning Advice" href="#learning-advice" class="getting-started-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Computer Science" class="nav-column-header hidden-phone" href="#cs-basics">CS</a>
      <a rel="tooltip" title="Computer Basics" href="#computer-basics" class="cs-basics-background nav-item"></a>
      <a rel="tooltip" title="Binary" href="#binary" class="cs-basics-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Web Design and Development" class="nav-column-header hidden-phone" href="#web">Web</a>
      <a rel="tooltip" title="Web Intro" href="#web-design-and-development-intro" class="web-background nav-item"></a>
      <a rel="tooltip" title="HTML Basics" href="#html-basics" class="web-background nav-item"></a>
      <a rel="tooltip" title="CSS Basics" href="#css-basics" class="web-background nav-item"></a>
      <a rel="tooltip" title="CSS Layouts" href="#css-layouts" class="web-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Game Maker" class="nav-column-header hidden-phone" href="#game-maker">GM</a>
      <a rel="tooltip" title="Beginning Game Maker" href="#beginning-game-maker" class="game-maker-background nav-item"></a>
      <a rel="tooltip" title="Intermediate Game Maker" href="#intermediate-game-maker" class="game-maker-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="The Processing Programming Language" class="nav-column-header hidden-phone" href="#processing">PL</a>
      <a rel="tooltip" title="Khan Academy CS" href="#khan-cs" class="processing-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="The Java Programming Language" class="nav-column-header hidden-phone" href="#java">Java</a>
      <a rel="tooltip" title="Java: Getting Started" href="#java-getting-started" class="java-background nav-item"></a>
      <a rel="tooltip" title="Beginning Java" href="#beginning-java" class="java-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Adobe Flash and ActionScript" class="nav-column-header hidden-phone" href="#flash">Flash</a>
      <a rel="tooltip" title="Intro to Flash and ActionScript 3" href="#intro-to-flash-and-actionscript-3" class="flash-background nav-item"></a>
      <a rel="tooltip" title="Drawing in Flash" href="#drawing-in-flash" class="flash-background nav-item"></a>
      <a rel="tooltip" title="Animating in Flash" href="#animating-in-flash" class="flash-background nav-item"></a>
      <a rel="tooltip" title="Beginning ActionScript" href="#beginning-actionscript" class="flash-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a rel="tooltip" title="Working with Digital Images" class="nav-column-header hidden-phone" href="#image-manipulation">Image</a>
      <a rel="tooltip" title="Image Manipulation Intro" href="#image-manipulation-intro" class="image-manipulation-background nav-item"></a>
      <a rel="tooltip" title="GIMP Basics" href="#gimp-basics" class="image-manipulation-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a  rel="tooltip" title="Fun Riddles and Brain Teasers" class="nav-column-header hidden-phone" href="#brain-teasers">Fun</a>
      <a rel="tooltip" title="Brain Teasers" href="#brain-teasers" class="brain-teasers-background nav-item"></a>
    </div>
    <div class="nav-col">
      <a class="nav-column-header hidden-phone" href="http://christensenacademy.org/blog">Blog</a>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="hero-unit" style="background:none">
      <div class="row-fluid" style="text-align:left" >
        <div class="span2">
          <a rel="tooltip" title="The Blog" id="blog-link" href="http://christensenacademy.org/blog"></a>
        </div>
        <div class="span10">
          <h1>Hello, World!</h1>
          <p>Welcome to the Christensen Academy, where you can learn about computer science and programming for free!</p>
        </div>
      </div>
    </div>   
  </div>
  
  <script>
    var updateDISQUS = function(module_name, thread_title, page_title){
      $('#discussion #myModalLabel').html(page_title);
      DISQUS.reset({
        reload: true,
        config: function () {  
          this.page.identifier = module_name + '/' + thread_title;
          this.page.url = 'http://christensenacademy.org/#!' + module_name + '/' + thread_title;
          this.page.title = page_title;
        }
      });
    };
  </script>
  
  <div class="modal hide fade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="discussion">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
      <div id="disqus_thread"></div>
      <script type="text/javascript">
        var disqus_shortname = 'christensen-academy';
        var disqus_identifier = 'newidentifier';
        var disqus_url = 'http://example.com/newthread';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>
  </div>
  
  

  <?php include('./modules/classes.php'); ?>
  
  <div class="container-fluid subject-area" id="getting-started">   
    <?php include('./modules/how-to-use-this-site/module.php'); ?>
    <?php include('./modules/learning/module.php'); ?>
  </div>
  
  <div class="container-fluid subject-area" id="cs-basics">   
    <?php include('./modules/computer-basics/module.php'); ?>
    <?php include('./modules/binary/module.php'); ?>
  </div>
      
  <div class="container-fluid subject-area" id="web">   
    <?php include('./modules/web-design-and-development-intro/module.php'); ?>
    <?php include('./modules/html-basics/module.php'); ?>
    <?php include('./modules/css-basics/module.php'); ?>
    <?php include('./modules/css-layouts/module.php'); ?>
  </div>     
     
  <div class="container-fluid subject-area" id="game-maker">
    <?php include('./modules/beginning-game-maker/module.php'); ?>
    <?php include('./modules/intermediate-game-maker/module.php'); ?>
  </div> 
     
  <div class="container-fluid subject-area" id="processing">
    <?php include('./modules/khan-cs/module.php'); ?>
  </div> 

  <div class="container-fluid subject-area" id="java">          
    <?php include('./modules/java-getting-started/module.php'); ?>
    <?php include('./modules/beginning-java/module.php'); ?>
  </div>
  
  <div class="container-fluid subject-area" id="flash">          
    <?php include('./modules/intro-to-flash-and-actionscript-3/module.php'); ?>
    <?php include('./modules/drawing-in-flash/module.php'); ?>
    <?php include('./modules/animating-in-flash/module.php'); ?>
    <?php include('./modules/beginning-actionscript/module.php'); ?>
  </div>

  <div class="container-fluid subject-area" id="image-manipulation">          
    <?php include('./modules/image-manipulation-intro/module.php'); ?>
    <?php include('./modules/gimp-basics/module.php'); ?>
  </div>
  
  <div class="container-fluid subject-area" id="brain-teasers">          
    <?php include('./modules/brain-teasers/module.php'); ?>
  </div>

  <div class="hero-unit" style="background:none">
    <h2>It's not that we're so smart, it's just that we stay with problems longer.</h2>
    <br>
    <h3>
      <a href="http://christensenacademy.org/blog">About</a>
    </h3>
  </div>
     
  <p style="text-align:center;">
    
  </p>
  
  <div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1 id="popup-header"></h1>
    </div>
    <div class="modal-body" id="popup-content">
      
    </div>
  </div>

<script>

function scrolledOver(elem){
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;

  return((elemTop <= docViewBottom) && (elemTop >= docViewTop));
  
};

$(window).scroll(function(){
  $('.module').each(function(){
    if(scrolledOver(this)){
      $('.nav-item').each(function(){$(this).removeClass('active-link');});
      $('.nav-item[href*="#'+$(this).attr('id')+'"]').addClass('active-link');
      return false;
    }
  });
});

$('.challenge').tooltip({
  placement: 'top'
});
$('.discussion-link').tooltip({
  placement: 'left'
});
$('a.nav-item').tooltip({
  placement: 'bottom'
});
$('#blog-link').tooltip({
  placement: 'left'
});
$('a.nav-column-header').tooltip({
  placement: 'bottom'
});

$(document).ready(function(){
  var converter = new Showdown.converter();
  
  $(".popupper").click(function(event){   
    event.preventDefault();
    var pathToChallenge = $(this).attr("data-link");
    $('#popup-header').html($(this).attr("data-original-title"));
    $.ajax({  
      url: pathToChallenge,  
      cache: false,
      beforeSend: function() {
        $('#popup-content').html("<img src='/img/loading.gif' />");
      },
      success: function(html) {
        $('#popup-content').html(converter.makeHtml(html));
      }
    });
  });
});
</script>
	</body>
</html>