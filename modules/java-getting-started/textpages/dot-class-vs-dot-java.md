#*.class vs *.java
When you write your Java code, you'll save it as a *.java file. For example, you might write a program called HelloWorld and save it as HelloWorld.java.

**Note:** The "*" character is often used as a "wildcard character" to represent zero or more other characters. *.java basically means any file ending in .java.

*.java files like this are known as "source code". When you program, you write this source code.

**Note:** When you purchase software, such as a video game, you are not given the source code.

*.class files are created when you compile *.java files. *.class files are the bytecode that the JVM (Java Virtual Machine) knows how to run. When Java programs are sold or otherwise distributed, users receive *.class files, not *.java files.

**Note:** All but the simplest of programs end up having multiple class files. *.jar files can be used to wrap up a bunch of class files into a single file. Futhermore, *.jar files can then be converted into executable files native to your particular operating system, such as *.exe for Windows and *.app

##Conclusion
When you compile your source code (i.e., your *.java files)--which is something some IDEs like NetBeans and Eclipse do automatically--corresponding *.class files will be created, one per *.java file. After the *.class files are created, you could technically delete the *.java files if you wanted to, and your program would still work. You wouldn't want to do this, however, because then you could never edit and recompile your program again.
