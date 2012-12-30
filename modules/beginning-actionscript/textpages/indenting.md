#Indenting
You may have noticed how the code inside of a function is indented. The basic rule of thumb is that any time you have a code block (i.e., some code in between `{` and `}` symbols) you should indent the code inside of the block.

```
function bestSoda(soda:String):String
{
  // notice how this code is indented
  if(soda == "Mountain Dew")
  {
    // notice how this code is indented even further!
    return "Yes, indeed!";
  }
  else
  {
    return "No way! Get out of town!";
  }
}
```

**Note:** Indenting is extremely important. The only programmers who don't indent properly are those without experience who don't yet recognize the tremendous value in it. If you ignore proper indentation, you'll surely pay the price later when you make an error and your code is nearly impossible to debug.

**Note:** It's possible to write curly brackets in a slightly different manner than shown above. Either method is acceptable:
```java
// notice the placement of the opening brackets
function bestSoda(soda:String):String {
  if(soda == "Mountain Dew") {
    return "Yes, indeed!";
  }
  else {
    return "No way! Get out of town!";
  }
}
```

Kowabunga,

Cam
