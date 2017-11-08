<?php

namespace App\Listeners;

use App\Events\TaskAdded;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveTaskToLogListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TaskAdded $event
     * @return void
     */
    public function handle(TaskAdded $event)
    {
        Log::alert('添加了一个任务');
    }
}
