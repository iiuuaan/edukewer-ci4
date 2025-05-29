<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MigrateAndSeed extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Custom';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'migrate:seed';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Runs all migrations and then seeds the database.';


    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'migrate:seed';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [
        '--refresh' => 'Uses migrate:refresh instead of migrate.',
    ];


    /**
     * Actually execute a command.
   *
     * @param array $params
     */
  public function run(array $params)
  {
      $useRefresh = CLI::getOption('refresh');

      if ($useRefresh) {
          CLI::write('Refreshing migrations...', 'yellow');
          command('migrate:refresh');
      } else {
          CLI::write('Running migrations...', 'yellow');
          command('migrate');
      }

      CLI::write('Seeding database...', 'yellow');
      command('db:seed DatabaseSeeder');

      CLI::write('Done.', 'green');
  }

}
