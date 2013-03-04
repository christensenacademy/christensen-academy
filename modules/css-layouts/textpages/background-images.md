#Background Images
You can get a background image to display by using the `background-image` CSS property. The value for this property is essentially just the path to the image file you want to use, though you have to remember to place the path inside of the quotes in `url("")`.

```css
background-image: url("lorem.png");
```

![](http://christensenacademy.org/modules/css-layouts/textpages/background-image-example.png)

####[jsFiddle](http://jsfiddle.net/cameron89/6nNsJ/)

##Background Repeat

The `background-repeat` property has four main values: `no-repeat`, `repeat-x`, `repeat-y`, and `repeat`. The intitial (default) value is `repeat`. Example: `background-repeat: no-repeat;`.

![](http://christensenacademy.org/modules/css-layouts/textpages/background-repeat-examples.png)

####[jsFiddle](http://jsfiddle.net/cameron89/TVqre/)

###Creating a Gradient

![](http://christensenacademy.org/modules/css-layouts/textpages/gradient.png)

Consider what would happen if you had a tall, narrow image, such as the one above, and you used `background-repeat:repeat-x`. You might get something similar to this:

![](http://christensenacademy.org/modules/css-layouts/textpages/background-gradient-1.png)

Further consider what this would look like if we could specify a background color that exactly matched the bottom of the gradient. This is actually a frequently-used clever trick.

![](http://christensenacademy.org/modules/css-layouts/textpages/background-gradient-2.png)

####[jsFiddle](http://jsfiddle.net/cameron89/RByUP/)

##Background Position

The `background-position` property allows you to alter where

##Background Attachment

##Background Shorthand
