<?php
$module_name = 'intermediate-game-maker';
$module_title = 'Intermediate Game Maker';
$module_subtitle = 'Going Beyond the Basics';
$map_height = '305';
$module_playlist = '';

$module_challenges = array(
  new challenge('project-1.md', 'Project-1', '39', '41'),
  new challenge('project-2.md', 'Project-2', '89', '41')
);

$module_videos = array(
  new video('6U6zMyJgRvo', 'Intro'),
  new video('q4uTJIESNXg', 'Variables'),
  new video('MJEbu1NNbt4', 'Sprites'),
  new video('yl4xiCifmxE', 'Left Paddle Movement'),
  new video('1b_XwfoD3tQ', 'Left Paddle (Part 2)'),
  new video('GQhbN5mblUo', 'Right Paddle'),
  new video('PzR1C8qR2o0', 'Ball Direction and Speed'),
  new video('Lp8Lf5HFg6Q', 'Ball Bounce'),
  new video('a2THVUyZS8k', 'Smart Bounce (Left Paddle)'),
  new video('MrK2XbTovz8', 'Smart Bounce (Right Paddle)'),
  new video('SiN9FBR2qag', 'Score Variables'),
  new video('7rnUMPNRFjY', 'Drawing the Score (Part 1)'),
  new video('DiZCaNYmlwM', 'Drawing the Score (Part 2)'),
  new video('h5muYUKlwOk', 'Explosoin Animation'),
  new video('wa3i5AB0MRQ', 'Animation Strips with the GIMP'),
  new video('38NZoaKCeCk', 'Animation Sprites from Sprite Sheets'),
  new video('b_UByqcP-eA', 'Escalating Difficulty'),
  new video('DJTV4LBkOH4', 'Wrapping Things Up'),
  new video('DPpHEgtZ82k', 'Background Tile Set (Part 1)'),
  new video('z1xyrDn3dUI', 'Background Tile Set (Part 2)'),
  new video('LzqltQ3vEtg', 'Walking Sprite'),
  new video('Yxg8Z9PoKfw', 'Animated Sprites from Tile Sets'),
  new video('T2udr1XO1Bg', 'Game Maker: Finding Animated Sprites'),
  new video('SAZUg6Eoogs', 'Grid Movement'),
  new video('HaYv0Xzzz2g', 'Inheritance Intro'),
  new video('alEfhT7bPec', 'Inheritance for Collisions'),
  new video('LqMDg7O5HLo', 'Sprite Speed'),
  new video('628EtUSeUuw', 'Change Instance'),
  new video('CYIfwN1AXFM', 'Toggle Sprite Subimages'),
  new video('tL0Xrzho8cQ', 'Rooms and Persistence')
);

$module_textpages = array(
  new textpage('variables.md', 'Variables'),
  new textpage('math-expressions.md', 'Math Expressions'),
  new textpage('animated-sprites.md', 'Animated Sprites'),
  new textpage('sprite-speed.md', 'Sprite Speed'),
  new textpage('animation-strips.md', 'Animation Strips'),
  new textpage('background-tile-set.md', 'Background Tile Sets'),
  new textpage('animated-sprites-from-tile-sets.md', 'Animated Sprites from Tile Sets'),
  new textpage('grid-movement.md', 'Grid Movement'),
  new textpage('inheritance.md', 'Inheritance'),
  new textpage('change-instance.md', 'Change Instance'),
  new textpage('toggle-sprite-subimage.md', 'Toggle Sprite Subimage'),
  new textpage('rooms-and-persistance.md', 'Rooms and Persistence'),
  new textpage('viewports.md', 'viewports'),
  new textpage('basic-game-design-principles.md', 'Basic Game Design Principles')
);

include('./modules/module-template.php');
?>