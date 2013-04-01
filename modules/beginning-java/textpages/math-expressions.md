include discussion of Math class
##Shortcut Operators

Here are some nice "shortcut operators" to save your fingers some typing in Java:

```
int a = 1;
int b = 12;

a += 4; // a==5 because a+4 is 5
a -= 1; // a==4 because a-1 is 4
a *= 3; // a==12 because a*3 is 12
a /= 8; // a==1 because 12/8 is 1.5, which truncates to 1 (integer division truncates...)
b %= 5; // b==2 because b%5 is 2

a++; // a==2
a--; // a==1
++a; // a==2
--a; // a==1


b = a--; // a==0 and b==1 Explanation: oddly, a-- only takes affect at the very end of the statement. 
```
![](http://christensenacademy.org/img/signature.png)
