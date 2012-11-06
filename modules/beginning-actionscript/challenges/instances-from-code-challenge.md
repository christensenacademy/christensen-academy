* **Estimated Time:** 30 minutes
* **Purpose:** We'll use this technique a lot in the future. Imagine you eventually want to make a game that has a spaceship shooting a lazer each time the player presses the spacebar. This would mean that in your code you would need to create a new instance of the lazer symbol each time the user presses the spacebar.
* **Reference Guide:** [Creating Instances from Code](https://github.com/christensenacademy/christensen-academy/blob/master/modules/beginning-actionscript/reference.md#creating-instances-from-code)

##Challenge

**Goal:** Write AS3 code to create new instances of symbols and place them in the four corners of the stage.

1. Open the [starter file](http://christensenacademy.org/modules/beginning-actionscript/challenges/instances-from-code-challenge-starter.fla). **Note:** For some reason, Firefox is adding ".txt" to the end of the file. I recommend downloading the file with a Web browser that is not Firefox.
2. Make sure it has a single layer, the Actions layer, with only a single, empty frame.
3. Make sure each symbol has a linkage name. If not, add good linkage names to each symbol.
4. Add code to this empty frame that creates an instance of each of the five symbols.
5. Make sure these five instances all get added to the display stack (i.e., use the "addChild()") command).
6. Add code to place an instance in each of the four corners of the stage and one in the middle.