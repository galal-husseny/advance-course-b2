<?php

$data = "{{title=index}}
sdkldkas;fd;lsdaklasjdfl;slak
{{content=<h1>hello</h1>
    <p>sfsdf</p>}}fd;ssdfdsjdlsdfsdl";
// get one string {{title = index}}
// function getStringBetweenTwoStrings($str,$startWord,$endWord){
//     $subStringStart = strpos($str,$startWord) + strlen($startWord); // 4
//     $subStringEnd = strpos($str,$endWord); // 15
//     $substrlen = $subStringEnd - $subStringStart; // 11
//     return substr($str,$subStringStart,$substrlen);
// }

// echo getStringBetweenTwoStrings($data,'{{','}}');

// get multi strings {{title = index}} , {{content = asda}}
// function getStringBetweenTwoStrings($str,$startWord,$endWord){
//     $startPositions = strposs($str,$startWord);
//     $endPositions = strposs($str,$endWord);
//     $startSecondPositions = [];
//     $endFirstPositions = [];
//     $substrs = [];
//     if(count($startPositions) != count($endPositions)){
//         return false;
//     }

//     array_walk($startPositions,function($value,$index) use (&$startSecondPositions){
//         if($index % 2 != 0){
//             $startSecondPositions[]  = $value;
//         }
//     });
//     array_walk($endPositions,function($value,$index) use (&$endFirstPositions){
//         if($index % 2 == 0){
//             $endFirstPositions[]  = $value;
//         }
//     });
//     for ($i=0; $i < count($endFirstPositions); $i++) { 
//         $length = $endFirstPositions[$i]-$startSecondPositions[$i] -1;
//         $substrs[] = substr($str,$startSecondPositions[$i]+1,$length);
//     }
//     print_r($substrs);
// }

// function strposs($str , $char){
//     $strLen = strlen($str);
//     $positions = [];
//     for($i = 0; $i < $strLen;$i++){
//         if($str[$i] == $char){
//             $positions[] = $i;
//         }
//     }
//     return $positions;
// }


// getStringBetweenTwoStrings($data,'{','}');


function getStringBetweenTwoStrings($str,$startWord,$endWord){
    preg_match_all("/$startWord((.|\r\n)*?)$endWord/",$str,$matches);
    return $matches;
}

print_r(getStringBetweenTwoStrings($data,'{{','}}'));