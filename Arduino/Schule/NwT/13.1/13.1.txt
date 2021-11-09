int x=100;
void setup() {
  Serial.begin(9600);
}

void loop() {
  while(x<100){
    Serial.println(x);
    x++;
    x++;
    };
};
