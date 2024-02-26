<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\dashboard\AnalyticsController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\language\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\dashboard\FrontController;
use App\Http\Controllers\dashboard\FeatureController;
use App\Http\Controllers\dashboard\ReviewController;
use App\Http\Controllers\dashboard\TeamController;
use App\Http\Controllers\dashboard\DataController;
use App\Http\Controllers\dashboard\FunFactsController;
use App\Http\Controllers\dashboard\FaqController;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\LogoController;
use App\Http\Controllers\dashboard\PricingPlanController;
use App\Models\HomeData;
use Illuminate\Routing\Route as RoutingRoute;



Route::get('/', [FrontController::class, 'index'])->name('front-page');
Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::get('/super-admin', [AuthenticationController::class, 'indexAdmin'])->name('login-admin');
Route::get('/login-index', [AuthenticationController::class, 'loginView'])->name('login-view');
Route::get('/login-front', [AuthenticationController::class, 'loginFront'])->name('login-front');
Route::get('/register', [AuthenticationController::class, 'showRegisterView'])->name('register');
Route::post('/register-action', [AuthenticationController::class, 'register'])->name('register-action');
Route::get('/login-success', [AuthenticationController::class, 'login'])->name('login-success');
Route::get('/login-admin', [AuthenticationController::class, 'loginAdmin'])->name('loginAdmin');

Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/logout-dashboard', [AuthenticationController::class, 'logoutDashboard'])->name('logout-dashboard');
Route::get('/logout-dashboard-admin', [AuthenticationController::class, 'logoutDashboardAdmin'])->name('logout-dashboard-admin');
Route::post('/send-email', [FrontController::class, 'sendEmail'])->name('send.email');
Route::post('/send-email-letter', [FrontController::class, 'saveEmailLetter'])->name('save.email');
Route::post('/send-message-disscusion', [FrontController::class, 'sendMessageContact'])->name('send.message.contact');
Route::get('/newsletter', [FrontController::class, 'messages'])->name('new-letter');








Route::middleware(['auth'])->group(function () {
 Route::get('/login-front-page', [FrontController::class, 'showFrontPage'])->name('login-to-front');
Route::get('/payment-page', [FrontController::class, 'showPaymentPage'])->name('payment-page');
Route::post('/subscription-plan-save', [FrontController::class, 'processSubscription'])->name('process-subscription');
Route::get('/admin', [FrontController::class, 'adminDashboard'])->name('admin-data');

//feature


Route::get('/feature', [FeatureController::class, 'index'])->name('dashboard-feature-page');
Route::post('/feature-save', [FeatureController::class, 'createFeature'])->name('create-features');
Route::post('/feature-data-save', [FeatureController::class, 'createFeaturesData'])->name('create-features-data');
Route::put('/updatefeature/{id}', [FeatureController::class, 'update'])->name('feature.update');
Route::delete('/feature/{id}', [FeatureController::class, 'destroy'])->name('feature.delete');


//review

Route::get('/review', [ReviewController::class, 'index'])->name('dashboard-review-page');
Route::post('/review-save', [ReviewController::class, 'createReview'])->name('create-review');
Route::post('/review-data-save', [ReviewController::class, 'createReviewsData'])->name('create-reviews-data');
Route::put('/updateReview/{id}', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.delete');


//team

Route::get('/team', [TeamController::class, 'index'])->name('dashboard-team-page');
Route::post('/team-save', [TeamController::class, 'createTeam'])->name('create-team-data');
Route::post('/team-data-save', [TeamController::class, 'createTeamsData'])->name('create-teams-data');
Route::put('/updateteam/{id}', [TeamController::class, 'update'])->name('team.update');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.delete');

//funfacts
Route::get('/fun', [FunFactsController::class, 'index'])->name('dashboard-fun-page');
Route::post('/fun-data-save', [FunFactsController::class, 'createFunsData'])->name('create-funs-data');
Route::put('/updatefun/{id}', [FunFactsController::class, 'update'])->name('fun.update');
Route::delete('/fun/{id}', [FunFactsController::class, 'destroy'])->name('fun.delete');

//faq
Route::get('/faq', [FaqController::class, 'index'])->name('dashboard-faq-page');
Route::post('/faq-save', [FaqController::class, 'createFaq'])->name('create-faq');
Route::post('/faq-data-save', [FaqController::class, 'createFaqsData'])->name('create-faqs-data');
Route::put('/updatefaq/{id}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.delete');

//logo

Route::get('/logo', [LogoController::class, 'index'])->name('dashboard-logo-page');
Route::post('/logo-data-save', [LogoController::class, 'createLogoData'])->name('create-logo-data');
Route::put('/updatelogo/{id}', [LogoController::class, 'update'])->name('logo.update');
Route::delete('/logo/{id}', [LogoController::class, 'destroy'])->name('logo.delete');

//pricingplan
Route::get('/pricing-plan', [PricingPlanController::class, 'index'])->name('dashboard-plan-page');
Route::post('/plan-save', [PricingPlanController::class, 'createPlan'])->name('create-plan');
Route::post('/plan-data-save', [PricingPlanController::class, 'createPlanData'])->name('create-plan-data');
Route::put('/updateplan/{id}', [PricingPlanController::class, 'update'])->name('plan.update');
Route::delete('/plandata/{id}', [PricingPlanController::class, 'destroy'])->name('plan.delete');

//list
Route::post('/plan-list-save', [PricingPlanController::class, 'insertListPlan'])->name('create-list-plan');
Route::get('/plan-list-get', [PricingPlanController::class, 'getPlanDataList'])->name('get-list-plan');
Route::delete('/planlist/{id}', [PricingPlanController::class, 'delete'])->name('list.content.delete');

//home
Route::get('/home', [HomeController::class, 'index'])->name('dashboard-home-page');
Route::post('/home-data-save', [HomeController::class, 'createHomeData'])->name('create-home-data');

//contact
Route::get('/contact', [ContactController::class, 'index'])->name('dashboard-contact-page');
Route::post('/create-custom-data', [ContactController::class, 'createContactData'])->name('contact-save-data');

});

