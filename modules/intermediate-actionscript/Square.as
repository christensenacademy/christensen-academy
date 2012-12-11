
package  {
	import flash.events.MouseEvent;
	import flash.display.MovieClip;
	
	
	public class Square extends MovieClip {
		public var isBomb:Boolean = false;
		public var isRevealed:Boolean = false;
		public var neighborBombs:Number = 0;
		
		public function Square(nonBombsToBombs:Number) {
			if ( Math.random()*nonBombsToBombs < 1 ) isBomb = true;
		}
	}
	
}
