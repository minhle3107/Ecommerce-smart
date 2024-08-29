<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Home page - Septenary Solution')]
class HomePage extends Component
{


    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();
        $banners = Banner::where('is_active', 1)->get();

        return view('livewire.home-page', compact('brands', 'categories', 'banners'));
    }
}
