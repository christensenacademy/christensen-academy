* **Estimated Time:** 40 minutes
* [video](http://www.youtube.com/watch?v=LrMzoflw6L4)

##Challenge

Enhance your Click-a-Mania game in the following manner:

**Allow the Player to Pause the Game:**

* Pressing the "p" key (or another key of your choice) should pause the game if the game was not paused.
* Pressing the "p" key (or another key of your choice) should unpause the game if the game was paused.
* When the game is paused, the playhead should stop.
* When the game is paused, a semi-transparent screen should cover the stage so that the buttons are not clickable.
* Make sure to only add the event listener once the game actually starts. That is, pressing "p" should not pause the game on the starting screen.
* Likewise, make sure to remove the event listener when you don't need it anymore (i.e., on the results screen). Pressing "p" on the results screen should not pause the game or cause an error.