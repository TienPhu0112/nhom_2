<?php

namespace App\Console\Commands;

use App\Models\Event;
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
        $lsEvent = Event::whereIn('status',[1,2])->get();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $now = time();
        $count1 = 0;
        $count2 = 0;
        foreach ($lsReservation as $reservation){
            $booking_date_time = $reservation->booking_date." ".$reservation->booking_time;
            $booking_date_time = strtotime($booking_date_time);
            if (($booking_date_time - $now < 0)){
                $count1++;
                $reservation->status = 1;
                $reservation->save();
            }
        }
        foreach ($lsEvent as $event){
            $event_time = $event->start_time;
            $event_time = strtotime($event_time);
            if (($event_time - $now < 0)){
                $count2++;
                $event->status = 3;
                $event->save();
            }
        }
        echo "Change status of $count1 reservations and $count2 events";
        return 0;
    }
}
