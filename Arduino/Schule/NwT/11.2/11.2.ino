int i;
int j;
void setup(){
pinMode(4,INPUT_PULLUP);
}
void loop(){
  i=digitalRead(4);
  i=digitalRead(5);
  tone(9, i);
  tone(9, j);
}
