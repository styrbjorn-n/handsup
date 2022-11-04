![](https://github.com/styrbjorn-n/php_assignment_01/blob/master/Mandatory_gif.gif)

The gift was apparently mandatory.

# php assignment 01

This project exists cuz im lazy and i imagen others may also be.
So to make life a litle easier i made a website a teacher can use to see what students need help and in what order the students have requested help.
Link goes here

# Code Review

Code review written by [Tommi Uusitalo](https://github.com/tpku).

Clean and simple tracking application. Overall really clean code structure and descriptive comments.

1. `student_list.js:16` - The input data should probably be sanitized before getting declared?
2. `student_list.js:18-28` - Same as above. If not done before this function should include more sanitation to avoid unwanted input data.
3. `studen_list.js:16` - Input accept both numbers, whitespace, specialchars which is confusing since the function should accept names. Allthough it's removing scripts and tags 👍
4. `student_adder, clearer & remover.php` - These functions could've been merged?
5. `header-, footer- & index.css` - Both header and footer files are empty and index.css contains minimal line of code. Could've been deleted or merged, perhaps put in a directory.

# Testers

Adam Garali.
