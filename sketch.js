var cam;
var log;

function preload() {
  log = loadImage('images/log.png');
}

function setup() {
  createCanvas(400, 400,WEBGL);
  camera = createCamera();
  normalMaterial();
}

function draw() {
  background(220);
  orbitControl(5,5);
  push();
  translate(0,0,50);
  rotateZ(frameCount * 0.3);
  //texture(log);
  box(75,75,300);
  pop();
  
  normalMaterial();
  torus(50,15);
  
  push();
  translate(170,0,0);
  ellipse(0,0,200,400);
  pop();
  
  push();
  translate(-170,0,0);
  ellipse(0,0,200,400);
  pop();
}