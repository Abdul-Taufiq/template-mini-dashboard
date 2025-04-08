<?php

namespace App\Livewire\MasterUser;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserLivewire extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate('10');

        return view('livewire.master-user.user-livewire', compact('users'));
    }
}
