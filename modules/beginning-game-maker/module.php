<?php
$module_name = 'beginning-game-maker';
$module_title = 'Beginning Game Maker';
$module_subtitle = 'The Basics of Using the Game Maker Software';
$map_height = '305';
$module_playlist = '';

$module_challenges = array(
  new challenge('project-1.md', 'Project-1', '39', '41'),
  new challenge('project-2.md', 'Project-2', '89', '41')
);

$module_videos = array(
  new video('KA3WEs0aZJ0', 'Game Maker Versions'),
  new video('gXJuQ0MN_gw', 'Create, Save, and Play'),
  new video('zf4LE4ImH0g', 'Resources (Images and Sounds)'),
  new video('ho_l7QDl3jk', 'Sprites'),
  new video('r3TGBebLSU0', 'Objects, Rooms, and Instances'),
  new video('DhdB9pvBmVg', 'Events and Actions (Part 1)'),
  new video('OJ4QyCI7zL4', 'Events and Actions (Part 2)'),
  new video('Ah6ae2sBC0s', 'Music and Sounds'),
  new video('NLB_0sRW2Bc', 'Alarms'),
  new video('uzNxavrvefQ', 'Increasing the Difficulty'),
  new video('t1Wn7TQTX94', 'Relative Speeds'),
  new video('z-ei8xibAxY', 'Game Info'),
  new video('dR1YdUNHe4U', 'Rubric Discussion'),
  new video('tOqGYO6nuQ0', 'Sprites'),
  new video('VPRjRuACJjI', 'Coordinates and Wizard Movement'),
  new video('127tmb9qwX4', 'Set Wizard Boundaries'),
  new video('EW2RaIfyk04', 'Shoot Comets'),
  new video('EW2RaIfyk04', 'Bad Guys'),
  new video('UK-NwGetJGE', 'Comets Hit Bad Guys'),
  new video('9jnT4_tszdE', 'Moving Background'),
  new video('41Xi8j-TAQQ', 'Score and Health'),
  new video('f4k_qth1sFk', 'Enhancement Ideas')
);

$module_textpages = array(
  new textpage('sprites.md', 'Sprites'),
  new textpage('images.md', 'Images'),
  new textpage('objects-rooms-and-instances.md', 'Objects, Rooms, and Instances'),
  new textpage('events-and-actions.md', 'Events and Actions'),
  new textpage('score.md', 'Score'),
  new textpage('sounds.md', 'Sounds'),
  new textpage('alarms.md', 'Alarms'),
  new textpage('coordinates.md', 'Coordinates'),
  new textpage('movement.md', 'Movement'),
  new textpage('collisions.md', 'Collisions'),
  new textpage('health.md', 'Health'),
  new textpage('moving-background.md', 'moving-background')
);


include('./modules/module-template.php');
?>