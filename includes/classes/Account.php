<?php
	class Account {

		private $errorArray;
	

		public function __construct()
		{
			$this->errorArray = array();
        }
        

        public function login($un,$pw){
            
            if(Constants::IfisLogged($un,$pw) == 1)
            
            {
               return true;
            }

            else {
                array_push($this->errorArray,Constants::$loginFailed);
                return false;
            }
        }

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->errorArray) == true) {
				return Constants::insertUserDetails($un, $fn, $ln, $em, $pw);
			}
			else {
				return false;
			}

        }
        
		public  function  getError($error){
                if(!in_array($error,$this->errorArray)){  
					$error = "";
				}
				return "<span class='error'>{$error}</span>";
		}

		private function validateUsername($un) {
           
           
			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$us_err_le);
				return;
            }
            

            if(Constants::getUsername($un) != 0){

                    array_push($this->errorArray,Constants::$usernameTaken);
                    return;
            }

		}

		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$fn_err_le);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$ln_err_le);
				return;
			}
		}

		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray, Constants::$email_err_ma);
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$email_err_va);
				return;
			}

        if (Constants::getEmail($em) != 0) {

            array_push($this->errorArray, Constants::$emailTaken);
            return;
        }

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$pass_err_ma);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$pass_err_co);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$pass_err_le);
				return;
			}

		}


	}
