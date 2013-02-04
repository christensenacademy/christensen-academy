#Math Expressions Challenge

**Estimated Time:** 30 minutes

Before running the following program, your challenge is to predict the output using your knowledge of math expressions in Java. Watch out for tricky concepts like trucation, implicit conversion from ints to doubles, order of operations, and casting.

Then, once you've made your predictions--I recommend recording them in comments at the end of each line of code--simply run the program and see how well you did. Make sure to take time going over any problems you missed. It will be well worth your time to clear up any confusion before moving on to the next challenge.

```java
public class MathExpressions {
  public static void main(String[] args){
    // Before running this program, write out your predictions for each expression.
    System.out.println(3+4*2);
    System.out.println( (3+4)*2);
    System.out.println( (15/(3+4))*5.0);
    System.out.println(3+4-5);
    System.out.println(3+4*5);
    System.out.println( (3+4*5) );
    System.out.println(8/(2+4) );
    System.out.println(8/3+4.2);
    System.out.println(10-5-6-2);
    System.out.println( (14+9)/(3+2) );
    System.out.println(14+9/3+2);
    System.out.println(18%3*5);
    System.out.println(3+5*-3);
    System.out.println(5.2%2+1);
    System.out.println( (int)5.2%2+1);
    System.out.println( (double)5/(double)2+1);
    System.out.println( (double)(5/2)+1);
    
    int myFirstInt = 3;
    int mySecondInt = 7;
    double myFirstDouble = 2.5;
    double mySecondDouble = 6.0;
    
    System.out.println(myFirstInt+mySecondInt/myFirstInt);
    System.out.println(myFirstInt+mySecondInt/myFirstDouble);
    System.out.println(myFirstInt+mySecondInt/(int)myFirstDouble);
    System.out.println( (int)(mySecondDouble%myFirstDouble)-2 );
    System.out.println( (int)mySecondDouble/mySecondInt);
  }
}
```
