#Timer Events
```actionscript
import flash.utils.Timer;
import flash.events.Event;

var clock:Timer = new Timer(1000, 60);
clock.addEventListener(TimerEvent.TIMER, tick);
clock.start();

function tick(evt:Event):void {
  trace("tick");
}
```
