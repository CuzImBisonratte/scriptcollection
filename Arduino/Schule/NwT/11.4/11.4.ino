void setup(){
  pinMode(4,INPUT_PULLUP);
  Serial.begin(9600);
}
void loop(){
  while(digitalRead(4)==1){}
  while(digitalRead(4)==0){}
  int T++;
  Serial.print(T);
}
