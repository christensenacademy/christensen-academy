#Know Thy Self

**Estimated Time:** 20 minutes

Your challenge is to modify your previous cyclopse game in the following manner:

* Create a new object. It doesn't matter what it looks like. This object will get destroyed if it is hit by a laser.
* Add some instances of this new object to the room so that the cyclopse will be able to shoot at them.
* Add a collision event with this new object to the laser object so that the following takes place:
  * The object that was hit by the laser disappears (i.e., the instance is destroyed).
  * The laser keeps moving across the screen for 20 more steps before it disappears as well (hint: use a timer).

**Key Idea:** You'll need to correctly specify "self" or "other" in the actions you use to get this to work correctly.

