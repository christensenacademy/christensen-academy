#While Loops
At the top of each while loop is a condition. As long as the condition is true, the code in the loop will execute one more time.

###Example 1
```java
var counter:Number = 0;
while( counter < 10 ){
  trace(counter);
  counter++; // same as doing counter = counter + 1 or counter += 1
}
trace("finished");
```
#####Output
```
0
1
2
3
4
5
6
7
8
9
finished
```

###Example 2 (can you spot the difference from example 1?)
```java
var counter:Number = 0;
while( counter < 10 ){
  counter++;
  trace(counter);
}
trace("finished");
```
#####Output
```
1
2
3
4
5
6
7
8
9
10
finished
```

###Example 3 (can you spot the two differences from examples 1 and 2?)
```java
var counter:Number = 0;
while( counter <= 10 ){
  trace(counter);
  counter = counter + 2
}
trace("finished");
```
#####Output
```
0
2
4
6
8
10
finished
```

###Infinite Loop
```java
var counter:Number = 1;
while( counter <= 10 ){
  trace(counter);
}
trace("finished");
```
#####Output
```
1
1
1
...
```

###More Complex While Loop
```java
// for finding the smallest perfect square under 300
var counter:Number = 1;
var perfectSquare:Number = counter*counter;
while(perfectSquare < 300){
  trace(perfectSquare);
  counter++;
  perfectSquare = counter*counter;
}
```
#####Output
```
1
4
9
16
25
36
49
64
81
100
121
144
169
196
225
256
289
```

Kowabunga,

Cam
