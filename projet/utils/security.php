<?php
    function hashedpwd($str){
        return password_hash($str,CRYPT_SHA256);
    }
?>