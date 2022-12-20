<?php

declare(strict_types=1);

use Html\AppWebPage;
use Html\Form\SessionManagedCountrySelect;
use Service\Session;
use Html\CountryFlag;
$webPage = new AppWebPage('Country selector');



$select = new SessionManagedCountrySelect('country');
$flag= new CountryFlag($select->getSelected(), "img/flags/".$select->getSelected().".png");


$webPage->appendContent(
    <<<HTML
    <form class="country-selector">
        {$select->toHtml()}
        <input type="submit" value="Choisir">
    </form>
    HTML
);
$webPage->appendContent($flag->toHtml());
echo $webPage->toHTML();
