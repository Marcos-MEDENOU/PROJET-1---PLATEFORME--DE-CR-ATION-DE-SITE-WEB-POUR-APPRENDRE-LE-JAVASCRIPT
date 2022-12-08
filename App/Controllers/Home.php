<?php

class Home{
    public function index(){
        header("location:../Views/home.php");
    }

    public function inscription()
    {
        header("location:../Views/Sig_up.php");
    }

    public function connexion()
    {
        header("location:../Views/Sig_in.php");
    }
}