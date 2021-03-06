<?php

namespace App\Controllers;

use App\Helpers\DatabaseBuilder as Builder;

class DatabaseController extends Controller
{
    public function buildAll()
    {
        Builder::buildUsers();

        Builder::buildQuotes();

        Builder::buildProducts();

        Builder::populateProducts();

        Builder::buildQuoteProducts();

        return "database built!";
    }

    public function destroyAll()
    {
        Builder::destroyQuoteProducts();

        Builder::destroyProducts();

        Builder::destroyQuotes();

        Builder::destroyUsers();

        return "database destroyed!";
    }
}