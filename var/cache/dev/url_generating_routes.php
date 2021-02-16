<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'add_apprenant' => [[], ['__controller' => 'App\\Controller\\ApprenantController::addApprenant', '__api_resource_class' => 'Apprenant', '__api_collection_operation_name' => 'add_apprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], [], [['text', '/api/apprenants/']], [], []],
    'list_apprenants' => [['id'], ['__controller' => 'App\\Controller\\GroupeController::list_apprenants', '__api_resource_class' => 'Grptags', '__api_collection_operation_name' => 'list_apprenants', '_controller' => 'App\\Controller\\GroupeController::list_apprenants'], [], [['text', '/apprenants'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'list_competences' => [['id'], ['__controller' => 'App\\Controller\\GrpecompetencesController::list_competences', '__api_resource_class' => 'Grpecompetences', '__api_collection_operation_name' => 'list_competences', '_controller' => 'App\\Controller\\GrpecompetencesController::list_competences'], [], [['text', '/competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grpecompetences']], [], []],
    'list_tags' => [['id'], ['__controller' => 'App\\Controller\\GrptagsController::list_tags', '__api_resource_class' => 'Grptags', '__api_collection_operation_name' => 'list_tags', '_controller' => 'App\\Controller\\GrptagsController::list_tags'], [], [['text', '/tags'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grptags']], [], []],
    'add_user' => [[], ['__controller' => 'App\\Controller\\UserController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], [], [['text', '/api/admin/users']], [], []],
    'update_user' => [['id'], ['__controller' => 'App\\Controller\\UserController::putUser', '__api_resource_class' => 'App\\Entity\\User', '__api_item_operation_name' => 'put', '_controller' => 'App\\Controller\\UserController::putUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_users_add_user_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], [], [['text', '/api/admin/users']], [], []],
    'api_users_GET_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'GET'], [], [['text', '/api/admin/users']], [], []],
    'api_users_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/users/users']], [], []],
    'api_users_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_users_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_users_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_groupes_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/groupes']], [], []],
    'api_groupes_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/groupes']], [], []],
    'api_groupes_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'api_groupes_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'api_groupes_list_apprenants_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'list_apprenants'], [], [['text', '/apprenants'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'api_profil_sorties_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/profil_sorties']], [], []],
    'api_profil_sorties_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/profil_sorties']], [], []],
    'api_profil_sorties_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profil_sorties']], [], []],
    'api_profil_sorties_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profil_sorties']], [], []],
    'api_profil_sorties_DELETE_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'DELETE'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profil_sorties']], [], []],
    'api_profils_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_post_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_DELETE_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'DELETE'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_users_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_niveaux_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/niveaux']], [], []],
    'api_niveaux_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/niveaux']], [], []],
    'api_niveaux_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux']], [], []],
    'api_niveaux_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux']], [], []],
    'api_niveaux_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux']], [], []],
    'api_niveaux_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux']], [], []],
    'api_tags_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/tags']], [], []],
    'api_tags_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/tags']], [], []],
    'api_tags_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/tags']], [], []],
    'api_tags_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tags', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/tags']], [], []],
    'api_competences_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_niveauxes_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveauxes_get_subresource', '_api_subresource_context' => ['property' => 'niveaux', 'identifiers' => [['id', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_competences_niveauxes_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/niveauxes'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_formateurs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_c_ms_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_apprenants_add_apprenant_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_GET_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'GET'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_admins_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admins']], [], []],
    'api_admins_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admins']], [], []],
    'api_admins_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_grpecompetences_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_grpecompetences_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_grpecompetences_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_grpecompetences_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_grpecompetences_list_competences_item' => [['id'], ['_controller' => 'GrpecompetencesController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grpecompetences', '_api_item_operation_name' => 'list_competences'], [], [['text', '/competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_grptags_GET_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_collection_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/grptags']], [], []],
    'api_grptags_POST_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_collection_operation_name' => 'POST'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/grptags']], [], []],
    'api_grptags_GET_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'GET'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/grptags']], [], []],
    'api_grptags_PUT_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'PUT'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/grptags']], [], []],
    'api_grptags_list_tags_item' => [['id'], ['_controller' => 'GrptagsController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Grptags', '_api_item_operation_name' => 'list_tags'], [], [['text', '/tags'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grptags']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login']], [], []],
];
