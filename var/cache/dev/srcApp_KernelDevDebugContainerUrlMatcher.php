<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\BlogController::home'], null, null, null, false, false, null]],
            '/blog-new' => [[['_route' => 'blog_create', '_controller' => 'App\\Controller\\BlogController::form'], null, null, null, false, false, null]],
            '/galleries' => [[['_route' => 'galeriephoto', '_controller' => 'App\\Controller\\GaleriephotoController::index'], null, null, null, false, false, null]],
            '/gallery-new' => [[['_route' => 'galeriephoto_create', '_controller' => 'App\\Controller\\GaleriephotoController::form'], null, null, null, false, false, null]],
            '/contact-club' => [[['_route' => 'contact_club', '_controller' => 'App\\Controller\\LayoutController::contactclub'], null, null, null, false, false, null]],
            '/admin-contact-new' => [[['_route' => 'new_admin_contact', '_controller' => 'App\\Controller\\LayoutController::ajoutContact'], null, null, null, false, false, null]],
            '/layout' => [[['_route' => 'layout', '_controller' => 'App\\Controller\\LayoutController::index'], null, null, null, false, false, null]],
            '/load_site' => [[['_route' => 'load_site', '_controller' => 'App\\Controller\\LoadSiteController::index'], null, null, null, false, false, null]],
            '/member-id}-registration' => [[['_route' => 'member_registration', '_controller' => 'App\\Controller\\MemberController::showRegistration'], null, null, null, false, false, null]],
            '/admin-notification' => [[['_route' => 'notification', '_controller' => 'App\\Controller\\NotificationController::index'], null, null, null, false, false, null]],
            '/pricegrid-new' => [[['_route' => 'price_grid_new', '_controller' => 'App\\Controller\\PriceGridController::edit'], null, null, null, false, false, null]],
            '/conditions-générales' => [[['_route' => 'general_conditions', '_controller' => 'App\\Controller\\RegistrationController::conditionsGenerales'], null, null, null, false, false, null]],
            '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/validation' => [[['_route' => 'validation', '_controller' => 'App\\Controller\\SecurityController::validate'], null, null, null, false, false, null]],
            '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/forgotten_password' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
            '/vika-encadrement-new' => [[['_route' => 'encadrement_create', '_controller' => 'App\\Controller\\VikaController::form'], null, null, null, false, false, null]],
            '/vika-sponsors-new' => [[['_route' => 'sponsors_create', '_controller' => 'App\\Controller\\VikaController::formSponsors'], null, null, null, false, false, null]],
            '/vika_event-list' => [[['_route' => 'vika_event_index', '_controller' => 'App\\Controller\\VikaEventController::index'], null, ['GET' => 0], null, false, false, null]],
            '/vika_event-calendar' => [[['_route' => 'vikaEvent_calendar', '_controller' => 'App\\Controller\\VikaEventController::calendar'], null, ['GET' => 0], null, false, false, null]],
            '/vika_event-new' => [[['_route' => 'vika_event_new', '_controller' => 'App\\Controller\\VikaEventController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/yuml' => [[['_route' => 'doctrine_yuml_mapping', '_controller' => 'Onurb\\Bundle\\YumlBundle\\Controller\\YumlController::indexAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/v(?'
                        .'|ika(?'
                            .'|Users(?:\\-([^/]++))?(*:38)'
                            .'|\\-(?'
                                .'|encadrement\\-(?'
                                    .'|(\\d+)\\-edit(*:77)'
                                    .'|delete\\-(\\d+)(*:97)'
                                .')'
                                .'|sponsor(?'
                                    .'|s\\-(\\d+)\\-edit(*:129)'
                                    .'|\\-delete\\-(\\d+)(*:152)'
                                .')'
                                .'|page\\-([^/]++)(*:175)'
                                .'|([^/\\-]++)\\-edit(*:199)'
                                .'|([^/]++)(*:215)'
                            .')'
                            .'|%page\\-([^/]++)(*:239)'
                            .'|_event\\-(?'
                                .'|showList\\-([^/]++)(*:276)'
                                .'|(\\d+)(*:289)'
                                .'|(\\d+)\\-edit(*:308)'
                                .'|(\\d+)\\-delete(*:329)'
                            .')'
                        .')'
                        .'|erify\\-user\\-profile\\-([^/\\-]++)\\-(\\d+)(*:378)'
                    .')'
                    .'|/p(?'
                        .'|icture%member\\-([^/]++)(*:415)'
                        .'|r(?'
                            .'|icegrid\\-(?'
                                .'|(\\d+)\\-edit(?:\\-([^/]++))?(*:465)'
                                .'|list(?:\\-([^/]++))?(*:492)'
                                .'|(\\d+)(?:\\-([^/]++))?(*:520)'
                                .'|(\\d+)(*:533)'
                            .')'
                            .'|eregistration\\-user\\-summary\\-(\\d+)\\-([^/]++)(*:587)'
                        .')'
                        .'|aiement\\-(?'
                            .'|list(?:\\-([^/]++))?(*:627)'
                            .'|validate\\-(\\d+)(*:650)'
                            .'|id\\=(\\d+)\\-edit(*:673)'
                            .'|remove\\=(\\d+)(*:694)'
                        .')'
                    .')'
                    .'|/c(?'
                        .'|hangeIsActiveStatus%member\\-([^/]++)(*:745)'
                        .'|ondition\\-user\\-family\\-(\\d+)\\-([^/]++)(*:792)'
                    .')'
                    .'|/blog\\-(?'
                        .'|(\\d+)\\-edit(*:822)'
                        .'|delete\\-(\\d+)(*:843)'
                        .'|(\\d+)(*:856)'
                    .')'
                    .'|/gallery\\-(?'
                        .'|delete\\-([^/]++)(*:894)'
                        .'|(\\d+)\\-edit(*:913)'
                        .'|view\\-([^/]++)(*:935)'
                    .')'
                    .'|/ad(?'
                        .'|min\\-(?'
                            .'|edit\\-([^/]++)(*:972)'
                            .'|contact\\-idContact\\=([^/\\-]++)\\-(?'
                                .'|edit(*:1019)'
                                .'|remove(*:1034)'
                            .')'
                            .'|add\\-([^/\\-]++)\\-new(?:\\-(\\d+))?(*:1076)'
                            .'|(\\d+)\\-edit(*:1096)'
                            .'|(\\d+)(*:1110)'
                            .'|remove(?'
                                .'|Phone\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:1169)'
                                .'|Adress\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:1220)'
                            .')'
                            .'|(\\d+)\\-history\\-([^/\\-]++)\\-edit(*:1262)'
                            .'|(\\d+)\\-history\\-new(*:1290)'
                            .'|(\\d+)\\-history(*:1313)'
                            .'|remove(?'
                                .'|_history\\-([^/\\-]++)\\-(\\d+)(*:1358)'
                                .'|PoC\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:1406)'
                            .')'
                            .'|editPoC\\-([^/\\-]++)\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:1471)'
                            .'|([^/\\-]++)\\-(\\d+)\\-registration\\-edit(*:1517)'
                            .'|(\\d+)\\-registration(*:1545)'
                            .'|remove_registration\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:1609)'
                            .'|family\\-(\\d+)(*:1631)'
                            .'|(\\d+)\\-document(*:1655)'
                            .'|(\\d+)\\-document\\-new(*:1684)'
                            .'|([^/\\-]++)\\-document\\-(\\d+)\\-edit(*:1726)'
                            .'|remove_document\\-([^/\\-]++)\\-(\\d+)(*:1769)'
                            .'|afficher_document\\-([^/\\-]++)\\-(\\d+)(*:1814)'
                        .')'
                        .'|d\\-(?'
                            .'|member\\-(\\d+)\\-new(*:1848)'
                            .'|admin\\-(\\d+)\\-new(*:1874)'
                        .')'
                    .')'
                    .'|/home\\-([^/]++)(*:1900)'
                    .'|/member\\-(?'
                        .'|add\\-([^/\\-]++)\\-new(?:\\-(\\d+))?(*:1953)'
                        .'|(\\d+)\\-edit(*:1973)'
                        .'|(\\d+)(*:1987)'
                        .'|remove(?'
                            .'|Phone\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:2046)'
                            .'|Adress\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:2097)'
                        .')'
                        .'|(\\d+)\\-history(*:2121)'
                        .'|removePoC\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:2175)'
                        .'|editPoC\\-([^/\\-]++)\\-([^/\\-]++)\\-([^/\\-]++)(?:\\-(\\d+))?(*:2239)'
                        .'|family\\-(\\d+)(*:2261)'
                        .'|(\\d+)\\-document(*:2285)'
                        .'|(\\d+)\\-document\\-new(*:2314)'
                        .'|([^/\\-]++)\\-document\\-(\\d+)\\-edit(*:2356)'
                    .')'
                    .'|/re(?'
                        .'|gistration\\-(?'
                            .'|user\\-family\\-(?'
                                .'|(\\d+)(*:2409)'
                                .'|(\\d+)\\-([^/]++)(*:2433)'
                            .')'
                            .'|list(?:\\-([^/]++))?(*:2462)'
                        .')'
                        .'|set_password/([^/]++)(*:2493)'
                    .')'
                    .'|/inscription\\-simplifiée\\-(\\d+)\\-([^/]++)(*:2545)'
                    .'|/dossier\\-inscription\\-(?'
                        .'|valide\\-(\\d+)(*:2593)'
                        .'|(\\d+)(*:2607)'
                    .')'
                    .'|/envoyer_fiche\\-idUser\\=([^/]++)(*:2649)'
                    .'|/fiche\\-membre\\-idUser\\=(\\d+)\\-idReg\\=([^/]++)(*:2704)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:2744)'
                        .'|wdt/([^/]++)(*:2765)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2812)'
                                .'|router(*:2827)'
                                .'|exception(?'
                                    .'|(*:2848)'
                                    .'|\\.css(*:2862)'
                                .')'
                            .')'
                            .'|(*:2873)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => 'admin_users', 'orderby' => null, '_controller' => 'App\\Controller\\AdminVikaController::index'], ['orderby'], null, null, false, true, null]],
            77 => [[['_route' => 'encadrement_edit', '_controller' => 'App\\Controller\\VikaController::form'], ['id'], null, null, false, false, null]],
            97 => [[['_route' => 'encadrement_delete', '_controller' => 'App\\Controller\\VikaController::EncadrementDelete'], ['id'], null, null, false, true, null]],
            129 => [[['_route' => 'sponsors_edit', '_controller' => 'App\\Controller\\VikaController::formSponsors'], ['id'], null, null, false, false, null]],
            152 => [[['_route' => 'sponsors_delete', '_controller' => 'App\\Controller\\VikaController::SponsorDelete'], ['id'], null, null, false, true, null]],
            175 => [[['_route' => 'sponsor_index', '_controller' => 'App\\Controller\\VikaController::vikaSponsor'], ['path'], null, null, false, true, null]],
            199 => [[['_route' => 'VikaContentEdit', '_controller' => 'App\\Controller\\VikaController::vikacreate'], ['path'], null, null, false, false, null]],
            215 => [[['_route' => 'VikaContent', '_controller' => 'App\\Controller\\VikaController::vikashow'], ['path'], null, null, false, true, null]],
            239 => [[['_route' => 'encadrement_index', '_controller' => 'App\\Controller\\VikaController::vikaEncadrement'], ['path'], null, null, false, true, null]],
            276 => [[['_route' => 'vika_event_showList', '_controller' => 'App\\Controller\\VikaEventController::showList'], ['cat'], ['GET' => 0], null, false, true, null]],
            289 => [[['_route' => 'vika_event_show', '_controller' => 'App\\Controller\\VikaEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            308 => [[['_route' => 'vika_event_edit', '_controller' => 'App\\Controller\\VikaEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            329 => [[['_route' => 'vika_event_delete', '_controller' => 'App\\Controller\\VikaEventController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
            378 => [[['_route' => 'verify_profile', '_controller' => 'App\\Controller\\MemberController::verifyProfile'], ['id', 'idevent'], null, null, false, true, null]],
            415 => [[['_route' => 'admin_picture_user', '_controller' => 'App\\Controller\\AdminVikaController::form'], ['id'], null, null, false, true, null]],
            465 => [[['_route' => 'price_grid_edit', 'route' => null, '_controller' => 'App\\Controller\\PriceGridController::edit'], ['id', 'route'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            492 => [[['_route' => 'priceGrid_index', 'orderby' => null, '_controller' => 'App\\Controller\\PriceGridController::index'], ['orderby'], ['GET' => 0], null, false, true, null]],
            520 => [[['_route' => 'price_grid_delete', 'route' => null, '_controller' => 'App\\Controller\\PriceGridController::delete'], ['id', 'route'], ['DELETE' => 0], null, false, true, null]],
            533 => [[['_route' => 'price_grid_show', '_controller' => 'App\\Controller\\PriceGridController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            587 => [[['_route' => 'preregistration_summary', '_controller' => 'App\\Controller\\RegistrationController::preregistrationSummary'], ['id', 'idevent'], null, null, false, true, null]],
            627 => [[['_route' => 'paiement_view', 'orderby' => null, '_controller' => 'App\\Controller\\RegistrationController::listPaiement'], ['orderby'], null, null, false, true, null]],
            650 => [[['_route' => 'paiement_validate', '_controller' => 'App\\Controller\\RegistrationController::validatePaiement'], ['id'], null, null, false, true, null]],
            673 => [[['_route' => 'paiement_edit', '_controller' => 'App\\Controller\\RegistrationController::paiementEdit'], ['id'], null, null, false, false, null]],
            694 => [[['_route' => 'paiement_remove', '_controller' => 'App\\Controller\\RegistrationController::removePaiement'], ['id'], null, null, false, true, null]],
            745 => [[['_route' => 'admin_changeIsActive', '_controller' => 'App\\Controller\\AdminVikaController::editIsActiveStatus'], ['id'], null, null, false, true, null]],
            792 => [[['_route' => 'condition_view_family', '_controller' => 'App\\Controller\\RegistrationController::conditions'], ['id', 'idevent'], null, null, false, true, null]],
            822 => [[['_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::form'], ['id'], null, null, false, false, null]],
            843 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], null, null, false, true, null]],
            856 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
            894 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GaleriephotoController::GalleryDelete'], ['id'], null, null, false, true, null]],
            913 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GaleriephotoController::form'], ['id'], null, null, false, false, null]],
            935 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GaleriephotoController::galerieShow'], ['id'], null, null, false, true, null]],
            972 => [[['_route' => 'home_pageedit', '_controller' => 'App\\Controller\\HomePageController::vikacreate'], ['path'], null, null, false, true, null]],
            1019 => [[['_route' => 'edit_admin_contact', '_controller' => 'App\\Controller\\LayoutController::editerContact'], ['idContact'], null, null, false, false, null]],
            1034 => [[['_route' => 'remove_admin_contact', '_controller' => 'App\\Controller\\LayoutController::supprimerContact'], ['idContact'], null, null, false, false, null]],
            1076 => [[['_route' => 'add_admin_event', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::addUserEvent'], ['id', 'idevent'], null, null, false, true, null]],
            1096 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\MemberController::profileEdit'], ['id'], null, null, false, false, null]],
            1110 => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\MemberController::profileShow'], ['id'], null, null, false, true, null]],
            1169 => [[['_route' => 'remove_phone_admin', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserPhone'], ['idPhone', 'id', 'idevent'], null, null, false, true, null]],
            1220 => [[['_route' => 'remove_adress_admin', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserAdress'], ['idAdress', 'id', 'idevent'], null, null, false, true, null]],
            1262 => [[['_route' => 'admin_history_edit', 'idHist' => null, '_controller' => 'App\\Controller\\MemberController::editHistory'], ['id', 'idHist'], null, null, false, false, null]],
            1290 => [[['_route' => 'admin_history_new', '_controller' => 'App\\Controller\\MemberController::editHistory'], ['id'], null, null, false, false, null]],
            1313 => [[['_route' => 'admin_history', '_controller' => 'App\\Controller\\MemberController::showHistory'], ['id'], null, null, false, false, null]],
            1358 => [[['_route' => 'remove_history_admin', '_controller' => 'App\\Controller\\MemberController::removeHistory'], ['id', 'idUser'], null, null, false, true, null]],
            1406 => [[['_route' => 'remove_PoC_admin', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removePoC'], ['idCL', 'id', 'idevent'], null, null, false, true, null]],
            1471 => [[['_route' => 'edit_PoC_admin', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::editPoC'], ['id', 'idCL', 'idPoC', 'idevent'], null, null, false, true, null]],
            1517 => [[['_route' => 'admin_registration_edit', '_controller' => 'App\\Controller\\MemberController::editRegistration'], ['id', 'idReg'], null, null, false, false, null]],
            1545 => [[['_route' => 'admin_registration', '_controller' => 'App\\Controller\\MemberController::showRegistration'], ['id'], null, null, false, false, null]],
            1609 => [[['_route' => 'remove_registration_admin', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeRegistration'], ['id', 'idUser', 'idevent'], null, null, false, true, null]],
            1631 => [[['_route' => 'admin_family', '_controller' => 'App\\Controller\\MemberController::indexFamily'], ['id'], null, null, false, true, null]],
            1655 => [[['_route' => 'admin_document', '_controller' => 'App\\Controller\\MemberController::showDocument'], ['id'], null, null, false, false, null]],
            1684 => [[['_route' => 'load_admin_document', '_controller' => 'App\\Controller\\MemberController::form'], ['idUser'], null, null, false, false, null]],
            1726 => [[['_route' => 'edit_admin_document', '_controller' => 'App\\Controller\\MemberController::form'], ['idUser', 'id'], null, null, false, false, null]],
            1769 => [[['_route' => 'remove_document_admin', '_controller' => 'App\\Controller\\MemberController::removeDoc'], ['id', 'idUser'], null, null, false, true, null]],
            1814 => [[['_route' => 'afficher_document_admin', '_controller' => 'App\\Controller\\MemberController::afficherDoc'], ['id', 'idUser'], null, null, false, true, null]],
            1848 => [[['_route' => 'add_profil', '_controller' => 'App\\Controller\\MemberController::addUser'], ['id'], null, null, false, false, null]],
            1874 => [[['_route' => 'add_admin', '_controller' => 'App\\Controller\\MemberController::addUser'], ['id'], null, null, false, false, null]],
            1900 => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomePageController::index'], ['path'], null, null, false, true, null]],
            1953 => [[['_route' => 'add_profil_event', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::addUserEvent'], ['id', 'idevent'], null, null, false, true, null]],
            1973 => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\MemberController::profileEdit'], ['id'], null, null, false, false, null]],
            1987 => [[['_route' => 'profile_show', '_controller' => 'App\\Controller\\MemberController::profileShow'], ['id'], null, null, false, true, null]],
            2046 => [[['_route' => 'remove_phone', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserPhone'], ['idPhone', 'id', 'idevent'], null, null, false, true, null]],
            2097 => [[['_route' => 'remove_adress', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserAdress'], ['idAdress', 'id', 'idevent'], null, null, false, true, null]],
            2121 => [[['_route' => 'profile_history', '_controller' => 'App\\Controller\\MemberController::showHistory'], ['id'], null, null, false, false, null]],
            2175 => [[['_route' => 'remove_PoC', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::removePoC'], ['idCL', 'id', 'idevent'], null, null, false, true, null]],
            2239 => [[['_route' => 'edit_PoC', 'idevent' => null, '_controller' => 'App\\Controller\\MemberController::editPoC'], ['id', 'idCL', 'idPoC', 'idevent'], null, null, false, true, null]],
            2261 => [[['_route' => 'view_family', '_controller' => 'App\\Controller\\MemberController::indexFamily'], ['id'], null, null, false, true, null]],
            2285 => [[['_route' => 'member_document', '_controller' => 'App\\Controller\\MemberController::showDocument'], ['id'], null, null, false, false, null]],
            2314 => [[['_route' => 'load_member_document', '_controller' => 'App\\Controller\\MemberController::form'], ['idUser'], null, null, false, false, null]],
            2356 => [[['_route' => 'edit_member_document', '_controller' => 'App\\Controller\\MemberController::form'], ['idUser', 'id'], null, null, false, false, null]],
            2409 => [[['_route' => 'registration_view_family', '_controller' => 'App\\Controller\\RegistrationController::indexFamily'], ['id'], null, null, false, true, null]],
            2433 => [[['_route' => 'registration_member_lesson', '_controller' => 'App\\Controller\\RegistrationController::lessonsMember'], ['id', 'idevent'], null, null, false, true, null]],
            2462 => [[['_route' => 'registration_view', 'orderby' => null, '_controller' => 'App\\Controller\\RegistrationController::listRegistration'], ['orderby'], null, null, false, true, null]],
            2493 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
            2545 => [[['_route' => 'prereg_simple', '_controller' => 'App\\Controller\\RegistrationController::simpleprereg'], ['id', 'idevent'], null, null, false, true, null]],
            2593 => [[['_route' => 'registration_validate', '_controller' => 'App\\Controller\\RegistrationController::validateRegistration'], ['id'], null, null, false, true, null]],
            2607 => [[['_route' => 'dossier_inscription', '_controller' => 'App\\Controller\\RegistrationController::viewRegistration'], ['id'], null, null, false, true, null]],
            2649 => [[['_route' => 'envoyer_fiche', '_controller' => 'App\\Controller\\RegistrationController::envoyerFiche'], ['idUser'], null, null, false, true, null]],
            2704 => [[['_route' => 'fiche_membre', '_controller' => 'App\\Controller\\RegistrationController::HTMLToPDF'], ['id', 'idReg'], null, null, false, true, null]],
            2744 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            2765 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            2812 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            2827 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            2848 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            2862 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            2873 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
