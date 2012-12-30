#Playhead Controls
```java
stop(); // stops the playhead in the current timeline
play(); // starts a stopped playhead in the current timeline
gotoAndPlay(56); // commands the playhead to jump to the frame whose number is in parenthesis
gotoAndStop(56); // same as above but the playhead stops on the specified frame
```
##Nested Movie Clips
Each movie clip has its own timeline. To control the playhead of timeline for a movie clip, simply use the movie clip's instance name followed by a dot as follows:
```java
// assume an instance of a movie clip named spaceShip exists on Scene 1
spaceShip.stop(); // stops the playhead of spaceShip

// assume spaceShip has a nested movie clip named lazerGun inside of it
spaceShip.lazerGun.gotoAndStop(3);
```

##Frame Labels
Instead of using number values for the `gotoAndPlay` command, you can specify the name of a frame label as a String:
```java
gotoAndStop("Results Screen");
```

Kowabunga,

Cam
