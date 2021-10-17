import java.util.ArrayList;

public class Kata {
  public static int[] digitize(long n) {
    ArrayList<Long> numberList = new ArrayList();
    long iterator = n;
    
    while (iterator > 0) {
      numberList.add(iterator % 10);
      iterator /= 10;
    }
    
    int[] finalArray = new int[numberList.size()];
    
    for (int i = 0; i < numberList.size(); i++) {
      finalArray[i] = Math.toIntExact(numberList.get(i));
    }
    
    return finalArray;
  }
}
