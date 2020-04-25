/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {
	"use strict";

	// Make the dashboard widgets sortable Using jquery UI
	$(".connectedSortable").sortable({
		placeholder: "sort-highlight",
		connectWith: ".connectedSortable",
		handle: ".card-header, .nav-tabs",
		forcePlaceholderSize: true,
		zIndex: 999999,
	});
	$(
		".connectedSortable .card-header, .connectedSortable .nav-tabs-custom"
	).css("cursor", "move");

	// jQuery UI sortable for the todo list
	$(".todo-list").sortable({
		placeholder: "sort-highlight",
		handle: ".handle",
		forcePlaceholderSize: true,
		zIndex: 999999,
	});

	// bootstrap WYSIHTML5 - text editor
	$(".textarea").summernote();

	$(".daterange").daterangepicker(
		{
			ranges: {
				Today: [moment(), moment()],
				Yesterday: [
					moment().subtract(1, "days"),
					moment().subtract(1, "days"),
				],
				"Last 7 Days": [moment().subtract(6, "days"), moment()],
				"Last 30 Days": [moment().subtract(29, "days"), moment()],
				"This Month": [
					moment().startOf("month"),
					moment().endOf("month"),
				],
				"Last Month": [
					moment().subtract(1, "month").startOf("month"),
					moment().subtract(1, "month").endOf("month"),
				],
			},
			startDate: moment().subtract(29, "days"),
			endDate: moment(),
		},
		function (start, end) {
			window.alert(
				"You chose: " +
					start.format("MMMM D, YYYY") +
					" - " +
					end.format("MMMM D, YYYY")
			);
		}
	);

	/* jQueryKnob */
	$(".knob").knob();

	// jvectormap data
	var visitorsData = {
		US: 398, //USA
		SA: 400, //Saudi Arabia
		CA: 1000, //Canada
		DE: 500, //Germany
		FR: 760, //France
		CN: 300, //China
		AU: 700, //Australia
		BR: 600, //Brazil
		IN: 800, //India
		GB: 320, //Great Britain
		RU: 3000, //Russia
	};
	// World map by jvectormap
	$("#world-map").vectorMap({
		map: "usa_en",
		backgroundColor: "transparent",
		regionStyle: {
			initial: {
				fill: "rgba(255, 255, 255, 0.7)",
				"fill-opacity": 1,
				stroke: "rgba(0,0,0,.2)",
				"stroke-width": 1,
				"stroke-opacity": 1,
			},
		},
		series: {
			regions: [
				{
					values: visitorsData,
					scale: ["#ffffff", "#0154ad"],
					normalizeFunction: "polynomial",
				},
			],
		},
		onRegionLabelShow: function (e, el, code) {
			if (typeof visitorsData[code] != "undefined")
				el.html(
					el.html() + ": " + visitorsData[code] + " new visitors"
				);
		},
	});
});
