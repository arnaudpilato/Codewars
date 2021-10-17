import java.util.Arrays;

public class Kata {
  public static String highAndLow(String numbers) {
    String[] arrayNumbers = numbers.split(" ");
    int[] newArray = new int[arrayNumbers.length];
    
    for (int i = 0; i < arrayNumbers.length; i++) {
      newArray[i] = Integer.parseInt(arrayNumbers[i]);
    }
    
    Arrays.sort(newArray);
                
    return "" + newArray[arrayNumbers.length - 1] + " " + newArray[0] + "";
  }
}
