<?php

namespace Jane\Component\OpenApi2\Tests\Expected;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\EmptySpace|\Psr\Http\Message\ResponseInterface
     */
    public function getEmptyTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetEmptyTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Schema|\Psr\Http\Message\ResponseInterface
     */
    public function getTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTest(), $fetch);
    }
    /**
     * 
     *
     * @param int $id id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\TestIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTestById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestById($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Schema[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTestList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestList(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\TestComplexListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function getTestComplexList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestComplexList(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}