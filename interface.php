<?php
interface Lawnmower {
    public function cut_grass();
}
 
class Kubota implements Lawnmower {
    public function cut_grass(){
        return 'cutting major grass';
    }
}
 
class JohnDeere implements Lawnmower {
    public function cut_grass(){
        return 'cutting grass like a champion';
    }
}
class Scissors implements Lawnmower {
    public function cut_grass(){
        return 'Finished cutting the grass in 14.2 hours.';
    }
}
class Landscaper
{
    protected $mower;
    protected $customer;
    
    public function __construct($customer = ''){
        $this->mower = $mower;
        $this->customer = $customer;
    }
    
    public function help_customer(){
        return 'Finished mowing '. $this->customer .' lawn';
    }
}
 
$landscaper = new Landscaper('The Johnsons');
echo $landscaper->help_customer().'</br>';
// string 'Finished mowing The Johnsons lawn' (length=33)
 
$landscaper = new Landscaper('The Thompsons');
echo $landscaper->help_customer().'</br>';
// string 'Finished mowing The Thompsons lawn' (length=34)
 
$landscaper = new Landscaper('The Henrys');
echo $landscaper->help_customer().'</br>';

$landscaper = new Landscaper('The McFlys');
echo $landscaper->help_customer().'</br>';

?>