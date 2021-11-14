<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class ChangeStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change status of reservation when the current time have pass';

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
        $lsReservation = Order::where('status',0)->get();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $now = time();
        $count = 0;
        foreach ($lsReservation as $reservation){
            $booking_date_time = $reservation->booking_date." ".$reservation->booking_time;
            $booking_date_time = strtotime($booking_date_time);
            if (($booking_date_time - $now < 0)){
                $count++;
                $reservation->status = 1;
                $reservation->save();
            }
        }
        echo "Change status of $count reservations";
        return 0;
    }
}
