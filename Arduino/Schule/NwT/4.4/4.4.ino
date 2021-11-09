void setup(){
    pinMode(13, OUTPUT);
    digitalWrite(13, HIGH);
}

void loop(){
    delay(400);
    digitalWrite(13, LOW);
    delay(200);
    digitalWrite(13, HIGH);
    delay(300);
}