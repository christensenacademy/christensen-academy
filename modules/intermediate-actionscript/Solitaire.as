package  {
	
	import flash.display.MovieClip;
	import flash.events.MouseEvent;
	import flash.display.Sprite;
	
	public class Solitaire extends MovieClip {
		var CARD_WIDTH = 50;
		var CARD_HEIGHT = 80;
		var STACK_STARTING_Y = 120;
		var CARD_TOP_HEIGHT = 25;
		var STACK_SPACING = 25;
		var SCORING_PILE_SPACING = 25;
		var SCORING_PILES_STARTING_Y = 25;
		var SCORING_PILES_STARTING_X = 200;
		var DISCARD_PILE_X = 30+CARD_WIDTH;
		var DISCARD_PILE_Y = 25;
		var DRAW_PILE_X = DISCARD_PILE_X;
		var DRAW_PILE_Y = DISCARD_PILE_Y;
		
		var deck:Array = new Array();
		var stacks:Array = new Array();
		var previousStack:Sprite;
		var scoringPiles:Array = new Array();
		var drawPile:Sprite = new Sprite();
		var discardPile:Sprite = new Sprite();
		var draggingContainer:Sprite = new Sprite();
		var diamonds:Diamonds;
		var hearts:Hearts;
		var clubs:Clubs;
		var spades:Spades;
		
		public function Solitaire() {
			// stack the deck
			for(var i:Number = 0; i<52; i++){
				var tempCard = new Card();
				tempCard.cardNumber = i+1;
				tempCard.width = CARD_WIDTH;
				tempCard.height = CARD_HEIGHT;
				tempCard.face.gotoAndStop(tempCard.cardNumber);
				deck.push(tempCard);
			}
			
			// Create placeholders for scoring area
			
			diamonds = new Diamonds();diamonds.width=CARD_WIDTH;diamonds.height=CARD_HEIGHT;
			hearts = new Hearts();hearts.width=CARD_WIDTH;hearts.height=CARD_HEIGHT;
			clubs = new Clubs();clubs.width=CARD_WIDTH;clubs.height=CARD_HEIGHT;
			spades = new Spades();spades.width=CARD_WIDTH;spades.height=CARD_HEIGHT;			
			
			shuffleDeck();
			initStacks();
			initScoringPiles();
			initDrawPile();
			initDiscardPile();
			displayStacks();
			displayScoringPiles();
			
			refill.addEventListener(MouseEvent.CLICK, refillDrawPile);
			addChild(draggingContainer);
		}
		private function drawCard(event:MouseEvent){
			var tempCard:Card = event.currentTarget as Card;
			tempCard.removeEventListener(MouseEvent.CLICK, drawCard);
			tempCard.addEventListener(MouseEvent.MOUSE_DOWN, dragFromDiscard);
			tempCard.addEventListener(MouseEvent.MOUSE_UP, dropFromDiscard);
			tempCard.gotoAndStop(1);
			drawPile.removeChild(tempCard);
			discardPile.addChild(tempCard);
		}
		private function dragFromDiscard(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			discardPile.removeChild(temp);
			draggingContainer.x = mouseX-(CARD_WIDTH/2);
			draggingContainer.y = mouseY-(CARD_HEIGHT/2);
			draggingContainer.addChild(temp);
			draggingContainer.startDrag();
		}
		
		private function dropFromDiscard(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			draggingContainer.stopDrag();
			draggingContainer.removeChild(temp);
			var isOnStack:Boolean = false;
			for(var i:Number=0; i<stacks.length; i++){
				if(draggingContainer.dropTarget.parent.parent.parent == stacks[i].getChildAt(1)){
					temp.removeEventListener(MouseEvent.MOUSE_DOWN, dragFromDiscard);
					temp.removeEventListener(MouseEvent.MOUSE_UP, dropFromDiscard);
					temp.addEventListener(MouseEvent.MOUSE_DOWN, dragFromStack);
					temp.addEventListener(MouseEvent.MOUSE_UP, dropFromStack);
					stacks[i].getChildAt(1).addChild(temp);
					displayStacks();
					isOnStack=true;
					break;
				}
			}
			if(!isOnStack){
				for(i=0; i<scoringPiles.length; i++){
					var isOnPile:Boolean = (draggingContainer.dropTarget.parent.parent == scoringPiles[i] ||
					   draggingContainer.dropTarget.parent.parent.parent == scoringPiles[i]);
					var isInRangeForPile:Boolean = temp.cardNumber>13*i && temp.cardNumber <= 13*(i+1);
					if( isOnPile && isInRangeForPile){
						var isFirstOnPile = (scoringPiles[i].numChildren < 2 && temp.cardNumber == i*13 + 1);
						var isValidFollowingCard = scoringPiles[i].numChildren > 1 && (scoringPiles[i].getChildAt(scoringPiles[i].numChildren-1) as Card).cardNumber == temp.cardNumber-1;
						if(isFirstOnPile || isValidFollowingCard){
							temp.removeEventListener(MouseEvent.MOUSE_DOWN, dragFromDiscard);
							temp.removeEventListener(MouseEvent.MOUSE_UP, dropFromDiscard);
							temp.addEventListener(MouseEvent.MOUSE_DOWN, dragFromScoringPile);
							temp.addEventListener(MouseEvent.MOUSE_UP, dropFromScoringPile);
							scoringPiles[i].addChild(temp);
							isOnStack=true;
							break;
						}
					}
				}
			}
			if(!isOnStack) discardPile.addChild(temp);
		}
		private function dragFromScoringPile(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			temp.parent.removeChild(temp);
			draggingContainer.x = mouseX-(CARD_WIDTH/2);
			draggingContainer.y = mouseY-(CARD_HEIGHT/2);
			draggingContainer.addChild(temp);
			draggingContainer.startDrag();
		}
		private function dropFromScoringPile(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			draggingContainer.stopDrag();
			draggingContainer.removeChild(temp);
			var isOnStack:Boolean = false;
			for(var i:Number=0; i<stacks.length; i++){
				if(draggingContainer.dropTarget.parent.parent.parent == stacks[i].getChildAt(1)){
					temp.removeEventListener(MouseEvent.MOUSE_DOWN, dragFromScoringPile);
					temp.removeEventListener(MouseEvent.MOUSE_UP, dropFromScoringPile);
					temp.addEventListener(MouseEvent.MOUSE_DOWN, dragFromStack);
					temp.addEventListener(MouseEvent.MOUSE_UP, dropFromStack);
					stacks[i].getChildAt(1).addChild(temp);
					displayStacks();
					isOnStack=true;
					break;
				}
			}
			if(!isOnStack) scoringPiles[Math.floor((temp.cardNumber-1)/13)].addChild(temp);
		}
		private function dragFromStack(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			var tempParent:Sprite = temp.parent as Sprite;
			var startIndex:Number = tempParent.getChildIndex(temp);
			draggingContainer.x = mouseX-(CARD_WIDTH/2);
			draggingContainer.y = mouseY-(CARD_HEIGHT/2);
			for (var i:Number = startIndex; i<tempParent.numChildren+1; i++){
				trace("HEY");
				var tempChild:Card = tempParent.getChildAt(startIndex) as Card;
				tempParent.removeChild(tempChild);
				draggingContainer.addChild(tempChild);
				tempChild.x = temp.x;
				tempChild.y = temp.y +(i-startIndex)*CARD_TOP_HEIGHT;
				
			}
			previousStack = tempParent;
			draggingContainer.startDrag();
		}
		private function dropFromStack(event:MouseEvent){
			var temp:Card = event.currentTarget as Card;
			draggingContainer.stopDrag();
			draggingContainer.removeChild(temp);
			var isOnStack:Boolean = false;
			for(var i:Number=0; i<stacks.length; i++){
				var tempStack:Sprite = stacks[i].getChildAt(1) as Sprite;
				if(draggingContainer.dropTarget.parent.parent.parent == tempStack){
					var newParent:Sprite = stacks[i].getChildAt(1) as Sprite;
					newParent.addChild(temp);
					for(var j:Number=0; j<draggingContainer.numChildren; j++){
						var tempChild:Card = draggingContainer.getChildAt(0) as Card;
						draggingContainer.removeChildAt(0);
						newParent.addChild(tempChild);
					}
					displayStacks();
					isOnStack=true;
					break;
				}
			}
			if(!isOnStack){
				previousStack.addChild(temp);
				for(i=0; i<draggingContainer.numChildren; i++){
					previousStack.addChild(
				}
				scoringPiles[Math.floor((temp.cardNumber-1)/13)].addChild(temp);
			}
		}
		private function randomize ( a : *, b : * ) : int {
			return ( Math.random() > .5 ) ? 1 : -1;
		}
		private function initStacks(){
			var place:Number = 0;
			for(var j:Number=place; j<7; j++){
				var tempParent:Sprite = new Sprite();
				addChild(tempParent);
				stacks.push(tempParent);
				
				var tempDChild:Sprite = new Sprite();
				tempParent.addChild(tempDChild);
				for(var i:Number=place; i<place+j; i++)tempDChild.addChild(deck[i]);
				
				var tempUChild:Sprite = new Sprite();
				tempParent.addChild(tempUChild);
				tempUChild.addChild(deck[i]);
				
				place = i+1;
			}
		}
		private function displayStacks(){
			for(var j:Number=0; j<7; j++){
				var tempParent:Sprite = stacks[j];
				tempParent.x = STACK_SPACING + (STACK_SPACING+CARD_WIDTH)*j;
				tempParent.y = STACK_STARTING_Y;
				var tempDChild:Sprite = stacks[j].getChildAt(0);
				var faceDownCards:Number = tempDChild.numChildren;
				var tempUChild:Sprite = stacks[j].getChildAt(1);
				for(var i:Number=0; i<faceDownCards; i++){
					var tempChild:MovieClip = tempDChild.getChildAt(i) as MovieClip;
					tempChild.y=CARD_TOP_HEIGHT*i;
					tempChild.gotoAndStop(10);
				}
				for(i=0; i<tempUChild.numChildren; i++){
					tempChild = tempUChild.getChildAt(i) as MovieClip;
					tempChild.y=CARD_TOP_HEIGHT*i+CARD_TOP_HEIGHT*faceDownCards;
					tempChild.addEventListener(MouseEvent.MOUSE_DOWN, dragFromStack);
					tempChild.addEventListener(MouseEvent.MOUSE_UP, dropFromStack);
					tempChild.gotoAndStop(0);
				}
			}
		}
		private function initScoringPiles(){
			for(var j:Number=0; j<4; j++){
				var tempParent:Sprite = new Sprite();
				tempParent.x = SCORING_PILES_STARTING_X+(CARD_WIDTH+SCORING_PILE_SPACING)*j;
				tempParent.y = SCORING_PILES_STARTING_Y;
				addChild(tempParent);
				scoringPiles.push(tempParent);
			}
			scoringPiles[0].addChild(spades);
			scoringPiles[1].addChild(clubs);
			scoringPiles[2].addChild(diamonds);
			scoringPiles[3].addChild(hearts);
			
			trace(scoringPiles[1].x);
		}
		private function initDrawPile(){
			drawPile.x = DRAW_PILE_X;
			drawPile.y = DRAW_PILE_Y;
			addChild(drawPile);
			for(var j:Number=28; j<52; j++){
				drawPile.addChild(deck[j]);
				deck[j].gotoAndStop(2);
				deck[j].addEventListener(MouseEvent.CLICK, drawCard);
			}
		}
		private function initDiscardPile(){
			discardPile.x = DRAW_PILE_X;
			discardPile.y = DRAW_PILE_Y;
			addChild(discardPile);
		}
		private function refillDrawPile(event:MouseEvent){
			if(drawPile.numChildren == 0){
				for(var j:Number=discardPile.numChildren-1; j>=0; j--){
					var temp = discardPile.getChildAt(j);
					discardPile.removeChild(temp);
					temp.gotoAndStop(2);
					temp.removeEventListener(MouseEvent.MOUSE_DOWN, dragFromDiscard);
					temp.removeEventListener(MouseEvent.MOUSE_UP, dropFromDiscard);
					temp.addEventListener(MouseEvent.CLICK, drawCard);
					drawPile.addChild(temp);
				}
			}
		}
		private function displayScoringPiles(){
			for(var j:Number=0; j<4; j++){
				for(var i:Number=0; i<scoringPiles[j].numChildren; i++){
					var tempChild:MovieClip = scoringPiles[j].getChildAt(i) as MovieClip;
					tempChild.gotoAndStop(1);
				}
			}
		}
		private function shuffleDeck(){
			deck.sort(randomize);
			deck.sort(randomize);
			deck.sort(randomize);
		}
	}
}
