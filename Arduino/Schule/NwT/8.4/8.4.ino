int LED=9;
void setup() {
  // put your setup code here, to run once:

}

void loop() {
 for(int LED=9; LED<14; LED++){
  digitalWrite(LED, HIGH);
  delay(15);
  digitalWrite(LED, LOW);
  delay(15); 
 }
}
