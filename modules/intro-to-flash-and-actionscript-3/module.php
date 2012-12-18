<?php
$module_name = 'intro-to-flash-and-actionscript-3';
$module_title = 'Intro to Flash and ActionScript 3';
$module_subtitle = 'An Overview of Adobe Flash Professional';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
  new video('EdauXIWYOQ4', 'Intro to Flash and ActionScript'),
  new video('cfEch0V5dvw', "Don\'t Worry about the Version"),
  new video('w5Qp7nHyYGY', '.fla vs .swf'),
  new video('sDFjfEqnySM', 'Workspace: Reset Essentials'),
  new video('sU3-Ur8s910', 'Workspace: Stage and Tools Panel'),
  new video('bEPHpfsi4dY', 'Zoom'),
  new video('PaCKvUtwGTQ', 'Workspace: Timeline and Animation'),
  new video('jkscZYqAUWY', 'Workspace: Library and Properties Panels'),
  new video('KPKAXHlChAM', 'Workspace: Actions Panel')
  # It would be nice to have a video showcasing what's possible with Flash
);

$module_textpages = array(
  new textpage('fla-vs-swf.md', '.fla vs. .swf'),
  new textpage('workspace-basics.md', 'Workspace Basics')
);

include('./modules/module-template.php');
?>