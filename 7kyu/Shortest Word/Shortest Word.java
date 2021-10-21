public class Kata {
  public static int findShort(String s) {
    String[] sArray = s.split(" ");
    int shortestWords = sArray[0].length();
    
    for (int i = 0; i < sArray.length; i++) {
      if (sArray[i].length() < shortestWords) {
        shortestWords = sArray[i].length();
      }
    }
    
    return shortestWords;
  }
}
