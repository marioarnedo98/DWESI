<?php
class BooksController extends Controller{
   public function index(){
       $books = Books::all();
       $this->view('index.html' , ['books'=> $books]);
   }
   public function add(){
    $this->view('add.html' , ['books'=> "Mis libros"]);
   }
   public function delete(){
    $this->view('delete.html' , ['books'=> "Mis libros"]);
   }
}