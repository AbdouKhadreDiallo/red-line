<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/competences' => [[['_route' => 'competences', '_controller' => 'App\\Controller\\CompetencesController::index'], null, null, null, false, false, null]],
        '/api/groupe_competences' => [[['_route' => 'groupe_competence', '_controller' => 'App\\Controller\\GroupeCompetenceController::addCompetences'], null, ['POST' => 0], null, false, false, null]],
        '/groupe' => [[['_route' => 'groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, null, null, false, false, null]],
        '/api/admins' => [[['_route' => 'add_admin', '_controller' => 'App\\Controller\\UserController::addAdmin', '_api_resource_class' => 'Admin', 'api_collection_operation_name' => 'add_admin'], null, ['POST' => 0], null, false, false, null]],
        '/api/formateurs' => [
            [['_route' => 'add_formateur', '_controller' => 'App\\Controller\\UserController::addFormateur', '_api_resource_class' => 'Formateur', 'api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_list_formateurs_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'list_formateurs'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/apprenants' => [
            [['_route' => 'add_apprenant', '_controller' => 'App\\Controller\\UserController::addApprenant', '_api_resource_class' => 'User', 'api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_liste_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'liste_apprenants'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profils_de_sorties' => [
            [['_route' => 'api_profil_sorties_show_all_profils_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'show_all_profils'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_add_profils_sortie_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profils_sortie'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/users' => [
            [['_route' => 'api_users_liste_users_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'liste_users'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_show_profils_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'show_profils'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:110)'
                            .'|mpetences(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:148)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:186)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|profils(?'
                                        .'|_de_sorties/([^/]++)(?'
                                            .'|(*:245)'
                                        .')'
                                        .'|/([^/]++)(?'
                                            .'|/users(*:272)'
                                            .'|(*:280)'
                                        .')'
                                    .')'
                                    .'|users/([^/]++)(?'
                                        .'|(*:307)'
                                    .')'
                                .')'
                                .'|s/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:347)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(?'
                                .'|(*:378)'
                            .')'
                        .')'
                        .'|profils/([^/]++)/users(?:\\.([^/]++))?(*:425)'
                        .'|groupe_competences(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:472)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:513)'
                                .')'
                                .'|([^/]++)/competences(?:\\.([^/]++))?(*:557)'
                            .')'
                        .')'
                        .'|formateurs/([^/]++)(?'
                            .'|(*:589)'
                        .')'
                    .')'
                    .'|(*:599)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        110 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        148 => [
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        186 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        245 => [
            [['_route' => 'api_profil_sorties_show_One_Profils_de_sortie_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'show_One_Profils_de_sortie'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_Profils_de_sortie_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put_Profils_de_sortie'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_archive_profil_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'archive_profil'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        272 => [[['_route' => 'api_profils_show_users_from_profil_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'show_users_from_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        280 => [
            [['_route' => 'api_profils_show_one_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'show_one_profil'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_update_profil_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'update_profil'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_profil_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete_profil'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        307 => [
            [['_route' => 'api_users_get_one_user_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_one_user'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_one_user_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put_one_user'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        347 => [
            [['_route' => 'api_admins_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_admins_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_admins_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        378 => [
            [['_route' => 'api_apprenants_show_one_apprenants_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'show_one_apprenants'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_modify_apprenant_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'modify_apprenant'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        425 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        472 => [
            [['_route' => 'api_groupe_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        513 => [
            [['_route' => 'api_groupe_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        557 => [[['_route' => 'api_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_subresource_operation_name' => 'api_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        589 => [
            [['_route' => 'api_formateurs_show_one_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'show_one_formateur'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_formateur_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put_formateur'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        599 => [
            [['_route' => 'api_platform'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
