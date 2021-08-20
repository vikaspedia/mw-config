<?php
include('/home/sourklou/mediawiki/private.php');
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
   $wgWBRepoSettings['entityNamespaces']['item'] = NS_MAIN;
	$wgWBRepoSettings['entityNamespaces']['property'] = NS_MAIN;
	$wgWBRepoSettings['sharedCacheKeyPrefix'] = $wgDBname . ':WBL';
	$wgWBRepoSettings['sharedCacheKeyGroup'] = $wgDBname;
	$wgNamespacesToBeSearchedDefault[NS_MAIN] = true;
    $wgWBClientSettings['siteGlobalID'] = 'datawiki';
    $wgLocalDatabases = [
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
    ];
    $wgLocalDatabases = $wgWBRepoSettings['localClientDatabases'] = [
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
    ];
    $wgWBRepoSettings['localClientDatabases'] = [
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
    ];
    // /*
    $wgExtraInterlanguageLinkPrefixes = [
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
	
    ];
} elseif ( $wikiId == 'wikiwiki' ) {  
    $wgSecretKey = $wgSecretKeywikiwiki;
    $wgUpgradeKey = $wgUpgradeKeywikiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'wikiwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');


} elseif ( $wikiId == 'metawiki' ) {  
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;
    wfLoadExtension( 'Translate' );
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'metawiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');


} elseif ( $wikiId == 'bnwiki' ) {  
    $wgSecretKey = $wgSecretKeybnwiki;
    $wgUpgradeKey = $wgUpgradeKeybnwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'bnwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'idwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} elseif ( $wikiId == 'testwiki' ) {  
    $wgSecretKey = $wgSecretKeytestnwiki;
    $wgUpgradeKey = $wgUpgradeKeytestwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'testwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');



} elseif ( $wikiId == 'hiwiki' ) {  
    $wgSecretKey = $wgSecretKeyhiwiki;
    $wgUpgradeKey = $wgUpgradeKeyhiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'hiwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} elseif ( $wikiId == 'commonswiki' ) {  
    $wgSecretKey = $wgSecretKeycommonswiki;
    $wgUpgradeKey = $wgUpgradeKeycommonswiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'commonswiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'afwiki' ) {  
    $wgSecretKey = $wgSecretKeyafwiki;
    $wgUpgradeKey = $wgUpgradeKeyafwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'afwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} elseif ( $wikiId == 'arwiki' ) {  
    $wgSecretKey = $wgSecretKeyarwiki;
    $wgUpgradeKey = $wgUpgradeKeyarwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'arwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'astwiki' ) {  
    $wgSecretKey = $wgSecretKeyastwiki;
    $wgUpgradeKey = $wgUpgradeKeyastwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'astwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'barwiki' ) {  
    $wgSecretKey = $wgSecretKeybarwiki;
    $wgUpgradeKey = $wgUpgradeKeybarwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'barwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'bewiki' ) {  
    $wgSecretKey = $wgSecretKeybewiki;
    $wgUpgradeKey = $wgUpgradeKeybewiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'bewiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} elseif ( $wikiId == 'bgwiki' ) {  
    $wgSecretKey = $wgSecretKeybgwiki;
    $wgUpgradeKey = $wgUpgradeKeybgwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'bgwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'loginwiki' ) {  
    $wgSecretKey = $wgSecretKeyloginwiki;
    $wgUpgradeKey = $wgUpgradeKeyloginwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'loginwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} elseif ( $wikiId == 'cawiki' ) {  
    $wgSecretKey = $wgSecretKeycawiki;
    $wgUpgradeKey = $wgUpgradeKeycawiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'cawiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');

} else { #enwiki  
    $wgSecretKey = $wgSecretKeyenwiki;
    $wgUpgradeKey = $wgUpgradeKeyenwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'enwiki';
    include('/home/sourklou/mediawiki/GlobalConfig.php');
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
