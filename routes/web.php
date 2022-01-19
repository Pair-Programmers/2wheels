<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BikeModelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\BikeAdminController;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index', [LandingController::class, 'index'])->name('index');
Route::post('/bike_search_result', [LandingController::class, 'searchBike'])->name('bike_search_result');
Route::any('/bike_search_result_index', [LandingController::class, 'searchBikeIndex'])->name('bike_search_result_index');
Route::any('/bike_search_result_sidebar_index', [LandingController::class, 'searchBikeSidebarIndex'])->name('bike_search_result_sidebar_index');
Route::any('/bike_search_result_bikelisting', [LandingController::class, 'searchBikeBikelisting'])->name('bike_search_result_bikelisting');
Route::any('/bike_search_result_sidebar_bikelisting', [LandingController::class, 'searchBikeSidebarBikelisting'])->name('bike_search_result_sidebar_bikelisting');
Route::get('/', [LandingController::class, 'index']);




Route::get('aboutUs', function () {
    return view('pages/aboutUs');
});

Route::get('my_page', function () {
    return view('pages/my_page');
});



Route::get('postandadd', function () {
    return view('pages/postandadd');
});


Route::get('cart', function () {
    return view('pages/cart');
});

Route::get('pricelist', function () {
    return view('pages/pricelist');
});

Route::get('contact', function () {
    return view('pages/contact');
});




Route::get('productDetails', function () {
    return view('pages/productDetails');
});

Route::get('order-summary', function () {
    if(Session::has('cart')){
        $cart=Session::get('cart');
        // dd($cart);
        return view('pages/order-summary',compact('cart'));
    }
    return view('pages/order-summary');
})->name('order-summary');

Route::get('shipping-info', function () {
    return view('pages/shipping-info');
});
Route::get('payment-method', function () {
    return view('pages/payment-method');
});
Route::get('sellyourbike', function () {
    return view('pages/sellyourbike');
});

Route::get('advancefilter', function () {
    return view('pages/advancefilter');
});

Route::get('featuredusedbikes', function () {
    return view('pages/featuredusedbikes');
});
Route::get('bikecomparison', function () {
    return view('pages/bikecomparison');
});
Route::get('bikereviews', function () {
    return view('pages/bikereviews');
});
Route::get('newbikeprices', function () {
    return view('pages/newbikeprices');
})->name('newbikeprices');
Route::get('findautoparts', function () {
    return view('pages/findautoparts');
});
Route::get('buynowautoparts', function () {
    return view('pages/buynowautoparts');
});
Route::get('sellbikeparts', function () {
    return view('pages/sellbikeparts');
});
Route::get('coolrides', function () {
    return view('pages/coolrides');
})->name('coolrides');
Route::get('bikeinsurance', function () {
    return view('pages/bikeinsurance');
});

Route::get('currentfuelprice', function () {
    return view('pages/currentfuelprice');
});

Route::get('abc', function () {
    return view('pages/bike_new_show');
});

