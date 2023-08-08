<?php
class MyClass
{
    public $bien1 = 'Giatri 1';
    public $bien2 = 'Giatri 2';
    public $bien3 = 'Giatri 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       echo "Lặp lại MyClass :<br>";
       foreach ($this as $key => $Giatri) {
           print "$Giatri<br>";
       }
    }
}

$class = new MyClass();

foreach($class as $key => $Giatri) {
    print "$key => $Giatri<br>";
}
echo "<br>";


$class->iterateVisible();

?>