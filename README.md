user authentication system 

features like 1.registration,
              2.login, 
              3.password reset  
              4.email verification.
 
Technologies involved 1.JavaScript - form validation, 
                      2.PHP - processing the authentication logic, 
                      3.MySQLi - storing user credentials. 

SuperFeature -> Contact Form with Email Sending.
 ~sends an email to the website owner when a user submits a message. 

Using either a.)PHP's mail function
             b.)PHPMailer.


              





*README.md


REFERAL POINTS;

SITUATION -> after signup it is not displaying message saying 
           successful or unsuccessful error , it just straight 
           up goes to the login page,after logging in, even if 
           password is correct it outputs incorrect password and 
           neither does it redirect me to the logout.php nor 
           directs me back to login

SOLUTION -> Redirect after successful signup: In your process-signup.php 
          file, you are redirecting to login.php regardless of whether the 
          signup was successful or not. You should only redirect if the 
          signup was successful. Modify the if condition to check if the 
          signup was successful before redirecting.

         -> Message display after signup: Currently, you're storing 
           the message in the session but not displaying it after the 
           redirect. You need to retrieve the message from the session
            in login.php and display it.

         -> Redirect after login: In your login.php, you're redirecting
            to logout.php after login, which is incorrect. You should 
            redirect to the dashboard or some other page after successful login.
