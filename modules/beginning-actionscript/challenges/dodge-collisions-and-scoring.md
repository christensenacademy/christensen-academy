#Dodge Game: Collisions and Scoring Challenge

Your challenge is to set up collision detection between objects in your game and the player. Some objects might be bad while others might be good.

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
	}
}
```
