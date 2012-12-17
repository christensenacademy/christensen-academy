<?php
$module_name = 'web-design-and-development-intro';
$module_title = 'Web Design and Development Intro';
$module_subtitle = 'an Overview of the World Wide Web';
$map_height = '349';
$module_playlist = 'PLbdhPIoiglaXJyRqNx3X0VadCj38iF4ad';

$module_challenges = array(
  new challenge('internet-vs-www-challenge.md', 'Internet vs. WWW', '108', '69'),
  new challenge('http-request-response-challenge.md', 'HTTP Request-Response Challenge', '110', '130'),
  new challenge('web-standards-challenge.md', 'Web Standards Challenge', '96', '180'),
  new challenge('ftp-project.md', 'FTP Project', '104', '227')
);

$module_videos = array(
  new video('EbccXUin5Kw', 'Internet vs. WWW: A Brief History'),
  new video('DbT6-GMWMmc', 'Internet vs. WWW: Protocols'),
  new video('GZewdrk_gK8', 'HTTP: Servers and Clients')
  # HTTP: Domain Names and URLs'),
  # HTML, CSS, JavaScript, and Other Resources'),
  # "Bandwidth"'),
  # Download vs. Upload'),
  # The Browser Wars'),
  # Web Standards and W3C'),
  # Hosting'),
  # Web Design vs. Web Development'),
  # FTP'),
  # Wordpress and Friends'),
);

$module_textpages = array(
  new textpage('css-layouts-decimal-hexadecimal-numbers.md', 'Binary-Decimal-Hexadecimal Numbers'),
);

include('./modules/module-template.php');
?>
