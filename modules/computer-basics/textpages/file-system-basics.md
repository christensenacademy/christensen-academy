#File System Basics

Computers rely on storage devices like hard drives, flash drives, DVDs, and so on to hold computer files. The main point I want to make is that all of these storage devices use file systems. In some some cases, a single device may be *partitioned* into multiple file systems, but this is somewhat rare. Usually, each device has only one file system.

Operating systems have become increasingly adept at hiding file system information from you in the name of being user-friendly. This is especially true in the case of smartphones and tablets, but it's also true of newer versions of Windows and Mac. More and more computer users are relying almost exclusively on search features to find their files; hence, fewer and fewer computer users have solid understandings of where their files are actually getting saved. If you're planning on working with computers beyond what the average user does, it will be good for you to get comfortable with the basics of how file systems work.

##Hierarchy
File systems have a hierarchical or tree-like structure composed of files and directories (also called folders). At the very top of the hierarchy is a root directory. **All other files and directories belong to or are children of the root directory.** Depending on your operating system, the children of the root directory will be different. I encourage you to try to find your root directory and explore it. You'll likely find interesting things, such as where your programs are stored.

**Note:** The terms "folder" and "directory" are pretty much interchangeable. Some people use the term folder to refer only to the graphical representation of a directory, but that seems like quibbling...

Here's an image of the directory structure of the files and folder for the Christensen Academy.

![](http://christensenacademy.org/modules/computer-basics/textpages/file-system.png)

##A Note on Terms
We use many different words to describe hierarchical structures like files systems. Here are a few:

* **Parent-Child:** Folders can contain other folders. The parent folder is the folder containing the child folders. It should be noted that every parent can have many children, but every child can only have one parent. Also, terms like grandparent and grandchild can also be used.
* **Nested:** When refering to a parent-child relationship, we might say that the child is *nested* inside the parent.
* **Subfolder-Subdirectory:** Means the same as child folder. It refers to the idea of having a folder inside of a folder.
* **Root:** The parent that has no parent. The directory from which all subdirectories originate. There is only one root per file system.
* **Tree:** In computer science, people often speak of "trees" to describe hierarchical relationships. The root *node* of the tree is like the trunk, the child nodes are like branches, and the child noes of the child nodes are like branches coming off of branches, and at the very end are--you guessed it--leaves!

##The Cloud
The main point of this textpage is that all files are stored on file systems somewhere. The advent of "the cloud" has confused this otherwise simple notion by allowing us to save our files "out there" without needing to think about where "out there" really is. However, I'd like to make the point that even files stored in "the cloud" are actually stored on a physical devices (i.e., hard drive) somewhere else in the world, probably in a data center somewhere. All of these physical devices have file systems just like your your computer has a file system.

Hard drives and file systems haven't really changed. The only thing that has changed is the way we use them.