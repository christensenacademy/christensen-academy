#Boolean Expressions Challenge

**Estimated Time:** 25 minutes, assuming you already have some familiarity with how boolean expressions work.

Before running the following program, your challenge is to predict the output using your knowledge of boolean expressions in Java. Each expression will evaluate to either `true` or `false`.

Then, once you've recorded your predictions--make sure you take time to actually write them down--simply run the program and see how well you did. Take time going over any problems you missed.

Lastly, take a few minutes to experiment and play around with different values in some of these expressions. This is often the best way to learn and really make sure you've understood the concepts.

```java
public class BooleanExpressions {
  public static void main(String[] args){
    int x = 3;
    int y = 7;
    String s = "Hello";
    
    // Before running this program, write out your predictions for each expression.
    // Note: I recommend writing out your solution step by step for difficult problems as follows:
    //       x==y || (3<4 && y==7)
    //       x==y || (true && true)
    //       x==y || true
    //       true || true
    //       true
    System.out.println( 3<7 );
    System.out.println( x<y );
    System.out.println( x==y );
    System.out.println( x=3 ); // Watch out! This is not a boolean expression!
    System.out.println( s.equals("hello") );
    System.out.println( y<=7 );
    System.out.println( y!=3 );
    System.out.println( !(y==7) );
    System.out.println( x==5 || y==7 );
    System.out.println( x==5 && y==7 );
    System.out.println( x==3 || y==7 );
    System.out.println( x==3 && y==7 );
    System.out.println( x==1 && y==10 );
    System.out.println( (x==1 && y==10) || y<10 );
    System.out.println( (x==1 && y==10) && y<10 );
    System.out.println( !(x==1 && y==10) && y<10 );
    System.out.println( x==3 && y==7 && s.equals("Hello") );
    System.out.println( x==3 && y==7 || s.equals("Goodbye") );
  }
}
```

##Portfolio
Make sure you save your file as `BooleanExpressions.java` in a folder with the rest of your challenges for this module.