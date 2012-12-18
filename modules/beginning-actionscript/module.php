<?php
$module_name = 'beginning-actionscript';
$module_title = 'Beginning ActionScript';
$module_subtitle = "Variables, Functions, and Conditionals in \"Frame Script\"";
$map_height = '500';
$module_playlist = '';

$module_challenges = array(
  new challenge('scene-playhead.md', 'Scene Playhead', '60', '74'),
  new challenge('movie-clip-playhead.md', 'Movie Clip Playhead', '135', '40'),
  new challenge('playback-controls.md', 'Playback Controls', '203', '42'),
  new challenge('shooting-star.md', 'Shooting Star', '235', '18'),
  new challenge('four-corners.md', 'Four Corners', '235', '67'),
  new challenge('cam-basic-game.md', 'Click-a-Mania: Basic Game', '134', '75'),
  new challenge('cam-bad-button.md', 'Click-a-Mania: Bad Button', '119', '120'),
  new challenge('cam-results-screen.md', 'Click-a-Mania: Results Screen', '119', '153'),
  new challenge('cam-player-feedback.md', 'Click-a-Mania: Player Feedback', '119', '187'),
  new challenge('cam-pause-screen.md', 'Click-a-Mania: Pause Screen', '119', '220'),
  new challenge('cam-high-score.md', 'Click-a-Mania: High Score', '119', '250'),
  new challenge('cam-timer-bounce.md', 'Click-a-Mania: Timer', '119', '280'),
  new challenge('cam-bounce.md', 'Click-a-Mania: Bounce', '119', '310'),
  new challenge('cam-customization.md', 'Click-a-Mania: Customization', '116', '343'),
  new challenge('function-challenge.md', 'Function Challenge', '185', '84'),
  new challenge('triangle-numbers.md', 'Triangle Numbers', '79', '192'),
  new challenge('fibonacci-numbers.md', 'Fibonacci Numbers', '24', '166'),
  new challenge('project-euler.md', 'Project Euler', '44', '115'),
  new challenge('random-range.md', 'Random Range', '190', '134'),
  new challenge('quiz.md', 'Quiz', '196', '188'),
  new challenge('dodge-getting-started.md', 'Dodge: Getting Started', '246', '252'),
  new challenge('dodge-bad-guys.md', 'Dodge: Bad Guys', '247', '281'),
  new challenge('dodge-bad-guys-array.md', 'Dodge: Bad Guys Array', '248', '314'),
  new challenge('custom-game-project.md', 'Custom Game Project', '79', '456')
);

$module_videos = array(
  new video('N5M1Ia-5wmc', 'Intro to ActionScript'),
  new video('1LrtSkcqcZE', 'Basic Commands'),
  new video('dyoRl2LikIQ', 'SWFs, Compilers, and Fixing Errors'),
  new video('UAPwig_3qug', 'Understanding the Actions Panel'),
  new video('OmHvHoWYjJM', 'Comments'),
  new video('2zPBWkNcRKM', 'Playhead Commands on Instances'),
  new video('6To3XOAyY9A', 'Play, Stop, and Restart Buttons'),
  new video('Z1XDIItztJo', 'Movie Clip Properties'),
  new video('HdqStHaBURM', 'Registration Points, Position, and Transformation'),
  new video('wRpG-OzPins', 'Creating Instances from Code'),
  new video('IX87iEcS5rU', 'Functions'),
  new video('zW0eT7t65PA', 'Function Arguments (Parameters)'),
  new video('OWxgnV1EN6Y', 'Function Return Types Basics'),
  new video('YfHferKq3mE', 'Boolean Variables'),
  new video('NdV1MpbYgOk', 'Boolean Expressions'),
  new video('fJow_DE8CU4', 'If Statements'),
  new video('weyQ75vaCTM', 'Random Numbers')
);

$module_textpages = array(
  new textpage('programming-basics.md', 'Programming Basics'),
  new textpage('instances-and-events.md', 'Instances and Events'),
  new textpage('coding-conventions.md', 'Coding Conventions'),
  new textpage('numbers-strings-arrays.md', 'Numbers, Strings, and Arrays'),
  new textpage('control-structures.md', 'Control Structures')
);

include('./modules/module-template.php');
?>