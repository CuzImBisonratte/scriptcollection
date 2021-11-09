void setup() {
  Serial.begin(9600);
  int x = random(0,4);
  Serial.println(x);
  if(x==1){Serial.println("Schere");};
  if(x==2){Serial.println("Stein");};
  if(x==3){Serial.println("Papier");};
  
}

void loop() {}
