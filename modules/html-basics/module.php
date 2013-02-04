<?php
$module_name = 'html-basics';
$module_title = 'HTML Basics';
$module_subtitle = 'Learn How to Create Basic Websites';
$map_height = '476';
$module_playlist = 'PLbdhPIoiglaUeOryD1kJfZYD1QWbT2x3U';

$module_challenges = array(
  new challenge('text-editor-challenge.md', 'Text Editor Challenge', '195', '65'),
  new challenge('keyboard-shortcuts-challenge.md', 'Keyboard Shortcuts Challenge', '71', '14'),
  new challenge('basic-webpage-challenge.md', 'Basic Webpage Challenge', '78', '88'),
  new challenge('list-challenge.md', 'List Challenge', '22', '84'),
  new challenge('self-assessment.md', 'Self Assessment', '108', '166'),
  new challenge('absolute-path-challenge.md', 'Absolute Path Challenge', '176', '241'),
  new challenge('zip-challenge.md', 'Zip Challenge', '109', '222'),
  new challenge('meta-challenge.md', 'Meta Challenge', '39', '272'),
  new challenge('html-entities-challenge.md', 'HTML Entities Challenge', '205', '253'),
  new challenge('relative-path-challenge.md', 'Relative Path Challenge', '152', '292'),
  new challenge('validation-challenge.md', 'Validation Challenge', '212', '364'),
  new challenge('website-project.md', 'Website Project', '135', '430')
);

$module_videos = array(
  new video('TSWRh9PruTU', 'HTML, CSS, and JavaScript Intro'),
  new video('bbTjT0jXLJ8', 'Text Editors'),
  new video('d9CGdijb_Y8', 'Intro to HTML Basics'),
  new video('lERL1N7YgQo', 'Indentation and White Space'),
  new video('6xtpxQW1_bc', 'Comments'),
  new video('BDfyofGW1iM', 'Basic Elements: title, h1-h6, and p'),
  new video('Esuo3DpHjjM', 'Lorem Ipsum for Web Development'),
  new video('V-pVG0C44ZI', 'Basic Keyboard Shortcuts for Web Development'),
  new video('GMRG3d25E18', 'Lists'),
  new video('GOkghoS8eN8', 'Void (Empty) Elements'),
  new video('RyxJxageYMc', 'Attributes'),
  new video('Z8-pjnNYhnU', 'Absolute Paths (URLs)'),
  new video('9KHIdgA08hw', 'Relative Paths'),
  new video('qk3HIpSbors', 'HTML Entities'),
  new video('RdeJstmV34g', 'Meta Tags'),
  
  # alt, title, validation, and zip
);

$module_textpages = array(
  new textpage('text-editors.md', 'Text Editors'),
  new textpage('useful-keyboard-shortcuts.md', 'Useful Keyboard Shortcuts'),
  new textpage('markup-tags-and-elements.md', 'Markup, Tags, and Elements'),
  new textpage('comments-in-html.md', 'Comments in HTML'),
  new textpage('lorem-ipsum.md', 'Lorem Ipsum'),
  new textpage('basic-html-elements.md', 'Basic HTML Elements'),
  new textpage('void-elements.md', 'Void Elements'),
  new textpage('lists.md', 'Lists'),
  new textpage('indenting-and-whitespace.md', 'Indenting and Whitespace'),
  new textpage('common-mistakes.md', 'Common Mistakes'),
  new textpage('attributes.md', 'Attributes'),
  new textpage('block-vs-inline.md', 'Block vs. Inline Elements'),
  new textpage('absolute-and-relative-paths.md', 'Absolute and Relative Paths'),
  new textpage('hyperlinks.md', 'Hyperlinks'),
  new textpage('images.md', 'Images'),
  new textpage('meta-tag.md', 'Meta Tag'),
  new textpage('html-entities.md', 'HTML Entities'),
  new textpage('validation.md', 'Validation'),
  new textpage('element-quick-reference.md', 'Element Quick Reference'),
);

include('./modules/module-template.php');
?>