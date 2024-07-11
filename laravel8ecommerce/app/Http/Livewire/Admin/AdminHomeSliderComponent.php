<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{
    use WithPagination;

    public function deleteSlider($id){
        $Homeslider = HomeSlider::find($id);
        $Homeslider->delete();
        session()->flash('message','Slider has been deleted successfully');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders' => $sliders])->layout('layouts.base');
    }
}
