<?php
class BooksController extends Controller
{
    public function index()
    {
        $page= isset($_GET['page'])?$_GET['page']:1;
        $perpage= 5;
        $offset= ($page-1)*$perpage;
        $numrows = Books::count();
        $numpages=ceil($numrows/$perpage);
        $books= Books::skip($offset)->take($perpage)->get();   
        $this->view('index.html', ['books' => $books, 'numpages' => $numpages, 'page' => $page]);
    }

    public function add()
    {
        if(!isset($_SESSION['is_logged_in'])){
            Messages::setMsg('No estas registrado', 'error');
            header("Location: " . ROOT_URL);
        }
        else{
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
           Books::add();
           header("Location: ".ROOT_URL);
        }else{
            $this->view('add.html', ['añadir'=>""]);
        }   
    }
    }
    public function delete()
    {  
        if(!isset($_SESSION['is_logged_in'])){
        Messages::setMsg('No estas registrado', 'error');
        header("Location: " . ROOT_URL);
    }else{
       $id=  func_get_args();
        Books::destroy($id);
        header("Location: ".ROOT_URL);
    }
    }
    public function read(){
        $id=  func_get_args();
        $book=Books::find($id);
        $this->view('read.html', ['book' => $book]);
    }
    public function pdf(){
        $books=Books::all();
        $pdf= new PDF('L','mm','A4');
        $header = array('ID','Name', '$','Authors', 'Publisher', 'ISBN');
        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->BuildTable($header,$books);
        $pdf->Output('LibrosdeMario.pdf', 'D');
    }
}
