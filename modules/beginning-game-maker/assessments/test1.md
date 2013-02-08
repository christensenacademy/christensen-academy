#Test 1

Your challenge is to create a game that works just like [this one](http://christensenacademy.org/modules/beginning-game-maker/assessments/test-1/), though the graphics may be different. This is intended to be a test of how well you've learned the basics of Game Maker. As such, I think it's in your best interest to refrain from looking back at old work or doing any research online. Simply open up Game Maker and start from scratch. Good luck!
##Sprites
You will need three appropriately-named sprites. **Note:** They don't need to look good, and they don't need to look exactly like the ones I made in [my game](http://christensenacademy.org/modules/beginning-game-maker/assessments/test-1/). They just need to adhere to the following specifications:

1. **Sprite 1:** A 32x32 sprite with a circular form. The parts of the sprite outside the circle should be transparent.
2. **Sprite 2:** A 64x64 sprite with a any form you'd like.
3. **Sprite 3:** A 100x32 sprite with some transparent parts around the edges.

##Circle Object (Use Sprite 1)
1. At the start of the game, each instance of the circle object should move to the right with a speed of 2.
2. When the mouse is release over an instance of the circle object, 5 points are scored and the direction of the circle is reversed horizontally.

##"Cello" Object (Use Sprite 2)
1. An alarm is set for 1 second when each instance of the cello object is created.
2. When the alarm goes off, the cello moves in a random direction with a speed of 2.
3. The cello contiues randomly changing directions every second.
4. If the mouse is pressed over the top of a cello, subtract 10 points from the player's score.
6. BONUS: Get the cellos to wrap around the room. That is, if a cello exits the left side, it magically appears on the right side; if a cell exits the top, it magically appears on the bottom; and so on and so forth.

##"Gummy Worm" Object (Use Sprite 3)
When any of the four arrow keys are pressed on the keyboard, the "gummy worm" should move in that direction with a speed of 5 for 20 steps. When the 20 steps are over, the "gummy worm" should stop.

If the "gummy worm" collides with a cello, the game should end.

##Controller Obejct
Use this to display the score in the top-left corner of the room.

##Room and Background
The background should be a 32x32 image that is repeated in both the horizontal and vertical directions to fill the entire 640x480 room. What exactly the background looks like is inconsequential.

Additionally, the background must scroll to the right.

###Instances in the Room
1. Space out 10 copies of the "cello" object.
2. Put one copy of the "gummy worm" object in the center.
3. Put 15 copies of the "circle" object in the room, each in a different row.
4. Put one copy of the controller object in the room.