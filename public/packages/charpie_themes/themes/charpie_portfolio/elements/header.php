<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass()?>">