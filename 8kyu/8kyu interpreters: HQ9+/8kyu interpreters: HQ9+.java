public class HQ {
  public static String HQ9(char code) {
    if (code == 'H') {
      return "Hello World!";
    }
    
    if (code == 'Q') {
      return "Q";
    }

    if (code == '9') {
      String lyrics = "";
      
      for (int i = 99; i > 2; i--) {
          lyrics += i + " bottles of beer on the wall, " + i + " bottles of beer.\n";
          lyrics += "Take one down and pass it around, " + (i - 1) + " bottles of beer on the wall.\n";
      }
      
      lyrics += "2 bottles of beer on the wall, 2 bottles of beer.\n";
      lyrics += "Take one down and pass it around, 1 bottle of beer on the wall.\n";
      lyrics += "1 bottle of beer on the wall, 1 bottle of beer.\n";
      lyrics += "Take one down and pass it around, no more bottles of beer on the wall.\n";
      lyrics += "No more bottles of beer on the wall, no more bottles of beer.\n";
      lyrics += "Go to the store and buy some more, 99 bottles of beer on the wall.";

      return lyrics;
    }
    
    return null;
  }
}
