function foo(array $arr) {
  $newArray = $arr; //create a copy of array 
  foreach ($newArray as &$value) {
    //Some operations
  }
}

function bar(array $arr) {
  $newArray = array_map(function ($value) {
    //Some operations
    return $value;
  }, $arr);
} 