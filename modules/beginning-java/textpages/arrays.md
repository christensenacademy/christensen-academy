#Arrays

Whereas a normal variable can store just a single value or object, an array can store lots of values or objects in a list. Here's how it works:

```java
// declare an array by writing its type followed by [] and a variable name
int[] numbers; // this statement declared an array of integer values called numbers

// now, initialize the array by writing the word new followed by the type and a number inside of []
numbers = new int[5]; // a new array capable of holding 5 integer values has been initialized

// The initial value of each int in the array is 0, but we can change the values.
// To access an "element" of an array, simply type the name of the array followed by [i], where i is the
// index of the element you want.
//                Element at Index: 0   1   2   3   4
//                                  0   0   0   0   0
numbers[0] = 7; //                  7   0   0   0   0
numbers[3] = -20; //                7   0   0   -20 0
numbers[1] = 10; //                 7   10  0   -20 0
numbers[5] = 3; // Runtime Error! Index out of bounds.

System.out.println( numbers[0] + numbers[1] ); // prints 17
```



![](http://christensenacademy.org/img/signature.png)
