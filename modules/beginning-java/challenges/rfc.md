#RFC (Request for Comments)

**Estimated Time:** 10 minutes

Your challenge is to figure out what the program below does and how it works. Once you understand how each line of code works, write a comment at the end of each line (or above it) explaining the purpose of that line of code.

```java
public class MoonWeight {
  public static void main(String[] args) {
    double weightOnEarth;
    weightOnEarth = 175.0;
    double earthToMoonRatio = 6.013;
    double weightOnMoon = ( weightOnEarth / earthToMoonRatio );
    System.out.println( "Welcome!" );
    System.out.println( "Did you know that if your weight on Earth is " + weightOnEarth + ", your weight on" );
    System.out.println( "the moon would be " + weightOnMoon + "!!!");
  }
}
```
