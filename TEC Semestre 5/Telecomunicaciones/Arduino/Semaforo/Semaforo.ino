void setup() {
  // initialize digital pin LED_BUILTIN as an output.
  pinMode(2, OUTPUT);
  pinMode(3, OUTPUT);
  pinMode(4, OUTPUT);
}

// the loop function runs over and over again forever
void loop() {
  rojo();
  amarillo();
  verde();
}


void rojo(){
  digitalWrite(2, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(2000);                       // wait for a second
  digitalWrite(2, LOW);    // turn the LED off by making the voltage LOW
}

void amarillo(){
  digitalWrite(3, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(500);                       // wait for a second
  digitalWrite(3, LOW);    // turn the LED off by making the voltage LOW
}

void verde(){
  digitalWrite(4, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(2000);                       // wait for a second
  digitalWrite(4, LOW);    // turn the LED off by making the voltage LOW
}