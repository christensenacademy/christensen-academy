<?php
$module_name = 'drawing-in-flash';
$module_title = 'Drawing in Flash';
$module_subtitle = 'Using Flash as a Drawing Tool to Create Vector Graphics';
$map_height = '115';
$module_playlist = '';

$module_challenges = array(
);

$module_videos = array(
  new video('JqyyhDKqfrk', 'Intro to Drawing Playlist'),
  new video('PBR5QpDvm-o', 'Stroke and Fill'),
  new video('VGI1YYa_d8A', 'Ink Bottle and Paint Bucket'),
  new video('BbCZcPeDrl8', 'Primitive Shapes vs. Objects Drawings'),
  new video('cLxPEVbTNFQ', 'Ordering Objects on the Stage (Arrange)'),
  new video('_wGWhbQnV2k', 'Colors Basics'),
  new video('RZ9nTquwmXo', 'Alpha (Transparency and Opacity)'),
  new video('7-VP3A8Htqw', 'Eyedropper Tool'),
  new video('6MqxZBJRLik', 'Line, Pencil, and Paintbrush Tools'),
  new video('YRf3LDKf7zQ', 'Vector vs Bitmap (Raster)'),
  new video('K6g8YAumxnU', 'Subselection Tool (Anchor Points)'),
  new video('ptG9DBSSFf0', 'More on Anchor Points'),
  new video('1wSg0Ork5XI', 'Paint Bucket Tool (Gap Options)'),
  new video('CZbM9_hypqg', 'Controlling Curves (Anchor Points and Handlebars)'),
  new video('Cbh7pUGEXuU', 'Controlling Curves (Types of Anchor Points)'),
  new video('hnRW6_XCdGI', 'Pen Tool Intro'),
  new video('fyixUWnK8Q0', 'Layers Intro'),
  # Paste in Place
  new video('WMlukBMuouE', 'Transform Tool'),
  new video('jHF1SQgxahQ', 'Yin Yang Drawing Challenge'),
  new video('BH1i0mNWCSI', 'Drawing a class="youtube" hand (Example)'),
  new video('BoVxZjuiF_E', 'Drawing a Car (Example)'),
  new video('YRNv8hXEh-M', 'Drawing a T-Shirt Design (Example)'),
  new video('GEGJLV0n2pg', 'Intro to the Rest of the Drawing Playlist'),
  new video('IRXCVialMsw', 'Symbols and Instances'),
  new video('V9pLXuVQum0', 'Copy Symbols Between Projects'),
  new video('hNSEfcsxIgA', 'Editing Symbols'),
  new video('jSgzLy54yiU', 'Editing Instances'),
  new video('2WKb1gH5qJU', 'Symbols Inside of Symbols'),
  new video('iRaxebpt9R0', 'Flash Coordinate System'),
  new video('FTRozSAJ8pg', 'Registration Points'),
  new video('fICj7OX56gM', 'Transformation Points'),
  new video('KdOvIjK3wy4', 'Rulers, Grids, and Alignment'),
  new video('8OdAX4UfBRM', 'Gradients'),
  # Colors Panel in Depth
  new video('2lPFE4W3E-Q', 'Text Intro'),
  new video('czGCxGP2c3Y', 'Fruit Basket Scene (Example)'),
  new video('g-Pbdvdc0Vg', 'Monster Example (Example)')
);

$module_textpages = array(
  new textpage('vector-vs-bitmap.md', 'Vector vs. Bitmap'),
  new textpage('stroke-fill-and-colors.md', 'Stroke, Fill, and Colors'),
  new textpage('primitive-shapes-vs-object-drawings.md', 'Primitive Shapes vs. Object Drawings'),
  new textpage('line-pencil-and-paintbrush-tools.md', 'Line, Pencil, and Paintbrush Tools'),
  new textpage('anchor-points-subselection-and-pen.md', 'Anchor Points, Subselection Tool, and Pen Tool'),
  new textpage('layers.md', 'Layers'),
  new textpage('transform-tool.md', 'Transform Tool'),
  new textpage('coordinate-system.md', 'Coordinate System'),
  new textpage('gradients.md', 'Gradients'),
  new textpage('symbols-and-instances.md', 'Symbols and Instances'),
  new textpage('registration-points.md', 'Registration Points'),
  new textpage('rulers-grids-and-alignment.md', 'Rulers, Grids, and Alignment')
);

include('./modules/module-template.php');
?>