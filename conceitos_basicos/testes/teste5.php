<?php
  if(isset($_get["operacao"])){
    $operacao = $_get["operacao"];
    $arg1 = $_get["arg1"];
    $arg2 = $_get["arg2"];

    if($operacao == "-NOT-"){
        echo "arg1 $arg1 != arg2 $arg2:";
        echo $arg1 != $arg2;
    }
  }
