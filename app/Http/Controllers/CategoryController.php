<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryLang;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('categories.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'languageId' => 'required|exists:languages,id'
        ]);

        $category = Category::create(['user_id' => auth()->id()]);
        CategoryLang::create([
            'category_id' => $category->id,
            'language_id' => $request->languageId,
            'title' => $request->title
        ]);

        return to_route('index');
    }

    public function show(Category $category)
    {
        return view('categories.show', [
            'languages' => Language::all(),
            'categoryLangs' => CategoryLang::where('category_id', $category->id)
                ->get()
                ->keyBy('language_id')
        ]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category,
            'languages' => Language::all(),
            'categoryLangs' => CategoryLang::where('category_id', $category->id)
                ->get()
                ->keyBy('language_id')
        ]);
    }

    public function update(Request $request, Category $category)
    {
        foreach ($request->langs ?? [] as $language => $title) {
            if ($title && $category->id) {
                CategoryLang::updateOrCreate(
                    [
                        'category_id' => $category->id,
                        'language_id' => $language
                    ],
                    [
                        'category_id' => $category->id,
                        'language_id' => $language,
                        'title' => $title
                    ],
                );
            }
        }

        return to_route('index');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return to_route('index');
    }
}
