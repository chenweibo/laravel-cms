<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rest:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '重置结构，及生成数据';

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
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('是否确定重置数据库，强制重置有风险')) {
            $this->call('migrate:reset');
            $this->call('migrate');
            $this->call('db:seed');
        }
    }
}
