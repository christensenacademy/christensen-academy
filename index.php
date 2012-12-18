<!DOCTYPE html>
<html>
	<head>
		<title>Christensen Academy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Cameron Christensen">
		<meta name="keywords" content="computer science, programming, learn, java, javascript, html, css, binary, processing, flash, actionscript, image manipulation, game maker">
		<meta name="description" content="A gateway to the world of computer science, a place where you can learn about computers and computer programming for free!">
    <link rel="shortcut icon" href="img/logo16.png">
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
<script src="js/jquery.blend-min.js"></script>
<script src="js/jquery.colorbox.js"></script>
	</head>
	<body>
	<div class="navbar nav-top navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand">Christensen Academy</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown">
                    Learn
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#cs-basics" class="cs-basics-color">Computer Science Basics</a>
                    <ul class="dropdown-menu">
                      <li><a href="#computer-basics" class="cs-basics-color">Computer Basics</a></li>
                      <li><a href="#binary" class="cs-basics-color">Binary</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#web" class="web-color">Web Design and Development</a>
                    <ul class="dropdown-menu">
                      <li><a href="#web-design-and-development-intro" class="web-color-color">Web Design and Development Intro</a></li>
                      <li><a href="#html-basics" class="web-color-color">HTML Basics</a></li>
                      <li><a href="#css-basics" class="web-color-color">CSS Basics</a></li>
                      <li><a href="#css-layouts" class="web-color-color">CSS Layouts</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#game-maker" class="game-maker-color">Game Maker</a>
                    <ul class="dropdown-menu">
                      <li><a href="#beginning-game-maker" class="game-maker-color">Beginning Game Maker</a></li>
                      <li><a href="#intermediate-game-maker" class="game-maker-color">Intermediate Game Maker</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#processing" class="processing-color">Processing</a>
                    <ul class="dropdown-menu">
                      <li><a href="#khan-cs" class="processing-color">Khan Academy CS</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#java" class="java-color">Java</a>
                    <ul class="dropdown-menu">
                      <li><a href="#java-getting-started" class="java-color">Java: Getting Started</a></li>
                      <li><a href="#beginning-java" class="java-color">Beginning Java</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#flash" class="flash-color">Flash</a>
                    <ul class="dropdown-menu">
                      <li><a href="#intro-to-flash-and-actionscript-3" class="flash-color">Intro to Flash and ActionScript 3</a></li>
                      <li><a href="#drawing-in-flash" class="flash-color">Drawing in Flash</a></li>
                      <li><a href="#animating-in-flash" class="flash-color">Animating in Flash</a></li>
                      <li><a href="#beginning-actionscript" class="flash-color">Beginning ActionScript</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#brain-teasers" class="brain-teasers-color">Brain Teasers</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#image-manipulation" class="image-manipulation-color">Image Manipulation</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#office" class="office-color">Office Applications</a>
                  </li>
                </ul>
              </li>
              <li><a data-toggle="modal" href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div class="modal hide fade" id="contact">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>cameron@christensenacademy.org</h3>
	  </div>
	</div>
	
  <div class="container-fluid  hidden-phone">
    <div class="hero-unit" style="background:none">
      <div class="row-fluid">
        <div class="span2">
          <img src="img/logo112.png" width="112px" height="112px" style="display:block;margin:0 auto;" alt="The Christensen Academy Logo">
        </div>
        <div class="span10">
          <h1>Hello World!</h1>
          <p>Welcome to the Christensen Academy, a gateway to the world of computer science and computer programming!</p>
        </div>
      </div>
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
          <!--
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-basics">
              <h3>
                JavaScript Basics <small class="hidden-phone">with jQuery</small>
              </h3>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="html-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">HTML <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">XHTML vs. HTML</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Why "A" is for Anchor</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Make One or More Elements into a Link</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Quirks Mode</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML5 Boilerplate</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Structural Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Tables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Deprecated HTML Attributes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The lang (Language) Attribute</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="css-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">CSS <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5t_4_UMo4JY?rel=0">Pre Element and white-space</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/C1-gW70Wszc?rel=0">CSS Nested Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Grouped Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Universal Selector</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Advanced CSS Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AiOgwMmAkiQ?rel=0">CSS rgba (transparent colors)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/rQbs-QaFtbk?rel=0">CSS @import</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Link Tag Media Attribute for CSS</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">JavaScript <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-related">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Related Topics</h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Browser Plugins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6sch0T2PUS4?rel=0">Browser Cache Explanation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Flash</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture Challenge: School Website</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Navigation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Usability</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Accessibility</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div> 
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-server">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Server Side Programming <small class="hidden-phone">an Introduction...</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
        </div>
       -->


     
  <div class="container-fluid subject-area" id="game-maker">
    <?php include('./modules/beginning-game-maker/module.php'); ?>
    <?php include('./modules/intermediate-game-maker/module.php'); ?>
  </div> 
     
  <div class="container-fluid subject-area" id="processing">
    <?php include('./modules/khan-cs/module.php'); ?>
  </div> 

  <div class="container-fluid subject-area" id="java" >          
    <?php include('./modules/java-getting-started/module.php'); ?>
    <?php include('./modules/beginning-java/module.php'); ?>
  </div>
  
  <div class="container-fluid subject-area" id="flash" >          
    <?php include('./modules/intro-to-flash-and-actionscript-3/module.php'); ?>
    <?php include('./modules/drawing-in-flash/module.php'); ?>
    <?php include('./modules/animating-in-flash/module.php'); ?>
    <?php include('./modules/beginning-actionscript/module.html'); ?>
  </div>
      
