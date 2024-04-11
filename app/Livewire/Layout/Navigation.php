<?php

namespace App\Livewire\Layout;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Navigation extends Component
{
    public $links = [];

    public $accountLinks = [];

    public function mount()
    {
        $this->links = [
            [
                'name' => 'Dashboard',
                'path' => route('dashboard'),
                'icon' => 'home',
            ],
            [
                'name' => 'Page',
                'path' => '#',
                'icon' => 'clock',
            ]
        ];

        $this->accountLinks = [
            [
                'name' => 'Settings',
                'path' => '#',
                'icon' => 'cog',
            ],
        ];
    }

    public function logout(Logout $logout)
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.layout.navigation');
    }
}
