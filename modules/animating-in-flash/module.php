<?php
$module_name = 'animating-in-flash';
$module_title = 'Animating in Flash';
$module_subtitle = 'Using Flash to Make Animated \"Movies\" with Some Interactive Parts';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
  # Intro to Playlist
  # Examples of Animations Online
  new video('4IJtl99pT7I', 'Timeline (Layers and Frames)'),
  new video('ALom2HMiDbs', 'Intro to Reading the Timeline'),
  new video('u-BTUgiGkOk', 'Frame-by-Frame Animation'),
  new video('jS3lRTL5Mk8', 'Frame-by-Frame Animation (Eye Example)'),
  new video('v0R9RBkewqQ', 'Christensen Academy-Style (Example)'),
  # "http://bit.ly/OM5RXq">Frame-by-Frame Animation Challenge
  # Graphic Symbols vs. Movie Clip Symbols
  new video('olRhUq2ZkkQ', 'Animation in Movie Clip Symbol (Example 1)'),
  new video('5VPc3imRNCQ', 'Animations in Movie Clips (Example 2)'),
  new video('waMFV2GLy0k', 'Motion Tweens Intro'),
  new video('NP5LMNTAuJ4', 'Types of Keyframes Intro'),
  new video('st4UXzXmGSc', 'Controlling Tween Paths '),
  # href="http://bit.ly/RnTHR3">Butterfly Animation Challenge
  new video('YGt9ZSWznfw', 'Pan and Zoom Effects'),
  new video('ptMVy_a4Qcc', 'Bone Tool on Primitives'),
  new video('zxiy4LAtxe0', 'Bone Tool on Instances'),
  new video('HDgmn2Flx0w', 'More on the Bone Tool'),
  # bone-tool-animation-challenge.md">Bone Tool Animation Challenge
  # possibly get rid of this project
  # http://bit.ly/VMYjE0">Single Scene Animation Project
  # remake sound video to emphasize just editing audio to fit
  new video('j7X42K0fGfw', 'Inserting a Sound'),
  new video('5splLSEcbac', 'Inserting Music'),
  # Shape Tweens
  # Complex Timelines
  # http://bit.ly/VAJgi8">Multi-Scene Animation Project
);

$module_textpages = array(
  new textpage('reference.md', 'Reference'),
);

include('./modules/module-template.php');
?>