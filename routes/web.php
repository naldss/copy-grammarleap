<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\ClassicStudyController;
use App\Http\Controllers\ClassicStudyQuizController;
use App\Http\Controllers\SentenceBuilderController;
use App\Http\Controllers\UserQuizScoreController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PosHunterController;
use App\Http\Controllers\TenseQuestController;
use App\Http\Controllers\SentenceSorterController;
use App\Models\User; // If you need the User model for the leaderboard
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersOnRoomController;
use App\Http\Controllers\QuizOnRoomController;
use App\Http\Controllers\TakeQuizController;
use App\Http\Controllers\UserQuizRoomScoreController;





// routes/web.php
Route::post('/user-quiz-room-scores', [UserQuizRoomScoreController::class, 'store'])->name('user-quiz-room-scores.store');


Route::get('/quiz/{room_id}', [TakeQuizController::class, 'index'])->name('takequiz');

Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::post('/add-user-to-room', [RoomController::class, 'addUserToRoom']);



Route::get('/create-room-page', [RoomController::class, 'createRoomPage'])->name('rooms.create.page');
Route::post('/rooms-create', [RoomController::class, 'store'])->name('rooms.store');

Route::delete('/rooms/{room_id}/users/{email}', [UsersOnRoomController::class, 'destroy'])->name('users-on-rooms.destroy');
Route::resource('users-on-rooms', UsersOnRoomController::class);
Route::resource('quiz-on-rooms', QuizOnRoomController::class);


// Route for POS Hunter leaderboard
Route::get('/posh-leaderboard', function () {
    $usersByrankPOSH = User::orderBy('PosH_total', 'desc')->take(10)->get(); // Adjust according to your data structure
    return view('dashboard.leaderboards.posh', compact('usersByrankPOSH'));
});

// Route for Sentence Builder leaderboard
Route::get('/sentence-builder-leaderboard', function () {
    $usersByrankSB = User::orderBy('SB_total', 'desc')->take(10)->get(); // Adjust according to your data structure
    return view('dashboard.leaderboards.sentence_builder', compact('usersByrankSB'));
});
Route::get('/tense-challenge-leaderboard', function () {
    $usersByrankTC = User::orderBy('TC_total', 'desc')->take(10)->get(); // Adjust according to your data structure
    return view('dashboard.leaderboards.tc', compact('usersByrankTC'));
});
Route::get('/sentence-sorter-leaderboard', function () {
    $usersByrankSS = User::orderBy('SS_total', 'desc')->take(10)->get(); // Adjust according to your data structure
    return view('dashboard.leaderboards.ss', compact('usersByrankSS'));
});

// Add other game routes as necessary

Route::post('/sentence-sorter-points', [SentenceSorterController::class, 'addPoints'])->name('sentence-sorter-points');
Route::get('/sentence-sorter', [SentenceSorterController::class, 'displayGame'])->name('sentence-sorter-display');

Route::post('/tense-challenge-points', [TenseQuestController::class, 'addPoints'])->name('tense-quest-points');
Route::get('/tense-challenge', [TenseQuestController::class, 'displayGame'])->name('tense-quest-display');


Route::post('/pos-hunter-points', [PosHunterController::class, 'addPoints'])->name('pos-hunter-points');
Route::get('/pos-hunter', [PosHunterController::class, 'displayGame'])->name('pos-hunter-display');

Route::middleware(['auth'])->group(function () {
    // Route::get('/missions/daily', [MissionController::class, 'showDailyMissions'])->name('missions.daily');
    Route::post('/missions/complete/{MissionId}', [MissionController::class, 'completeMission'])->name('missions.complete');
    Route::post('/missions/complete/claim/{MissionId}', [MissionController::class, 'addPointsFromClaimPoints'])->name('claimpoints');
});

Route::resource('user-quiz-scores', UserQuizScoreController::class);

Route::resource('sentence_builder', SentenceBuilderController::class);
Route::resource('pos_hunter', gamesController::class);

Route::get('/admin/sentence_builder/add/csv', [SentenceBuilderController::class, 'csvUploadSBContent'])->name('SBcsv');
Route::get('/admin/pos_hunter/add/csv', [gamesController::class, 'csvUploadPOSHContent'])->name('POSHcsv');


Route::get('/sentence-builder', [SentenceBuilderController::class, 'showGame'])->name('sentencebuilder');
Route::post('/sentence-builder/add-points', [SentenceBuilderController::class, 'addPointsSentenceBuilder'])->name('addPointsSentenceBuilder');
Route::post('/sentence-builder/minus-points', [SentenceBuilderController::class, 'minusPointsSentenceBuilder'])->name('minusPointsSentenceBuilder');

Route::get('/items/{id}/details', [ClassicStudyController::class, 'details'])->name('cs-item-content');
Route::get('classicStudy/quiz/{id}', [ClassicStudyQuizController::class, 'csQuiz'])->name('quiz');
Route::get('/quiz/csv', [ClassicStudyQuizController::class, 'csvUploadQuizContent'])->name('csvquiz');


Route::resource('classic_study_quiz', ClassicStudyQuizController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/classic-study-admin-access', [ClassicStudyController::class, 'classicStudyEdit'])->name('classicstudyedit');
    Route::get('/admin/classic-study', [ClassicStudyController::class, 'classicStudy'])->name('admin.classic-study');
    Route::get('/admin/classic-study/add/csv', [ClassicStudyController::class, 'csvUploadCSContent'])->name('admin.classic-study.addcsv');
    Route::get('/admin/classic-study/add', [ClassicStudyController::class, 'showAddForm'])->name('admin.classic-study.add');
    Route::post('/admin/classic-study/store', [ClassicStudyController::class, 'store'])->name('admin.classic-study.store');
    Route::get('/admin/classic-study/{id}/edit', [ClassicStudyController::class, 'edit'])->name('admin.classic-study.edit');
    Route::put('/admin/classic-study/{id}/update', [ClassicStudyController::class, 'update'])->name('admin.classic-study.update');
    Route::delete('/classic-study-delete/{id}', [ClassicStudyController::class, 'deleteDataClassicStudy'])->name('classicStudyDelete');
});
Route::get('/classic-study', [ClassicStudyController::class, 'classicStudyPage'])->name('classicstudy');

Route::get('/pos-hunter-result', function () {
    return view('games.resultModal');
});
Route::post('/minus-points-pos', [gamesController::class, 'minusPointsPosHunter'])->name('minus.points-pos');
Route::post('/add-points-pos', [gamesController::class, 'addPointsPosHunter'])->name('add.points-pos');
Route::get('/PosHunter', [gamesController::class, 'PosHunterGame'])->name('poshunter');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/badges', [DashboardController::class, 'badgesShow'])->name('showbadges');


Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/register-modal', function () {
    return view('auth.register');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/viewer-quiz-room', function () {
    return view('dashboard.quiz-room.quiz-rooms.viewer-room');
})->name('home');