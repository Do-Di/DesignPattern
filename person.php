<?php
class Person
{
    private $Name;
    private $Age;
    private $Id;
    public function __construct($Name,$Age,$Id)
    {
        $this->Name=$Name;
        $this->Age=$Age;
        $this->Id=$Id;
    }
    public function Sua()
    {
        echo "Ho Ten $this->Name, tuoi $this->Age, Ma Id $this->Id";
    }
}

$person =new Person("dong",14,"12345");
$person->Sua();
//Khoa dm
?>