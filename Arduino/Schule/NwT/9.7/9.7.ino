int Red = 5;
int Green = 4;
int Blue = 3;
int R;
int G;
int B;


void setup() {}

void loop() {
  for(int R = 0; R < 256; R++){
    analogWrite(Red, R);
  }
  for(int G = 0; G < 256; G++){
    analogWrite(Green, G);
  }
  for(int B = 0; B < 256; B++){
    analogWrite(Blue, B);
  }
  for(int G = G; G > 0; G++){
    analogWrite(Green, G);
  }
  for(int R = R; R > 0; R++){
    analogWrite(Red, G);
  }
  for(int B = B; B > 0; B++){
    analogWrite(Blue, B);
  }
  
}
