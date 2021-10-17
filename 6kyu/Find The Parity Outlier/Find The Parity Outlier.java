import java.util.ArrayList;

public class FindOutlier {
  static int find(int[] integers) {
    ArrayList<Integer> evenList = new ArrayList<>();
    ArrayList<Integer> oddList = new ArrayList<>();
    
    for (int i = 0; i < integers.length; i++) {
      if (integers[i] % 2 == 0) {
        evenList.add(integers[i]);
      } else {
        oddList.add(integers[i]);
      }
    }
    
    return (evenList.size() == 1) ? evenList.get(0) : oddList.get(0);
  }
}
