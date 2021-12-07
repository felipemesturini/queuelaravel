<?php

namespace App\Services;

class RemoteConfigService
{
    public function __construct()
    {

    }

    public function content(): array
    {
        $remoteConfig = app('firebase.remote_config');
        dd($remoteConfig);
        return [];
    }
}
