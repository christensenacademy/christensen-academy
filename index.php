<!DOCTYPE html>
<html>
	<head>
		<title>Christensen Academy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Cameron Christensen">
		<meta name="keywords" content="computer science, programming, learn, java, javascript, html, css, binary, processing, flash, actionscript, image manipulation, game maker">
		<meta name="description" content="A gateway to the world of computer science and programming!">
    <link rel="shortcut icon" href="img/logo16.png">
    <link rel="icon" type="image/png" Shref="http://example.com/myicon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/colorbox.css" />
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
	<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <ul class="nav">
          <li><a class="brand" href="#">Christensen Academy</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle cs-basics-text-color" data-toggle="dropdown"> CS Basics <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#computer-basics" class="cs-basics-color">Computer Basics</a></li>
              <li><a href="#binary" class="cs-basics-color">Binary</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle web-text-color" data-toggle="dropdown"> Web <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#web-design-and-development-intro" class="web-color-color">Web Design and Development Intro</a></li>
              <li><a href="#html-basics" class="web-color-color">HTML Basics</a></li>
              <li><a href="#css-basics" class="web-color-color">CSS Basics</a></li>
              <li><a href="#css-layouts" class="web-color-color">CSS Layouts</a></li>

            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle game-maker-text-color" data-toggle="dropdown"> Game Maker <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#beginning-game-maker" class="game-maker-color">Beginning Game Maker</a></li>
              <li><a href="#intermediate-game-maker" class="game-maker-color">Intermediate Game Maker</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle processing-text-color" data-toggle="dropdown"> Processing <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#khan-cs" class="processing-color">Khan Academy CS</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle java-text-color" data-toggle="dropdown"> Java <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#java-getting-started" class="java-color">Java: Getting Started</a></li>
              <li><a href="#beginning-java" class="java-color">Beginning Java</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle flash-text-color" data-toggle="dropdown"> Flash <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#intro-to-flash-and-actionscript-3" class="flash-color">Intro to Flash and ActionScript 3</a></li>
              <li><a href="#drawing-in-flash" class="flash-color">Drawing in Flash</a></li>
              <li><a href="#animating-in-flash" class="flash-color">Animating in Flash</a></li>
              <li><a href="#beginning-actionscript" class="flash-color">Beginning ActionScript</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle image-manipulation-text-color" data-toggle="dropdown"> GIMP <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#image-manipulation-intro" class="image-manipulation-color">Image Manipulation Intro</a></li>
              <li><a href="#gimp-basics" class="image-manipulation-color">GIMP Basics</a></li>
            </ul>
          </li>
          <li><a href="http://christensenacademy.org/blog">Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="hero-unit" style="background:none">
      <div class="row-fluid" style="text-align:left" >
        <div class="span2">
          <img src="img/logo112.png" width="112px" height="112px" alt="The Christensen Academy Logo">
        </div>
        <div class="span10">
          <h1>Hello, World!</h1>
          <p>Welcome to the Christensen Academy, a gateway to the world of computer science and programming!</p>
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

  <div class="container-fluid">
    <div class="hero-unit" style="background:none">
      <div class="row-fluid" style="text-align:right">
        <div class="span10">
          <p>It's not that we're so smart, it's just that we stay with problems longer.</p>
          <h1>Goodbye, World!</h1>
        </div>
        <div class="span2">
          <img src="img/logo112.png" width="112px" height="112px" alt="The Christensen Academy Logo">
        </div>
      </div>
    </div>   
  </div>
  
  <div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1 id="popup-header"></h1>
    </div>
    <div class="modal-body" id="popup-content">
      
    </div>
  </div>
  
  <a href="#" id="back-to-top">Back to Top</a>
  

  <script>
    $('.challenge').tooltip({
      placement: 'top'
    });
    $('.discussion-link').tooltip({
      placement: 'left'
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