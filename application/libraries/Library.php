<?php 
class Library{
    public function printr($data){
        echo '<pre>'.print_r($data,true).'</pre>';
        exit(1);
    }
}