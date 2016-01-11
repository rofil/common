<?php

namespace Rofil\Common\Entities\Statics;

use Rofil\Common\Entities\Contracts\PeopleInterface;

class PeopleRepository implements PeopleInterface
{
    public function genders($gender)
    {
        if(isset($this->listGenders()[$gender]))
            return $this->listGenders()[$gender];
        return null;
    }

    public function listGenders()
    {
        return [
            1 => 'Pria',
            2 => 'Wanita'
        ];
    }

    public function relagions($relagion)
    {
        if(isset($this->listRelagions()[$relagion]))
            return $this->listRelagions()[$relagion];
        return null;
    }

    public function listRelagions()
    {
        return [
            1 => 'Islam',
            2 => 'Katolik',
            3 => 'Protestan',
            4 => 'Hindu',
            5 => 'Budha',
        ];
    }

}