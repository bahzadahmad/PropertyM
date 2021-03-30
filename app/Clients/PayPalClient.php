<?php
namespace App\Clients;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
class PayPalClient
{
    /**
     * Returns PayPal HTTP context instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    public function context()
    {
        return new ApiContext($this->credentials());
    }
    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     *
     * Paste your client_id and client secret as below
     */
    protected function credentials()
    {
        $clientId     = 'AfLBbHXSBjVP0dyMmpn802QEv6wWj7Fs0x0TboAYal73Liin6PDalzYv1J4RMcRW8NrGfZjFJuuVSpeL';
        $clientSecret = 'ENJ8RpPUtEW_kQfq2ttTCCfNMHeTIno-2ZzFPYJzq1jwJT7fJ9ltZbC_QFYpyPMfBgfHbxjq3ZyNjcmp';
        return new OAuthTokenCredential($clientId, $clientSecret);
    }
}