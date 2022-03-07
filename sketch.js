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

  
  normalMaterial();
  torus(50,15);
  

}