<?php

namespace App\Console\Commands;

use App\Models\Currency;
use App\Models\Plan;
use App\Models\Invest;
use App\Models\Wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class Investment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investment:profit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is to add profits to the users investment daily';

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
        Log::info("I ran now");
        //Get active investments
        $investments = Invest::where('status', 'running')->where('end', '>', now())->get();

        //calculate the profit
        foreach ($investments as $invest ) {
            $plan = Plan::find($invest->plan_id);
            $profit = $plan->profit * $invest->amount;



            //add to the respective wallet
                $wallet = Wallet::where('user_id', $invest->user->id)
                  ->where('currency_id', Currency::where('name', $invest->currency)->first()->id)
                  ->get();

            foreach ($wallet as $w) {
                $w->balance += $profit;
                $w->save();
            }

            // $invest->status = 'confirmed';
            // $invest->save();



        }

        //if it has expired, set the investment to completed
        // $expired = Invest::where('status', 'running')->where('end', '<', now())->get();
        // foreach ($expired as $e ) {
        //     $amount = $e->amount;
        //     $wallet = $e->user->wallets()->where('currency_id', $e->currency)->first();
        //     $wallet->balance += $amount;
        //     $wallet->save();

        //     $e->status = 'confirmed';
        //     $e->save();
        // }


        Log::info("I ran finish");

        return 0;

    }
}
