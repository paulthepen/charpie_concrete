<?php
namespace Concrete\Package\CharpieThemes;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'charpie_themes';
    protected $appVersionRequired = '0.0.1';
    protected $pkgVersion = '0.1';

    public function getPackageDescription()
    {
        return t('Adds the Charpie Themes library to website.');
    }

    public function getPackageName()
    {
        return t('Charpie Themes');
    }

    public function install()
    {
        parent::install();
        $this->installContentFile('install/theme.xml');
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile('install/theme.xml');
    }
}