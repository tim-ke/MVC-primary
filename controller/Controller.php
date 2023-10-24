<?php
include_once("model/Model.php");//引用一次

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		
		// 傳送GET	請求判斷式
		if($_SERVER['REQUEST_METHOD'] == "GET"){
			
			if (!isset($_GET['book']))
			{
				$books = $this->model->getBookList();
				include_once 'view/booklist.php';
			}
			else
			{
				$book = $this->model->getBook($_GET['book']);
				include_once 'view/viewbook.php';
			}
		}
	}
}

?>