function describeAge(age) {
  let $s = (age<13)?"kid":(age<18)?"teenager":(age<65)?"adult":"elderly";
  
  return "You're a(n) " + $s;
}
