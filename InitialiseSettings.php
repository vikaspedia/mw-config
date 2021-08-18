<?php
// MediaWiki Central Settings //
include('GlobalExtensions.php');
include('/home/sourklou/mediawiki/private.php');

$wgConf->settings = [
	'wgServer' => [
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
		],
	'wgCanonicalServer' => [
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
	],
	'wgSitename' => [
		'default' => '',
		'sourklou_enwiki' => 'Vikaspedia',
	    'sourklou_datawiki' => 'Data Wiki',
	    'sourklou_wikiwiki'=>'wikiwiki',
	'sourklou_bnwiki'=>'বিকাশপিডিয়া',
	'sourklou_hiwiki'=>'विकासपीडिया',
	'sourklou_idwiki'=>'Bahasa Indonesia',
	'sourklou_testwiki'=>'testwiki',
	'sourklou_metawiki'=>'metawiki',
	'sourklou_commonswiki' => 'Commons',
	],
	'wgLanguageCode' => [
		'default' => 'en',
		'sourklou_bnwiki'=>'bn',
		'sourklou_hiwiki'=>'hi',
		'sourklou_idwiki'=>'id',
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
	// Database Configuration /
	'wgDBuser' => [
		'default' => 'sourklou_wikiuser',
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
	
	
	# Shared memory settings
	'wgCacheDirectory' => [
		'default' => 'cache',
	],
	'wgFileCacheDirectory' => [
		'default' => 'cache',
	],
	'wgUseFileCache' => [
		'default' => true,
	],
	
	
	# config cache
	'wgResourceBasePath' => [
		'default' => '',
	],
	'wgSharedDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgSharedTables' => [
		'default' => [],
	],

	// AbuseFilter
	'wgAbuseFilterActions' => [
		'default' => [
			'block' => true,
			'blockautopromote' => true,
			'degroup' => true,
			'disallow' => true,
			'rangeblock' => false,
			'tag' => true,
			'throttle' => true,
			'warn' => true,
		],
	],
	
	'wgUseGlobalAbuseFilters' => [
		'default' => true,
	],
	'wgAbuseFilterCentralDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgAbuseFilterIsCentral' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgAbuseFilterBlockDuration' => [
		'default' => 'indefinte',
	],
	'wgAbuseFilterAnonBlockDuration' => [
		'default' => 2592000,
	],
	'wgAbuseFilterRestrictions' => [
		'default' => [
			'blockautopromote' => true,
			'block' => true,
			'degroup' => true,
			'rangeblock' => true,
		],
	],
	'wgAbuseFilterNotifications' => [
		'default' => 'udp',
	],
	'wgAbuseFilterLogPrivateDetailsAccess' => [
		'default' => true,
	],
	'wgAbuseFilterPrivateDetailsForceReason' => [
		'default' => true,
	],
	'wgAbuseFilterDefaultWarningMessage' => [
		'default' => 'abusefilter-warning',
	],
	
		// ConfirmEdit

	'wgCaptchaDirectory' => [
		'default' => $wgCaptchaDirectoryFC,
	],

	'wgCaptchaDirectoryLevels' => [
		'default' => $wgCaptchaDirectoryLevelsFC,
	],

	'wgCaptchaSecret' => [
		'default' => $wgCaptchaSecretFC,
	],

	'wgCaptchaClass' => [
		'default' => $wgCaptchaClassFC,
	],

	
	// Images //
	'wgSharedUploadBaseUrl' => [
		'default' => 'https://en.vikaspedia.org',
	],
	'wgUseSharedUploads' => [
		'default' => true,
	],
	'wgSharedUploadPath' => [
		'default' => 'https://en.vikaspedia.org/images',
	],
	'wgSharedUploadDBname' => [
		'default' => 'sourklou_enwiki',
	],
	'wgSharedUploadDirectory' => [
		'default' => 'images',
	],
	'wgRepositoryBaseUrl' => [
		'default' => 'https://en.vikaspedia.org/File:',
	],
	'wgUploadNavigationUrl' => [
		'default' => true,
		'sourklou_enwiki' => 'https://en.vikaspedia.org/Special:UploadWizard?uselang=$lang',
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
		'centralDB' => 'sourklou_metawiki',
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
		'centralDB' => 'sourklou_metawiki',
		'groups' => [ 'steward' ]
	],
	'wgCheckUserCAtoollink ' => [ 
		'default' => 'sourklou_metawiki',
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
		'default' => 'sourklou_ca'
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
			'sourklou_metawiki',
		],
	],
		// Interwiki //
	'wgInterwikiCentralDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgLocalInterwiki' => [
		'default' => '$lang',
	], 
		// Global Blocking //
	'wgGlobalBlockingDatabase' => [
		'default' =>  'sourklou_ca',
	],
	'wgGlobalBlockingBlockXFF' => [
		'default' =>  true,
	],
	'wgApplyGlobalBlocks' => [
		'default' => true,
		'sourklou_metawiki' => false,
	],
		// GlobalUsage //
	'wgGlobalUsageDatabase' => [
		'default' => 'sourklou_enwiki',
	],
	// GlobalUserPage //
	'wgGlobalUserPageDBname' => [
		'default' => 'sourklou_metawiki',
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
		'default' =>  '/resources/assets/vikaspedia1.jpg',
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
 					'src' => "https://en.vikaspedia.org/images/8/8e/Vikaspedia.jpg",
 					'url' => 'https://en.vikaspedia.org/wiki/Vikaspedia',
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
		'default' => 'steward@vikaspedia.org',
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
	// Scribunto
	'wgCodeEditorEnableCore' => [
		'default' => true,
	],
	'wgScribuntoUseCodeEditor' => [
		'default' => true,
	],
	'wgScribuntoSlowFunctionThreshold' => [
		'default' => 0.99,
	],
	'wgScribuntoEngineConf' => [
		'default' => [
			'luasandbox' => [
				'class' => "Scribunto_LuaSandboxEngine",
 				'memoryLimit' => 52428800,
 				'cpuLimit' => 10,
				'profilerPeriod' => 0.02,
 				'allowEnvFuncs' => false,
 				'maxLangCacheSize' => 200
			],
			'luastandalone' => [
				'class' => "Scribunto_LuaStandaloneEngine",
 				'errorFile' => null,
 				'luaPath' => null,
 				'memoryLimit' => 52428800,
				'cpuLimit' => 10,
				'profilerPeriod' => 0.02,
 				'allowEnvFuncs' => false,
 				'maxLangCacheSize' => 200
			],
			'luaautodetect' => [
 				'factory' => 'Scribunto_LuaEngine::newAutodetectEngine',
 			],
		],
	],
	
		// TemplateStyles
	'wgTemplateStylesAllowedUrls' => [
		'default' => [
			'audio' => [
				'<^(?:https:)?//upload\\.wikimedia\\.org/wikipedia/commons/>',
				'<^(?:https:)?//static\\.miraheze\\.org/>',
			],
			'image' => [
				'<^(?:https:)?//upload\\.wikimedia\\.org/wikipedia/commons/>',
				'<^(?:https:)?//static\\.miraheze\\.org/>',
			],
			'svg' => [
				'<^(?:https:)?//upload\\.wikimedia\\.org/wikipedia/commons/[^?#]*\\.svg(?:[?#]|$)>',
				'<^(?:https:)?//static\\.miraheze\\.org/[^?#]*\\.svg(?:[?#]|$)>',
			],
			'font' => [],
			'namespace' => [
				'<.>',
			],
			'css' => [],
		],
	],
// Shell
 	'wgMaxShellMemory' => [
 		'default' => 2097152
 	],
 	// MobileFrontend
	'wgMFAutodetectMobileView' => [
		'default' => false,
	],
	'wgDefaultMobileSkin' => [
		'default' => 'minerva',
	],
	'wgMobileUrlTemplate' => [
		'default' => '',
	],
	'wgMFMobileHeader' => [
		'wmgUseMobileFrontend' => 'X-Subdomain',
	],
	'wgMFNoindexPages' => [
		'wmgUseMobileFrontend' => false,
	],
	'wgMFStopRedirectCookieHost' => [
		'wmgUseMobileFrontend' => $wi->hostname,
	],
// nofollow links
	'wgNoFollowLinks' => [
		'default' => true,
	],
	'wgNoFollowNsExceptions' => [
		'default' => [],
	],
	// Uncategorised
	'wgRandomGameDisplay' => [
		'default' => [
			'random_picturegame' => false,
			'random_poll' => false,
			'random_quiz' => false,
		],
	],
	'wgForceHTTPS' => [
		'default' => true,
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
				'editfilterhelper',
				'editfilltermanager' ,
				'filemover', 
				'ipblockexempt' ,
				'accountcreator' ,
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
		'+sourklou_enwiki' => [
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
'wgRemoveGroups' => [
		'default' => [
			'bureaucrat' => [
				'bot',
				'sysop',
			],
			'sysop' => [
			        'autopatrolled',
				'confirmed',
				'rollbacker',
				'editfilterhelper',
				'editfilltermanager' ,
				'filemover', 
				'ipblockexempt',
			],
		],
	],
];
