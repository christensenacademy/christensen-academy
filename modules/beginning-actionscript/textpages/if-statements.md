#If Statements
###if and else
```java
var health:Number = 10; 
var hit1:Number = Math.random()*6; // random number between 0 and 6
var hit2:Number = Math.random()*6;

health = health - hit1 - hit2;
if( health < 1 ){ // Every if statement needs a boolean expression for a condition
  trace("Game Over"); // This happens if the condition is true;
} else { 
  trace("You have " + health + " health remaining."); // This happens if the condition is false
}
```
###else if
```java
// assume a Number variable called "score" exists and contains a value 0-100
if( score >= 90 ){
  trace("A");
} else if( score >= 80 ){ // only if the score was not greater than 90 will we check if it is greater than 80
  trace("B");
} else if( score >= 70 ){
  trace("C");
} else if( score >= 60 ){
  trace("D");
} else { // this only happens if all of the other conditions evaluate to false
  trace ("Failure");
}
```

Kowabunga,

Cam
