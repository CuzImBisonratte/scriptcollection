void setup() {
  Serial.begin(9600);
}

void smile() {
  Serial.println(";_;");
}

void cry() {
  Serial.println("(⊙x⊙;)");
}

void laugth() {
  Serial.println("o(*￣▽￣*)ブ");
}

void loop() {
  smile();
  cry();
  laugth();
  delay(1000000000);
}
