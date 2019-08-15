<?php

namespace Omnipay\Evoca\Message;

use Omnipay\Evoca\Message\AbstractRequest;

/**
 * Class VerifyEnrollmentRequest
 * @package Omnipay\Evoca\Message
 */
class VerifyEnrollmentRequest extends AbstractRequest
{
    /**
     * @return mixed
     */
    public function getPan()
    {
        return $this->getParameter('pan');
    }

    /**
     * Set the request pan.
     *
     * @param $value
     * @return $this
     */
    public function setPan($value)
    {
        return $this->setParameter('pan', $value);
    }

    /**
     * Prepare data to send
     *
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('pan');

        $data = parent::getData();

        $data['pan'] = $this->getPan();

        return $data;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->getUrl() . '/verifyEnrollment.do';
    }
}