int i;
void setup(){
pinMode(4,INPUT_PULLUP);
Serial.begin(9600);
}
void loop(){
i=digitalRead(4);
Serial.println(i);
}
//Nope, andersrum
