<?php
namespace Concrete\Package\CharpieThemes\Theme\CharpiePortfolio;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Page\Theme\BedrockThemeTrait;
use Concrete\Core\Page\Theme\Theme;
use function Concrete5\Composer\mixAsset;

class PageTheme extends Theme
{
    use BedrockThemeTrait;

    public function getThemeName() {
        return t('Charpie Portfolio');
    }

    public function getThemeDescription(){
        return t('Charpie Portfolio Theme');
    }

    public function registerAssets() {
        $this->requireAsset('css', 'bootstrap/tooltip');
        $this->requireAsset('javascript', 'bootstrap/tooltip');
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset(mixAsset('/packages/CharpieThemes/themes/charpie_portfolio/css/main.min.css'));
        $this->requireAsset(mixAsset('/packages/CharpieThemes/themes/charpie_portfolio/js/main.min.js'));
    }
}
