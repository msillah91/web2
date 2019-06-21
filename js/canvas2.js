var c = document.getElementById("c1");
var ctx = c.getContext("2d");
var cw = c.width = 1350;
var ch = c.height = 250;
var cx = cw / 2,
  cy = ch / 2;
var rad = Math.PI / 180;
var w = 1350;
var h = 200;
var amplitude = h;
var frequency = .01;
var phi = 0;
var frames = 0;
var stopped = true;
//ctx.strokeStyle = "Cornsilk";
ctx.lineWidth = 4;

function Draw() {
  frames++
  phi = frames / 30;

  ctx.clearRect(0, 0, cw, ch);
  ctx.beginPath();
  ctx.strokeStyle = "hsl(" + frames + ",100%,50%)";
  ctx.moveTo(0, ch);
  for (var x = 0; x < w; x++) {
    y = Math.sin(x * frequency + phi) * amplitude / 2 + amplitude / 2;
    //y = Math.cos(x * frequency + phi) * amplitude / 2 + amplitude / 2;
    ctx.lineTo(x, y + 40); // 40 = offset

  }
  ctx.lineTo(w, ch);
  ctx.lineTo(0, ch);
  ctx.stroke();
  requestId = window.requestAnimationFrame(Draw);
}
requestId = window.requestAnimationFrame(Draw);