<?php
class DogsController extends Controller{
    public function index()
    { 
        $page= isset($_GET['page'])?$_GET['page']:1;
        $perpage= 5;
        $offset= ($page-1)*$perpage;
        $numrows = Dogs::count();
        $numpages=ceil($numrows/$perpage);
        $Dogs= Dogs::skip($offset)->take($perpage)->get();   
        $this->view('index.html', ['numpages' => $numpages, 'page' => $page, 'dogs'=>$Dogs]);
    }
    public function read(){
        $id=  func_get_args();
        $Dogs=Dogs::find($id);
        $this->view('read.html', ['Dog' => $Dogs]);
    }
    public function adopt(){
        $id = func_get_args();
        $Dogs = Dogs::find($id[0]);
        $userid=$_SESSION['user_data']['id'];
        $Dogs->adopted='1';
        $Dogs->users_id=$userid;
        $Dogs->save();
        header("Location: " . ROOT_URL);

    }
}
