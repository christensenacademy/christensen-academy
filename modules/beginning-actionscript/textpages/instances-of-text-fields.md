#Instances of Text Fields
The following only describes how to work with classic text fields, not TLF text. 

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/classic-text.png)

There are three types of classic text you can create--static, dynamic, and input. If you play around with these three types, you'll notice that Flash doesn't let you add an instance name to static text. This makes sense, I think, because static text won't change, so you shouldn't be able to manipulate it in the code. Dynamic and input text, however, can have instance names because we would like to be able to get the values from input text fields and assign new values to dynamic text fields.

![picture showing how to add an instance name](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/text-field-instance-name.png)

**Note:** I highly recommend using [camelCase](#camelcase) for these instance names as well.

###Retrieving Input
```java
//The following example assumes an input text field named passwordBox exists on the same frame as this code.
var password:String = passwordBox.text;
```

####But, what if the input is a number?
```java
//The following examples assume an input text field named difficultyInput exists on the same frame as this code
var difficulty:Number = difficultyInput.text; //this will fail

//here's how to do it
var difficulty:Number = Number(difficultyInput.text);
```

In this example, the built-in function `Number` took a string as a parameter and returned a number.

###Assigning a Dynamic Text Field a New Value
```java
//The following examples assume dynamic text fields named outputScore and outputName
outputName.text = playerName; //assume playerName is a variable of type String
outputScore.text = "" + score; //assume score is a variable of type Number.
```

**Note:** Writing `"" + score` concatenates an empty string with a number, which essentially converts the number into a String. This is necessary to do because the text property is of type String, not Number.

Kowabunga,

Cam