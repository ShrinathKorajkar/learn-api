Go to C:\xampp\php and open the php.ini file.(search)
    ctrl + f. -> Search smtp
    SMTP = smtp.gmail.com
    smtp_port = 587 or 25
    sendmail_from = YourGmailId@gmail.com
    sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


Now, go to C:\xampp\sendmail and open the sendmail.ini file.
    Find [sendmail] 
    smtp_server = smtp.gmail.com
    smtp_port=587 or 25 //use any of them
    error_logfile = error.log
    debug_logfile = debug.log
    auth_username = YourGmailId@gmail.com
    auth_password = Your-Gmail-Password
    force_sender = YourGmailId@gmail.com(optional)

Restart xampp server or Apache

Here is the actual code that you have to write
    <?php
    $to_email = "receipient@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is test email send by PHP Script";
    $headers = "From: sender email";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }



**Note: If you are getting a warning message then Please configure “Less secure apps” settings as shown below. Sometimes without turning on the 'less secure apps' is the main reason the user didn't receive the mail.

=> Turning on 'less secure apps' settings as mailbox user

    Go to your (Google Account).
    On the left navigation panel, click Security.
    On the bottom of the page, in the Less secure app access panel, click Turn on access.
    If you don't see this setting, your administrator might have turned off less secure app account access (check the instruction above).
    Click the Save button.

** Now your email will be sent successfully.