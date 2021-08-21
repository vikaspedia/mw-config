<?php // This is DGE //
wfLoadExtensions( [
	'AbuseFilter',
//	'CategoryTree',
	'CentralAuth',
//	'CentralNotice',
	'CharInsert',
	'Cite',
        'ContactPage'
        'JsonConfig'
        'UserMerge'
        'Babel'
	'CiteThisPage',
	'CirrusSearch',
	'CodeEditor',
	'ConfirmEdit', 'ConfirmEdit/FancyCaptcha',
	'CommonsMetadata',
//	'DismissableSiteNotice',
	'Echo',
//	'EventLogging',
//	'EventStreamConfig',
	'Elastica',
	'Gadgets',
	'GlobalUsage',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalUserPage', 
	'GlobalPreferences', 
	'ImageMap',
	'InputBox',
	'Interwiki',
	'LocalisationUpdate',
	'MultimediaViewer',
//	'NewUserMessage',
	'Nuke',
	'OATHAuth',
	'ParserFunctions',
	'PageViewInfo',
	'Poem',
	'CSS',
	'CheckUser',
	'Renameuser',
	'ReplaceText',
	'Scribunto',
	'SandboxLink',
    'SiteMatrix',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TextExtracts',
	'TorBlock',
	'TitleBlacklist',
	'TemplateStyles',
	'UniversalLanguageSelector',
	'UploadWizard',
//	'FontAwesome',
    'MobileFrontend',
	'WikiEditor',] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
$wgScribuntoEngineConf['luastandalone']['luaPath'] = '/usr/bin/lua5.1';
// Ivestigating
	
