<?php
//interface

interface PaymentInterface
{
    public function payNow();
}
interface AuthInterface
{
    public function payNow();
}
class Visa implements PaymentInterface, AuthInterface
{
    public function loginFirst()
    {
        echo "Login first! \n";
    }

    public function payNow()
    {
        echo "Visa payment!";
    }

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Wave implements PaymentInterface
{
    public function payNow()
    {
        echo "Wave payment!";
    }

    public function paymentProcess()
    {
        $this->payNow();
    }
}

class Cash implements PaymentInterface
{
    public function payNow()
    {
        echo "Cash Payment!";
    }

    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Visa();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
