//load RSS feeds using zRSS Feed

$(document).ready(function () {


	$('#ticker1').rssfeed('http://feeds.mashable.com/Mashable',{}, function(e) {
		$(e).find('div.rssBody').vTicker();
	});

	$('#ticker2').rssfeed('http://feeds.arstechnica.com/arstechnica/index',{}, function(e) {
		$(e).find('div.rssBody').vTicker({ showItems: 3});
	});	
	
	$('#ticker3').rssfeed('http://feeds.feedburner.com/techradar/us/all',{}, function(e) {
		$(e).find('div.rssBody').vTicker({ showItems: 3});
	});
	
});