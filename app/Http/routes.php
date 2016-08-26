<?php

Route::get('/', 'InvoiceController@index');

Route::resource('invoices', 'InvoiceController');

