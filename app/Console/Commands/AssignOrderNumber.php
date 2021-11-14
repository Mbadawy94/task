<?php

namespace App\Console\Commands;

use App\Events\SendSchoolNumber;
use App\Models\School;
use Illuminate\Console\Command;

class AssignOrderNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'school:assignNumber {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Know the order number of each school';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schoolName = $this->argument('name');
        $school = School::where('name', $schoolName)->first();
        event(new SendSchoolNumber($school));
    }
}
