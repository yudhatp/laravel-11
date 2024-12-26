<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class Products extends Component
{
    #[Rule('required|min:3|unique:products')]
    public string $name = '';
    #[Rule('required|integer')]
    public string $price = '';
    #[Rule('required|min:50')]
    public string $description = '';
    public string $messageText = '';

    public function updated($key, $value): void
    {
        $this->validateOnly($key);
    }

    public function save(): void
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        $this->messageText = 'Product ' . $this->name . ' is saved';
        $this->name = '';
        $this->description = '';
        $this->price = '';
    }

    public function render(): View
    {
        return view('livewire.products')->layout('layouts.app');
    }

    /*public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::latest()->paginate(5)
        ])->layout('layouts.app');
    }*/
}
