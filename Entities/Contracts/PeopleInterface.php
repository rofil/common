<?php

namespace Rofil\Common\Entities\Contracts;

interface PeopleInterface
{
    public function genders($gender);
    public function listGenders();
    public function relagions($relagion);
    public function listRelagions();
}