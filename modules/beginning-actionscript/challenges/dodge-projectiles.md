#Dodge Game: Projectiles Challenge

Would you like your player to be able to fire projectiles at the enemies? Would you like your enemies to fire at your player? This can get complicated, but the general method for doing it is pretty simple:

1. Create a new symbol for the projectile.
2. On an event, perhaps when the spacebar is pressed, a new projectile is created a certain location, perhaps the position of the player.
3. The new projectile is added to an array.
4. During the game loop, every projectile in the array is moved, just like we did with bad guys.
5. During the game loop, we test for a collision between the projectile and its intended target. If there's a hit, do stuff including removing the projectile from the array.
