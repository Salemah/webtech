<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student{
        public $name;
        public $id;
        public $cgpa;
       function set_data($name,$id,$cgpa){
            $this->name=$name;
            $this->id=$id;
            $this->cgpa=$cgpa;
        }
        function get_name(){
            return $this->name;
            
        }
        function get_id(){
            return $this->id;
            
        }
        
        function get_cgpa(){
            return $this->cgpa;
            
        }
       
    }
    $s = new Student();
    $s->set_data('tanvir','19-39383-1',4.0);
    echo"Name:".$s->get_name().",id:".$s->get_id().",cgpa:".$s->get_cgpa()."<br/>";
    
    ?>
</body>
</html>