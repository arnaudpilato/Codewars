public class Sum {
  public static int arrayPlusArray(int[] arr1, int[] arr2) {
    int sum = 0;
    for (int array1 : arr1) {
      sum += array1;
    }
    
    for (int array2 : arr2) {
      sum += array2;
    }
    
    return sum;
  }
}
