<?php
include('/home/skhsblsb/mediawiki/private.php');
# Site language code, should be one of the list in ./languages/data/Names.php
if ( $wikiId == 'datawiki' ) {
    $wgSecretKey = $wgSecretKeydatawiki;
    $wgUpgradeKey = $wgUpgradeKeydatawiki;
    wfLoadExtension( 'WikibaseCirrusSearch' );
    wfLoadExtension( 'WikibaseLexeme' );
    wfLoadExtension( 'WikibaseQualityConstraints' );
    wfLoadExtension( 'Translate' );
    $wgEnableWikibaseRepo = true;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
    require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
    $wgWBRepoSettings['siteLinkGroups'] = [ 'Wikidata' ];
//    $wgWBRepoSettings['entityNamespaces']['item'] = NS_MAIN;
//	$wgWBRepoSettings['entityNamespaces']['property'] = NS_MAIN;
	$wgWBRepoSettings['sharedCacheKeyPrefix'] = $wgDBname . ':WBL';
	$wgWBRepoSettings['sharedCacheKeyGroup'] = $wgDBname;
	$wgNamespacesToBeSearchedDefault[NS_MAIN] = true;
    $wgWBClientSettings['siteGlobalID'] = 'datawiki';
    $wgLocalDatabases = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    $wgLocalDatabases = $wgWBRepoSettings['localClientDatabases'] = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    $wgWBRepoSettings['localClientDatabases'] = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    // /*
    $wgExtraInterlanguageLinkPrefixes = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    // Commons features
} elseif ( $wikiId == 'commonswiki' ) {  
    $wgSecretKey = $wgSecretKeycommonswiki;
    $wgUpgradeKey = $wgUpgradeKeycommonswiki;
    wfLoadExtension( 'WikibaseMediaInfo' );
    wfLoadExtension( 'WikibaseCirrusSearch' );
    wfLoadExtension( 'WikibaseLexeme' );
    wfLoadExtension( 'WikibaseQualityConstraints' );
    wfLoadExtension( 'Translate' );
    
    $wgEnableWikibaseRepo = true;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
    require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'commonswiki';
    $wgWBRepoSettings['siteLinkGroups'] = [ 'Wikidata' ];
	$wgWBRepoSettings['sharedCacheKeyPrefix'] = $wgDBname . ':WBL';
	$wgWBRepoSettings['sharedCacheKeyGroup'] = $wgDBname;
    $wgLocalDatabases = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    $wgLocalDatabases = $wgWBRepoSettings['localClientDatabases'] = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    $wgWBRepoSettings['localClientDatabases'] = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    // /*
    $wgExtraInterlanguageLinkPrefixes = [
    'skhsblsb_metawiki',
	'skhsblsb_bnwiki',
	'skhsblsb_commonswiki',
    'skhsblsb_testwiki',
	'skhsblsb_enwiki',
	'skhsblsb_hiwiki',
	'skhsblsb_datawiki',
    ];
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'enwiki' ) {  
    $wgSecretKey = $wgSecretKeyenwiki;
    $wgUpgradeKey = $wgUpgradeKeyenwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'enwiki';
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'hiwiki' ) {  
    $wgSecretKey = $wgSecretKeyhiwiki;
    $wgUpgradeKey = $wgUpgradeKeyhiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'hiwiki';
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'bnwiki' ) {  
    $wgSecretKey = $wgSecretKeybnwiki;
    $wgUpgradeKey = $wgUpgradeKeybnwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'bnwiki';
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'testwiki' ) {  
    $wgSecretKey = $wgSecretKeytestwiki;
    $wgUpgradeKey = $wgUpgradeKeytestwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'testwiki';
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
} else { #metawiki  
    wfLoadExtension( 'Translate' );
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'metawiki';
    include('/home/skhsblsb/mediawiki/GlobalConfig.php');
}
/*
if ( $wgWordmark ) {
	$wgLogos['wordmark'] = [
		'src' => $wgWordmark,
		'width' => $wgWordmarkWidth,
		'height' => $wgWordmarkHeight,
	];
}
*/
