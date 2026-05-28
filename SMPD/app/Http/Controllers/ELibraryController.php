<?php
namespace App\Http\Controllers;
use App\Models\DigitalBook;
use Illuminate\Routing\Controller as BaseControllers;
class ELibraryController extends BaseControllers
{
    public function index()
    {
        $digitalBooks = DigitalBook::with('category')->latest()->get();
        return view('e-library.index', compact('digitalBooks'));
    }
    public function read(DigitalBook $digitalBook)
    {
        $digitalBook->load('category');
        return view('elibrary.read', compact('digitalBook'));
        return view('e-library.read', compact('digitalBook'));
    }
}