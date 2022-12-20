<?php

declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;
use PDO;
use Entity\Country;

class CountryCollection
{
    public static function findAll(): array
    {
        $requete = MyPdo::getInstance()->prepare(
            <<<SQL
        select id, code, name 
        from country
        order by name
SQL
        );
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Country::class);
    }
}
