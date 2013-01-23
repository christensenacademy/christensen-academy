<?php
$module_name = 'learning';
$module_title = 'Learning';
$module_subtitle = 'My Thoughts on the Best Ways to Approach Learning and Problem Solving';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
  new challenge('polya-hair-out.md', 'Polya Hair Out', 85, 35),
  new challenge('redefine-difficult.md', 'Redefine Difficult', 160, 35),
);

$module_videos = array(
);

$module_textpages = array(
  new textpage('polya-problem-solving.md', 'Polya Problem Solving'),
  new textpage('redefining-difficult.md', 'Redefining "Difficult"'),
);

include('./modules/module-template.php');
?>