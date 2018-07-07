<?php
class Person {


    public $firstname;
    public $lastname;
    public  $birth_date;
    public $age;

    public function __construct($a,$b,$c)
    {
        $this->firstname = $a;
        $this->lastname = $b;
        $this->birth_date = $c;

    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function setFirstName($new_name){
        $this->firstname = $new_name;

    }


    public function getAge(){
        $today = date("Y-m-d");
        $diff = date_diff(date_create($this->birth_date), date_create($today));


        $this->age =  $diff->format('%y');
    }

}


$obj = new Person('poxos','poxosyan','2014-01-01');

echo"<pre>";print_r($obj);
$obj->setFirstName('petros');
echo"<pre>";print_r($obj);
$age = $obj->getAge();
echo"<pre>";print_r($obj);



class Student extends Person {

    public function setLastName($new_lastname){
        $this->lastname = $new_lastname;

    }

}


$obj2 = new Student('Petros', 'Petrosyan','1999-01-01') ;
echo"<pre>";print_r($obj2);
print_r($obj2->getFirstName());
$obj2->setFirstName('Martiros');
$obj2->setLastName('Martirosyan');
$age = $obj2->getAge();
echo"<pre>";print_r($obj2);
