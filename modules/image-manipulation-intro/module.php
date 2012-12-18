<?php
$module_name = 'image-manipulation-intro';
$module_title = 'Image Manipulation Intro';
$module_subtitle = 'The Basics of Working with Digital Images';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
  new video ('SJkQ9FbzbnI', 'Pixels'),
  new video ('KPzTZPSM_II', 'Image Resolution'),
  new video ('CIToOlO6SKc', 'RGB Color'),
  new video ('FxyR47wJvZQ', 'Image Types'),
  # Downloading Images from Online
  # Copyright and Creative Commons
  new video ('Fxzs6uTlgak', 'Screenshots'),
  new video ('ZePmBnM6c8s', 'GIMP vs. Photoshop')
  # Drawing Tablets
);

$module_textpages = array(
);

include('./modules/module-template.php');
?>