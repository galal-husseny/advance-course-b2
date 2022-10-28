
<?php 

class cat implements normalAnimal , animalWithLegs {
    public function eat()
    {
        return "cheese";
    }
    public function drink()
    {
        return "milk";
    }
    public function run()
    {
        return "with legs";
    }
}