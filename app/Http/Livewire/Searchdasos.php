<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\insert_dasos;
use Livewire\WithPagination;

class Searchdasos extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $dasos = insert_dasos::latest()->paginate(5);

        if ($this->search !== null) {
            $dasos = insert_dasos::where('name', 'like', '%' . $this->search . '%')
                ->latest()
                ->paginate(5);
        }
        return view('main-regRajal',  [
            'dasoss' => $dasos,
        ]);
    }
}
