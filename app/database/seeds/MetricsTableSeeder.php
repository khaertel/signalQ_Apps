<?php

class MetricsTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('widgets')->truncate();

        $metrics = array(

array(
    'name' => 'Top Customers',
    'type' => 'table',
    'updates_default' => '600',
    'user_parameters' => '{"env":"","options":{}}',
    'system_parameters' => '{"db":"slave","mode":""}',
    'related' => '',
),
array('name' => 'Number of Inactive Customers',
    'type' => 'snapshot',
    'updates_default' => '600',
    'user_parameters' => '{"env":"","options":{"IC_TIME_FRAME":{ "value":"7", "description":"The time frame in days where activity is monitored."}}}', 
    'system_parameters' => '{"db":"slave","mode":""}', 
    'related' => ''),
array(
	'name' => 'Active Calls',
	'type' => 'snapshot',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , 
array(
	'name' => 'New Active Customers',
	'type' => 'snapshot',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{"NAC_TIME_FRAME":{"value":"1", "description":"The time frame in days for a customer to be considered \'new\'.")}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) ,
array(
	'name' => 'Number Of Customers With Overdue Invoices',
	'type' => 'snapshot',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"overdue"}',
	'related' => '35'
) , array(
	'name' => 'Generated Revenue',
	'type' => 'duration',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"Revenue"}',
	'related' => '36'
) , array(
	'name' => 'Revenue This Month',
	'type' => 'duration',
	'updates_default' => '600',
	'user_parameters' => '',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Number Of Calls Per Day',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'ASR',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"asr"}',
	'related' => '37'
) , array(
	'name' => 'Call Volume (ONNET)',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_sip": {"value":"","description":"The ID of the PortaSwitch \'SIP-UA\' connection."}, "ps_internal_um": {"value":"","description":"The ID of the PortaSwitch \'INTERNAL\' connection."}}}',
	'system_parameters' => '{"db":"slave","mode":"ONNET"}',
	'related' => '38,39'
) , array(
	'name' => 'Total Registered Locations',
	'type' => 'snapshot',
	'updates_default' => '600',
	'user_parameters' => '',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Connection Utilization (OB)',
	'type' => 'table',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"originate"}',
	'related' => ''
) , array(
	'name' => 'ACD (OB)',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_sip": {"value":"","description":"The ID of the PortaSwitch \'SIP-UA\' connection."}, "ps_internal_um": {"value":"","description":"The ID of the PortaSwitch \'INTERNAL\' connection."}}}',
	'system_parameters' => '{"db":"slave","mode":"originate"}',
	'related' => '41'
) , array(
	'name' => 'Failed Calls',
	'type' => 'table',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{"FAILEDCALLS_TIME_FRAME":{"value":"600", "description":"The time frame in seconds that is considered for analysis."}}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'ACD & PDD By Vendor',
	'type' => 'table',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_vendor": {"value":""}, "PDD_RED_THESHOLD": {"value":"10000"}, "PDD_YELLOW_THESHOLD": {"value":"4000"}, "SHOW_INTERNAL_CNX":{"value":"true"}}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Call Loss Ratio',
	'type' => 'duration',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Nr Of Short Calls',
	'type' => 'table',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"UC_TOO_SHORT":{"value":"10"}}}',
	'system_parameters' => '{"db":"slave","mode":{"1":"short"}}',
	'related' => ''
) , array(
	'name' => 'Nr Of Long Calls',
	'type' => 'table',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"UC_TOO_LONG":{"value":"7200"}}}',
	'system_parameters' => '{"db":"slave","mode":{"1":"long"}}',
	'related' => ''
) , array(
	'name' => 'Top 10 Destinations',
	'type' => 'table',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"TOP_DESTINATIONS_TIME_FRAME": {"value":"3600"}}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Top Vendors (Outbound)',
	'type' => 'table',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{"TOP_VENDORS_TIME_FRAME":{"value":"86400"}}}',
	'system_parameters' => '{"db":"slave","mode":{"1":"originate"}}',
	'related' => ''
) , array(
	'name' => 'Top Vendors (Inbound)',
	'type' => 'table',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{"TOP_VENDORS_TIME_FRAME":{"value":"86400"}}}',
	'system_parameters' => '{"db":"slave","mode":{"1"1:"answer"}}',
	'related' => ''
) , array(
	'name' => 'PDD',
	'type' => 'duration',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{"ps_internal_vendor":{"value":"","description":"The ID of the PortaSwitch internal vendor."}}}',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Active Calls by Customer',
	'type' => 'snapshot',
	'updates_default' => '600',
	'user_parameters' => '',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Call volume by Customer',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '',
	'system_parameters' => '{"db":"slave","mode":""}',
	'related' => ''
) , array(
	'name' => 'Number Of Customers With Unpaid Invoices',
	'type' => 'snapshot',
	'updates_default' => '86400',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"unpaid"}',
	'related' => '14'
) , array(
	'name' => 'Incurred Cost',
	'type' => 'duration',
	'updates_default' => '86400',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"Cost"}',
	'related' => '15'
) , array(
	'name' => 'NER',
	'type' => 'duration',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"ner"}',
	'related' => '18'
) , array(
	'name' => 'Call Volume (OB)',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_vendor": {"value":"", "description":"The ID of the PortaSwitch internal vendor."}}}',
	'system_parameters' => '{"db":"slave","mode":"OUT"}',
	'related' => '19,39'
) , array(
	'name' => 'Call Volume (IB)',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_vendor": {"value":"", "description":"The ID of the PortaSwitch internal vendor."}}}',
	'system_parameters' => '{"db":"slave","mode":"IN"}',
	'related' => '19,38'
) , array(
	'name' => 'Connection Utilization (IB)',
	'type' => 'table',
	'updates_default' => '600',
	'user_parameters' => '{"env":"","options":{}}',
	'system_parameters' => '{"db":"slave","mode":"answer"}',
	'related' => ''
) , array(
	'name' => 'ACD (IB)',
	'type' => 'duration',
	'updates_default' => '3600',
	'user_parameters' => '{"env":"","options":{"ps_internal_sip": {"value":"","description":"The ID of the PortaSwitch \'SIP-UA\' connection."}, "ps_internal_um": {"value":"","description":"The ID of the PortaSwitch \'INTERNAL\' connection."}}}',
	'system_parameters' => '{"db":"slave","mode":"answer"}',
	'related' => '23'
)

        );

        // Uncomment the below to run the seeder
        DB::table('metrics')->insert($metrics);
                
        
    }

}
