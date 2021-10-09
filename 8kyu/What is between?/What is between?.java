public class Kata {
  public static int[] between(int a, int b) {
    int number = b - a + 1;
    int[] result = new int[number];
    
    for (int i = 0; i < number; i++) {
      result[i] = a + i;
    }
    
    return result;
  }
}
