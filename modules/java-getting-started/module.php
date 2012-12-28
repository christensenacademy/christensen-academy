<?php
$module_name = 'java-getting-started';
$module_title = 'Java: Getting Started';
$module_subtitle = 'Finding an IDE and Writting "Hello World"';
$map_height = '185';
$module_playlist = '';

$module_challenges = array(
  new challenge('install-ide.md', 'Install IDE', '87', '70'),
  new challenge('hello-world.md', 'Hello World', '88', '147')
);

$module_videos = array(
  new video('gC2eWh7oSi8', 'Intro to Java: Platform vs. Language'),
  new video('D35PPLLhc68', 'Finding an IDE to Use'),
  new video('TSWcCVCrmJ0', 'Java JDK and JRE'),
  new video('k39pFONyKh4', 'Hello World in Netbeans'),
  new video('9uE9SGTwf7E', 'Hello World in Eclipse'),
  new video('aNxmhKljDuY', 'Hello World in Dr. Java'),
  new video('jZGHLFuettM', 'Hello World in BlueJ')
  # .class vs .java
  # Fixing Compiler Errors
);

$module_textpages = array(
  new textpage('java-platform-vs-language.md', 'Java Platform vs. Language'),
  new textpage('why-learn-java.md', 'Why Learn Java?'),
  new textpage('finding-an-ide.md', 'Finding an IDE'),
  new textpage('jdk-vs-jre.md', 'JDK vs. JRE'),
  new textpage('your-first-program.md', 'Your First Program'),
  new textpage('dot-class-vs-dot-java.md', '.class vs. .java')
);

include('./modules/module-template.php');
?>