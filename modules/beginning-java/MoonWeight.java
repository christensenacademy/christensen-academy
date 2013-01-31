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