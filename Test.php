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
    $EncryptedString =  $Encryptor->Encrypt("Hello World");
    echo "ENCRYPTED STRING :> {$EncryptedString} \r\n";
  //--------------------------------------------//


  //--------------------------------------------//
  /* Decrypt String Test
  * PLEASE DO NOT PERFORM THIS CALL IF THE PASSED
  * PARAMETER IS NOT ENCRYPTED */
    $EncryptedString = "WDBmZlZodU4zd2hCNkpqRjNCOXhndz09";
    $DecryptedString =  $Encryptor->Decrypt($EncryptedString);
    echo "DECRYPTED STRING :> {$DecryptedString} \r\n";
  //--------------------------------------------//



  /* --------------- PASSWORD ENCRYPTION ---------------*
  * THE ENCRYPTION CLASS DESIGNED TO PERFORM THE MAX.
  * ENCRYPTION FOR PASSWORDS, WHICH CANNOT BE DECRYPTED
  * IN ORDER TO ENCRYPT A PASSWORD, PLEASE CALL THIS FUNC.
  */
  $Password = "123456";
  $EncryptedPassword = $Encryptor->EncryptPassword($Password);
  echo "ENCRYPTED PASSWORD :> {$EncryptedPassword} \r\n";

  /* YOU CAN PERFORM THE PASSWORD EQUALITY (IF STATEMENT)
   * by using the condition below : */
   if ($Encryptor->EncryptPassword($Password) == $EncryptedPassword)
    {
      // Password is Correct ....
    }else { /* Password is not correct. */ }
  // --------------------------------------------------//
