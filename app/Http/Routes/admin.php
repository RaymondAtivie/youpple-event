<?php
Route::group([
    'prefix' => 'admin',
    'middleware' => ['admin']
], function () {
    Route::get('/', 'AdminController@dashboard');
    Route::get('/forms', 'AdminController@forms');

    Route::get('/home/logo', "AdminController@showLogo");
    Route::post('/home/changeLogo/{logoname}', "AdminController@changeLogo");

    Route::get('/home/social', "AdminController@showSocial");
    Route::post('/home/changeSocial', "AdminController@changeSocial");

    Route::get('/home/terms', "AdminController@showTermsAndConditions");
    Route::post('/home/changeTerms', "AdminController@changeTermsAndConditions");

    Route::get('/home/termsofuse', "AdminController@showTermsOfUse");
    Route::post('/home/changeTOU', "AdminController@changeTermsOfUse");

    Route::get('/home/advert', "AdminController@showAdvert");
    Route::post('/home/changeAd', "AdminController@changeAdvert");

    Route::get('/home/privacy', "AdminController@showPrivacyPolicy");
    Route::post('/home/changePP', "AdminController@changePrivacyPolicy");

    /////////////////ABOUT//////////////////////////////////////////////

    Route::get('/about/info', "AdminController@showInfo");
    Route::post('/about/changeAboutInfo', "AdminController@changeInfo");
    Route::post('/about/changeAboutImage', "AdminController@changeInfoImage");
    Route::post('/about/changeAboutLogo/{logoname}', "AdminController@changeInfoLogo");

    Route::get('/about/clients', "AdminController@showClients");
    Route::post('/about/clients', "AdminController@saveClient");
    Route::get('/about/clients/remove/{clientId}', "AdminController@removeClient");

    Route::get('/about/team', "AdminController@showTeam");
    Route::post('/about/team', "AdminController@saveTeam");
    Route::get('/about/team/remove/{teamId}', "AdminController@removeTeam");

    Route::get('/about/partners', "AdminController@showPartners");
    Route::post('/about/partners', "AdminController@savePartner");
    Route::get('/about/partners/remove/{partnerId}', "AdminController@removePartner");

    Route::get('/about/testimonials', "AdminController@showTestimonials");
    Route::post('/about/testimonials', "AdminController@saveTestimony");
    Route::get('/about/testimonials/remove/{testimonyId}', "AdminController@removeTestimony");

    Route::get('/feature/events', "AdminController@showFeaturedEvents");
    Route::get('/feature/events/add/{event}', "AdminController@addToFeaturedEvent");
    Route::get('/feature/events/remove/{event}', "AdminController@removeFromFeaturedEvent");

    Route::get('/feature/providers', "AdminController@showFeaturedProviders");
    Route::get('/feature/providers/add/{user}', "AdminController@addToFeaturedProvider");
    Route::get('/feature/providers/remove/{user}', "AdminController@removeFromFeaturedProvider");

    Route::get('/list/customers', "AdminController@listCustomers");
    Route::get('/list/customers/remove/{user}', "AdminController@removeCustomer");

    Route::get('/list/events', "AdminController@listEvents");
    Route::get('/list/events/remove/{event}', "AdminController@removeEvent");
    Route::get('/list/events/{event}/tickets', "AdminController@eventTickets");
    Route::get('/list/events/revokeTicket/{ticket}', "AdminController@revokeTicket");
    Route::get('/list/events/unrevokeTicket/{ticket}', "AdminController@unrevokeTicket");

    Route::get('/list/providers', "AdminController@listProviders");

    ////////////////////////////////////////////////////////////

    // Route::get('/commissionsettings/add', 'adminController@addcsettingpage');
    //
    // Route::post('/addcsetting', 'adminController@addCsetting');
    //
    // Route::get('/', 'adminController@dashboard');
    // Route::get('/categories', 'adminController@categories');
    // Route::get('/categories/add', 'adminController@addcategorypage');
    // Route::get('/adminusers', 'adminController@adminusers');
    //
    //
    // Route::get('/allusers', 'adminController@siteusers');
    // Route::get('/events', 'adminController@allevents');
    // Route::get('/settings', 'adminController@settings');
    // Route::get('event/attendees/{id}', 'adminController@eventattendees');
    //
    // Route::post('/addadmin', 'adminController@postAdminuser');
    // Route::post('/deleteadmin/{code}', 'adminController@deleteAdminuser');
});

Route::get('/admin/login', 'AdminController@loginpage');
Route::get('/admin/logout', 'AdminController@logout');
Route::post('/admin/login', 'AdminController@login');

?>