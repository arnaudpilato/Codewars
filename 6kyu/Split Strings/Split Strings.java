public class StringSplit {
  public static String[] solution(String s) {
    String[] stringArray = (s.length() % 2 == 0) ? new String[s.length() / 2] : new String[(s.length() + 1) / 2];
    int iterator = 0;
    
    if (s.length() % 2 == 0) {
      for (int i = 0; i < stringArray.length; i++) {
        stringArray[i] = s.substring(iterator, iterator + 2);
        iterator += 2;
      }
    } else {
      for (int i = 0; i < stringArray.length - 1; i++) {
        stringArray[i] = s.substring(iterator, iterator + 2);
        iterator += 2;
      }
      
      stringArray[stringArray.length - 1] = s.substring(s.length() - 1) + "_";
    }
    
    return stringArray;
  }
}
