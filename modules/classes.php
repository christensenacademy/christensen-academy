<?php
class video {
  public $title;
  public $code;
  
  public function __construct($code, $title){
    $this->code = $code;
    $this->title = $title;
  }
}

class textpage {
  public $filename;
  public $title;
  
  public function __construct($filename, $title){
    $this->filename = $filename;
    $this->title = $title;
  }
}

class challenge {
  public $filename;
  public $title;
  public $left;
  public $top;
  
  public function __construct($filename, $title, $left, $top){
    $this->filename = $filename;
    $this->title = $title;
    $this->left = $left;
    $this->top = $top;
  }
}
?>