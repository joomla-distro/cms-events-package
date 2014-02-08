<?php
namespace JDistro\Composer\Package;

use JDistro\Composer\BaseInstaller;

/**
 * CMS Events installer class
 *
 * @author  Julio Pontes <https://github.com/juliopontes>
 * @package JDistro\Composer
 */
class CmsEvents extends BaseInstaller
{
    protected $support = 'cms-events';

    protected $location = 'events/{vendor}/{package}';

    public function onBeforeInstall(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        $this->io->write('    <fg=cyan>onBeforeInstall</fg=cyan> Event'.PHP_EOL);
    }

    public function onAfterInstall(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        $this->io->write('    <fg=cyan>onAfterInstall</fg=cyan> Event'.PHP_EOL);
    }

    public function onBeforeUpdate(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        $this->io->write('    <fg=cyan>onBeforeUpdate</fg=cyan> Event'.PHP_EOL);
    }

    public function onAfterUpdate(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        $this->io->write('    <fg=cyan>onAfterUpdate</fg=cyan> Event'.PHP_EOL);
    }
}