void setup() {
}

void loop() {
  for(int Dimm=0; Dimm<255; Dimm++){
    digitalWrite(3, Dimm);
    delay(1);
  }
  for(int Dimm=0; Dimm>0; Dimm=Dimm-1){
    digitalWrite(3, Dimm);
    delay(1);
  }

}
