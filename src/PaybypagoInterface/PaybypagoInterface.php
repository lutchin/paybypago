<?php

namespace Luchenok\Paybypago;

interface PaybypagoInterface
{
    public function settings($merchantID,$PersonalHashKey);

    public function setUrl();

}