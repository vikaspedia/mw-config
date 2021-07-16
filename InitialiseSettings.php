<?php
// MediaWiki Central Settings //
include('GlobalExtensions.php');
$wgConf->settings = [
	'wgServer' => [
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
		],
	'wgCanonicalServer' => [
		'default' => 'https://localhost',
		'skhsblsb_metawiki' => 'https://meta.vikaspedia.org',
		'skhsblsb_testwiki' => 'https://test.vikaspedia.org',
		'skhsblsb_bnwiki' => 'https://bn.vikaspedia.org',
		'skhsblsb_commonswiki' => 'https://commons.vikaspedia.org',
		'skhsblsb_enwiki' => 'https://en.vikaspedia.org',
		'skhsblsb_hiwiki' => 'https://hi.vikaspedia.org',
    'skhsblsb_datawiki' => 'https://data.vikaspedia.org',
	],
	'wgSitename' => [
    'default' => '',
		'skhsblsb_metawiki' => 'Meta Wiki',
		'skhsblsb_testwiki' => 'test Wiki',
		'skhsblsb_bnwiki' => 'বিকাশপিডিয়া',
		'skhsblsb_commonswiki' => 'Commons Wiki',
		'skhsblsb_enwiki' => 'Vikaspedia',
		'skhsblsb_hiwiki' => 'विकासपीडिया',
    'skhsblsb_datawiki' => 'Data Wiki',
	],
	'wgLanguageCode' => [
		'default' => 'en',
		'skhsblsb_bnwiki' => 'bn',
		'skhsblsb_hiwiki' =>  'hi',
	],
	'wgScriptPath' => [
		'default' => '',
	],
	'wgArticlePath' => [
		'default' => '/wiki/$1',
	],
	// Debugging //
	'wgShowExceptionDetails' => [
		'default' => true,
	],
	'wgShowDBErrorBacktrace' => [
		'default' => true,
	],
	'wgShowDebug' => [
		'default' => false,
	],
	// Database Configuration //
	'wgDBserver' => [
		'default' => 'localhost',
	],
	'wgDBuser' => [
		'default' => 'skhsblsb_wikiuser',
	],
	'wgAuthenticationTokenVersion' => [
		'default' => '1',
	],
	'wgDBprefix' => [
		'default' => '',
	],
	'wgAllowSchemaUpdates' => [
		'default' => false,
	],
	'wgDBTableOptions' => [
		'default' => 'ENGINE=InnoDB, DEFAULT CHARSET=binary',
	],
	'wgDBmysql5' => [
		'default' => false,
	],
	'wgDBtype' => [
		'default' => 'mysql',
	],
	'wgMemCachedServers' => [
		'default' => [''],
	],
	'wgDefaultUserOptions' => [
		'usenewrc' => 0,
	],
	
	
	# Shared memory settings
	'wgCacheDirectory' => [
		'default' => 'cache',
	],
	'wgFileCacheDirectory' => [
		'default' => 'cache',
	],
	# config cache
	'wgResourceBasePath' => [
		'default' => '',
	],
	'wgSharedDB' => [
		'default' => 'skhsblsb_metawiki',
	],
	'wgSharedTables' => [
		'default' => [],
	],
	
	// Images //
	'wgSharedUploadBaseUrl' => [
		'default' => 'https://commons.vikaspedia.org',
	],
	'wgUseSharedUploads' => [
		'default' => true,
	],
	'wgSharedUploadPath' => [
		'default' => 'https://commons.vikaspedia.org/images',
	],
	'wgSharedUploadDBname' => [
		'default' => 'skhsblsb_commonswiki',
	],
	'wgSharedUploadDirectory' => [
		'default' => 'images',
	],
	'wgRepositoryBaseUrl' => [
		'default' => 'https://commons.vikaspedia.org/wiki/File:',
	],
	'wgUploadNavigationUrl' => [
		'default' => true,
		'skhsblsb_commonswiki' => 'https://commons.vikaspedia.org/wiki/Special:UploadWizard?uselang=$lang',
	],
	// Recent Changes
	'wgUseRCPatrol' => [
		'default' => true,
	],
	'wmgEnhancedRecentChanges' => [
		'default' => false,
	],
	
	// Checkuser
	'wgCUDMaxAge' => [
		'default' => 7776000, //in seconds (default = 3 months)
	],
	'wgCheckUserGBtoollink' => [
		'centralDB' => 'skhsblsb_metawiki',
		'groups' => [ 'steward' ],
	],
	'wgCheckUserForceSummary' => [
		'default' => true,
	],
	'wgCheckUserCIDRLimit' => [ 
		'IPv4' => 16,
		'IPv6' => 32
	],
	'wgCheckUserCAMultiLock' => [
		'centralDB' => 'skhsblsb_metawiki',
		'groups' => [ 'steward' ]
	],
	'wgCheckUserCAtoollink ' => [ 
		'default' => 'skhsblsb_metawiki',
	],
	'wgCheckUserEnableSpecialInvestigate' => [
		'default' => true,
	],

	// Timezone //
	'wgLocaltimezone' => [
		'default' => 'UTC',
	],
	// CentralAuth // !becarefull
	'wgCentralAuthDatabase' => [
		'default' => 'skhsblsb_ca'
	],
	'wgCentralAuthAutoNew' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrate' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrateNonGlobalAccounts' => [
		'default' => true,
	],
	'wgCentralAuthCookies' => [
		'default' => true,
	],
	'wgCentralAuthCookieDomain' => [
		'default' => '.vikaspedia.org',
	],
	'wgCentralAuthCreateOnView' => [
		'default' =>  true,
	],
	
	'wgCentralAuthEnableGlobalRenameRequest' => [
		'default' =>  true,
	],

	'wgCentralAuthEnableUserMerge' => [
		'default' =>  true,
	],
	
	'wgCentralAuthLoginIcon' => [
		'default' => true,
	],

	'wgCentralAuthSilentLogin' => [
		'default' =>  true,
	],
	'wgCentralAuthAutoCreateWikis' => [
		'default' => [
			'skhsblsb_metawiki',
		],
	],
		// Interwiki //
	'wgInterwikiCentralDB' => [
		'default' => 'skhsblsb_metawiki',
	],
	'wgLocalInterwiki' => [
		'default' => '$lang',
	], 
		// Global Blocking //
	'wgGlobalBlockingDatabase' => [
		'default' =>  'skhsblsb_ca',
	],
	'wgGlobalBlockingBlockXFF' => [
		'default' =>  true,
	],
	'wgApplyGlobalBlocks' => [
		'default' => true,
		'skhsblsb_metawiki' => false,
	],
		// GlobalUsage //
	'wgGlobalUsageDatabase' => [
		'default' => 'skhsblsb_commonswiki',
	],
	// GlobalUserPage //
	'wgGlobalUserPageDBname' => [
		'default' => 'skhsblsb_metawiki',
	],
	'wgGlobalUserPageAPIUrl' => [
		'default' => 'https://meta.vikaspedia.org/api.php',
	],
	// TitleBlacklist //
	'wgBlacklistSettings' => [
		[
			'type' => 'localpage',
			'src'  => 'MediaWiki:Titleblacklist'
		],
	],
	
	// WikiEditor //
	'wgHiddenPrefs' => [
		'usebetatoolbar' => true,
	],
	
	// Logo //
	'wgLogos' => [
		'default' => [
			'1x' => '/resources/assets/vikaspedia1.jpg',
		],
	],
	'wgFavicon' => [
		'default' => '/images/f/f8/Vikaspedia.png',
	],
		// Copyright
	'wgRightsPage' => [
		'default' => 'https://creativecommons.org/licenses/by-sa/3.0/',
	],
	'wgRightsUrl' => [
		'default' => 'https://creativecommons.org/licenses/by-sa/3.0/',
	],
	'wgRightsText' => [
	    'default' => ' CC BY-SA 3.0',
	    ],
	'wgDiff3' => [
		'default' => '/usr/bin/diff3',
	],

	'wgEnableUploads' => [
		'default' => true,
	],
	'wgUploadDirectory' => [
		'default' => 'images',
	],
	'wgUseImageMagick' => [
		'default' => false,
	],
	'wgImageMagickConvertCommand' => [
		'default' => '/usr/bin/convert',
	],
	'wgSVGConverter' => [
		'default' => 'ImageMagick',
	],
	'wgUseImageResize' => [
		'default' => true,
	],
	'wgMemoryLimit' => [
		'default' => '50M',
	],
	'wgMaxImageArea' => [
		'default' => 7.2e7,
	],
	'wgGenerateThumbnailOnParse' => [
		'default' => true,
	],
	'wgUseInstantCommons' => [
		'default' => true,
	],
	'wgPingback' => [
		'default' => true,
	],
	'wgShellLocale' => [
		'default' => 'C.UTF-8',
	],
	'wgMaxShellFileSize' => [
		'default' => 102400,
	],
	'wgMaxShellMemory' => [
		'default' => 524288,
	],
	
	// Thumbnail prerendering at upload time
	'wgUploadThumbnailRenderMap' => [
		'default' => [ 320, 640, 800, 1024, 1280, 1920 ],
		'private' => [],
	],
	'wgUploadThumbnailRenderMethod' => [
		'default' => 'http',
	],
	'wgWPBEnablePageImagesBanners' => [
		'default' => false,
	],
	'wgWPBEnableHeadingOverride' => [
		'default' => true,
	],
	// Footers
 	'+wgFooterIcons' => [
 		'default' => [
 			'poweredby' => [
 				'vikaspedia' => [
 					'src' => "https://meta.vikaspedia.org/images/8/8e/Vikaspedia.jpg",
 					'url' => 'https://meta.vikaspedia.org/wiki/Vikaspedia',
 					'alt' => 'vikaspedia Wiki '
 				]
 			]
 		]
 	],
 	
 	
	// Email //
	'wgEnableEmail' => [
		'default' => true,
	],
	'wgEnableUserEmail' => [
		'default' => true,
	],
	'wgEmergencyContact' => [
		'default' => 'admin@vikaspedia.org',
	],
	'wgPasswordSender' => [
		'default' => 'admin@vikaspedia.org',
	],
	'wgNoReplyAddress' => [
		'default' => 'admin@vikaspedia.org',
	],
	'wgEnotifUserTalk' => [
		'default' => true,
	],
	'wgEnotifWatchlist' => [
		'default' => true,
	],
	'wgEmailAuthentication' => [
		'default' => true,
	],
	'wgUserEmailUseReplyTo' => [
		'default' => true,
	],
	'wgEnableUserEmailBlacklist' => [
		'default' => true,
	],
	'wgEnotifUserTalk' => [
		'default' => true,
	],
	'wgEnotifRevealEditorAddress' => [
		'default' => true,
	],
	'wgEnotifFromEditor' => [
		'default' => true,
	],
	'wgEnotifImpersonal' => [
		'default' => true,
	],
	// Scribunto //
	'wgScribuntoDefaultEngine' => [
		'default' => 'luastandalone',
	],
	'wgScribuntoEngineConf' => [
		'luastandalone' => [ 'memoryLimit' => 209715200, ],
	],
	'wgScribuntoUseGeSHi' => [
		'default' => true,
	],
	'wgScribuntoUseCodeEditor' => [
		'default' => true,
	],
	'wgPygmentizePath' => [
		'default' => '/home/skhsblsb/virtualenv/python/3.8/bin/pygmentize',
	],
		
	// Namespace //
	'wgSiteNotice' => [
		'default' => '',
	],
	'wgRestrictionLevels' => [
		'default' => [
			'',
			'autoconfirmed', // semi-protection level on
			'sysop',
		],
	],
	'wgAddGroups' => [
		'default' => [
			'bureaucrat' => [
				'accountcreator',
				'bureaucrat',
				'bot',
			],
			'sysop' => [
				'autopatrolled',
				'confirmed',
				'rollbacker',
			],
		],
	],
	'+wgGroupPermissions' => [
		'default' => [
			'*' => [
				'abusefilter-log' => true,
				'abusefilter-log-detail' => true,
				'abusefilter-view' => true,
			],
			'accountcreator' => [
				'override-antispoof' => true,
				'noratelimit' => true,
				'tboverride-account' => true,
			],
		],
		'+skhsblsb_enwiki' => [
			'editfilltermanager' => [
				'changetags' => true,
				'managechangetags' => true,
				'oathauth-enable' => true,
				'abusefilter-modify' => true,
			],
			'editfilterhelper' => [
				'abusefilter-view-private' => true,
				'spamblacklistlog' => true,
			],
			'accountcreator' => [
				'override-antispoof' => true,
				'noratelimit' => true,
				'tboverride-account' => true,
			],
			'autoconfirmed' => [
				'abusefilter-log-detail' => true,
				'autoconfirmed' => true,
				'skipcaptcha' => true,
				'upload' => true,
				'reupload' => true,
				'editsemiprotected' => true,
				'createpagemainns' => true,
			],
			'autopatrolled' => [
				'autopatrol' => true,
			],
			'bot' => [
				'changetags' => true,
				'ipblock-exempt' => true,
				'move-categorypages' => true,
			],
			'bureaucrat' => [
				'oathauth-enable' => true,
				'noratelimit' => true,
				'suppressredirect' => true,
				'tboverride' => true,
			],
			'filemover' => [
				'movefile' => true,
			],
			'founder' => [
				'userrights' => true,
				'oathauth-enable' => true,
			],
			'importer' => [
				'import' => true,
				'importupload' => true,
				'oathauth-enable' => true,
			],
			'ipblockexempt' => [
				'ipblock-exempt' => true,
				'torunblocked' => true,
			],
			'massmessagesender' => [
				'massmessage' => true,
			],
			'researcher' => [
				'browsearchive' => true,
				'apihighlimits' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
			],
			'rollbacker' => [
				'rollback' => true,
			],
			'transwikiimporter' => [
				'oathauth-enable' => true,
				'import' => true,
			],
			'oversight' => [
				'abusefilter-hidden-log' => true,
				'abusefilter-hide-log' => true,
				'browsearchive' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'deletelogentry' => true,
				'deleterevision' => true,
				'hideuser' => true,
				'suppressionlog' => true,
				'suppressrevision' => true,
			],
			'checkuser' => [
				'browsearchive' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'abusefilter-view-private' => true,
				'abusefilter-privatedetails' => true,
				'abusefilter-privatedetails-log' => true,
			],
		],
	],
];
