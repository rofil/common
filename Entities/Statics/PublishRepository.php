<?php

namespace Rofil\Common\Entities\Statics;

use Rofil\Common\Entities\Contracts\PublishTypeInterface;

class PublishRepository implements PublishTypeInterface
{
    public function publish($publish)
    {
        if(isset($this->listPublishes()[$publish]))
            return $this->listPublishes()[$publish];
        return null;
    }

    public function listPublishes()
    {
        return [
            1 => 'Published',
            0 => 'Draft'
        ];
    }

}