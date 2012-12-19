<?php
$module_name = 'beginning-java';
$module_title = 'Beginning Java';
$module_subtitle = 'The Basics of the Java Programming Language';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
);

$module_textpages = array(
  new textpage('comments.md', 'Comments in Java')
  # new textpage('java-objects-and-classes-into.md', 'Java Objects and Classes Intro'),
  # new textpage('java-api.md', 'Java API'),
  # new textpage('variables-intro.md', 'Variables Intro'),
  # new textpage('primitive-types.md', 'Primitive Types')
);


include('./modules/module-template.php');
?>