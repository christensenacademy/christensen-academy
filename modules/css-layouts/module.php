<?php
$module_name = 'css-layouts';
$module_title = 'CSS Layouts';
$module_subtitle = 'Learn How to Create Page Layouts in CSS';
$map_height = '425';
$module_playlist = '';

$module_challenges = array(
  new challenge('box-model-basics-challenge.md', 'Box Model Basics', '45', '75'),
  new challenge('parents-challenge.md', 'Parents (Boxes in Boxes)', '155', '52'),
  new challenge('self-assessment.md', 'Self Assessment', '162', '115'),
  new challenge('basic-layout-challenge-1.md', 'Basic Layout 1', '45', '170'),
  new challenge('basic-layout-challenge-2.md', 'Basic Layout 2', '81', '171'),
  new challenge('basic-layout-challenge-3.md', 'Basic Layout 3', '198', '166'),
  new challenge('background-image-challenge.md', 'Background Image', '228', '117'),
  new challenge('basic-layout-project.md', 'Basic Layout Project', '91', '232'),
  new challenge('absolute-positioning-challenge.md', 'Absolute Positioning', '25', '298'),
  new challenge('absolute-positioning-layout-challenge.md', 'Absolute Positioning Layout', '61', '298'),        
  new challenge('float-text-wrapping-challenge.md', 'Float: Text Wrapping', '129', '298'),
  new challenge('float-menu-challenge.md', 'Float: Menu', '168', '298'),
  new challenge('faux-columns-challenge.md', 'Float: Faux Columns', '243', '300'),
  new challenge('full-page-layout-challenge.md', 'Full Page Layout', '178', '362'),
  new challenge('zen-garden-challenge.md', 'Zen Garden', '194', '388'),
  new challenge('complex-layout-project.md', 'Complex Layout Project', '228', '375')
);

$module_videos = array(
  new video('ctneMmLjqRE', 'Span (inline) vs Div (block) Intro'),
  new video('XQTfdsKFY-w', 'Span vs. Div Example'),
  new video('69dakFTlK7Q', 'Box Model Intro'),
  new video('HkutufcDyCU', 'Chrome Developer Tools Intro'),
  new video('Qs_8vUzD7qQ', 'Width and Height'),
  new video('yQxn9kW7REE', 'Margins'),
  new video('-fVkpWtVm9U', 'Margins (Centering Elements)'),
  new video('QKCLjHBrG6o', 'Collapsing Margins'),
  new video('CdgA2bOZbt4', 'Padding'),
  new video('smzwIEwAEEc', 'Borders'),
  new video('OJiWobKJ12I', 'Background Images'),
  # Background Image Position Video Needed
  new video('nnjjTS3RtDA', 'Background Image Gradient'),
  new video('v6bGsJvaWUw', 'Normal Flow'),
  new video('pgy58w1N1_I', 'Relative Positioning'),
  new video('gM-XYH5uGuw', 'Absolute Positioning'),
  # Redo Stretch Effect: Focus needs to be on layouts
  new video('7Flnyl2fabY', 'Absolute Positioning "Stretch" Effect'),
  # Redo Stretch Effect Challenge: focus needs to be on creating a column in a layout
  new video('Mwdb3Vx6FmU', 'Float Property'),
  # Add in a float challenge for making a column
  new video('C1bd0luue6s', 'Clear'),
  new video('AoI1uWL1w-c', 'Floating Menu Items')
  # Add in another page layout challenge
  # ZG Case Study (Part 1)
  # ZG Case Study (Part 2)
  # ZG Case Study (Part 3)
  # CSS Layouts Review
);

$module_textpages = array(  
  new textpage('span-vs-div.md', 'Span vs. Div'),
  new textpage('css-box-model.md', 'CSS Box Model'),
  new textpage('nested-elements.md', 'Nested Elements (Boxes in Boxes)'),
  new textpage('background-images.md', 'Background Images'),
  new textpage('css-positioning-intro.md', 'CSS Positioning Intro'),
  new textpage('position-relative.md', 'Position Relative'),
  new textpage('position-absolute.md', 'Position Absolute'),
  new textpage('float.md', 'Float'),
  new textpage('quick-reference.md', 'Quick Reference'),
);


include('./modules/module-template.php');
?>
  