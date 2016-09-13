<?php

namespace Injection;


use Injection\Person\PersonProvider;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;



class InjectionExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('person_provider', PersonProvider::class)->addArgument($configs['person']);
    }

}