#Computer Hardware and Software

This textpage is my humble attempt at general overview of computer hardware and software. I've tried hard to provide accurate information without going into much depth. Please think of this textpage as an introduction or a brief overview. If you want more depth, Wikipedia is always a great source:

* (Computer Hardware)[http://en.wikipedia.org/wiki/Computer_hardware)
* (Computer Software)[http://en.wikipedia.org/wiki/Software)

##Three Main Parts of Hardware

####House Metaphor
I came across a video by Common Craft a couple of years ago called [Computer Hardware in Plain English](http://www.youtube.com/watch?v=LrXeDF4Qqz4). Although the metaphor is far from complete, I really enjoyed it, and I personall think it's a great starting point for thinking about computer hardware. It's only a few minutes long, and I encourage you to check it out.

###Hard Drive
Every computer has a hard drive. I suppose some computers have multiple hard drives, but in general each computer has a single hard drive.

The purpose of a hard drive is simple: store stuff.

Every hard drive has a capacity, which is essentially the amount of stuff it can store. If you're familiar with binary and the idea that computers manipulate bits (1s and 0s), then I encourage you to think of a hard drive as a device that is capable of storing a certain number of 1s and 0s. Most hard drives can store hundreds of gigabytes. My computer, in fact, has a hard drive that can store roughly 220 gigabytes of data, which is 1,760,000,000,000 bits (i.e., 1s and 0s).

A hard drive stores all of your programs, documents, music, videos, and so on, which is organized on your computer's file system. A file system is simply a hierarchical structure of folders with files inside of them. Unless your hard drive is "partitioned" into multiple file systems, which might happen if you were a computer nerd and installed Linux... , 

The problem with hard drives is that they're a bit slow to access. Reading from and writing to a hard drive takes too much time. Computers need a better mechanism for storing data on a short-term basis that is more readily available to the CPU (processor).

[The Wikipedia Article on Hard Drives](http://en.wikipedia.org/wiki/Hard_disk_drive)

###RAM (Memory)
Like a hard drive, RAM (Random Access Memory) stores data. However, unlike a hard drive, it doesn't store the entire contents of your computer. Instead, it really just stores the data needed by whatever software you have running on your computer. The main reason we need RAM is that retrieving data from the hard drive is much slower than retrieving data from RAM.

If you have lots software running on your computer simultaneously, you may be in danger of running out of RAM. If this happens, your computer will slow down tremendously. If your computer is continously running slowly, it may very likely be because you don't have enough RAM. Whereas a typical hard drive has hundreds of gigabytes of storage, RAM usually only has a few gigabytes of storage.

When you restart your computer, the RAM gets cleared out. Thus, we say that RAM is "volatile," whereas a hard drive has "persistant storage." As the computer starts back up, programs and other data are loaded back into RAM from the hard drive, which can take quite a bit of time.

Have you ever been working on something on your computer and forgotten to save it? Did you lose all of your work? If so, realize that before you saved your work, the changes you'd been making were only in RAM. Only when you save your work does the computer write the data to the hard drive. **Note:** Newer software tends to be more sophisticated and doesn't always require you to save your work; it just does it automatically for you as you go.

[The Wikipedia Article on RAM](http://en.wikipedia.org/wiki/RAM)

###CPU (Processor)
The job of the processor is to run programs. Processors are extraordinarily fast and can excecute roughly a billion instructions in a single second. Processor speed is measured in gigahertz (GHz).

In the past, computers typically only had one processor. In recent years, computers have begun to be built with miltiple processors or "cores". The computer I'm typing on right now has a dual-core processor.


##Software
Without software, computers wouldn't actually *do* anything. Think of software as the instructions computers follow. Software is written by computer programmers. The CPU's (i.e., processor's) job is to run software. 

It can be helpful to think of software as existing layers. In an effort to simplify our discussion of software, I'll pretend that there are just two layers.

###Operating Systems (Bottom Layer)
Personal computers, tablets, and smartphones all have their own operating systems. Windows computers have a version of the Windows operating system, Apple computers have a version of the Mac operating system, iPhones have a versions of the iOS operating system, and so on. The operating system gives the computer its core functionality.

###Software Programs or "Apps" (Top Layer)
Software programs are often written specifically for one operating system or another. For example, if I were to develop an iPhone app, it would only work on devices with the iOS. It would not work with my Windows computer.

Software programs rely on the underlying operating system to function.

We use software programs everyday. Right now as I type this document on my Windows computer, I have the following programs running:

* Notepad++ (my text editor)
* FileZilla (for uploading files to my website)
* Photoshop (for editing images)
* GIMP (also for editing images)
* CMD (the command line utility)
* Chrome (my Web browser)
* Microsoft Word
* Windows Explorer
* Software Update (interestingly enough, some updates for my operating system are ready)

Of course, in the background of all of this is my operating system: Windows 7.

![](http://christensenacademy.org/img/signature.png)
