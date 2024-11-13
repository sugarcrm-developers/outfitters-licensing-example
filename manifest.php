<?php

/**
Notes:
    1. Change the name of the following files to contain the name of YOUR add-on:
        i. /license_admin/language/en_us.SampleLicenseAddon.php
            * Change filename in language array below to match.
        ii. /license_admin/menu/SampleLicenseAddon_admin.php
            * Change filename in adminstration array below to match.
        iii. /license_admin/actionviewmap/SampleLicenseAddon_actionviewmap.php
            * Change filename in actionviewmap array below to match
    2. Edit the config in /license/license/config.php
        'name' => 'SampleLicenseAddon', //The same name of the Add-on listed in your manifest file.
        'shortname' => 'samplelicenseaddon', //The short name of your Add-on
        'public_key' => '', //The public key associated with the group this download is associated with
        'api_url' => 'https://marketplace.sugarcrm.com/api/v1', //generall leave as is
        'validate_users' => false, //whether you want to validate users or not. This should match the "Require User Count Verification" option in the group this download is associated with
        'continue_url' => '', //[optional] Will show a button after license validation that will redirect to this page. Could be used to redirect to a configuration page such as index.php?module=MyCustomModule&action=config
    3. Change the 'to' in the copy array below
    4. Edit /scripts/post_install.php and change redirect to your module
    5. Double check each line in the manifest that has "// <-- CHANGE NAME HERE" tagged at the end of the line
    6. Do a search/replace of SampleLicenseAddon, samplelicenseaddon, and SAMPLELICENSEADDON in all files
    7. Rename /license/license/OutfittersLicense.php, the class name, and all references to OutfittersLicense
        to something unique relating to your addon such as MyAddonOutfittersLicense.php->MyAddonOutfittersLicense
*/
$manifest = array (
    'acceptable_sugar_versions' =>  array (
        'regex_matches' => array(
            '14\\.(.*?)\\.(.*?)',
            '13\\.(.*?)\\.(.*?)',
            '12\\.(.*?)\\.(.*?)',
            '11\\.(.*?)\\.(.*?)',
        ),
    ),
    'acceptable_sugar_flavors' => array(
        'PRO',
        'ENT',
        'ULT',
    ),
    'readme'=>'',
    'key'=>'',
    'author' => 'SugarOutfitters',
    'description' => 'Sample add-on with license validation using ExternalResourceClient',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SampleLicenseAddon', // <-- CHANGE NAME HERE - To your module name, whatever you put here needs to go in license/config.php
    'published_date' => '2024/11/13',
    'type' => 'module',
    'version' => '2.1',
    'remove_tables' => false,

);
$installdefs = array (
    'id' => 'SampleLicenseAddon', // <-- CHANGE NAME HERE - To your module name
    'beans' => //remove this bean or replace with your own module name.
        array (
            array (
              'module' => 'SampleLicenseAddon',
              'class' => 'SampleLicenseAddon',
              'path' => 'modules/SampleLicenseAddon/SampleLicenseAddon.php',
              'tab' => false,
            ),
        ),
    'copy' =>
        array (
            //copy license directory to your module
            array (
                'from' => '<basepath>/license',
                'to' => 'modules/SampleLicenseAddon', // <-- CHANGE NAME HERE - To your module name
            ),
            //Rest of your copy records below here....
        ),
    'language' =>
        array (
            array(
                'from'=> '<basepath>/license_admin/language/en_us.SampleLicenseAddon.php', // <-- CHANGE NAME HERE
                'to_module'=> 'Administration',
                'language'=>'en_us'
            ),
        ),
    'administration' =>
        array(
            array(
                'from'=>'<basepath>/license_admin/menu/SampleLicenseAddon_admin.php', // <-- CHANGE NAME HERE
                'to' => 'modules/Administration/SampleLicenseAddon_admin.php', // <-- CHANGE NAME HERE - Leave Administration as is
            ),
        ),
    'action_view_map' =>
        array (
            array(
                'from'=> '<basepath>/license_admin/actionviewmap/SampleLicenseAddon_actionviewmap.php', // <-- CHANGE NAME HERE
                'to_module'=> 'SampleLicenseAddon', // <-- CHANGE NAME HERE - To your module name
            ),
        ),
);

?>