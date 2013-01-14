#File Paths
In order to use images and make hyperlinks on webpages, developers need to specify file paths to resources (picture files, HTML files, etc.). Sometimes these resources are on their own computers (relative paths). Sometimes these resources are somewhere else on the World Wide Web (absolute paths).

These paths are often specified in an attribute of an element. Here are some examples:
```html
<a href="http://www.google.com">Click this to go to Google!</a> <!-- a path to another website -->
<img src="lorem.png"> <!-- a path to a picture file on your computer -->
<!-- a path to a document on your computer -->
<a href="reports/january_2013.pdf">Download the latest report.</a>
```
##URLs and Absolute Paths
When you specify a path to a resource on the World Wide Web that isn't on your own website, you'll need to specify the *URL* (Uniform Resource Locator) for that resource. We call this type of path an *absolute* path.

##URLs
URLs (Uniform Resource Locators), provide all of the information necessary to locate a resource on the World Wide Web.

Here is an example of a URL: `http://christensenacademy.org/img/logo.png`

We can break this URL up into two main parts. The first part, `http://christensenacademy.org`, provides the information for connecting to the correct Web server. Thanks to the magic of the Internet, this part of the URL will ensure that a request for the resource gets sent to the correct server, which in this case is the server for the Christensen Academy.

The second part, `img/logo.png` is the path to the resource on that server, which in this case is an image file. On the server for the Christensen Academy is a folder called img, and in that folder is the file logo.png. This should make a bit more sense if you understand how relative paths work.

##Relative Paths
Relative paths specify the path to a resource on your site. When constructing a relative path, the goal is to describe how to get to the other resource.

If the other resource is in the same folder as your HTML file, then just specify the file name (e.g., `href="lorem.png"`). If the other resource is in another folder, just follow these two rules:

1 To go up to a parent folder, type `../`
2 To go into a child folder, type `name_of_folder/`

###Examples of Relative Paths
`index.html` is a path to a file called index.html in the same folder as the current file.

`employees/cam.png` is a path to a file called cam.png in a folder called employees, which is in the same folder as the current file.

`products/candy/sucker.html` is a path to a file called sucker.html, which is inside of a folder called candy, which is inside a folder called products, which is in the same folder as the current file.

`../finances/cam.html` is a path that starts by going up out of the current folder to the parent folder. From there, the path goes into a folder called finances and points to a file named cam.html.
