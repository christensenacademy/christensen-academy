#Instances of Sounds

In the same way that you can work with instances of movie clips and text fields in ActionScript code, you can also work with instances of sounds. 

![Picture showing how to create a new instance of a sound in code](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/sound-instance.png)

The first thing you need to do to play a sound in your code is create a linkage name in the library for the sound you wish to use. You should use UpperCamelCase for the linkage name.

Then, here are some examples of how you would write the code:

```java
// The following code assumes that a sound in the library has a linkage name SonicBoom
var exampleSound:SonicBoom = new SonicBoom();
exampleSound.play();

// The following code assumes that a sound in the library has a linkage name Buzzer
var exampleSound2:Buzzer = new Buzzer();
exampleSound2.play();
```

--Cam
