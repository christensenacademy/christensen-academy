
var x = 80;
var y = 53;
var speed = 0;
var boxSize = 7;
var angryDude = function(shiftX, shiftY){
    
    noStroke();
    
    //draw hair
    fill(216,33,55);
    rect(x+5*boxSize, y+0*boxSize, boxSize*2, boxSize);
    rect(x+9*boxSize, y+0*boxSize, boxSize*2, boxSize);
    rect(x+13*boxSize, y+0*boxSize, boxSize*2, boxSize);
    rect(x+12*boxSize, y+1*boxSize, boxSize*2, boxSize);
    rect(x+6*boxSize, y+1*boxSize, boxSize*5,boxSize);
    rect(x+3*boxSize, y+2*boxSize, boxSize*13,boxSize);
    rect(x+4*boxSize, y+3*boxSize, boxSize*11,boxSize);
    rect(x+2*boxSize, y+4*boxSize, boxSize*15,boxSize);
    rect(x+3*boxSize, y+5*boxSize, boxSize*13,boxSize);
    rect(x+4*boxSize, y+6*boxSize, boxSize*11,boxSize);
    rect(x+3*boxSize, y+7*boxSize, boxSize*13,boxSize);
    rect(x+2*boxSize, y+8*boxSize, boxSize*15,boxSize);
    rect(x+5*boxSize, y+9*boxSize, boxSize*11,boxSize*2);
    //black
    fill(0, 0, 0);
    rect(x+8*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+5*boxSize, y+13*boxSize, boxSize*8, boxSize);
    rect(x+5*boxSize, y+14*boxSize, boxSize*9, boxSize*3);
    
    //nose
    fill(215, 70, 85);
    rect(x+8*boxSize, y+10*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+10*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+10*boxSize, boxSize, boxSize);
    rect(x+8*boxSize, y+11*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+11*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+11*boxSize, boxSize, boxSize);
    
    //white parts
    fill(255, 255, 255);
    rect(x+8*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+13*boxSize, boxSize*5, boxSize);
    rect(x+7*boxSize, y+16*boxSize, boxSize*5, boxSize);
    
    
    
    
    //eyebrows
    fill(144, 25, 29);
    rect(x+8*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+12*boxSize, y+16*boxSize, boxSize, boxSize);
    rect(x+6*boxSize, y+16*boxSize, boxSize, boxSize);
    rect(x+8*boxSize, y+15*boxSize, boxSize*3, boxSize);
    rect(x+4*boxSize, y+11*boxSize, boxSize, boxSize);
    rect(x+14*boxSize, y+11*boxSize, boxSize, boxSize);
    
    //skin
    fill(251,178,171);
    rect(x+8*boxSize, y+5*boxSize, boxSize, boxSize);
    rect(x+8*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+5*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+5*boxSize, boxSize, boxSize);
    rect(x+10*boxSize, y+5*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+5*boxSize, boxSize, boxSize);
    rect(x+5*boxSize, y+17*boxSize, boxSize*9, boxSize);
    rect(x+5*boxSize, y+12*boxSize, boxSize*9, boxSize);
    rect(x+4*boxSize, y+13*boxSize, boxSize, boxSize*4);
    rect(x+14*boxSize, y+13*boxSize, boxSize, boxSize*4);
    rect(x+7*boxSize, y+10*boxSize, boxSize, boxSize*3);
    rect(x+6*boxSize, y+9*boxSize, boxSize, boxSize*4);
    rect(x+5*boxSize, y+11*boxSize, boxSize, boxSize*3);
    rect(x+3*boxSize, y+9*boxSize, boxSize, boxSize*2);
    rect(x+4*boxSize, y+10*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+10*boxSize, boxSize, boxSize*3);
    rect(x+12*boxSize, y+9*boxSize, boxSize, boxSize*4);
    rect(x+13*boxSize, y+11*boxSize, boxSize, boxSize*3);
    rect(x+15*boxSize, y+9*boxSize, boxSize, boxSize*2);
    rect(x+14*boxSize, y+10*boxSize, boxSize, boxSize);
    
    //dark skin
    fill(200, 128, 116);
    rect(x+6*boxSize, y+15*boxSize, boxSize, boxSize);
    rect(x+12*boxSize, y+15*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+9*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+6*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+6*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+6*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+7*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+12*boxSize, y+6*boxSize, boxSize, boxSize);
    rect(x+12*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+12*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+11*boxSize, y+7*boxSize, boxSize, boxSize);
    rect(x+14*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+15*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+14*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+4*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+3*boxSize, y+8*boxSize, boxSize, boxSize);
    rect(x+4*boxSize, y+9*boxSize, boxSize, boxSize);
    rect(x+6*boxSize, y+18*boxSize, boxSize*7, boxSize);
    rect(x+4*boxSize, y+12*boxSize, boxSize, boxSize);
    rect(x+14*boxSize, y+12*boxSize, boxSize, boxSize);
};

var draw = function() {
    background(0, 0, 0);
    angryDude(0,0);
    x += speed;
};