<?php
class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        $this->view('index.html', ['books' => $books]);
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('add.html', ['anadir' => "ha sido añadido"]);
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
           Books::add();
           header("Location: ".ROOT_URL);
        }
        

    }
    public function delete()
    {
       $id=  func_get_args();
        Books::destroy($id);
        header("Location: ".ROOT_URL);

    }
    public function read(){
        $id=  func_get_args();
        $book=Books::find($id);
        $this->view('read.html', ['book' => $book]);
    }
}
