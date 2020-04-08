<?php

namespace App\Dal;

use App\Entity\Nation;
use Doctrine\ORM\Mapping as ORM;

class Nation_Parti_factory {

    private $factory;

    public function __construct($connection)
    {
        $this->factory = $connection;
    }


    /**
     * @param $nation
     * Permet de détruire les relations NM entre une nation et ses partis.
     * Utile lors de la redéfinition des partis d'une nation.
     */
    public function clearNationParti(Nation $nation) {

        $RAW_QUERY = 'DELETE FROM nation_parti WHERE relation_id = '.$nation->getId().';';
        $smt = $this->factory->prepare($RAW_QUERY);
        $smt->execute();
    }

}
