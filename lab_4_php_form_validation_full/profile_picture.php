<?php
if(! isset($_FILES['file']) ) {
    // error
 }

 const MAX_SIZE  = 5 * 1024 * 1024; //  5MB

if (filesize($_FILES['file']['tmp_name']) > MAX_SIZE) {
   // error
}

const ALLOWED_FILES = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
 ];
?>