void setup(){
    pinMode(13, OUTPUT);
    pinMode(12, OUTPUT);
    pinMode(11, OUTPUT);
}

int Ro = 13;
int Ge = 12;
int Gr = 11;

void loop(){
    digitalWrite(Gr, HIGH);
    delay(1000);
    digitalWrite(Ge, HIGH);
    digitalWrite(Gr, LOW);
    delay(1000);
    digitalWrite(Ro, HIGH);
    digitalWrite(Ge, LOW);
    delay(5000);
    digitalWrite(Ge, HIGH);
    delay(1000);
    digitalWrite(Ro, LOW);
    digitalWrite(Ge, LOW);
}