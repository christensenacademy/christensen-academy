<?php
$module_name = 'brain-teasers';
$module_title = 'Brain Teasers';
$module_subtitle = 'Open Your Mind';
$map_height = '305';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
  new video('xihDL-uPYe8', 'E.T.T.B'),
  new video('FigvXEE2g8w', 'Robot Hats'),
  new video('npxGA8rSWqg', 'Robo Grid'),
  new video('m2PmTw8hnwo', 'Antidote'),
  new video('YnlbJR_mMs0', 'Beeping Bot'),
  new video('SU9WMkIUvH8', 'Symbol Square'),
  new video('d3yzjQvqClY', 'Symbol Square (Solution)'),
  new video('TPlFVwQpQRk', 'Robo Progeny'),
  new video('eBVJ5wb3vWU', 'Robo Break Dance'),
  new video('CKcxr1jQBeE', 'Chopsticks'),
  new video('UoGKPmLjynU', 'Axels'),
  new video('HSYOB04vLqw', 'Spaceship'),
  new video('W3emxjmcNnk', 'Pink Turtles'),
  new video('SzUI7njSmdw', 'Boating for President')
);

$module_textpages = array(
  new textpage('reference.md', 'Reference')
);

include('./modules/module-template.php');
?>