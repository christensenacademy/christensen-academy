#Domain Names and URLs

A URL (Uniform Resource Locator) is used in an HTTP request to identify a specific resource on a Web Server. Here's an example:

```
http://christensenacademy.org/img/logo112.png
```

This URL points to a specific resource on the server for the Christensen Academy. In this case, the resource happens to be an image, but a resource could really be any type of computer file. With that basic concept in mind, lets take a look at the basic parts of a URL.

###Protocol
The `http://` or `https://` part of the URL--the latter of which has an "s" that stands for "secure"--simply declares that the HTTP protocol is being used. The HTTP protocal is used when sending messages to and from web servers. Most web developers don't need to know much about the HTTP protocol.

###Domain Names

The `christensenacademy.org` part of the URL is called a domain name. Domain names are important because they allow us to identify a web server without needing to know its IP address. That is, every web server on the internet has an IP address, such as `13.44.176.83`, but thankfully we don't need to memorize IP addresses. Instead, all we need to know are easy-to-remember domain names, such as `google.com` or `khanacademy.org`.

Of course, all messages sent across the Internet need to use IP addresses, so the way domain names work is that there are *Domain Name Servers* that convert domain names into IP addresses. For example, if you click on a link to go to a website, your computer must first send a message to a Domain Name Server to figure out the IP address for the server of the website you're trying to visit.

#####Top-Level and Sub Domains
`.com`, `.org`, `.edu`, `.gov`, and others are examples of *top-level domains*. There are a limited number of top-level domains, and all domain names must use one of them. For example, the `christensenacademy.org` has the top-level domain `.org`, and `christensenacademy` is a subdomain of `.org`. Some domains have futher subdomains, such as `maps.google.com`, where `maps` is a subdomain of `google.com`.

###Paths
The last part of a URL specifies a path to a resource at that domain. In the opening example `http://christensenacademy.org/img/logo112.png`, the `/img/logo112.png` part of the URL specifies the location and name of an image on the Christensen Academy server.

###Query Strings
At the end of some URLs, you'll notice a question mark followed by some other text. This is known as a *query string*. Here's an example:

```
http://www.youtube.com/watch?v=vW1EmDcwjrE&list=PLbdhPIoiglaXJyRqNx3X0VadCj38iF4ad
```

This query string lets YouTube's server know what video is being requested and from what playlist.


##Links to Other Resources
* **[Wikipedia: Domain Name](http://en.wikipedia.org/wiki/Domain_name)**
* **[Wikipedia: URL](http://en.wikipedia.org/wiki/Uniform_resource_locator)**
