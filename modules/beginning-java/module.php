<?php
$module_name = 'beginning-java';
$module_title = 'Beginning Java';
$module_subtitle = 'The Basics of the Java Programming Language';
$map_height = '600';
$module_playlist = '';

$module_challenges = array(
  new challenge('poem.md', 'Poem Challenge', '55', '41'),
  new challenge('debugging-1.md', 'Debugging Challenge 1', '119', '84'),
  new challenge('echo.md', 'Echo', '143', '56'),
  new challenge('smart-poem.md', 'Smart Poem', '219', '78'),
  new challenge('rfc.md', 'RFC (Request for Comments)', '46', '106'),
  new challenge('conversion.md', 'Conversion', '153', '118'),
  # new challenge('.md', '', '', ''),
);

$module_videos = array(
  new video('KTwHdVBQ-Ik', 'Classes, Objects, and Primitive Types'),
  new video('-AoHFnlJ1r4', 'Comments'),
  new video('vVJOAP7Qg_Q', 'Primitive Types: byte, short, int, long'),
  new video('MSxzdm4ev_8', 'Primitive Types: float, double'),
  new video('k5R3skKKQBg', 'Characters and Strings'),
  new video('Q4FCZYwFV_c', 'Escape Character'),
  new video('xzkGiP5qyzs', 'Java Scanner Class'),
  new video('i8W3xn3UUbI', 'Syntax, Runtime, and Logic Errors'),
  new video('-KZ9EZvNdms', 'Math Expressions'),
  # primitives vs. objects in memory
  # using classes
  # literals
);

$module_textpages = array(
  new textpage('comments.md', 'Comments in Java'),
  new textpage('three-types-of-errors.md', 'Three Types of Errors'),
  new textpage('java-objects-and-classes-intro.md', 'Java Objects and Classes Intro'),
  # new textpage('class-basics.md', 'Class Basics'),
  new textpage('java-api.md', 'Java API'),
  # new textpage('methods-messages-parameters-and-return-values.md', 'Methods, Messages, Parameters, and Return Values'),
  # new textpage('static.md', 'Static'),
  new textpage('variables.md', 'Variables'),
  new textpage('primitive-types.md', 'Primitive Types'),
  # new textpage('naming-conventions.md', 'Naming Conventions'),
  # new textpage('constants.md', 'Constants'),
  # new textpage('math-expressions.md', 'Math Expressions'),
  # new textpage('special-operators.md', 'Special Operators (Shortcuts)'),
  # new textpage('casting.md', 'Casting'),
  # new textpage('reserved-words-and-special-characters.md', 'Reserved Words and Special Symbols'),
  # new textpage('string-basics.md', 'String Basics'),
  # new textpage('string-methods.md', 'String Methods'),
  # new textpage('scanner-basics.md', 'Scanner Basics'),
  # new textpage('the-math-class.md', 'The Math Class'),
  # new textpage('floating-point-precision.md', 'Effects of Floating-Point Precision'),
  # new textpage('boolean-expressions.md', 'Boolean Expressions'),
  # new textpage('if-statements.md', 'If Statements'),
  # new textpage('ternary-operator.md', 'Ternary Operator'),
  # new textpage('while-loop.md', 'While Loop'),
  # new textpage('for-loop.md', 'For Loop'),
  # new textpage('logical-operators.md', 'Logical Operators'),
  # new textpage('nested-loops-and-if-statements.md', 'Nested Loops and If Statements'),
  # new textpage('continue-and-break-statements.md', 'Continue and Break Statements')
);


include('./modules/module-template.php');
?>