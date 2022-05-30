<?php 
include_once "class cash pay.php";
include_once "class vodafone pay.php";
include_once "class visa pay.php";
include_once "class fawrypay.php";
include_once "Class payment.php";
include_once "donerpay.php";
$method=$_REQUEST["id"];
payment($method);
function payment($method)
{
    if($method=="cash")
    {
        $pay=new donerpay(new cashpayment());
        $pay->value=$_REQUEST["value"];
        $v=$pay->Dpay();
        echo $v;
    }
    if($method=="fawry")
    {
        $pay=new donerpay(new fawrypay);
        $pay->value=$_REQUEST["value"];
        //$pay->phonenumber=$_REQUEST[""];
       // $pay->fawrynumber=$_REQUEST["fawry"];
        $v=$pay->Dpay();
        //$f=$pay->fawrypay();
        echo $v;
    }
    if($method=='vodafone')
    {
        $pay=new donerpay(new vodafonepay);
        $pay->value=$_REQUEST["value"];
       // $pay->phonenumber=$_REQUEST["phone number"];
        $v=$pay->Dpay();
        echo $v;
    }
    if($method=="visa")
    {
        $pay=new donerpay(new visa);
        $pay->value=$_REQUEST["value"];
       // $pay->password=$_REQUEST["password"];
        //$pay->expiration=$_REQUEST["exp"];
       // $pay->cardNumber=$_REQUEST["card"];
        $v=$pay->Dpay();
        echo $v;
    }
    //$v=$pay->pay();
}
?>