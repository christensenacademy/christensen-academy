#Dodge Game: Getting Started

* **Estimated Time:** 50 minutes
* [video](http://www.youtube.com/watch?v=zDccBB4RLhw)

###Challenge
* Create a new program with three frames.
* On frame one have a play button to start the game. Clicking it should advance the playhead to frame 2.
* On frame three have a replay button and a score results text box. The score results text box doesn't need to actually do anything yet.
* On frame two, do the following:
  * Set a timer to end the game (advance to frame 3) after a certain amount of time, say 5 seconds.
  * Create an instance of a player piece (either on the stage in Flash or dynamically with code).
  * Create a frame event that increases or decreases the y-value of the player piece if the up arrow key or down arrow keys are pressed. Doing this is somewhat challenging because Flash doesn't keep track of which keys are pressed for you. You'll need to create your own boolean variables to keep track of whether or not the up and down keys are currently pressed. You'll need to change the values of these variable in keyboard events (see the video for more detail). 
