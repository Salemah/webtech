<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>    This is class </h1>
    <?php
class Student{
    public $name;
    public $id;
    public $cgpa;
    function set_data($name,$id,$cgpa)
    {
    $this->name=$name;
    $this->id=$id;
    $this->cgpa=$cgpa;
    }
    function get_data()
    {
    $n=$this->name;
    $i=$this->id;
    $c=$this->cgpa;
    return array($n,$i,$c);
    }
    function get_name()
    {
    return $this->name;
    }
    function get_id()
    {
    return $this->id;
    }
    function get_cgpa()
    {
    return $this->cgpa;
    }
    }
    $s=new Student();
    $s->set_data('Arpita','18-XXXXX-1',4.0);
    echo "My name is:".$s->get_name()." , my id is:".$s->get_id()." and my cgpa is:".$s->get_cgpa()."<br/>";
    $s1=new Student();
    $s1->set_data('Nasif','18-XXXXX-1',4.0);
    $a=$s1->get_data();
    echo "My name is:".$a[0]." , my id is:".$a[1]." and my cgpa is:".$a[2];
    ?>
</body>
</html>