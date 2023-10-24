<?php

include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		// 陣列>模擬資料庫
		return array(
			"貓咪的書" => new Book("貓咪的書", "六六貓", "很溫馨的書"),
			"猴子的書" => new Book("猴子的書", "猴子", "調皮的書"),
			"經典之作" => new Book("經典之作", "我", "經典")
		);
	}
	
	public function getBook($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
	
	
}

?>