public class XO {
  public static boolean getXO (String str) {
    char[] strArray = str.toLowerCase().toCharArray();
    int x = 0;
    int o = 0;
    
    for (int i = 0; i < strArray.length; i++) {
      if (strArray[i] == 'x') {
        x += 1;
      } else if (strArray[i] == 'o') {
        o += 1;
      }
    }
    
    return (x == o) ? true : false;
    }
}
