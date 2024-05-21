<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Illuminate\Console\Command;

class newtodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newtodos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New Todos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $name = $this->ask('Value of name?');
        $n = $this->ask('How many fake todos?');
        Todo::factory()->count($n)->create();
        // $m = $this->ask('Value of m?');        

        // $userId = $this->argument('n');
        // $message = $this->argument('m');
        // $this->info("getting todos for $name with id: $n and message: $m");
    }
}
