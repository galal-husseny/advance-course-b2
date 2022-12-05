<?php
namespace Src\Resources\Contracts;

abstract class ViewStructure {
    public abstract function get();
    public abstract function viewVars($view);
    public static function getVars($str,$startWord,$endWord){
        preg_match_all("/$startWord((.|\r\n)*?)$endWord/",$str,$matches);
        return $matches;
    }
    public static function viewPathRebuilder($view) // 'dashboard.index'
    {
       if(str_contains($view,'.')){
        $view = str_replace('.',ds(),$view); // dashboard/index
       }
       $view .= '.php';
       return $view;
    }
}