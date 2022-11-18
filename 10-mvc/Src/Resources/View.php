<?php
namespace Src\Resources;

class View {
    public static function make(string $view,array $data = [])
    {
        $baseView = self::getBaseView();
        $contentView = self::getContentView( $view , $data );
        echo self::mixer($baseView,$contentView);
    }

    public static function makeError(int|string $statusCode)
    {
        $path = resource_error_path("{$statusCode}.php");
        if(file_exists($path)){
            include $path;
        }else{
            throw new \Exception("{$statusCode}.php Error View Nout Found in " . resource_error_path(),500);
        }
    }

    public static function getBaseView()
    {
        ob_start();
        include resource_layout_path('app.php');
        return ob_get_clean();
    }

    public static function getContentView(string $view,array $data = [])
    {
        ob_start();
        foreach($data as $key=>$value){
            $$key = $value;
        }
        include resource_view_path( self::viewPathRebuilder($view) );
        return ob_get_clean();
    }

    public static function viewPathRebuilder($view) // 'dashboard.index'
    {
       if(str_contains($view,'.')){
        $view = str_replace('.',ds(),$view); // dashboard/index
       }
       $view .= '.php';
       return $view;
    }

    public static function mixer($baseView,$contentView)
    {
        $baseViewVars = self::baseViewVars($baseView);
        $contentViewVars = self::contentViewVars($contentView);
        // dd($baseViewVars ,$contentViewVars);
        for ($i=0; $i < count($baseViewVars); $i++) { 
            $baseView = str_replace($baseViewVars[$i],$contentViewVars[$baseViewVars[$i]] ?? "",$baseView);
        }
        return $baseView;
    }

    public static function baseViewVars($baseView)
    {
        return self::getVars($baseView,'{{','}}')[0];
    }

    public static function contentViewVars($contentView)
    {
        $contentViewVars =  self::getVars($contentView,'{{','}}')[1];
        $contentViewVarsValues = [];
        foreach($contentViewVars AS $key=>$value){
            $v = substr($value,strpos($value,'=')+1);
            $k = strtok($value,'=');
            $contentViewVarsValues["{{{$k}}}"] = $v;
        }
        return $contentViewVarsValues;
    }

    public static function getVars($str,$startWord,$endWord){
        preg_match_all("/$startWord((.|\r\n)*?)$endWord/",$str,$matches);
        return $matches;
    }
}