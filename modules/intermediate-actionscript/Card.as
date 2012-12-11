package  {
	
	import flash.display.MovieClip;
	
	
	public class Card extends MovieClip {
		
		public var cardNumber:Number;
		public var inColumn:Boolean = false;
		public var inEndZone:Boolean = false;
		public var inDrawPileFaceDown:Boolean = true;
		public var inDrawPileFaceUp:Boolean = false;
		public var parentCard:Card = null;
		public var childCard:Card = null;
		
		public function Card() {
		}
	}
	
}
