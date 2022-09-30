<?php

// inheritance => reduce code duplication

class person {
    public $id;
    public $name;


    public function login()
    {

    }
}

class user extends person {
    public ?string $email; // 'galal.husseny@gamil.com' || null
    public string|int|float $password;
}


// class admin  extends user{

// }


// $user = new user; //
// $user->name = 'galal';




















// class UserWallet {
//     public function __construct() {
//         self::getBalance(); // 
//         echo "<br>";
//         static::getBalance(); // 
//     }
//     public static function getBalance()
//     {
//         echo "12000";
//     }
// }

// class AdminWallet extends UserWallet {
//     public static function getBalance()
//     {
//         echo "15000";
//     }
// }
// new UserWallet;
// new AdminWallet;



// encapsulation => security

// class user {
//     private $password; // min 8 chars

//     public function getPassword()
//     {
//         return $this->password;
//     }

//     public function setPassword($password)
//     {
//         if(strlen($password) < 8){
//             echo "error";
//         }else{
//             $this->password = password_hash($password,PASSWORD_BCRYPT);
//         }
//     }
// }

// $user = new user;
// $user->setPassword(123456789);
// echo $user->getPassword();




// abstraction => more maintable


// abstract class person {
//     public abstract function phone();
//     public function data()
//     {
//         echo 'data';
//     }
// }

// interface data {
//      function email();
// }

// class galal extends person implements data {
//     public function phone()
//     {
//         return '01000498488';
//     }
//     public function email()
//     {
//         return 'galal@gmail.com';
//     }
//     public function gender()
//     {
//         return 'male';
//     }
// }

// class sawsan extends person {
//     public function phone()
//     {
//         return '01-xxx-xxx-x';
//     }
// }



// polymorphism => organization



// class user {
//     public function login()
//     {
//         return "email & password";
//     }

//     public function logout()
//     {
//         return "destroy session";
//     }
// }

// $user = new user;
// echo $user->login();

// class admin extends user {
//     public function login()
//     {
//         return "phone & password";
//     }
// }
// echo "<br>";
// $admin = new admin;
// echo $admin->login();


// interface clickable {
//     function click();
// }

// class TurnON implements clickable {
//     public function click()
//     {
//         return __CLASS__;
//     }
// }


// class TurnOff implements clickable {
//     public function click()
//     {
//         return __CLASS__;
//     }
// }

// $turnOn = new TurnON;
// echo $turnOn->click();
// echo "<br>";
// $turnOff = new TurnOff;
// echo $turnOff->click();