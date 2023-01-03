<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/DB.php";
class todoModel extends DB{

  private $content;
  private $authorID;
  private $id;

  function __construct($todo, $authorID){
    parent::__construct();
    $this -> content = $todo;
    $this -> authorID = $authorID;
  }

  function addTodo(){
    var_dump($this -> getConnect());
    $stmt = $this -> getConnect() -> prepare("INSERT INTO todos (content, authorID) VALUES (?, ?)");

    $stmt -> bindParam(1, $this -> content);
    $stmt -> bindParam(2, $this -> authorID);

    $stmt -> execute();
    $this -> id =  $this -> getConnect() -> lastInsertId();

    return $this -> fetch();
  }

  function fetch(){
    $stmt = $this -> getConnect() -> prepare("SELECT * FROM todos WHERE id=?");
    $stmt -> bindParam(1, $this ->id);
    $stmt -> execute();
    return $stmt -> fetch(PDO::FETCH_ASSOC);
  }

}