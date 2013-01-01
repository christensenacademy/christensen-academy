##How the World Wide Web Works

The World Wide Web is just an application of the Internet. Just like every other application of the Internet, the World Wide Web relies upon hosts (computers) to have unique IP addresses for sending and receiving messages. What's interesting about the World Wide Web is the type of messages being sent--namely, webpages. It's also interesting to understand where these messages are going to and coming from.

###Client-Server Model
The World Wide Web is an example of a client-server model. This model is surprisingly simple. Just like in a restaurant, the job of the client is to make requests of the server. The job of the server is to take requests and fulfill them if possible.

The World Wide Web works exactly like this. Websites are maintained on special computers called *Web severs* that stand ready and waiting to process requests from computers like ours--the clients. As you browse the Web, your computer, the client, is sending requests to Web servers each and every time you visit a new page. The Web server is then in charge of processing requests from all around the world and sending back webpages to whomever asked for them.

Although not always the case, most websites are "hosted" on a single Web server, which may be located anywhere in the world.

**Interesting Aside:** In fact, with many website nowadays your computer is actually sending request even more frequently than this using something called AJAX to do partial page updates.

**Terminology Clarification:** There are other examples of computer software systems that operate on a client-server model like the World Wide Web, which is why I usually try to say "Web server" instead of just "server" to be clear that I'm talking about a server on the World Wide Web.

**A Point of Confusion:** Although I said Web servers were special computers, I think it's more accurate to think of them as regular computers with special software installed on them. Any computer could theoretically become a server if it had the right software installed on it. It wouldn't actually be that hard, for example, to turn the laptop computer I'm typing on right now into a Web server.

###Web Browsers and Webpages
Most people in developed countries use the Web every day. To do so, they use *Web browsers*, or just *browsers* for short. The five most popular Web browsers are currently Chrome, Firefox, Safari, IE (Internet Explorer), and Opera. Each of these browsers has the same job: render webpages for users to see and interact with.

#####What is a Webpage?
If you've never done so before, I encourage you to view the source of this webpage by right-clicking and choosing "view source" or some similar option. If you do this, you'll see the source code--that is, the HTML, CSS, and JavaScript--that makes up this webpage.

**Key Idea:** All webpages are made of this code, and the job of the Web browser is to interpret the code in order to display something meaningful to the user.

###HTTP (HyperText Transfer Protocol)
I should also point out that the requests from clients and responses from servers are special types of messages that adhere to the HTTP protocol. This protocol specifies the rules clients and servers must follow when sening messages related to the World Wide Web.

###Conclusion
Although many people don't have much of a clue as to how the World Wide Web works, it really isn't all that complicated. Websites live on special computers called Web servers. When we, the clients, want to visit a website, we send a request through our Web browser for a webpage. Thanks to the Internet, this message reaches the appropriate Web server. The server processes our request and sends back a webpage as a response. Our browser processes the response and displays the results.

And there you have it. Kowabunga,

Cam