<!-- 
      
          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-animation">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Animating in Flash <small class="hidden-phone">Using Flash to Make Animated "Movies" with Some Interactive Parts</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Examples of Animations Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4IJtl99pT7I?rel=0">Timeline (Layers and Frames)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ALom2HMiDbs?rel=0">Intro to Reading the Timeline</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/u-BTUgiGkOk?rel=0">Frame-by-Frame Animation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jS3lRTL5Mk8?rel=0">Frame-by-Frame Animation (Eye Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/v0R9RBkewqQ?rel=0">Christensen Academy-Style (Example)</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/OM5RXq">Frame-by-Frame Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Graphic Symbols vs. Movie Clip Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/olRhUq2ZkkQ?rel=0">Animation in Movie Clip Symbol (Example 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5VPc3imRNCQ?rel=0">Animations in Movie Clips (Example 2)</a></li>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/waMFV2GLy0k?rel=0">Motion Tweens Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NP5LMNTAuJ4?rel=0">Types of Keyframes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/st4UXzXmGSc?rel=0">Controlling Tween Paths </a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/RnTHR3">Butterfly Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YGt9ZSWznfw?rel=0">Pan and Zoom Effects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ptMVy_a4Qcc?rel=0">Bone Tool on Primitives</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zxiy4LAtxe0?rel=0">Bone Tool on Instances</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HDgmn2Flx0w?rel=0">More on the Bone Tool</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/challenges/bone-tool-animation-challenge.md">Bone Tool Animation Challenge</a></li>
<!-- Get rid of this project. It is unecessary. 
<li><i class="icon-leaf"></i> <a href="http://bit.ly/VMYjE0">Single Scene Animation Project</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<!-- Make new sound video with the recommendation that audio editing skills be exercised instead of telling sounds to stop 
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/j7X42K0fGfw?rel=0">Inserting a Sound</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5splLSEcbac?rel=0">Inserting Music</a></li>
<!-- Get rid of this video. Scenes are a distraction. 
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Shape Tweens</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Complex Timelines</a></li>
<!-- Alter this challenge to use my example project animation. Give clear specific instructions for what the playback controls should do. 
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/VAJgi8">Multi-Scene Animation Project</a></li>
                </ul>
                </ul>
              </div>
            </div>
          </div>
          
 -->   
     
     
<!-- *****************************
      Brain Teasers
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="brain-teasers" >
          <h2>Brain Teasers <small class="hidden-phone"> Open Your Mind</small></h2>
          
          <div class="row-fluid playlist">
          
            <div class="span12" id="brain-teasers-intro">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/brain-teasers/brain-teaser-reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Brain Teasers<small class="hidden-phone"> I might eventually separate these by difficulty...</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xihDL-uPYe8?rel=0">E.T.T.B</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FigvXEE2g8w?rel=0">Robot Hats</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/npxGA8rSWqg?rel=0">Robo Grid</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/m2PmTw8hnwo?rel=0">Antidote</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YnlbJR_mMs0?rel=0">Beeping Bot</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SU9WMkIUvH8?rel=0">Symbol Square</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/d3yzjQvqClY?rel=0">Symbol Square (Solution)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TPlFVwQpQRk?rel=0">Robo Progeny</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eBVJ5wb3vWU?rel=0">Robo Break Dance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CKcxr1jQBeE?rel=0">Chopsticks</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UoGKPmLjynU?rel=0">Axels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HSYOB04vLqw?rel=0">Spaceship</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W3emxjmcNnk?rel=0">Pink Turtles</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SzUI7njSmdw?rel=0">Boating for President</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      Brain Teasers
     ***************************** -->   


<!-- *****************************
      IMAGE MANIPULATION
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="image-manipulation" >
          <h2>Image Manipulation <small class="hidden-phone">Learn About Digital Images and How to Manipulate Them with the GIMP!</small></h2>

          <div class="row-fluid playlist">
            <div class="span12" id="image-manipulation-intro">
              <h3>Image Manipulation Intro <small class="hidden-phone"> The Basics of Working with Digital Images</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SJkQ9FbzbnI">Pixels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KPzTZPSM_II">Image Resolution</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CIToOlO6SKc">RGB Color</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FxyR47wJvZQ">Image Types</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Downloading Images from Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Copyright and Creative Commons</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Fxzs6uTlgak">Screenshots</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZePmBnM6c8s">GIMP vs. Photoshop</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Drawing Tablets</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="color-theory">
              <h3>Color Theory <small class="hidden-phone">What You Should Know about Colors</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Wheel and Primary Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Subtractive Color Mixing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Additive Color Mixing</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Visual Spectrum</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Colors, Tints, and Shades</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Warm vs. Cool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Schemes</a></li>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-basics">
              <h3>GIMP Basics <small class="hidden-phone"> The Basics of Image Manipulation with the GIMP</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zqt-TWGR6D4?rel=0">Download the GIMP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4cyaZECGmo4?rel=0">Crop and Resize</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LPGQ6Mo_Ims?rel=0">Drawing Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5hDVI_NXNO8?rel=0">Saving and Exporting Images</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zBmyHAWTX3Y?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2ydTejq9OIU?rel=0">Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5SWEJbP2Qq8?rel=0">Removing Backgrounds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TjanJBXbRcI?rel=0">Swapping Heads</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A9CrKxD1_XI?rel=0">New Image</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MVpUScfF-N0?rel=0">Open Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FLA3hn9JTa0?rel=0">Paste Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HBwoXRX4HOw?rel=0">Save vs. Export</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KFqMaVtfcGw?rel=0">Restore Default Workspace</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RGLPl0h033A?rel=0">Single Window Mode</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1hspw3d5JX4?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AYOsR6ZrXpA?rel=0">Brush Size</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/opDalqJc-e0?rel=0">Choosing Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eQ2VTCPNKII?rel=0">Layers</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yvQVj34vXZc?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/y4Tomb1Y2hM?rel=0">Selected Areas</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/L64evL-egk0?rel=0">Floating Selections</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OYCXp3Lh38Q?rel=0">New Layer from Floating Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/aOVAkS-8ulc?rel=0">Fuzzy Selection Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zEKdwS-k7Z0?rel=0">Invert a Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A_mchmFBUtI?rel=0">Special Background Layer</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Itw8JiCT-Tg?rel=0">Crop Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MB2Dkd11fCg?rel=0">Scale Image and Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W5gKDoMltaU?rel=0">Transform Tools</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-intermediate">
              <h3>GIMP Intermediate <small class="hidden-phone">Going Beyond the Basics</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-advanced">
              <h3>GIMP Advanced <small class="hidden-phone">On the Road to Mastery</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
        </div>
      </div><!--/row-->

     <footer>
     </footer>
	</div> <!-- End container -->

<div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="popup-header"></h1>
  </div>
  <div class="modal-body" id="popup-content">
    
  </div>
</div>

  <script>
$('.future-video').each(function(index) {
    var messages = ["Rome wasn't built in a day...", "Hold you horses, cowboy!", "Patience, young grasshopper.", "I'm workin' on it...", "This video has not yet been made.", "IN PRODUCTION", "Google it for now...", "Please check back later.", "Yet to be made...", "I haven't made this yet.", "I'm plannin' on makin' it...", "Video not yet made." ];
    $(this).attr("title", messages[Math.floor(Math.random()*messages.length)]);
});
$('.future-video').tooltip({
  placement: 'right'
});
$('.future-playlist').tooltip({
  placement: 'top'
});
$('.reference-guide').tooltip({
  placement: 'top'
});
$('.challenge').tooltip({
  placement: 'top'
});
$('.intro').tooltip({
  placement: 'top'
});
$('.challenge-map-heading').tooltip({
  placement: 'right'
});

$('.challenge').blend();
$('.big-project').blend();
$('.small-project').blend();

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
 
  $(".youtube").colorbox({iframe:true, innerWidth:853, innerHeight:480});
});
  </script>
	</body>
</html>