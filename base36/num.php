<?php 
echo suma1('A1');
  function suma1($entrada){
    $base=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $entrada=str_split($entrada,1);
    if($base[35]!=$entrada[1]){
      $entrada[1]=$base[array_search($entrada[1], $base)+1];    
    }elseif($base[35]!=$entrada[0]){
      $entrada[1]=0;    
      $entrada[0]=$base[array_search($entrada[0], $base)+1];    
    }else{
      $entrada[0]=0;    
      $entrada[1]=0;    
    }
    $salida=$entrada[0].$entrada[1];
    return $salida;
  } # fin de la funcion suma1

  function generador_num_b36(){
    $b36=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $num=array(0,0);
    $corredor=0;
    $relevo=1;
    $n=0; 
    do{
    if($corredor<36){
      $num[1]=$b36[$corredor];
      $corredor++;
    }elseif($relevo<36){
      $num[0]=$b36[$relevo];
      $relevo++;
      $corredor=0;
      $num[1]=$b36[$corredor];
      $corredor++;
    }elseif($num[0]=='Z' && $num[1]=='Z'){
      $corredor=1;
      $relevo=1;
      $num=array(0,0);
    }
    echo $num[0].$num[1].'-'; 
    $n++;
    }while($n < 1296);
  }#fin de la funcion generador_num_b36

?>
