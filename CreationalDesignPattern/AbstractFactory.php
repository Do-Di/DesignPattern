<?php
class FurnitureFactory{
    private function __construct()
    {
    }
    public static function getFurnitureFacroty($meterialType)
    {
        switch ($meterialType)
        {
            case "wood":
                return new woodFactory();
            case "plastic":
                return new plasticFactory();
            default :
                return new Exception("This factory type is unsupported");
        }
    }
}
abstract class abstractFactory{
    abstract public function createChair();
    abstract public function createTable();
}
class woodFactory extends abstractFactory
{
    public function createChair()
    {
        return new woodChair();
    }
    public function createTable()
    {
        return new woodTable();
    }
}
class plasticFactory extends abstractFactory
{
    public function createChair()
    {
        return new plasticChair();
    }
    public function createTable()
    {
        return new platicTable();
    }
}
interface Chair{
    public function create();
}
interface Table{
    public function create();
}
class plasticChair implements Chair{
    public function create()
    {
        return "create Plastic Chair";
    }
}
class woodChair implements Chair{
    public function create()
    {
        return "create Wood Chair";
    }
}
class plasticTable implements Table {
    public function create()
    {
        return "create Plastic Table";
    }
}
class woodTable implements Table {
    public function create()
    {
        return "create Wood Table";
    }
}

try {
    $factory= FurnitureFactory::getFurnitureFacroty("plastic");
    $chair= $factory->createChair();
    echo $chair->create();
}catch (Exception $e)
{
    echo $e->getMessage();
};