<?php
namespace Src\Resources;

use Src\Resources\Contracts\ViewStructure;

class ContentView extends ViewStructure {
    public $contentView , $contentViewVars;
    public function __construct(public $contentViewPath , public $data) {
        $this->contentView = $this->get();
        $this->contentViewVars = $this->viewVars($this->contentView);
    }
    public function get(){
        ob_start();
        foreach($this->data as $key=>$value){
            $$key = $value;
        }
        include resource_view_path( self::viewPathRebuilder($this->contentViewPath) );
        return ob_get_clean();
    }
    public function viewVars($view){
        $contentViewVars =  self::getVars($view,'{{','}}')[1];
        $contentViewVarsValues = [];
        foreach($contentViewVars AS $key=>$value){
            $v = substr($value,strpos($value,'=')+1);
            $k = strtok($value,'=');
            $contentViewVarsValues["{{{$k}}}"] = $v;
        }
        return $contentViewVarsValues;
    }
}