<?php
class PagesController extends Controller{
public function index(){
    $this->view('index.html', ['page' => 'index']);
}
public function contacto(){
    $this->view('contacto.html', ['page' => 'contacto']);
}
public function sobre_mi(){
    $this->view('sobre_mi.html', ['page' => 'sobre_mi']);
}
}