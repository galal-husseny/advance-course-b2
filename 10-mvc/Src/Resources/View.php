<?php
namespace Src\Resources;

use Src\Resources\Contracts\ViewStructure;

class View {
    public static function make(string $view,array $data = [])
    {
        echo self::mixer(new BaseView(),new ContentView( $view , $data ));
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

    public static function mixer(BaseView $baseView,ContentView $contentView)
    {
        for ($i=0; $i < count($baseView->baseViewVars); $i++) { 
            $baseView->baseView = str_replace($baseView->baseViewVars[$i],
            $contentView->contentViewVars[$baseView->baseViewVars[$i]] ?? "",
            $baseView->baseView);
        }
        return $baseView->baseView;
    }

}