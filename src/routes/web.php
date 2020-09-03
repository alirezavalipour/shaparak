<?php

use Shaparak\Http\Controller\Client\MerchantsController;
use Shaparak\Http\Controller\Client\ResponsesController;
use Shaparak\Http\Controller\Client\ShopsController;
use Shaparak\Http\Controller\Client\TerminalsController;
use Shaparak\Http\Controller\Client\AcceptorsController;
use Shaparak\Http\Controller\Client\ContractsController;
use Shaparak\Http\Controller\Service\ChangeInformationController;
use Shaparak\Http\Controller\Service\ChangeShebaController;
use Shaparak\Http\Controller\Service\ChangeShopController;
use Shaparak\Http\Controller\Service\DeativateTerminalController;
use Shaparak\Http\Controller\Service\ReactivateTerminalController;
use Shaparak\Http\Controller\Service\ShopProviderRegisterController;
use Shaparak\Http\Controller\Service\TerminalRegisterController;
use Shaparak\Service\Requests\WriteRequest\ChangeInformation;

Route::group(['middleware' => ['auth']], function () {


    Route::group(['prefix' => 'merchant'], function () {

        Route::get('/', MerchantsController::class . '@index')
            ->name('shaparak.merchant.index');

        Route::get('/create', MerchantsController::class . '@create')
            ->name('shaparak.merchant.create');

        Route::get('/{id}', MerchantsController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.merchant.find');

        Route::post('/', MerchantsController::class . '@store')
            ->name('shaparak.merchant.store');

        Route::post('/{id}', MerchantsController::class . '@update')
            ->name('shaparak.merchant.update')
            ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'terminal'], function () {

        Route::get('/', TerminalsController::class . '@index')
            ->name('shaparak.terminal.index');

        Route::get('/create', TerminalsController::class . '@create')
            ->name('shaparak.terminal.create');

        Route::get('/{id}', TerminalsController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.terminal.find');

        Route::post('/', TerminalsController::class . '@store')
            ->name('shaparak.terminal.store');

        Route::post('/{id}', TerminalsController::class . '@update')
            ->name('shaparak.terminal.update')
            ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'shop'], function () {

        Route::get('/', ShopsController::class . '@index')
            ->name('shaparak.shop.index');

        Route::get('/create', ShopsController::class . '@create')
            ->name('shaparak.shop.create');

        Route::get('/{id}', ShopsController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.shop.find');

        Route::post('/', ShopsController::class . '@store')
            ->name('shaparak.shop.store');

        Route::post('/{id}', ShopsController::class . '@update')
            ->name('shaparak.shop.update')
            ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'response'], function () {

        Route::get('/', ResponsesController::class . '@index')
            ->name('shaparak.response.index');

        Route::get('/create', ResponsesController::class . '@create')
            ->name('shaparak.response.create');

        Route::get('/{id}', ResponsesController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.response.find');

        Route::post('/', ResponsesController::class . '@store')
            ->name('shaparak.response.store');

        Route::post('/{id}', ResponsesController::class . '@update')
            ->name('shaparak.response.update')
            ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'acceptor'], function () {

        Route::get('/', AcceptorsController::class . '@index')
            ->name('shaparak.acceptor.index');

        Route::get('/create', AcceptorsController::class . '@create')
            ->name('shaparak.acceptor.create');

        Route::get('/{id}', AcceptorsController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.acceptor.find');

        Route::post('/', AcceptorsController::class . '@store')
            ->name('shaparak.acceptor.store');

        Route::post('/{id}', AcceptorsController::class . '@update')
            ->name('shaparak.acceptor.update')
            ->where('id', '[0-9]+');
    });


    Route::group(['prefix' => 'shop-provider-register'], function () {

        Route::get('/', ShopProviderRegisterController::class . '@index')
            ->name('shaparak.shop_provider_register.index');

        Route::get('/{id}', ShopProviderRegisterController::class . '@find')
            ->where('id', '[0-9]+')
            ->name('shaparak.shop_provider_register.find');

        Route::post('/{id}', ShopProviderRegisterController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.shop_provider_register.send');

    });

    Route::group(['prefix' => 'terminal-register'], function () {

        Route::get('/', TerminalRegisterController::class . '@index')
            ->name('shaparak.terminal_register.index');

        Route::get('/{id}', TerminalRegisterController::class . '@find')
            ->name('shaparak.terminal_register-register.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', TerminalRegisterController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.terminal-terminal_register.send');

        Route::get('/read/{id}', TerminalRegisterController::class . '@read');

    });

    Route::group(['prefix' => 'change-sheba'], function () {

        Route::get('/', ChangeShebaController::class . '@index')
            ->name('shaparak.change_sheba.index');

        Route::get('/{id}', ChangeShebaController::class . '@find')
            ->name('shaparak.change_sheba.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', ChangeShebaController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.change_sheba.send');

        Route::get('/read/{id}', ChangeShebaController::class . '@read')
            ->name('shaparak.change_sheba.read');
    });

    Route::group(['prefix' => 'deactivate-terminal'], function () {

        Route::get('/', DeativateTerminalController::class . '@index')
            ->name('shaparak.deactivate_terminal.index');

        Route::get('/{id}', DeativateTerminalController::class . '@find')
            ->name('shaparak.deactivate_terminal.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', DeativateTerminalController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.deactivate_terminal.send');

        Route::get('/read/{id}', DeativateTerminalController::class . '@read')
            ->name('shaparak.deactivate_terminal.read');
    });

    Route::group(['prefix' => 'reactivate-terminal'], function () {

        Route::get('/', ReactivateTerminalController::class . '@index')
            ->name('shaparak.deactivate_terminal.index');

        Route::get('/{id}', ReactivateTerminalController::class . '@find')
            ->name('shaparak.deactivate_terminal.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', ReactivateTerminalController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.deactivate_terminal.send');

        Route::get('/read/{id}', ReactivateTerminalController::class . '@read')
            ->name('shaparak.deactivate_terminal.read');
    });

    Route::group(['prefix' => 'change-shop'], function () {

        Route::get('/', ChangeShopController::class . '@index')
            ->name('shaparak.deactivate_terminal.index');

        Route::get('/{id}', ChangeShopController::class . '@find')
            ->name('shaparak.deactivate_terminal.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', ChangeShopController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.deactivate_terminal.send');

        Route::get('/read/{id}', ChangeShopController::class . '@read')
            ->name('shaparak.deactivate_terminal.read');
    });

    Route::group(['prefix' => 'change-information'], function () {

        Route::get('/', ChangeInformationController::class . '@index')
            ->name('shaparak.deactivate_terminal.index');

        Route::get('/{id}', ChangeInformationController::class . '@find')
            ->name('shaparak.deactivate_terminal.find')
            ->where('id', '[0-9]+');

        Route::post('/{id}', ChangeInformationController::class . '@send')
            ->where('id', '[0-9]+')
            ->name('shaparak.deactivate_terminal.send');

        Route::get('/read/{id}', ChangeInformationController::class . '@read')
            ->name('shaparak.deactivate_terminal.read');
    });

});

Route::get('/query/{id}', ShopProviderRegisterController::class . '@send');
Route::get('/read-query/{id}', TerminalRegisterController::class . '@read');





