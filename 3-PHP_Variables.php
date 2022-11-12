<?php


//PHP has three different variable scopes:

//    local
//    global
//    static



// 1 global

$x = 5;
$y = 10;

function global1() {
  global $x, $y;
  $y = $x + $y;
}

global1();
echo "variable global" +  $y; // outputs 15



// 2  local

function local() {
    $x = 10; // local scope
    echo "variable local" + $x;
  }
  local();
  
  // using x outside the function will generate an error
  echo "variable local $x";


//    static
  function static1() {
    static  $x = 0;
    echo "variable static" +  $x;
    $x++;
  }
  
  static1();
  static1();
  static1();
