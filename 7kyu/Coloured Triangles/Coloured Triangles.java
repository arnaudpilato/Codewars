public class Kata {
  public static char triangle(final String row) {
    String result = row;
    char[] possibleChar = {'R', 'G', 'B'};
    
    while (recurs(result).length()>0) {
      result = recurs(result);
    }
    
    return result.charAt(0);
  }
  
  public static String recurs(String row2) {
    int size = row2.length()-1;
    char[] result = new char[size];
    
    for (int i = 0; i<(size); i++) {
      if (row2.charAt(i) == row2.charAt(i+1)) {
        result[i] = row2.charAt(i);
      } else if ((row2.charAt(i) == 'R' && row2.charAt(i+1) == 'G') || (row2.charAt(i) == 'G' && row2.charAt(i+1) == 'R')) {
        result[i] = 'B';
      } else if ((row2.charAt(i) == 'G' && row2.charAt(i+1) == 'B') || (row2.charAt(i) == 'B' && row2.charAt(i+1) == 'G')) {
        result[i] = 'R';
      } else if ((row2.charAt(i) == 'R' && row2.charAt(i+1) == 'B') || (row2.charAt(i) == 'B' && row2.charAt(i+1) == 'R')) {
        result[i] = 'G';
      }
    }
    
    String ren = "";
    for (char letters : result) {
      ren = ren + letters;
    }
    
    return ren;
  }
}
