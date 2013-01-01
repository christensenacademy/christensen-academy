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


##The World Wide Web is Literally an Application of the Internet
The Internet is built in four layers as follows:

* The Link Layer: 
