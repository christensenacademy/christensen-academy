<script src="processing-1.4.1.min.js"></script>
<canvas id="canvas1"></canvas>
<script>

var EAST = "EAST",
  WEST = "WEST",
  NORTH = "NORTH",
  SOUTH = "SOUTH",
  HERE = "HERE",
  AHEAD = "AHEAD",
  LEFT = "LEFT",
  RIGHT = "RIGHT",
  squares = 26,
  len = 390 / squares,
  offset = 5,
  
  // 0 = cliff
  // 1 = firm ground
  // 2 = paper clip
  // 3 = bomb
  gameMap = [
    [0,   0,0,0,0, 0,0,0,0, 0,0,0,0,  0,0,0,0, 0,0,0,0, 0,0,0,0,   0],
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    [0,   1,1,1,1, 1,1,1,1, 1,1,1,1,  1,1,1,1, 1,1,1,1, 1,1,1,1,   0],
    
    [0,   0,0,0,0, 0,0,0,0, 0,0,0,0,  0,0,0,0, 0,0,0,0, 0,0,0,0,   0]
    ]; 

var copyMap = function(){
  var newMap = [];
  for(var i=0;i<gameMap.length;i+=1){
    newMap[i] = [];
    for(var j=0;j<gameMap.length;j+=1){
      newMap[i][j] = gameMap[i][j];
    }
  }
  return newMap;
};


var gameMaps = [];

function updateMap(){
  gameMap = copyMap();
  gameMaps.push(gameMap);
}

updateMap();
    
var macs = [];

var Mac = function(){
  // the counter for each Mac should be in sync with a map
  this.counter = gameMaps.length - 1;
  this.x = [];
  this.x[this.counter] = 1;
  this.y = [];
  this.y[this.counter] = 1;
  this.direction = [];
  this.direction[this.counter] = EAST;
  this.clips = [];
  this.clips[this.counter] = 0;  
  macs.push(this);
};


// given a starting absolute direction and a relative direction to turn
// return the new absolute direction
function computeRelativeTurn ( relativeDirection, startingDirection ) {
  var facing = startingDirection;
  
  if ( relativeDirection === HERE || relativeDirection === AHEAD ) {
    return  facing;
  } else if ( relativeDirection === LEFT ) {
    
    if ( startingDirection == NORTH ) facing = WEST;
    else if ( startingDirection == WEST ) facing = SOUTH;
    else if ( startingDirection == SOUTH ) facing = EAST;
    else if ( startingDirection == EAST ) facing = NORTH;
    else alert( "Invalid Starting Direction" );
  
  } else if ( relativeDirection === RIGHT ) {

    if ( startingDirection == NORTH ) facing = EAST;
    else if ( startingDirection == WEST ) facing = NORTH;
    else if ( startingDirection == SOUTH ) facing = WEST;
    else if ( startingDirection == EAST ) facing = SOUTH;
    else alert( "Invalid Starting Direction" );
    
  } else {
    alert( "Invalid Relative Direction" );
  }
  
  return facing;
}

// given a starting absolute direction, a relative direction to turn, and a pair of coordinates
// return the ordered pair [x, y] of the square in the relative direction
function findCoordinatesRelative ( relativeDirection, coordinates, startingDirection, n ) {
  n = n || 1;
  var x = coordinates[0],
    y = coordinates[1],
    newAbsoluteDirection = computeRelativeTurn ( relativeDirection, startingDirection );

  if ( newAbsoluteDirection === NORTH ){
    y -= n;
  } else if ( newAbsoluteDirection === EAST ){
    x += n;
  } else if ( newAbsoluteDirection === SOUTH ){
    y += n;
  } else if ( newAbsoluteDirection === WEST ){
    x -= n;
  }
  return [x, y];
}

