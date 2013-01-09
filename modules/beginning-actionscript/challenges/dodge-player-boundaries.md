#Dodge Game: Player Boundaries Challenge

Your challenge is to limit the range of motion for the player. This can be done with if-statements in the game loop.

You probably already have code like this for moving the player:
```actionscript
if(upKeyIsPressed){
	player.y -= 5;
}
if(downKeyIsPressed){
	player.y += 5;
}
```

Try something like this:
```actionscript
if(upKeyIsPressed && player.y > 0){
  player.y -= 5;
}
if(downKeyIsPressed && player.y < 400){
	player.y += 5;
}
```

**Note:** In ActionScript, `&&` means AND. In this case, the stuff inside the if-statement will only happen if BOTH conditions are true. So, if the player moves too high or low on the stage, he or she won't be allowed to move any further.
