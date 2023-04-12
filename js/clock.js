function setup() {
  let canvas = createCanvas(50, 50);
  clear();
  canvas.parent("clock-container");
  angleMode(DEGREES);
}

function draw() {
  // background(255);
  clear();
  translate(width / 2, height / 2);
  rotate(-90);

  let hr = hour();
  let mn = minute();
  let sc = second();

  noFill();
  // background(255);
  clear();
  stroke(0);
  strokeWeight(2);
  rectMode(CENTER);
  let squareSize = 40;
  let cornerRadius = 10;
  rect(0, 0, squareSize, squareSize, cornerRadius);

  // // Draw seconds hand
  // stroke(0, 0, 0);
  // strokeWeight(1);
  // let secondAngle = map(sc, 0, 60, 0, 360);
  // line(0, 0, cos(secondAngle) * 20, sin(secondAngle) * 20);

  // Draw minutes hand
  stroke(0, 0, 0);
  strokeWeight(3);
  let minuteAngle = map(mn, 0, 60, 0, 360);
  line(0, 0, cos(minuteAngle) * 17, sin(minuteAngle) * 17);

  // Draw hours hand
  stroke(0, 0, 0);
  strokeWeight(4);
  let hourAngle = map(hr % 12, 0, 12, 0, 360);
  line(0, 0, cos(hourAngle) * 12, sin(hourAngle) * 12);

  // Draw the center circle
  stroke(0);
  strokeWeight(4);
  point(0, 0);
}
