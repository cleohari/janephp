<?php

namespace Github\Exception;

class ScimDeleteUserFromOrgNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\ScimError
     */
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Resource Not Found');
        $this->scimError = $scimError;
    }
    public function getScimError() : \Github\Model\ScimError
    {
        return $this->scimError;
    }
}