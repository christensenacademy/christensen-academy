#Click-a-Mania: Bounce Challenge

* **Estimated Time:** 30 minutes
* [video](http://www.youtube.com/watch?v=SMo7832g8L4)

##Challenge

Enhance your Click-a-Mania game in the following manner:

**Remove motion tweens in favor of "programmed movement":**

* Set up a new timer to go off every 20 miliseconds for an infinite amount of time.
* Set up two variables for each button. One will keep track of the speed of the button in the Y direction, the other the X direction.
* Assign each of the four variables an initial numeric value, perhaps 5 or so.
* In the timer event, increment the x and y properties of the buttons by the corresponding speed variables you just created.
* In the timer event, if a button travels past the left or right edge of the screen, reverse the sign of the variable keeping track of its x speed. Likewise, if a button travels past the top or bottom of the screen, reverse the sign of the variable keeping track of its y speed.
* When the game ends, remove the event listener for this timer.
