#Arrays
Arrays are for storing a collection of objects in an ordered sequence. The following example uses an array to store a bunch of instances of movie clips.

```java
var myBadGuys:Array; // declare a new array
myBadGuys = new Array(); // create a new array object and assign in to the badGuys variable

// add an element to the array--this example assumes a movie clip in the Library has a linkage name BadGuy
myBadGuys.push(new BadGuy); // add (push) an element onto the array.
myBadGuys.push(new BadGuy); // add another element

/* note: arrays store elements in positions starting at position 0, so myBadGuys now has an element at
  position 0 and another element at position 1. We can access each element by typing myBadGuys[i] where i
  is the position of the element we want. */

myBadGuys[0].x = 100; // assigns 100 to the x-value of the first movie clip in the array
myBadGuys[1].x = 200; // same as the previous line but this time for the second movie clip in the array

/* It's often useful to do something to each element in an array. In the following example, we're adding each
   movie clip in the array to the display stack so that our movie clips will actually appear on the screen.
   What's cool about this code is that it works regardless of the number of elements in the array.*/
for(var i:Number = 0; i < myBadGuys.length; i++){
  addChild(myBadGuys[i]);
}
```

For the official documentation of Arrays in ActionScript 3.0, go to the [official reference page](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/Array.html);

Kowabunga,

Cam
