<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\vdasos;


class DasosSearch extends Component
{
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        // $dasos = insert_dasos::latest()->paginate(5);

        // if ($this->search !== null) {
        //     $dasos = insert_dasos::where('nama', 'like', '%' . $this->search . '%')
        //         ->latest()
        //         ->paginate(5);
        // }

        return view('livewire.dasos-search', [
            'items' => $this->search == null ? vdasos::latest()->get() :
                vdasos::latest()->where('nama', 'like', '%' . $this->search . '%')
        ]);
    }
}
