<?php

namespace Omnipay\Evoca\Message;

use Omnipay\Evoca\Message\AbstractRequest;

/**
 * Class GetOrderStatusExtendedRequest
 * @package Omnipay\Evoca\Message
 */
class GetOrderStatusExtendedRequest extends AbstractRequest
{
    /**
     * Prepare data to send
     *
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('transactionId');

        $data = parent::getData();

        $data['orderId'] = $this->getTransactionId();

        if ($this->getLanguage()) {
            $data['language'] = $this->getLanguage();
        }

        return $data;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->getUrl() . '/getOrderStatusExtended.do';
    }
}