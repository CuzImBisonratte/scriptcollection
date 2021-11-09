void setup(); {
Serial.begin(9600);
}
void loop {
  for(int i=0; i<10; i++){
  Serial.print(“Huhu“);
for(int u=0,u<100;u=u+1){
  Serial.print(i);
  Serial.print(“,“);
  Serial.print(u);
  }
}
