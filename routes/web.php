<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [ContactController::class, 'showform'])->name('contact.create');
Route::post('/contacts/create', [ContactController::class, 'submitform'])->name('contact.store');

// Auth::routes();


// Route::get('/login', [AdminController::class, 'login'])->name('home');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::post('/admin', [AdminController::class, 'submissions'])->name('admin.show');
//     // Add more admin routes here
// });
// Display the admin login form (GET request)
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');

// Handle the login form submission (POST request)
Route::post('/admin/login', [AdminController::class, 'adminlogin'])->name('admin.login.submit');

// Route for listing submissions (DataTables endpoint)
Route::get('/admin/submissions/data', [AdminController::class, 'listSubmissions'])->name('admin.submissions.data');

// Route for the submissions view page
Route::get('/admin/submissions', [AdminController::class, 'submissions'])->name('admin.submissions');

// Route for viewing a single submission
Route::get('/admin/submissions/{id}', [AdminController::class, 'showcontact'])->name('admin.submission.view');
