#Dodge Game: Health and Lives Challenge

Your challenge is to modify your games so that the play can lose health and lose lives. If the player runs out of health on his or her last life, the game is over.

##[video](http://www.youtube.com/watch?v=bLZemXSK2qk)

###Getting Started
You'll need to set up variables outside of the game loop for `health` and `lives`.
```actionscript
var lives:Number = 3;
var health:Number = 100;
```

###Logic
You'll need to add code to your game loop that affects these variables. For example, imagine you've just detected a collision between and would like to deduct health from the player. Perhaps your code might look something like this:
```actionscript
health -= 10;
if(health < 1){
  lives -= 1;
  if(lives < 1){
    gameOver();
  }
  else{
    health = 100;
  }
}
```


###Displaying Health and Lives
You can then set up a dynamic text field to continuously show the player his or her health and lives. Of course, there are fancier ways of displaying health and lives as well, and if you have an idea for how you might do it, I encourage you to give it a try!

Good luck!

--Cam
