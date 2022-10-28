<?php
// high level


class mother {
    public function narrate(story $stroy)
    {
       echo "began of stroy :". $stroy->getStory();
    }
}


$newMother = new mother;
// $newMother->narrate(new \PDO);
$newMother->narrate(new book);
$newMother->narrate(new newspaper);
$newMother->narrate(new website);