<?php

namespace Docker\Api\Endpoint;

class SwarmUpdate extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param \Docker\Api\Model\SwarmSpec $body 
    * @param array $queryParameters {
    *     @var int $version The version number of the swarm object being updated. This is
    required to avoid conflicting writes.
    
    *     @var bool $rotateWorkerToken Rotate the worker join token.
    *     @var bool $rotateManagerToken Rotate the manager join token.
    *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
    * }
    */
    public function __construct(\Docker\Api\Model\SwarmSpec $body, array $queryParameters = array())
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/swarm/update';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('version', 'rotateWorkerToken', 'rotateManagerToken', 'rotateManagerUnlockKey'));
        $optionsResolver->setRequired(array('version'));
        $optionsResolver->setDefaults(array('rotateWorkerToken' => false, 'rotateManagerToken' => false, 'rotateManagerUnlockKey' => false));
        $optionsResolver->addAllowedTypes('version', array('int'));
        $optionsResolver->addAllowedTypes('rotateWorkerToken', array('bool'));
        $optionsResolver->addAllowedTypes('rotateManagerToken', array('bool'));
        $optionsResolver->addAllowedTypes('rotateManagerUnlockKey', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\SwarmUpdateBadRequestException
     * @throws \Docker\Api\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmUpdateServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\Api\Exception\SwarmUpdateBadRequestException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\SwarmUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\SwarmUpdateServiceUnavailableException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}