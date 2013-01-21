<?php
$module_name = 'learning';
$module_title = 'Learning';
$module_subtitle = 'My Thoughts on the Best Ways to Approach Learning';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
);

$module_textpages = array(
  new textpage('polya-problem-solving.md', 'Polya Problem Solving'),
  new textpage('redefining-difficult.md', 'Redefining "Difficult"'),
);

include('./modules/module-template.php');
?>