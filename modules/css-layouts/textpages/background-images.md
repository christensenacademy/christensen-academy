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

The `background-position` property allows you specify the position of the image within the element. You can specify one or two of the following values to indicate where you would like the image to be positioned: `left`, `right`, `top`, `center`, `bottom`. If you only specify a single value, the other value is assumed to be `center`.

```css
background-position: left bottom;
```

![](http://christensenacademy.org/modules/css-layouts/textpages/background-position-examples.png)

####[jsFiddle](http://jsfiddle.net/cameron89/6nNsJ/)

**Note:** It's possible to be much more precise with the background position property by specifying x and y values instead (e.g., `background-position: 30% 25px;`). Here's a [jsFiddle example](http://jsfiddle.net/cameron89/scgK9/) demonstrating a nifty use of this feature.

##Background Shorthand

Are you getting tired of setting all of the background properties separately? It's possible to set them all at once as follows:

```css
.ipsum {background:#222 url('lorem.png') no-repeat right top;}
```

**A word of caution:** Using the shorthand property will automatically override any other background properties you may have set. So, if you do something like `background:orange` and are confused why your background image is no longer working, you'll either want to use the `background` property to set both your image and the background color, or you should just avoid using the shorthand property.
