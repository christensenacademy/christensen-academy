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
  new challenge('cam-timer.md', 'Click-a-Mania: Timer', '119', '280'),
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
  new challenge('dodge-collisions-and-scoring.md', 'Dodge: Collisions and Scoring', '248', '347'),
  new challenge('dodge-player-boundaries.md', 'Dodge: Player Boundaries', '248', '380'),
  new challenge('dodge-health-and-lives.md', 'Dodge: Health and Lives', '248', '412'),
  new challenge('dodge-projectiles.md', 'Dodge: Projectiles', '248', '445'),
  # new challenge('dodge-customize.md', 'Dodge: Customize', '248', '478'),
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
  new video('weyQ75vaCTM', 'Random Numbers'),
  new video('CCAvUgV4Un8', 'For Loops'),
  new video('CRG2ouLynBU', 'Arrays'),
  new video('zaT6ULyTBcI', 'While Loops'),
  new video('ACHTQJjkwqc', 'Timer Events'),
  new video('4Meg9_DNk7E', 'Frame Events'),
  new video('4Meg9_DNk7E', 'For Each Loop'),
);

$module_textpages = array(
  new textpage('intro-to-programming-and-actionscript.md', 'Intro to Programming and ActionScript'),
  new textpage('frame-script.md', 'Frame Script'),
  new textpage('comments.md', 'Comments'),
  new textpage('playhead-controls.md', 'Playhead Controls'),
  new textpage('fixing-errors.md', 'Fixing Errors'),
  new textpage('variables.md', 'Variables'),
  new textpage('functions.md', 'Functions'),
  new textpage('variable-scope.md', 'Variable Scope'),
  new textpage('semicolons.md', 'Semicolons'),
  new textpage('camelcase.md', 'CamelCase'),
  new textpage('indenting.md', 'Indenting'),
  new textpage('instances-of-movie-clips.md', 'Instances of Movie Clips'),
  new textpage('instances-of-sounds.md', 'Instances of Sounds'),
  new textpage('instances-of-text-fields.md', 'Instances of Text Fields'),
  new textpage('mouse-events.md', 'Mouse Events'),
  new textpage('keyboard-events.md', 'Keyboard Events'),
  new textpage('numbers.md', 'Numbers'),
  new textpage('strings.md', 'Strings'),
  # new textpage('sounds.md', 'Sounds'),
  new textpage('arrays.md', 'Arrays'),
  new textpage('boolean-expressions.md', 'Boolean Expressions'),
  new textpage('if-statements.md', 'If Statements'),
  new textpage('while-loops.md', 'While Loops'),
  new textpage('for-loops.md', 'For Loops'),
  new textpage('timer-events.md', 'Timer Events'),
  new textpage('frame-events.md', 'Frame Events'),
);

include('./modules/module-template.php');
?>