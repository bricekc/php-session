<?php

declare(strict_types=1);

namespace Html\Form;

use Service\Session;

class SessionManagedCountrySelect extends \Html\Form\CountrySelect
{
    public const NAME="__Country__";

    public function __construct(string $firstOption = 'Pays')
    {
        Session::start();
        parent::__construct(self::NAME, "fr", $firstOption);
        $this->setSelectedFromSession();
        $this->setSelectedFromRequest();
        $this->saveSelectedIntoSession();
    }

    public function saveSelectedIntoSession()
    {
        $_SESSION[$this->getName()]=$this->getSelected();
    }

    public function setSelectedFromSession()
    {
        if (isset($_SESSION[$this->getName()])) {
            $this->setSelected($_SESSION[$this->getName()]);
        }
    }
}
