<?php

namespace src\photos;

class BasicPhoto implements Photo
{
    public function display()
    {
        echo "Displaying basic photo\n";
    }
}

