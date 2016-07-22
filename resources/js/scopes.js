$(document).ready(function(){

	// Turn on HideSeek on search field
	$('.search input').hideseek({
		ignore: '.description',
		attribute: 'title'
	});

	// Focus on load
	$('.search input').focus();

	// Run function to ajax scope data
	GetScopeData();

	// Add .js class to body for js/no-js styling
	$(".no-js").removeClass("no-js").addClass("js");

	// When checkbox is clicked, hide all scopes
	// then show the checked ones by class
	$("#legend :checkbox").click(function() {
		$(".scope").hide();
		$("#legend :checkbox:checked").each(function() {
			$( "." + $(this).val() ).show();
			console.log("." + $(this).val());
		});
	});

    // Hide/Show of stats in list view
    $(function(){
        $("#show-stats-preference").change(function() {
            $(".scope-list").toggleClass("show-stats", this.checked)
        }).change();
    });


    $("input[type='checkbox']").each(function() {
        var mycookie = $.cookie($(this).attr('name'));
        if (mycookie && mycookie == "true") {
            $(this).prop('checked', mycookie);
        }
    });
    $("input[type='checkbox']").change(function() {
        $.cookie($(this).attr("name"), $(this).prop('checked'), {
            path: '/',
            expires: 365
        });
    });

	// Give #legend a width based on column size so it
	// doesn't collapse when given fixed positioning
	$("#legend").width( $(".secondary-column").width() );
	$( window ).resize(function() {
		$("#legend").width( $(".secondary-column").width() );
	});


	// Make modal on click
	$("body").on( "click", ".scope", function() {

		// store scroll in var
		var scrollPosition = $('body').scrollTop();

		// Add hash to URL
		window.location.hash = '#' + $(this).attr('hash');

		// Set scroll to stored
		$('html,body').scrollTop(scrollPosition);

		// $(this).attr('hash');

        // Build modal HTML from elements in the exisiting markup
		$("body").addClass("inspect-open").append("<div class='inspect'><div class='inspect--overlay'></div></div>");
		var $modal = $("<div class='inspect--window'></div>");
		var $container = $("<div></div>").addClass("inspect--container");
		var $image = $("<div></div>").addClass("inspect--image");
		var $info = $("<div></div>").addClass("inspect--info");

		$(this).find(".visual").clone().appendTo($image);
		$(this).find(".name").clone().appendTo($info);
		$(this).find(".description, .notes").clone().appendTo($info);
		$(this).find(".stats").clone().appendTo($info);

        $modal.append('<a class="inspect--close" href="#"></a>');
        $image.appendTo($container);
		$info.appendTo($container);
		$container.appendTo($modal);
		$modal.appendTo(".inspect");
	});

    // Close overlay when clicking close or outside modal
	$("body").on("click",".inspect--close, .inspect--overlay", function(e) {

		// store scroll in var
		var scrollPosition = $('body').scrollTop();

        // Remove URL hash
        window.location.hash = "";

		// Set scroll to stored
		$('html,body').scrollTop(scrollPosition);

        // Add CSS animation class
        $(".inspect").addClass("animate-out");
        $(".inspect-open").removeClass("inspect-open");
        // Remove markup once animation is complete
        setTimeout(function(){
            $(".inspect").remove();
        }, 310);
	});
});

window.Scope = function( name, type, manufacturer, description, icon, zoom, notes, images, stats){
	this.Name = name || "";
	this.Type = type || "";
	this.Manufacturer = manufacturer || "";
	this.Description = description || "";
	this.Icon = icon || "";
	this.Zoom = zoom || "";
	this.Notes = notes || "";
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
		url: "resources/data/scopes.json",
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
					data[scope].Notes || "",
					data[scope].Image || [],
					data[scope].Stats || []
				));
			}
			RenderScopes(scopes);
            hashScroll();
            adaptiveBackground();

			//RenderLegend(scopes);
		}
	});

};

