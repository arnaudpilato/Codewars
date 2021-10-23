public class Kata{
  public static double find_average(int[] array){
    double length = 0;
    if (array.length == 0) {
      return 0;
    } else {
      for (int i = 0; i < array.length; i++) {
        length += array[i];
      }
      
      return length / array.length;
    }
  }
}
