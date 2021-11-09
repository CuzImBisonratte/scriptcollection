void setup() {
}

void loop() {
  for(int a=100; a<500; a=a+1){
    tone(11, a)
    delay(1)
  }
  for(int a=a; a>100; a=a+1){
    tone(11, a)
    delay(1)
  }

}
