int Vdelay = 100;

void setup() {
  pinMode(1, OUTPUT);
  pinMode(2, OUTPUT);
  pinMode(3, OUTPUT);
  pinMode(4, OUTPUT);
  pinMode(5, OUTPUT);
  pinMode(6, OUTPUT);
  pinMode(7, OUTPUT);
}
void loop() {
  led1();
  led2();
  led3();
  led4();
  led5();
  led6();
  led7();
  led6();
  led5();
  led4();
  led3();
  led2();
  led1();
  //ciclo();
}

void led1(){
  digitalWrite(8, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(8, LOW);    // turn the LED off by making the voltage LOW
}
void led2(){
  digitalWrite(2, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(2, LOW);    // turn the LED off by making the voltage LOW
}
void led3(){
  digitalWrite(3, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(3, LOW);    // turn the LED off by making the voltage LOW
}
void led4(){
  digitalWrite(4, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(4, LOW);    // turn the LED off by making the voltage LOW
}
void led5(){
  digitalWrite(5, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(5, LOW);    // turn the LED off by making the voltage LOW
}
void led6(){
  digitalWrite(6, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(6, LOW);    // turn the LED off by making the voltage LOW
}
void led7(){
  digitalWrite(7, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(Vdelay);                       // wait for a second
  digitalWrite(7, LOW);    // turn the LED off by making the voltage LOW
}


/*Ciclo for para cada led*/
void ciclo(){

  //Ciclo Izquiera-Derecha
  for (int i=2;i<=9;i++){
    digitalWrite(i,HIGH);
    delay(Vdelay);
    digitalWrite(i,LOW);
  }
  //Ciclo Derecha-Izquierda
  for (int i=9;i>=2;i--){
    digitalWrite(i,HIGH);
    delay(Vdelay);
    digitalWrite(i,LOW);
  }

}