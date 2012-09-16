#Web Intro Reference
##Overview
[A Brief History of Internet](#)
[A Brief History of the World Wide Web](#)
[The Internet vs. The World Wide Web](#)
[Domain Names and ](#)
[](#)
[](#)
[](#)
[](#)
[](#)
[](#)
[](#)
[](#)

##History of the Internet and the World Wide Web
The history of computers is facinating, and within that history, the evolution of the Internet and the World Wide Web are among the most amazing pieces.

If you're interested in learning more about the history of computers, the Internet, and the World Wide Web, I highly recommend taking this (Coursera course)[https://class.coursera.org/insidetheinternet-2012-001] from a University of Michigan professor.

###A Brief History of the Internet
The basic idea of a computer network (i.e., finding a way for computers to send messages back and forth) has been around in various forms since the earliest days of electronic computers (1940's and 1950's). It wasn't until the late 1960's and early 1970's, however, that the real foundations of what has become the Internet were actually created.

The following is a short timeline showcasing some of the major highlights in the development of the Internet:
* (1957-1969) In 1957, the USSR launched Sputnik, which prompted the United States to create ARPA (Advanced Research Projects Agency) in 1958. ARPA (later renamed DARPA) was responsible fore developing the ARPANET (first operational in 1969). ARPANET was not the only network of its time, but it is the one that evolved into the global Internet.
* (1969-1972) ARPANET grows as more computers across the United States connect to it. By the end of 1972, roughly 30 computers were connected, mostly for scientific and military reasons. An interesting documentary called **Computer Networks: The Heralds Of Resource Sharing** was created in 1972 about the current state and future potential of computer networks.
* (1973-1983) The number of hosts continues to grow, including hosts from networks in other countries. Other uses for the Internet begin to emerge, such as the first MUD in 1979, a precursor to massively multiplayer online games like the World of Warcraft.
* (1983) The movie *War Games* features a high school student hacking into a national defense computer in an attempt to play a computer game. Is this movie significant to the history of the Internet? Maybe not, but the movie is great!
* (1985-1995) The National Science Foundation created the NSFNET, which became the "backbone" of the Internet in the United States allowing for high-speed data transfer across the country. Other parts of the world have also developed their own regional backbones.

###A Brief History of the World Wide Web
The World Wide Web came about much later than the Internet. By 1990, the basic infrastructure of the Internet was in place, but common people didn't use it. It was at this time that two new protocols were developed: GOPHER and HTTP. At first, the GOPHER protocol, which provided a convenient mechanism for people to share files over the Internet, was the most popular. However, in 1994 following the release of the first graphical Web browser in 1993 called Mosaic, the World Wide Web (the HTTP protocol) surged ahead. The explosive growth of the Web is difficult to describe. Within two decades of its inception in 1990, the World Wide Web had penetrated nearly every facet of modern life.

The following is a (very) short timeline showcasing some of the major highlights in the development of the World Wide Web:
* (1990) Time Berners-Lee and Robert Cailliau built all of the tools necessary for a working World Wide Web--a browser, an HTTP server, and an editor. Adoption of their system, however, was slow. Their intended audience, after all, were researchers and academics like themselves.
* (1993) Mosaic, the first graphical Web browser, leads to the popularization of the Web
* (1996-1998) The Web gets commercialized, which furthers its already explosive growth.
* (1998-present) Web technologies improve and the Web becomes ubiquitous. The websites that fascinated people in 1994 are laughable by todays standards.

###The Internet vs. the World Wide Web
The Internet and the World Wide Web are not the same thing. The World Wide Web can be best thought of as an application of the Internet. To fully understand how this is the case, you'll need to have a basic understanding of the protocol stack that makes the Internet work. This stack is composed of several layers.

####Link Layer
At the bottom of the stack are protocols for sending and recieving signals between two computers. These protocols for computers that are directly connected (i.e., on the same network), but what about computers that are on opposite sides of the planet?

####Internet Layer
The next layer up is the Internet layer, which ensures that each device connected to the Internet has a unique IP address. Thanks to the IP protocol, computers on opposite sides of the world can send each other messages if they have each others' IP addresses. Devices called routers help ensure that messages get sent in the right direction as they traverse the Internet towards their destination.

Fun Fact: The Internet works because everyone around has agreed to play by the same rules. That is, despite all of the ongoing conflict around the world, we've all agreed to follow the same computer protocols. In particular, we've agreed to follow the IP protocol so that our computers all have IP addresses and can communicate with one another. It is for this reason that Vincent Cerf, a man who played a key role in inventing the Internet protocol, has been famously photographed wearing a t-shirt that says, "IP on Everything." 

####Transport Layer
Even though the Internet Layer is enough to allow computers to communicate with one another over the Internet, there needs to be some assurance that messages were transported properly. For this reason, we have TCP (trasport control protocol).

It turns out that messages sent using TCP are broken into small packets that are reassembled at their destination. These packets don't all follow the same path, and it is possible that some of them arrive out of order. It's also possible that some packets get lost along the way. TCP provides some assurance that everything will work out in the end.

####Application Layer
Each layer of the Internet depends on the ones below it. In order for the World Wide Web to work, which uses the HTTP protocol, it must rely on the three layers below it to do their jobs:
* Computers on the same network must be able to communicate (Link Layer).
* Messages must be able to go from a computer on one network to a computer on any other network in the world (Internet Layer).
* There must be some reliability assurances for this all to work (Transport Layer).

With these pieces in place, we can start inventing interesting and useful ways to send messages across the Internet. It turns out that the most popular application of this amazing technology has been the World Wide Web, which is essentially the system of websites and webpages that we've come to know. Websites exist on special computers connected to the Internet called Web servers. When you visit a website, you are sending an HTTP request for a webpage. The Web server receives your request and kindly responds with the webpage you requested, sending it to you in a message.

##Domain names and URLs

##HTTP Requests and Responses
###Clients and Servers
###Example of a Server

##TCP, Packets, and Routers

##HTML, CSS, and JavaScript Resources
###HTML
###CSS
###JavaScript

##Other Resources on the Web

##W3C and Web Standards
###Web Browers and Compatibility

##Zip Files
##Bandwidth
###Download vs. Upload

##Hosting
##Server-Side Software

##WordPress.com and Friends
