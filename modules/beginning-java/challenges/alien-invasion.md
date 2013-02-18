#Alien Invasion

**Estimated Time:** 200 minutes, assuming you have a decent amount of experience working with boolean logic, scanners, generating random numbers, and so on.

Your challenge is to create the Alien Invasion game. This game is modeled on the [Martian Dice](http://boardgamegeek.com/boardgame/99875/martian-dice) game.

###Overview
You and your fellow aliens are swooping down on Earth in your spaceships in an attemp to collect specimens of chickens, cows, and humans for your alien research. Each time you swoop down upon the planet, tanks may come to the planet's defense. In order for your invasion to be successful, you must overpower the tanks with your spaceships in addition to collecting specimens of chickens, cows, and humans. The more chickens, cows, and humans you collect, the more points you will score. Also, you will receive a bonus if you manage to collect all three types of specimens.

###[Demo Video]()

###How the Game Works
You start the game with 13 dice. You attack the planet in rounds, which continue until you're out of dice.

In each round, you do the following:

1. Roll all of the remaining dice. For each die, there is a 1/6th chance of rolling a tank, chicken, cow, or human, and a 2/6th chance of rolling a spaceship.
2. Immediately set all of the tank dice you rolled off to the side, adding them to the total number of tanks defending Earth.
3. Count up the number of chickens, cows, humans, spaceships you've rolled.
4. Choose where to focus your energy this round (i.e., choose whether you want to select spaceships, chickens, cows, or humans). **Note:** Whatever dice you select will be set aside thereby decreasing your number of remaining dice.
  * **Collect All Chickens:** You may only do this if you have never collected chickens before and there are actually some chickens available to collect.
  * **Collect All Cows:** You may only do this if you have never collected cows before and there are actually some cows available to collect.
  * **Collect All Chickens:** You may only do this if you have never collected chickens before and there are actually some chickens available to collect.
  * **Select All Spaceships to Battle Tanks:** You may do this only if there are new spaceships ready for battle.
5. If you are unable to collect new specimens or assign spaceships to battle, or if you are simply out of dice, the game is over. Otherwise, continue a new round with the remaining dice.

If the number or spaceships was greater than or equal to the number of tanks, your invasion was successful. You score one point for each specimen collected and an additional three points if all three types of specimens were collected.

##Problem Solving Techniques
This is a large problem that may seem impossible unless you find ways to break it down into smaller pieces. This is the essence of the divide and conquer problem solving strategy. In computer science, this idea is also referred to as [decomposition](http://en.wikipedia.org/wiki/Decomposition_(computer_science)).

Don't try to do everything at once, and if you find yourself running into trouble, take a step back and try to solve an easier problem. For example, before trying to write code to simulate the rolling of a bunch of dice, see if you can write code to simulate rolling a single die. If that problem is still too difficult, see if you can solve an even easier problem, such as writing code to generate a random number 0-5.

The big idea, I think, is to find ways to give yourself a feeling of continual progress. If you realize you don't know how to do something, start with something you do know how to do and work from there. Bit-by-bit, you'll find that you are capable of working your way to a solution.

##Rubric
* **Correct:** The game works as intended and is free of logic errors.
* **Robust:** The game works in all circumstances, even if the user inputs "bad" values.
* **Polished:**
  * The user interface is as nice as possible.
  * The game is intuitive and easy to play.
  * Messages are highly customized (e.g., if only one tank was rolled, the message says "1 tank" instead of "1 tanks")
