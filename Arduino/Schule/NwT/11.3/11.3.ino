int i;
void setup(){
Serial.begin(9600);
pinMode(4,INPUT_PULLUP);
}
void loop(){
  if(digitalRead(4)==HIGH)i++;
  Serial.print(i);
}
