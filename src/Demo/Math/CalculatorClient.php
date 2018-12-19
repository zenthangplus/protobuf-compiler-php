<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Demo\Math;

/**
 */
class CalculatorClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Demo\Math\AddMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Add(\Demo\Math\AddMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/demo.math.Calculator/Add',
        $argument,
        ['\Demo\Math\AddResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Demo\Math\SubtractMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Subtract(\Demo\Math\SubtractMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/demo.math.Calculator/Subtract',
        $argument,
        ['\Demo\Math\SubtractResponse', 'decode'],
        $metadata, $options);
    }

}
