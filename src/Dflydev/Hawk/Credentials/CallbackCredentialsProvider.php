<?php

namespace Dflydev\Hawk\Credentials;

class CallbackCredentialsProvider implements CredentialsProviderInterface
{
    private $callback;

    public function __construct($callback)
    {
        $this->callback = $callback;
    }

    public function loadCredentialsById($id)
    {
        return call_user_func($this->callback, $id);
    }
}
