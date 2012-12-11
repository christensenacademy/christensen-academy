#Internet

##Story

Computer technology has been advancing at a rapid rate, but the Internet does not yet exist. Computer scientists like yourself dream of building large computer networks that connect the entire world. But, there's a problem: existing networks have been built in isolation using their own proprietary protocols. Unless everyone can agree on the same open protocols, these networks will never be able to join together to form the Internet.

Thankfully, you and a small group of like-minded friends from around the world have agreed to implement the Internet protocol suite. Together, you will build a global network of networks. You will build the Internet.

##Two Phases of The Game
The game has two phases. The first is cooperative, the second is competitive.

In the first phase, players must work cooperatively to prove the effectiveness of the Internet protocol suite to the rest of the world. Using hosts, routers, switches, and other technologies, players must (a) build the physical infrastructure of the Internet and (b) successfully send messages to and from all of the hosts. This must be done in a timely fashion (6 turns or fewer). Otherwise, networks built on proprietary protocols will grow too strong to compete against, and the future of an open Internet will be doomed. Should this happen, the game is lost, and players may not advance to phase two.

In the second phase, players race against each other to be the first ones implement new applications of the Internet as described in RFC documents. Victory points are awarded in decreasing amount to the first, second, and third players to utilize a new technology.

##Background on the Internet (not necessary to play the game)
The Internet works by sending messages from computer to computer. For example, when you use the Internet to view webpages, it works something like this:

* Your computer sends a message to another computer (a Web server) requesting a webpage.
* The Web server receives your request and sends a message (the webpage itself) in response.
* Your computer receives the message and displays it on your screen.

These messages are not sent as a single unit. Instead, messages are broken into smaller *packets* that traverse the Internet independently and reassemble at their destination. How exactly these packets traverse the Internet and arrive at their intended destination is a more complicated matter. Understanding the basics of how this works requires understanding the Internet protocol stack.

###The Internet Protocol Stack



##Board and Pieces
The board is a hex of hexes (7 hexes per side).

###Player Pieces
Each player has their own collection of router and host hexes.
Each player has 10 packets.
Each player has 3 timeout dice.

##Turn Sequence
* Collect Money
* Buy Stuff (or Upgrade or Replace)
* Place Stuff
* Move Stuff
* Update Timeout Counters and Trash Failed Messages
* Research

##Before The Game
The board starts completely empty except for a single host for each player in their designated starting area. Each player starts with $15.

##Hex Types
There are four types of hexes: hosts, routers, switches, and connections. Gameplay revolves around sending packets between hosts, but doing this requires a network of routers, switches, and connections to connect the hosts.

###Hosts and Routers (IP Layer Technologies)
Each player has their own supply of hosts and routers and cannot use more then they've been given.

Hosts are computers on a network. Hosts send and receive messages with other hosts.

Routers interconnect networks. That is, if network A and network B want to communicate, they must each have a router, and those routers must be interconnected in some way.

Some rules for hosts and routers:
* Hosts and routers cannot **directly** connect to other host or routers. That is, they must have connection hexes in between them.
* Routers may connect to hosts, routers, and switches on their own network. However, when routers connect to other networks, they must connect to other routers on those networks.
* Hosts have unlimited capacity. Routers do not. Since routers must wait until connections are open to send packets, they operate on a queue or FIFO algorithm.

###Switches and Connections (Link Layer Technologies)
There is an unlimited supply of switches and connections to use, and the supply is common to all players.

Connections are used to interconnect hosts, routers, and switches.

Some rules for hosts and routers:
* Switches work the same as connections, but they also introduce an additional hop.
* Switches use queues just like routers.
* Switches may be connected to other switches. However, this introduces additional hops and will send packets back to the previous router or host in the event of getting lost.

##Packets
When a message is sent across the Internet, it is broken into little packets. In order for a message to be successfully delivered, all of the packets for that message must successfully arrive at the destination host computer before the message times out.

At any point during the game, a player may be sending one or more messages. However, each player is limited to using a maximum of 8 packets.

##Message Timeouts
When beginning to send a new message, a player must choose a timeout for the message in terms of the number of turns the message has to complete. Failure to complete a message within the timeout will result in a failed message, and no points will be scored.

An die is used to keep track of the timeouts. Each turn the value on the die is decreased. A die showing a value of "1" indicates that after the present turn completes, one more turn will be taken before the timeout completes. 

##Movement
Each turn, each packet moves

###Exceeding Capacity
####Routers
Packets lost immediately.
####Switches
Packets lost immediately.
####Connections
Packets go back to switch, router, or host and wait until the connection is free.


##Currency
Building the hosts, routers, switches, the the various connective technologies is expensive.

Currency is used to build and upgrade these technologies throughout the game.

5 currency is gained at the beginning of each turn. 8 currency is gained every time a new connection between networks is formed. Players split this sum if both contributed link layer hexes to the connection.

###Link Layer Prices
**Switches:** $5 for level 1, $8 for level 2
**Connections:** $1 per endpoint for level 1 (copper wire), $2 per endpoint for level 2 (fiber optic cable).
###Internet Layer Prices
**Routers:** $7 for level 1, $11 for level 2
**Hosts:** $10

##Capacity
Routers, switches, and connections each have a capacity. The capacity is the number of packets the particular technology can hold at any given point in time. For example, if a router has a capacity of 5, that means that the router can (at most) store 5 packets at any given point in time.

##Upgrades
As the game progresses, it will become necessary to upgrade technologies to handle larger quantities of data. Upgrading a technology simply means replacing an existing hex with a better one of exactly the same type. For example, upgrading a switch from level 1 to level 2 would require a player to pay the cost of the new switch then simply switch it out with the old one. Upgrading a hex cannot break connections.

* **Important Note:** During an upgrade, all packets currently on the hex being upgraded are lost.
* **Important Note:** When upgrading a connection that spans multiple hexes, only if all of the hexes are upgraded in a single turn will the packets be lost.

##Replacements
Whereas there is no penalty for upgrading a hex, replacing one costs $3. Replacing a hex must not break connections, but the type of hex piece may change. For example, a connection could be replaced by a switch, or a connection with just two endpoints could be replaced by a connection with four endpoints.

##Message Cards
###Telnet
* (1, 2)
###FTP
* FTP Image Upload (4, 0)
* FTP Music Download (0, 8)
###DNS
* DNS (1, 1)
###SSH
* SSH (1 out, 1 in, 2 out, 2 in )
###SMTP
* SMTP
###POP3
* POP3 (1 out, 10 in)
###HTTP
* HTTP (1 in, 10 out)
###HTTPS
* 

##Completing a message

###Special Action Cards
* (8) Avian Carrier (is capable of transmitting one packet from a host to a router (or vice versa) on the same network. Collect as many of these as possible.
* (8) Checksum: Negates the effects of a bit flip.
* (8) Bit Flip: Corrupt a packet of your choice.
* (8) Timeout Delay: Increase one of your message's timeouts by 2.

