<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php        

        class customException extends Exception {   //re-throw example
              public function errorMessage() {
                //error message
                $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
                return $errorMsg;
              }
            }

            $email = "someone@example.com";

            //try {
              try {          //run as-is then uncomment inner try & braces to compare
                //check for "example" in mail address
                if(strpos($email, "example") == FALSE) {
                  //throw exception if email is not valid
                  throw new Exception($email);
                }
              }
              catch(Exception $e) {
            //    //re-throw exception
                throw new customException($email);
            //  }
            }

            catch (customException $e) {
              //display custom message
              echo $e->errorMessage();
              //exit;                       //skips processing below if used
            }

            echo "</br>";
                    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
                    try {           
                        $db = 
                            new PDO($dsn, 'root', '');
                        // other statements
                    } catch (PDOException $e) {
                        echo 'PDOException: ' . $e->getMessage();
                    } catch (Exception $e) {
                        echo 'Exception: ' . $e->getMessage();
                    }

        ?>
    </body>
</html>
