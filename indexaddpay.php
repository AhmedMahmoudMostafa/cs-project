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
        echo ""."<h1> cash payment </h1>";
        $pay=new donerpay(new cashpayment());
        $pay->value=$_REQUEST["value"];
        $v=$pay->Dpay();
    }
    if($method=="fawry")
    {
        echo ""."<h1> fawry payment </h1>";
        $pay=new donerpay(new fawrypay);
        $pay->value=$_REQUEST["value"];
        $np=$_REQUEST["Number"];
        $pf=$_REQUEST["fawry"];
        $v=$pay->Dpay();
        //$f=$pay->fawrypay();
        echo "phone number"."<br>";
        echo $np."<br>";
        echo "fawry number"."<br>";
        echo $pf;

    }
    if($method=='vodafone')
    {
        echo ""."<h1> vodafone payment </h1>";
        $pay=new donerpay(new vodafonepay);
        $pay->value=$_REQUEST["value"];
        $pn=$_REQUEST["phonenumber"];
        $v=$pay->Dpay();
        echo "phone number "."<br>";
        echo $pn."<br>";
    }
    if($method=="visa")
    {
        echo ""."<h1> visa payment </h1>";
        $pay=new donerpay(new visa);
        $pay->value=$_REQUEST["value"];
        $pe=$_REQUEST["exp"];
        $pc=$_REQUEST["card"];
        $v=$pay->Dpay();
        echo "expiration"."<br>";
        echo $pe."<br>";
        echo "cardNumber"."<br>";
        echo $pc ."<br>";
    }
}
?>