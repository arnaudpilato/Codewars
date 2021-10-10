public class Hello{
  public String sayHello(String [] name, String city, String state){
    String fullname = new String();
    for (int i = 0; i < name.length; i++) {
      fullname += " " + name[i];
    }
    
    return "Hello," + fullname + "! Welcome to " + city + ", " + state + "!";
  }
}
