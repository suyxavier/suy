<?php
    if(ses{
        session_destroy();
        header('Location: index.php');        
    }