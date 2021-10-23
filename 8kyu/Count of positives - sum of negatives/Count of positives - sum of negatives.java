public class Kata {
  public static int[] countPositivesSumNegatives(int[] input) {
    if (input == null || input.length == 0) {
      return new int[] {};
    }
    int positive = 0;
    int negative = 0;
    for (int i = 0; i < input.length; i++) {
      if (input[i] > 0) {
        positive += 1;
      } else if (input[i] < 0) {
        negative += input[i];
      }
    }
    int[] newArray = new int[] {positive, negative};
    
    return newArray;
  }
}
