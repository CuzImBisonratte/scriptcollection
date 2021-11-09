int x=1; 
void setup(){
while(x<100){ //(Das hier funktioniert!)
Serial.println(x);
x=x+1;};

while(2<5){  //(Das hier funktioniert NICHT, da 2 immer unter 5 ist!)
Serial.print(“!“);
};};

void loop(){}
