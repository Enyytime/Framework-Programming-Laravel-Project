<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Steve Head Pixel Art</title>
  <style>
    body { display:flex; justify-content:center; align-items:center; height:100vh; background:#333; }
    canvas { border:2px solid #555; image-rendering: pixelated; }
  </style>
</head>
<body>
<canvas id="c" width="256" height="256"></canvas>

<script>
const c = document.getElementById("c");
const ctx = c.getContext("2d");

const pixelSize = 32; // how big each "pixel" is
// Steve’s face colors (8x8 grid for example)
const colors = [
  ["#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65"],
  ["#b98d65","#b98d65","#cda37d","#cda37d","#cda37d","#cda37d","#b98d65","#b98d65"],
  ["#b98d65","#cda37d","#6d4c41","#6d4c41","#6d4c41","#6d4c41","#cda37d","#b98d65"],
  ["#b98d65","#cda37d","#6d4c41","#ffffff","#ffffff","#6d4c41","#cda37d","#b98d65"],
  ["#b98d65","#cda37d","#cda37d","#000000","#000000","#cda37d","#cda37d","#b98d65"],
  ["#b98d65","#cda37d","#cda37d","#cda37d","#cda37d","#cda37d","#cda37d","#b98d65"],
  ["#b98d65","#b98d65","#cda37d","#cda37d","#cda37d","#cda37d","#b98d65","#b98d65"],
  ["#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65","#b98d65"],
];

// draw grid
for (let y = 0; y < colors.length; y++) {
  for (let x = 0; x < colors[y].length; x++) {
    ctx.fillStyle = colors[y][x];
    ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
  }
}
</script>
</body>
</html>
