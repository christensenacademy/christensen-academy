<?php
$module_name = 'binary';
$module_title = 'Binary';
$module_subtitle = 'Numbers, Character Encodings, and More!';
$map_height = '159';
$module_playlist = 'PL468E998CB5692EFA';

$module_challenges = array(
  # new challenge('binary-decimal-hexadecimal-conversions.md', 'Binary Decimal Hexadecimal Conversions', '29', '36'),
  # new challenge('add-and-subtract-twos-compliment.md', 'Add and Subtract with Twos Compliment', '68', '52'),
  # new challenge('floating-point-practice.md', 'Floating Point Practice', '30', '72'),
  # new challenge('youtf.md', 'YouTF', '12', '116'),
  # new challenge('bitmap-builder.md', 'Bitmap Builder', '33', '122'),
  # new challenge('waveform-analysis.md', 'Waveform Analysis', '59', '144'),
  # new challenge('quiz.md', 'Quiz', '34', '181'),
);

$module_videos = array(
  new video('UFrd2nje2xU', 'Binary Intro'),
  new video('L3TYt3hqqO4', 'Binary Numbers Intro'),
  new video('m14v6PLiRa4', 'Ambiguity and Writing Binary Numbers'),
  new video('q0YUb1OIjP4', 'Binary Numbers and Place Value'),
  new video('xaAkGXOWKiU', 'Decimal to Binary Conversions'),
  new video('g8GSAESZV48', 'Introduction to Other Number Systems'),
  new video('E4CBQAzbMe8', 'Hexadecimal Intro'),
  new video('YRVk-83qo_4', 'Hexadecimal-Binary Conversions')
  # Negative Binary Integers
  # Two's Compliment
  # Binary Floating Point Numbers (Part 1)
  # Binary Floating Point Numbers (Part 2)
);

$module_textpages = array(
  new textpage('binary-decimal-hexadecimal-numbers.md', 'Binary-Decimal-Hexadecimal Numbers'),
  # new textpage('twos-compliment.md', 'Two\'s Compliment'),
  # new textpage('floating-point-numbers.md', 'Floating Point Numbers'),
  # new textpage('character-encodings.md', 'Character Encodings'),
  # new textpage('digital-images.md', 'Digital Images'),
  # new textpage('digital-sound.md', 'Digital Sound')
);

include('./modules/module-template.php');
?>