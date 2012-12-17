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
When you specify a path to a resource on the World Wide Web that isn't on your own website, you'll need to specify the *URL* (Uniform Resource Locator) for that resource. We call this type of link an *absolute* link. Of course, you can also specify paths to resources on your own site using absolute paths, but when resources are on your own site, it usually makes more senes to use a [relative path](#relative-paths) instead.

##URLs
URLs (Uniform Resource Locators), provide all of the information necessary to locate a resource on the World Wide Web.

Here is an example of a URL: `http://christensenacademy.org/img/logo.png`

We can break this URL up into two main parts. The first part, `http://christensenacademy.org`, provides the information for connecting to the correct Web server. Thanks to the magic of the Internet, this part of the URL will ensure that a request for the resource gets sent to the correct server, which in this case is the server for the Christensen Academy.

The second part, `img/logo.png` is the path to the resource on that server, which in this case is an image file. On the server for the Christensen Academy is a folder called img, and in that folder is the file logo.png. This should make a bit more sense if you understand how relative paths work.

##Relative Path
Relative paths specify the path to a resource on your site. When constructing a relative path, the goal is to describe how to get to the other resource. If the other resource is in the same folder as your HTML file, then just specify the file name (e.g., `href="lorem.png"`). If the other resource is in another folder, just follow these two rules:
* To go up to a parent folder, type `../`
* To go into a child folder, type `name_of_folder/`

All of the examples in this section will be based off of the following folder structure ([actual files found here](https://github.com/christensenacademy/web-design-intro/tree/master/1_HTML_basics/relative-links)):

```html
<!-- Note: Not real html. Think of this as a diagram describing a folder structure. -->
<folder name="relative-links">
  <folder name="employees">
    <resource type="webpage" name="cam.html">
    <resource type="webpage" name="eric.html">
  </folder>
  <folder name="products">
    <folder name="candy">
      <resource type="webpage" name="candy_bars.html">
      <resource type="webpage" name="twinkies.html">
    </folder>
    <folder name="electronics">
      <resource type="webpage" name="computers.html">
      <resource type="webpage" name="electric_violins.html">
    </folder>
  </folder>
  <resource type="webpage" name="about.html">
  <resource type="webpage" name="index.html">
</folder>
```
###Examples of Relative Paths
* A path from about.html to index.html: `index.html`
* A path from candy_bars.html to twinkies.html: `twinkies.html`
* A path from about.html to cam.html: `employees/cam.html`
* A path from index.html to twinkies.html: `products/candy/twinkies.html`
* A path from twinkies.html to index.html: `../../index.html`
* A path from cam.html to twinkies.html: `../products/candy/twinkies.html`