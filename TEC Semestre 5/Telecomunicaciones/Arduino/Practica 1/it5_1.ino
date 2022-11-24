#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include <Servo.h>

#ifndef STASSID
#define STASSID "Students"
#define STAPSK  "alumnosITPA"
#endif

const char* ssid = STASSID;
const char* password = STAPSK;

ESP8266WebServer server(80);

//Pin Led
const int led_red = 13; //D7

//Variable Servo
Servo servo;

//Variable Motor
const int Motor = 16;

void handleRoot() {
  server.send(200, "text/plain", "HOLA IT5!\r\n");
}

void handleNotFound() {
  String message = "Escribiste mal el Link :p \n\n";
  message += "URI: ";
  message += server.uri();
  message += "\nMethod: ";
  message += (server.method() == HTTP_GET) ? "GET" : "POST";
  message += "\nArguments: ";
  message += server.args();
  message += "\n";
  for (uint8_t i = 0; i < server.args(); i++) {
    message += " " + server.argName(i) + ": " + server.arg(i) + "\n";
  }
  server.send(404, "text/plain", message);
}

void setup(void) {
  pinMode(led_red, OUTPUT);
  Serial.begin(115200);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  Serial.println("");

  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());

  if (MDNS.begin("esp8266")) {
    Serial.println("MDNS responder started");
  }
  server.on("/", handleRoot);

    //Código ENCENDIO y APAGADO *LED*
  server.on("/led_1_on", []() {
    digitalWrite(led_red,HIGH); //Encender LED
    server.send(200, "text/plain", "Led 1 Encendido!"); //Mensaje para el usuario
  });
   server.on("/led_1_off", []() {
    digitalWrite(led_red,LOW); //Apagar LED
    server.send(200, "text/plain", "Led 1 Apagado!"); //Mensaje para el usuario
  });

  //Sermovotor Código
  servo.attach(5); //Pin al cual esta conectado D1
  servo.write(0); //Iniciar servo Apagado
  //Código ENCENDIO y APAGADO *SERVO MOTOR*
  server.on("/servo_on", []() {
    servo.write(180); //Girar 180 Grados
    server.send(200, "text/plain", "Servo Encendido!"); //Mensaje para el usuario
  });
   server.on("/servo_off", []() {
    servo.write(0); //Girar a 0 Grados (Regresa a su posición Original)
    server.send(200, "text/plain", "Servo Apagado!"); //Mensaje para el usuario
  });

  //Motor 
  pinMode(Motor,OUTPUT); //Inicializar Motor Salida
  digitalWrite(Motor,HIGH); //Apagar Motor al iniciar
  //Código ENCENDIO y APAGADO *MOTOR*
  server.on("/motor_on", []() {
    digitalWrite(Motor,LOW); //Encender Motor
    server.send(200, "text/plain", "Motor Encendido!"); //Mensaje para el usuario
  });
   server.on("/motor_off", []() {
    digitalWrite(Motor,HIGH); //Apagar Motor
    server.send(200, "text/plain", "Motor Apagado!"); //Mensaje para el usuario
  });

  server.onNotFound(handleNotFound);
  server.begin();
  Serial.println("HTTP server started");
}

void loop(void) {
  server.handleClient();
  MDNS.update();
}
