public class XOR {
  public static boolean xor(boolean a, boolean b) {
    boolean result;
    result = ((a == false && b == false) || (a == true && b == true)) ? false : true;
    result = ((a == true && b == false) || (a == false  && b == true)) ? true : false;
    
    return result;
  }
}
