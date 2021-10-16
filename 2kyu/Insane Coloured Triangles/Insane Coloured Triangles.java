public class Kata {
  public static char triangle(final String row) {
    char[] arr = row.toCharArray();
    
    for (int length = arr.length; length > 1; ) {
      int n = 1;
      
      for (; 3 * n < length; n *= 3) {
        
      }
      
      for (int i = 0; i < length - n; i++) {
        arr[i] = (char) ((3 - ((arr[i] + arr[i + n]) % 3)) % 3);
      }
      
      length -= n;
    }
    
    return arr[0] == 1 ? 'R' : arr[0] == 2 ? 'G' : 'B';
  }
}
