<?php

declare(strict_types=1);

namespace Html\Form;

use Entity\Collection\CountryCollection;

class CountrySelect
{
    private string $name;
    private string $selected;
    private string $firstOption;

    public function __Construct(string $name, string $selected='fr', string $firstOption='Pays')
    {
        $this->name=$name;
        $this->selected=$selected;
        $this->firstOption=$firstOption;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSelected(): string
    {
        return $this->selected;
    }

    public function setSelected(string $selected): void
    {
        $this->selected = $selected;
    }

    public function getFirstOption(): string
    {
        return $this->firstOption;
    }

    public function setFirstOption(string $firstOption): void
    {
        $this->firstOption = $firstOption;
    }

    public function toHtml(): string
    {
        $listePays=CountryCollection::findAll();
        $form=<<<HTML
    <select name="{$this->getName()}">
    <option value="">{$this->getFirstOption()}</option>
HTML;
        foreach ($listePays as $pays) {
            $option="";
            if ($pays->getCode()===$this->getSelected()) {
                $option="selected";
            }
            $form.= <<<HTML
    <option value="{$pays->getCode()}" {$option}>{$pays->getName()}</option>
    HTML;
        }
        return $form.=<<<HTML
    </select>
    HTML;
    }

    public function setSelectedFromRequest()
    {
        if (isset($_REQUEST[$this->getName()])) {
            $this->setSelected($_REQUEST[$this->getName()]);
        }
    }
}
