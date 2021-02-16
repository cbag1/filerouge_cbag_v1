<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/apprenants' => [
            [['_route' => 'add_apprenant', '__controller' => 'App\\Controller\\ApprenantController::addApprenant', '__api_resource_class' => 'Apprenant', '__api_collection_operation_name' => 'add_apprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'api_apprenants_add_apprenant_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/users' => [
            [['_route' => 'add_user', '__controller' => 'App\\Controller\\UserController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/(?'
                        .'|gr(?'
                            .'|oupes/([^/]++)/apprenants(*:89)'
                            .'|p(?'
                                .'|ecompetences/([^/]++)/competences(*:133)'
                                .'|tags/([^/]++)/tags(*:159)'
                            .')'
                        .')'
                        .'|users/([^/]++)(*:183)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:220)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:251)'
                        .'|c(?'
                            .'|ontexts/(.+)(?:\\.([^/]++))?(*:290)'
                            .'|_ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:322)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:360)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|users/(?'
                                        .'|users/([^/\\.]++)(?:\\.([^/]++))?(*:426)'
                                        .'|(\\d+)(?'
                                            .'|(*:442)'
                                        .')'
                                    .')'
                                    .'|gr(?'
                                        .'|oupes(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:483)'
                                            .')'
                                            .'|/(?'
                                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:524)'
                                                .')'
                                                .'|([^/]++)/apprenants(*:552)'
                                            .')'
                                        .')'
                                        .'|p(?'
                                            .'|ecompetences(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:599)'
                                                .')'
                                                .'|/(?'
                                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:640)'
                                                    .')'
                                                    .'|([^/]++)/competences(*:669)'
                                                .')'
                                            .')'
                                            .'|tags(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:704)'
                                                .')'
                                                .'|/(?'
                                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:745)'
                                                    .')'
                                                    .'|([^/]++)/tags(*:767)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|profil(?'
                                        .'|_sorties(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:817)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:855)'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(*:884)'
                                            .'|(*:892)'
                                            .'|/(?'
                                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:932)'
                                                .')'
                                                .'|([^/]++)/users(?:\\.([^/]++))?(*:970)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1006)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1045)'
                                        .')'
                                    .')'
                                    .'|competences(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1088)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:1130)'
                                            .')'
                                            .'|([^/]++)/niveauxes(?:\\.([^/]++))?(*:1173)'
                                        .')'
                                    .')'
                                .')'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1207)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1246)'
                                    .')'
                                .')'
                            .')'
                            .'|pprenants/(?'
                                .'|(\\d+)(*:1276)'
                                .'|([^/]++)(*:1293)'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1332)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1371)'
                            .')'
                        .')'
                        .'|formateurs(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1413)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1452)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        89 => [[['_route' => 'list_apprenants', '__controller' => 'App\\Controller\\GroupeController::list_apprenants', '__api_resource_class' => 'Grptags', '__api_collection_operation_name' => 'list_apprenants', '_controller' => 'App\\Controller\\GroupeController::list_apprenants'], ['id'], ['GET' => 0], null, false, false, null]],
        133 => [[['_route' => 'list_competences', '__controller' => 'App\\Controller\\GrpecompetencesController::list_competences', '__api_resource_class' => 'Grpecompetences', '__api_collection_operation_name' => 'list_competences', '_controller' => 'App\\Controller\\GrpecompetencesController::list_competences'], ['id'], ['GET' => 0], null, false, false, null]],
        159 => [[['_route' => 'list_tags', '__controller' => 'App\\Controller\\GrptagsController::list_tags', '__api_resource_class' => 'Grptags', '__api_collection_operation_name' => 'list_tags', '_controller' => 'App\\Controller\\GrptagsController::list_tags'], ['id'], ['GET' => 0], null, false, false, null]],
        183 => [[['_route' => 'update_user', '__controller' => 'App\\Controller\\UserController::putUser', '__api_resource_class' => 'App\\Entity\\User', '__api_item_operation_name' => 'put', '_controller' => 'App\\Controller\\UserController::putUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        220 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        251 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        290 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        322 => [
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        426 => [[['_route' => 'api_users_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        442 => [
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        483 => [
            [['_route' => 'api_groupes_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        524 => [
            [['_route' => 'api_groupes_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        552 => [[['_route' => 'api_groupes_list_apprenants_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'list_apprenants'], ['id'], ['GET' => 0], null, false, false, null]],
        599 => [
            [['_route' => 'api_grpecompetences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_grpecompetences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        640 => [
            [['_route' => 'api_grpecompetences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_grpecompetences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        669 => [[['_route' => 'api_grpecompetences_list_competences_item', '_controller' => 'GrpecompetencesController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'list_competences'], ['id'], ['GET' => 0], null, false, false, null]],
        704 => [
            [['_route' => 'api_grptags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_grptags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        745 => [
            [['_route' => 'api_grptags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_grptags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        767 => [[['_route' => 'api_grptags_list_tags_item', '_controller' => 'GrptagsController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'list_tags'], ['id'], ['GET' => 0], null, false, false, null]],
        817 => [
            [['_route' => 'api_profil_sorties_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        855 => [
            [['_route' => 'api_profil_sorties_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'DELETE'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        884 => [[['_route' => 'api_profils_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null]],
        892 => [[['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
        932 => [
            [['_route' => 'api_profils_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'DELETE'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        970 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1006 => [
            [['_route' => 'api_tags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1045 => [
            [['_route' => 'api_tags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1088 => [
            [['_route' => 'api_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1130 => [
            [['_route' => 'api_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1173 => [[['_route' => 'api_competences_niveauxes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveauxes_get_subresource', '_api_subresource_context' => ['property' => 'niveaux', 'identifiers' => [['id', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_competences_niveauxes_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1207 => [
            [['_route' => 'api_admins_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1246 => [
            [['_route' => 'api_admins_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_admins_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_admins_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1276 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        1293 => [[['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null]],
        1332 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1371 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1413 => [
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1452 => [
            [['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
