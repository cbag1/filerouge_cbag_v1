<?php

namespace ContainerZN1mQGI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\ProfilDataPersister' shared autowired service.
     *
     * @return \App\DataPersister\ProfilDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/ProfilDataPersister.php';

        return $container->privates['App\\DataPersister\\ProfilDataPersister'] = new \App\DataPersister\ProfilDataPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
