function updateViewportDimensions(){var t=window,i=document,e=i.documentElement,n=i.getElementsByTagName("body")[0],a=t.innerWidth||e.clientWidth||n.clientWidth,o=t.innerHeight||e.clientHeight||n.clientHeight;return{width:a,height:o}}function loadGravatars(){viewport=updateViewportDimensions(),viewport.width>=768&&jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",$(this).attr("data-gravatar"))})}var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var t={};return function(i,e,n){n||(n="Don't call this twice without a uniqueId"),t[n]&&clearTimeout(t[n]),t[n]=setTimeout(i,e)}}(),timeToWaitForLast=100;jQuery(document).ready(function($){loadGravatars(),viewport.width>=992&&$("#navbar .menu-item-has-children").hover(function(){$(this).find(".dropdown-menu").first().stop(!0,!0).slideDown(100)},function(){$(this).find(".dropdown-menu").first().stop(!0,!0).slideUp(110)}),$(".gform_button").addClass("btn btn-primary btn-lg"),$(".panel-heading a").each(function(){$(this).click(function(){$(this).parents("div.panel").hasClass("active")?$(this).parents("div.panel").removeClass("active"):($(".panel").removeClass("active"),$(this).parents("div.panel").addClass("active"))})}),$('[data-toggle="offcanvas"]').click(function(){$(".row-offcanvas").toggleClass("active")}),$(".cell_body td a").click(function(t){t.preventDefault(),t.stopImmediatePropagation()}),$(function(){$('[data-toggle="popover"]').popover()}),$(function(){$('[data-toggle="tooltip"]').tooltip()})});