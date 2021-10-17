public class SpinWords {
  public static String spinWords(String sentence) {
    String[] strings = sentence.split(" ");
    String string = "";
    
    for (int i = 0; i < strings.length; i++) {
      if (strings[i].length() >= 5) {
        StringBuilder stringBuilder = new StringBuilder(strings[i]);
        strings[i] = stringBuilder.reverse().toString();
        string += (i == strings.length - 1) ? strings[i] : strings[i] + " ";
      } else {
        strings[i] = strings[i];
        string += (i == strings.length - 1) ? strings[i] : strings[i] + " ";
      }
    }
    
    return string;
  }
}
