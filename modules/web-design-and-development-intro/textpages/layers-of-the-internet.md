#Layers of the Internet
The Internet and the World Wide Web are not the same thing. The World Wide Web can be best thought of as an application of the Internet. To more fully understand how this is the case, you'll need to have a basic understanding of the protocol stack that makes the Internet work. This stack is composed of several layers.

####Link Layer (Connecting Computers on the Same Network)
At the bottom of the stack are protocols for sending and recieving signals between two computers. These protocols for computers that are directly connected (i.e., on the same network), but what about computers that are on opposite sides of the planet?

####Internet Layer (Connecting Computers Across Networks Around the World)
The next layer up is the Internet layer, which ensures that each device connected to the Internet has a unique IP address. Thanks to the IP protocol, computers on opposite sides of the world can send each other messages if they have each others' IP addresses. Devices called routers help ensure that messages get sent in the right direction as they traverse the Internet hopping from network to network towards their destination.

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
