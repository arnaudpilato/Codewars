public class Square {    
  public static boolean isSquare(int n) {        
    int squareNumber = (int) Math.sqrt(n);
    return (squareNumber * squareNumber == n) ? true : false;
  }
}
