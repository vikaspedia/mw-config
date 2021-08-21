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
                'sourklou_afwiki' =>'af',
         'sourklou_arwiki' =>'ar',
         'sourklou_astwiki' =>'ast',
         'sourklou_barwiki' =>'bar',
          'sourklou_bewiki' =>'be',
         'sourklou_bgwiki' =>'bg',
          'sourklou_bswiki' =>'bs',
         'sourklou_cawiki' =>'ca',
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
	
	// Display Title
	'wgDisplayTitleHideSubtitle' => [
		'default' => false,
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
	'wgMainCacheType' => [
		'default' => CACHE_ACCEL,
	],
	'wgParserCacheType' => [
		'default' => CACHE_ACCEL,
	],
	'wgMessageCacheType' => [
		'default' => CACHE_ACCEL,
	],
	// UniversalLanguageSelector
	'wgULSAnonCanChangeLanguage' => [
		'default' => false,
	],
	'wgULSLanguageDetection' => [
		'default' => false,
	],
	'wgULSPosition' => [
		'default' => 'personal',
	],
	'wgULSGeoService' => [
		'wmgUseTranslate' => false,
		'wmgUseUniversalLanguageSelector' => false,
	],

	// RelatedArticles
	'wgRelatedArticlesFooterWhitelistedSkins' => [
		'default' => [
			'minerva',
			'timeless',
			'vector',
		],
	],
	'wgRelatedArticlesUseCirrusSearch' => [
		'wmgUseRelatedArticles' => false,
	],
        // Description2
	'wgEnableMetaDescriptionFunctions' => [
		'wmgUseDescription2' => true,
	],

	// DismissableSiteNotice
	'wgDismissableSiteNoticeForAnons' => [
		'default' => true,
	],
         // T3797
	'wgMaxUploadSize' => [
		'default' => 262144000,
	],
	'wgUploadSizeWarning' => [
		'default' => 262144000,
	],
	'wgAllowCopyUploads' => [
		'default' => false,
	],
	'wgCopyUploadsFromSpecialUpload' => [
		'default' => false,
	],
	'wgGenerateThumbnailOnParse' => [
		'default' => false,
	],
	'wgFileExtensions' => [
		'default' => [
			'djvu',
			'gif',
			'ico',
			'jpg',
			'jpeg',
			'ogg',
			'pdf',
			'png',
			'svg',
		],
	],
	'wgUseInstantCommons' => [
		'default' => true,
	],
	'wgMaxImageArea' => [
		'default' => '1.25e7',
	],
	'wgMirahezeCommons' => [
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
	'wgAbuseFilterCentralDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgAbuseFilterIsCentral' => [
		'default' => false,
		'metawiki' => true,
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
	'wgAbuseFilterEmergencyDisableThreshold' => [
		'default' => [
			'default' => 0.60,
		],
	],
	'wgAbuseFilterEmergencyDisableCount' => [
		'default' => [
			'default' => 40,
		],
	],
               // Anti-spam
	'wgAccountCreationThrottle' => [
		'default' => 5,
	],
               // https://www.mediawiki.org/wiki/Special:MyLanguage/Extension:SpamBlacklist#Block_list_syntax
	'wgBlacklistSettings' => [
		'default' => [
			'spam' => [
				'files' => [
					'https://meta.miraheze.org/w/index.php?title=Spam_blacklist&action=raw&sb_ver=1',
				],
			],
		],
	],
	'wgLogSpamBlacklistHits' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgTitleBlacklistLogHits' => [
		'default' => false,
		'sourklou_loginwiki' => true,
		'sourklou_metawiki' => true,
	],

           
               // ScratchBlocks
	'wgScratchBlocks4BlockVersion' => [
		'default' => 3,
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

        //Echo
        'wgEchoCrossWikiNotifications' => [
		'default' => true,
	],
	'wgEchoUseJobQueue' => [
		'default' => true,
	],
	'wgEchoSharedTrackingCluster' => [
		'default' => 'echo',
	],
	'wgEchoSharedTrackingDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgEchoUseCrossWikiBetaFeature' => [
		'default' => true,
	],
	'wgEchoMentionStatusNotifications' => [
		'default' => true,
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
		'default' => 'sourklou_commonswiki',
	],
	'wgSharedUploadDirectory' => [
		'default' => 'images',
	],
	'wgRepositoryBaseUrl' => [
		'default' => 'https://commons.vikaspedia.org/wiki/File:',
	],
	'wgUploadNavigationUrl' => [
		'default' => true,
		'sourklou_commonswiki' => 'https://commons.vikaspedia.org/Special:UploadWizard?uselang=$lang',
	],
	// Recent Changes
	'wgFeedLimit' => [
		'default' => 50,
	],
	'wgRCMaxAge' => [
		'default' => 180 * 24 * 3600,
	],
	'wgRCLinkDays' => [
		'default' => [ 1, 3, 7, 14, 30 ],
	],
	'wgRCLinkLimits' => [
		'default' => [ 50, 100, 250, 500 ],
	],

	'wgUseRCPatrol' => [
		'default' => true,
	],
	'wmgEnhancedRecentChanges' => [
		'default' => false,
	],
	
	
	// Checkuser
         'wgCheckUserForceSummary' => [
		'default' => true,
	],
	'wgCheckUserEnableSpecialInvestigate' => [
		'default' => true,
	],
	'wgCheckUserLogLogins' => [
		'default' => true,
	],
	'wgCheckUserCAtoollink' => [
		'default' => 'sourklou_metawiki',
	],
	'wgCheckUserGBtoollink' => [
		'default' => [
			'centralDB' => 'sourklou_metawiki',
			'groups' => [
				'steward',
			],
		],
	],
	'wgCheckUserCAMultiLock' => [
		'default' => [
			'centralDB' => 'sourklou_metawiki',
			'groups' => [
				'steward',
			],
		],
	],

	// Timezone //
	'wgLocaltimezone' => [
		'default' => 'UTC',
	],
	// CentralAuth // !becarefull
         'wgCentralAuthAutoCreateWikis' => [
		'default' => [
			'sourklou_metawiki',
			'sourklou_loginwiki',
		],
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
	'wgCentralAuthDatabase' => [
		'default' => 'sourklou_ca',
	],
	'wgCentralAuthEnableGlobalRenameRequest' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgCentralAuthEnableUserMerge' => [
		'default' => false,
		'sourklou_metawiki' => true,
	],
	'wgCentralAuthPreventUnattached' => [
		'default' => true,
	],
	'wgCentralAuthSilentLogin' => [
		'default' => true,
	],
	'wgGlobalRenameBlacklistRegex' => [
		'default' => true
	],
	'wgGlobalRenameBlacklist' => [
		'default' => 'https://meta.wikimedia.org/w/index.php?title=Global_rename_blacklist&action=raw'
	],
	
		// Interwiki //
	'wgInterwikiCentralDB' => [
		'default' => 'sourklou_metawiki',
	],
	'wgLocalInterwiki' => [
		'default' => '$lang',
	], 
		// Global Blocking //
		'wgApplyGlobalBlocks' => [
		'default' => true,
		'sourklou_metawiki' => false,
	],
	'wgGlobalBlockingDatabase' => [
		'default' => 'sourklou_ca', // use mhglobal for global blocks
	],
	
		// GlobalUsage //
	'wgGlobalUsageDatabase' => [
		'default' => 'sourklou_commonswiki',
	],
	// GlobalUserPage //
	'wgGlobalUserPageDBname' => [
		'default' => 'sourklou_metawiki',
	],
	'wgGlobalUserPageAPIUrl' => [
		'default' => 'https://meta.vikaspedia.org/api.php',
	],
         
        // Delete
	'wgDeleteRevisionsLimit' => [
		'default' => '1000', // databases don't have much memory - let's not overload them in future - set to 1,000 T5287
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
 					'src' => "https://commons.vikaspedia.org/images/8/8e/Vikaspedia.jpg",
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
	'wgScribuntoDefaultEngine' => [
		'default' => 'luastandalone',
	],
	'wgScribuntoEngineConf' => [
		'luastandalone' => [ 'memoryLimit' => 209715200, ],
	],
	'wgScribuntoUseGeSHi' => [
		'default' => true,
	],
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
	'wgPygmentizePath' => [
		'default' => '/home/sourklou/virtualenv/python/3.8/bin/pygmentize',
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
	
	// Vector
	'wgVectorDefaultSkinVersion' => [
		'default' => '1',
	],
	'wgVectorDefaultSkinVersionForExistingAccounts' => [
		'default' => '1',
	],
	'wgVectorDefaultSkinVersionForNewAccounts' => [
		'default' => '1',
	],
	'wgVectorResponsive' => [
		'default' => false,
	],
	'wgVectorUseWvuiSearch' => [
		'default' => false,
	],
	'wgVectorWvuiSearchOptions' => [
		'default' => [
			'showThumbnail' => true,
			'showDescription' => true,
		],
	],	
	// Statistics
	'wgArticleCountMethod' => [
		'default' => 'link',
	],
	// ReplaceText
	'wgReplaceTextResultsLimit' => [
		'default' => 250,
	],
	// Page Size
	'wgMaxArticleSize' => [
		'default' => 2048,
	],

	// ParserFunctions
	'wgPFEnableStringFunctions' => [
		'default' => false,
	],

];

$wgGroupPermissions['sysop']['edit'] = true;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['writer']['edit'] = true;
$wgGroupPermissions['writer']['createpage'] = true;
// Four days
$wgAutoConfirmAge = 86400*4; 
