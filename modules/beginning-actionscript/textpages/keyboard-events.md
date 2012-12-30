#Keyboard Events
```java
// notice that we add the event listener to the stage, not an individual instance
stage.addEventListener(KeyboardEvent.KEY_DOWN, keyPressed);

// note: the keyPressed function will now get called every time ANY key gets pressed
function keyPressed(event:KeyboardEvent):void
{
  if(event.keyCode == 32)
  {
    // Code for for what should happen if the spacebar was pressed
  }
  else if(event.keyCode == 38)
  {
    // Code for what should happen if the up arrow was pressed
  }
}

stage.addEventListener(KeyboardEvent.KEY_UP, keyReleased);

// note: the keyReleased function will now get called every time ANY key gets released
function keyReleased(event:KeyboardEvent):void
{
  if(event.keyCode == 32)
  {
    // Code for for what should happen if the spacebar was released
  }
  else if(event.keyCode == 38)
  {
    // Code for what should happen if the up arrow was released
  }
}
```

**Note:** Dealing with keyboard events requires you to use if-statements to check which key was pressed. We can write `event.keyCode` to tell us what key triggered the event.

For the official documentation on Keyboard Events, check out the [AS3 API Reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/flash/events/KeyboardEvent.html).

###Key Codes
```
Backspace = 8
Tab = 9
Enter = 13
Shift = 16
Control = 17
CapsLock = 20
Esc = 27
Spacebar = 32
PageUp = 33
PageDown = 34
End = 35
Home = 36
LeftArrow = 37
UpArrow = 38
RightArrow = 39
DownArrow = 40
Insert = 45
Delete = 46
NumLock = 144
ScrLk = 145
Pause/Break = 19
A = 65
B = 66
C = 67
D = 68
E = 69
F = 70
G = 71
H = 72
I = 73
J = 74
K = 75
L = 76
M = 77
N = 78
O = 79
P = 80
Q = 81
R = 82
S = 83
T = 84
U = 85
V = 86
W = 87
X = 88
Y = 89
Z = 90
a = 65
b = 66
c = 67
d = 68
e = 69
f = 70
g = 71
h = 72
i = 73
j = 74
k = 75
l = 76
m = 77
n = 78
o = 79
p = 80
q = 81
r = 82
s = 83
t = 84
u = 85
v = 86
w = 87
x = 88
y = 89
z = 90
0 = 48
1 = 49
2 = 50
3 = 51
4 = 52
5 = 53
6 = 54
7 = 55
8 = 56
9 = 57
;: = 186
=+ = 187
-_ = 189
/? = 191
`~ = 192
[{ = 219
\| = 220
]} = 221
"' = 222
, = 188
. = 190
/ = 191
Numpad 0 = 96
Numpad 1 = 97
Numpad 2 = 98
Numpad 3 = 99
Numpad 4 = 100
Numpad 5 = 10
Numpad 6 = 102
Numpad 7 = 103
Numpad 8 = 104
Numpad 9 = 105
Numpad Multiply = 106
Numpad Add = 107
Numpad Enter = 13
Numpad Subtract = 109
Numpad Decimal = 110
Numpad Divide = 111
F1 = 112
F2 = 113
F3 = 114
F4 = 115
F5 = 116
F6 = 117
F7 = 118
F8 = 119
F9 = 120
F10 = nokey
F11 = 122
F12 = 123
F13 = 124
F14 = 125
F15 = 126
```

Kowabunga,

Cam
