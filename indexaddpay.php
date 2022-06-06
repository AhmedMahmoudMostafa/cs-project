<?php 
include_once "cashpay.php";
include_once "vodafonepay.php";
include_once "visapay.php";
include_once "fawrypay.php";
include_once "payment class.php";
include_once "trippay.php";
$method=$_REQUEST["id"];
payment($method);
function payment($method)
{
    if($method=="cash")
    {
        $pay=new trippay(new cashpayment());
        $pay->value=$_REQUEST["value"];
        $v=$pay->Dpay();
        echo $method;
        //echo $v;
    }
    if($method=="fawry")
    {
        $pay=new trippay(new fawrypay);
        $pay->value=$_REQUEST["value"];
        //$pay->phonenumber=$_REQUEST[""];
       // $pay->fawrynumber=$_REQUEST["fawry"];
        $v=$pay->Dpay();
        //$f=$pay->fawrypay();
        //echo $v;
    }
    if($method=='vodafone')
    {
        $pay=new trippay(new vodafonepay);
        $pay->value=$_REQUEST["value"];
       // $pay->phonenumber=$_REQUEST["phone number"];
        $v=$pay->Dpay();
        //echo $v;
    }
    if($method=="visa")
    {
        $pay=new trippay(new visa);
        $pay->value=$_REQUEST["value"];
       // $pay->password=$_REQUEST["password"];
        //$pay->expiration=$_REQUEST["exp"];
       // $pay->cardNumber=$_REQUEST["card"];
        $v=$pay->Dpay();
        //echo $v;
    }
    //$v=$pay->pay();
}
?>