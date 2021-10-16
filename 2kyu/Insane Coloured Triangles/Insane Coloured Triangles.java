import java.util.*;

public class Kata {
  private static final int[][] arr = {{1,0,0},{1,1,0},{1,2,1}};
  
  public static char triangle(final String row) {
    int n = row.length()-1;
    String n3 = Integer.toString(n,3);
    CharCounter counter = new CharCounter();
    
    for (int m = 0; m <= n; m++) {
      int prod = 1;
      String m3 = Integer.toString(m,3);
      
      for(int i = 0; i < m3.length(); i++){
        int mdigit = Character.getNumericValue(m3.charAt(m3.length()-i-1));
        int ndigit = Character.getNumericValue(n3.charAt(n3.length()-i-1));
        prod *= arr[ndigit][mdigit];
        
        if (prod == 0) break;
      }
      
      if (prod != 0)
        counter.add(row.charAt(m), prod % 3);
    }
    
    return counter.getUnique();
  }
}

class CharCounter {
  private Map<Character,Integer> chars; 
  {
    chars = new HashMap<>();
    chars.put('R',0);
    chars.put('G',0);
    chars.put('B',0);
  }
  
  public void add (char ch, int n){
    chars.put(ch, chars.get(ch) + n);
  }
  
  public char getUnique(){
    int uniqueCount = 0;
    
    for (char ch: chars.keySet()){
      int simplifiedCount = chars.get(ch) % 3;
      uniqueCount ^= simplifiedCount;
      chars.put(ch,simplifiedCount);
    }
    
    for (char ch: chars.keySet()){
      if (chars.get(ch) == uniqueCount) return ch;
    }
    
    return '0';
  }
} 
