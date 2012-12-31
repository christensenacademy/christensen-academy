#Variable Scope

In all programming languages, variables have *scope*. That is, just because you declare a variable in one part of your program doesn't mean it will exist everywhere else in your program.

**NOTE:** This discussion assumes no knowledge of how classes work in ActionScript 3 and will naturally be entirely limited to how scope applies to code you might write in frames on the timeline.

###The Timeline
In general, variables you declare in a frame on a timeline will be available anywhere else in that same timeline, even if the variable is used before it is declared. For example, the following code actaully runs without error.

```java
example = 3;
var example; // this works even though the variable was declared AFTER it was used!!!
```

The key idea here, is that the scope of the `example` variable is the entire timeline, regardless of where it is declared. If the code above were placed on frame 10, I could still use the `example` variable on frame 1.

####Movie Clip Timelines
If you find yourself writing code in frames on the timelines of movie clip symbols (not the Scene 1 timeline), realize that these variables are separate (have different scope) from the variables on the Scene 1 timeline. So, for example, if you have a variable that keeps track of a player's score on the Scene 1 timeline, you won't be able to access that variable from a movie clip timeline. Likewise, if you have a health variable declared inside a movie clip timeline, it won't be accessible from the Scene 1 timeline.

**Key Idea:** Variable are unique to each timeline.

###Function Scope
Within a timeline, we can further limit the scope of variables by placing them inside of functions.

THIS SECTION IS INCOMPLETE

Kowabunga,

Cam
