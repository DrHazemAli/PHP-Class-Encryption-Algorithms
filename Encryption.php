<?php
/**
 * Encryption Algorithms Class
 * Written By : Dr. Hazem Ali
 * https://www.fb.com/Haz4m
 * Date: 01/12/2016
 * Time: 5:00 AM
 * License : GNU GENERAL PUBLIC LICENSE
 */

 Class Encryption
  {
    // DECLARE THE REQUIRED VARIABLES
    public $ENC_METHOD = "AES-256-CBC"; // THE ENCRYPTION METHOD.
    public $ENC_KEY = "SOME_RANDOM_KEY"; // ENCRYPTION KEY
    public $ENC_IV = "SOME_RANDOM_IV"; // ENCRYPTION IV.

    // DECLARE  REQUIRED VARIABLES TO CLASS CONSTRUCTOR
    function __construct($METHOD = NULL, $KEY = NULL, $IV = NULL)
     {
       try
        {
          // Setting up the Encryption Method when needed.
          $this->ENC_METHOD = (isset($METHOD) && !empty($METHOD) && $METHOD != NULL) ?
          $METHOD : $this->ENC_METHOD;

          // Setting up the Encryption Key when needed.
          $this->ENC_KEY = (isset($KEY) && !empty($KEY) && $KEY != NULL) ?
          $KEY : $this->ENC_KEY;

          // Setting up the Encryption IV when needed.
          $this->ENC_IV = (isset($IV) && !empty($IV) && $IV != NULL) ?
          $IV : $this->ENC_IV;
        }
        catch (Exception $e)
         {
           return "Caught exception: ".$e->getMessage();
         }
     }

    // THIS FUNCTION WILL ENCRYPT THE PASSED STRING
    public function Encrypt($string)
    {
      try
       {
         $output = false;
         $key = hash('sha256', $this->ENC_KEY);
         // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
         $iv = substr(hash('sha256', $this->ENC_IV), 0, 16);
         $output = openssl_encrypt($string, $this->ENC_METHOD, $key, 0, $iv);
         $output = base64_encode($output);
         return $output;
       }
       catch (Exception $e)
        {
          return "Caught exception: ".$e->getMessage();
        }
    }

    // THIS FUNCTION WILL DECRYPT THE ENCRYPTED STRING.
    public function Decrypt($string)
    {
      try
      {
        $output = false;
        // hash
        $key = hash('sha256', $this->ENC_KEY);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $this->ENC_IV), 0, 16);

       $output = openssl_decrypt(base64_decode($string), $this->ENC_METHOD, $key, 0, $iv);
       return $output;
      }
     catch (Exception $e)
      {
        return "Caught exception: ".$e->getMessage();
      }
    }

  }

?>
