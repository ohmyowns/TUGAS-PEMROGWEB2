<!membandingkan 2 buah bilangan yang diinput>
<?php
  $A = $_POST["A"];
  $B = $_POST["B"];

  function jumlah($A,$B)
  {    
      $jumlahbil = $A + $B;
      return $jumlahbil;
  }

  function kurang($A,$B)
  {       
      $kurangbil = $A - $B;
      return $kurangbil;
  }

  function kali($A,$B)
  {
      $kalibil = $A * $B;
      return $kalibil;
  }

  function bagi($A,$B)
  {
      $bagibil = $A / $B;
      return $bagibil;
  }

Echo "<br>";