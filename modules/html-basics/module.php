<?php
$module_name = 'html-basics';
$module_title = 'HTML Basics';
$module_subtitle = 'Learn How to Create Basic Websites';
$map_height = '476';
$module_playlist = 'PLbdhPIoiglaUeOryD1kJfZYD1QWbT2x3U';

$module_challenges = array(
  new challenge('internet-vs-www-challenge.md', 'Internet vs. WWW', '108', '69'),
  new challenge('text-editor-challenge.md', 'Text Editor Challenge', '195', '65'),
  new challenge('keyboard-shortcut-challenge.md', 'Keyboard Shortcut Challenge', '71', '14'),
  new challenge('basic-webpage-challenge.md', 'Basic Webpage Challenge', '78', '88'),
  new challenge('list-challenge.md', 'List Challenge', '22', '84'),
  new challenge('self-assessment.md', 'Self Assessment', '108', '166'),
  new challenge('absolute-path-challenge.md', 'Absolute Path Challenge', '176', '241'),
  new challenge('zip-challenge.md', 'Zip Challenge', '109', '222'),
  new challenge('meta-challenge.md', 'Meta Challenge', '39', '272'),
  new challenge('html-entities-challenge.md', 'HTML Entities Challenge', '291', '284'),
  new challenge('relative-path-challenge.md', 'Relative Path Challenge', '152', '292'),
  new challenge('validation-challenge.md', 'Validation Challenge', '208', '360'),
  new challenge('../projects/website-project.md', 'Website Project', '125', '420')
);

$module_videos = array(
  new video('EbccXUin5Kw', 'Internet vs. WWW: A Brief History'),
  new video('GKyGPRgpa5g', 'HTML, CSS, and JavaScript Overview'),
  new video('GoL1ZW3Lk38', 'Text Editor for Web Development'),
  new video('dVOC77VvlIE', 'HTML Intro'),
  new video('5k0nTTwG1ys', 'HTML Indentation'),
  new video('T9Mu-ViFdX8', 'HTML Comments'),
  new video('9Ce85vnzAgM', 'HTML Basic Structure'),
  new video('dIYKATMBwIc', 'HTML Basic Elements'),
  new video('XrqC7giRuNg', 'HTML Block vs. Inline (introductory explanation)'),
  new video('LOdepOlsVX0', 'HTML Lists (ordered and unordered)'),
  new video('RwSNaS9XiYs', 'HTML Nested (Hierarchical) Lists'),
  new video('z3STv2PZQ4w', 'Keyboard Shortcuts'),
  # The following videos need to be redone. The language I used to describe paths was very poor. Students got confused by what I meant when I said "link"
  new video('y05_twXvacU', 'HTML Attributes Intro'),
  new video('r38j0rnQ17Q', 'HTML Relative Links'),
  new video('87B0pFlc7Xc', 'Working with Zip Files'),
  new video('qItZlfOmG3o', 'HTML Absolute Links'),
  # URLs and Absolute Links
  new video('sQ5-v9MmPI0', 'HTML Links to Other Resources'),
  new video('KU4V-bCN4Ag', 'HTML Email Link'),
  new video('ilRD2T9qiAU', 'HTML Void (Empty) Elements: br, hr, and img'),
  new video('Xa3m4xP4QTk', 'HTML Image (img) Tag'),
  new video('twCSSSsF3PM', 'HTML Accessibility Intro (alt and longdesc)'),
  new video('reZC1VpnotE', 'HTML Title Attribute (making tool tips)'),
  # REDO with talk of SEO, better description of description, and no wrong info about UTF-8
  new video('POwgA7u3h4E', 'HTML Meta Tag'),
  new video('QVP9FQi7tiA', 'HTML Validation Service'),
  new video('oRQTw_J1dgA', 'HTML Validation Service (Part 2)'),
  new video('1wpus8NNl5g', 'HTML Reserved and Special Characters'),
  new video('OJUyMP5QaKM', 'HTML Review (Chipmunk Voice)')
);

$module_textpages = array(
  new textpage('css-layouts-decimal-hexadecimal-numbers.md', 'Binary-Decimal-Hexadecimal Numbers'),
);

include('./modules/module-template.php');
?>