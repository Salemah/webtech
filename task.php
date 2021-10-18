<!DOCTYPE html>
<html>
<head>
  
  <title> taskk 0</title>
</head>
<body>


<?php 
class Account{
public $a_name;
public $number;
public $balance;

public function deposit($amount)
{
  echo " <br/>After Deposit: ";
  if($amount>10)
  {
    $this->balance += $amount;
  }
}

public function withdraw($amount)
  {
    echo " <br/>After Withdraw: ";
    if ($amount <= $this->balance) {
      $this->balance -= $amount;
      return true;
    }
                return false;

  }
  public function transfer($amount)
  {
    echo " <br/>After Transfer: ";
    if ($amount <= $this->balance) {
      $this->balance -= $amount;
      return true;
    }
                return false;

  }

function set_data($a_name,$number,$balance)
{
$this->a_name=$a_name;
$this->number=$number;
$this->balance=$balance;
}
function get_data()
{
$a=$this->a_name;
$n=$this->number;
//$b=$this->balance;
return array($a,$n);
}
function get_balance()
{
return $this->balance;
}
}
$x=new Account();
$x->set_data('salem','123456',1300);
$y=$x->get_data();
echo "Account name : ".$y[0]."  <br/> Mobile Number: ".$y[1]."<br/>Current Balance: ".$x->get_balance();
$x-> deposit(600);
echo $x->get_balance();
$x-> withdraw(1100);
echo $x->get_balance();
$x-> transfer(1700);
echo $x->get_balance();


 ?>

</body>
</html>