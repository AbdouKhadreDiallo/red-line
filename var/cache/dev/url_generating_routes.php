<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'competences' => [[], ['_controller' => 'App\\Controller\\CompetencesController::add_competences'], [], [['text', '/api/competences']], [], []],
    'group_tag' => [[], ['_controller' => 'App\\Controller\\GroupTagController::addGropeTag'], [], [['text', '/api/group_tags']], [], []],
    'edit_group_tag' => [['id'], ['_controller' => 'App\\Controller\\GroupTagController::edit_tag'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'groupe_competence' => [[], ['_controller' => 'App\\Controller\\GroupeCompetenceController::addGroupeCompetences'], [], [['text', '/api/groupe_competences']], [], []],
    'edit_groupe_competence' => [['id'], ['_controller' => 'App\\Controller\\GroupeCompetenceController::edit_groupe_competence'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'edit_groupe' => [['id'], ['_controller' => 'App\\Controller\\GroupeController::edit_groupe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'delete_apprenant_in_groupe' => [['id', 'apprenant'], ['_controller' => 'App\\Controller\\GroupeController::removeApprenantFromGroup'], [], [['variable', '/', '[^/]++', 'apprenant', true], ['text', '/apprenants'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'add_referentiel' => [[], ['_controller' => 'App\\Controller\\ReferentielController::add_referentiels'], [], [['text', '/api/referentiels']], [], []],
    'edit_referentiel' => [['id'], ['_controller' => 'App\\Controller\\ReferentielController::updateReferentiel', '_api_resource_class' => 'Referentiel', 'api_collection_operation_name' => 'add_referentiel'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'add_admin' => [[], ['_controller' => 'App\\Controller\\UserController::addAdmin', '_api_resource_class' => 'Admin', 'api_collection_operation_name' => 'add_admin'], [], [['text', '/api/admins']], [], []],
    'add_formateur' => [[], ['_controller' => 'App\\Controller\\UserController::addFormateur', '_api_resource_class' => 'Formateur', 'api_collection_operation_name' => 'add_formateur'], [], [['text', '/api/formateurs']], [], []],
    'add_apprenant' => [[], ['_controller' => 'App\\Controller\\UserController::addApprenant', '_api_resource_class' => 'User', 'api_collection_operation_name' => 'add_apprenant'], [], [['text', '/api/apprenants']], [], []],
    'edit_apprenant' => [['id'], ['_controller' => 'App\\Controller\\UserController::updateApprenant', '_api_resource_class' => 'User', 'api_collection_operation_name' => 'add_apprenant'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_competences_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/competences']], [], []],
    'api_competences_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/competences']], [], []],
    'api_competences_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/competences']], [], []],
    'api_competences_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/competences']], [], []],
    'api_competences_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/competences']], [], []],
    'api_competences_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/competences']], [], []],
    'api_referentiels_get_ref_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get_ref'], [], [['text', '/api/referentiels']], [], []],
    'api_referentiels_get_grpeCompet_Competence_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get_grpeCompet_Competence'], [], [['text', '/api/referentiels/GrpeCompetence']], [], []],
    'api_referentiels_get_One_ref_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get_One_ref'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'api_referentiels_get_grpe_competes_item' => [['id', 'groupeCompetence'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get_grpe_competes'], [], [['text', '/competences'], ['variable', '/', '[^/]++', 'groupeCompetence', true], ['text', '/groupe_competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'api_referentiels_delete_ref_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete_ref'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'api_referentiels_groupe_competences_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_referentiels_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupe_competences_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/groupe_competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'api_referentiels_groupe_competences_competences_get_subresource' => [['id', 'groupeCompetence', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_subresource_operation_name' => 'api_referentiels_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupeCompetence', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupe_competences_competences_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/competences'], ['variable', '/', '[^/]++', 'groupeCompetence', true], ['text', '/groupe_competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/referentiels']], [], []],
    'api_profil_sorties_show_all_profils_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'show_all_profils'], [], [['text', '/api/admin/profils_de_sorties']], [], []],
    'api_profil_sorties_add_profils_sortie_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profils_sortie'], [], [['text', '/api/admin/profils_de_sorties']], [], []],
    'api_profil_sorties_show_One_Profils_de_sortie_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'show_One_Profils_de_sortie', 'id' => null], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils_de_sorties']], [], []],
    'api_profil_sorties_put_Profils_de_sortie_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put_Profils_de_sortie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils_de_sorties']], [], []],
    'api_profil_sorties_archive_profil_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'archive_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils_de_sorties']], [], []],
    'api_admins_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_admins_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admins']], [], []],
    'api_users_liste_users_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'liste_users'], [], [['text', '/api/admin/users']], [], []],
    'api_users_add_user_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], [], [['text', '/api/admin/users']], [], []],
    'api_users_get_one_user_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_one_user'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_users_put_one_user_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put_one_user'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_profils_add_profil_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_show_profils_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'show_profils'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_show_users_from_profil_collection' => [['id'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'show_users_from_profil'], [], [['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_show_one_profil_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'show_one_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_update_profil_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'update_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_delete_profil_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_users_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/profils']], [], []],
    'api_groupe_competences_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'api_groupe_competences_competences_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_subresource_operation_name' => 'api_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/competences'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/groupe_competences']], [], []],
    'api_formateurs_list_formateurs_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'list_formateurs'], [], [['text', '/api/formateurs']], [], []],
    'api_formateurs_show_one_formateur_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'show_one_formateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_put_formateur_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put_formateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_delete_formateur_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete_formateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_group_tags_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupTag', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'api_group_tags_tags_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_group_tags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tags', 'identifiers' => [['id', 'App\\Entity\\GroupTag', true]], 'collection' => true, 'operationId' => 'api_group_tags_tags_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/tags'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/group_tags']], [], []],
    'api_tags_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/tags']], [], []],
    'api_tags_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/tags']], [], []],
    'api_tags_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tags']], [], []],
    'api_tags_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tags']], [], []],
    'api_tags_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tags']], [], []],
    'api_tags_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tags']], [], []],
    'api_groupes_get_groupe_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get_groupe'], [], [['text', '/api/admin/groupes']], [], []],
    'api_groupes_get_apprenant_in_groupes_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get_apprenant_in_groupes'], [], [['text', '/api/admin/groupes/apprenants']], [], []],
    'api_groupes_add_Groupe_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'add_Groupe'], [], [['text', '/api/admin/groupes']], [], []],
    'api_groupes_get_one_Groupe_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get_one_Groupe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/groupes']], [], []],
    'api_apprenants_liste_apprenants_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'liste_apprenants'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_show_one_apprenants_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'show_one_apprenants'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_delete_apprenant_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete_apprenant'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'authentication_token' => [[], [], [], [['text', '/api/login']], [], []],
    'api_platform' => [[], [], [], [['text', '/api']], [], []],
];
