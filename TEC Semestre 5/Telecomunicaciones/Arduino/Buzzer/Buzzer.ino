const int pinBuzzer = 3;
byte salida = 10;
int btn = A0;
const int timeThreshold = 150;
volatile int ISRCounter = 0;
long startTime = 0;
int counter = 0;
int espera = 0;

void setup() {
  pinMode(btn,INPUT_PULLUP);
  attachInterrup(digitalPinToInterrupt(btn),deabounceCount,FALLING);
}

void loop() {
  if(counter != ISRCounter){
    counter = ISRCounter;
    analogWrite(pinBuzzer,salida);
    delay(espera);
    analogWrite(pinBuzzer,0);
  }
}

void deabounceCount{
  if(millis() - startTime > timeThreshold){
    ISRCounter++;
    startTime = millis();
  }

}