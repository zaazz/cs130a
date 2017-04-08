# Group assignment 4: Files & Regular Expressions
*Due: Apr 17 by 10PM*

**Requirements:**

Work together to write a program which does the following things.  It may be useful to have an early discussion to divide up the work then periodically check in with your deliverables.  Ideally each piece should have some method of testing it's working independent of the total solution.

Create a file management program which allows the user to browse through a directory tree and either view/download a file/image or upload a new file/image into the directory.  

- The user shouldn't be able to navigate below the 'base directory' you choose.
- The user should be able to create a new subdirectory.
- one function should handle getting files from a directory
this should work for any directory and be re-useable.  Perhaps the directory to search could be a parameter.  similarly, a file glob or types could be an optional parameter.
- one function should move uploaded files into a particular directory. (again, this should be re-useable for any directory).
If you can write this function to be generally useable to move files between directories, that would be ideal but at least it should move uploaded files into place.
- one function should convert a list of file paths into URL's
This should be portable.. try not to have non-relative paths and if you can figure out how to use PHP variables to generate the URL's to the files that would be ideal.
- File URL's should be links where clicking on the filename will display/download the file
image URL's should be small versions of the image (you needn't resize them, just tell the browser to display them in a small bounded area) which when clicked on will pop up a new window with the full size image.
- you'll need to be able to tell the difference between an image and a non-image... perhaps a function can be used here.
- organize how you feel is best.

**Group members:**

- Gregory Gorlen
- Jennifer Howe
- Freja Koch
- Gabriel Lynch