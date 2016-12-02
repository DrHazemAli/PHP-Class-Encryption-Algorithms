<?php
/**
 * Encryption Algorithms
 * Written By : Dr. Hazem Ali
 * https://www.fb.com/Haz4m
 * Date: 01/12/2016
 * Time: 5:00 AM
 * License : GNU GENERAL PUBLIC LICENSE
 */

  require("Encryption.php");

  /*
  if you want to change the encryption method, key or IV
  you can do it by passing the new parameters when
  the encryption class being called.
  e.g. : $encryption = new Encryption("METHID", "KEY", "IV");
  */

  // Initialize Class with the default settings.
  $Encryptor = new Encryption();

  //--------------------------------------------//
  /* Encrypt String Test */
    echo $Encryptor->Encrypt("Hello World");
  //--------------------------------------------//


  //--------------------------------------------//
  /* Decrypt String Test
  * PLEASE DO NOT PERFORM THIS CALL IF THE PASSED
  * PARAMETER IS NOT ENCRYPTED */
    echo $Encryptor->Encrypt("Encrypted Hash");
  //--------------------------------------------//
