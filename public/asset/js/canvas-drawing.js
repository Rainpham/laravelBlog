// JavaScript for drawing on canvas
// applying colors + three triangles

function draw() {
  // canvas with id="myCanvas"
  var canvas = document.getElementById('myCanvas01');
  if (canvas.getContext) {
    var ctx = canvas.getContext('2d');
    ctx.beginPath(); // note usage below 
	//triangle
    ctx.fillStyle = "#eee";
    ctx.moveTo(1000, 0); // pick up "pen," reposition at 500 (horiz), 0 (vert)
    ctx.lineTo(0, 69); // draw straight down by 200px (200 + 200)
    ctx.lineTo(2000, 69); // draw up toward left (100 less than 300, so left)
    ctx.fill(); // connect and fill

  }
	
  var canvas = document.getElementById('myCanvas02');
  if (canvas.getContext) {
    var ctx2 = canvas.getContext('2d');
    ctx2.beginPath(); // note usage below 
	//triangle
    ctx2.fillStyle = "#eee";
    ctx2.moveTo(1000, 69); // pick up "pen," reposition at 500 (horiz), 0 (vert)
    ctx2.lineTo(69, 0); // draw straight down by 200px (200 + 200)
    ctx2.lineTo(2000, 0); // draw up toward left (100 less than 300, so left)
    ctx2.fill(); // connect and fill

  }
	
  var canvas = document.getElementById('myCanvas03');
  if (canvas.getContext) {
    var ctx3 = canvas.getContext('2d');
    ctx3.beginPath(); // note usage below 
	//triangle
    ctx3.fillStyle = "#eee";
    ctx3.moveTo(1000, 0); // pick up "pen," reposition at 500 (horiz), 0 (vert)
    ctx3.lineTo(0, 69); // draw straight down by 200px (200 + 200)
    ctx3.lineTo(2000, 69); // draw up toward left (100 less than 300, so left)
    ctx3.fill(); // connect and fill

  }
	
  var canvas = document.getElementById('myCanvas04');
  if (canvas.getContext) {
    var ctx4 = canvas.getContext('2d');
    ctx4.beginPath(); // note usage below 
	//triangle
    ctx4.fillStyle = "#1b1d1f";
	ctx4.moveTo(0,0);
    ctx4.lineTo(1000,0);
    ctx4.lineTo(850,200);
    ctx4.lineTo(0,200);
    ctx4.closePath();
    ctx4.fill(); // connect and fill

  }
	
  var canvas = document.getElementById('myCanvas05');
  if (canvas.getContext) {
    var ctx5 = canvas.getContext('2d');
    ctx5.beginPath(); // note usage below 
	//triangle
    ctx5.fillStyle = "#1ba6d4";
	ctx5.moveTo(0,0);
    ctx5.lineTo(300,0);
    ctx5.lineTo(100,200);
    ctx5.lineTo(0,200);
    ctx5.closePath();
    ctx5.fill(); // connect and fill

  }
}

draw();