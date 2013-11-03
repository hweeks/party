Join Our Party!
====

This project is a simple sign up form. I am going to use PHP to validate and throw the errors. I chose PHP so that it would be a server side authentication, and if the user has javascript turned off there will be no changes to the user experience. A requirement of this project was to be imageless, so I am doing a bit of drawing in CSS3 to accomplish this. For bonus I have to send an email and add an easter egg to the site.

There are a few simple requirements for vaildation.

For usernames:
-all lower case
-only one period

For passwords:
-Minimum of 8 characters
-Must contain at least one letter
-Must contain at least one number

For emails:
-Any TLD will work


The plan is to make a single PHP file to validate and send the info to my boss. The file will handle validation in if statements. to push errors I will use $_SESSION. I am going to build an error array, pass that to $_SESSION, and then pass back to my main page. I will use a few lines of PHP to modify the input boxes to show error states.