// add methods to Mac objects
Mac.prototype = {
  addStep: function() {
    this.counter++;
    this.x[this.counter] = this.x[this.counter-1];
    this.y[this.counter] = this.y[this.counter-1];
    this.direction[this.counter] = this.direction[this.counter-1];
    this.clips[this.counter] = this.clips[this.counter-1];
  },
  hasBomb: function() {
    return this.bombs > 0;
  },
  isFacing: function( compassDirection ) {
    return compassDirection === this.direction;
  },
  isBomb: function( relativeDirection ) {
    var coords = findCoordinatesRelative ( relativeDirection, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter] );
    return gameMaps[gameCounter][coords[0]][coords[1]] === 3;
  },
  isOtherMac: function( relativeDirection ) {
    // loop through the array of macs comparing their coordinates to this one's
    return false;
  },
  isPaperClip: function( relativeDirection ) {
    var coords = findCoordinatesRelative ( relativeDirection, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter] );
    return gameMaps[gameCounter][coords[0]][coords[1]] === 2;
  },
  isCliff: function( relativeDirection ) {
    var coords = findCoordinatesRelative ( relativeDirection, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter] );
    return gameMaps[gameCounter][coords[0]][coords[1]] === 0;
  },
  isClear: function( relativeDirection ) {
    var coords = findCoordinatesRelative ( relativeDirection, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter] );
    return gameMaps[gameCounter][coords[0]][coords[1]] === 1;
  },
  walk: function( n ) {
    console.log(this);
    this.addStep();
    updateMap();
    var coords = findCoordinatesRelative ( AHEAD, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter], n );
    if ( gameMap[coords[0], coords[1]] === 0 ) {
      alert("... SPLAT! You fell off a cliff.");
    } else if ( gameMap[coords[0], coords[1]] === 3 ) {
      alert("BOOM! You stepped on a bomb. You are dead.");
    } else {
      this.counter++;
      this.x[this.counter] = coords[0];
      this.y[this.counter] = coords[1];
    } 
  },
  pickUpPaperClip: function() {
    this.addStep();
    updateMap();
    if ( this.isPaperClip(HERE) ) {
      this.paperClips[this.counter]++;
      gameMap[this.x[this.counter]][this.y[this.counter]] = 1;
    }
  },
  disarmBomb: function() {
    this.addStep();
    updateMap();
    if ( this.isBomb(AHEAD) ) {
      var coords = findCoordinatesRelative ( AHEAD, [this.x[this.counter], this.y[this.counter]], this.direction[this.counter] );
      this.paperClips--;
      gameMap[coords[0]][coords[1]] === 1;
    }
  },
  turn: function( relativeDirection ) {
    console.log(this);
    this.addStep();
    updateMap();
    this.direction[this.counter] = computeRelativeTurn ( relativeDirection, this.direction[this.counter] );
  }
};
  
var step;
function sketchProc(processing) {
  // Override draw function, by default it will be called 60 times per second
  processing.size(400,400);
  
  var drawMap = function(){
    for(var i=0;i<gameMap.length;i+=1){
      for(var j=0;j<gameMap.length;j+=1){
        if(gameMap[i][j]===0){
          processing.fill(0, 119, 224);
        } else if(gameMap[i][j]===1){
          processing.fill(49, 186, 28);
        } else if(gameMap[i][j]===2){
          processing.fill(235, 204, 52);
        } else if(gameMap[i][j]===3){
          processing.fill(184, 30, 30);
        }
        processing.rect(offset+i*len, offset+j*len, len, len);
      }
    }
  };
  
  
  var c = 0;
  
  step = function() {
    drawMap();
    for (var i = 0; i < macs.length; i++){
      processing.fill(255, 119, 224);
      processing.rect(offset+macs[i].x[c]*len, offset+macs[i].y[c]*len, len, len); 
    }
    c++;
  }
};

function runGame(){
  eval(document.getElementById('input-code').innerHTML);
}

var canvas = document.getElementById("canvas1");
// attaching the sketchProc function to the canvas
var processingInstance = new Processing(canvas, sketchProc);
  
</script>
<button onclick="runGame();">Play</button>
<button onclick="step();">Step</button>

<textarea id="input-code">
var mac = new Mac();
console.log(mac);
mac.walk(6);
mac.turn(RIGHT);
mac.walk(7);


</textarea>
