<?php

// $wgWBRepoSettings['specialSiteLinkGroups'] = [ 'Commons' ];
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['repoUrl'] = 'https://data.vikaspedia.org';
$wgWBClientSettings['repositories']['']['repoDatabase'] = 'sourklou_datawiki';
$wgWBClientSettings['repositories']['']['changesDatabase'] = 'sourklou_datawiki';
$wgWBClientSettings['siteLinkGroups'] = [ 'Wikidata' ];
$wgWBClientSettings['siteGroup'] = 'Wikidata';
$wgWBClientSettings['TOOLBAR'] = [ 'Wiki' ];
$wgWBClientSettings['repoSiteName'] = 'Wikidata';
$wgWBClientSettings['repositories'] = [
		'' => [
			'repoDatabase' => 'sourklou_datawiki',
			'baseUri' => 'https://data.vikaspedia.org' . '/entity',
			'entityNamespaces' => [
				'item' => NS_MAIN,
				'property' => NS_MAIN,
			],
			'prefixMapping' => [ '' => '' ],
		]
];
$wgWBClientSettings['repoNamespaces'] = [
	'wikibase-item' => 'Item',
	'wikibase-property' => 'Property',
];
$wgWBClientSettings['purgeCacheBatchSize'] = 100;
$wgWBClientSettings['recentChangesBatchSize'] = 100;
$wgMediaInfoProperties = [
	'depicts' => 'P122',
];
