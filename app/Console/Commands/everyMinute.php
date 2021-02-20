<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean db by Ram table description';

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
        //return 0;
        // DB::table('products')->delete();
        // echo "operation ahs been done";
        

        // Product::create([
        //     'name'=> 'hoshika',
        //     'description'=> 'hellok kababa'
        // ]);

            $student = new Product;
            $student->name = 'holu sns';
            $student->price = '79898';
            $student->description = 'gokika ji';
            $student->save();
            echo "operation ahs been done";
    }
}
