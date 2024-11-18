<?php
class Bike{
    public $name = "Royal Enfield";
    public $model = "Classic";
    public $color = "Olive";
    
        function info(){

            return"This Wonder full Bike";
        }
}
$my_bike = new Bike();
echo $my_bike -> name , "<br>";
echo $my_bike -> model , "<br>";
echo $my_bike -> color , "<br>";
echo $my_bike -> info() , "<br>";

?>