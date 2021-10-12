class Kata {
  static String greet(String name, String owner) {
    String message = (name.equals(owner)) ? "Hello boss" : "Hello guest";
    
    return message;
  }
}
