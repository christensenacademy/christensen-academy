<?php
$module_name = 'computer-basics';
$module_title = 'Computer Basics';
$module_subtitle = 'Understanding Hardware, Software, and File Systems';
$map_height = '305';
$module_playlist = 'PL56DFFE4571D8BFC6';

$module_challenges = array(
  new challenge('hardware-and-software.md', 'Hardware and Software', '39', '41'),
  new challenge('show-extensions.md', 'Show File Extensions', '68', '65'),
  new challenge('explore-your-file-system-1.md', 'Explore Your File System', '32', '128'),
  new challenge('files-and-folders-1.md', 'Files and Folders', '98', '102'),
  new challenge('explore-your-file-system-2.md', 'Explore Your File System (Part 2)', '44', '213'),
  new challenge('files-and-folders-2.md', 'Files and Folders (Part 2)', '86', '216'),
  new challenge('quiz.md', 'Quiz', '69', '250')
);

$module_videos = array(
  new video('S-5Bf9S3lVY', 'Original Purpose of Computers'),
  new video('W2cdW0Dycco', 'Binary System Intro'),
  new video('-nuSLln-pY8', 'Computer Hardware Basics'),
  new video('-3nWC29Uyug', 'Computer Software Basics'),
  new video('Iow1svZ3QQQ', 'Computer Speed'),
  new video('sHm4L9VIJl0', 'Computer File Sizes (Part 1)'),
  new video('BchvDqb972Y', 'Computer File Sizes (Part 2)'),
  new video('j9EKn1rtUCY', 'Computer Directory (Folder) Structure'),
  new video('mgWb3aWpAws', 'File Systems (an additional thought)'),
  new video('3SGs6TizpSI', 'Files and Filenames'),
  new video('RPh3y2JJp_A', 'File Types and Extensions')
  # Basic File Operations
  # The Command Line (Part 1)
  # The Command Line (Part 2)
);

$module_textpages = array(
  new textpage('computer-file-sizes.md', 'Computer File Sizes'),
  new textpage('computer-hardware-and-software.md', 'Computer Hardware and Software'),
  new textpage('file-system-basics.md', 'File System Basics'),
  new textpage('cut-copy-and-paste.md', 'Cut, Copy, and Paste'),
  new textpage('the-command-line.md', 'The Command Line')
);


include('./modules/module-template.php');
?>