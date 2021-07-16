<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

include('/home/skhsblsb/mediawiki/private.php');
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
# Choose the right wiki to show
if ( defined( 'MW_DB' ) ) {
    $wikiId = MW_DB;
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'test.vikaspedia.org') {
    $wikiId = 'testwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'meta.vikaspedia.org') {
    $wikiId = 'metawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'bn.vikaspedia.org') {
    $wikiId = 'bnwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'commons.vikaspedia.org') {
    $wikiId = 'commonswiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'en.vikaspedia.org') {
    $wikiId = 'enwiki';  
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'hi.vikaspedia.org') {
    $wikiId = 'hiwiki';  
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'data.vikaspedia.org') {
    $wikiId = 'datawiki';
} else {
    echo 'Unable to determine $wikiId'."\n";
    exit(1);
}

$wgSitename = $wikiId;

## The protocol and server name to use in fully-qualified URLs

$wgServer = [
    // if you want to allow also usage of https, just use '//localhost'
    // and set 'http://localhost' at 'wgCanonicalServer'
    'default' => 'https://localhost',
    'skhsblsb_metawiki' => 'https://meta.vikaspedia.org',
    'skhsblsb_testwiki' => 'https://test.vikaspedia.org',
    'skhsblsb_bnwiki' => 'https://bn.vikaspedia.org',
	'skhsblsb_commonswiki' => 'https://commons.vikaspedia.org',
	'skhsblsb_enwiki' => 'https://en.vikaspedia.org',
	'skhsblsb_hiwiki' => 'https://hi.vikaspedia.org',
	'skhsblsb_datawiki' => 'https://data.vikaspedia.org',
	
];

## The URL path to the logo.  Make sure you change this from the default,

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "skhsblsb_".$wikiId;
$wgDBuser = $DBuser;
$wgDBpassword = $DBpassword;
# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;
# Read wiki lists
$wgLocalDatabases = array(
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',

);

## Cache
$wgMainCacheType = CACHE_ACCEL;
$wgParserCacheType = CACHE_ACCEL;
$wgMessageCacheType = CACHE_ACCEL;
// $wgSessionCacheType = 'redis';

// require_once( '/home/skhsblsb/mediawiki/LocalExtensions.php' );
include('LocalConfig.php');
$wgCentralAuthDatabase = 'skhsblsb_ca';

$conf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost', $wgHostCentral ];
$wgLocalVirtualHosts = array( $wgHostCentral );
$wmgHostname = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : 'undefined';
include('GlobalSkins.php');
include('GlobalConfig.php');
include('InitialiseSettings.php');
function efGetSiteParams( $conf, $wiki ) {
    $site = null;
    $lang = null;
    foreach( $conf->suffixes as $suffix ) {
        if ( substr( $wiki, -strlen( $suffix ) ) == $suffix ) {
            $site = $suffix;
            $lang = substr( $wiki, 0, -strlen( $suffix ) );
            break;
        }
    }
    return array(
        'suffix' => $site,
        'lang' => $lang,
        'params' => array(
            'lang' => $lang,
            'site' => $site,
            'wiki' => $wiki,
        ),
        'tags' => array(),
    );
}
$wgConf->suffixes = $wgLocalDatabases;
$wgConf->siteParamsCallback = 'efGetSiteParams';
$wgConf->extractAllGlobals( $wgDBname );
## Error reporting
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
$wgDefaultUserOptions['usenewrc'] =0;
