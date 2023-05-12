<?php
namespace Concrete\Package\CharpieBlocks;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'charpie_blocks';
    protected $appVersionRequired = '0.0.1';
    protected $pkgVersion = '0.1';

    public function getPackageDescription()
    {
        return t('Adds the Charpie Blocks library to website.');
    }

    public function getPackageName()
    {
        return t('Charpie Blocks');
    }

    public function install()
    {
        parent::install();
    }

    public function upgrade()
    {
        parent::upgrade();
    }
}