

var JerooGame = (function () {
  
  var jeroos = [],
    // [mapState, jeroosState[]] eventually have line numbers too...
    gameState = [],
    gameCounter = 0,
    speed = 3,
  
  // 0 = water
  // 1 = grass
  // 2 = flower
  // 3 = net
  var gameMap = [
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

    
    
  // All Jeroos should know of the gameMap. This is important for methods like isClear()...
  var Jeroo = (function () {
    // private variables and functions
    const EAST = "EAST",
      WEST = "WEST",
      NORTH = "NORTH",
      SOUTH = "SOUTH",
      HERE = "HERE",
      AHEAD = "AHEAD",
      LEFT = "LEFT",
      RIGHT = "RIGHT";
      
    function ( relativeDirection, startingDirection ) {
      var facing = startingDirection;
      
      if ( relativeDirection === HERE || relativeDirection === AHEAD ) {
        return  facing;
      }
      else if ( relativeDirection === LEFT ) {
        if ( startingDirection === NORTH ) facing = WEST;
        else if ( startingDirection === WEST ) facing = SOUTH;
        else if ( startingDirection === SOUTH ) facing = EAST;
        else if ( startingDirection === EAST ) facing = NORTH;
        else alert( "Invalid Starting Direction" );
      }
      else if ( relativeDirection === RIGHT ) {
        if ( startingDirection === NORTH ) facing = EAST;
        else if ( startingDirection === WEST ) facing = NORTH;
        else if ( startingDirection === SOUTH ) facing = WEST;
        else if ( startingDirection === EAST ) facing = SOUTH;
        else alert( "Invalid Starting Direction" );
      }
      else {
        alert( "Invalid Relative Direction" );
      }
      
      return facing;
    }
    
    function findCoordinatesRelative ( relativeDirection, x, y, startingDirection, n ) {
      n = n || 1;
      var newAbsoluteDirection = computeRelativeTurn ( relativeDirection, startingDirection );

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

    // constructor
    var Jeroo = function () {
      // default values when no arguments were passed
      this.y = 0,
      this.x = 0,
      this.flowers = 0,
      this.direction = EAST;
      
      // Java Jeroo constructors are of the following forms:
      // new Jeroo(3) is a new Jeroo { flowers:3 ... }
      // new Jeroo(4, 3) is a new Jeroo { y:3, x:4 ... }
      // new Jeroo(4, 3, 8) is a new Jeroo { y:3, x:4, flowers:8 ... }
      // new Jeroo(4, 3, WEST) is a new Jeroo { y:3, x:4, direction:WEST ... }
      // new Jeroo(4, 3, WEST, 6) is a new Jeroo { y:3, x:4, direction:WEST, flowers:6 }
      switch (arguments.length) {
        case 1:
          this.flowers = arguments[0];
          break;
        case 2:
          this.y = arguments[0];
          this.x = arguments[1];
          break;
        case 3:
          this.y = arguments[0];
          this.x = arguments[1];
          if (typeof arguments[2] === "number"){
            this.flowers = arguments[2];
          } else {
            this.direction = arguments[2];
          }
          break;
        case 4:
          this.y = arguments[0];
          this.x = arguments[1];
          this.direction = arguments[2];
          this.flowers = arguments[3];
          break;
      }
    };

    // prototype
    Jeroo.prototype = {
      constructor: Jeroo,
      getState: function() {
        return [this.y, this.x, this.direction, this.flowers];
      },
      hasFlower: function() {
        return this.flowers > 0;
      },
      isFacing: function( compassDirection ) {
        return compassDirection === this.direction;
      },
      isNet: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        return gameMap[coords[0]][coords[1]] === 3;
      },
      isFlower: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        return gameMap[coords[0]][coords[1]] === 2;
      },
      isClear: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        return gameMap[coords[0]][coords[1]] === 1;
      },
      isWater: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        return gameMap[coords[0]][coords[1]] === 0;
      },
      isJeroo: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        for (var i=0; i<jeroos.length; i++){
          if (coords[0]===jeroos[i].x && coords[1]===jeroos[i].y){
            return true;
          }
        }
        return false;
      },
      hop: function( n ) {
        n = n || 1;
        var coords = findCoordinatesRelative ( AHEAD, this.x, this.y, this.direction, n );
        if ( gameMap[coords[0]][coords[1]] === 0 ) {
          alert("You fell in the water!");
        } else if ( gameMap[coords[0]][coords[1]] === 3 ) {
          alert("It's a trap!");
        } else if ( isJeroo(AHEAD) ) {
          alert("Jeroo collision!");
        } else {
          this.x = coords[0];
          this.y = coords[1];
        } 
      },
      pick: function() {
        if ( this.isFlower(HERE) ) {
          this.flowers++;
          gameMap.changeSquareType(this.y, this.x, 1);
        }
      },
      plant: function() {
        var coords = findCoordinatesRelative ( AHEAD, this.x, this.y, this.direction );
        if ( gameMap[coords[0]][coords[1]] !== 2){
          this.flowers--;
        }
      },
      toss: function() {
        this.flowers--;
        if ( this.isNet(AHEAD) ) {
          var coords = findCoordinatesRelative ( AHEAD, this.x, this.y, this.direction );
          if ( gameMap[coords[0]][coords[1]] === 3){
            gameMap[coords[0]][coords[1]] = 1;
          }
        }
      },
      give: function( relativeDirection ) {
        var coords = findCoordinatesRelative ( relativeDirection, this.x, this.y, this.direction );
        for (var i=0; i<jeroos.length; i++){
          if (coords[0]===jeroos[i].x && coords[1]===jeroos[i].y){
            jeroos[i].flowers++;
            this.flowers--;
          }
        }
      },
      turn: function( relativeDirection ) {
        this.direction = computeRelativeTurn ( relativeDirection, this.direction );
      }
    };

    // return module
    return Jeroo;
  })();

  // constructor
  var JerooGame = function () {
  };

  // prototype
  JerooGame.prototype = {
      constructor: JerooGame,
      runGame: function (code) {
        eval(code);
      },
      addGameState: function(lineNumber){
        // save map
        // save jeroo states
        for (var i=0; i<jeroos.length; i++){
          // jeroos[i].getState();
        }
      },
      drawMap: function(){
        //
      },
      drawJeroos: function(){
      
      },
      drawJeroosState: function(){
      
      },
      drawJeroos: function(){
      
      },
      advanceCounter: function(){
      
      },
      reverseCounter: function(){
      
      },
      setSpeed: function(){
      
      }
  };

  // return module
  return jerooGame;
})();

var jerooInstance = new jerooGame();
