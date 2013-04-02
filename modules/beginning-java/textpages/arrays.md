#Arrays

Whereas a normal variable can store just a single value or object, an array can store lots of values or objects in a list. Here's how it works:

```java
// declare an array by writing its type followed by [] and a variable name
int[] numbers; // this statement declared an array of integer values called numbers

// now, initialize the array by writing the word new followed by the type and a number inside of []
numbers = new int[5]; // a new array capable of holding 5 integer values has been initialized

// The initial value of each int in the array is 0, but we can change the values.
// To access an "element" of an array, simply type the name of the array followed by [i], where i is the
// index of the element you want. Index values start at 0 and go to length-1.
//                           Index:       0   1   2   3   4  (NOTICE: numbers.length==5 yet last index is 4)
                                      // [0,  0,  0,  0,  0]
numbers[0] = 7;                       // [7,  0,  0,  0,  0]
numbers[3] = -20;                     // [7,  0,  0, -20, 0]
numbers[1] = 10;                      // [7, 10,  0, -20, 0]
numbers[2] = numbers[0] + numbers[1]; // [7, 10, 17, -20, 0] 
numbers[5] = 3;                       // Runtime Error! Index out of bounds. 
numbers[-1] = 3;                      // Runtime Error! Index out of bounds.
```

**Note:** There are 5 elements in the array in the example above, but since the indexes for the elements start at 0, the fifth index is actually a 4.

##Iterating Over an Array

Although you create new arrays using the `new` operator, arrays are not objects and do not have methods. However, arrays do have a length property, which stores the number of elements in the array. To access this property, simply type `numbers.length` wehere `numbers` is the name of the array. Notice that length does not have `()` at the end of it. Length is not a method of an array (arrays aren't objects); length is a property.

In the example above, `numbers.length == 5`. It's important to note that the length of an array is fixed and cannot change after it has been created. This can be problematic when you're not sure how many things your array will need to store. If you feel like you need something that works like an array but is able to automatically adjust its size, you may be interested in Java's `ArrayList` class.

###For Loop

##Why Arrays are Awesome
Save you work...

![](http://christensenacademy.org/img/signature.png)
