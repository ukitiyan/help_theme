/**
 * ownCloud - themes/settings/js/help.js
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Begood Technology Corp. <y-takahashi@begood-tech.com>
 * @copyright Begood Technology Corp. 2014
 */
(function ($, OC) {

	$(document).ready(function () {
		$("#app-navigation li > a").click( function() {
			$("#app-navigation li").each(function() {
				$(this).removeClass("active");
			});
			$("#frame").attr("src", $(this).attr("href")).load();
			$(this).parent("li").addClass("active");
			return false;
		});
		$("#frame").attr("src", $("#app-navigation li > a:first-child").attr("href")).load();
		$("#app-navigation li:first-child").addClass("active");
	});

})(jQuery, OC);