#Animating in Flash Reference

##The Timeline
The Flash Timeline, in addition to organizing layers, shows information about animations. In particular, it shows you everything you'd want to know about the various types of frames in your animation.

###Frames
All forms of video work off of the idea of frames. In the early days of animation, artists worked tirelessly to draw and paint each frame of an animation. When these frames were viewed in rapid succession, the illusion of motion was created. Animations in Flash are no different in the sense that they work on a frame by frame basis with either frame-by-frame animations or motion tweens.

###Frame Rates
The default frame rate in Flash is 24 fps (frames per second). You can change this. If you want your animation to speed up, simply set the frame rate higher (e.g., 48 fps would be twice as fast as the default speed). If you want your animation to slow down, simply decrease the frame rate (e.g., 12 fps would be half as fast as the default speed).

Note: Low frame rates appear choppy while fast frame rates appear smooth.

##Frame by Frame Animation
The most straitforward type of animation is frame-by-frame animation. In frame-by-frame animation, every frame is a keyframe, so you must specify how everything is arranged on each frame. Because of this, frame-by-frame animations are only used when necessary, and often only for very short, repetitive animations. Here are a few examples of times a frame-by-frame animation might be the right tool for the job:

* A flower swaying in the wind
* A character walking
* An explosion in a game

##Motion Tweens
There are three main types of tweens: motion tweens, classic tweens (a remnant of previous versions of Flash), and shape tweens. Of these three types, motion tweens are by far the most important. In fact, I don't even consider the other types of tweens important enough to teach in this module.

Motion tweens allow you to take a symbol and set two or more keyframes on it. Flash will take note of your keyframes and automatically fill in the frames between the keyframes. Hence, the name "tween".

Note: Creating successful motion tweens requires you to always know where the playhead is at. When you manipulate an object on the stage, remember that you only changing its position on the frame your playhead is at, which may automatically create a new keyframe.

##Timelines in Symbols
It is very important to realize that symbols have their own inner timelines. When you edit a symbol, you will see a timeline specific to that symbol. This is the key to doing any sort of advanced animation.

###Cars and Butterflies
Two really good examples of times it's useful to put animations inside of symbols are cars and butterflies.

Consider the case of a car driving across the screen. If you had a car symbol, you could animate it moving across the stage with a motion tween or frame-by-frame animation, but what if you wanted to make the tires spin as the car drove across the screen? In this case, you would need to compose the car symbol of instances of animated wheel symbols.

Consider the case of a butterfly fluttering about the screen. If you had a butterfly symbol, you could animate it moving around the screen, but what if you wanted it to be flapping its wings as it flew? In this case, you would need to compose the butterfly symbol of instances of animated wing symbols.

###Pan and Zoom
In order to achieve interesting camera effects, you'll need to move your animations into symbols so that you can tween the instances. When you do this, you'll find that you're able to make interesting panning and zooming effects.

##Bone Tool
###Bone Tool with Primitive Shapes
You can use the bone tool to manipulate primitive shapes. This will result in distortion of the shapes but can yield some interesting results.
###Bone Tool with Symbols
You can use the bone tool to connect instances of symbols. Only one "joint" per instance is allowed.