window.RenderScopes = function(scopes){
	var $column = $("#scope-list");

	var $legend = $("#legend");
	//$legend.append('<h4>Scopes</h4><ul class="nav"></ul>');

	for(var i in scopes) {
		var $scope = $("<article></article>")
			.addClass("item").attr('id', scopes[i].Name.toLowerCase().replace(/\s+/g, "-").replace(/'/g, ''));
		$scope.attr('title', scopes[i].Name)
		$scope.addClass("scope");
		$scope.addClass("st-" + scopes[i].Type.toLowerCase().replace(/\s+/g, "-"));
		$scope.addClass("sm-" + scopes[i].Manufacturer.toLowerCase().replace(/\s+/g, "-"));
		var $visual = $("<div></div>").addClass("visual");
		var $details = $("<div></div>").addClass("details");
		var $stats = $("<ul></ul>").addClass("stats");

		for(var si in scopes[i].Stats) {
			var $stat = $("<li>").addClass("stats-" + scopes[i].Stats[si].Name.toLowerCase().replace(/\s+/g, "-").replace(/'/g, ''));
			$stat.append($("<span></span>").addClass("label").text(scopes[i].Stats[si].Name));
			if(scopes[i].Stats[si].IsGraph) {
				var $amount = $("<span></span>").addClass("amount");
				var $graph = $("<div></div>").addClass("graph");
				var $plot = $("<div></div>").addClass("plot");

				$plot.addClass(scopes[i].Stats[si].Value >= 0 ? "positive" : "negative")
				$plot.attr("data-size", scopes[i].Stats[si].Value)
				$plot.css("width", Math.abs(scopes[i].Stats[si].Value) * 3)
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
			$visual.append($('<p></p>').addClass('zoom').text(scopes[i].Zoom));
		}

        if ( scopes[i].Stats != "" ) {
            $scope.addClass("has-stats");
		}

		$details.append($('<div></div>').addClass('icon').css('background-image', 'url(' + scopes[i].Icon + ')'));

		$visual.appendTo($scope);
		$details.append($('<h2></h2>').addClass('name').text(scopes[i].Name));
        if ( scopes[i].Notes != "" ) {
            $details.append($('<p></p>').addClass('notes').text(scopes[i].Notes));
		}
		$details.append($('<p></p>').addClass('description').text(scopes[i].Description));
		$details.appendTo($scope);
		$stats.appendTo($scope);
		$scope.appendTo($column);

		// Make Legend
		var $link = $("<li class='nav-item'></li>");
		var $anchor = $("<a class='nav-link'></a>").attr("href", "#" + scopes[i].Name.toLowerCase().replace(/\s+/g, "-").replace(/'/g, '')).html(scopes[i].Name);
		$link.addClass("scope");
		$link.addClass("st-" + scopes[i].Type.toLowerCase().replace(/\s+/g, "-"));
		$link.addClass("sm-" + scopes[i].Manufacturer.toLowerCase().replace(/\s+/g, "-"));
		$anchor.appendTo($link);
		$link.appendTo("#legend ul");

	}
}



window.adaptiveBackground = function(scopeType){
	var abSettings      = {
		selector:             '.scope-ads',
		parent:               '.scope .zoom',
		//exclude:              [ 'rgb(0,0,0)', 'rgba(255,255,255)' ],
		normalizeTextColor:   false,
		normalizedTextColors:  {
			light:      "#fff",
			dark:       "#000"
			},
			lumaClasses:  {
			light:      "ab-light",
			dark:       "ab-dark"
		}
	};

	//$.adaptiveBackground.run(abSettings);

	$('img.scope-ads').on('ab-color-found', function(ev,payload) {
		$(this).parents('.scope').find('.zoom').css('background-color',payload.color);
		console.log(payload.color);   // The dominant color in the image.
	// console.log(payload.palette); // The color palette found in the image.
	// console.log(ev);   // The jQuery.Event object
	});

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

window.hashScroll = function(){
    // If hash is in the url, go to that place
    if(window.location.hash) {
        var hash = window.location.hash
        $(hash).click();
    }
}
