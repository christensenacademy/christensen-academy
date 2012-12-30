#Frame Script (Adding ActionScript to a Frame)
In Flash, we write ActionScript code inside of frames. Here's how:

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/adding-actionscript-to-a-frame.png)

1. Create a new layer called "Actions". You'll use this layer to hold **all** of your ActionScript code.
2. Add a keyframe on this layer where you'd like to put some code.
3. Right click on the keyframe and select "Actions" to open the Actions panel. **Note:** Wherever you right-click is where your code will end up, so be careful. If you don't right-click on a keyframe, the code will be inserted in the nearest keyframe to the left of where you clicked.
4. Type the commands you want the computer to follow.

**Tip:** Use F9 on the keyboard to open the ActionsPanel more quickly.

#####Editing ActionScript on an Existing Frame
Right-click on the frame and go to Actions or, if the Actions panel is already open, you can find the correct frame on the left side of the panel. This is easier and faster than right-clicking on a frame in the timeline.

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/editing-existing-actionscript.png)

####Some Examples of Basic Code
```java
// Pay close attention to small details like spaces, capital letters, and semicolons.*/

stop(); // stops the playhead in the current timeline
play(); // starts a stopped playhead in the current timeline
gotoAndPlay(56); // commands the playhead to jump to the frame whose number is in parenthesis
trace("Hello World"); // writes a message to the Output panel
```

**Note:** Each line of code above can be thought of as a command telling the computer to do something. I think this is a good way to think about it for the time being, but realize that technically what's going in each line is that [functions](#functions) are being called.

####Give It a Try
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/basic-code-1.fla) to see if you can figure out what the code is doing. To test the program press ctrl+enter on PC or command+return on Mac. Look at the code for each frame. Try changing up some of the commands and predict the results.

Kowabunga,

Cam
