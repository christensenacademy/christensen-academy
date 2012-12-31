#How the Internet Works
**Note:** This explanation is going to be *very* limited. The goal is to introduce most (not all) of the major concepts related to how the Internet Works.

**Note:** This is an explanation of how the Internet works, not an explanation of how the World Wide Web works. Although the two are related, the World Wide Web is really just an application of the Internet.

###Hosts
Every computer connected to the Internet is called a host. On the Internet, hosts have the ability to send messages to other hosts.

The computer I'm typing on right now is connected to the Internet and is therefore a host. I can use my computer to send messages to other hosts. If I knew your computer's IP address, I could even send a message directly to you.

###Messages and Packets
Messages aren't sent across the Internet in one piece. Instead, they're broken up into a bunch of little *packets* that are reassembled once they reach their destination. For example, the webpage you're reading right now didn't arrive at your computer all in one piece. Instead, it arrived in a bunch of little parts called packets that were reassembled once they arrived.

###Routers
The Internet is called the Internet because it is a bunch of networks all connected together. The device that connects networks together is called a router because its job is to send packets in the correct direction towards their destination.

In order for a packet to reach its destination, it will likely have to make several "hops" as it traverses the various networks between the sending and receiving hosts. Each "hop" involves a router examining a packet and sending it onwards towards its destination.

**Interesting Fact:** Packets of the same message may actually take different routes to their destination.

###A Diagram


##The Internet Protocol Suite
All of the devices connected to the Internet need to play by the same rules, otherwise things just won't work. These rules are called *protocols*. The designers of the Internet were brilliant in the way they devised these protocols. As you'll see, the protocols of the Internet build on each other in a stack, the upper protocols always relying on the protocols below. These protocols occur in four layers, which we call the [Internet Protocol Suite](http://en.wikipedia.org/wiki/Internet_protocol_suite).

###The Bottom of the Stack: The Link Layer
The most foundational protocols in the Internet Protocol Suite are those that govern how computers send messages to other computers they are directly connected to them (i.e., on the same network). For example, how does your computer send a message to your router? Perhaps the two are connected with an Ethernet cable; or perhaps by WiFi; or maybe even a combination of the two if you're using a wireless access point. The rules governing how messages are sent using these various technologies are the protocols of the Link Layer of the Internet Protocol Suite.

###Up One Layer: The Internet Layer
Assuming that the protocols of the Link Layer have been implemented correctly, we're ready to start thinking about sending messages to computers that aren't on the same network. For this, we need the *IP Protocol*.

The IP protocol gives each host on the Internet a unique address called an IP address. Each packet contains information about the IP address of its destination host, and routers use this IP address to figure out which direction to send the packet in.

###Ensuring D

####Transport Layer (Ensuring Messages are Successful)
Even though the Internet Layer is enough to allow computers to communicate with one another over the Internet, there needs to be some assurance that messages get transported properly. For this reason, we have TCP (trasport control protocol).

It turns out that messages sent using TCP are broken into small packets that are reassembled at their destination. These packets don't all follow the same path, and it is possible that some of them arrive out of order. It's also possible that some packets get lost along the way. TCP provides some assurance that everything will work out in the end.

####Application Layer (With the other layers in place, what cool stuff can we do?)
Each layer of the Internet depends on the ones below it. In order for the World Wide Web to work, which uses the HTTP protocol, it must rely on the three layers below it to do their jobs:
* Computers on the same network must be able to communicate (Link Layer).
* Messages must be able to go from a computer on one network to a computer on any other network in the world (Internet Layer).
* There must be some reliability assurances for this all to work (Transport Layer).

With these pieces in place, we can start inventing interesting types of messages to send over the Internet. Who would have guessed that the most popular type of message to send would become a webpage?

There are other applications of the Internet than just the World Wide Web...


#####DNS
IP addresses usually look something like 132.78.5.199, which isn't very nice (for humans) to read. So, we 



