public class Kata {
  public static String leo(final int oscar) {
    if (oscar < 86 || oscar == 87) {
      return  "When will you give Leo an Oscar?";
    }
    
    if (oscar == 86) {
      return "Not even for Wolf of wallstreet?!";
    }
    
    if (oscar == 88) {
      return "Leo finally won the oscar! Leo is happy";
    }
    
    if (oscar > 88) {
      return "Leo got one already!";
    }
    
    return null;
  }
}
