<?php
interface Bank
{
    public function getBankName();
}

class BIDV implements Bank
{
    public function getBankName()
    {
        return "BIDV";
    }
}

class Vietinbank implements Bank
{
    public function getBankName()
    {
        return "VIETINBANK";
    }
}

class  ACB implements Bank
{
    public function getBankName()
    {
        return "ACB";
    }
}

class BankFactory
{
    private function __construct()
    {
    }

    public static function getBank($bankType)
    {
        switch ($bankType) {
            case "acb":
                return new ACB();
            case "bidv":
                return new BIDV();
            case "vietinbank":
                return new Vietinbank();
            default :
                throw new Exception("This bank type is unsupported");
        }
    }
}
try {
    $bank = BankFactory::getBank("acb");
    echo $bank->getBankName();
}catch (Exception $e)
{
    echo $e->getMessage();
}