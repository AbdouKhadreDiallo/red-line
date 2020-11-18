<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/groupe' => [[['_route' => 'groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, null, null, false, false, null]],
        '/api/formateurs' => [
            [['_route' => 'add_formateur', '_controller' => 'App\\Controller\\UserController::addFormateur', '_api_resource_class' => 'Formateur', 'api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_list_formateurs_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'list_formateurs'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/apprenants' => [
            [['_route' => 'add_apprenant', '_controller' => 'App\\Controller\\UserController::addApprenant', '_api_resource_class' => 'User', 'api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_liste_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'liste_apprenants'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/users' => [
            [['_route' => 'api_users_liste_users_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'liste_users'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_show_profils_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'show_profils'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupes' => [
            [['_route' => 'api_groupes_get_groupe_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get_groupe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupes_show_groupe_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'show_groupe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/profils/(?'
                        .'|([0-9]+)(*:75)'
                        .'|([0-9]+)/users(*:96)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:132)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:163)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:199)'
                        .'|a(?'
                            .'|dmin/(?'
                                .'|users/([^/]++)(?'
                                    .'|(*:236)'
                                .')'
                                .'|profils/([^/]++)(?'
                                    .'|(*:264)'
                                .')'
                                .'|groupes/([^/]++)(?'
                                    .'|(*:292)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(?'
                                .'|(*:323)'
                            .')'
                        .')'
                        .'|formateurs/([^/]++)(*:352)'
                    .')'
                    .'|(*:361)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        75 => [[['_route' => 'archive_profil', '_controller' => 'App\\Controller\\ProfilController::archiveGroupe'], ['id'], ['DELETE' => 0], null, false, true, null]],
        96 => [[['_route' => 'show_users_from_profil', '_controller' => 'App\\Controller\\ProfilController::show_users_from_profils'], ['id'], ['GET' => 0], null, false, false, null]],
        132 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        163 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        199 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        236 => [
            [['_route' => 'api_users_get_one_user_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_one_user'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_one_user_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put_one_user'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_archive_user_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'archive_user'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        264 => [
            [['_route' => 'api_profils_show_one_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'show_one_profil'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_update_profil_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'update_profil'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        292 => [
            [['_route' => 'api_groupes_show_One_Group_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'show_One_Group'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_put_groupe_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'put_groupe'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        323 => [
            [['_route' => 'api_apprenants_show_one_apprenants_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'show_one_apprenants'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_modify_apprenant_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'modify_apprenant'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        352 => [[['_route' => 'api_formateurs_show_one_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'show_one_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        361 => [
            [['_route' => 'api_platform'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
