public class DivisibleNb {
  public static boolean isDivisible(long n, long x, long y) {
    boolean divisible = (n % x == 0 && n % y == 0) ? true : false;
    
    return divisible;
  }
}
