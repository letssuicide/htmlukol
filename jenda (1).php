<?php
declare(strict_types=1);

/**
 * Description of User
 *
 * @author jan
 */
class jhUser {
public $jhname= "jan";
public $jhage = 17;
public $jhheight = 172;
public $jhweight = 74;
public $jhpri= "hostalek";

protected $jhoi;
protected $jhvoi;
protected $jhhoi;

private $jhloi;
private $jhahoj;

public function __construct() {

}

/**
 * setter
 * @author jan
 * @param string $jhloi
 */
 function setjhloi(string $jhloi){
     //nastavuje hodnotu pro jhloi
$this -> jhloi = $jhloi;
}

/**
 * setter
 * @author jan
 * @param int $jhahoj
 */
 function setjhahoj(int $jhahoj){
$this -> jhahoj = $jhahoj;
}
 
/**
 * getter
 * @author jan
 * @return string
 */
 function getjhname () : string{
    /*
     * vrací hodnotu 
     * jhname
     */
     return $this ->jhname;
 }
 
 /**
  * getter
  * @author jan
  * @return int
  */
 function getjhage () : int{
     return $this ->jhage;
 }
 
 /**
  * getter
  * @author jan
  * @return int
  */
 function getjhheight () : int{
     return $this ->jhheight;
 }
 
 /**
  * getter
  * @author jan
  * @return int
  */
 function getjhweight () : int{
     return $this ->jhweight;
 }
 
 /**
  * getter
  * @author jan
  * @return string
  */
 function getjhpri () : string{
     return $this ->jhpri;
 }
}

      $user = new jhUser();
      $user->setjhloi("loi");
      $user->setjhahoj(1175);
      echo $user->getjhname()."<br>";
      echo $user->getjhage()."<br>";
      echo $user->getjhheight()."<br>";
      echo $user->getjhweight()."<br>";
      echo $user->getjhpri()."<br>";
      var_dump($user);