public class Kata {
  public static boolean zeroFuel(double distanceToPump, double mpg, double fuelLeft) {
    if (fuelLeft * mpg < distanceToPump) {
      return false;
    } else {
      return true;
    }
  }
}
