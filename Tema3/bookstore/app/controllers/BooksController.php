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
        $this->view('delete.html', ['eliminar' => "ha sido elimininado"]);

    }
}
