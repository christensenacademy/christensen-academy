#Symbols and Instances
It's very smart to organize your drawings into symbols in Flash. Symbols are stored in the library panel. Once a drawing is a symbol, you can create copies of it called *instances*. This helpful for several reasons:

* When editing a symbol, all of the instances of that symbol are automatically updated to reflect those changes.
* Keeping your objects in symbols will allow them to be animated.
* Instances of symbols can be accessed with ActionScript code, which will be important when you create games or other interactive things. 

##Editing Symbols
There are two ways to edit a symbol:
1. Double-click on an instance. When you do this, everything else on the stage gets greyed out.
2. Double-click on the symbol in the library. When you do this, the symbol appears on the stage alone.

Note: It's extremely important to know what you're editing at any given time. Just look at the menu above the stage to find out if you're on the stage or if you're editing a symbol.

##Editing Instances
When you select an instance, you'll see various properties associated with it in the properties panel. You can change these properties and the instance will still remain an instance of whatever symbol it came from. Likewise, you can use the transform tool on instances to edit them.

Note: If you need to edit an instance beyond what the basic controls that the properties panel and transform tool offer, you'll need to break the instance apart. If you do this, it will no longer be an instance of the symbol it came from. Instead, it will just be a normal object on the stage that you can do with as you please. You'll have full control over it as if you had just drawn it.

##Symbols Inside of Symbols
It is possible to have many symbols in your library. What's more, it's possible to put symbols inside of other symbols. For example, I might have a monster symbol that is composed of a head symbol, a torso symbol, two arm symbols, and two leg symbols. Taking things a step further, a leg symbol might be composed of an uppper leg symbol, a knee symbol, a lower leg symbol, and a foot symbol.