#Dodge Game: Collisions and Scoring Challenge

Your challenge is to set up collision detection between objects in your game and the player. Some objects might be bad while others might be good. That is, some might increase the player's score while others might make the player lose health or something.

**[Video](http://www.youtube.com/watch?v=D9f3PG_03I8)**

Imagine that you have an array of "bad guys" called `badGuys`. If so, your code for detecting collisions might be something like this:

```actionscript
for(var i:Number = 0; i<numberOfBadGuys; i++){
  // for each bad guy, check to see if it is hitting the player. If so, do stuff...
	if(badGuys[i].hitTestObject(player)){
  
    // these are just some examples of things you might want to do if your player collides with a bad guy
		var hitSound:HitSound = new HitSound();
		hitSound.play();
		badGuys[i].x = Math.random()*-550; // reposition the bad guy off the screen so he can come across again
		badGuys[i].y = Math.random()*400;
		score = score - 1;
	}
}
```
###Scoring
The important thing to realize here is that you'll need to create a score variable **outside of the main game loop**. Once you do this, it should be a simple matter of increasing or decreasing the value of that variable at the appropriate time. Perhaps you want to award points every time the player collides with a certain object. Or, perhaps you want to award points merely for surviving like they do in the famous helicopter game.

Good luck!

--Cam
