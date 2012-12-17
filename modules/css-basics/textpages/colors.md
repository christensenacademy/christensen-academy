#Colors
There are three ways of specifying colors in CSS. Each method has it's own benefits and drawbacks.

**Note:** Regardless of the way you specify colors in CSS, your browser interprets them in terms of varying levels of [RGB](http://en.wikipedia.org/wiki/SRGB) in order to display them on your screen.

##Color Names
You can specify colors in CSS using color names.
```css
p {color:green;}
```

###Drawbacks
* There are a very [limited number color names a browser knows about](http://en.wikipedia.org/wiki/Web_colors#HTML_color_names).

###Benefits
* Easy to remember
* Useful when quickly prototyping the design of a site

##RGB Function
In the following example, three values are given, each of which can range in value from 0 to 255. 
```css
/*20 red, 123 green, and 97 blue*/
p {color:rgb(20,123,97)}
```

**Note:** Make sure not to have a space in between `rgb` and `(x,y,z)`.
**Note:** 255 for each value makes white. 0 for each value makes black. The same number for each value makes a shade of gray.

###Drawbacks
* The syntax is more verbose and takes longer to write.
* Unless you have an incredible ability to predict what colors will look like based on the amount of red, green, and blue they have, this syntax isn't all that useful.

###Benefits
* It is more human-readable than hexadecimal color codes are.

##Hexadecimal Codes
Colors can be specified using a sequence of six characters that are either the digits 0-9 or the letters a-f. Here are some examples:
```css
p {color:#770060;} /*dark magenta*/
p {color:#99EE6B;} /*light green*/
p {color:#FFEF00;} /*briht, saturated yellow*/
```

**Note:** You should realize that these codes work on the same RGB color model, and if you understand how hexadecimal numbers work, you'll realize that this way of specifying CSS is exactly the same as using the `rgb(x,y,z)` function. Basically, the first two characters specify the amount of red, the middle two specify the amount of green, and the last two specify the amount of blue.

####Drawbacks
* Unless you have a very strong understanding of hexadecimal numbers, the codes themselves will not make any sense.

###Benefits
* The codes are short, and unlike the `rgb(x,y,z)` function, they are easy to copy and paste.
* There are plenty of great online tools for finding colors and creating color schemes that will give you the hexadecimal codes. If you can actually see the color, you don't really need to know what the hexadecimal digits stand for anyway.