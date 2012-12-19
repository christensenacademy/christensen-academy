<?php
$module_name = 'css-basics';
$module_title = 'CSS Basics';
$module_subtitle = 'Learn How to Add Visual Styling to Your Webpages';
$map_height = '383';
$module_playlist = 'PLbdhPIoiglaUF8qcTJRfnWqzORnaIJwuI';

$module_challenges = array(
  new challenge('three-types-of-css-challenge.md', 'Three Types of CSS Challenge', '115', '72'),  
  # new challenge('css-validation-challenge.md', 'CSS Validation Challenge', '128', '138'),
  new challenge('color-challenge.md', 'Color Challenge', '48', '189'),
  # new challenge('selectors-challenge.md', 'Selectors Challenge', '87', '198'),
  # new challenge('pixel-percent-em-challenge.md', 'Pixel-Percent-EM Challenge', '160', '220'),
  # new challenge('text-challenge.md', 'Text Challenge', '105', '272'),
  # new challenge('font-challenge.md', 'Font Challenge', '165', '274'),
  new challenge('site-remodelling-project.md', 'Site Remodelling Project', '128', '341'),
);

$module_videos = array(
  new video('q6aHmSzzt7Y', 'CSS (Cascading Style Sheets) Intro'),
  new video('D47UsLHs7Rw', 'An Intuitive Feel for CSS'),
  new video('tqhhpwO67Pc', '3 Types of CSS (Inline CSS)'),
  new video('l0QXi4ryvDc', '3 Types of CSS (Internal / Embedded)'),
  new video('PGH01VxYhv8', '3 Types of CSS (External)'),
  new video('SPp_hKEpMeQ', 'Internal and External CSS Equivalency'),
  new video('eIkDr8r2gRw', 'CSS Comments'),
  new video('d_v322FfpXM', 'CSS Inheritance'),
  new video('Rsnq8H3UiBw', 'Google Chrome and CSS Inheritance'),
  new video('9L91PUMoyAg', 'CSS Validator'),
  new video('JlXAYLo2ohA', 'CSS Colors (RGB)'),
  new video('ZUAM-IMdwE4', 'CSS Colors (Hexadecimal)'),
  # Eyedroppers and Color Pickers
  new video('VN3Z6VM4Fr8', 'HTML and CSS: Classes and IDs'),
  new video('EVJzZaDq0oM', 'CSS: The Cascade'),
  new video('6p29D0tetDQ', 'Google Chrome and the Cascade'),
  new video('FhYgNI_0DiI', 'HTML Multiple Classes'),
  new video('C1-gW70Wszc', 'CSS Nested Selectors'),
  # Multiple Selectors
  new video('7GuBcFWlGVc', 'CSS Size Units (em, %, px, and pt)'),
  new video('nBgpS74f5Z4', 'CSS Text Properties'),
  new video('5Zt2KbxBqA4', 'CSS Basic Font Properties'),
  new video('Zjk0hK6jNvk', 'CSS Fonts (font-family property)'),
  new video('5t_4_UMo4JY', 'Pre Element and Whitespace')
  # CSS Basics Review
);

$module_textpages = array(
  new textpage('css-quick-reference.md', 'CSS Quick Reference'),
  new textpage('three-types-of-css.md', 'The Three Types of CSS'),
  new textpage('css-comments.md', 'CSS Comments'),
  new textpage('rules-selectors-properties-values.md', 'Rules, Selectors, Properties, and Values'),
  # new textpage('selectors-in-more-depth.md', 'Selectors in More Depth'),
  new textpage('colors.md', 'Colors'),
  new textpage('px-pt-percent-em.md', 'px, pt, %, and em'),
  new textpage('the-cascade.md', 'The Cascade'),
  new textpage('font-and-text-properties.md', 'Font and Text Properties'),
  new textpage('pre-and-whitespace.md', 'Pre and Whitespace'),
);

include('./modules/module-template.php');
?>