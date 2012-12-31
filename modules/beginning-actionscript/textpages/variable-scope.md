#Variable Scope

In all programming languages, variables have *scope*. That is, just because you declare a variable in one part of your program doesn't mean it will exist everywhere else in your program.

**NOTE:** This discussion assumes no knowledge of how classes work in ActionScript 3 and will naturally be entirely limited to how scope applies to code you might write in frames on the timeline.

###The Timeline
In general, variables you declare in a frame on a timeline will be available anywhere else in that same timeline. This is true even if you declare a variable on frame 10 and try to use it on frame 1. For example, the following code actaully runs without error.

``java
example = 3;
var example; // this works even though the variable was declared AFTER it was used!!!
```

The key idea here, 

###Does it matter where I declare functions and variables?
No, not at all. You could declare all of your functions on the last frame of your timeline and everything would still work.

#Function Scope
The scope of variables is limited only by functions. For every new function you create, you 


Kowabunga,

Cam
