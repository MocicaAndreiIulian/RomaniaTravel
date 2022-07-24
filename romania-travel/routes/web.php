<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LocationQuestionsController;
use App\Http\Controllers\LocationAnswersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ReactionsController;
use App\Http\Controllers\OpinionsController;
use App\Http\Controllers\ResetpassController;
use App\Http\Controllers\Controller;
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
Route::get('/', function () {
    return view('welcome');
});

//HOME ROUTES
Route::get('/', [IndexController::class, 'indexContent']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('editare-cont', [App\Http\Controllers\HomeController::class, 'myAccountEdit']);
Route::post('editare-cont', [App\Http\Controllers\HomeController::class, 'myAccountUpdate']);
Route::get('editare-pass', [App\Http\Controllers\HomeController::class, 'myAccountEditPass']);
Route::post('editare-pass', [App\Http\Controllers\HomeController::class, 'myAccountUpdatePass']);
Route::post('profilePicture', [App\Http\Controllers\HomeController::class, 'addProfileImage']);
Route::get('articolele-mele', [App\Http\Controllers\HomeController::class, 'myArticles']);
Route::get('postarile-mele', [App\Http\Controllers\HomeController::class, 'myPosts']);
Route::get('intrebarile-mele', [App\Http\Controllers\HomeController::class, 'myQuestions']);


Route::middleware(['isAdmin'])->group(function() {
//RUTE ADMIN ---------------
//QUESTIONS AND ANSWERS

Route::get('question-destroy/{id}', [LocationQuestionsController::class, 'destroy']);
Route::get('approve-question-{id}', [LocationQuestionsController::class, 'approve']);
Route::get('questions-answers', [LocationAnswersController::class, 'index']);
Route::get('approve-answer-{id}', [LocationAnswersController::class, 'approveComments']);
Route::get('disapprove-answer-{id}', [LocationAnswersController::class, 'disapproveComments']);
Route::get('destroy-answer/{id}', [LocationAnswersController::class, 'destroy']);
Route::get('answers', [LocationAnswersController::class, 'indexAdmin']);
//CATEGORIES
Route::get('view-categories', [CategoriesController::class,'index']);
Route::post('view-categories',[CategoriesController::class,'store']);
Route::get('category-delete/{id}', [CategoriesController::class,'destroy']);
//USERS
Route::get('view-users', [UsersController::class, 'index']);
Route::get('user-edit-{id}',[UsersController::class,'view']);
Route::post('user-edit',[UsersController::class,'update']);
Route::get('user-destroy/{id}', [UsersController::class,'destroy']);
//ARTICLE
Route::get('view-articles', [ArticlesController::class, 'adminIndex']);
Route::get('article-destroy/{id}', [ArticlesController::class, 'destroy']);
Route::get('new-article', [ArticlesController::class, 'newArticle']);
Route::post('newArticle', [ArticlesController::class, 'store']);

Route::get('edit-article-{id}', [ArticlesController::class, 'edit']);

Route::get('edit-location-{id}', [LocationsController::class, 'edit']);

Route::post('updateArticle', [ArticlesController::class, 'update']);

Route::post('updateLocation', [LocationsController::class, 'update']);
//COMMENTS
Route::get('view-comments', [CommentsController::class, 'index']);
Route::get('comment-delete/{id}', [CommentsController::class,'destroy']);
Route::get('comment-approve/{id}', [CommentsController::class,'update']);
//Opinions
Route::get('view-opinions', [OpinionsController::class, 'index']);
Route::get('opinion-delete/{id}', [OpinionsController::class,'destroy']);
Route::get('opinion-approve/{id}', [OpinionsController::class,'update']);
//CONTACT
Route::get('view-messages', [MessagesController::class,'index']);
Route::get('destroy-message/{id}', [MessagesController::class,'destroy']);
//LOCATIONS
Route::get('view-posts', [LocationsController::class, 'adminIndex']);
Route::get('approve-post-{id}', [LocationsController::class, 'approvePost']);
Route::get('disapprove-post-{id}', [LocationsController::class, 'disapprovePost']);
Route::get('destroy-post/{id}', [LocationsController::class,'destroy']);
Route::get('view-resetpasses', [ResetpassController::class,'index']);

Route::get('approve-article-{id}', [ArticlesController::class, 'approveArticle']);
Route::get('disapprove-article-{id}', [ArticlesController::class, 'disapproveArticle']);
});
Route::get('edit-articleuser-{id}', [ArticlesController::class, 'userEdit']);
Route::post('updateUserArticle', [ArticlesController::class, 'userUpdate']);
//VIZUALIZARE Utilizatori

Route::get('vizualizare-utilizator-{id}', [UsersController::class, 'userView']);

//LOCATII
Route::get('recenzii-locatii', [LocationsController::class, 'index']);
Route::get('adauga-postare', function () {
    return view('adauga-postare');
});
Route::post('adauga-postare', [LocationsController::class, 'store']);
Route::get('continut-postare-{id}', [LocationsController::class, 'show']);
Route::get('continut-postare-admin-{id}', [LocationsController::class, 'show']);
Route::post('cauta-postare', [LocationsController::class, 'searchLocationsResult']);
Route::post('usefulPost', [ReactionsController::class, 'usefulPost']);
Route::post('uselessPost', [ReactionsController::class, 'uselessPost']);
//OPINII
Route::post('addOpinion', [OpinionsController::class, 'store']);
//QUESTIONS
Route::post('addQuestion', [LocationQuestionsController::class, 'store']);
Route::get('intrebari', [LocationQuestionsController::class, 'index']);
Route::get('vizualizare-intrebare-{id}', [LocationQuestionsController::class, 'show']);

Route::get('solved-question-{id}', [LocationQuestionsController::class, 'solved']);
Route::post('cauta-intrebare', [LocationQuestionsController::class, 'searchQuestionsResult']);


//ANSWERS
Route::post('sendAnswer', [LocationAnswersController::class, 'store']);
Route::post('closeQuestion', [LocationAnswersController::class, 'update']);


//Articole
Route::get('articole', function () {
    return view('articole');
});
Route::get('articole', [ArticlesController::class, 'index']);
Route::get('articole-categorie-{id}', [ArticlesController::class, 'category']);
Route::get('continut-articol-{id}', [ArticlesController::class, 'show']);
Route::get('adauga-articol', [ArticlesController::class, 'newUserArticle']);
Route::post('newUserArticle', [ArticlesController::class, 'storeUser']);
Route::get('contact', function () {
    return view('contact');

});

//COMMENTS CONTROLLER
Route::post('addComment', [CommentsController::class, 'store']);

//CONTACT
Route::post('sendMessage', [MessagesController::class, 'store']);

//RESET PASS
Route::post('sendMessage2', [ResetpassController::class, 'store']);
Route::get('resetpass', function () {
    return view('resetpass');
});
Route::get('destroy-resetpass/{id}', [ResetpassController::class,'destroy']);

//user
Route::get('user-reset-{id}',[UsersController::class,'restetPassword']);
Route::post('user-reset',[UsersController::class,'updatePassword']);
//
Route::get('user-schimba-{id}',[UsersController::class,'restetPasswordSchimba']);
Route::post('user-schimba',[UsersController::class,'updatePasswordSchimba']);

//Despre
Route::get('despre-noi', function () {
    return view('despre-noi'); });

//POSTARE CALATORIE


//SearchResult

Route::post('cautare-articol',[ArticlesController::class,'searchArticlesResult']);
Route::get('cautare-articol-categorie-{name}', [ArticlesController::class, 'searchArticlesCategory']);
