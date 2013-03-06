<?php
$module_name = 'css-basics';
$module_title = 'CSS Basics';
$module_subtitle = 'Learn How to Add Visual Styling to Your Webpages';
$map_height = '383';
$module_playlist = 'PLbdhPIoiglaUF8qcTJRfnWqzORnaIJwuI';

$module_challenges = array(
  new challenge('three-types-of-css-challenge.md', 'Three Types of CSS Challenge', '115', '72'),  
  new challenge('css-validation-challenge.md', 'CSS Validation Challenge', '128', '138'),
  new challenge('color-challenge.md', 'Color Challenge', '48', '189'),
  new challenge('selectors-challenge.md', 'Selectors Challenge', '87', '198'),
  new challenge('pixel-percent-em-challenge.md', 'Pixel-Percent-EM Challenge', '160', '220'),
  new challenge('text-and-font-properties-challenge.md', 'Text and Font Properties Challenge', '105', '272'),
  new challenge('site-remodelling-project.md', 'Site Remodelling Project', '135', '344'),
  new challenge('review-contest.md', 'Review Contest', '195', '310'),
  new challenge('keyboard-shortcuts.md', 'Keyboard Shortcuts', '195', '270'),
  # Make a quiz game (Nicholas Style)
);

$module_videos = array(
  new video('TsXaXscBspM', 'CSS Introduction'),
  new video('g3brTMhg6H0', 'Inline, Embedded (Internal), and External CSS'),
  new video('SPp_hKEpMeQ', 'Internal and External CSS Equivalency'),
  # Extra whitespace doesn't matter
  new video('eIkDr8r2gRw', 'Comments'),
  new video('d_v322FfpXM', 'Inheritance'),
  new video('1v4ncJ9hjHc', 'CSS Validator Intro'),
  new video('r2BTqBykjNM', 'Colors: RGB and Hexadecimal Syntax'),
  new video('pWHzJIHewTM', 'Class and ID Attributes with CSS'),
  new video('tcwao3kLrg8', 'The Cascade'),
  new video('OmnXm0enV_o', 'Complex Selectors'),
  new video('YbcR4hpKoBk', 'Pseudo Classes'),
  new video('r7LGKtnEWmk', 'Font Size: %, em, px, and pt'),
  new video('5Zt2KbxBqA4', 'CSS Basic Font Properties'),
  new video('nBgpS74f5Z4', 'CSS Text Properties'),
  new video('Zjk0hK6jNvk', 'CSS Fonts (font-family property)'),
  new video('fFIf4yMpq-Y', 'Pre Element and Whitespace'),
);

$module_textpages = array(
  new textpage('three-types-of-css.md', 'The Three Types of CSS'),
  new textpage('css-comments.md', 'CSS Comments'),
  new textpage('rules-selectors-properties-values.md', 'Rules, Selectors, Properties, and Values'),
  new textpage('classes-and-ids.md', 'Classes and IDs'),
  new textpage('complex-selectors.md', 'Complex Selectors'),
  new textpage('hover-effects.md', 'Hover Effects'), # should be "pseudo classes"
  new textpage('colors.md', 'Colors'),
  new textpage('px-pt-percent-em.md', 'px, pt, %, and em'),
  new textpage('the-cascade.md', 'The Cascade'),
  new textpage('font-and-text-properties.md', 'Font and Text Properties'),
  new textpage('pre-and-whitespace.md', 'Pre and Whitespace'),
  new textpage('css-quick-reference.md', 'CSS Quick Reference'),
);

include('./modules/module-template.php');
?>
