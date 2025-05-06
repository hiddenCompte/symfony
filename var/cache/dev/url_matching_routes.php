<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/users/pdf' => [[['_route' => 'admin_users_pdf', '_controller' => 'App\\Controller\\Admin\\UserController::generateUsersPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/upload-image' => [[['_route' => 'api_upload_image', '_controller' => 'App\\Controller\\ImageUploadController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/candidature' => [[['_route' => 'app_candidature_index', '_controller' => 'App\\Controller\\Mission\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/create' => [[['_route' => 'app_candidature_create', '_controller' => 'App\\Controller\\Mission\\CandidatureController::create'], null, ['POST' => 0], null, false, false, null]],
        '/candidature/export/excel' => [[['_route' => 'app_candidature_export_excel', '_controller' => 'App\\Controller\\Mission\\CandidatureController::exportExcel'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\Mission\\DashboardController::index'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'app_mission_index', '_controller' => 'App\\Controller\\Mission\\MissionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mission/new' => [[['_route' => 'app_mission_new', '_controller' => 'App\\Controller\\Mission\\MissionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compte' => [[['_route' => 'mon_compte', '_controller' => 'App\\Controller\\MonCompteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/compte/update' => [[['_route' => 'mon_compte_update', '_controller' => 'App\\Controller\\MonCompteController::updateProfile'], null, ['POST' => 0], null, false, false, null]],
        '/compte/securite' => [[['_route' => 'mon_compte_securite', '_controller' => 'App\\Controller\\MonCompteController::securite'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compte/upload-image' => [[['_route' => 'app_profile_upload_image', '_controller' => 'App\\Controller\\ProfileController::uploadImage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password/request' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-code' => [[['_route' => 'app_check_reset_code', '_controller' => 'App\\Controller\\ResetPasswordController::checkCode'], null, null, null, false, false, null]],
        '/reset-password/reset' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-profil' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserProfileController::profile'], null, null, null, false, false, null]],
        '/mon-profil/delete-account' => [[['_route' => 'user_delete_account', '_controller' => 'App\\Controller\\UserProfileController::deleteAccount'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|api/user/([^/]++)/(?'
                        .'|edit(*:77)'
                        .'|toggle\\-status(*:98)'
                    .')'
                    .'|user(?'
                        .'|/([^/]++)/pdf(*:126)'
                        .'|s/([^/]++)/(?'
                            .'|edit(*:152)'
                            .'|delete(*:166)'
                        .')'
                    .')'
                .')'
                .'|/candidature/(?'
                    .'|candidature/new/([^/]++)/([^/]++)(*:226)'
                    .'|show/([^/]++)(*:247)'
                    .'|edit/([^/]++)(*:268)'
                    .'|delete/([^/]++)(*:291)'
                    .'|([^/]++)/qrcode(*:314)'
                .')'
                .'|/mission/(?'
                    .'|([^/]++)(?'
                        .'|(*:346)'
                        .'|/(?'
                            .'|qrcode(*:364)'
                            .'|pdf(*:375)'
                            .'|edit(*:387)'
                        .')'
                        .'|(*:396)'
                    .')'
                    .'|search(*:411)'
                    .'|advanced\\-search(*:435)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:461)'
                    .'|/edit(*:474)'
                    .'|(*:482)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'api_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::apiEditUser'], ['id'], ['POST' => 0], null, false, false, null]],
        98 => [[['_route' => 'admin_api_toggle_user_status', '_controller' => 'App\\Controller\\Admin\\UserController::toggleUserStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        126 => [[['_route' => 'admin_user_pdf', '_controller' => 'App\\Controller\\Admin\\UserController::generateUserPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        152 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        166 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        226 => [[['_route' => 'app_candidature_new', '_controller' => 'App\\Controller\\Mission\\CandidatureController::new'], ['userId', 'missionId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        247 => [[['_route' => 'app_candidature_show', '_controller' => 'App\\Controller\\Mission\\CandidatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_candidature_edit', '_controller' => 'App\\Controller\\Mission\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        291 => [[['_route' => 'app_candidature_delete', '_controller' => 'App\\Controller\\Mission\\CandidatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_candidature_qrcode', '_controller' => 'App\\Controller\\Mission\\CandidatureController::qrcode'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'app_mission_show', '_controller' => 'App\\Controller\\Mission\\MissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_mission_qrcode', '_controller' => 'App\\Controller\\Mission\\MissionController::generateQrCode'], ['id'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_mission_pdf', '_controller' => 'App\\Controller\\Mission\\MissionController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        387 => [[['_route' => 'app_mission_edit', '_controller' => 'App\\Controller\\Mission\\MissionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'app_mission_delete', '_controller' => 'App\\Controller\\Mission\\MissionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_mission_search', '_controller' => 'App\\Controller\\Mission\\MissionSearchController::search'], [], ['GET' => 0], null, false, false, null]],
        435 => [[['_route' => 'app_mission_advanced_search', '_controller' => 'App\\Controller\\Mission\\MissionSearchController::advancedSearch'], [], ['POST' => 0], null, false, false, null]],
        461 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
