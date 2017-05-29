<?php

    class Validator{

        /*
        *   Check Required Fields
        */
        public function isRequired($field_array){
            foreach($field_array as $field){
                if($_POST[''.$field.'']==''){
                    return false;
                }
            }
            return true;
        }

        /*
        *   Validate email
        */
        public function isValidEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            else{
                return false;
            }
        }

        /*
        *   Make sure passwords match
        */
        public function passwordsMatch($password1,$password2){
            if($password1==$password2){
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>