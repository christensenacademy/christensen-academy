#Domain Names and URLs

A URL (Uniform Resource Locator) is used in an HTTP request to identify a specific resource on a Web Server. Here's an example:

```
http://christensenacademy.org/img/logo112.png
```

This URL points to a specific resource on the server for the Christensen Academy. In this case, the resource happens to be an image, but a resource could really be any type of computer file, though most URLs point to webpages.

###Domain Names

The `christensenacademy.org` part of the URL is called a domain name. Domain names are important because they allow us to identify a Web server without needing to know its IP address. That is, every Web server on the Internet has an IP address, such as `13.44.176.83`, but thankfully we don't need to memorize IP addresses. Instead, all we need to know are easy-to-remember domain names, such as `google.com` or `christensenacademy.org`.

Of course, all messages sent across the Internet need to use IP addresses, so the way domain names work is that there are *Domain Name Servers* that convert domain names into IP addresses. For example, if you click on a link to go to a website, your computer must first send a message to a Domain Name Server to figure out the IP address for the server of the website you're trying to visit. Once your computer has the IP address, it is ready to communicate with the server however it needs to.

#####Top-Level and Sub Domains
`.com`, `.org`, `.edu`, `.gov`, and others are examples of *top-level domains*. There are a limited number of top-level domains, and all domain names must use one of them. For example, the `christensenacademy.org` has the top-level domain `.org`, and `christensenacademy` is a subdomain of `.org`. Some domains have futher subdomains, such as `maps.google.com`, where `maps` is a subdomain of `google.com`.

The important thing to realize is that every domain name, such as `maps.google.com`, gets resolved to an IP address by Domain Name Servers.

--Cam
