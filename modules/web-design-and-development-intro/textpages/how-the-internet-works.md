#How the Internet Works
This explanation is going to be very limited. The goal is to introduce most (not all) of the major concepts related to how the Internet Works. Also, this is not an explanation of how the World Wide Web works. Although the two are related, the World Wide Web is really just an application of the Internet.

###Hosts
Every computer connected to the Internet is called a host. On the Internet, hosts have the ability to send messages to other hosts.

The computer I'm typing on right now is connected to the Internet and is therefore a host. I can use my computer to send messages to other hosts. If I knew your computer's IP address, I could even send a message directly to you.

###Messages and Packets
**Note:** A message can be anything from a webpage to an image to an audio file.

Messages aren't sent across the Internet in one piece. Instead, they're broken up into a bunch of little *packets* that are reassembled once they reach their destination. For example, the webpage you're reading right now didn't arrive at your computer all in one piece. Instead, it arrived in a bunch of little parts called packets that were reassembled once they arrived.

###Routers
The Internet is called the Internet because it is a bunch of networks all connected together. The device that connects networks together is called a router because its job is to send packets in the correct direction towards their destination.

In order for a packet to reach its destination, it will likely have to make several "hops" as it traverses the various networks between the sending and receiving hosts. Each "hop" involves a router examining a packet and sending it onwards towards its destination.

**Interesting Fact:** Packets of the same message may actually take different routes to their destination.

###The World Wide Web is Literally an Application of the Internet
There are four "layers" of the Internet (see [Internet Protocol Suite](http://en.wikipedia.org/wiki/Internet_protocol_suite) on Wikipedia):
 
1. The **Link Layer** allows computers on the same network to send each other messages.
2. The **Internet Layer** assigns each computer on the Internet a unique IP address, which allows computers to send each other messages even if they aren't on the same network.
3. The **Transport Layer** makes sure that the packets of a message are assembled correctly when they arrive at their destination. It does things like check to make sure no packets are missing or damaged, and if they are, it makes sure they're sent again.
4. The **Aplication Layer** is where all the fun is at. This is where all of the interesting applications of the Internet reside, such as email, the Web, and more.

Each of these layers specifies various *protocols*, which are strict rules for hosts and routers to follow when sending and receiving messages.

The two most notable protocols are TCP (Transmission Control Protocol for the Transport Layer) and IP (Internet Protocol for the Internet Layer).

At the Application Layer, there are all sorts of protocols such as FTP (File Transfer Protocol for transfering files between hosts), SSH (Secure Shell for remote login), SMTP (Simple Mail Transfer Protocol for email), DNS (Domain Name System for resolving domain names to IP addresses), and HTTP (HyperText Transfer Protocol for the Web).

Each layer depends upon the layer before it. When Tim Burners-Lee invented the HTTP protocol (i.e., invented the World Wide Web), the Link, Internet, and Transport layers were already in place. He could not have done what he did without the existing infrastructure that had been building throughout the 1970s and 1980s.

I think it's also important to remember that the HTTP protocol on which the World Wide Web is built is just one of many applications of the underlying Internet. It wasn't always clear that the Web would be the best application of the Internet, and it still isn't. In fact, in the early 1990s, a rival protocol named GOPHER was far more popular than HTTP. Will a superior application of the Internet ever overtake the Web?

###Conclusion
The Internet is obviously far more complex than described here. The most important points from this textpage are as follows:

* Each host (i.e., computer) on the Internet has an IP address
* The Internet is composed of many computer networks connected together with routers
* Messages sent across the Internet are broken up into packets
* The World Wide Web is an application of the Internet, not the Internet itself

Kowabunga,

Cam
