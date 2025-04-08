<?php
class Core
{

    public function __construct($foi)
    {
     $this->run();
    }
    public function run()
    {
if(isset($_GET['pag'])){
    $url = $_GET['pag'];
}
if(!empty($url)){

}
    }
}

$result = new Core("é");
