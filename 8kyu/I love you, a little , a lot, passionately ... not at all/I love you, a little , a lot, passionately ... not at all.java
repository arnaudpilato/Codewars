public class Sid {
  public static String howMuchILoveYou(int nb_petals) {
    String[] message = {"I love you", "a little", "a lot", "passionately", "madly", "not at all"};
    
    return message[(nb_petals -1) % message.length];
  }
}
