<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'base_route', '_controller' => 'App\\Controller\\BaseController::base'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/wizard/xhr/check-requirements' => [[['_route' => 'uvdesk_community_installation_wizard_check_requirements', '_controller' => 'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/verify-database-credentials' => [[['_route' => 'uvdesk_community_installation_wizard_verify_database_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::verifyDatabaseCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/intermediary/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_store_super_user_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::prepareSuperUserDetailsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_store_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR'], null, null, null, false, false, null]],
        '/wizard/xhr/load/configurations' => [[['_route' => 'uvdesk_community_installation_wizard_update_configurations_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/migrations' => [[['_route' => 'uvdesk_community_installation_wizard_migrate_database_schema_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/entities' => [[['_route' => 'uvdesk_community_installation_wizard_populate_database_entities_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_create_default_super_user_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_update_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR'], null, ['POST' => 0], null, false, false, null]],
        '/tracker/xhr/get/cacheImage' => [[['_route' => 'uvdesk_community_tracker_cache_image', '_controller' => 'App\\Controller\\ImageCache\\ImageCacheController::getCachedImage'], null, ['GET' => 0], null, false, false, null]],
        '/mailbox/listener' => [[['_route' => 'helpdesk_member_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processMailXHR', '_locale' => 'en'], null, null, null, false, false, null]],
        '/api/v1/me' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_me_api_load_current_agent_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Me::loadCurrentAgentDetails'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/agents' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_agents', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::loadAgents'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/customers' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_customers', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::loadCustomers'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/teams' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_load_teams', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::loadTeams'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/groups' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_load_groups', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::loadGroup'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/tickets' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_fetch_tickets', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::fetchTickets'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/tickets/metadata' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_load_ticket_attributes', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::fetchTicketsMetadata'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/ticket' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_create_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::createTicket'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/ticket-types' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_show_ticketTypes', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\TicketTypes::ticketTypeList'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/session/login' => [[['_route' => 'uvdesk_api_bundle_sessions_api_v1.0_login_session', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Sessions::loginSession'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/session/logout' => [[['_route' => 'uvdesk_api_bundle_sessions_api_v1.0_logout_session', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Sessions::logoutSession'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/login(*:223)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/logout(*:286)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/dashboard(*:352)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/profile(*:416)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agent/xhr(?:/([^/]++))?(*:496)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agent(?:/([^/]++))?(*:572)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agents(*:635)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agents/xhr(*:702)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/create/agent(*:771)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/groups(*:834)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/groups/xhr(*:901)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/create/group(*:970)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/group/([^/]++)(*:1041)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/group/delete/xhr(?:/([^/]++))?(*:1129)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/teams(*:1192)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/teams/xhr(*:1259)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/create/team(*:1328)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/team/([^/]++)(*:1399)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/team/delete/xhr(?:/([^/]++))?(*:1486)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/privileges(*:1554)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/privileges/xhr(*:1626)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/create/privilege(*:1700)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/privilege/([^/]++)(*:1776)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/privilege/delete/xhr(?:/([^/]++))?(*:1868)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/profile(*:1933)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/member/access\\-token(*:2011)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/saved\\-filter\\-xhr(?:/([^/]++))?(*:2101)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/theme/helpdesk(*:2173)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/swiftmailer(*:2251)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/swiftmailer/xhr(*:2333)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/swiftmailer/create(*:2418)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/swiftmailer/update/([^/]++)(*:2512)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/swiftmailer/xhr/remove\\-configurations(*:2617)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/email/settings(*:2698)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/email/xhr/settings_update(*:2781)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/tickets(*:2846)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/tickets/xhr(*:2915)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/tickets/mass\\-xhr(*:2990)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/tickets/filter\\-options(*:3071)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/tickets/search\\-filter\\-options(*:3160)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/view(?:/([^/]++))?(*:3243)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/xhr(?:/([^/]++))?(*:3325)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/save(*:3394)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/search\\-filter\\-options(*:3482)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/trash/([^/]++)(*:3561)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/delete/([^/]++)(*:3641)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/saved\\-reply\\-apply(?:/([^/]++))?(*:3739)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/labels/save(*:3815)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/labels/update(?:/([^/]++))?(*:3907)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/bookmark/xhr(*:3984)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/update/details/([^/]++)(*:4072)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/update/attributes(?:/([^/]++))?(*:4168)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/download(?:/([^/]++))?(*:4255)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/download\\-zip(?:/([^/]++))?(*:4347)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/collaborator(?:/([^/]++))?(*:4438)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/search\\-filter\\-options(*:4526)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/threads/ajax(?:/([^/]++))?(*:4610)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/thread/encoded\\-images/save/([^/]++)(*:4704)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/thread/add(?:/([^/]++))?(*:4786)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/threads/ajax/action(?:/([^/]++))?(*:4877)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/threads/update(?:/([^/]++))?(*:4963)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/templates(*:5030)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/template\\-ajax(?:/([^/]++))?(*:5116)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/template/add(*:5186)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/template/edit(?:/([^/]++))?(*:5271)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/support\\-tags(*:5342)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/support\\-tags/xhr(*:5417)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/support\\-tags/create(?:/([^/]++))?(*:5509)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/support\\-tags/update(?:/([^/]++))?(*:5601)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/support\\-tags/remove(?:/([^/]++))?(*:5693)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket\\-types(*:5764)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket\\-types/xhr(*:5839)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket\\-types/create(*:5917)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket\\-types/remove(?:/([^/]++))?(*:6009)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket\\-types/update/([^/]++)(*:6096)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/quick\\-view(?:/([^/]++))?(*:6186)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/saved\\-replies(*:6258)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/saved\\-replies/xhr(?:/([^/]++))?(*:6348)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/saved\\-reply/edit(?:/([^/]++))?(*:6437)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/saved\\-reply/add(?:/([^/]++))?(*:6525)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/prepared\\-response/xhr(?:/([^/]++)(?:/([^/]++))?)?(*:6640)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agent/permissions/quick\\-view/agent\\-details(?:/([^/]++))?(*:6756)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/ticket/([^/]++)/generate\\-public\\-resource\\-access\\-link(*:6870)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/customers(*:6937)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/customers/xhr(*:7008)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/customer/update\\-star(*:7087)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/customer(?:/([^/]++))?(*:7167)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/customer/xhr(?:/([^/]++))?(*:7251)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/create/customer(*:7324)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agent/activity/list(*:7401)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/agent/activity/xhr(*:7477)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/reports/achievements(*:7555)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/reports/achievements\\-data(*:7639)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/cache\\-clear(*:7709)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/session\\-check(*:7781)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps(*:7863)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps/xhr(*:7949)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps/create(*:8038)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps/update(?:/([^/]++))?(*:8141)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps/xhr/status(?:/([^/]++))?(*:8248)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/microsoft\\-apps/xhr/remove(?:/([^/]++))?(*:8355)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/integrations/microsoft\\-apps/add\\-account/([^/]++)/([^/]++)(*:8472)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/integrations/microsoft\\-apps/oauth/login(*:8570)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/forgot\\-password(*:8637)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/update\\-credentials(?:/([^/]++)(?:/([^/]++))?)?(*:8735)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflows(*:8802)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflows/xhr(*:8873)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflow/add(*:8943)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflow/edit/([^/]++)(*:9023)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflow\\-ajax(?:/([^/]++))?(*:9109)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflow/xhr/condition/options(?:/([^/]++))?(*:9211)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/workflow/xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:9324)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses(*:9401)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses/delete(?:/([^/]++))?(*:9499)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses/ajax(*:9581)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses/add(*:9662)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses/edit(?:/([^/]++))?(*:9758)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/prepared\\-responses/xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:9882)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/apps(*:9944)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/apps/collection(*:10017)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/apps/([^/]++)/([^/]++)/([^/]++)(*:10107)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/apps/([^/]++)/([^/]++)/([^/]++)/api(*:10201)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/apps/([^/]++)/([^/]++)/([^/]++)/callback(*:10300)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/mailbox(*:10375)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/mailbox/xhr(*:10454)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/mailbox/create(*:10536)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/mailbox/update(?:/([^/]++))?(*:10632)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/mailbox/remove(?:/([^/]++))?(*:10728)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/processRawEmail(*:10802)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/mailbox/outlook/listener(*:10885)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/file\\-upload(*:10956)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/url\\-upload(*:11026)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/file\\-remove(*:11097)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/service\\-call(*:11169)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/folders(*:11249)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/folders/xhr(*:11333)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/folders/new(*:11417)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/folders/update(?:/([^/]++))?(*:11518)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/folders/update/xhr(?:/([^/]++))?(*:11623)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/branding/locales/ajax(*:11703)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/categories(*:11772)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/([^/]++)/categories(*:11850)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/categories/ajax(*:11924)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/([^/]++)/categories/ajax(*:12007)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/category/add(*:12078)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/category/edit(?:/([^/]++))?(*:12164)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/category/ajax(?:/([^/]++))?(*:12250)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/articles(*:12317)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/([^/]++)/articles(*:12393)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/solution/([^/]++)/articles(*:12478)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/articles/ajax(*:12550)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/solution/([^/]++)/articles/ajax(*:12640)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/article/add(*:12710)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/article/edit(?:/([^/]++))?(*:12795)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/article/ajax(?:/([^/]++))?(*:12880)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/articleHistory(?:/([^/]++))?(*:12967)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/articleRelated(?:/([^/]++))?(*:13054)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/branding/theme(?:/([^/]++))?(*:13141)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/block/spam(*:13210)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/branding/ajax(*:13282)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/announcement/list(*:13358)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/announcement/xhr(*:13433)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/announcement/new(*:13522)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/announcement/update(?:/([^/]++))?(*:13628)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/announcement/remove(?:/([^/]++))?(*:13734)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/module/list(*:13804)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/module/xhr(*:13873)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/marketing/module/new(*:13966)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/marketing/module(?:/([^/]++))?(*:14069)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/knowledgebase/marketing/module/xhr/delete(?:/([^/]++))?(*:14183)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/login(*:14249)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/logout(*:14316)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/account(*:14384)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/tickets(*:14452)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/tickets/xhr(*:14524)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/view(?:/([^/]++))?(*:14610)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/threads/ajax(?:/([^/]++))?(*:14697)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/thread/save(?:/([^/]++))?(*:14783)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/thread/encoded\\-images/save/([^/]++)(*:14880)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/rate(?:/([^/]++))?(*:14966)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/draft\\-save(?:/([^/]++))?(*:15059)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/collaborator(?:/([^/]++))?(*:15153)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/create\\-ticket(*:15228)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/success(?:/([^/]++)(?:/([^/]++))?)?(*:15331)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/download(?:/([^/]++))?(*:15421)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/intermediate/public\\-access/read\\-only(*:15527)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/ticket/download\\-ticket\\-zip(?:/([^/]++))?(*:15630)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/attachment/([^/]++)/view(*:15715)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/search/article(?:/([^/]++))?(*:15804)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/customer/marketing/modules/xhr(*:15895)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/customer/login/genrate/otp(*:15982)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/customer/login/otp/verify(*:16068)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/customer/marketing/announcement/xhr(*:16164)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/customer/session\\-check(*:16239)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)(*:16290)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/exception(*:16351)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/folder(?:/([^/]++))?(*:16423)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/folder/([^/]++)/articles(*:16499)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/categories(*:16561)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/category(?:/([^/]++))?(*:16635)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/article(?:/([^/]++))?(*:16708)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/blog(?:/([^/]++))?(*:16778)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/rating/([^/]++)(*:16845)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/search(?:/([^/]++))?(*:16917)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/tag(?:/([^/]++)(?:/([^/]++))?)?(*:17000)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/threads/public\\-ajax(?:/([^/]++))?(*:17086)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/api(*:17157)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/api/xhr(*:17232)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/api/create(*:17310)'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he|pt_BR)/member/settings/api/update/xhr(?:/([^/]++))?(*:17406)'
                .'|/api/v1/(?'
                    .'|agents/(?'
                        .'|([^/]++)(*:17445)'
                        .'|create(*:17461)'
                        .'|update/([^/]++)(*:17486)'
                        .'|delete/([^/]++)(*:17511)'
                    .')'
                    .'|customers/(?'
                        .'|([^/]++)(*:17543)'
                        .'|create(*:17559)'
                        .'|update/([^/]++)(*:17584)'
                        .'|delete/([^/]++)(*:17609)'
                    .')'
                    .'|t(?'
                        .'|eams/(?'
                            .'|([^/]++)(*:17640)'
                            .'|create(*:17656)'
                            .'|update/([^/]++)(*:17681)'
                            .'|delete/([^/]++)(*:17706)'
                        .')'
                        .'|rash/ticket/(\\d+)(*:17734)'
                        .'|icket/(?'
                            .'|([^/]++)(*:17761)'
                            .'|(\\d+)/agent(*:17782)'
                            .'|(\\d+)/collaborator(*:17810)'
                            .'|attachment/(\\d+)(*:17836)'
                            .'|download\\-zip/(\\d+)(*:17865)'
                            .'|([^/]++)(*:17883)'
                            .'|(\\d+)/thread(*:17905)'
                        .')'
                    .')'
                    .'|groups/(?'
                        .'|([^/]++)(*:17935)'
                        .'|create(*:17951)'
                        .'|update/([^/]++)(*:17976)'
                        .'|delete/([^/]++)(*:18001)'
                    .')'
                    .'|delete/ticket/(\\d+)(*:18031)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'helpdesk_member_handle_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        286 => [[['_route' => 'helpdesk_member_handle_logout', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        352 => [[['_route' => 'helpdesk_member_dashboard', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadDashboard', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        416 => [[['_route' => 'helpdesk_member_profile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        496 => [[['_route' => 'helpdesk_member_account_xhr', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::deleteAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        572 => [[['_route' => 'helpdesk_member_account', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::editAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        635 => [[['_route' => 'helpdesk_member_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::listAgents', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        702 => [[['_route' => 'helpdesk_member_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        771 => [[['_route' => 'helpdesk_member_create_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::createAgent', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        834 => [[['_route' => 'helpdesk_member_support_group_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::listGroups', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        901 => [[['_route' => 'helpdesk_member_support_group_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        970 => [[['_route' => 'helpdesk_member_create_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::createGroup', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1041 => [[['_route' => 'helpdesk_member_update_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::editGroup', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1129 => [[['_route' => 'helpdesk_member_remove_support_group_xhr', 'supportGroupId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::deleteGroupXHR', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1192 => [[['_route' => 'helpdesk_member_support_team_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::listTeams', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1259 => [[['_route' => 'helpdesk_member_support_team_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1328 => [[['_route' => 'helpdesk_member_create_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::createTeam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1399 => [[['_route' => 'helpdesk_member_update_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::editTeam', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1486 => [[['_route' => 'helpdesk_member_remove_support_team_xhr', 'supportTeamId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1554 => [[['_route' => 'helpdesk_member_privilege_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::listPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1626 => [[['_route' => 'helpdesk_member_privilege_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1700 => [[['_route' => 'helpdesk_member_create_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::createPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1776 => [[['_route' => 'helpdesk_member_update_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::editPrivilege', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        1868 => [[['_route' => 'helpdesk_member_remove_privilege_xhr', 'supportPrivilegeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::deletePrivilegeXHR', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        1933 => [[['_route' => 'edit_profile', 'panelId' => 'usersprofile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\UserActivityController::editProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2011 => [[['_route' => 'access_token_xhr', '_controller' => 'CoreFrameworkBundle:Api:accessTokenXhr', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2101 => [[['_route' => 'helpdesk_member_saved_filters_xhr', 'filterId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::savedFiltersXHR', '_locale' => 'en'], ['_locale', 'filterId'], null, null, false, true, null]],
        2173 => [[['_route' => 'helpdesk_member_helpdesk_theme', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Theme::updateHelpdeskTheme', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2251 => [[['_route' => 'helpdesk_member_swiftmailer_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::loadMailers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2333 => [[['_route' => 'helpdesk_member_swiftmailer_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::loadMailersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2418 => [[['_route' => 'helpdesk_member_swiftmailer_create_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::createMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2512 => [[['_route' => 'helpdesk_member_swiftmailer_update_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2617 => [[['_route' => 'helpdesk_member_swiftmailer_remove_mailer_configuration_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2698 => [[['_route' => 'helpdesk_member_emails_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2781 => [[['_route' => 'helpdesk_member_update_emails_settings_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettingsXHR::updateSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2846 => [[['_route' => 'helpdesk_member_ticket_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2915 => [[['_route' => 'helpdesk_member_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2990 => [[['_route' => 'helpdesk_member_ticket_collection_mass_action_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3071 => [[['_route' => 'helpdesk_member_ticket_collection_load_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3160 => [[['_route' => 'helpdesk_member_ticket_collection_search_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketCollectionSearchFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3243 => [[['_route' => 'helpdesk_member_ticket', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        3325 => [[['_route' => 'helpdesk_member_ticket_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        3394 => [[['_route' => 'helpdesk_member_create_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::saveTicket', '_locale' => 'en'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        3482 => [[['_route' => 'search_ticket_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getSearchFilterOptionsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3561 => [[['_route' => 'helpdesk_member_trash_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::trashTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        3641 => [[['_route' => 'helpdesk_member_delete_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::deleteTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        3739 => [[['_route' => 'helpdesk_member_ticket_saved_reply_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSavedReplies', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3815 => [[['_route' => 'helpdesk_member_ticket_add_label_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::saveTicketLabel', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3907 => [[['_route' => 'helpdesk_member_ticket_label_xhr', 'ticketLabelId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::ticketLabelXHR', '_locale' => 'en'], ['_locale', 'ticketLabelId'], null, null, false, true, null]],
        3984 => [[['_route' => 'helpdesk_member_bookmark_ticket_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::bookmarkTicketXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4072 => [[['_route' => 'helpdesk_member_update_ticket_details_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketDetails', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4168 => [[['_route' => 'helpdesk_member_update_ticket_attributes_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketAttributes', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4255 => [[['_route' => 'helpdesk_member_ticket_download_attachment', 'attachmentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmentId'], null, null, false, true, null]],
        4347 => [[['_route' => 'helpdesk_member_ticket_download_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadZipAttachment', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4438 => [[['_route' => 'helpdesk_member_ticket_manage_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateCollaboratorXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4526 => [[['_route' => 'helpdesk_member_ticket_search_filter_options', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSearchFilterOptions', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4610 => [[['_route' => 'helpdesk_member_thread_collection_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\ThreadXHR::listTicketThreadCollectionXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4704 => [[['_route' => 'helpdesk_member_thread_encoded_image_uploader', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4786 => [[['_route' => 'helpdesk_member_add_ticket_thread', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::saveThread', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4877 => [[['_route' => 'helpdesk_member_thread_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::threadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4963 => [[['_route' => 'helpdesk_member_thread_update_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::updateThreadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        5030 => [[['_route' => 'email_templates_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templates', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5116 => [[['_route' => 'email_templates_xhr_action', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        5186 => [[['_route' => 'email_templates_add_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5271 => [[['_route' => 'email_templates_edit_action', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        5342 => [[['_route' => 'helpdesk_member_ticket_tag_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTagCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5417 => [[['_route' => 'helpdesk_member_ticket_tag_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTagCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5509 => [[['_route' => 'helpdesk_member_ticket_create_tag_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::createTicketTagXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        5601 => [[['_route' => 'helpdesk_member_update_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        5693 => [[['_route' => 'helpdesk_member_remove_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        5764 => [[['_route' => 'helpdesk_member_ticket_type_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketTypeCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5839 => [[['_route' => 'helpdesk_member_ticket_type_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketTypeCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5917 => [[['_route' => 'helpdesk_member_create_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        6009 => [[['_route' => 'helpdesk_member_remove_ticket_type', 'typeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTypeXHR', '_locale' => 'en'], ['_locale', 'typeId'], null, null, false, true, null]],
        6096 => [[['_route' => 'helpdesk_member_update_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale', 'ticketTypeId'], null, null, false, true, null]],
        6186 => [[['_route' => 'helpdesk_member_ticket_quick_view_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        6258 => [[['_route' => 'helpdesk_member_saved_replies', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::loadSavedReplies', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        6348 => [[['_route' => 'helpdesk_member_saved_replies_xhr', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        6437 => [[['_route' => 'helpdesk_member_update_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        6525 => [[['_route' => 'helpdesk_member_create_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        6640 => [[['_route' => 'helpdesk_member_ticket_prepared_response_xhr', 'ticketId' => 0, 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::applyTicketPreparedResponseXHR', '_locale' => 'en'], ['_locale', 'ticketId', 'id'], null, null, false, true, null]],
        6756 => [[['_route' => 'helpdesk_member_ticket_user_permission_quick_view_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getAgentAcessQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        6870 => [[['_route' => 'uvdesk_member_generate_ticket_public_resource_access_link', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::generateCustomerPublicTicketResourceAccessLink', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        6937 => [[['_route' => 'helpdesk_member_manage_customer_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::listCustomers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7008 => [[['_route' => 'helpdesk_member_manage_customer_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7087 => [[['_route' => 'helpdesk_member_bookmark_customer_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::bookmarkCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7167 => [[['_route' => 'helpdesk_member_manage_customer_account', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::editCustomer', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        7251 => [[['_route' => 'helpdesk_member_remove_customer_account_xhr', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::removeCustomerXHR', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        7324 => [[['_route' => 'helpdesk_member_create_customer_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::createCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7401 => [[['_route' => 'helpdesk_member_agent_activity', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::listAgentActivity', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7477 => [[['_route' => 'helpdesk_member_agent_activity_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::agentActivityXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7555 => [[['_route' => 'helpdesk_report_achievements_insight_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::achievementInsightsAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7639 => [[['_route' => 'helpdesk_report_achievements_data_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7709 => [[['_route' => 'helpdesk_member_cache_clear', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::clearProjectCache', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7781 => [[['_route' => 'helpdesk_member_session_check', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Session::checkSession', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7863 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7949 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::loadSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8038 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_create_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::createConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8141 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::updateConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        8248 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_toggle_configuration_status', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::toggleConfigurationStatus', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        8355 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_remove_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::removeConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        8472 => [[['_route' => 'uvdesk_member_core_framework_integrations_microsoft_apps_add_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::addMicrosoftAccount', '_locale' => 'en'], ['_locale', 'appId', 'origin'], null, null, false, true, null]],
        8570 => [[['_route' => 'uvdesk_member_core_framework_integrations_microsoft_apps_oauth_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::handleOAuthCallback', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8637 => [[['_route' => 'helpdesk_forgot_account_password', '_locale' => 'en', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::forgotPassword'], ['_locale'], null, null, false, false, null]],
        8735 => [[['_route' => 'helpdesk_update_account_credentials', '_locale' => 'en', 'email' => '', 'verificationCode' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials'], ['_locale', 'email', 'verificationCode'], null, null, false, true, null]],
        8802 => [[['_route' => 'helpdesk_member_workflow_collection', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::listWorkflowCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8873 => [[['_route' => 'workflowslist_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8943 => [[['_route' => 'workflows_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::createWorkflow', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        9023 => [[['_route' => 'workflows_editaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::editWorkflow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        9109 => [[['_route' => 'workflows_xhraction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::WorkflowsxhrAction', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        9211 => [[['_route' => 'helpdesk_member_workflow_condition_options_xhr', 'entity' => 'default', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowConditionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity'], null, null, false, true, null]],
        9324 => [[['_route' => 'helpdesk_member_workflow_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        9401 => [[['_route' => 'prepare_response_action', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::prepareResponseList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        9499 => [[['_route' => 'prepare_response_delete', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseDeleteXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        9581 => [[['_route' => 'prepare_response_list_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        9662 => [[['_route' => 'prepare_response_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::createPrepareResponse', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        9758 => [[['_route' => 'prepare_response_editaction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        9882 => [[['_route' => 'helpdesk_member_prepared_response_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        9944 => [[['_route' => 'uvdesk_extensions_applications_dashboard', 'panelId' => 'apps', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10017 => [[['_route' => 'uvdesk_extensions_applications_dashboard_xhr', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10107 => [[['_route' => 'uvdesk_extensions_standalone_application_dashboard', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], null, null, false, true, null]],
        10201 => [[['_route' => 'uvdesk_extensions_standalone_application_api_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1, 'PUT' => 2, 'DELETE' => 3], null, false, false, null]],
        10300 => [[['_route' => 'uvdesk_extensions_standalone_application_callback_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::callbackEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10375 => [[['_route' => 'helpdesk_member_mailbox_settings', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::loadMailboxes', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10454 => [[['_route' => 'helpdesk_member_mailbox_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::loadMailboxesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10536 => [[['_route' => 'helpdesk_member_mailbox_create_configuration', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::createMailboxConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10632 => [[['_route' => 'helpdesk_member_mailbox_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::updateMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        10728 => [[['_route' => 'helpdesk_member_mailbox_remove_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::removeMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        10802 => [[['_route' => 'helpdesk_member_mailbox_direct_convert_mail', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processRawContentMail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10885 => [[['_route' => 'helpdesk_member_outlook_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processOutlookMailXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        10956 => [[['_route' => 'ajax_file_upload', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11026 => [[['_route' => 'ajax_url_file', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxUrlFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11097 => [[['_route' => 'ajax_file_remove', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileRemove', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11169 => [[['_route' => 'ajax_service_call', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxServiceCall', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11249 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::listFolders', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11333 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11417 => [[['_route' => 'helpdesk_member_knowledgebase_create_folder', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::createFolder', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11518 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::updateFolder', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        11623 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder_xhr', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::updateFolderXHR', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        11703 => [[['_route' => 'helpdesk_member_knowledgebase_update_locales', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::LocalesUpdateXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11772 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        11850 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        11924 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        12007 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        12078 => [[['_route' => 'helpdesk_member_knowledgebase_create_category', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        12164 => [[['_route' => 'helpdesk_member_knowledgebase_update_category', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        12250 => [[['_route' => 'helpdesk_member_knowledgebase_update_category_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        12317 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        12393 => [[['_route' => 'helpdesk_member_knowledgebase_category_articles_collection', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, false, null]],
        12478 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        12550 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        12640 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        12710 => [[['_route' => 'helpdesk_member_knowledgebase_create_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        12795 => [[['_route' => 'helpdesk_member_knowledgebase_update_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        12880 => [[['_route' => 'helpdesk_member_knowledgebase_update_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        12967 => [[['_route' => 'helpdesk_member_knowledgebase_revision_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleHistoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        13054 => [[['_route' => 'helpdesk_member_knowledgebase_related_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleRelatedXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        13141 => [[['_route' => 'helpdesk_member_knowledgebase_theme', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::theme', '_locale' => 'en'], ['_locale', 'type'], null, null, false, true, null]],
        13210 => [[['_route' => 'helpdesk_member_knowledgebase_spam', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::spam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13282 => [[['_route' => 'helpdesk_member_knowledgebase_update_theme_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::BrandingXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13358 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13433 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13522 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13628 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_announcement', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        13734 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_announcement_xhr', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::removeAnnouncementXHR', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        13804 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_module', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::listModules', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13873 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_module_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::listModulesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        13966 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_module', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::updateModule', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14069 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_module', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::updateModule', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        14183 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_module_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::removeModuleXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        14249 => [[['_route' => 'helpdesk_customer_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14316 => [[['_route' => 'helpdesk_customer_logout', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14384 => [[['_route' => 'helpdesk_customer_account', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::Account', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14452 => [[['_route' => 'helpdesk_customer_ticket_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::Tickets', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14524 => [[['_route' => 'helpdesk_customer_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        14610 => [[['_route' => 'helpdesk_customer_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        14697 => [[['_route' => 'helpdesk_customer_thread_collection_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        14783 => [[['_route' => 'helpdesk_customer_add_ticket_thread', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveReply', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        14880 => [[['_route' => 'helpdesk_customer_upload_thread_encoded_image', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        14966 => [[['_route' => 'helpdesk_customer_rate_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::rateTicket', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        15059 => [[['_route' => 'helpdesk_customer_save_ticket_draft', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveDraft', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        15153 => [[['_route' => 'helpdesk_customer_update_ticket_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketCollaboratorXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        15228 => [[['_route' => 'helpdesk_customer_create_ticket', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketAdd', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        15331 => [[['_route' => 'helpdesk_customer_create_ticket_success', 'email' => '', 'flag' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketSuccess', '_locale' => 'en'], ['_locale', 'email', 'flag'], null, null, false, true, null]],
        15421 => [[['_route' => 'helpdesk_customer_download_ticket_attachment', 'attachmentId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmentId'], null, null, false, true, null]],
        15527 => [[['_route' => 'helpdesk_customer_public_resource_access_intermediate', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketIntermediateAccess', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        15630 => [[['_route' => 'helpdesk_customer_download_ticket_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachmentZip', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        15715 => [[['_route' => 'helpdesk_customer_view_ticket_attachment', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AttachmentViewer::attachmentView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        15804 => [[['_route' => 'helpdesk_customer_front_article_search', 's' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::searchArticle', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        15895 => [[['_route' => 'helpdesk_member_knowledgebase_front_marketing_modules_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::marketingModuleCustomerListXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        15982 => [[['_route' => 'helpdesk_member_knowledgebase_front_customer_login_otp_generate', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::generateOtp', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16068 => [[['_route' => 'helpdesk_member_knowledgebase_front_customer_verify_otp_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::loginOtpVerify', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16164 => [[['_route' => 'helpdesk_member_knowledgebase_front_marketing_announcement_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::marketingAnnouncementCustomerListXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16239 => [[['_route' => 'helpdesk_customer_session_check', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Session::checkSession', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16290 => [[['_route' => 'helpdesk_knowledgebase', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null]],
        16351 => [[['_route' => 'helpdesk_knowledgebase_exception', '_controller' => 'WebkulDefaultBundle:Default:exceptionDefault', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16423 => [[['_route' => 'helpdesk_knowledgebase_folder', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolder', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, true, null]],
        16499 => [[['_route' => 'helpdesk_knowledgebase_folder_article_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolderArticle', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        16561 => [[['_route' => 'helpdesk_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::listCategories', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        16635 => [[['_route' => 'helpdesk_knowledgebase_category', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, true, null]],
        16708 => [[['_route' => 'helpdesk_knowledgebase_read_article', 'article' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'article'], null, null, false, true, null]],
        16778 => [[['_route' => 'helpdesk_knowledgebase_read_slug_article', 'slug' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'slug'], null, null, false, true, null]],
        16845 => [[['_route' => 'helpdesk_knowledgebase_rate_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::rateArticle', '_locale' => 'en'], ['_locale', 'articleId'], null, null, false, true, null]],
        16917 => [[['_route' => 'helpdesk_knowledgebase_search', 's' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::searchKnowledgebase', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        17000 => [[['_route' => 'helpdesk_knowledgebase_tag', 'tag' => '', 'name' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewTaggedResources', '_locale' => 'en'], ['_locale', 'tag', 'name'], null, null, false, true, null]],
        17086 => [[['_route' => 'helpdesk_customer_thread_collection_public_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        17157 => [[['_route' => 'uvdesk_api_load_configurations', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::loadConfigurations', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        17232 => [[['_route' => 'uvdesk_api_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::loadConfigurationsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        17310 => [[['_route' => 'uvdesk_api_create_configuration', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::createAccessCredentials', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        17406 => [[['_route' => 'uvdesk_api_update_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::updateAccessCredentialsXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        17445 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_agent_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::loadAgentDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        17461 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_create_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::createAgentRecord'], [], ['POST' => 0], null, false, false, null]],
        17486 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_update_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::updateAgentRecord'], ['id'], ['POST' => 0], null, false, true, null]],
        17511 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_delete_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::deleteAgentRecord'], ['agentId'], ['DELETE' => 0], null, false, true, null]],
        17543 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_customer_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::loadCustomerDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        17559 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_create_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::createCustomerRecord'], [], ['POST' => 0], null, false, false, null]],
        17584 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_update_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::updateCustomerRecord'], ['id'], ['POST' => 0], null, false, true, null]],
        17609 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_delete_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::deleteCustomerRecord'], ['customerId'], ['DELETE' => 0], null, false, true, null]],
        17640 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_load_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::loadTeamsDetails'], ['teamId'], ['GET' => 0], null, false, true, null]],
        17656 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_create_teams_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::createTeams'], [], ['POST' => 0], null, false, false, null]],
        17681 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_update_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::updateTeamsDetails'], ['teamId'], ['POST' => 0], null, false, true, null]],
        17706 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_delete_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::deleteTeamsDetails'], ['teamId'], ['DELETE' => 0], null, false, true, null]],
        17734 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_trash_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::trashTicket'], ['ticketId'], ['PUT' => 0], null, false, true, null]],
        17761 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_view_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::viewTicket'], ['ticketId'], ['GET' => 0], null, false, true, null]],
        17782 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_assign_agent_to_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::assignAgent'], ['ticketId'], ['PUT' => 0], null, false, false, null]],
        17810 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_add_remove_collaborator', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::addRemoveTicketCollaborator'], ['ticketId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        17836 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_download_attachment', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::downloadAttachment'], ['attachmentId'], ['POST' => 0], null, false, true, null]],
        17865 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_download_attachment_zip', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::downloadZipAttachment'], ['threadId'], ['POST' => 0], null, false, true, null]],
        17883 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_edit_ticket_property', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::editTicketProperties'], ['ticketId'], ['PATCH' => 0], null, false, true, null]],
        17905 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_add_thread', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Threads::saveThread'], ['ticketid'], ['POST' => 0], null, false, false, null]],
        17935 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_load_groups_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::loadGroupDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        17951 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_create_groups_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::createGroupRecord'], [], ['POST' => 0], null, false, false, null]],
        17976 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_update_groups_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::updateGroupRecord'], ['groupId'], ['POST' => 0], null, false, true, null]],
        18001 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_delete_groups_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::deleteGroupRecord'], ['groupId'], ['DELETE' => 0], null, false, true, null]],
        18031 => [
            [['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_delete_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::deleteTicketForever'], ['ticketId'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
