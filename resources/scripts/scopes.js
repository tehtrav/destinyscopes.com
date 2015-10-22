$(document).ready(function(){
	GetScopeData();
});

window.Scope = function( name, description, images, stats){
	this.Name = name || "";
	this.Description = description || "";
	this.Images = [];
	this.Stats = [];
	for(var i in images)
	{
		if(this.Images.length === 0){
			this.Images.push( new ScopeImage(images[i]) );
		} else {
			this.Images.push( new ScopeIcon(images[i]) );
		}
	}
	for(var i in stats)
	{
		this.Stats.push(
			new ScopeStat(
				stats[i][0],
				stats[i][1],
				(stats.length > 1 ? stats[i][2] : null),
				(stats.length > 2 ? stats[i][3] : null)
			)
		);
	}
}

window.ScopeImage = function(url){
	this.href = url;
};

window.ScopeIcon = function(url){
	this.href = url;
};

window.ScopeStat = function(name, value, isGraph, suffix){
	this.Name = name || "";
	this.Value = parseFloat(value || 0);
	this.Suffix = suffix || "";
	this.IsGraph = isGraph || true;
};


window.GetScopeData = function(){
	$.ajax({
		url: "resources/scripts/data/scopes.json",
		dataType: 'text',
		type: "GET",
		success: function(data){
			data = $.parseJSON(data.replace(/\r\n/g, "").replace(/\t/g, ""));
			var scopes = [];
			for(var scope in data){
				scopes.push( new Scope(
					data[scope].Name || "",
					data[scope].Description || "",
					data[scope].Image || [],
					data[scope].Stats || []
				));
			}
			RenderScopes(scopes);
			//RenderLegend(scopes);
		}
	});
};

window.RenderScopes = function(scopes){
	var $column = $(".primary-column");
	$column.html('');

	var $legend = $("#legend");
	$legend.html('<h4>Scopes</h4><ul></ul>');

	for(var i in scopes) {
		var $scope = $("<article></article>").addClass("item").attr('id', scopes[i].Name.toLowerCase().replace(/\s+/g, "-"));
		var $visual = $("<div></div>").addClass("visual");
		var $details = $("<div></div>").addClass("details");
		var $stats = $("<ul></ul>").addClass("stats");

		for(var si in scopes[i].Stats) {
			var $stat = $("<li>").addClass("stats-" + scopes[i].Stats[si].Name.toLowerCase().replace(/\s+/g, "-"));
			$stat.append($("<span></span>").addClass("label").text(scopes[i].Stats[si].Name));
			if(scopes[i].Stats[si].IsGraph) {
				var $amount = $("<span></span>").addClass("amount");
				var $graph = $("<div></div>").addClass("graph");
				var $plot = $("<div></div>").addClass("plot");

				$plot.addClass(scopes[i].Stats[si].Value >= 0 ? "positive" : "negative")
				$plot.attr("data-size", scopes[i].Stats[si].Value)
				$plot.css("width", Math.abs(scopes[i].Stats[si].Value) * 5)
				$plot.appendTo($graph);
				$graph.appendTo($stat);

				$amount.text((scopes[i].Stats[si].Value >= 0 ? "+" : "") + scopes[i].Stats[si].Value);
				$amount.appendTo($stat);
			}
			$stat.appendTo($stats);
		}

		$visual.append($('<img src="'+ scopes[i].Images[0].href +'"/>'));

		$details.append($('<div></div>').addClass("icon").css("background-image", "url("+ scopes[i].Images[1].href +");"));
		$details.append($('<h2></h2>').addClass('name').text(scopes[i].Name));
		$details.append($('<p></p>').addClass('description').text(scopes[i].Description));
		$details.appendTo($visual);
		$visual.appendTo($scope);
		$stats.appendTo($scope);
		$scope.appendTo($column);

		var $link = $("<li></li>");
		var $anchor = $("<a></a>").attr("href", "#" + scopes[i].Name.toLowerCase().replace(/\s+/g, "-")).html(scopes[i].Name);
		$anchor.appendTo($link);
		$link.appendTo("#legend ul");
	}
}

window.RenderLegend = function(scopes){
	var $legend = $("#legend");
	$legend.html('');

	for(var i in scopes) {
		var $scope = $("<li></li>");
		var $link = $("<a></a>").attr("href", "#" + scopes[i].Name.toLowerCase().replace(/\s+/g, "-")).html(scopes[i].Name);
	}

	$link.appendTo($scope);

	$scope.appendTo($legend);
}
