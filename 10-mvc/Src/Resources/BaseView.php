<?php
namespace Src\Resources;

use Src\Resources\Contracts\ViewStructure;

class BaseView extends ViewStructure {
    public $baseView;
    public $baseViewVars;
    public function __construct(public $baseViewPath = 'app') {
        $this->baseView = $this->get();
        $this->baseViewVars = $this->viewVars($this->baseView);
    }
    public function get(){
        ob_start();
        include resource_layout_path($this->viewPathRebuilder($this->baseViewPath));
        return ob_get_clean();
    }
    public function viewVars($view){
        return self::getVars($view,'{{','}}')[0];
    }
}