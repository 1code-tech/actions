<?php

namespace App\Console\Commands\Users;

use Illuminate\Console\Command;
use App\Actions\Users\CreateUserData;
use App\Actions\Users\CreateUserAction;

class CreateUserCommand extends Command
{
    protected $signature = 'users:create';

    public function handle()
    {
        $data = new CreateUserData(
            name: $this->ask('Name'),
            email: $this->ask('Email'),
            password: $this->secret('Password'),
        );

        $user = (new CreateUserAction)->run($data);

        $this->info("User ID {$user->id}");

        return Command::SUCCESS;
    }
}
