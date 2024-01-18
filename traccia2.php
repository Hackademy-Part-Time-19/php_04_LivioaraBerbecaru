<?php

// traccia2 classificazione animale

class Vertebrates {


    public function __construct(){

        $this->VertebratesPrint();

    }

    protected function VertebratesPrint(){

        echo "Sono un animale vertebrato";

    }

}

class Warm_blooded extends Vertebrates {


    public function __construct(){

        $this->WarmBloodedPrint();

    }

    protected function WarmBloodedPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Caldo";

    }
}

class Mammals extends Warm_blooded {


    public function __construct(){

        $this->MammalsPrint();

    }

    protected function MammalsPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Caldo\nSono un mammifero";

    }
}

class Birds extends Warm_blooded {


    public function __construct(){

        $this->BirdsPrint();

    }

    protected function BirdsPrint(){

        echo "\nSono un animale vertebrato\\nSono un animale a Sangue Caldo\\nSono un'uccello";

    }
}

class Cold_blooded extends Vertebrates {


    public function __construct(){

        $this->ColdBloodedPrint();

    }

    protected function ColdBloodedPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo";

    }
}

class Fish extends Cold_blooded {


    public function __construct(){

        $this->FishPrint();

    }

    protected function FishPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSPLASH!";

    }
}

class Reptiles extends Cold_blooded {


    public function __construct(){

        $this->ReptilesPrint();

    }

    protected function ReptilesPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSono un rettile";

    }
}

class Amphibians extends Cold_blooded {


    public function __construct(){

        $this->AmphibiansPrint();

    }

    protected function AmphibiansPrint(){

        echo "\nSono un animale vertebrato\nSono un animale a Sangue Freddo\nSono un'anfibio";

    }
}

$magikarp = new Fish();