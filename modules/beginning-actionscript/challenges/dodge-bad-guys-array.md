#Dodge Game: Bad Guys Array Challenge

* **Estimated Time:** 45 minutes
* [video](http://www.youtube.com/watch?v=Y96oDSou2_g)

###Challenge
Your challenge is to set up your Dodge game to dynamically generate bad guys and store them in an array. Changing the number of bad guys in your game will become a simple matter of changing the value of a single variable.

For this, I highly recommend watching the video. If you want to give it a shot on your own, here are some more details on what you'll need to do:

* Create a new variable that stores the number of bad guys.
* Create a new array to hold the instances of the bad guy symbol.
* Create a for loop to dynamically generate bad guys and add them to the array.
* Create a for loop in the end of game function that gets called when the timer goes off. This for loop should remove all of the bad guys from the screen using `removeChild()`.
* Create a for loop inside of the game loop that moves each of the bad guys and checks to see if they've crossed the edge of the screen.
