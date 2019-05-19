<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin_users' => [['orderby'], ['orderby' => null, '_controller' => 'App\\Controller\\AdminVikaController::index'], [], [['variable', '-', '[^/]++', 'orderby', true], ['text', '/vikaUsers']], [], []],
        'admin_picture_user' => [['id'], ['_controller' => 'App\\Controller\\AdminVikaController::form'], ['idCL' => '\\d+'], [['variable', '-', '[^/]++', 'id', true], ['text', '/picture%member']], [], []],
        'admin_changeIsActive' => [['id'], ['_controller' => 'App\\Controller\\AdminVikaController::editIsActiveStatus'], ['idCL' => '\\d+'], [['variable', '-', '[^/]++', 'id', true], ['text', '/changeIsActiveStatus%member']], [], []],
        'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\BlogController::home'], [], [['text', '/']], [], []],
        'blog_create' => [[], ['_controller' => 'App\\Controller\\BlogController::form'], [], [['text', '/blog-new']], [], []],
        'blog_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::form'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/blog']], [], []],
        'blog_delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/blog-delete']], [], []],
        'blog_show' => [['id'], ['_controller' => 'App\\Controller\\BlogController::show'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/blog']], [], []],
        'galeriephoto' => [[], ['_controller' => 'App\\Controller\\GaleriephotoController::index'], [], [['text', '/galleries']], [], []],
        'gallery_delete' => [['id'], ['_controller' => 'App\\Controller\\GaleriephotoController::GalleryDelete'], ['idCL' => '\\d+'], [['variable', '-', '[^/]++', 'id', true], ['text', '/gallery-delete']], [], []],
        'galeriephoto_create' => [[], ['_controller' => 'App\\Controller\\GaleriephotoController::form'], [], [['text', '/gallery-new']], [], []],
        'gallery_edit' => [['id'], ['_controller' => 'App\\Controller\\GaleriephotoController::form'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/gallery']], [], []],
        'gallery_show' => [['id'], ['_controller' => 'App\\Controller\\GaleriephotoController::galerieShow'], ['idCL' => '\\d+'], [['variable', '-', '[^/]++', 'id', true], ['text', '/gallery-view']], [], []],
        'home_pageedit' => [['path'], ['_controller' => 'App\\Controller\\HomePageController::vikacreate'], [], [['variable', '-', '[^/]++', 'path', true], ['text', '/admin-edit']], [], []],
        'home_page' => [['path'], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['variable', '-', '[^/]++', 'path', true], ['text', '/home']], [], []],
        'contact_club' => [[], ['_controller' => 'App\\Controller\\LayoutController::contactclub'], [], [['text', '/contact-club']], [], []],
        'new_admin_contact' => [[], ['_controller' => 'App\\Controller\\LayoutController::ajoutContact'], [], [['text', '/admin-contact-new']], [], []],
        'edit_admin_contact' => [['idContact'], ['_controller' => 'App\\Controller\\LayoutController::editerContact'], [], [['text', '-edit'], ['variable', '=', '[^/\\-]++', 'idContact', true], ['text', '/admin-contact-idContact']], [], []],
        'remove_admin_contact' => [['idContact'], ['_controller' => 'App\\Controller\\LayoutController::supprimerContact'], ['idCL' => '\\d+'], [['text', '-remove'], ['variable', '=', '[^/\\-]++', 'idContact', true], ['text', '/admin-contact-idContact']], [], []],
        'layout' => [[], ['_controller' => 'App\\Controller\\LayoutController::index'], [], [['text', '/layout']], [], []],
        'load_site' => [[], ['_controller' => 'App\\Controller\\LoadSiteController::index'], [], [['text', '/load_site']], [], []],
        'add_profil_event' => [['id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::addUserEvent'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['text', '-new'], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/member-add']], [], []],
        'add_admin_event' => [['id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::addUserEvent'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['text', '-new'], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-add']], [], []],
        'add_profil' => [['id'], ['_controller' => 'App\\Controller\\MemberController::addUser'], ['id' => '\\d+'], [['text', '-new'], ['variable', '-', '\\d+', 'id', true], ['text', '/add-member']], [], []],
        'add_admin' => [['id'], ['_controller' => 'App\\Controller\\MemberController::addUser'], ['id' => '\\d+'], [['text', '-new'], ['variable', '-', '\\d+', 'id', true], ['text', '/add-admin']], [], []],
        'verify_profile' => [['id', 'idevent'], ['_controller' => 'App\\Controller\\MemberController::verifyProfile'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/verify-user-profile']], [], []],
        'profile_edit' => [['id'], ['_controller' => 'App\\Controller\\MemberController::profileEdit'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/member']], [], []],
        'admin_edit' => [['id'], ['_controller' => 'App\\Controller\\MemberController::profileEdit'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'profile_show' => [['id'], ['_controller' => 'App\\Controller\\MemberController::profileShow'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/member']], [], []],
        'admin_show' => [['id'], ['_controller' => 'App\\Controller\\MemberController::profileShow'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'remove_phone' => [['idPhone', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserPhone'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idPhone', true], ['text', '/member-removePhone']], [], []],
        'remove_phone_admin' => [['idPhone', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserPhone'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idPhone', true], ['text', '/admin-removePhone']], [], []],
        'remove_adress' => [['idAdress', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserAdress'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idAdress', true], ['text', '/member-removeAdress']], [], []],
        'remove_adress_admin' => [['idAdress', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeUserAdress'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idAdress', true], ['text', '/admin-removeAdress']], [], []],
        'admin_history_edit' => [['id', 'idHist'], ['idHist' => null, '_controller' => 'App\\Controller\\MemberController::editHistory'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '[^/\\-]++', 'idHist', true], ['text', '-history'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'admin_history_new' => [['id'], ['_controller' => 'App\\Controller\\MemberController::editHistory'], ['id' => '\\d+'], [['text', '-history-new'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'profile_history' => [['id'], ['_controller' => 'App\\Controller\\MemberController::showHistory'], ['id' => '\\d+'], [['text', '-history'], ['variable', '-', '\\d+', 'id', true], ['text', '/member']], [], []],
        'admin_history' => [['id'], ['_controller' => 'App\\Controller\\MemberController::showHistory'], ['id' => '\\d+'], [['text', '-history'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'remove_history_admin' => [['id', 'idUser'], ['_controller' => 'App\\Controller\\MemberController::removeHistory'], ['idUser' => '\\d+'], [['variable', '-', '\\d+', 'idUser', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-remove_history']], [], []],
        'remove_PoC' => [['idCL', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removePoC'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idCL', true], ['text', '/member-removePoC']], [], []],
        'remove_PoC_admin' => [['idCL', 'id', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removePoC'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'id', true], ['variable', '-', '[^/\\-]++', 'idCL', true], ['text', '/admin-removePoC']], [], []],
        'edit_PoC' => [['id', 'idCL', 'idPoC', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::editPoC'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'idPoC', true], ['variable', '-', '[^/\\-]++', 'idCL', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/member-editPoC']], [], []],
        'edit_PoC_admin' => [['id', 'idCL', 'idPoC', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::editPoC'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'idPoC', true], ['variable', '-', '[^/\\-]++', 'idCL', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-editPoC']], [], []],
        'admin_registration_edit' => [['id', 'idReg'], ['_controller' => 'App\\Controller\\MemberController::editRegistration'], ['idReg' => '\\d+'], [['text', '-registration-edit'], ['variable', '-', '\\d+', 'idReg', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin']], [], []],
        'member_registration' => [[], ['_controller' => 'App\\Controller\\MemberController::showRegistration'], ['id' => '\\d+'], [['text', '/member-id}-registration']], [], []],
        'admin_registration' => [['id'], ['_controller' => 'App\\Controller\\MemberController::showRegistration'], ['id' => '\\d+'], [['text', '-registration'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'remove_registration_admin' => [['id', 'idUser', 'idevent'], ['idevent' => null, '_controller' => 'App\\Controller\\MemberController::removeRegistration'], ['idevent' => '\\d+'], [['variable', '-', '\\d+', 'idevent', true], ['variable', '-', '[^/\\-]++', 'idUser', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-remove_registration']], [], []],
        'view_family' => [['id'], ['_controller' => 'App\\Controller\\MemberController::indexFamily'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/member-family']], [], []],
        'admin_family' => [['id'], ['_controller' => 'App\\Controller\\MemberController::indexFamily'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/admin-family']], [], []],
        'member_document' => [['id'], ['_controller' => 'App\\Controller\\MemberController::showDocument'], ['id' => '\\d+'], [['text', '-document'], ['variable', '-', '\\d+', 'id', true], ['text', '/member']], [], []],
        'admin_document' => [['id'], ['_controller' => 'App\\Controller\\MemberController::showDocument'], ['id' => '\\d+'], [['text', '-document'], ['variable', '-', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'load_member_document' => [['idUser'], ['_controller' => 'App\\Controller\\MemberController::form'], ['idUser' => '\\d+'], [['text', '-document-new'], ['variable', '-', '\\d+', 'idUser', true], ['text', '/member']], [], []],
        'load_admin_document' => [['idUser'], ['_controller' => 'App\\Controller\\MemberController::form'], ['idUser' => '\\d+'], [['text', '-document-new'], ['variable', '-', '\\d+', 'idUser', true], ['text', '/admin']], [], []],
        'edit_member_document' => [['idUser', 'id'], ['_controller' => 'App\\Controller\\MemberController::form'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '-document'], ['variable', '-', '[^/\\-]++', 'idUser', true], ['text', '/member']], [], []],
        'edit_admin_document' => [['idUser', 'id'], ['_controller' => 'App\\Controller\\MemberController::form'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '-document'], ['variable', '-', '[^/\\-]++', 'idUser', true], ['text', '/admin']], [], []],
        'remove_document_admin' => [['id', 'idUser'], ['_controller' => 'App\\Controller\\MemberController::removeDoc'], ['idUser' => '\\d+'], [['variable', '-', '\\d+', 'idUser', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-remove_document']], [], []],
        'afficher_document_admin' => [['id', 'idUser'], ['_controller' => 'App\\Controller\\MemberController::afficherDoc'], ['idUser' => '\\d+'], [['variable', '-', '\\d+', 'idUser', true], ['variable', '-', '[^/\\-]++', 'id', true], ['text', '/admin-afficher_document']], [], []],
        'notification' => [[], ['_controller' => 'App\\Controller\\NotificationController::index'], [], [['text', '/admin-notification']], [], []],
        'price_grid_new' => [[], ['_controller' => 'App\\Controller\\PriceGridController::edit'], [], [['text', '/pricegrid-new']], [], []],
        'price_grid_edit' => [['id', 'route'], ['route' => null, '_controller' => 'App\\Controller\\PriceGridController::edit'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'route', true], ['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/pricegrid']], [], []],
        'priceGrid_index' => [['orderby'], ['orderby' => null, '_controller' => 'App\\Controller\\PriceGridController::index'], [], [['variable', '-', '[^/]++', 'orderby', true], ['text', '/pricegrid-list']], [], []],
        'price_grid_delete' => [['id', 'route'], ['route' => null, '_controller' => 'App\\Controller\\PriceGridController::delete'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'route', true], ['variable', '-', '\\d+', 'id', true], ['text', '/pricegrid']], [], []],
        'price_grid_show' => [['id'], ['_controller' => 'App\\Controller\\PriceGridController::show'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/pricegrid']], [], []],
        'registration_view_family' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::indexFamily'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/registration-user-family']], [], []],
        'preregistration_summary' => [['id', 'idevent'], ['_controller' => 'App\\Controller\\RegistrationController::preregistrationSummary'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'idevent', true], ['variable', '-', '\\d+', 'id', true], ['text', '/preregistration-user-summary']], [], []],
        'registration_member_lesson' => [['id', 'idevent'], ['_controller' => 'App\\Controller\\RegistrationController::lessonsMember'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'idevent', true], ['variable', '-', '\\d+', 'id', true], ['text', '/registration-user-family']], [], []],
        'prereg_simple' => [['id', 'idevent'], ['_controller' => 'App\\Controller\\RegistrationController::simpleprereg'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'idevent', true], ['variable', '-', '\\d+', 'id', true], ['text', '/inscription-simplifiée']], [], []],
        'condition_view_family' => [['id', 'idevent'], ['_controller' => 'App\\Controller\\RegistrationController::conditions'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'idevent', true], ['variable', '-', '\\d+', 'id', true], ['text', '/condition-user-family']], [], []],
        'general_conditions' => [[], ['_controller' => 'App\\Controller\\RegistrationController::conditionsGenerales'], [], [['text', '/conditions-générales']], [], []],
        'registration_view' => [['orderby'], ['orderby' => null, '_controller' => 'App\\Controller\\RegistrationController::listRegistration'], [], [['variable', '-', '[^/]++', 'orderby', true], ['text', '/registration-list']], [], []],
        'paiement_view' => [['orderby'], ['orderby' => null, '_controller' => 'App\\Controller\\RegistrationController::listPaiement'], [], [['variable', '-', '[^/]++', 'orderby', true], ['text', '/paiement-list']], [], []],
        'paiement_validate' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::validatePaiement'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/paiement-validate']], [], []],
        'registration_validate' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::validateRegistration'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/dossier-inscription-valide']], [], []],
        'dossier_inscription' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::viewRegistration'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/dossier-inscription']], [], []],
        'paiement_edit' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::paiementEdit'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '=', '\\d+', 'id', true], ['text', '/paiement-id']], [], []],
        'paiement_remove' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::removePaiement'], ['id' => '\\d+'], [['variable', '=', '\\d+', 'id', true], ['text', '/paiement-remove']], [], []],
        'envoyer_fiche' => [['idUser'], ['_controller' => 'App\\Controller\\RegistrationController::envoyerFiche'], [], [['variable', '=', '[^/]++', 'idUser', true], ['text', '/envoyer_fiche-idUser']], [], []],
        'fiche_membre' => [['id', 'idReg'], ['_controller' => 'App\\Controller\\RegistrationController::HTMLToPDF'], ['id' => '\\d+'], [['variable', '=', '[^/]++', 'idReg', true], ['text', '-idReg'], ['variable', '=', '\\d+', 'id', true], ['text', '/fiche-membre-idUser']], [], []],
        'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
        'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
        'validation' => [[], ['_controller' => 'App\\Controller\\SecurityController::validate'], [], [['text', '/validation']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
        'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgotten_password']], [], []],
        'app_reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset_password']], [], []],
        'encadrement_create' => [[], ['_controller' => 'App\\Controller\\VikaController::form'], [], [['text', '/vika-encadrement-new']], [], []],
        'encadrement_edit' => [['id'], ['_controller' => 'App\\Controller\\VikaController::form'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/vika-encadrement']], [], []],
        'sponsors_create' => [[], ['_controller' => 'App\\Controller\\VikaController::formSponsors'], [], [['text', '/vika-sponsors-new']], [], []],
        'sponsors_edit' => [['id'], ['_controller' => 'App\\Controller\\VikaController::formSponsors'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/vika-sponsors']], [], []],
        'encadrement_delete' => [['id'], ['_controller' => 'App\\Controller\\VikaController::EncadrementDelete'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/vika-encadrement-delete']], [], []],
        'sponsors_delete' => [['id'], ['_controller' => 'App\\Controller\\VikaController::SponsorDelete'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/vika-sponsor-delete']], [], []],
        'encadrement_index' => [['path'], ['_controller' => 'App\\Controller\\VikaController::vikaEncadrement'], [], [['variable', '-', '[^/]++', 'path', true], ['text', '/vika%page']], [], []],
        'sponsor_index' => [['path'], ['_controller' => 'App\\Controller\\VikaController::vikaSponsor'], [], [['variable', '-', '[^/]++', 'path', true], ['text', '/vika-page']], [], []],
        'VikaContentEdit' => [['path'], ['_controller' => 'App\\Controller\\VikaController::vikacreate'], [], [['text', '-edit'], ['variable', '-', '[^/\\-]++', 'path', true], ['text', '/vika']], [], []],
        'VikaContent' => [['path'], ['_controller' => 'App\\Controller\\VikaController::vikashow'], [], [['variable', '-', '[^/]++', 'path', true], ['text', '/vika']], [], []],
        'vika_event_showList' => [['cat'], ['_controller' => 'App\\Controller\\VikaEventController::showList'], [], [['variable', '-', '[^/]++', 'cat', true], ['text', '/vika_event-showList']], [], []],
        'vika_event_index' => [[], ['_controller' => 'App\\Controller\\VikaEventController::index'], [], [['text', '/vika_event-list']], [], []],
        'vikaEvent_calendar' => [[], ['_controller' => 'App\\Controller\\VikaEventController::calendar'], [], [['text', '/vika_event-calendar']], [], []],
        'vika_event_show' => [['id'], ['_controller' => 'App\\Controller\\VikaEventController::show'], ['id' => '\\d+'], [['variable', '-', '\\d+', 'id', true], ['text', '/vika_event']], [], []],
        'vika_event_new' => [[], ['_controller' => 'App\\Controller\\VikaEventController::edit'], [], [['text', '/vika_event-new']], [], []],
        'vika_event_edit' => [['id'], ['_controller' => 'App\\Controller\\VikaEventController::edit'], ['id' => '\\d+'], [['text', '-edit'], ['variable', '-', '\\d+', 'id', true], ['text', '/vika_event']], [], []],
        'vika_event_delete' => [['id'], ['_controller' => 'App\\Controller\\VikaEventController::delete'], ['id' => '\\d+'], [['text', '-delete'], ['variable', '-', '\\d+', 'id', true], ['text', '/vika_event']], [], []],
        'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'doctrine_yuml_mapping' => [[], ['_controller' => 'Onurb\\Bundle\\YumlBundle\\Controller\\YumlController::indexAction'], [], [['text', '/yuml']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
