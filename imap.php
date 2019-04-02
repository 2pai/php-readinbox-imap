<?php

    // email login credentials
    $email = array(
            'host' 		=> '{mail.your.site:143/notls}INBOX',
            'username' 	=> '_mainaccount@your.site',
            'password' 	=> 'password'
        );

     $read = imap_open($email['host'],$email['username'],$email['password']);
     $array = imap_search($read,'ALL');
    for ($i=0; $i < count($array); $i++) { 
        $message = imap_body($read,$array[$i],0);
        echo $message;
    }
        

