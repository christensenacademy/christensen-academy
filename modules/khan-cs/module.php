<?php
$module_name = 'khan-cs';
$module_title = 'Khan Acadey CS';
$module_subtitle = 'A Great Way to Learn the Basics of Programming';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
);

$module_textpages = array(
  new textpage('drawing.md', 'Drawing'),
  new textpage('variables-and-animation.md', 'Variables and Animation'),
  new textpage('if-statements-and-interactivity.md', 'If Statements and Interactivity')
);

include('./modules/module-template.php');
?>