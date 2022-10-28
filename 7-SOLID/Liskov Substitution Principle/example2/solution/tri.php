<?php

class tri implements shape {
    private $base,$height;


    /**
     * Set the value of base
     *
     * @return  self
     */ 
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}