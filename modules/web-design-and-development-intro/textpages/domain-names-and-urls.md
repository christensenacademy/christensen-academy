#Domain Names and URLs

A URL (Uniform Resource Locator) is used in an HTTP request to identify a specific resource on a Web Server. Here's an example:

```
http://christensenacademy.org/img/logo112.png
```

This URL points to a specific resource on the server for the Christensen Academy. In this case, the resource happens to be an image, but a resource could really be any type of computer file, though most URLs point to webpages.

###Protocol
The `http://` part of the domain name is usually not displayed by Web browsers nowadays, though it was in the past. This part of the URL simply states that the HTTP protocol is being used. If you're browsing the Web, you're really never using any other protocol besides HTTP, so this inforation seems uneccessary; hence, many modern browsers don't show it, but it is still an important part of every URL

#####HTTPS

The "s" in `https://` stands for "secure". When you see this, it lets you know that messages are being sent across the Internet using encryption--that is, if someone intercepted a message being sent between you and the server, they wouldn't be able to read it because it would be encoded.

###Domain Names

The `christensenacademy.org` part of the URL is called a domain name. Domain names are important because they allow us to identify a Web server without needing to know its IP address. That is, every Web server on the Internet has an IP address, such as `13.44.176.83`, but thankfully we don't need to memorize IP addresses. Instead, all we need to know are easy-to-remember domain names, such as `google.com` or `christensenacademy.org`.

Of course, all messages sent across the Internet need to use IP addresses, so the way domain names work is that there are *Domain Name Servers* that convert domain names into IP addresses. For example, if you click on a link to go to a website, your computer must first send a message to a Domain Name Server to figure out the IP address for the server of the website you're trying to visit. Once your computer has the IP address, it is ready to communicate with the server however it needs to.

#####Top-Level and Sub Domains
`.com`, `.org`, `.edu`, `.gov`, and others are examples of *top-level domains*. There are a limited number of top-level domains, and all domain names must use one of them. For example, the `christensenacademy.org` has the top-level domain `.org`, and `christensenacademy` is a subdomain of `.org`. Some domains have futher subdomains, such as `maps.google.com`, where `maps` is a subdomain of `google.com`.

The important thing to realize is that every domain name, such as `maps.google.com`, gets resolved to an IP address by Domain Name Servers.

###Paths
The last part of a URL specifies a path to a resource at that domain. In the opening example `http://christensenacademy.org/img/logo112.png`, the `/img/logo112.png` part of the URL specifies the location and name of an image on the Christensen Academy server.

###Query Strings
At the end of some URLs, you'll notice a question mark followed by some other text. This is known as a *query string*. Here's an example:

```
http://www.youtube.com/watch?v=vW1EmDcwjrE&list=PLbdhPIoiglaXJyRqNx3X0VadCj38iF4ad
```

This query string lets YouTube's server know what video is being requested and from what playlist.

###Conclusion
URLs are used to specify the location of a resource on the World Wide Web. Usually the resource being specified is a webpage, but it can also be another type of file, such as an image.

--Cam
