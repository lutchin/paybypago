<?php
namespace Luchenok\Paybypago;

interface PaybypagoPayInterface
{
    public function payment($options);

    public function signature($options);
}