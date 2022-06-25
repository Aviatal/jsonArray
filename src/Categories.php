<?php
declare(strict_types=1);

namespace App;

class Categories
{
    public function getCategory(array $list): array
    {
        $categories = [];
        $lenght = sizeof($list);
        for($i = 0; $i < $lenght; $i++) 
        {
            $key = $list[$i]["translations"]["pl_PL"]["category_id"];
            $name = $list[$i]["translations"]["pl_PL"]["name"];
            $categories[$key] = $name;
        }
        

        return $categories;
    }
    function arrayWrite(
        array $array,
        array $categories,
        string $index = ''
        )
    {
        foreach($array as $k => $v){
            if( is_array( $v ) ){
                $index = $index . " " . $k;
                $this->arrayWrite($v, $categories, $index);
                $index = substr( $index, 0, -1 );
            } else{
                if(array_key_exists($v, $categories)){
                    echo "$k:$v, name: {$categories[$v]}, $index <br>";
                    //“id”:19”, “name”:”Zdrowie i uroda”,”children”:[]},
                } else {
                    echo "$k:$v, name:\"\", $index <br>";
                }
            }
        }
    }
}