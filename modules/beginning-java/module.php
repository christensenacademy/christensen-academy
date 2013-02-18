<?php
$module_name = 'beginning-java';
$module_title = 'Beginning Java';
$module_subtitle = 'The Basics of the Java Programming Language';
$map_height = '600';
$module_playlist = '';

$module_challenges = array(
  new challenge('hello-world-enhanced.md', 'Hello World Enhanced', '59', '57'),
  new challenge('variable-output.md', 'Variable Output', '125', '22'),
  new challenge('scanner.md', 'Scanner', '153', '49'),
  new challenge('debugging-1.md', 'Debugging 1', '101', '110'),
  new challenge('conversion.md', 'Conversion', '158', '104'),
  new challenge('math-expressions.md', 'Math Expressions', '30', '115'),
  new challenge('boolean-expressions.md', 'Boolean Expressions', '76', '155'),
  new challenge('logic-practice.md', 'Logic Practice', '72', '176'),
  new challenge('income-tax.md', 'Income Tax', '145', '174'),
  new challenge('project-euler.md', 'Project Euler', '186', '200'),
  new challenge('fibonacci.md', 'Fibonacci', '227', '225'),
  new challenge('string-practice.md', 'String Practice', '105', '272'),
  new challenge('login.md', 'Login', '100', '247'),
  new challenge('math-class.md', 'Math Class', '106', '216'),
  new challenge('alien-invasion.md', 'Alien Invasion Game', '162', '237'),
  
  new challenge('poem.md', 'Poem Challenge', '55', '341'),
  new challenge('debugging-1.md', 'Debugging 1', '119', '384'),
  new challenge('echo.md', 'Echo', '143', '356'),
  new challenge('smart-poem.md', 'Smart Poem', '219', '378'),
  new challenge('rfc.md', 'RFC (Request for Comments)', '46', '406'),
  new challenge('conversion.md', 'Conversion', '153', '418'),
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
  new textpage('variables-intro.md', 'Variables Intro'),
  new textpage('primitive-data-types-overview.md', 'Primitive Data Types Overview'),
  new textpage('int.md', 'Int'),
  new textpage('double.md', 'Double'),
  new textpage('strings.md', 'Strings'),
  new textpage('scanner-basics.md', 'Scanner Basics'),
  new textpage('boolean-expressions.md', 'Boolean Expressions'),
  new textpage('class-basics.md', 'Class Basics'),
  new textpage('christensenacademy-drawing-package.md', 'Christensen Academy Drawing Package'),
  new textpage('method-basics.md', 'Method Basics'),
  new textpage('public-vs-private.md', 'Public vs. Private'),
  new textpage('static-methods.md', 'Static Methods'),
  new textpage('wrapper-classes-for-primitive-types.md', '"Wrapper" Classes for Primitive Types'),
  new textpage('naming-conventions.md', 'Naming Conventions'),
  new textpage('constants.md', 'Constants'),
  new textpage('math-expressions.md', 'Math Expressions'),
  new textpage('shortcut-operators.md', 'Shortcut Operators'),
  new textpage('operators-in-depth.md', 'Operators in Depth'),
  new textpage('if-statements.md', 'If Statements'),
  new textpage('while-loops.md', 'While Loops'),
  new textpage('nested-control-structures.md', 'Nested Control Structures'),
  new textpage('continue-and-break.md', 'Continue and Break'),
  new textpage('arrays.md', 'Arrays'),
);


include('./modules/module-template.php');
?>