<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();

        $users = array(

		array(
			'username' => 'klaush',
			'email' => 'klaus@signalq.ca',
			'password' => Hash::make('test123'),
			'confirmation_code' => md5(microtime().Config::get('app.key')),
			'confirmed'   => 1,
			'created_at' => '2013-06-15 00:00:00',
			'first_name' => 'Klaus',
			'last_name' => 'Haertel',
			'contact_type' => 'email',
			'plan' => 'Trial',
			'twitter_handle' => '',
			'contact_phone' => '',
			'company' => 'signalQ',
			'company_full' => 'signalQ Solutions',
			'op_countries' => '',
			'website' => '',
			'haves' => '',
			'needs' => '',
			'client_logo' => '',
			'runtime_ip' => '193.28.87.211',
			'ps_db_user' => 'qdash',
			'ps_db_pass' => 'EyL3gWvtlylP3s',
			'alert_to_name' => 'Klaus Haertel',
			'alert_to_email' => 'klaus.haertel@gmail.com',
			'system_timezone' => 'UTC',
			'ps_internal_vendor' => '10',
			'ps_internal_sip' => '20',
			'ps_internal_um' => '21',
			'ps_env' => '6',
			'qdash_apikey' => 'RoNpq1o68B93B0aKeBS6tCvbj7Nahaxo9tpK5eV8Xim99kI6HU',
			'show_in_directory' => '0',
			'qdash_enabled' => '1',
			'send_alerts' => '0',
			'testmode' => '0',
			),
		array(
			'first_name' => 'Mike',
			'last_name' => 'Le',
			'username' => 'mike.mle@gmail.com',
			'email' => 'mike',
			'twitter_handle' => '',
			'contact_phone' => '',
			'plan' => 'Trial',
			'company' => 'signalQ',
			'company_full' => '',
			'op_countries' => '',
			'website' => '',
			'haves' => '',
			'needs' => '',
			'client_logo' => '',
			'created_at' => '2013-06-16 00:00:00',
			'password' => Hash::make('test123'),
			'contact_type' => 'email',
			'runtime_ip' => '',
			'ps_db_user' => NULL,
			'ps_db_pass' => NULL,
			'alert_to_name' => NULL,
			'alert_to_email' => NULL,
			'system_timezone' => 'UTC',
			'ps_internal_vendor' => NULL,
			'ps_internal_sip' => NULL,
			'ps_internal_um' => NULL,
			'ps_env' => NULL,
			'qdash_apikey' => '',
			'show_in_directory' => '0',
			'qdash_enabled' => '1',
			'send_alerts' => '0',
			'testmode' => '0',		
			'confirmed'   => 1,
			'confirmation_code' => md5(microtime().Config::get('app.key')),
		),	

		array(
			'first_name' => 'David',
			'last_name' => 'Wise', 
			'username' => 'david@avoxi.com',
			'email' => 'david@avoxi.com',
			'twitter_handle' => '',
			'contact_phone' => '+18435665677',
			'plan' => 'Trial',
			'company' => 'Avoxi',
			'company_full' => '',
			'op_countries' => 'USA, Costa Rica, Phillippines, India, Jamaica, South Africa',
			'website' => 'http://www.avoxi.com',
			'haves' => 'ITFs, US 8xx, DIDs, SIP',
			'needs' => 'DID, ITFs (internal tollfree)',
			'client_logo' => 'avoxi.png',
			'created_at' => NULL,
			'password' => Hash::make('shu9spyv'),
			'contact_type' => 'email',
			'runtime_ip' => '',
			'ps_db_user' => NULL,
			'ps_db_pass' => NULL,
			'alert_to_name' => NULL,
			'alert_to_email' => NULL,
			'system_timezone' => 'UTC',
			'ps_internal_vendor' => NULL,
			'ps_internal_sip' => NULL,
			'ps_internal_um' => NULL,
			'ps_env' => NULL,
			'qdash_apikey' => '',
			'show_in_directory' => '1',
			'qdash_enabled' => '0',
			'send_alerts' => '0',
			'testmode' => '0',
			'confirmed'   => 1,
			'confirmation_code' => md5(microtime().Config::get('app.key')),
		),

array(
	'username' => 'ervin.wittner@phonect.no',
	'first_name' => 'Ervin',
	'last_name' => 'Wittner',
	'email' => 'ervin.wittner@phonect.no',
	'twitter_handle' => '',
	'contact_phone' => '+47-216-770-12',
	'plan' => 'Trial',
	'company' => 'Phonect AS',
	'company_full' => '',
	'op_countries' => 'Norway',
	'website' => 'http://www.phonect.no',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'phonect.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'fethi.bayburtlu@milleni.com.tr',
	'first_name' => 'Hüseyin Fethi',
	'last_name' => 'Bayburtlu',
	'email' => 'fethi.bayburtlu@milleni.com.tr',
	'twitter_handle' => '',
	'contact_phone' => '+905305482926',
	'plan' => 'Trial',
	'company' => 'Millenicom',
	'company_full' => '',
	'op_countries' => 'Istanbul, Turkey',
	'website' => 'http://www.milleni.com.tr/English.aspx',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'millenicom.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'erik.andersson@cellip.com',
	'first_name' => 'Erik',
	'last_name' => 'Andersson',
	'email' => 'erik.andersson@cellip.com',
	'twitter_handle' => '',
	'contact_phone' => '+46855801128',
	'plan' => 'Trial',
	'company' => 'CellIP',
	'company_full' => '',
	'op_countries' => 'Sweden',
	'website' => 'www.cellip.com',
	'haves' => 'IP-centrex, SIP-Trunking,SIP-Trunk to Lync, DIDs',
	'needs' => 'DIDs',
	'client_logo' => 'cellip.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'daniel.ponticello@redder.it',
	'first_name' => 'Daniel',
	'last_name' => 'Ponticello',
	'email' => 'daniel.ponticello@redder.it',
	'twitter_handle' => '',
	'contact_phone' => '',
	'plan' => 'Trial',
	'company' => 'Redder Telco',
	'company_full' => '',
	'op_countries' => 'Italia',
	'website' => 'www.redder.it',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'redder.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'f.djema@icosnet.com',
	'first_name' => 'Farid',
	'last_name' => 'Djema',
	'email' => 'f.djema@icosnet.com',
	'twitter_handle' => '',
	'contact_phone' => '+ 213 770327783',
	'plan' => 'Trial',
	'company' => 'Icosnet Spa',
	'company_full' => '',
	'op_countries' => 'Algeria',
	'website' => 'www.icosnet.com',
	'haves' => 'Internet access, Hosting, VoIP',
	'needs' => 'All communication services',
	'client_logo' => 'icosnet.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'flandolt@backbone.ch',
	'first_name' => 'Fritz',
	'last_name' => 'Landolt',
	'email' => 'flandolt@backbone.ch',
	'twitter_handle' => '',
	'contact_phone' => '+41442761919',
	'plan' => 'Trial',
	'company' => 'Backbone Solutions',
	'company_full' => '',
	'op_countries' => 'Switzerland',
	'website' => 'www.backbone.ch',
	'haves' => 'DSL, SIP',
	'needs' => '',
	'client_logo' => 'backbone.png',
	'created_at' => NULL,
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'per.hubinette@cellip.com',
	'first_name' => 'Per',
	'last_name' => 'Hubinette',
	'email' => 'per.hubinette@cellip.com',
	'twitter_handle' => '',
	'contact_phone' => '+46855801019',
	'plan' => 'Trial',
	'company' => 'CellIP AB',
	'company_full' => '',
	'op_countries' => 'Sweden',
	'website' => 'www.cellip.com',
	'haves' => 'IP-centrex, SIP-Trunking services, SIP-Trunk to Lync',
	'needs' => '',
	'client_logo' => '',
	'created_at' => '2013-08-16 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '0',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'brian.govanlu@mtnsat.com',
	'first_name' => 'Brian K',
	'last_name' => 'Govanlu',
	'email' => 'brian.govanlu@mtnsat.com',
	'twitter_handle' => '',
	'contact_phone' => '1-954-672-4411',
	'plan' => 'Trial',
	'company' => 'MTN Satellite Comm.',
	'company_full' => '',
	'op_countries' => 'USA/Global',
	'website' => 'http://www.mtnsat.com',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'mtn.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'nhugnu@rhitcr.com',
	'first_name' => 'Nissim',
	'last_name' => 'Hugnu',
	'email' => 'nhugnu@rhitcr.com',
	'twitter_handle' => '',
	'contact_phone' => '+506-4010-0000',
	'plan' => 'Trial',
	'company' => 'R&H Telecom',
	'company_full' => '',
	'op_countries' => 'Costa Rica',
	'website' => 'http://www.rhitcr.com',
	'haves' => 'Partition services, int wholesale, wisp, fraud protection, sms',
	'needs' => '',
	'client_logo' => 'rh.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'fadhil.ali@newroztelecom.com',
	'first_name' => 'Fadhil',
	'last_name' => 'Ali',
	'email' => 'fadhil.ali@newroztelecom.com',
	'twitter_handle' => '',
	'contact_phone' => '+9647504611552',
	'plan' => 'Trial',
	'company' => 'Niedetelecom',
	'company_full' => '',
	'op_countries' => 'Iraq/Kurdistan',
	'website' => 'http://www.neidetelecom.com',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'neide.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'steves@buzznetworks.co.uk',
	'first_name' => 'Steve',
	'last_name' => 'Smith',
	'email' => 'steves@buzznetworks.co.uk',
	'twitter_handle' => '',
	'contact_phone' => '+442031371144',
	'plan' => 'Trial',
	'company' => 'Buzz Networks',
	'company_full' => '',
	'op_countries' => 'UK',
	'website' => 'http://www.buzzconnect.co.uk',
	'haves' => 'Hosted voice, wholesale minutes',
	'needs' => 'Asterisk plug-in to help streamline high volume traffic handling for Porta switch.',
	'client_logo' => 'buzz.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'mondi@skywire.co.za',
	'first_name' => 'Mondi',
	'last_name' => 'Hattingh',
	'email' => 'mondi@skywire.co.za',
	'twitter_handle' => '',
	'contact_phone' => '+27867272606',
	'plan' => 'Trial',
	'company' => 'Skywire',
	'company_full' => '',
	'op_countries' => 'South Africa',
	'website' => 'http://www.skywire.co.za',
	'haves' => 'Wireless Last Mile Connectivity, Internet Access & Voice Termination',
	'needs' => '',
	'client_logo' => 'skywire.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'abak@ixo.fi',
	'first_name' => 'Alexander',
	'last_name' => 'Bak',
	'email' => 'abak@ixo.fi',
	'twitter_handle' => '',
	'contact_phone' => '+358407395378',
	'plan' => 'Trial',
	'company' => 'IXO Systems',
	'company_full' => '',
	'op_countries' => 'Finland',
	'website' => 'http://www.ixo.fi',
	'haves' => 'Retail , web registration , did, pbx, virt pbx, wholesale, env-s.',
	'needs' => 'public conf call',
	'client_logo' => 'ixo.png',
	'created_at' => '2013-08-20 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'kenting@baycall.com',
	'first_name' => 'Kenneth',
	'last_name' => 'Ting',
	'email' => 'kenting@baycall.com',
	'twitter_handle' => '',
	'contact_phone' => '+61 282 630 600',
	'plan' => 'Trial',
	'company' => 'Baycall',
	'company_full' => '',
	'op_countries' => 'Australia',
	'website' => 'http://www.baycall.com/',
	'haves' => 'Calling Cards',
	'needs' => 'Porta Programing, A -Z termination, Business collaboration, calling card distributors',
	'client_logo' => 'baycall.png',
	'created_at' => '2013-08-23 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'mark.bonnici@sis.com.mt',
	'first_name' => 'Mark',
	'last_name' => 'Bonnici',
	'email' => 'mark.bonnici@sis.com.mt',
	'twitter_handle' => '',
	'contact_phone' => '+35620605017',
	'plan' => 'Trial',
	'company' => 'SIS',
	'company_full' => 'Solutions & Infrastructure Services',
	'op_countries' => 'Malta',
	'website' => 'http://www.sis.com.mt',
	'haves' => 'SIP services, trunks, DIDs, Environments, SS7 interconnect, etc.',
	'needs' => 'SMS, Value added services',
	'client_logo' => 'sis.gif',
	'created_at' => '2013-08-24 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'MToop@mweb.com',
	'first_name' => 'Michael',
	'last_name' => 'Toop',
	'email' => 'MToop@mweb.com',
	'twitter_handle' => '',
	'contact_phone' => '',
	'plan' => 'Trial',
	'company' => 'MWeb',
	'company_full' => '',
	'op_countries' => 'South Africa',
	'website' => 'www.mweb.co.za',
	'haves' => '',
	'needs' => '',
	'client_logo' => '',
	'created_at' => '2013-08-25 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '0',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'chris.ransley@sis.com.mt',
	'first_name' => 'Christian',
	'last_name' => 'Ransley',
	'email' => 'chris.ransley@sis.com.mt',
	'twitter_handle' => '',
	'contact_phone' => '',
	'plan' => 'Trial',
	'company' => 'SIS',
	'company_full' => 'Solutions & Infrastructure Services Ltd',
	'op_countries' => 'Malta',
	'website' => 'www.sis.com.mt',
	'haves' => '',
	'needs' => '',
	'client_logo' => '',
	'created_at' => '2013-08-25 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '0',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'alexei.palii@ixo.fi',
	'first_name' => 'Alexei',
	'last_name' => 'Palii',
	'email' => 'alexei.palii@ixo.fi',
	'twitter_handle' => '',
	'contact_phone' => '',
	'plan' => 'Trial',
	'company' => '',
	'company_full' => '',
	'op_countries' => '',
	'website' => '',
	'haves' => '',
	'needs' => '',
	'client_logo' => '',
	'created_at' => '2013-09-03 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '0',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) , array(
	'username' => 'aghieth@lightspeed.com.bh',
	'first_name' => 'Ahmad',
	'last_name' => 'Ghieth',
	'email' => 'aghieth@lightspeed.com.bh',
	'twitter_handle' => '',
	'contact_phone' => '+97366348883',
	'plan' => 'Trial',
	'company' => 'Lightspeed',
	'company_full' => 'Lightspeed Communications',
	'op_countries' => 'Bahrain',
	'website' => 'http://lightspeed.com.bh',
	'haves' => 'ISP-SIP',
	'needs' => 'SIP Traffic tracking',
	'client_logo' => 'lightspeed.png',
	'created_at' => '2013-09-09 00:00:00',
	'password' => Hash::make('shu9spyv') ,
	'contact_type' => 'email',
	'runtime_ip' => '81.22.16.248',
	'ps_db_user' => 'qdash',
	'ps_db_pass' => 'EyL3gWvtlylP3s',
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => '2',
	'ps_internal_sip' => '1',
	'ps_internal_um' => '5',
	'ps_env' => '1',
	'qdash_apikey' => 'gG5CkVN0Ryl709PpKYftSV8fmfhUgA8LgF6vCAfncnSUYucA9M',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed' => 1,
	'confirmation_code' => md5(microtime() . Config::get('app.key')) ,
) ,
array(
	'username' => 'simon.cleaver@synety.com',
	'first_name' => 'Simon',
	'last_name' => 'Cleaver',
	'email' => 'simon.cleaver@synety.com',
	'twitter_handle' => '',
	'contact_phone' => '+442035877188',
	'plan' => 'Trial',
	'company' => 'Synety',
	'company_full' => '',
	'op_countries' => 'United Kingdom',
	'website' => 'http://www.synety.com/',
	'haves' => '',
	'needs' => '',
	'client_logo' => 'synety.png',
	'created_at' => '2013-10-10 00:00:00',
	'password' => Hash::make('shu9spyv'),
	'contact_type' => 'email',
	'runtime_ip' => '',
	'ps_db_user' => NULL,
	'ps_db_pass' => NULL,
	'alert_to_name' => NULL,
	'alert_to_email' => NULL,
	'system_timezone' => 'UTC',
	'ps_internal_vendor' => NULL,
	'ps_internal_sip' => NULL,
	'ps_internal_um' => NULL,
	'ps_env' => NULL,
	'qdash_apikey' => '',
	'show_in_directory' => '1',
	'qdash_enabled' => '0',
	'send_alerts' => '0',
	'testmode' => '0',
	'confirmed'   => 1,
	'confirmation_code' => md5(microtime().Config::get('app.key')),
	),

        );

        DB::table('users')->insert( $users );
    }

}