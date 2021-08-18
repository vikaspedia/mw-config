<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

include('/home/sourklou/mediawiki/private.php');
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
# Choose the right wiki to show
if ( defined( 'MW_DB' ) ) {
    $wikiId = MW_DB;
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'wiki.vikaspedia.org') {
    $wikiId = 'wikiwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'data.vikaspedia.org') {
    $wikiId = 'datawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'en.vikaspedia.org') {
    $wikiId = 'enwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'bn.vikaspedia.org') {
    $wikiId = 'bnwiki';    
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'hi.vikaspedia.org') {
    $wikiId = 'hiwiki';    
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'id.vikaspedia.org') {
    $wikiId = 'idwiki'; 
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'test.vikaspedia.org') {
    $wikiId = 'testwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'commons.vikaspedia.org') {
    $wikiId = 'commonswiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'meta.vikaspedia.org') {
    $wikiId = 'metawiki';               
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
	'sourklou_wikiwiki' => 'https://wiki.vikaspedia.org',
	'sourklou_datawiki' => 'https://data.vikaspedia.org',
	'sourklou_enwiki' => 'https://en.vikaspedia.org',
	'sourklou_bnwiki' => 'https://bn.vikaspedia.org',
	'sourklou_hiwiki' => 'https://hi.vikaspedia.org',
	'sourklou_idwiki' => 'https://id.vikaspedia.org',
	'sourklou_testwiki' => 'https://test.vikaspedia.org',
	'sourklou_metawiki' => 'https://meta.vikaspedia.org',
	'sourklou_commonswiki' => 'https://commons.vikaspedia.org',
        'sourklou_afwiki' => 'https://af.vikaspedia.org',
         'sourklou_arwiki' => 'https://ar.vikaspedia.org',
         'sourklou_astwiki' => 'https://ast.vikaspedia.org',
         'sourklou_barwiki' => 'https://bar.vikaspedia.org',
          'sourklou_bewiki' => 'https://be.vikaspedia.org',
         'sourklou_bgwiki' => 'https://bg.vikaspedia.org',
          'sourklou_bswiki' => 'https://bs.vikaspedia.org',
         'sourklou_cawiki' => 'https://ca.vikaspedia.org',
         'sourklou_loginwiki' => 'https://login.vikaspedia.org',
];

## The URL path to the logo.  Make sure you change this from the default,

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "sourklou_".$wikiId;
$wgDBuser = $DBuser;
$wgDBpassword = $DBpassword;
# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;
# Read wiki lists
$wgLocalDatabases = array(
	'sourklou_wikiwiki',
	'sourklou_datawiki',
	'sourklou_enwiki',
	'sourklou_bnwiki',
	'sourklou_hiwiki',
	'sourklou_idwiki',
	'sourklou_testwiki',
	'sourklou_metawiki',
	'sourklou_commonswiki',
         'sourklou_afwiki',
         'sourklou_arwiki',
         'sourklou_astwiki',
         'sourklou_barwiki',
          'sourklou_bewiki',
         'sourklou_bgwiki',
          'sourklou_bswiki',
         'sourklou_cawiki',
         'sourklou_loginwiki',
         
);

## Cache
$wgMainCacheType = CACHE_ACCEL;
$wgParserCacheType = CACHE_ACCEL;
$wgMessageCacheType = CACHE_ACCEL;
// $wgSessionCacheType = 'redis';
// $wgDebugLogFile = "error.log";
$wgParserCacheExpireTime = 2592000;
$wgResourceLoaderMaxage = array('server' => 30 * 24 * 60 * 60, 'client' => 30 * 24 * 60 * 60);
$wgEnableSidebarCache = true;
$wgShowIPinHeader = false;

// require_once( '/home/sourklou/mediawiki/LocalExtensions.php' );
include('LocalConfig.php');
$wgCentralAuthDatabase = 'sourklou_ca';

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
