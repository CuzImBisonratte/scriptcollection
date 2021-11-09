long m;
void setup() {
Serial.begin(9600);
}

void loop() {
  m=millis();
  Serial.println(m);
}


//Ergebniss: (ca. 7,363636 MS = 5 Stellen geschrieben)
//17:44:11.634 -> 15290 (Bis zur nächsten zahl 7 MS)
//17:44:11.634 -> 15297 (Bis zur nächsten zahl 8 MS) 
//17:44:11.634 -> 15305 (Bis zur nächsten zahl 7 MS)
//17:44:11.680 -> 15312 (Bis zur nächsten zahl 8 MS)
//17:44:11.680 -> 15320 (Bis zur nächsten zahl 7 MS)
//17:44:11.680 -> 15327 (Bis zur nächsten zahl 7 MS)
//17:44:11.680 -> 15334 (Bis zur nächsten zahl 7 MS)
//17:44:11.680 -> 15341 (Bis zur nächsten zahl 7 MS)
//17:44:11.680 -> 15348 (Bis zur nächsten zahl 7 MS)
//17:44:11.726 -> 15355 (Bis zur nächsten zahl 8 MS)
//17:44:11.726 -> 15363 (Bis zur nächsten zahl 8 MS)
//17:44:11.726 -> ⸮
