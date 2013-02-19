#Variable Output

**Estimated Time:** 20 minutes, assuming you already have some familiarity with the basics of string concatenation.

Your challenge is to modify the following code so that the program prints out the following message:

The point of this challenge is to use the variables `quantity`, `itemName`, `unitPrice`, `currencySymbol`, and `customerName` to build a custom output message using string concatenation. Notice that the first line of output is done for you in the code. All you have left to do is write code for the next three lines of the message.

###Message
The ouput of your program should be as follows:

```
Thank you, Brooke.
Your bought 89 cats for $325.92 each.
Your total is $29006.88.
Have a nice day, Brooke!
```

###Code

```java
public class VariableOutput {
  public static void main(String[] args){
    int quantity = 89;
    String itemName = "cat";
    double unitPrice = 325.92;
    char currencySymbol = '$';
    String customerName = "Brooke";
    
    System.out.println("Thank you, " + customerName + ".");
    // The rest is up to you.
  }
}
```

##Portfolio
Make sure to save your file as `VariableOutput.java` and keep it with the rest of your files for this module.
