<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class ImageUpload extends Component
{
    
    use WithFileUploads;

    public $image = [];

    public function save(){
        $this->validate([
            "image.*" => 'image|max:1024', //1mb Max
        ]);

        foreach($this->image as $image){
            $image->store('public');
        }
    }
    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::files('public'))
            ->filter(function ($file) {
                return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']);
            })
            ->map(function ($file) {
                return Storage::url($file); 
            })
        ]);
    }
}
