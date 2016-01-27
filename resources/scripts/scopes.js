$(document).ready(function(){
	GetScopeData();
    // in order to filter by scope
    // $("select#ScopeTypeFilter").change(function(){
    // 	FilterByScopeType($(this).val());
    // });
	//
    // $("select#ScopeMakeFilter").change(function(){
    // 	FilterByScopeType($(this).val());
    // });

	$("#legend :checkbox").click(function() {
		$(".scope").hide();
		$("#legend :checkbox:checked").each(function() {
			$( "." + $(this).val() ).show();
			console.log("." + $(this).val());
		});
	});

    $('#legend').affix({
		offset: {
		    top: function () {
				return (this.top = $('#global-header').outerHeight(true))
		    },
		    bottom: function () {
				return (this.bottom = $('#global-footer').outerHeight(true))
		    }
		}
	});

	$("#legend").width( $(".secondary-column").width() );
	$( window ).resize(function() {
		$("#legend").width( $(".secondary-column").width() );
	});

});



window.Scope = function( name, type, manufacturer, description, icon, zoom, images, stats){
	this.Name = name || "";
	this.Type = type || "";
	this.Manufacturer = manufacturer || "";
	this.Description = description || "";
	this.Icon = icon || "";
	this.Zoom = zoom || "";
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
					data[scope].Type || "",
					data[scope].Manufacturer || "",
					data[scope].Description || "",
					data[scope].Icon || "",
					data[scope].Zoom || "",
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
	$legend.append('<h4>Scopes</h4><ul class="nav"></ul>');

	for(var i in scopes) {
		var $scope = $("<article></article>").addClass("item").attr('id', scopes[i].Name.toLowerCase().replace(/\s+/g, "-"));
		$scope.addClass("scope");
		$scope.addClass("st-" + scopes[i].Type.toLowerCase().replace(/\s+/g, "-"));
		$scope.addClass("sm-" + scopes[i].Manufacturer.toLowerCase().replace(/\s+/g, "-"));
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

		$visual.append($('<img class="scope-ads" src="'+ scopes[i].Images[1].href +'"/>'));
		$visual.append($('<img class="scope-hip" src="'+ scopes[i].Images[0].href +'"/>'));

		if ( scopes[i].Zoom != 0 || scopes[i].Zoom != "" ) {
			$visual.append($('<p></p>').addClass('zoom').text("Magnification: " + scopes[i].Zoom + "x"));
		}

		$details.append($('<div></div>').addClass('icon').css('background-image', 'url(' + scopes[i].Icon + ')'));

		$details.append($('<h2></h2>').addClass('name').text(scopes[i].Name));
		$details.append($('<p></p>').addClass('description').text(scopes[i].Description));
		$details.appendTo($visual);
		$visual.appendTo($scope);
		$stats.appendTo($scope);
		$scope.appendTo($column);

		// Make Legend
		var $link = $("<li class='nav-item'></li>");
		var $anchor = $("<a class='nav-link'></a>").attr("href", "#" + scopes[i].Name.toLowerCase().replace(/\s+/g, "-")).html(scopes[i].Name);
		$link.addClass("scope");
		$link.addClass("st-" + scopes[i].Type.toLowerCase().replace(/\s+/g, "-"));
		$link.addClass("sm-" + scopes[i].Manufacturer.toLowerCase().replace(/\s+/g, "-"));
		$anchor.appendTo($link);
		$link.appendTo("#legend ul");

	}
}

window.FilterByScopeType = function(scopeType){
	if(scopeType.length == 0){
		// show all
		$("[data-scopetype").show();
	} else {
		// filter
		$("[data-scopetype]").hide();
		$("[data-scopetype='" + scopeType + "']").show();
	}
}
