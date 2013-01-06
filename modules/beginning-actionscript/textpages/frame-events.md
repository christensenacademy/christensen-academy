#Frame Event
```actionscript
stage.addEventListener(Event.ENTER_FRAME, example);
function example(evt:Event){
  // code you want to happen repeatedly goes here
  // remember that a this event will happen as frequently as the frame rate (e.g., 24 fps = 24 times a second)
}
```
