public class Solution {
  public static int areaOrPerimeter (int l, int w) {
    int result = (l == w) ? l * w : ((l + w) * 2);
    
    return result;
  }
}
