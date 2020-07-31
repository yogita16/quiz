<?php
    session_start();
    if(session_destroy())
    {
        header("Location: ../first_page.html");
    }