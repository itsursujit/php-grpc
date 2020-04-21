<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Calculator;

/**
 */
class CalculatorClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     * @throws \Exception
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Calculator\Sum $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Sum(\App\Calculator\Sum $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/app.Calculator/Sum',
        $argument,
        ['\App\Calculator\Result', 'decode'],
        $metadata, $options);
    }

}
