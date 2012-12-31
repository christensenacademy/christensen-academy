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

**Note:** It's entirely possible that packets belonging to the same message will be sent by routers along different routes to their final destination. Amazingly, everything works out just fine when this happens.

###A Simplified Diagram


##The Internet Protocol Stack
As packets "hop" around the Internet, 










The World Wide Web can be best thought of as an application of the Internet. To more fully understand how this is the case, you'll need to have a basic understanding of the Internet protocol stack that makes the Internet work. This stack is composed of several layers, which I'll do my best to describe in this textpage.

###Packets
First, I think it's important to explain the idea of packets. One of the most amazing facts about the Internet is that messages aren't sent in one piece as you might expect. All messages are broken up into lots of little pieces called *packets*. For example, the webpage you're reading right now wasn't sent all in one piece. Instead, the page was broken up into lots of little pieces which traveled across the Internet and were reassembled once they reached your computer.

Even more amazing is that these packets can take different paths across the Internet, some packets can arrive out of order, some packets can get lost along the way, data can get corrupted, and everything still works out in the end. Sound magical? Hopefully the following description of the four layers of the Internet will provide some insight into how this can be the case.

###Layer 1: Link Layer (Connecting Computers on the Same Network)
This layer is for sending and recieving packets between two computers that are directly connected (i.e., on the same network). Link layer technologies are things like Ethernet and WiFi.

But, what about computers that are on opposite sides of the planet?

###Layer 2: Internet Layer (Connecting Computers Across Networks Around the World)
The next layer on the Internet protocol stack is the Internet layer, which ensures that each device connected to the Internet has a unique *IP address*. Thanks to the IP protocol, computers on opposite sides of the world can send each other messages if they have each others' IP addresses. Devices called routers help ensure that messages get sent in the right direction as they traverse the Internet hopping from network to network towards their destination.

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
