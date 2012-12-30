#Coding Conventions
##camelCase and UpperCamelCase
###camelCase
When naming instances, variables, and functions in ActionScript, you should use what's called "camel case", or, as I like to write it, camelCase. In camelCase, there are no spaces all characters are lower case except for the first letters of words after the first. Notice how the capital letters add "humps" like a camel to the names. Here are some examples:
```
missile
flower
badGuy
redHat
smallHammer
fryingPan
flyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make names for your instance, variable, and function names descriptive. It's a bad idea to give names that are hard to remember or confusing.

###UpperCamelCase
When creating linkage names for symbols, you should follow the UpperCamelCase naming convention. Here are some examples:
```
Missile
Flower
BadGuy
RedHat
SmallHammer
FryingPan
FlyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make your linkage names descriptive. If the symbol is a picture of a hammer, you should probably name it "Hammer".

##Semicolons
Semicolons go at the end of most lines of code. The only exception to this rule is for lines of code that come just before blocks of code (i.e., code in between `{` and `}` symbols), such as those used for functions, if statemetns, and other control structures.

**Note:** Each line of code that ends in a semicolon is technically called a *statement*.

**Note:** In ActionScript 3.0, most of the time your program will still work even if you forget semicolons. This seems silly to me. Why would the language technically require something then not strictly enforce it? As good practice, don't leave off the semicolons. There are a few edge cases where this will cause your code not to work.

##Indenting
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

Kowabunga,

Cam
