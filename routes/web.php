<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('/home','HomeController@index')->name('home');
// Route::get('/blog','FrontController@blog')->name('blog');
// Route::get('/contact_with_us','FrontController@contactus')->name('contactus');
// Route::get('/m_events_category','FrontController@movie_eventscategory')->name('showmoviecategory');
// Route::get('/t_events_category','FrontController@theatre_eventscategory')->name('showtheatrecategory');
// Route::get('/c_events_category','FrontController@concert_eventscategory')->name('showconcertcategory');
// Route::get('/single_event','FrontController@single_event')->name('single_event');
// Route::get('/seat_section','FrontController@seat_section')->name('seat_section');
// Route::get('/seats','FrontController@seats')->name('seats');
// Route::get('/tracking','FrontController@tracking')->name('tracking');
// Route::get('/final_ticket','FrontController@final_ticket')->name('final_ticket');
// Route::get('/prepay_ticket','FrontController@prepay_ticket')->name('prepay_ticket');
// Route::get('/select_section','FrontController@select_section')->name('select_section');
// Route::get('/login','FrontController@login')->name('login');
// Route::get('/register','FrontController@register')->name('register');
// Route::get('/profile','FrontController@profile')->name('profile');

// ====================================================================================




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','HomeController@index');


// ====== EventController =========
Route::get('/single_event','EventController@single_event')->name('single_event');
Route::get('/m_events','EventController@m_events')->name('m_events');
Route::get('/best_sellers','EventController@best_sellers')->name('best_sellers');
Route::get('/popular_events','EventController@popular_events')->name('popular_events');

// ====== SeatController =======
Route::get('/seat_section','SeatController@seat_section')->name('seat_section');
Route::get('/seats','SeatController@seats')->name('seats');
Route::get('/myseat','SeatController@myseat')->name('myseat');
Route::get('/seat_reserved','SeatController@seat_reserved')->name('seat_reserved');
Route::get('/seat_sold','SeatController@seat_sold')->name('seat_sold');


// ===== TicketingController =======
Route::get('/section_select','TicketingController@section_select')->name('section_select');
Route::get('/prepay_ticket','TicketingController@prepay_ticket')->name('prepay_ticket');
Route::get('/final_ticket','TicketingController@final_ticket')->name('final_ticket');

// ======== SiteController ======
Route::get('/tracking','SiteController@tracking')->name('tracking');
Route::get('/contactus','SiteController@contactus')->name('contactus');
Route::get('/blog','SiteController@blog')->name('blog');
Route::get('/contactus_save','SiteController@contactus_save')->name('contactus_save');
Route::get('/search_result','SiteController@search_result')->name('search_result');
Route::get('/upcoming_news','SiteController@upcoming_news')->name('upcoming_news');

// ======== UserController ======
Route::get('/profile','UserController@profile')->name('profile');
Route::get('/register','UserController@register')->name('register');
Route::get('/login','UserController@login')->name('login');
Route::get('/edit_profile','UserController@edit_profile')->name('edit_profile');
Route::get('/ticket_history','UserController@ticket_history')->name('ticket_history');
Route::get('/favorites_save','UserController@favorites_save')->name('favorites_save');
Route::get('/favorites_show','UserController@favorites_show')->name('favorites_show');



// ===========RateandCommendController===========
Route::get('/rate_save','RateandCommentController@rate_save')->name('rate_save');
Route::get('/rate_show','RateandCommentController@rate_show')->name('rate_show');
Route::get('/comment','RateandCommentController@comment')->name('comment');




