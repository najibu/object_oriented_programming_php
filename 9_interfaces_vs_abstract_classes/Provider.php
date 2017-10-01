<?php


interface Provider
{
    public function authorize();
}

function login(Provider $provider)
{
    if ($provider) {
        $provider->authorize();
    }
}
