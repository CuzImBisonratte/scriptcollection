void setup(){
  pinMode(4,INPUT_PULLUP);
  Serial.begin(9600);
}
void loop(){
  while(digitalRead(4)==1){}
  Serial.print(“von jetzt“);
  while(digitalRead(4)==0){}
  Serial.print(“ bis jetzt“);
}

//Sie berwirken, dass gewartet wird, bis der Knopf nicht mehr gedrückt ist