//user
Route::get('/user_list', [UserController::class, 'index'])->name('user.index');
Route::get('/user_create', [UserController::class, 'create'])->name('user.create');
Route::post('/user_store', [UserController::class, 'store'])->name('user.store');
Route::get('/user_show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user_edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user_update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user_destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//contact us
Route::get('/contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::get('/contact_us_create', [ContactUsController::class, 'create'])->name('contact_us.create');
Route::post('/contact_us_store', [ContactUsController::class, 'store'])->name('contact_us.store');

//newsletter
Route::post('/newsletter_store', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::post('/newsletter_index', [NewsletterController::class, 'index'])->name('newsletter.index');

//bike
Route::get('/bike_create', [BikeController::class, 'create'])->name('bike.create');
Route::get('/bike_show/{id}', [BikeController::class, 'show'])->name('bike.show');
Route::get('/bike_destroy/{id}', [BikeController::class, 'destroy'])->name('bike.destroy');
Route::get('/bike_edit/{id}', [BikeController::class, 'edit'])->name('bike.edit');
Route::post('/bike_store', [BikeController::class, 'store'])->name('bike.store');
Route::post('/bike_update/{id}', [BikeController::class, 'update'])->name('bike.update');
Route::get('/used_bikes', [BikeController::class, 'usedBikes'])->name('used_bike');
Route::get('/new_bikes', [BikeController::class, 'newBikes'])->name('new_bike');
Route::get('/bike_list', [BikeController::class, 'bikeListing'])->name('bike.listing');
Route::get('/my_bike_adds', [BikeController::class, 'myBikeAdds'])->name('my_bike_adds');
Route::get('/my_fav_bikes', [BikeController::class, 'myFavBikes'])->name('my_fav_bikes');
Route::get('/bikecomperison', [BikeController::class, 'bikeComperison'])->name('bikecomperison');
Route::get('/view_bike_Comperison/{no}', [BikeController::class, 'viewBikeComperison'])->name('view_bike_Comperison');
Route::post('/do_bikecomperison', [BikeController::class, 'doBikeComperison'])->name('do_bikecomperison');
Route::post('/search_by_word', [BikeController::class, 'search_by_word'])->name('search_by_word');
Route::post('/search_by_price_range', [BikeController::class, 'search_by_price_range'])->name('search_by_price_range');
Route::get('/bikeimport', [BikeController::class, 'bikeimport'])->name('bikeimport');
Route::get('/bikefinance', [BikeController::class, 'bikefinance'])->name('bikefinance');
Route::get('/mtmispak', [BikeController::class, 'mtmispak'])->name('mtmispak');


Route::get('/used_bike_by_make/{make}', [BikeController::class, 'usedBikesByMake'])->name('used_bike_by_make');
Route::get('/used_bike_body_type/{body_type}', [BikeController::class, 'usedBikesByBodyType'])->name('used_bike_body_type');
Route::get('/used_bike_by_city/{city}', [BikeController::class, 'usedBikesByCity'])->name('used_bike_by_city');
Route::get('/used_bike_by_price/{price}', [BikeController::class, 'usedBikesByPrice'])->name('used_bike_by_price');
Route::get('/new_bike_by_make/{make}', [BikeController::class, 'newBikesByMake'])->name('new_bike_by_make');
Route::get('/bike_by_make/{make}', [BikeController::class, 'bikesByMake'])->name('bike_by_make');
Route::get('/new_bike_by_model/{model}', [BikeController::class, 'newBikesByModel'])->name('new_bike_by_model');
Route::get('/used_bike_by_model/{model}', [BikeController::class, 'usedBikesByModel'])->name('used_bike_by_model');
Route::get('/bike_by_model/{model}', [BikeController::class, 'bikesByModel'])->name('bike_by_model');

//admin
Route::get('/bike_admin', [BikeAdminController::class, 'index'])->name('admin.bike.index');
Route::get('/bike_create_admin', [BikeAdminController::class, 'create'])->name('admin.bike.create');
Route::post('/bike_store_admin', [BikeAdminController::class, 'store'])->name('admin.bike.store');
Route::get('/bike_show_admin/{id}', [BikeAdminController::class, 'show'])->name('admin.bike.show');
Route::get('/get_bikes_admin/{id}', [BikeAdminController::class, 'getbike'])->name('admin.get_bike');
Route::get('/bike_edit_admin/{id}', [BikeAdminController::class, 'edit'])->name('admin.bike.edit');
Route::post('/bike_update_admin/{id}', [BikeAdminController::class, 'update'])->name('admin.bike.update');
Route::get('/bike_destroy_admin/{id}', [BikeAdminController::class, 'destroy'])->name('admin.bike.destroy');


//product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product_create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product_store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product_show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product_edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product_update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product_destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/my_product_adds', [ProductController::class, 'myProductAdds'])->name('my_product_adds');
Route::get('/my_fav_products', [ProductController::class, 'myFavProducts'])->name('my_fav_products');
Route::post('/search_product_by_word', [ProductController::class, 'search_product_by_word'])->name('search_product_by_word');
Route::post('/search_product_by_price_range', [ProductController::class, 'search_by_price_range'])->name('search_product_by_price_range');
Route::get('/search_product_by_brand/{brand}', [ProductController::class, 'search_product_by_brand'])->name('search_product_by_brand');
Route::get('/search_product_by_category/{id}', [ProductController::class, 'search_product_by_category'])->name('search_product_by_category');




//product_category
Route::get('/product_category', [ProductCategoryController::class, 'index'])->name('product_category.index');
Route::get('/product_category_create', [ProductCategoryController::class, 'create'])->name('product_category.create');
Route::post('/product_category_store', [ProductCategoryController::class, 'store'])->name('product_category.store');
Route::get('/product_category_edit/{id}', [ProductCategoryController::class, 'edit'])->name('product_category.edit');
Route::post('/product_category_update/{id}', [ProductCategoryController::class, 'update'])->name('product_category.update');
Route::get('/product_category_destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('product_category.destroy');

//oders
Route::post('/add_order', [OrderController::class, 'store'])->name('add_order');
Route::get('/my_orders', [OrderController::class, 'myOrders'])->name('my_orders');
Route::get('/orders_list', [OrderController::class, 'ordersList'])->name('orders_list');

//add to cart
Route::post('/addToCart', [ProductController::class, 'addToCart'])->name('cart.add_to_cart');
Route::get('/remove_product_from_cart/{id}', [ProductController::class, 'removeProductFromCart'])->name('cart.remove_product_from_cart');
Route::post('/update_cart', [ProductController::class, 'updateCart'])->name('cart.update_cart');

//add to wishlist
Route::post('/addToWishlist', [WishlistController::class, 'store'])->name('add_to_wishlist');
Route::get('/addToWishlist2/{id}', [WishlistController::class, 'addToWishlist'])->name('add_to_wishlist2');
Route::get('/removeToWishlist/{id}', [WishlistController::class, 'destroy'])->name('remove_to_wishlist');

//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog_create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog_store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog_show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog_edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog_update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog_destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

//company
Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company_create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company_store', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company_show/{id}', [CompanyController::class, 'show'])->name('company.show');
Route::get('/company_edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::post('/company_update/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::get('/company_destroy/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');

//bike_model
Route::get('/model', [BikeModelController::class, 'index'])->name('model.index');
Route::get('/model_create', [BikeModelController::class, 'create'])->name('model.create');
Route::post('/model_store', [BikeModelController::class, 'store'])->name('model.store');
Route::get('/model_show/{id}', [BikeModelController::class, 'show'])->name('model.show');
Route::get('/get_models/{id}', [BikeModelController::class, 'getModel'])->name('get_model');
Route::get('/model_edit/{id}', [BikeModelController::class, 'edit'])->name('model.edit');
Route::post('/model_update/{id}', [BikeModelController::class, 'update'])->name('model.update');
Route::get('/model_destroy/{id}', [BikeModelController::class, 'destroy'])->name('model.destroy');

//review
Route::any('/review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review_create', [ReviewController::class, 'create'])->name('review.create');
Route::post('/review_store', [ReviewController::class, 'store'])->name('review.store');
Route::any('/review_order', [ReviewController::class, 'searchByReviewOrder'])->name('review_order');
Route::get('/review_edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
Route::post('/review_update/{id}', [ReviewController::class, 'update'])->name('review.update');
Route::get('/review_destroy/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');


Route::get('/admin', [DashboardController::class, 'index'])->name('admin_dashboard_page');

//login//register//forget
Route::get('/login_page', [LoginAdminController::class, 'create'])->name('admin_login_page');
Route::post('/login_admin', [LoginAdminController::class, 'doLogin'])->name('admin_login');
Route::get('/logout_admin', [LoginAdminController::class, 'doLogout'])->name('admin_logout');
