#Mouse Events
```
// assume a movie clip instance named button exists on the stage this frame
button.addEventListener(MouseEvent.CLICK, doStuff);

function doStuff(event:MouseEvent):void
{
	// Do some stuff.
  // This is a normal function that will get called when the user clicks on the button instance
}
```

Notice the code that says `MouseEvent.CLICK` and the code that says `event:MouseEvent`. There are other types of events than mouse events, such as keyboard events. Furthermore, there are many types of mouse events. For a complete listing of the various types of Mouse Events, check out the [official documentation](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/flash/events/MouseEvent.html).

##Give it a try!
Take a look at [this example](http://christensenacademy.org/modules/beginning-actionscript/textpages/mouse-event-example.fla);

Kowabunga,

Cam