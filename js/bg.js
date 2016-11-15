const { context, canvas } = Vas.initialize();

context.strokeStyle = 'white';
context.lineWidth = 2;

const numLayers = 20;
const layerDistance = 5;
const pointDistance = 5;
const numPoints = 500;

let X = (new Array(numPoints)).fill(0);
let Y = X.map((x,i) => i * pointDistance);
const lines = (new Array(numLayers))
  .fill(true).map((z,i) => i * layerDistance);

const nextX = (x0, i, X) => (
  x0 // previous value
  + 0.5 * i // skew to the bottom-right
  + (i * 0.1) * Math.random() // increase noise as you move down
);

const draw = (next) => {
  lines.forEach((l, i) => {
    context.moveTo(l, Y[0]);
    X = X.map(nextX);
    X.forEach((x, i) => 
      context.lineTo(l + X[i], Y[i])
    );
    context.stroke();
  });
}
Vas.animate(draw);

