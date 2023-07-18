<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class SampleLicenseAddon extends SugarBean
{
    public $module_dir = 'SampleLicenseAddon';
    public $object_name = 'SampleLicenseAddon';
    public $table_name = 'samplelicenseaddon';
    public $disable_var_defs = true;
    public $new_schema = true;
    public $disable_row_level_security = true;
    public $disable_custom_fields = true;
    public $relationship_fields = array();
    
    function bean_implements($interface){
        return false;
    }
}