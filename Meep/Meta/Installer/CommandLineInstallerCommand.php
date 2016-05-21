<?php namespace Meep\Meta\Installer;

use Illuminate\Console\Command;
use Meep\Users\UserRepository;

class CommandLineInstallerCommand extends Command
{
    protected $signature = 'meep:install {--S|safe: automatically pick safe options during installation}';
    protected $description = 'Set up your Meep installation with a fresh user and go through essential options';

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!$this->userRepository->hasUsers()) {
            return $this->handleInitialInstall();
        } else {
            return $this->handlePostInstalledExecutions();
        }
    }

    protected function handleInitialInstall()
    {
        $this->info("<fg=red>Meep</> welcomes you!");
    }

    /**
     * This is run when the app is already installed, but the user runs the command again. Presumably they would like to
     * reset a password or tweak settings.
     */
    protected function handlePostInstalledExecutions()
    {
        $this->info("Welcome back to <fg=red>Meep</>!");
        $this->info("Your installation is set up and ready to go.");
        $this->info("Security settings are available in <fg=cyan;options=bold>config/meep.php</>.");
        $this->info("If you need to reset a user's password, use <fg=cyan;options=bold>php artisan meep:pwd</>.");
    }
}