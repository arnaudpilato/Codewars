public class SquareDigit {
  public static int squareDigits(int n) {
    String[] arrayNumbers = Integer.toString(n).split("");
    String result = "";
    
    for (int i = 0; i < arrayNumbers.length; i++) {
      int number = Integer.parseInt(arrayNumbers[i]);
      result += number * number;
    }
    
    return Integer.parseInt(result);
  }
}
