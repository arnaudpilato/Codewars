public class RepeatIt {
  public static String repeatString(final Object toRepeat, final int n) {
    String repeat = "";
    if (toRepeat instanceof String) {
      for (int i = 0; i < n; i++) {
        if (toRepeat instanceof String) {
          repeat += toRepeat;
        }
      }
      
      return repeat;
    } else {
      
      return "Not a string";
    }
  }
}
