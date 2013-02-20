<?php
$module_name = 'beginning-game-maker';
$module_title = 'Beginning Game Maker';
$module_subtitle = 'The Basics of Using the Game Maker Software';
$map_height = '377';
$module_playlist = '';

$module_challenges = array(
  new challenge('create-save-and-play.md', 'Create, Save, and Play', '61', '45'),
  new challenge('sprites.md', 'Sprites', '190', '55'),
  new challenge('backgrounds.md', 'Backgrounds', '230', '55'),
  new challenge('mouse-madness.md', 'Mouse Madness', '132', '69'),
  new challenge('score.md', 'Score', '80', '112'),
  new challenge('sound-the-alarm.md', 'Sound the Alarm!', '61', '158'),
  new challenge('intro-screen.md', 'Intro Screen', '152', '136'),
  new challenge('project-1.md', 'Project 1', '190', '154'),
  new challenge('keyboard-king.md', 'Keyboard King', '69', '216'),
  new challenge('origin-cyclopse-laser.md', 'Origin Cyclopse Laser', '69', '248'),
  new challenge('movement-master.md', 'Movement Master', '146', '232'),
  new challenge('health-and-healing.md', 'Health and Healing', '213', '256'),
  new challenge('know-thy-self.md', 'Khow Thy Self', '166', '283'),
  new challenge('random-numbers.md', 'Random Numbers', '123', '309'),
  new challenge('project-2.md', 'Project 2', '220', '332'),
);

$module_videos = array(
  new video('0WVNl0ETrJE', 'Game Maker Versions'),
  new video('LPDO_xq8aOM', 'Create, Save, and Play'),
  new video('MF4E4W7AAAc', 'Sprites'),
  new video('CbXdH3s1L1w', 'Objects, Instances, and Rooms'),
  new video('ACt9AWf-GHQ', 'Events and Actions Intro'),
  new video('MkYLDZOkAGA', 'Collision Events Intro'),
  new video('9pR9BFQVBpo', 'Backgrounds'),
  new video('Wi-kG0Kv7Xg', 'Create Event Intro'),
  new video('li4n6HTkUcw', 'Alarms'),
  new video('jwRtxi_J4A8', 'Music and Sounds'),
  new video('HbJV5W9wYSg', 'Coordinate System and Sprite Origins'),
  new video('5Pq4TCyYHtc', 'Health, Lives, and Score'),
  new video('yxNSHAp7O7Y', 'Relative Reasoning'),
  # new video('', 'Create and Change Instance'),
  # new video('', 'Basic Menus'),
  # new video('', 'Movement and Jump to Position'),
  # new video('', 'Random Numbers'),
);

$module_textpages = array(
  new textpage('sprites.md', 'Sprites'),
  # new textpage('images.md', 'Images'),
  # new textpage('objects-rooms-and-instances.md', 'Objects, Rooms, and Instances'),
  # new textpage('events-and-actions.md', 'Events and Actions'),
  # new textpage('score.md', 'Score'),
  # new textpage('sounds.md', 'Sounds'),
  # new textpage('alarms.md', 'Alarms'),
  # new textpage('coordinates.md', 'Coordinates'),
  # new textpage('movement.md', 'Movement'),
  # new textpage('collisions.md', 'Collisions'),
  # new textpage('health.md', 'Health'),
  # new textpage('moving-background.md', 'moving-background')
);


include('./modules/module-template.php');
?>