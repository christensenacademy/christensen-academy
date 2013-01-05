<?php
$module_name = 'web-design-and-development-intro';
$module_title = 'Web Design and Development Intro';
$module_subtitle = 'an Overview of the World Wide Web';
$map_height = '214';
$module_playlist = 'PLbdhPIoiglaXJyRqNx3X0VadCj38iF4ad';

$module_challenges = array(
  new challenge('request-response-presentation.md', 'Request-Response Presentation', '108', '69'),
  new challenge('set-up-a-website.md', 'Set Up a Website', '110', '130'),
  new challenge('quiz.md', 'Quiz', '96', '180')
);

$module_videos = array(
  new video('Lrlzu9f-3is', 'History of the Internet and the World Wide Web '),
  new video('55NUUjVOapM', 'How the Internet Works'),
  new video('UM_JKZys1O0', 'How the World Wide Web Works'),
  new video('8IFYI-JyhqA', 'Anatomy of a Webpage'),
  new video('vW1EmDcwjrE', 'Domain Names and URLs'),
  new video('Sq3DL8YFcEY', 'Search Engines'),
  new video('i51xFd--kds', 'Web Standards'),
  new video('T9IEVLRAdp4', 'Hosting')
);

$module_textpages = array(
  new textpage('history-of-the-internet-and-the-www.md', 'History of the Internet and the WWW'),
  new textpage('how-the-internet-works.md', 'How the Internet Works'),
  new textpage('how-the-www-works.md', 'How the World Wide Web Works'),
  new textpage('anatomy-of-a-webpage.md', 'The Anatomy of a Webpage'),
  new textpage('domain-names-and-urls.md', 'Domain Names and URLs'),
  new textpage('search-engines.md', 'Search Engines'),
  new textpage('web-standards.md', 'Web Standards'),
  new textpage('hosting.md', 'Hosting')
);

include('./modules/module-template.php');
?>
