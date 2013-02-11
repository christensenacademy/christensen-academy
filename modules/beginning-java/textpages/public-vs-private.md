#Public vs. Private

One of the core concepts behind object-oriented programming is the idea of "encapsulation." If when you hear the term encapsulation you think of bundling some stuff up and putting it in a container, you're on the right track. This is essentially how classes in Java work. A bunch of instance variables and methods are bundled up and stored in a class file.

Interestingly, encapsulation also means that some of these instance variables and methods are hidden or invisible outside of the class file. When we want a variable or method to be invisible outside of the class, we use the **private** modifier. When we want a variable or method to be visible outside of the class, we use the **public** modifier.

**Note**: It turns out to that we almost never want to make instance variables public. This may seem strange at first, but it turns out to be a good idea, especially when developing large-scale software applications.

##Example
###SixSidedDie
```java
public class ChancePolyhedron {
  private int value;
  private int sides;
  private int rolls;
  private int sumOfRolls;
  private int[] frequencyArray;
  
  public ChancePolyhedron(){
    value = -1;
    sides = 6;
    rolls = 0;
    sumOfRolls = 0;
    frequencyArray = new int[sides+1];
  }
  
  public ChancePolyhedron(int sides){
    this.sides = sides;
    value = -1;
    rolls = 0;
    sumOfRolls = 0;
    frequencyArray = new int[sides+1];
  }
  
  
  public void roll(){
    value = (int)(Math.random()*sides)+1;
    updateStats();
  }
  
  private void updateStats(){
    rolls += 1;
    sumOfRolls += value;
    frequencyAray[value] += 1;
  }
  
  
}
```


![](http://christensenacademy.org/img/signature.png)
