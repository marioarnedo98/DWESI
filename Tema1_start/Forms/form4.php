<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $result = validate_form();
    if(count($result[0])<0){
        show_form($result[0]);    
    }
    else{
        process_form();
    } 
}
else{
    show_form();
}
function process_form(){
    print "Hello, ".$_POST['my_name'];
    print " You have".$_POST['my_age']."Years";
}
function show_form($errors=[]){
    if($errors){
        print "Please correct these errors <ul><li>";
        print implode("</li><li>", $errors);
        print("</li></ul>");
    }
    print<<<_HTML_
    <form method="POST" action ="$_SERVER[PHP_SELF]">
        Your name: <input type="text" name="my_name">
        </br>
        Your age: <input type="text" name="my_age">
        </br>
        <input type="submit" value="Say Hello">
    </form>
_HTML_;
}
function validate_form(){
    $errors= array();
    $input= array();
    // if(strlen($_POST['my_name'])<3){
    //     $errors[]="Your name must be at least 3 letters long";
    // }
    $input['age']=filter_input(INPUT_POST, 'my_age', FILTER_VALIDATE_INT);
    if(is_null($input)||($input==false)){
        $errors[]= "Age must be an number ";
    }
    $input['name']=trim($_POST['my_name']?? '');
    if(strlen($input['name'])==0){
        $errors[]= "Your name is required ";
    return array($errors,$input);
}
}