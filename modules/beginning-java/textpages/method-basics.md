#Methods Basics
All objects in Java have **methods**, which allow them to **do** things. This textpage explains the basics of writing and using methods.

**Side Note:** In other programming languages, methods are often called "functions." Both methods and functions work essentially the same in that they are reusable bits of code.

###Example of a Simple (and Rather Pointless) Method
```java
public void sayHello(){
  System.out.println("Hello");
}
```
The big idea here is that now we have a reusable piece of code that we can use in the following manner:

```java
sayHello(); // call the sayHello method
sayHello(); // call the sayHello method again
```

Of course, most methods do something a bit more interesting than simply printing out "Hello." Consider this more useful method that determines whether or not a number is a prime:

```java
public boolean isPrime(int n){
  if(n < 2) return false;
  if(n == 2) return true;
  int counter = 3;
  while(counter < n){
    if(n%counter == 0){
      return false;
    }
    counter = counter + 2;
  }
  return true;
}
```

Cool, now we have a method that actually does something useful! If you don't understand excatly how this method works, no worries for now. Just realize that it computer whether or not a number is a prime. We can use this method in the following manner:

```java
// Call the isPrime method passing the number 89 as an argument.
isPrime(89); // Since 89 is a prime, this expression evaluates to true.
```



###Example
```java
public class Integer() {
  public int n;
  
  // This is a special type of method called a constructor that is called when a new Integer object is created
  public Integer(int a){
    n = a;
  }
  
  // This method computes the number of 
  public int numberOfDigits(){
    return (int)Math.log10(n)+1;
  }
  
  // This method returns true if the number is prime. Note: There are much more efficient ways of writing this.
  public boolean isPrime(){
    if(n < 2) return false;
    if(n == 2) return true;
    int counter = 3;
    while(counter < n){
      if(n%counter == 0){
        return false;
      }
      counter = counter + 2;
    }
    return true;
  }
  
  // This method increments the value of n by 1 and returns nothing.
  public void increment(){
    n = n+1;
  }
  
  // This method decrements the value of n by 1 and returns nothing.
  public void decrement(){
    n = n-1;
  }
  
}
```

##Why Methods are Awesome
1. Methods allow you to write a useful bit of code then reuse it over and over.
2. Methods prevent you from repeating the exact same code in multiple parts of your program. This is awesome because code duplication is a maintainance nightmare. Imagine having to fix an error in 20 parts of the code as opposed to just fixing it in a single method. 
3. Methods allow us to keep large programs organized.


![](http://christensenacademy.org/img/signature.png)
