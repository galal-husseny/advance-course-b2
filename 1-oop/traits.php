<?php

// trait data {
//     public function import()
//     {

//     }

//     public function export()
//     {
        
//     }
// }

// trait media {
//     public $image;
//     public function upload()
//     {
//         # code...
//     }

//     public function destroy()
//     {
//         # code...
//     }
// }

// class person {
//     public $id;
//     public $name;
// }


// class user extends person {
//     use data , media;
// }

// print_r(new user);



trait data {
    public function upload()
    {
        echo __TRAIT__; // data
    }
}

trait media {
    public function upload()
    {
        echo __TRAIT__; // media
    }
}


class me {
    use media,data{
        data::upload AS uploadDataFromDataTrait;
        media::upload insteadof data;
    }
}

(new me)->uploadDataFromDataTrait();





class x {
    const y = 5;
    public static $b;
}

x::y;


interface z {
    const k = 5;
}

z::k;


trait g {
    public static $b;
}

g::$b;