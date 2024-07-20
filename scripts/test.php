<?php
class myIterator implements Iterator{
    protected $array =[];

    public function set($key, $val){
        $this->array[$key] = $val;
    }
    public function get($key)
    {
        return $this->array[$key];
    }
    public function current()
    {
        return current($this->array);
    }
    public function key()
    {
        return key($this->array);
    }
    public function next(): void
    {
        next($this->array);
    }
    public function rewind(): void
    {
       reset($this->array);
    }
    public function valid(): bool
    {
        return null !== key($this->array);
    }        
}

$foo = new myIterator;
$foo->set(42, 342);
$foo->set(43, 342);
foreach($foo as $key =>$value)
{
    
    echo "<pre>".$key.'=>'.$value."</pre>";
    echo "\n";
}

?>
<?php 
class Myclass implements IteratorAggregate{
    
    public $array;

    public function __construct()
    {
        $this->array = [3,4,5,123,132,31,2];
    }
    
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this);
    }
}

$new = new Myclass();

foreach($new as $key => $val)
{
    echo "<pre>";
    echo $key."=>".print_r($val)."\n";
    echo "</pre>";
}
?>