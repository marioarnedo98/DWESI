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
        $this->view('add.html', ['anadir' => "ha sido añadido"]);

    }
    public function delete()
    {
       $id=  func_get_args();
        Books::destroy($id);
        header("Location: .");

    }
}
