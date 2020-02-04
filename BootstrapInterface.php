<?php
namespace ykushev\yii2\gearman;

interface BootstrapInterface
{
    public function run(Application $application);
}
