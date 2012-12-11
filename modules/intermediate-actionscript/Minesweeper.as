package  {
	
	import flash.display.MovieClip;
	import flash.events.MouseEvent;
	
	public class Minesweeper extends MovieClip {
		
		var board:Array = new Array();
		var BOARD_SIZE:Number = 20;
		var SQUARE_SIZE:Number = 25;
		var NON_BOMBS_TO_BOMBS:Number = 10;
		var firstClick:Boolean = true;
		
		public function Minesweeper() {
			createBoard();
		}
		private function createBoard() {
			for (var i:Number = 0; i<BOARD_SIZE; i++){
				board.push(new Array());
				for (var j:Number = 0; j<BOARD_SIZE; j++){
					var tempSquare = new Square(NON_BOMBS_TO_BOMBS);
					tempSquare.width = SQUARE_SIZE;
					tempSquare.height = SQUARE_SIZE;
					tempSquare.x = j*tempSquare.width;
					tempSquare.y = i*tempSquare.height;
					tempSquare.gotoAndStop("unclicked");
					addChild(tempSquare);
					tempSquare.addEventListener(MouseEvent.CLICK, squareClicked);
					board[i].push(tempSquare);
				}
			}
			calculateNeighborBombs();
		}
		private function calculateNeighborBombs(){
			var neighborBombs:Number = 0;
			for (var r:Number = 0; r<BOARD_SIZE; r++){
				for (var c:Number = 0; c<BOARD_SIZE; c++){
					if(r>0&&c>0 && board[r-1][c-1].isBomb) neighborBombs++;
					if(r>0 && board[r-1][c].isBomb) neighborBombs++;
					if(r>0&&c<BOARD_SIZE-1 && board[r-1][c+1].isBomb) neighborBombs++;
					if(c>0  && board[r][c-1].isBomb) neighborBombs++;
					if(c<BOARD_SIZE-1 && board[r][c+1].isBomb) neighborBombs++;
					if(c>0 && r<BOARD_SIZE-1 && board[r+1][c-1].isBomb) neighborBombs++;
					if(r<BOARD_SIZE-1 && board[r+1][c].isBomb) neighborBombs++;
					if(r<BOARD_SIZE-1&& c<BOARD_SIZE-1 && board[r+1][c+1].isBomb) neighborBombs++;
					board[r][c].neighborBombs = neighborBombs;
					neighborBombs = 0;
				}
			}
		}
		private function squareClicked(event:MouseEvent) {
			var j:Number = Math.floor(mouseX/board[0][0].width);
			var i:Number = Math.floor(mouseY/board[0][0].height);
			
			if(firstClick && event.target.isBomb){
				event.target.isBomb = false;
				calculateNeighborBombs();
				firstClick=false;
			}
			if(!event.target.isRevealed){
				if (event.target.isBomb){
					(new Kaboom()).play();
					event.target.gotoAndStop("bomb");
				}
				else {
					board[i][j].gotoAndStop(board[i][j].neighborBombs+1);
					if(board[i][j].neighborBombs == 0){
						revealSafeNeighbors(i,j);
					}
				}
				event.target.isRevealed = true;
			}
		}
		private function revealSafeNeighbors(r:Number, c:Number){
			if(r>0&&c>0 && !board[r-1][c-1].isRevealed){
				trace("(" + r + ", " + c + "): " + board[r][c].neighborBombs);
				board[r-1][c-1].gotoAndStop(board[r-1][c-1].neighborBombs+1);
				board[r-1][c-1].isRevealed = true;
				if(board[r-1][c-1].neighborBombs == 0) revealSafeNeighbors(r-1,c-1);
			}
			if(r>0 && !board[r-1][c].isRevealed){
				board[r-1][c].isRevealed = true;
				board[r-1][c].gotoAndStop(board[r-1][c].neighborBombs+1);
				if(board[r-1][c].neighborBombs == 0) revealSafeNeighbors(r-1,c);
			}
			if(r>0&&c<BOARD_SIZE-1 && !board[r-1][c+1].isRevealed){
				board[r-1][c+1].isRevealed = true;
				board[r-1][c+1].gotoAndStop(board[r-1][c+1].neighborBombs+1);
				if(board[r-1][c+1].neighborBombs == 0) revealSafeNeighbors(r-1,c+1);
			}
			if(c>0  && !board[r][c-1].isRevealed){
				board[r][c-1].isRevealed = true;
				board[r][c-1].gotoAndStop(board[r][c-1].neighborBombs+1);
				if(board[r][c-1].neighborBombs == 0) revealSafeNeighbors(r,c-1);
			}
			if(c<BOARD_SIZE-1 && !board[r][c+1].isRevealed){
				board[r][c+1].isRevealed = true;
				board[r][c+1].gotoAndStop(board[r][c+1].neighborBombs+1);
				if(board[r][c+1].neighborBombs == 0) revealSafeNeighbors(r,c+1);
			}
			if(c>0 && r<BOARD_SIZE-1 && !board[r+1][c-1].isRevealed){
				board[r+1][c-1].isRevealed = true;
				board[r+1][c-1].gotoAndStop(board[r+1][c-1].neighborBombs+1);
				if(board[r+1][c-1].neighborBombs == 0) revealSafeNeighbors(r+1,c-1);
			}
			if(r<BOARD_SIZE-1 && !board[r+1][c].isRevealed){
				board[r+1][c].isRevealed = true;
				board[r+1][c].gotoAndStop(board[r+1][c].neighborBombs+1);
				if(board[r+1][c].neighborBombs == 0) revealSafeNeighbors(r+1,c);
			}
			if(r<BOARD_SIZE-1&& c<BOARD_SIZE-1 && !board[r+1][c+1].isRevealed){
				board[r+1][c+1].isRevealed = true;
				board[r+1][c+1].gotoAndStop(board[r+1][c+1].neighborBombs+1);
				if(board[r+1][c+1].neighborBombs == 0) revealSafeNeighbors(r+1,c+1);
			}
		}
	}	
}
