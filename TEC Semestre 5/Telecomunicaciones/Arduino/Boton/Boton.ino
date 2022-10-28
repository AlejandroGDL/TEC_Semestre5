const int boton=2;
const int led=4;
int val;

void setup() {
  pinMode(led,OUTPUT); //Led
  pinMode(boton, INPUT); //Botón 
}

void loop() {
  val=digitalRead(boton); //Leer Botón

  //Verifica si el botón esta precionado o encendido
  if (val==HIGH){
    digitalWrite(led,HIGH);
  } else if (val == LOW){
    digitalWrite(led,LOW);
  }
}
