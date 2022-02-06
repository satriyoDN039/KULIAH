<?php
class Controller //sebagai class controller utama
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}