int S1=4;
int S2=5;
int Sp=6;
int HZ=440;
void setup(){
  pinMode(4,INPUT_PULLUP);
  pinMode(5,INPUT_PULLUP);
  pinMode(6,OUTPUT);
  Serial.begin(9600);
}
void loop(){
  if(digitalRead(S1)==1){
    while(digitalRead(S1)==1){};
    while(digitalRead(S1)==0){};
    HZ++;
  };
  if(digitalRead(S2)==1){
    while(digitalRead(S2)==1){};
    while(digitalRead(S2)==0){};
    HZ--;
  };
  tone(Sp, HZ);
  Serial.println(HZ);
}
