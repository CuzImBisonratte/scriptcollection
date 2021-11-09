void setup(){
    pinMode(13, OUTPUT);
}

void loop(){
    digitalWrite(13, HIGH);
    delay(15);
    digitalWrite(13, LOW);
    delay(15);
}


// Ab einer Pausenzeit von 15ms kann das Menschliche Auge keinen Unterschied mehr erkennen.