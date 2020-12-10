<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use App\Services\UserService;
use App\Services\NotifyService;

class CheckMembership extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:membership';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check out expiration of users membership';

    protected $userService;
    protected $notifyService;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UserService $userService, NotifyService $notifyService)
    {
        $this->userService = $userService;
        $this->notifyService = $notifyService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = $this->userService->getActiveUsers();
        foreach ($users as $user)
        {
            $mmap = DB::table('si_users_memships')->where(['user_id' => $user->id])->first();
            $timenow = date_create();
            $timeupgrade = date_create($mmap->updated_at);
            date_add($timeupgrade, date_interval_create_from_date_string("1 month"));
            $leftdays = intval(date_diff($timenow, $timeupgrade)->format("%R%a"));

            if ($leftdays >= 1 && $leftdays <=3) 
            {
                // Send Notification & Email
                $notify = array(
                    'title' => 'Upgrade Membership',
                    'body' => 'Your membership valid time left '.$leftdays.' days',
                    'link' => 'landing-page.pricing-planning',
                    'icon' => 'none',
                );
                $this->notifyService->sendNotify($notify, $user->id);
            }
            else if ($leftdays <= 0)
            {
                // Downgrade memberhship
                
            }
        }
        $this->info('Successfully sent daily quote to everyone.');
    }
}
