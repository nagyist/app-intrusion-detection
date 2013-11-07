<?php

/**
 * Snort intrusion detection class.
 *
 * @category   apps
 * @package    intrusion-detection
 * @subpackage libraries
 * @author     ClearFoundation <developer@clearfoundation.com>
 * @copyright  2005-2011 ClearFoundation
 * @license    http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License version 3 or later
 * @link       http://www.clearfoundation.com/docs/developer/apps/intrusion_detection/
 */

$rule_sets = array(
	'activex'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_activex') ),
	'attack-responses' => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_attack_responses') ),
	'attack_responses' => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_attack_responses') ),
	'attack_response' => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_attack_responses') ),
	'botcc'            => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_botnet') ),
	'backdoor'         => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_backdoor') ),
	'bad-traffic'      => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_bad_traffic') ),
	'chat'             => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_chat') ),
	'compromised'      => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_compromised') ),
	'current_events'   => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_experimental') ),
	'ddos'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_ddos') ),
	'deleted'          => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_deleted') ),
	'dns'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_dns') ),
	'dos'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_dos') ),
	'drop'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_drop_dont_route_or_peer') ),
	'dshield'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_dshield') ),
	'experimental'     => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_experimental') ),
	'exploit'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_exploit') ),
	'finger'           => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_finger') ),
	'ftp'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_ftp') ),
	'games'            => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_games') ),
	'icmp-info'        => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_icmp_detection') ),
	'icmp_info'        => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_icmp_detection') ),
	'icmp'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_icmp') ),
	'imap'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_imap') ),
	'info'             => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_info') ),
	'inappropriate'    => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_inappropriate') ),
	'local'            => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_local') ),
	'malware'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_malware') ),
	'misc'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_misc') ),
	'multimedia'       => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_multimedia') ),
	'mysql'            => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_mysql') ),
	'netbios'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_netbios') ),
	'nntp'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_nntp') ),
	'oracle'           => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_oracle') ),
	'other-ids'        => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_other') ),
	'p2p'              => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_p2p') ),
	'policy'           => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_policy') ),
	'pop2'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_pop2') ),
	'pop3'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_pop3') ),
	'porn'             => array( 'type' => 'unsupported', 'description' => lang('intrusion_detection_rulelist_porn') ),
	'rbn'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_russian_business_network') ),
	'rpc'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_rpc') ),
	'rservices'        => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_rservices') ),
	'scada'            => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_scada') ),
	'scan'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_scan') ),
	'shellcode'        => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_shellcode') ),
	'smtp'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_smtp') ),
	'snmp'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_snmp') ),
	'sql'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_sql') ),
	'telnet'           => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_telnet') ),
	'tftp'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_tftp') ),
	'tor'              => array( 'type' => 'policy',      'description' => lang('intrusion_detection_rulelist_tor') ),
	'trojan'           => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_trojan') ),
	'user_agents'      => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_user_agents') ),
	'virus'            => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_virus') ),
	'voip'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_voip') ),
	'web-attacks'      => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_attacks') ),
	'web-cgi'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_cgi') ),
	'web-client'       => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_client') ),
	'web_client'       => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_client') ),
	'web-coldfusion'   => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_coldfusion') ),
	'web-frontpage'    => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_frontpage') ),
	'web-iis'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_iis') ),
	'web-misc'         => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_misc') ),
	'web-php'          => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_php') ),
	'web_server'       => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_server') ),
	'web_specific_apps'=> array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_web_server_apps') ),
	'worm'             => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_worm') ),
	'x11'              => array( 'type' => 'security',    'description' => lang('intrusion_detection_rulelist_x11') ),
);
