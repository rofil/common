<?php

namespace Rofil\Common\Entities\Contracts;

interface PublishTypeInterface
{
    public function publish($publish);
    public function listPublishes();
}