/*! jQuery UI - v1.9.2 - 2016-04-04
 * http://jqueryui.com
 * Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.position.js, jquery.ui.autocomplete.js, jquery.ui.menu.js, jquery.ui.effect.js, jquery.ui.effect-pulsate.js
 * Copyright jQuery Foundation and other contributors; Licensed MIT */
function trackEvents(e, t, i, n) {
    var a = /pakwheels\.com/.test(window.location.hostname);
    if (a || console.log([e, t, i].toString()), window.dataLayer) {
        i || (i = "");
        var s = {
            event: "ga",
            gaCategory: e,
            gaAction: t,
            gaLabel: i
        };
        n ? dataLayer.push(s, {
            nonInteraction: 1
        }) : dataLayer.push(s)
    }
}
function trackEventAfterValidation(e, t, i, n) {
    $($(e).get(0).form).parsley().isValid() && trackEvents(t, i, n)
}
function trackVirtualPage(e, t, i) {
    window.dataLayer && dataLayer.push({
        event: e,
        virtualPageURL: t,
        virtualPageTitle: i
    })
}
function javascript_link(e) {
    return /^javascript/.test(e)
}
function cleanText(e) {
    return e && "" != e ? e.replace(/[^a-zA-Z0-9,\-\._]*$/, "").replace(/^[^a-zA-Z0-9,\-\._]*/, "").replace(/[0-9]/g, "").trim() : ""
}
function applyEventOnRefineSearch(e, t) {
    var i = e.closest(".accordion-group").find("a.accordion-toggle").text();
    i = cleanText(i);
    var n = cleanText(e.text());
    i && "" != i && n && "" != n && trackEvents(t, i, n)
}
function applyEventOnAccessoriesSubcategory(e, t) {
    var i = e.closest(".accordion-group").find("a.accordion-toggle").text();
    i = cleanText(i);
    var n = cleanText(e.text());
    i && "" != i && n && "" != n && trackEvents(t, "Sub-Category", n)
}
function priceRefineSearch(e) {
    $("#price_range").val() && "" != $("#price_range").val() && trackEvents(e, "Refine Search", "Price -> " + $("#price_range option:selected").text())
}
function trackEventOnLayoutChange(e) {
    $("button#grid").click(function() {
        trackEvents(e, "Layout Change", "Grid")
    }), $("button#list").click(function() {
        trackEvents(e, "Layout Change", "List")
    })
}
function loadLazy(e) {
    var e = $(e);
    e.length <= 0 || (e.removeClass("lazy"), e.is("img") ? e.attr("src", e.attr("data-original")).load() : e.css("background-image", "url('" + e.attr("data-original") + "')"))
}
function applyImagesLazyLoad(e) {
    var e = e || "img.lazy";
    $(e).lazyload({
        effect: "fadeIn",
        threshold: 500
    })
}
function lazyLoadOnSlide(e, t) {
    var i = e.find("li img");
    $(t).each(function(e) {
        var n = i[t[e]];
        loadLazy(n)
    })
}
function lazyLoadSliderImages(e, t) {
    if (!($(e).length <= 0)) {
        var i = $(e).find(t);
        i.each(function() {
            var e = $(this);
            e.attr("src") != e.attr("data-original") && loadLazy(e)
        })
    }
}
function applyLazyLoadOnMobileCards(e, t, i, n) {
    var n = n || "img.lazy",
        a = t || 100,
        s = i || 0,
        o = {
            container: $(e),
            threshold: s
        };
    $(n).each(function(t, i) {
        $.inviewport(i, o) ? $(i).lazyload({
            effect: "fadeIn",
            threshold: a
        }) : $(i).lazyload({
            effect: "fadeIn",
            container: e,
            threshold: s
        })
    })
}
function setCookies(e, t, i, n, a) {
    setCookie(e + "_search_key", t), setCookie(e + "_sortby", i), setCookie(e + "_query", n), setCookie(e + "_index", a)
}
function slideShowContent(e) {
    $(".gen_desc_large.active").each(function() {
        $(e).text().length <= 5 && $('#ReviewsTab a[href="#' + $(e).attr("id") + '"]').parent().hide()
    }), set_collapse_collide(), $("#ReviewsTab li").click(function() {
        $(".gen_desc_large.active").css("height", "150px"), set_collapse_collide()
    })
}
function setOneSignalUserIdInCookies() {
    OneSignal.getUserId(function(e) {
        e != $.cookie("onesignal_token") && $.cookie("onesignal_token", e, {
            expires: 1,
            path: "/"
        })
    })
}
function hideShowSelector(e, t) {
    $(e).hide(), $(t).show()
}
function set_collapse_collide() {
    var e = $(".gen_desc_large.active"),
        t = 150;
    actual_height_for_write_up = e.css("height", "auto").height(), e.height(t), t + 5 >= actual_height_for_write_up ? ($("#show_more_link").hide(), $("#show_less_link").hide(), e.css("height", "auto")) : ($("#show_more_link").show(), $("#show_less_link").hide(), e.css("height", t))
}
function slideContentMobile(e) {
    $(".gen_desc_large").each(function() {
        $(e).text().length <= 5 && $('#ReviewsTab a[href="#' + $(e).attr("id") + '"]').parent().hide()
    }), set_collapse_collide_mobile(), $("#ReviewsTab li").click(function() {
        $(".gen_desc_large").css("height", "200px"), set_collapse_collide_mobile()
    })
}
function set_collapse_collide_mobile() {
    var e = $(".gen_desc_large"),
        t = 200;
    actual_height_for_write_up = e.css("height", "auto").height(), e.height(t), t + 5 >= actual_height_for_write_up ? ($("#show_more_link").hide(), $("#show_less_link").hide(), e.css("height", "auto")) : ($("#show_more_link").show(), $("#show_less_link").hide(), e.css("height", t))
}
function setCookie(e, t) {
    $.cookie(e, t, {
        expires: .25,
        path: "/"
    })
}
function get_city_areas(e, t, i, n) {
    t = t ? t : "#UsedCityArea", i = i ? i : translate_string("Select City Area");
    var a = "#city_area_heading, #city_area_control, " + t + ", #mbs" + t.replace("#", "_"),
        s = t ? $(t) : $("#UsedCityArea"),
        o = $(e).val();
    if (s.length) {
        if ($(s).empty().append($("<option></option>").val("").html(i)), "" == o) return $(a).addClass("hide"), $(s).val(""), void 0;
        url = "Urdu" == pw_language ? "/ur/get_city_areas" : "/get_city_areas", $.ajax({
            type: "GET",
            data: {
                city_slug: o,
                get_id: n || !1
            },
            url: url,
            success: function(e) {
                $(s).append(e), $(a).removeClass("hide"), $(s).hasClass("filterable-select") || $(s).show(), $(t).mobileSelect("refresh")
            }
        })
    }
}
function setValueForNewsLetter(e) {
    var t = $(e).is(":checked");
    $("#check_for_newsletter").val(t)
}
function get_imported_models(e, t, i) {
    i = i || !1, $(t).empty(), url = "Urdu" == pw_language ? "/ur/car-import/imported_models" : "/car-import/imported_models", $.ajax({
        type: "GET",
        data: {
            manufacturer_id: e
        },
        url: url,
        success: function(e) {
            for (var n = e.imported_models, a = 0; a < n.length; a++) $("<option/>").val(n[a][0]).html(n[a][1]).appendTo($(t));
            i ? reloadSelectMenu(t, !0) : reloadChosen(t)
        }
    })
}
function get_duration_based_url(e, t) {
    var i = $(e),
        n = $(t);
    return i.length > 0 && n.length > 0 && ("" != i.val() || "" != n.val()) ? (from = i.val() ? i.val() : "Earlier", to = n.val() ? n.val() : "Later", "yr_" + from + "_" + to + "/") : ""
}
function quantityMultiplierForPrice(e, t, i, n, a, s, o, r, l, c, u) {
    var d, h, p = $(e).attr("field"),
        f = parseInt($(a).val()),
        c = parseFloat($(c).val());
    "ad-detail" == r ? ("increment" == n && (d = $(a).val(f + 1), h = f + 1, updateTotalPrice(h, t, i)), "decrement" == n && f > 1 && (d = $(a).val(f - 1), h = f - 1, updateTotalPrice(h, t, i))) : isNaN(f) ? $("input[name=" + p + "]").val(0) : ("increment" == n && (updateItemQuantity("/carts/increment_item", s, o), d = $(a).val(f + 1), h = f + 1, updateTotalPrice(h, t, i, l, c, u)), "decrement" == n && f > 1 && (updateItemQuantity("/carts/decrement_item", s, o), d = $(a).val(f - 1), h = f - 1, updateTotalPrice(h, t, i, l, c, u))), update_shipping_charges(s)
}
function updateItemQuantity(e, t, i) {
    $.ajax({
        type: "PUT",
        data: {
            cart_id: t,
            cart_item_id: i,
            authencity_token: $('meta[name="csrf-token"]').attr("content")
        },
        url: e,
        success: function(e) {
            $("#cart-count").html(e.cart_count), $("#cart-count").css("display", "inline-block"), $("#total-items-count").html(e.cart_count)
        }
    })
}
function updateTotalPrice(e, t, i, n, a, s) {
    var o = e * parseInt(t),
        a = a || 0,
        r = 0;
    $(i).val(o).text(translate_string("PKR") + o), $(".net-total-sum").each(function() {
        var e = $(this).val().replace(",", "");
        r += parseInt(e)
    }), $("#item-net-total").html(parseInt(r));
    var l = "amount" == $(s).val() ? a : Math.round(r * (a / 100)),
        c = r - l;
    $(n).text(l), $("#net-total-with-shipping").text(parseInt(c)), $("#buying_request_price").val(parseInt(r)), $("#buying_request_quantity").val(e)
}
function removeItemFromCart(e, t, i) {
    update_shipping_charges(e);
    var n = "/carts/remove_item_from_cart";
    $.ajax({
        type: "PUT",
        data: {
            product_id: t,
            cart_id: e,
            quantity: i,
            authencity_token: $('meta[name="csrf-token"]').attr("content")
        },
        url: n,
        success: function(e) {
            "" == e.error && hideShowSelector(add_to_car_ele, view_cart_ele)
        }
    })
}
function update_shipping_charges(e) {
    var t = "/carts/shipping_charges";
    $.ajax({
        type: "GET",
        data: {
            cart_id: e
        },
        url: t,
        success: function(e) {
            for (var t in e[0]) {
                var i = ".dealer_id_" + t;
                $(i).last().html(e[0][t])
            }
            $("#shipping_charges").html(e[1]), $("#net-total-with-shipping").html(+$("#net-total-with-shipping").html() + e[1])
        }
    })
}
function parsley_scroll_to_first_error() {
    var e = $(".parsley-custom-error-message:visible,.parsley-errors-list.filled li");
    if (e.length > 0) {
        var t = e.first().offset().top;
        $(window).scrollTop(t - 100)
    }
}
function direction() {
    return "Urdu" == pw_language ? "right" : "left"
}
function change_url_for_urdu(e) {
    return "Urdu" == pw_language ? "/ur" + e : e
}
function translate_string(e) {
    var t = {
            "please select car info": "please select car info",
            "Please enter valid number": "Please enter a valid number in the following format: 03001234567",
            "Please enter valid number ur": "Ø¨Ø±Ø§Û Ú©Ø±Ù… Ø¯Ø±Ø¬ Ø°ÛŒÙ„ Ø´Ú©Ù„ Ù…ÛŒÚº Ø§ÛŒÚ© Ø¯Ø±Ø³Øª Ù†Ù…Ø¨Ø± Ø¯Ø±Ø¬ Ú©Ø±ÛŒÚº: 03001234567",
            "please select car info ur": "please select car info",
            "Type to search ur": "ØªÙ„Ø§Ø´ Ú©Ø±Ù†Û’ Ú©Û’ Ù„Ø¦Û’ Ù¹Ø§Ø¦Ù¾ Ú©Ø±ÛŒÚº",
            "Type to search": "Type to search",
            "New Ad Saved ur": "Ù†ÛŒØ§ Ø§Ø´ØªÛØ§Ø± Ù…Ø­ÙÙˆØ¸",
            "New Ad Saved": "New Ad Saved",
            "Removed Save Ad ur": "Ø­Ø°Ù Ø´Ø¯Û Ù…Ø­ÙÙˆØ¸ Ø§Ø´ØªÛØ§Ø±",
            "Removed Save Ad": "Removed Save Ad",
            "Select an option ur": "Ø¢Ù¾Ø´Ù† Ù…Ù†ØªØ®Ø¨ Ú©Ø±ÛŒÚº",
            "Select an option": "Select an option",
            "Select Some Options ur": "Ú†Ù†Ø¯ Ø¢Ù¾Ø´Ù†Ø² Ù…Ù†ØªØ®Ø¨ Ú©Ø±ÛŒÚº",
            "Select Some Options": "Select Some Options",
            "No results match ur": "Ù…Ø¹Ø°Ø±ØªØŒ Ø¢Ù¾ Ú©Û’ ØªÙ„Ø§Ø´ Ú©Ø±Ø¯Û Ø§Ù„ÙØ§Ø¸ Ú©Ø§ Ú©ÙˆØ¦ÛŒ Ù†ØªÛŒØ¬Û Ù†ÛÛŒÚºÛ”",
            "No results match": "No results match",
            "Could not save Ad ur": "Ø§Ø´ØªÛØ§Ø± Ù…Ø­ÙÙˆØ¸ Ù†ÛÛŒÚº ÛÙˆØ§",
            "Could not save Ad": "Could not save Ad.",
            "Ad Saved ur": "Ø§Ø´ØªÛØ§Ø± Ù…Ø­ÙÙˆØ¸",
            "Ad Saved": "Ad Saved",
            "Popular Areas ur": "Ù…Ø´ÛÙˆØ± Ø¹Ù„Ø§Ù‚Û’",
            "Popular Areas": "Popular Areas",
            "Other Areas ur": "Ø¯ÛŒÚ¯Ø± Ø¹Ù„Ø§Ù‚Û’",
            "Other Areas": "Other Areas",
            "Popular Models": "Popular Models",
            "Popular Models ur": "Ù…Ø´ÛÙˆØ± Ù…Ø§ÚˆÙ„Ø²",
            "Other Models": "Other Models",
            "Other Models ur": "Ø¯ÛŒÚ¯Ø± Ù…Ø§ÚˆÙ„Ø²",
            Model: "Model",
            "Model ur": "Ù…Ø§ÚˆÙ„",
            Version: "Version",
            "Version ur": "ÙˆØ±Ú˜Ù†Ø²",
            "Make ur": "Ú©Ù…Ù¾Ù†ÛŒ",
            Make: "Make",
            "Removed from Saved Ads ur": "Ù…Ø­ÙÙˆØ¸ Ø§Ø´ØªÛØ§Ø±Ø§Øª Ø³Û’ Ø­Ø°Ù Ú©Ø±Ø¯ÛŒØ§ Ú¯ÛŒØ§",
            "Removed from Saved Ads": "Removed from Saved Ads",
            "All Models ur": "ØªÙ…Ø§Ù… Ù…Ø§ÚˆÙ„Ø²",
            "All Models": "All Models",
            "Remaining Characters ur": "Ø§Ù„ÙØ§Ø¸ Ú©ÛŒ Ú¯Ù†Ø¬Ø§Ø¦Ø´",
            "Remaining Characters": "Remaining Characters",
            "Price Range ur": "Ù‚ÛŒÙ…Øª Ú©ÛŒ Ø­Ø¯ / ØªÙ…Ø§Ù… Ù‚ÛŒÙ…ØªÛŒÚº",
            "Price Range": "Price Range",
            "Sub Category ur": "Ø°ÛŒÙ„ÛŒ Ø²Ù…Ø±Û",
            "Sub Category": "Sub Category",
            "manual ur": "Ù…ÛŒÙ†ÙˆØ¦Ù„",
            manual: "Manual",
            "automatic ur": "Ø¢Ù¹ÙˆÙ…ÛŒÙ¹Ú©",
            automatic: "Automatic",
            "cng ur": "Ø³ÛŒ Ø§ÛŒÙ† Ø¬ÛŒ",
            cng: "CNG",
            "diesel ur": "ÚˆÛŒØ²Ù„",
            diesel: "Diesel",
            "hybrid ur": "ÛØ§Ø¦Ø¨Ø±Úˆ",
            hybrid: "Hybrid",
            "lpg ur": "Ø§ÛŒÙ„ Ù¾ÛŒ Ø¬ÛŒ",
            lpg: "Lpg",
            "petrol ur": "Ù¾ÛŒÙ¹Ø±ÙˆÙ„",
            petrol: "Petrol",
            "Show More Suggestions ur": "Ù…Ø²ÛŒØ¯ ØªØ¬Ø§ÙˆÛŒØ²",
            "Show More Suggestions": "Show More Suggestions",
            "Show Less Suggestions ur": "Ú©Ù… ØªØ¬Ø§ÙˆÛŒØ²",
            "Show Less Suggestions": "Show Less Suggestions",
            "You can also use these suggestions ur": "Ø¢Ù¾ Ø§Ù† ØªØ¬Ø§ÙˆÛŒØ² Ú©Ø§ Ø§Ø³ØªØ¹Ù…Ø§Ù„ Ø¨Ú¾ÛŒ Ú©Ø± Ø³Ú©ØªÛ’",
            "You can also use these suggestions": "You can also use these suggestions",
            "year ur": "Ø³Ø§Ù„",
            year: "Year",
            "All Versions ur": "ØªÙ…Ø§Ù… ÙˆØ±Ú˜Ù†Ø²",
            "All Versions": "All Versions",
            "Popular Versions ur": "Ù…Ù‚Ø¨ÙˆÙ„ ÙˆØ±Ú˜Ù†Ø²",
            "Popular Versions": "Popular Versions",
            "Hundred(s) ur": "Ø³Ùˆ",
            "Hundred(s)": "Hundred(s)",
            "Thousand(s) ur": "ÛØ²Ø§Ø±",
            "Thousand(s)": "Thousand(s)",
            "Thousand ur": "ÛØ²Ø§Ø±",
            Thousand: "Thousand",
            "Lac ur": "Ù„Ø§Ú©Ú¾",
            Lac: "Lac",
            "Lacs ur": "Ù„Ø§Ú©Ú¾",
            Lacs: "Lacs",
            "Crore ur": "Ú©Ø±ÙˆÚ‘",
            Crore: "Crore ",
            "Billion ur": "Ø§Ø±Ø¨",
            Billion: "Billion ",
            " should be greater than '0' ur": " '0' Ø³Û’ Ø²ÛŒØ§Ø¯Û ÛÙˆÙ†Ø§ Ú†Ø§ÛØ¦Û’",
            " should be greater than '0'": " should be greater than '0'",
            " is too big. Please contact us ur": " Ø¨ÛØª Ø¨Ú‘ÛŒ ÛÛ’. ÛÙ… Ø³Û’ Ø±Ø§Ø¨Ø·Û Ú©Ø±ÛŒÚº",
            " is too big. Please contact us": " is too big. Please contact us",
            "Select City Area": "Select City Area",
            "Select City Area ur": "Ø¹Ù„Ø§Ù‚Û Ù…Ù†ØªØ®Ø¨ Ú©Ø±ÛŒÚº",
            "characters left ur": "Ø­Ø±ÙˆÙ Ø¨Ø§Ù‚ÛŒ ÛÛŒÚº",
            "characters left": "characters left",
            loading: "Loading...",
            "loading ur": "Ø§Ù†ØªØ¸Ø§Ø± ÙØ±Ù…Ø§Ø¦ÛŒÚºÛ”Û”Û”",
            "Done ur": "Ù…Ú©Ù…Ù„ Ú©Ø±ÛŒÚº",
            Done: "Done",
            "Reset ur": "Ø±ÛŒ Ø³ÛŒÙ¹",
            Reset: "Reset",
            "Cancel ur": "Ù…Ù†Ø³ÙˆØ® Ú©Ø±ÛŒÚº",
            Cancel: "Cancel",
            PKR: "PKR ",
            "PKR ur": "Ø±ÙˆÙ¾Û’ ",
            "Please enter a valid Chassis Number": "Please enter a valid Chassis Number.",
            "Please enter a valid Chassis Number ur": "Ø¨Ø±Ø§Û Ú©Ø±Ù… Ø§ÛŒÚ© Ø¯Ø±Ø³Øª Ú†ÛŒØ³ÛŒ Ù†Ù…Ø¨Ø± Ø¯Ø±Ø¬ Ú©Ø±ÛŒÚºÛ”",
            "Sorry, auction sheet for this chassis number is not available": "Sorry, auction sheet for this chassis number is not available.",
            "Sorry, auction sheet for this chassis number is not available ur": "Ù…Ø¹Ø°Ø±Øª ØŒ Ø§Ø³ Ú†ÛŒØ³ÛŒØ³ Ù†Ù…Ø¨Ø± Ú©ÛŒ Ø¢Ú©Ø´Ù† Ø´ÛŒÙ¹ Ø¯Ø³ØªÛŒØ§Ø¨ Ù†ÛÛŒÚº ÛÛ’Û”",
            "Auction Sheet didn't match with your Car Info. Please enter correct chassis number": "Auction Sheet didn't match with your Car Info. Please enter correct chassis number.",
            "Auction Sheet didn't match with your Car Info. Please enter correct chassis number ur": "Ø¢Ú©Ø´Ù† Ø´ÛŒÙ¹ Ø¢Ù¾ Ú©ÛŒ Ú©Ø§Ø± Ú©ÛŒ Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø³Û’ Ù…Ù…Ø§Ø«Ù„ Ù†ÛÛŒÚº ÛÛ’Û” Ø¨Ø±Ø§Û Ú©Ø±Ù… ØµØ­ÛŒØ­ Ú†ÛŒØ³ÛŒ Ù†Ù…Ø¨Ø± Ø¯Ø±Ø¬ Ú©Ø±ÛŒÚºÛ”"
        },
        i = "";
    return "Urdu" == pw_language && (i = " ur"), t[e + i]
}
function sendAppLink(e) {
    var t = /^(\+92|92|0)3[0-9]{9}$/g,
        i = $("#app_mobile_number"),
        n = $("#info_phone");
    $("#download_apps").on("shown.bs.modal", function() {
        $(i).removeClass("parsley-success").removeClass("parsley-error").val(""), $(n).removeClass("generic-red").removeClass("generic-green").html("")
    });
    var a = $(i).val(),
        s = new RegExp(t).test(a);
    return s ? ($(i).removeClass("parsley-error").addClass("parsley-success"), $(n).html(""), $.ajax({
        url: "/main/sms_app_link",
        type: "POST",
        data: {
            number: a
        },
        success: function() {
            $(n).removeClass("generic-red").addClass("generic-green").html("Link has been sent to your number."), $.cookie("app_promote", "close", {
                path: "/"
            }), $(".app-install-content").css("left", "-100%"), $(".app-install-tab").animate({
                left: "0"
            }, "slow"), trackEvents("User", "AppInstallDone", e)
        },
        error: function() {
            $(n).html("Link send failed. Please try again."), $(i).html("")
        }
    }), void 0) : ($(i).removeClass("parsley-success").addClass("parsley-error"), $(n).removeClass("generic-green").addClass("generic-red").html("Please enter a valid number."), void 0)
}
function initPopover() {
    $('[data-toggle="popover"]').popover({
        trigger: "manual",
        html: !0,
        animation: !1,
        content: function() {
            return $("#featured-tooltip-content").html()
        }
    }).on("mouseenter", function() {
        var e = this;
        $(this).popover("show"), $(this).hasClass("featured-popover") && trackEvents("FeatureAd", "Tooltip", "From - Feature Badge"), $(".popover").on("mouseleave", function() {
            $(e).popover("hide")
        })
    }).on("mouseleave", function() {
        var e = this;
        setTimeout(function() {
            $(".popover:hover").length || $(e).popover("hide")
        }, 300)
    })
}
function getSearchKey(e) {
    var t = $("#selected_search_key").val();
    return "pakwheels_" + e + "_" + (t && "" != t ? t : "home")
}
function addDataInJStorage(e, t) {
    $(document).on("pw:jstorage:loaded", function() {
        $.jStorage.set(e, t), $.jStorage.setTTL(e, 0)
    })
}
function toggleViewButton(e) {
    $("button#grid").length > 0 && $("button#list").length > 0 && (e ? ($("button#grid").addClass("active"), $("button#list").removeClass("active")) : ($("button#list").addClass("active"), $("button#grid").removeClass("active")))
}

function applyChangeViewCallbacksMid() {
    $("button#list").length > 0 && $("button#list").on("click", function() {
        $.cookie("search_view", "list"), toggleViewButton(!1), $("ul.search-results-mid").removeClass("grid-view")
    }), $("button#grid").length > 0 && $("button#grid").on("click", function() {
        $.cookie("search_view", "grid"), toggleViewButton(!0), $("ul.search-results-mid").addClass("grid-view")
    })
}
function openAddDetailOnClick(e) {
    void 0 == e && (e = ".search-results .ad-container"), $(e + " a,button, .image-gallery, .listing-action").click(function(e) {
        e.stopPropagation()
    }), $(e).click(function() {
        $(this).find(".ad-detail-path")[0].click()
    })
}
function getParams() {
    for (var e = location.search.replace("?", "").split("&"), t = {}, i = 0; i < e.length; i++) {
        var n = e[i].split("=")[0],
            a = e[i].split("=")[1];
        t[n] = a
    }
    return t
}
function stripPjaxParam(e) {
    var t = e.replace(/\?_pjax=[^&]+&?/, "?").replace(/_pjax=[^&]+&?/, "").replace(/[\?&]$/, "");
    return /\/$/.test(t) || (t += "/"), url_query_string = "", sort_filter_value = getSortFilter(), query_filter_value = getQueryFilter().replace("?q=", "q="), sort_filter_value.length > 0 && query_filter_value.length > 0 ? url_query_string = "?" + query_filter_value + "&" + sort_filter_value : (sort_filter_value.length > 0 || query_filter_value.length > 0) && (url_query_string = "?" + query_filter_value + sort_filter_value), extra_params = re_append_params(t, window.location.href), final_url = t + url_query_string, -1 != final_url.indexOf("?") && extra_params.length > 0 ? final_url += "&" + extra_params : extra_params.length > 0 && (final_url += "?" + extra_params), final_url
}
function getQueryFilter() {
    return $("#query_filter").length > 0 && "" != $("#query_filter").val() ? "?q=" + $("#query_filter").val() : ""
}
function getSortFilter() {
    var e = $("#sortby").val();
    return -1 != window.location.href.indexOf("sortby") ? "sortby=" + e.replace(/\s/, "+") : ""
}
function updateQueryStringParameter(e, t, i) {
    var n = new RegExp("([?|&])" + t + "=.*?(&|$)", "i"),
        a = -1 !== e.indexOf("?") ? "&" : "?";
    return e.match(n) ? e.replace(n, "$1" + t + "=" + i + "$2") : e + a + t + "=" + i
}
function clearAllFilters() {
    priceN = mlN = yearN = capacityN = ""
}
function setCityN(e) {
    cityN = "/", e && (cityN = "ct_" + e + "/")
}
function setPriceN(e) {
    priceN = "/";
    var t = /pr_.*_.*/;
    t.test(e) && (priceN = e)
}
function setRangeParam(e, t, i) {
    var n = e + "_" + t + "_" + i;
    switch (e) {
        case "pr":
            priceN = n;
            break;
        case "ml":
            mlN = n;
            break;
        case "ec":
            capacityN = n;
            break;
        case "yr":
            yearN = n
    }
}
function re_append_params(e, t) {
    var i = "",
        n = -1 != t.indexOf("?") ? t.split("?")[1].split("&") : "";
    if (0 == n.size) return i;
    for (var a = 0; a < n.length; a++) {
        var s = n[a].split("=");
        if ("q" != s[0] && "sortby" != s[0] && 0 != s[0].length) {
            if ("mileage" == s[0] && -1 != e.indexOf("/ml_")) continue;
            if ("price" == s[0] && -1 != e.indexOf("/pr_")) continue;
            if ("engine_capacity" == s[0] && -1 != e.indexOf("/ec_")) continue;
            if ("year" == s[0] && -1 != e.indexOf("/yr_")) continue;
            if ("transmission" == s[0] && -1 != e.indexOf("/tr_")) continue;
            if ("engine_type" == s[0] && -1 != e.indexOf("/eg_")) continue;
            if ("assembly" == s[0] && -1 != e.indexOf("/assembly_")) continue;
            if ("color" == s[0] && -1 != e.indexOf("/cl_")) continue;
            if ("body_type" == s[0] && -1 != e.indexOf("/bt_")) continue;
            if ("category" == s[0] && -1 != e.indexOf("/ctg_")) continue;
            if ("seller" == s[0] && -1 != e.indexOf("/seller_")) continue;
            if ("picture" == s[0] && -1 != e.indexOf("/picture_")) continue;
            if ("seller" == s[0] && -1 != e.indexOf("/seller_")) continue;
            if ("master_dealership" == s[0] && -1 != e.indexOf("/mds_")) continue;
            if ("city_area" == s[0] && -1 != e.indexOf("/ca_")) continue;
            if ("featured" == s[0] && -1 != e.indexOf("/featured_")) continue;
            if ("certified" == s[0] && -1 != e.indexOf("/cert_")) continue;
            if ("registration_city" == s[0] && -1 != e.indexOf("/rg_")) continue;
            if ("generation" == s[0] && -1 != e.indexOf("/gn_")) continue;
            if ("version_group" == s[0] && -1 != e.indexOf("/vg_")) continue;
            if ("version" == s[0] && -1 != e.indexOf("/vr_")) continue;
            if ("cc" == s[0] && -1 != e.indexOf("/ec_")) continue;
            if ("transit" == s[0] && -1 != e.indexOf("/transit_")) continue;
            i += s[0] + "=" + s[1], 0 != i.trim().length && (i += "&")
        }
    }
    return i.match(/&$/) && (i = i.substr(0, i.length - 1)), i
}
function doSubmitRangeSearch(e, t, i, n) {
    var a = $("#" + e + "_to").val(),
        s = $("#" + e + "_from").val(),
        o = parseInt(s || 0),
        r = parseInt(a || 0);
    if (o > r && "" != s && "" != a) {
        var l = o;
        o = r, r = l
    }
    "" == s && "" != a && (o = i), "" == a && "" != s && (r = n);
    var c = [e, o, r].join("_"),
        u = getRefineUrl(e + "_", c);
    if ("" == s && "" == a) {
        var d = u.split("/").filter(function(t) {
            return t.indexOf(e)
        });
        u = d.join("/")
    }
    return u = stripPjaxParam(u), callPjax(u), clearAllFilters(), !1
}
function doSubmitSearchPopup() {
    trackEvents("UsedCars", "Filter PopUp", "Search"), $("#search-filter-modal").modal("hide");
    var e = $("#City").val(),
        t = $("#price_range").val();
    setPriceN(t), setCityN(e);
    var i = getRefineUrl("");
    i = stripPjaxParam(i), priceN = "", cityN = "", callPjax(i)
}
function addToJStorage(e) {
    $(document).on("pw:jstorage:loaded", function() {
        var t = getSearchKey(e);
        $.jStorage.set(t, !0), $.jStorage.setTTL(t, 0)
    })
}
function onSearchReady(e, t) {
    var i = $("#page").val();
    "3" == i && $.jStorage && !$.jStorage.get(getSearchKey(e), !1) && (window.setTimeout(function() {
        $("#email_alert_div").modal()
    }, 1e4), $("#email_alert_div").on("hidden", function() {
        var t = getSearchKey(e);
        $.jStorage.set(t, !0), $.jStorage.setTTL(t, 864e6)
    }), $("#popup_alert").parsley()), t ? applyImagesLazyLoad() : applyImagesLazyLoad("img.lazy"), applyChangeViewCallbacksMid(), openAddDetailOnClick()
}
function getCurrentUrl() {
    return window.location.origin || (window.location.origin = window.location.protocol + "//" + window.location.host), $("#search_url").length > 0 ? window.location.origin + $("#search_url").val() : window.location.href
}
function getDirtySearchPath() {
    return $("#search_url").length > 0 ? $("#search_url").val() : window.location.pathname
}
function getRefineUrl(e, t, i) {
    e = "" == e ? null : e;
    var n = getDirtySearchPath().split("?")[0].split("/").filter(function(t, i, n) {
        return t && -1 == t.indexOf(e) && n.indexOf(t) == i
    });
    return void 0 != i && (n = n.filter(function(e, t, n) {
        return e && -1 == e.indexOf(i) && n.indexOf(e) == t
    })), n = n.concat(t.split("/")), window.location.protocol + "//" + window.location.host + "/" + n.join("/")
}
function callPjax(e, t, i) {
    t || (t = {}), !/\?.*new=true/.test(e) && /\?.*new=true/.test(window.location.href) && (e = e + (/\?/.test(e) ? "&" : "?") + "new=true"), i = i || "[data-pjax-container]", $.support.pjax ? $.pjax({
        url: e,
        container: i,
        data: t,
        timeout: 2e3
    }) : window.location.href = e
}
function pjaxInitialize(e, t, i) {
    $(document).on("pjax:timeout", function() {
        return !1
    }), $(document).on("pjax:send", function() {
        1 == i ? $(".white_overlay").removeClass("hide") : ($(e).addClass("white_overlay"), $(".ajax-search-loader").show())
    }), $(document).on("pjax:before:content", function() {
        1 == i ? $(".white_overlay").addClass("hide") : ($(e).removeClass("white_overlay"), $(".ajax-search-loader").hide()), t && $(window).scrollTop(0)
    })
}
function applyPjax(e, t, i, n) {
    var n = n || !1,
        a = t || "[data-pjax-container]",
        s = i || "[data-pjax-enable] a";
    $.support.pjax && ($(document).pjax(s, a, {
        scrollTo: !1,
        timeout: 2e3
    }), pjaxInitialize(a, !e, n))
}
function setPjaxDefaults() {
    $.pjax.defaults && ($.pjax.defaults.maxCacheLength = 0, $.pjax.defaults.push = !0, $.pjax.defaults.replace = !1)
}
function setNextPrevCookies() {
    $(".next-prev a").click(function() {
        $(this).attr("current-index") && $("#cookie_prefix").val() && setCookies($("#cookie_prefix").val(), $("#selected_search_key").val(), $("#sortby").val(), $("#selected_query").val(), parseInt($(this).attr("current-index")))
    })
}
function addValidatorToField(e, t, i) {
    var n = function() {
        jQuery(e) && jQuery(e).parsley() && jQuery(e).parsley().addAsyncValidator(i, function(t) {
            response = $.parseJSON(t.responseText);
            var i = $(e).parsley();
            return window.ParsleyUI.removeError(i, "errorField"), response.error && "" != response.error ? (window.ParsleyUI.addError(i, "errorField", response.error), void 0) : 200
        }, t)
    };
    $.fn.parsley ? n() : $(document).on("pw:parsley:loaded", n)
}
function updateSearchBar(e, t, i, n, a, s) {
    $(i).children("li").removeClass("active"), $(e).parent().addClass("active"), $(n).hide(), $(t).show(), $("#top-search-heading .heading h1").html(a), $("#top-search-heading .heading p").html(s)
}
function applyDynamicLightGallery(e) {
    $(e).click(function() {
        gallery_info = $(this).data().galleryinfo, $(this).lightGallery({
            dynamic: !0,
            html: !0,
            showThumbByDefault: !0,
            addClass: "showThumbByDefault",
            loop: !0,
            counter: !0,
            dynamicEl: gallery_info
        })
    })
}
function handle_phone_click_on_gallery(e, t, i, n, a, s) {
    return s = s || !1, shouldShowSignInPopUp(s) ? ($("#lg-close").click(), showSignInPopUp(), void 0) : (handlePhoneClickOnGallery(e), adPhoneCount(t), trackEvents(i, n, a), incrementPhoneNumberClickCount(), void 0)
}
function putInFocusIfNotInFocus(e) {
    $(e).is(":focus") || $(e).focus()
}
function readCookie(e) {
    for (var t = e + "=", i = document.cookie.split(";"), n = 0; n < i.length; n++) {
        for (var a = i[n];
            " " == a.charAt(0);) a = a.substring(1, a.length);
        if (0 == a.indexOf(t)) return a.substring(t.length, a.length)
    }
    return null
}
function createCookie(e, t, i) {
    if (i) {
        var n = new Date;
        n.setTime(n.getTime() + 1e3 * 60 * 60 * 24 * i);
        var a = "; expires=" + n.toGMTString()
    } else var a = "";
    document.cookie = e + "=" + t + a + "; path=/"
}
function functionName(e) {
    return e.name.replace("(", "").replace(")", "")
}
function hasExecutedBefore(e) {
    return functionName(e) in (window.pw_executed_functions || {})
}
function logExecutedFunction(e) {
    window.pw_executed_functions = window.pw_executed_functions || {}, window.pw_executed_functions[functionName(e)] = !0
}
function executeOnce(e, t) {
    t = Array.from(arguments), e = t.shift(), hasExecutedBefore(e) || (e.apply(null, t), logExecutedFunction(e))
}
function phoneNumberClickCount() {
    var e = readCookie("show_phone_number_click_count");
    return parseInt(e) || 0
}
function incrementPhoneNumberClickCount() {
    var e = phoneNumberClickCount() + 1;
    createCookie("show_phone_number_click_count", e, 365)
}
function shouldShowSignInPopUp(e) {
    return e ? !1 : phoneNumberClickCount() >= 2
}
function shouldDisablePopUp(e) {
    return e ? !1 : phoneNumberClickCount() >= 1
}
function showSignInPopUp() {
    $("#sign_in_pop_up").modal({
        backdrop: "static",
        keyboard: !1
    })
}
function initPhoneNumberPopUp(e) {
    var t = $(".phone_number_btn");
    shouldDisablePopUp(e) || t.popover({
        trigger: "focus"
    }), t.click(function() {
        return shouldDisablePopUp(e) && t.popover("disable"), shouldShowSignInPopUp(e) ? (adPhoneCount(null), t.popover("disable"), showSignInPopUp(), void 0) : (adPhoneCount($(this).data("url")), incrementPhoneNumberClickCount(), putInFocusIfNotInFocus(this), void 0)
    })
}
function saveAd(e, t, i) {
    saveAdServer("/users/save-ad", e, t);
    var n = ".not-saved-list",
        a = ".saved-list";
    void 0 != i && (n = i + " " + n, a = i + " " + a), $(n).hide(), $(a).fadeIn(500)
}
function removeSavedAd(e, t, i, n, a) {
    var s = ".not-saved-list",
        o = ".saved-list";
    void 0 != t && (s = t + " " + s, o = t + " " + o), n ? ($(t).parents(".classified-listing").fadeOut(), $(i).remove(), a && trackEvents(a, "Remove - SavedAds", "Saved-Ads")) : ($(s).fadeIn(500), $(o).hide()), url = "/users/remove-selected-ads?ad_id=" + e, $.ajax({
        url: url,
        success: function() {}
    })
}
function saveAdServer(e, t, i) {
    $(i).html("Ad Saved"), $.ajax({
        url: e,
        data: {
            ad_listing_id: t
        },
        error: function() {
            $(i).html("Error!!"), $(i).css("color", "red")
        }
    })
}
function parsley_scroll_to_first_error() {
    var e = $(".parsley-custom-error-message:visible,.parsley-errors-list.filled li");
    if (e.length > 0) {
        var t = e.first().offset().top;
        $(window).scrollTop(t - 100)
    }
}
function setNextPrevCookies() {
    $(".next-prev a").click(function() {
        $(this).attr("current-index") && $("#cookie_prefix").val() && setCookies($("#cookie_prefix").val(), $("#selected_search_key").val(), $("#sortby").val(), $("#selected_query").val(), parseInt($(this).attr("current-index")))
    })
}
function includeAuctionSheetVerifiedInInspectedCars() {
    var e = $("div.filter_66 ul");
    if (0 === e.length) return $("div.filter_69").closest(".accordion-group").show(), void 0;
    var t = $("div.filter_69 li input:checkbox").prop("checked");
    t ? $(e).prepend($("div.filter_69 li")) : $(e).append($("div.filter_69 li"))
}
function includeDirectCarsInInspectedCars() {
    var e = $("div.filter_66 ul");
    if (0 === e.length) return $("div.filter_69").closest(".accordion-group").show(), void 0;
    var t = $("div.filter_150 li input:checkbox").prop("checked");
    t ? $(e).prepend($("div.filter_150 li")) : $(e).append($("div.filter_150 li"))
}
function onCarSubmit() {
    var e = change_url_for_urdu("/used-cars/search/-/");
    return e += vehicleSearchFilter("#UsedManID", "#UsedModelID", "#UsedVersionID", "", "car"), $("#UsedCity").length > 0 && "" != $("#UsedCity").val() && (e += "ct_" + $("#UsedCity").val() + "/"), "" != $("#price_range").val() && (e += $("#price_range").val() + "/"), e += get_duration_based_url("#YearFrom", "#YearTo"), $("#home-query").length > 0 && "" != $("#home-query").val() ? (e += "?q=" + encodeURIComponent($("#home-query").val()).replace(/%20/g, "+"), window.location.href = e, !1) : (callPjax(e), !1)
}
function submitBikeSearch() {
    if ($("#YearFrom").length > 0 && $("#YearTo").length > 0 && "" != $("#YearFrom").value && "" != $("#YearTo").value && parseInt($("#YearFrom").val()) > parseInt($("#YearTo").val())) return alert("Year is not valid."), !1;
    var e = change_url_for_urdu("/used-bikes/search/-/"),
        t = "";
    return t += vehicleSearchFilter("#UsedManID", "#UsedModelID", "", "", "bike"), $("#UsedCity").length > 0 && "" != $("#UsedCity").val() && (t += "ct_" + $("#UsedCity").val() + "/"), "" != $("#price_range").val() && (t += $("#price_range").val() + "/"), t += get_duration_based_url("#YearFrom", "#YearTo"), t = "" != t ? e + t : e, $("#home-query").length > 0 && "" != $("#home-query").val() ? (t += "?q=" + $("#home-query").val().replace(/ /g, "+"), window.location.href = t, !1) : (callPjax(t), !1)
}
function onAccessorySubmit() {
    var e = change_url_for_urdu("/accessories/search/-/");
    return "" != $("#City").val() && (e += "ct_" + $("#City").val() + "/"), $("#search_key").length > 0 && "" != $("#search_key").val() && "e-g lights, tyres" != $("#search_key").val() && (e += "?q=" + $("#search_key").val()), callPjax(e), !1
}
function priceToWords(e) {
    if (!e || 1e3 > e) return e;
    var t = 0,
        i = "";
    return e / 1e7 >= 1 ? (t = e / 1e7, i = " Crore") : e / 1e5 >= 1 ? (t = e / 1e5, i = " Lac") : e / 1e3 >= 1 && (t = e / 1e3, i = " Thousand"), t = t.toFixed(2), parseFloat(t) <= 1 ? 1 + i : parseFloat(t) + i + "s"
}
function initializeRangeFilters() {
    function e(e) {
        return function(t, i) {
            return i(e)
        }
    }
    $(".rng-hintify").each(function(t, i) {
        for (var n = $(i), a = n.data("hintify"), s = parseInt(a.min), o = parseInt(a.max), r = parseInt(a.step), l = a.add_comma, c = [], t = s; o >= t; t += r) l ? c.push(t.toLocaleString()) : c.push(t);
        limit = o - s + 1 > 25 ? 25 : o - s + 1, n.typeahead({
            hint: !0,
            minLength: 0,
            highlight: !0
        }, {
            source: e(c),
            limit: limit
        }), n.keypress(function(e) {
            13 == e.which && $(n).parent().siblings(".btn").click()
        }).on("click", function() {
            $(this).focus()
        }).numeric()
    }), $("#pr_to, #pr_from").on("keyup mousedown typeahead:selected", function() {
        var e = $("#pr_to").val(),
            t = $("#pr_from").val();
        if ($("#pr_hint").text(""), e || t) {
            var i = "";
            e = e.replace(/,/g, ""), t = t.replace(/,/g, ""), i = e ? t ? priceToWords(t) + " to " + priceToWords(e) : "< " + priceToWords(e) : "> " + priceToWords(t), $("#pr_hint").text(i)
        }
    }).on("typeahead:selected", function(e, t) {
        $(this).typeahead("val", t.replace(/,/g, ""))
    }), $('.sidebar-filters [type="submit"]').prop("disabled", "")
}
function toLower(e) {
    /[A-Z]+/.test(e.val()) && e.val(e.val().toLowerCase())
}
function validateParsleyForm() {
    return $("form.user-profile-validation").parsley("isValid") ? ($(".btn-primary").attr("disabled", "disabled"), $("input").parsley("validate"), setTimeout(function() {
        $(".btn-primary").removeAttr("disabled"), $("input").parsley("validate")
    }, 100), !0) : !1
}
function loadSavedAdAndEditTemplates(e, t, i, n) {
    for (var a = 0; a < i.length; a++) {
        ad_id = i[a], used_car_id = n[a];
        var s = null;
        if (-1 != t.indexOf(ad_id)) {
            var o = $("#edit_ad_template").html();
            s = Mustache.render(unescape(o), {
                ad_id: ad_id,
                used_car_id: used_car_id
            })
        } else {
            var r = $("#saved_ads_template").html(),
                l = {};
            l = -1 != e.indexOf(ad_id) ? {
                ad_id: ad_id,
                logged_in: "",
                ad_saved: "display:none;",
                not_ad_saved: ""
            } : {
                ad_id: ad_id,
                logged_in: "logged-in-user",
                ad_saved: "",
                not_ad_saved: "display:none;"
            }, s = Mustache.render(r, l)
        }
        $("#div_action_" + ad_id).html(s)
    }
}! function(e, t) {
    function i(t, i) {
        var a, s, o, r = t.nodeName.toLowerCase();
        return "area" === r ? (a = t.parentNode, s = a.name, t.href && s && "map" === a.nodeName.toLowerCase() ? (o = e("img[usemap=#" + s + "]")[0], !!o && n(o)) : !1) : (/input|select|textarea|button|object/.test(r) ? !t.disabled : "a" === r ? t.href || i : i) && n(t)
    }
    function n(t) {
        return e.expr.filters.visible(t) && !e(t).parents().andSelf().filter(function() {
            return "hidden" === e.css(this, "visibility")
        }).length
    }
    var a = 0,
        s = /^ui-id-\d+$/;
    e.ui = e.ui || {}, e.ui.version || (e.extend(e.ui, {
        version: "1.9.2",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            NUMPAD_ADD: 107,
            NUMPAD_DECIMAL: 110,
            NUMPAD_DIVIDE: 111,
            NUMPAD_ENTER: 108,
            NUMPAD_MULTIPLY: 106,
            NUMPAD_SUBTRACT: 109,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), e.fn.extend({
        _focus: e.fn.focus,
        focus: function(t, i) {
            return "number" == typeof t ? this.each(function() {
                var n = this;
                setTimeout(function() {
                    e(n).focus(), i && i.call(n)
                }, t)
            }) : this._focus.apply(this, arguments)
        },
        scrollParent: function() {
            var t;
            return t = e.ui.ie && /(static|relative)/.test(this.css("position")) || /absolute/.test(this.css("position")) ? this.parents().filter(function() {
                return /(relative|absolute|fixed)/.test(e.css(this, "position")) && /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x"))
            }).eq(0) : this.parents().filter(function() {
                return /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x"))
            }).eq(0), /fixed/.test(this.css("position")) || !t.length ? e(document) : t
        },
        zIndex: function(i) {
            if (i !== t) return this.css("zIndex", i);
            if (this.length)
                for (var n, a, s = e(this[0]); s.length && s[0] !== document;) {
                    if (n = s.css("position"), ("absolute" === n || "relative" === n || "fixed" === n) && (a = parseInt(s.css("zIndex"), 10), !isNaN(a) && 0 !== a)) return a;
                    s = s.parent()
                }
            return 0
        },
        uniqueId: function() {
            return this.each(function() {
                this.id || (this.id = "ui-id-" + ++a)
            })
        },
        removeUniqueId: function() {
            return this.each(function() {
                s.test(this.id) && e(this).removeAttr("id")
            })
        }
    }), e.extend(e.expr[":"], {
        data: e.expr.createPseudo ? e.expr.createPseudo(function(t) {
            return function(i) {
                return !!e.data(i, t)
            }
        }) : function(t, i, n) {
            return !!e.data(t, n[3])
        },
        focusable: function(t) {
            return i(t, !isNaN(e.attr(t, "tabindex")))
        },
        tabbable: function(t) {
            var n = e.attr(t, "tabindex"),
                a = isNaN(n);
            return (a || n >= 0) && i(t, !a)
        }
    }), e(function() {
        var t = document.body,
            i = t.appendChild(i = document.createElement("div"));
        i.offsetHeight, e.extend(i.style, {
            minHeight: "100px",
            height: "auto",
            padding: 0,
            borderWidth: 0
        }), e.support.minHeight = 100 === i.offsetHeight, e.support.selectstart = "onselectstart" in i, t.removeChild(i).style.display = "none"
    }), e("<a>").outerWidth(1).jquery || e.each(["Width", "Height"], function(i, n) {
        function a(t, i, n, a) {
            return e.each(s, function() {
                i -= parseFloat(e.css(t, "padding" + this)) || 0, n && (i -= parseFloat(e.css(t, "border" + this + "Width")) || 0), a && (i -= parseFloat(e.css(t, "margin" + this)) || 0)
            }), i
        }
        var s = "Width" === n ? ["Left", "Right"] : ["Top", "Bottom"],
            o = n.toLowerCase(),
            r = {
                innerWidth: e.fn.innerWidth,
                innerHeight: e.fn.innerHeight,
                outerWidth: e.fn.outerWidth,
                outerHeight: e.fn.outerHeight
            };
        e.fn["inner" + n] = function(i) {
            return i === t ? r["inner" + n].call(this) : this.each(function() {
                e(this).css(o, a(this, i) + "px")
            })
        }, e.fn["outer" + n] = function(t, i) {
            return "number" != typeof t ? r["outer" + n].call(this, t) : this.each(function() {
                e(this).css(o, a(this, t, !0, i) + "px")
            })
        }
    }), e("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (e.fn.removeData = function(t) {
        return function(i) {
            return arguments.length ? t.call(this, e.camelCase(i)) : t.call(this)
        }
    }(e.fn.removeData)), function() {
        var t = /msie ([\w.]+)/.exec(navigator.userAgent.toLowerCase()) || [];
        e.ui.ie = t.length ? !0 : !1, e.ui.ie6 = 6 === parseFloat(t[1], 10)
    }(), e.fn.extend({
        disableSelection: function() {
            return this.bind((e.support.selectstart ? "selectstart" : "mousedown") + ".ui-disableSelection", function(e) {
                e.preventDefault()
            })
        },
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        }
    }), e.extend(e.ui, {
        plugin: {
            add: function(t, i, n) {
                var a, s = e.ui[t].prototype;
                for (a in n) s.plugins[a] = s.plugins[a] || [], s.plugins[a].push([i, n[a]])
            },
            call: function(e, t, i) {
                var n, a = e.plugins[t];
                if (a && e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType)
                    for (n = 0; a.length > n; n++) e.options[a[n][0]] && a[n][1].apply(e.element, i)
            }
        },
        contains: e.contains,
        hasScroll: function(t, i) {
            if ("hidden" === e(t).css("overflow")) return !1;
            var n = i && "left" === i ? "scrollLeft" : "scrollTop",
                a = !1;
            return t[n] > 0 ? !0 : (t[n] = 1, a = t[n] > 0, t[n] = 0, a)
        },
        isOverAxis: function(e, t, i) {
            return e > t && t + i > e
        },
        isOver: function(t, i, n, a, s, o) {
            return e.ui.isOverAxis(t, n, s) && e.ui.isOverAxis(i, a, o)
        }
    }))
}(jQuery),
function(e, t) {
    var i = 0,
        n = Array.prototype.slice,
        a = e.cleanData;
    e.cleanData = function(t) {
        for (var i, n = 0; null != (i = t[n]); n++) try {
            e(i).triggerHandler("remove")
        } catch (s) {}
        a(t)
    }, e.widget = function(i, n, a) {
        var s, o, r, l, c = i.split(".")[0];
        i = i.split(".")[1], s = c + "-" + i, a || (a = n, n = e.Widget), e.expr[":"][s.toLowerCase()] = function(t) {
            return !!e.data(t, s)
        }, e[c] = e[c] || {}, o = e[c][i], r = e[c][i] = function(e, i) {
            return this._createWidget ? (arguments.length && this._createWidget(e, i), t) : new r(e, i)
        }, e.extend(r, o, {
            version: a.version,
            _proto: e.extend({}, a),
            _childConstructors: []
        }), l = new n, l.options = e.widget.extend({}, l.options), e.each(a, function(t, i) {
            e.isFunction(i) && (a[t] = function() {
                var e = function() {
                        return n.prototype[t].apply(this, arguments)
                    },
                    a = function(e) {
                        return n.prototype[t].apply(this, e)
                    };
                return function() {
                    var t, n = this._super,
                        s = this._superApply;
                    return this._super = e, this._superApply = a, t = i.apply(this, arguments), this._super = n, this._superApply = s, t
                }
            }())
        }), r.prototype = e.widget.extend(l, {
            widgetEventPrefix: o ? l.widgetEventPrefix : i
        }, a, {
            constructor: r,
            namespace: c,
            widgetName: i,
            widgetBaseClass: s,
            widgetFullName: s
        }), o ? (e.each(o._childConstructors, function(t, i) {
            var n = i.prototype;
            e.widget(n.namespace + "." + n.widgetName, r, i._proto)
        }), delete o._childConstructors) : n._childConstructors.push(r), e.widget.bridge(i, r)
    }, e.widget.extend = function(i) {
        for (var a, s, o = n.call(arguments, 1), r = 0, l = o.length; l > r; r++)
            for (a in o[r]) s = o[r][a], o[r].hasOwnProperty(a) && s !== t && (i[a] = e.isPlainObject(s) ? e.isPlainObject(i[a]) ? e.widget.extend({}, i[a], s) : e.widget.extend({}, s) : s);
        return i
    }, e.widget.bridge = function(i, a) {
        var s = a.prototype.widgetFullName || i;
        e.fn[i] = function(o) {
            var r = "string" == typeof o,
                l = n.call(arguments, 1),
                c = this;
            return o = !r && l.length ? e.widget.extend.apply(null, [o].concat(l)) : o, r ? this.each(function() {
                var n, a = e.data(this, s);
                return a ? e.isFunction(a[o]) && "_" !== o.charAt(0) ? (n = a[o].apply(a, l), n !== a && n !== t ? (c = n && n.jquery ? c.pushStack(n.get()) : n, !1) : t) : e.error("no such method '" + o + "' for " + i + " widget instance") : e.error("cannot call methods on " + i + " prior to initialization; " + "attempted to call method '" + o + "'")
            }) : this.each(function() {
                var t = e.data(this, s);
                t ? t.option(o || {})._init() : e.data(this, s, new a(o, this))
            }), c
        }
    }, e.Widget = function() {}, e.Widget._childConstructors = [], e.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {
            disabled: !1,
            create: null
        },
        _createWidget: function(t, n) {
            n = e(n || this.defaultElement || this)[0], this.element = e(n), this.uuid = i++, this.eventNamespace = "." + this.widgetName + this.uuid, this.options = e.widget.extend({}, this.options, this._getCreateOptions(), t), this.bindings = e(), this.hoverable = e(), this.focusable = e(), n !== this && (e.data(n, this.widgetName, this), e.data(n, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function(e) {
                    e.target === n && this.destroy()
                }
            }), this.document = e(n.style ? n.ownerDocument : n.document || n), this.window = e(this.document[0].defaultView || this.document[0].parentWindow)), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: e.noop,
        _getCreateEventData: e.noop,
        _create: e.noop,
        _init: e.noop,
        destroy: function() {
            this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
        },
        _destroy: e.noop,
        widget: function() {
            return this.element
        },
        option: function(i, n) {
            var a, s, o, r = i;
            if (0 === arguments.length) return e.widget.extend({}, this.options);
            if ("string" == typeof i)
                if (r = {}, a = i.split("."), i = a.shift(), a.length) {
                    for (s = r[i] = e.widget.extend({}, this.options[i]), o = 0; a.length - 1 > o; o++) s[a[o]] = s[a[o]] || {}, s = s[a[o]];
                    if (i = a.pop(), n === t) return s[i] === t ? null : s[i];
                    s[i] = n
                } else {
                    if (n === t) return this.options[i] === t ? null : this.options[i];
                    r[i] = n
                } return this._setOptions(r), this
        },
        _setOptions: function(e) {
            var t;
            for (t in e) this._setOption(t, e[t]);
            return this
        },
        _setOption: function(e, t) {
            return this.options[e] = t, "disabled" === e && (this.widget().toggleClass(this.widgetFullName + "-disabled ui-state-disabled", !!t).attr("aria-disabled", t), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")), this
        },
        enable: function() {
            return this._setOption("disabled", !1)
        },
        disable: function() {
            return this._setOption("disabled", !0)
        },
        _on: function(i, n, a) {
            var s, o = this;
            "boolean" != typeof i && (a = n, n = i, i = !1), a ? (n = s = e(n), this.bindings = this.bindings.add(n)) : (a = n, n = this.element, s = this.widget()), e.each(a, function(a, r) {
                function l() {
                    return i || o.options.disabled !== !0 && !e(this).hasClass("ui-state-disabled") ? ("string" == typeof r ? o[r] : r).apply(o, arguments) : t
                }
                "string" != typeof r && (l.guid = r.guid = r.guid || l.guid || e.guid++);
                var c = a.match(/^(\w+)\s*(.*)$/),
                    u = c[1] + o.eventNamespace,
                    d = c[2];
                d ? s.delegate(d, u, l) : n.bind(u, l)
            })
        },
        _off: function(e, t) {
            t = (t || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.unbind(t).undelegate(t)
        },
        _delay: function(e, t) {
            function i() {
                return ("string" == typeof e ? n[e] : e).apply(n, arguments)
            }
            var n = this;
            return setTimeout(i, t || 0)
        },
        _hoverable: function(t) {
            this.hoverable = this.hoverable.add(t), this._on(t, {
                mouseenter: function(t) {
                    e(t.currentTarget).addClass("ui-state-hover")
                },
                mouseleave: function(t) {
                    e(t.currentTarget).removeClass("ui-state-hover")
                }
            })
        },
        _focusable: function(t) {
            this.focusable = this.focusable.add(t), this._on(t, {
                focusin: function(t) {
                    e(t.currentTarget).addClass("ui-state-focus")
                },
                focusout: function(t) {
                    e(t.currentTarget).removeClass("ui-state-focus")
                }
            })
        },
        _trigger: function(t, i, n) {
            var a, s, o = this.options[t];
            if (n = n || {}, i = e.Event(i), i.type = (t === this.widgetEventPrefix ? t : this.widgetEventPrefix + t).toLowerCase(), i.target = this.element[0], s = i.originalEvent)
                for (a in s) a in i || (i[a] = s[a]);
            return this.element.trigger(i, n), !(e.isFunction(o) && o.apply(this.element[0], [i].concat(n)) === !1 || i.isDefaultPrevented())
        }
    }, e.each({
        show: "fadeIn",
        hide: "fadeOut"
    }, function(t, i) {
        e.Widget.prototype["_" + t] = function(n, a, s) {
            "string" == typeof a && (a = {
                effect: a
            });
            var o, r = a ? a === !0 || "number" == typeof a ? i : a.effect || i : t;
            a = a || {}, "number" == typeof a && (a = {
                duration: a
            }), o = !e.isEmptyObject(a), a.complete = s, a.delay && n.delay(a.delay), o && e.effects && (e.effects.effect[r] || e.uiBackCompat !== !1 && e.effects[r]) ? n[t](a) : r !== t && n[r] ? n[r](a.duration, a.easing, s) : n.queue(function(i) {
                e(this)[t](), s && s.call(n[0]), i()
            })
        }
    }), e.uiBackCompat !== !1 && (e.Widget.prototype._getCreateOptions = function() {
        return e.metadata && e.metadata.get(this.element[0])[this.widgetName]
    })
}(jQuery),
function(e) {
    var t = !1;
    e(document).mouseup(function() {
        t = !1
    }), e.widget("ui.mouse", {
        version: "1.9.2",
        options: {
            cancel: "input,textarea,button,select,option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var t = this;
            this.element.bind("mousedown." + this.widgetName, function(e) {
                return t._mouseDown(e)
            }).bind("click." + this.widgetName, function(i) {
                return !0 === e.data(i.target, t.widgetName + ".preventClickEvent") ? (e.removeData(i.target, t.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1) : void 0
            }), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && e(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function(i) {
            if (!t) {
                this._mouseStarted && this._mouseUp(i), this._mouseDownEvent = i;
                var n = this,
                    a = 1 === i.which,
                    s = "string" == typeof this.options.cancel && i.target.nodeName ? e(i.target).closest(this.options.cancel).length : !1;
                return a && !s && this._mouseCapture(i) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                    n.mouseDelayMet = !0
                }, this.options.delay)), this._mouseDistanceMet(i) && this._mouseDelayMet(i) && (this._mouseStarted = this._mouseStart(i) !== !1, !this._mouseStarted) ? (i.preventDefault(), !0) : (!0 === e.data(i.target, this.widgetName + ".preventClickEvent") && e.removeData(i.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(e) {
                    return n._mouseMove(e)
                }, this._mouseUpDelegate = function(e) {
                    return n._mouseUp(e)
                }, e(document).bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), i.preventDefault(), t = !0, !0)) : !0
            }
        },
        _mouseMove: function(t) {
            return !e.ui.ie || document.documentMode >= 9 || t.button ? this._mouseStarted ? (this._mouseDrag(t), t.preventDefault()) : (this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, t) !== !1, this._mouseStarted ? this._mouseDrag(t) : this._mouseUp(t)), !this._mouseStarted) : this._mouseUp(t)
        },
        _mouseUp: function(t) {
            return e(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, t.target === this._mouseDownEvent.target && e.data(t.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(t)), !1
        },
        _mouseDistanceMet: function(e) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - e.pageX), Math.abs(this._mouseDownEvent.pageY - e.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function() {
            return this.mouseDelayMet
        },
        _mouseStart: function() {},
        _mouseDrag: function() {},
        _mouseStop: function() {},
        _mouseCapture: function() {
            return !0
        }
    })
}(jQuery),
function(e, t) {
    function i(e, t, i) {
        return [parseInt(e[0], 10) * (h.test(e[0]) ? t / 100 : 1), parseInt(e[1], 10) * (h.test(e[1]) ? i / 100 : 1)]
    }
    function n(t, i) {
        return parseInt(e.css(t, i), 10) || 0
    }
    e.ui = e.ui || {};
    var a, s = Math.max,
        o = Math.abs,
        r = Math.round,
        l = /left|center|right/,
        c = /top|center|bottom/,
        u = /[\+\-]\d+%?/,
        d = /^\w+/,
        h = /%$/,
        p = e.fn.position;
    e.position = {
            scrollbarWidth: function() {
                if (a !== t) return a;
                var i, n, s = e("<div style='display:block;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),
                    o = s.children()[0];
                return e("body").append(s), i = o.offsetWidth, s.css("overflow", "scroll"), n = o.offsetWidth, i === n && (n = s[0].clientWidth), s.remove(), a = i - n
            },
            getScrollInfo: function(t) {
                var i = t.isWindow ? "" : t.element.css("overflow-x"),
                    n = t.isWindow ? "" : t.element.css("overflow-y"),
                    a = "scroll" === i || "auto" === i && t.width < t.element[0].scrollWidth,
                    s = "scroll" === n || "auto" === n && t.height < t.element[0].scrollHeight;
                return {
                    width: a ? e.position.scrollbarWidth() : 0,
                    height: s ? e.position.scrollbarWidth() : 0
                }
            },
            getWithinInfo: function(t) {
                var i = e(t || window),
                    n = e.isWindow(i[0]);
                return {
                    element: i,
                    isWindow: n,
                    offset: i.offset() || {
                        left: 0,
                        top: 0
                    },
                    scrollLeft: i.scrollLeft(),
                    scrollTop: i.scrollTop(),
                    width: n ? i.width() : i.outerWidth(),
                    height: n ? i.height() : i.outerHeight()
                }
            }
        }, e.fn.position = function(t) {
            if (!t || !t.of) return p.apply(this, arguments);
            t = e.extend({}, t);
            var a, h, f, m, v, g = e(t.of),
                y = e.position.getWithinInfo(t.within),
                _ = e.position.getScrollInfo(y),
                b = g[0],
                w = (t.collision || "flip").split(" "),
                C = {};
            return 9 === b.nodeType ? (h = g.width(), f = g.height(), m = {
                top: 0,
                left: 0
            }) : e.isWindow(b) ? (h = g.width(), f = g.height(), m = {
                top: g.scrollTop(),
                left: g.scrollLeft()
            }) : b.preventDefault ? (t.at = "left top", h = f = 0, m = {
                top: b.pageY,
                left: b.pageX
            }) : (h = g.outerWidth(), f = g.outerHeight(), m = g.offset()), v = e.extend({}, m), e.each(["my", "at"], function() {
                var e, i, n = (t[this] || "").split(" ");
                1 === n.length && (n = l.test(n[0]) ? n.concat(["center"]) : c.test(n[0]) ? ["center"].concat(n) : ["center", "center"]), n[0] = l.test(n[0]) ? n[0] : "center", n[1] = c.test(n[1]) ? n[1] : "center", e = u.exec(n[0]), i = u.exec(n[1]), C[this] = [e ? e[0] : 0, i ? i[0] : 0], t[this] = [d.exec(n[0])[0], d.exec(n[1])[0]]
            }), 1 === w.length && (w[1] = w[0]), "right" === t.at[0] ? v.left += h : "center" === t.at[0] && (v.left += h / 2), "bottom" === t.at[1] ? v.top += f : "center" === t.at[1] && (v.top += f / 2), a = i(C.at, h, f), v.left += a[0], v.top += a[1], this.each(function() {
                var l, c, u = e(this),
                    d = u.outerWidth(),
                    p = u.outerHeight(),
                    b = n(this, "marginLeft"),
                    k = n(this, "marginTop"),
                    S = d + b + n(this, "marginRight") + _.width,
                    $ = p + k + n(this, "marginBottom") + _.height,
                    x = e.extend({}, v),
                    T = i(C.my, u.outerWidth(), u.outerHeight());
                "right" === t.my[0] ? x.left -= d : "center" === t.my[0] && (x.left -= d / 2), "bottom" === t.my[1] ? x.top -= p : "center" === t.my[1] && (x.top -= p / 2), x.left += T[0], x.top += T[1], e.support.offsetFractions || (x.left = r(x.left), x.top = r(x.top)), l = {
                    marginLeft: b,
                    marginTop: k
                }, e.each(["left", "top"], function(i, n) {
                    e.ui.position[w[i]] && e.ui.position[w[i]][n](x, {
                        targetWidth: h,
                        targetHeight: f,
                        elemWidth: d,
                        elemHeight: p,
                        collisionPosition: l,
                        collisionWidth: S,
                        collisionHeight: $,
                        offset: [a[0] + T[0], a[1] + T[1]],
                        my: t.my,
                        at: t.at,
                        within: y,
                        elem: u
                    })
                }), e.fn.bgiframe && u.bgiframe(), t.using && (c = function(e) {
                    var i = m.left - x.left,
                        n = i + h - d,
                        a = m.top - x.top,
                        r = a + f - p,
                        l = {
                            target: {
                                element: g,
                                left: m.left,
                                top: m.top,
                                width: h,
                                height: f
                            },
                            element: {
                                element: u,
                                left: x.left,
                                top: x.top,
                                width: d,
                                height: p
                            },
                            horizontal: 0 > n ? "left" : i > 0 ? "right" : "center",
                            vertical: 0 > r ? "top" : a > 0 ? "bottom" : "middle"
                        };
                    d > h && h > o(i + n) && (l.horizontal = "center"), p > f && f > o(a + r) && (l.vertical = "middle"), l.important = s(o(i), o(n)) > s(o(a), o(r)) ? "horizontal" : "vertical", t.using.call(this, e, l)
                }), u.offset(e.extend(x, {
                    using: c
                }))
            })
        }, e.ui.position = {
            fit: {
                left: function(e, t) {
                    var i, n = t.within,
                        a = n.isWindow ? n.scrollLeft : n.offset.left,
                        o = n.width,
                        r = e.left - t.collisionPosition.marginLeft,
                        l = a - r,
                        c = r + t.collisionWidth - o - a;
                    t.collisionWidth > o ? l > 0 && 0 >= c ? (i = e.left + l + t.collisionWidth - o - a, e.left += l - i) : e.left = c > 0 && 0 >= l ? a : l > c ? a + o - t.collisionWidth : a : l > 0 ? e.left += l : c > 0 ? e.left -= c : e.left = s(e.left - r, e.left)
                },
                top: function(e, t) {
                    var i, n = t.within,
                        a = n.isWindow ? n.scrollTop : n.offset.top,
                        o = t.within.height,
                        r = e.top - t.collisionPosition.marginTop,
                        l = a - r,
                        c = r + t.collisionHeight - o - a;
                    t.collisionHeight > o ? l > 0 && 0 >= c ? (i = e.top + l + t.collisionHeight - o - a, e.top += l - i) : e.top = c > 0 && 0 >= l ? a : l > c ? a + o - t.collisionHeight : a : l > 0 ? e.top += l : c > 0 ? e.top -= c : e.top = s(e.top - r, e.top)
                }
            },
            flip: {
                left: function(e, t) {
                    var i, n, a = t.within,
                        s = a.offset.left + a.scrollLeft,
                        r = a.width,
                        l = a.isWindow ? a.scrollLeft : a.offset.left,
                        c = e.left - t.collisionPosition.marginLeft,
                        u = c - l,
                        d = c + t.collisionWidth - r - l,
                        h = "left" === t.my[0] ? -t.elemWidth : "right" === t.my[0] ? t.elemWidth : 0,
                        p = "left" === t.at[0] ? t.targetWidth : "right" === t.at[0] ? -t.targetWidth : 0,
                        f = -2 * t.offset[0];
                    0 > u ? (i = e.left + h + p + f + t.collisionWidth - r - s, (0 > i || o(u) > i) && (e.left += h + p + f)) : d > 0 && (n = e.left - t.collisionPosition.marginLeft + h + p + f - l, (n > 0 || d > o(n)) && (e.left += h + p + f))
                },
                top: function(e, t) {
                    var i, n, a = t.within,
                        s = a.offset.top + a.scrollTop,
                        r = a.height,
                        l = a.isWindow ? a.scrollTop : a.offset.top,
                        c = e.top - t.collisionPosition.marginTop,
                        u = c - l,
                        d = c + t.collisionHeight - r - l,
                        h = "top" === t.my[1],
                        p = h ? -t.elemHeight : "bottom" === t.my[1] ? t.elemHeight : 0,
                        f = "top" === t.at[1] ? t.targetHeight : "bottom" === t.at[1] ? -t.targetHeight : 0,
                        m = -2 * t.offset[1];
                    0 > u ? (n = e.top + p + f + m + t.collisionHeight - r - s, e.top + p + f + m > u && (0 > n || o(u) > n) && (e.top += p + f + m)) : d > 0 && (i = e.top - t.collisionPosition.marginTop + p + f + m - l, e.top + p + f + m > d && (i > 0 || d > o(i)) && (e.top += p + f + m))
                }
            },
            flipfit: {
                left: function() {
                    e.ui.position.flip.left.apply(this, arguments), e.ui.position.fit.left.apply(this, arguments)
                },
                top: function() {
                    e.ui.position.flip.top.apply(this, arguments), e.ui.position.fit.top.apply(this, arguments)
                }
            }
        },
        function() {
            var t, i, n, a, s, o = document.getElementsByTagName("body")[0],
                r = document.createElement("div");
            t = document.createElement(o ? "div" : "body"), n = {
                visibility: "hidden",
                width: 0,
                height: 0,
                border: 0,
                margin: 0,
                background: "none"
            }, o && e.extend(n, {
                position: "absolute",
                left: "-1000px",
                top: "-1000px"
            });
            for (s in n) t.style[s] = n[s];
            t.appendChild(r), i = o || document.documentElement, i.insertBefore(t, i.firstChild), r.style.cssText = "position: absolute; left: 10.7432222px;", a = e(r).offset().left, e.support.offsetFractions = a > 10 && 11 > a, t.innerHTML = "", i.removeChild(t)
        }(), e.uiBackCompat !== !1 && function(e) {
            var i = e.fn.position;
            e.fn.position = function(n) {
                if (!n || !n.offset) return i.call(this, n);
                var a = n.offset.split(" "),
                    s = n.at.split(" ");
                return 1 === a.length && (a[1] = a[0]), /^\d/.test(a[0]) && (a[0] = "+" + a[0]), /^\d/.test(a[1]) && (a[1] = "+" + a[1]), 1 === s.length && (/left|center|right/.test(s[0]) ? s[1] = "center" : (s[1] = s[0], s[0] = "center")), i.call(this, e.extend(n, {
                    at: s[0] + a[0] + " " + s[1] + a[1],
                    offset: t
                }))
            }
        }(jQuery)
}(jQuery),
function(e) {
    var t = 0;
    e.widget("ui.autocomplete", {
        version: "1.9.2",
        defaultElement: "<input>",
        options: {
            appendTo: "body",
            autoFocus: !1,
            delay: 300,
            minLength: 1,
            position: {
                my: "left top",
                at: "left bottom",
                collision: "none"
            },
            source: null,
            change: null,
            close: null,
            focus: null,
            open: null,
            response: null,
            search: null,
            select: null
        },
        pending: 0,
        _create: function() {
            var t, i, n;
            this.isMultiLine = this._isMultiLine(), this.valueMethod = this.element[this.element.is("input,textarea") ? "val" : "text"], this.isNewMenu = !0, this.element.addClass("ui-autocomplete-input").attr("autocomplete", "off"), this._on(this.element, {
                keydown: function(a) {
                    if (this.element.prop("readOnly")) return t = !0, n = !0, i = !0, void 0;
                    t = !1, n = !1, i = !1;
                    var s = e.ui.keyCode;
                    switch (a.keyCode) {
                        case s.PAGE_UP:
                            t = !0, this._move("previousPage", a);
                            break;
                        case s.PAGE_DOWN:
                            t = !0, this._move("nextPage", a);
                            break;
                        case s.UP:
                            t = !0, this._keyEvent("previous", a);
                            break;
                        case s.DOWN:
                            t = !0, this._keyEvent("next", a);
                            break;
                        case s.ENTER:
                        case s.NUMPAD_ENTER:
                            this.menu.active && (t = !0, a.preventDefault(), this.menu.select(a));
                            break;
                        case s.TAB:
                            this.menu.active && this.menu.select(a);
                            break;
                        case s.ESCAPE:
                            this.menu.element.is(":visible") && (this._value(this.term), this.close(a), a.preventDefault());
                            break;
                        default:
                            i = !0, this._searchTimeout(a)
                    }
                },
                keypress: function(n) {
                    if (t) return t = !1, n.preventDefault(), void 0;
                    if (!i) {
                        var a = e.ui.keyCode;
                        switch (n.keyCode) {
                            case a.PAGE_UP:
                                this._move("previousPage", n);
                                break;
                            case a.PAGE_DOWN:
                                this._move("nextPage", n);
                                break;
                            case a.UP:
                                this._keyEvent("previous", n);
                                break;
                            case a.DOWN:
                                this._keyEvent("next", n)
                        }
                    }
                },
                input: function(e) {
                    return n ? (n = !1, e.preventDefault(), void 0) : (this._searchTimeout(e), void 0)
                },
                focus: function() {
                    this.selectedItem = null, this.previous = this._value()
                },
                blur: function(e) {
                    return this.cancelBlur ? (delete this.cancelBlur, void 0) : (clearTimeout(this.searching), this.close(e), this._change(e), void 0)
                }
            }), this._initSource(), this.menu = e("<ul>").addClass("ui-autocomplete").appendTo(this.document.find(this.options.appendTo || "body")[0]).menu({
                input: e(),
                role: null
            }).zIndex(this.element.zIndex() + 1).hide().data("menu"), this._on(this.menu.element, {
                mousedown: function(t) {
                    t.preventDefault(), this.cancelBlur = !0, this._delay(function() {
                        delete this.cancelBlur
                    });
                    var i = this.menu.element[0];
                    e(t.target).closest(".ui-menu-item").length || this._delay(function() {
                        var t = this;
                        this.document.one("mousedown", function(n) {
                            n.target === t.element[0] || n.target === i || e.contains(i, n.target) || t.close()
                        })
                    })
                },
                menufocus: function(t, i) {
                    if (this.isNewMenu && (this.isNewMenu = !1, t.originalEvent && /^mouse/.test(t.originalEvent.type))) return this.menu.blur(), this.document.one("mousemove", function() {
                        e(t.target).trigger(t.originalEvent)
                    }), void 0;
                    var n = i.item.data("ui-autocomplete-item") || i.item.data("item.autocomplete");
                    !1 !== this._trigger("focus", t, {
                        item: n
                    }) ? t.originalEvent && /^key/.test(t.originalEvent.type) && this._value(n.value) : this.liveRegion.text(n.value)
                },
                menuselect: function(e, t) {
                    var i = t.item.data("ui-autocomplete-item") || t.item.data("item.autocomplete"),
                        n = this.previous;
                    this.element[0] !== this.document[0].activeElement && (this.element.focus(), this.previous = n, this._delay(function() {
                        this.previous = n, this.selectedItem = i
                    })), !1 !== this._trigger("select", e, {
                        item: i
                    }) && this._value(i.value), this.term = this._value(), this.close(e), this.selectedItem = i
                }
            }), this.liveRegion = e("<span>", {
                role: "status",
                "aria-live": "polite"
            }).addClass("ui-helper-hidden-accessible").insertAfter(this.element), e.fn.bgiframe && this.menu.element.bgiframe(), this._on(this.window, {
                beforeunload: function() {
                    this.element.removeAttr("autocomplete")
                }
            })
        },
        _destroy: function() {
            clearTimeout(this.searching), this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete"), this.menu.element.remove(), this.liveRegion.remove()
        },
        _setOption: function(e, t) {
            this._super(e, t), "source" === e && this._initSource(), "appendTo" === e && this.menu.element.appendTo(this.document.find(t || "body")[0]), "disabled" === e && t && this.xhr && this.xhr.abort()
        },
        _isMultiLine: function() {
            return this.element.is("textarea") ? !0 : this.element.is("input") ? !1 : this.element.prop("isContentEditable")
        },
        _initSource: function() {
            var t, i, n = this;
            e.isArray(this.options.source) ? (t = this.options.source, this.source = function(i, n) {
                n(e.ui.autocomplete.filter(t, i.term))
            }) : "string" == typeof this.options.source ? (i = this.options.source, this.source = function(t, a) {
                n.xhr && n.xhr.abort(), n.xhr = e.ajax({
                    url: i,
                    data: t,
                    dataType: "json",
                    success: function(e) {
                        a(e)
                    },
                    error: function() {
                        a([])
                    }
                })
            }) : this.source = this.options.source
        },
        _searchTimeout: function(e) {
            clearTimeout(this.searching), this.searching = this._delay(function() {
                this.term !== this._value() && (this.selectedItem = null, this.search(null, e))
            }, this.options.delay)
        },
        search: function(e, t) {
            return e = null != e ? e : this._value(), this.term = this._value(), e.length < this.options.minLength ? this.close(t) : this._trigger("search", t) !== !1 ? this._search(e) : void 0
        },
        _search: function(e) {
            this.pending++, this.element.addClass("ui-autocomplete-loading"), this.cancelSearch = !1, this.source({
                term: e
            }, this._response())
        },
        _response: function() {
            var e = this,
                i = ++t;
            return function(n) {
                i === t && e.__response(n), e.pending--, e.pending || e.element.removeClass("ui-autocomplete-loading")
            }
        },
        __response: function(e) {
            e && (e = this._normalize(e)), this._trigger("response", null, {
                content: e
            }), !this.options.disabled && e && e.length && !this.cancelSearch ? (this._suggest(e), this._trigger("open")) : this._close()
        },
        close: function(e) {
            this.cancelSearch = !0, this._close(e)
        },
        _close: function(e) {
            this.menu.element.is(":visible") && (this.menu.element.hide(), this.menu.blur(), this.isNewMenu = !0, this._trigger("close", e))
        },
        _change: function(e) {
            this.previous !== this._value() && this._trigger("change", e, {
                item: this.selectedItem
            })
        },
        _normalize: function(t) {
            return t.length && t[0].label && t[0].value ? t : e.map(t, function(t) {
                return "string" == typeof t ? {
                    label: t,
                    value: t
                } : e.extend({
                    label: t.label || t.value,
                    value: t.value || t.label
                }, t)
            })
        },
        _suggest: function(t) {
            var i = this.menu.element.empty().zIndex(this.element.zIndex() + 1);
            this._renderMenu(i, t), this.menu.refresh(), i.show(), this._resizeMenu(), i.position(e.extend({
                of: this.element
            }, this.options.position)), this.options.autoFocus && this.menu.next()
        },
        _resizeMenu: function() {
            var e = this.menu.element;
            e.outerWidth(Math.max(e.width("").outerWidth() + 1, this.element.outerWidth()))
        },
        _renderMenu: function(t, i) {
            var n = this;
            e.each(i, function(e, i) {
                n._renderItemData(t, i)
            })
        },
        _renderItemData: function(e, t) {
            return this._renderItem(e, t).data("ui-autocomplete-item", t)
        },
        _renderItem: function(t, i) {
            return e("<li>").append(e("<a>").text(i.label)).appendTo(t)
        },
        _move: function(e, t) {
            return this.menu.element.is(":visible") ? this.menu.isFirstItem() && /^previous/.test(e) || this.menu.isLastItem() && /^next/.test(e) ? (this._value(this.term), this.menu.blur(), void 0) : (this.menu[e](t), void 0) : (this.search(null, t), void 0)
        },
        widget: function() {
            return this.menu.element
        },
        _value: function() {
            return this.valueMethod.apply(this.element, arguments)
        },
        _keyEvent: function(e, t) {
            (!this.isMultiLine || this.menu.element.is(":visible")) && (this._move(e, t), t.preventDefault())
        }
    }), e.extend(e.ui.autocomplete, {
        escapeRegex: function(e) {
            return e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&")
        },
        filter: function(t, i) {
            var n = RegExp(e.ui.autocomplete.escapeRegex(i), "i");
            return e.grep(t, function(e) {
                return n.test(e.label || e.value || e)
            })
        }
    }), e.widget("ui.autocomplete", e.ui.autocomplete, {
        options: {
            messages: {
                noResults: "No search results.",
                results: function(e) {
                    return e + (e > 1 ? " results are" : " result is") + " available, use up and down arrow keys to navigate."
                }
            }
        },
        __response: function(e) {
            var t;
            this._superApply(arguments), this.options.disabled || this.cancelSearch || (t = e && e.length ? this.options.messages.results(e.length) : this.options.messages.noResults, this.liveRegion.text(t))
        }
    })
}(jQuery),
function(e) {
    var t = !1;
    e.widget("ui.menu", {
        version: "1.9.2",
        defaultElement: "<ul>",
        delay: 300,
        options: {
            icons: {
                submenu: "ui-icon-carat-1-e"
            },
            menus: "ul",
            position: {
                my: "left top",
                at: "right top"
            },
            role: "menu",
            blur: null,
            focus: null,
            select: null
        },
        _create: function() {
            this.activeMenu = this.element, this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content ui-corner-all").toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length).attr({
                role: this.options.role,
                tabIndex: 0
            }).bind("click" + this.eventNamespace, e.proxy(function(e) {
                this.options.disabled && e.preventDefault()
            }, this)), this.options.disabled && this.element.addClass("ui-state-disabled").attr("aria-disabled", "true"), this._on({
                "mousedown .ui-menu-item > a": function(e) {
                    e.preventDefault()
                },
                "click .ui-state-disabled > a": function(e) {
                    e.preventDefault()
                },
                "click .ui-menu-item:has(a)": function(i) {
                    var n = e(i.target).closest(".ui-menu-item");
                    !t && n.not(".ui-state-disabled").length && (t = !0, this.select(i), n.has(".ui-menu").length ? this.expand(i) : this.element.is(":focus") || (this.element.trigger("focus", [!0]), this.active && 1 === this.active.parents(".ui-menu").length && clearTimeout(this.timer)))
                },
                "mouseenter .ui-menu-item": function(t) {
                    var i = e(t.currentTarget);
                    i.siblings().children(".ui-state-active").removeClass("ui-state-active"), this.focus(t, i)
                },
                mouseleave: "collapseAll",
                "mouseleave .ui-menu": "collapseAll",
                focus: function(e, t) {
                    var i = this.active || this.element.children(".ui-menu-item").eq(0);
                    t || this.focus(e, i)
                },
                blur: function(t) {
                    this._delay(function() {
                        e.contains(this.element[0], this.document[0].activeElement) || this.collapseAll(t)
                    })
                },
                keydown: "_keydown"
            }), this.refresh(), this._on(this.document, {
                click: function(i) {
                    e(i.target).closest(".ui-menu").length || this.collapseAll(i), t = !1
                }
            })
        },
        _destroy: function() {
            this.element.removeAttr("aria-activedescendant").find(".ui-menu").andSelf().removeClass("ui-menu ui-widget ui-widget-content ui-corner-all ui-menu-icons").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show(), this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").children("a").removeUniqueId().removeClass("ui-corner-all ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function() {
                var t = e(this);
                t.data("ui-menu-submenu-carat") && t.remove()
            }), this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content")
        },
        _keydown: function(t) {
            function i(e) {
                return e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&")
            }
            var n, a, s, o, r, l = !0;
            switch (t.keyCode) {
                case e.ui.keyCode.PAGE_UP:
                    this.previousPage(t);
                    break;
                case e.ui.keyCode.PAGE_DOWN:
                    this.nextPage(t);
                    break;
                case e.ui.keyCode.HOME:
                    this._move("first", "first", t);
                    break;
                case e.ui.keyCode.END:
                    this._move("last", "last", t);
                    break;
                case e.ui.keyCode.UP:
                    this.previous(t);
                    break;
                case e.ui.keyCode.DOWN:
                    this.next(t);
                    break;
                case e.ui.keyCode.LEFT:
                    this.collapse(t);
                    break;
                case e.ui.keyCode.RIGHT:
                    this.active && !this.active.is(".ui-state-disabled") && this.expand(t);
                    break;
                case e.ui.keyCode.ENTER:
                case e.ui.keyCode.SPACE:
                    this._activate(t);
                    break;
                case e.ui.keyCode.ESCAPE:
                    this.collapse(t);
                    break;
                default:
                    l = !1, a = this.previousFilter || "", s = String.fromCharCode(t.keyCode), o = !1, clearTimeout(this.filterTimer), s === a ? o = !0 : s = a + s, r = RegExp("^" + i(s), "i"), n = this.activeMenu.children(".ui-menu-item").filter(function() {
                        return r.test(e(this).children("a").text())
                    }), n = o && -1 !== n.index(this.active.next()) ? this.active.nextAll(".ui-menu-item") : n, n.length || (s = String.fromCharCode(t.keyCode), r = RegExp("^" + i(s), "i"), n = this.activeMenu.children(".ui-menu-item").filter(function() {
                        return r.test(e(this).children("a").text())
                    })), n.length ? (this.focus(t, n), n.length > 1 ? (this.previousFilter = s, this.filterTimer = this._delay(function() {
                        delete this.previousFilter
                    }, 1e3)) : delete this.previousFilter) : delete this.previousFilter
            }
            l && t.preventDefault()
        },
        _activate: function(e) {
            this.active.is(".ui-state-disabled") || (this.active.children("a[aria-haspopup='true']").length ? this.expand(e) : this.select(e))
        },
        refresh: function() {
            var t, i = this.options.icons.submenu,
                n = this.element.find(this.options.menus);
            n.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-corner-all").hide().attr({
                role: this.options.role,
                "aria-hidden": "true",
                "aria-expanded": "false"
            }).each(function() {
                var t = e(this),
                    n = t.prev("a"),
                    a = e("<span>").addClass("ui-menu-icon ui-icon " + i).data("ui-menu-submenu-carat", !0);
                n.attr("aria-haspopup", "true").prepend(a), t.attr("aria-labelledby", n.attr("id"))
            }), t = n.add(this.element), t.children(":not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role", "presentation").children("a").uniqueId().addClass("ui-corner-all").attr({
                tabIndex: -1,
                role: this._itemRole()
            }), t.children(":not(.ui-menu-item)").each(function() {
                var t = e(this);
                /[^\-â€”â€“\s]/.test(t.text()) || t.addClass("ui-widget-content ui-menu-divider")
            }), t.children(".ui-state-disabled").attr("aria-disabled", "true"), this.active && !e.contains(this.element[0], this.active[0]) && this.blur()
        },
        _itemRole: function() {
            return {
                menu: "menuitem",
                listbox: "option"
            } [this.options.role]
        },
        focus: function(e, t) {
            var i, n;
            this.blur(e, e && "focus" === e.type), this._scrollIntoView(t), this.active = t.first(), n = this.active.children("a").addClass("ui-state-focus"), this.options.role && this.element.attr("aria-activedescendant", n.attr("id")), this.active.parent().closest(".ui-menu-item").children("a:first").addClass("ui-state-active"), e && "keydown" === e.type ? this._close() : this.timer = this._delay(function() {
                this._close()
            }, this.delay), i = t.children(".ui-menu"), i.length && /^mouse/.test(e.type) && this._startOpening(i), this.activeMenu = t.parent(), this._trigger("focus", e, {
                item: t
            })
        },
        _scrollIntoView: function(t) {
            var i, n, a, s, o, r;
            this._hasScroll() && (i = parseFloat(e.css(this.activeMenu[0], "borderTopWidth")) || 0, n = parseFloat(e.css(this.activeMenu[0], "paddingTop")) || 0, a = t.offset().top - this.activeMenu.offset().top - i - n, s = this.activeMenu.scrollTop(), o = this.activeMenu.height(), r = t.height(), 0 > a ? this.activeMenu.scrollTop(s + a) : a + r > o && this.activeMenu.scrollTop(s + a - o + r))
        },
        blur: function(e, t) {
            t || clearTimeout(this.timer), this.active && (this.active.children("a").removeClass("ui-state-focus"), this.active = null, this._trigger("blur", e, {
                item: this.active
            }))
        },
        _startOpening: function(e) {
            clearTimeout(this.timer), "true" === e.attr("aria-hidden") && (this.timer = this._delay(function() {
                this._close(), this._open(e)
            }, this.delay))
        },
        _open: function(t) {
            var i = e.extend({
                of: this.active
            }, this.options.position);
            clearTimeout(this.timer), this.element.find(".ui-menu").not(t.parents(".ui-menu")).hide().attr("aria-hidden", "true"), t.show().removeAttr("aria-hidden").attr("aria-expanded", "true").position(i)
        },
        collapseAll: function(t, i) {
            clearTimeout(this.timer), this.timer = this._delay(function() {
                var n = i ? this.element : e(t && t.target).closest(this.element.find(".ui-menu"));
                n.length || (n = this.element), this._close(n), this.blur(t), this.activeMenu = n
            }, this.delay)
        },
        _close: function(e) {
            e || (e = this.active ? this.active.parent() : this.element), e.find(".ui-menu").hide().attr("aria-hidden", "true").attr("aria-expanded", "false").end().find("a.ui-state-active").removeClass("ui-state-active")
        },
        collapse: function(e) {
            var t = this.active && this.active.parent().closest(".ui-menu-item", this.element);
            t && t.length && (this._close(), this.focus(e, t))
        },
        expand: function(e) {
            var t = this.active && this.active.children(".ui-menu ").children(".ui-menu-item").first();
            t && t.length && (this._open(t.parent()), this._delay(function() {
                this.focus(e, t)
            }))
        },
        next: function(e) {
            this._move("next", "first", e)
        },
        previous: function(e) {
            this._move("prev", "last", e)
        },
        isFirstItem: function() {
            return this.active && !this.active.prevAll(".ui-menu-item").length
        },
        isLastItem: function() {
            return this.active && !this.active.nextAll(".ui-menu-item").length
        },
        _move: function(e, t, i) {
            var n;
            this.active && (n = "first" === e || "last" === e ? this.active["first" === e ? "prevAll" : "nextAll"](".ui-menu-item").eq(-1) : this.active[e + "All"](".ui-menu-item").eq(0)), n && n.length && this.active || (n = this.activeMenu.children(".ui-menu-item")[t]()), this.focus(i, n)
        },
        nextPage: function(t) {
            var i, n, a;
            return this.active ? (this.isLastItem() || (this._hasScroll() ? (n = this.active.offset().top, a = this.element.height(), this.active.nextAll(".ui-menu-item").each(function() {
                return i = e(this), 0 > i.offset().top - n - a
            }), this.focus(t, i)) : this.focus(t, this.activeMenu.children(".ui-menu-item")[this.active ? "last" : "first"]())), void 0) : (this.next(t), void 0)
        },
        previousPage: function(t) {
            var i, n, a;
            return this.active ? (this.isFirstItem() || (this._hasScroll() ? (n = this.active.offset().top, a = this.element.height(), this.active.prevAll(".ui-menu-item").each(function() {
                return i = e(this), i.offset().top - n + a > 0
            }), this.focus(t, i)) : this.focus(t, this.activeMenu.children(".ui-menu-item").first())), void 0) : (this.next(t), void 0)
        },
        _hasScroll: function() {
            return this.element.outerHeight() < this.element.prop("scrollHeight")
        },
        select: function(t) {
            this.active = this.active || e(t.target).closest(".ui-menu-item");
            var i = {
                item: this.active
            };
            this.active.has(".ui-menu").length || this.collapseAll(t, !0), this._trigger("select", t, i)
        }
    })
}(jQuery), jQuery.effects || function(e, t) {
        var i = e.uiBackCompat !== !1,
            n = "ui-effects-";
        e.effects = {
                effect: {}
            },
            function(t, i) {
                function n(e, t, i) {
                    var n = h[t.type] || {};
                    return null == e ? i || !t.def ? null : t.def : (e = n.floor ? ~~e : parseFloat(e), isNaN(e) ? t.def : n.mod ? (e + n.mod) % n.mod : 0 > e ? 0 : e > n.max ? n.max : e)
                }
                function a(e) {
                    var n = u(),
                        a = n._rgba = [];
                    return e = e.toLowerCase(), m(c, function(t, s) {
                        var o, r = s.re.exec(e),
                            l = r && s.parse(r),
                            c = s.space || "rgba";
                        return l ? (o = n[c](l), n[d[c].cache] = o[d[c].cache], a = n._rgba = o._rgba, !1) : i
                    }), a.length ? ("0,0,0,0" === a.join() && t.extend(a, o.transparent), n) : o[e]
                }
                function s(e, t, i) {
                    return i = (i + 1) % 1, 1 > 6 * i ? e + 6 * (t - e) * i : 1 > 2 * i ? t : 2 > 3 * i ? e + 6 * (t - e) * (2 / 3 - i) : e
                }
                var o, r = "backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor".split(" "),
                    l = /^([\-+])=\s*(\d+\.?\d*)/,
                    c = [{
                        re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,
                        parse: function(e) {
                            return [e[1], e[2], e[3], e[4]]
                        }
                    }, {
                        re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,
                        parse: function(e) {
                            return [2.55 * e[1], 2.55 * e[2], 2.55 * e[3], e[4]]
                        }
                    }, {
                        re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
                        parse: function(e) {
                            return [parseInt(e[1], 16), parseInt(e[2], 16), parseInt(e[3], 16)]
                        }
                    }, {
                        re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
                        parse: function(e) {
                            return [parseInt(e[1] + e[1], 16), parseInt(e[2] + e[2], 16), parseInt(e[3] + e[3], 16)]
                        }
                    }, {
                        re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,
                        space: "hsla",
                        parse: function(e) {
                            return [e[1], e[2] / 100, e[3] / 100, e[4]]
                        }
                    }],
                    u = t.Color = function(e, i, n, a) {
                        return new t.Color.fn.parse(e, i, n, a)
                    },
                    d = {
                        rgba: {
                            props: {
                                red: {
                                    idx: 0,
                                    type: "byte"
                                },
                                green: {
                                    idx: 1,
                                    type: "byte"
                                },
                                blue: {
                                    idx: 2,
                                    type: "byte"
                                }
                            }
                        },
                        hsla: {
                            props: {
                                hue: {
                                    idx: 0,
                                    type: "degrees"
                                },
                                saturation: {
                                    idx: 1,
                                    type: "percent"
                                },
                                lightness: {
                                    idx: 2,
                                    type: "percent"
                                }
                            }
                        }
                    },
                    h = {
                        "byte": {
                            floor: !0,
                            max: 255
                        },
                        percent: {
                            max: 1
                        },
                        degrees: {
                            mod: 360,
                            floor: !0
                        }
                    },
                    p = u.support = {},
                    f = t("<p>")[0],
                    m = t.each;
                f.style.cssText = "background-color:rgba(1,1,1,.5)", p.rgba = f.style.backgroundColor.indexOf("rgba") > -1, m(d, function(e, t) {
                    t.cache = "_" + e, t.props.alpha = {
                        idx: 3,
                        type: "percent",
                        def: 1
                    }
                }), u.fn = t.extend(u.prototype, {
                    parse: function(s, r, l, c) {
                        if (s === i) return this._rgba = [null, null, null, null], this;
                        (s.jquery || s.nodeType) && (s = t(s).css(r), r = i);
                        var h = this,
                            p = t.type(s),
                            f = this._rgba = [];
                        return r !== i && (s = [s, r, l, c], p = "array"), "string" === p ? this.parse(a(s) || o._default) : "array" === p ? (m(d.rgba.props, function(e, t) {
                            f[t.idx] = n(s[t.idx], t)
                        }), this) : "object" === p ? (s instanceof u ? m(d, function(e, t) {
                            s[t.cache] && (h[t.cache] = s[t.cache].slice())
                        }) : m(d, function(t, i) {
                            var a = i.cache;
                            m(i.props, function(e, t) {
                                if (!h[a] && i.to) {
                                    if ("alpha" === e || null == s[e]) return;
                                    h[a] = i.to(h._rgba)
                                }
                                h[a][t.idx] = n(s[e], t, !0)
                            }), h[a] && 0 > e.inArray(null, h[a].slice(0, 3)) && (h[a][3] = 1, i.from && (h._rgba = i.from(h[a])))
                        }), this) : i
                    },
                    is: function(e) {
                        var t = u(e),
                            n = !0,
                            a = this;
                        return m(d, function(e, s) {
                            var o, r = t[s.cache];
                            return r && (o = a[s.cache] || s.to && s.to(a._rgba) || [], m(s.props, function(e, t) {
                                return null != r[t.idx] ? n = r[t.idx] === o[t.idx] : i
                            })), n
                        }), n
                    },
                    _space: function() {
                        var e = [],
                            t = this;
                        return m(d, function(i, n) {
                            t[n.cache] && e.push(i)
                        }), e.pop()
                    },
                    transition: function(e, t) {
                        var i = u(e),
                            a = i._space(),
                            s = d[a],
                            o = 0 === this.alpha() ? u("transparent") : this,
                            r = o[s.cache] || s.to(o._rgba),
                            l = r.slice();
                        return i = i[s.cache], m(s.props, function(e, a) {
                            var s = a.idx,
                                o = r[s],
                                c = i[s],
                                u = h[a.type] || {};
                            null !== c && (null === o ? l[s] = c : (u.mod && (c - o > u.mod / 2 ? o += u.mod : o - c > u.mod / 2 && (o -= u.mod)), l[s] = n((c - o) * t + o, a)))
                        }), this[a](l)
                    },
                    blend: function(e) {
                        if (1 === this._rgba[3]) return this;
                        var i = this._rgba.slice(),
                            n = i.pop(),
                            a = u(e)._rgba;
                        return u(t.map(i, function(e, t) {
                            return (1 - n) * a[t] + n * e
                        }))
                    },
                    toRgbaString: function() {
                        var e = "rgba(",
                            i = t.map(this._rgba, function(e, t) {
                                return null == e ? t > 2 ? 1 : 0 : e
                            });
                        return 1 === i[3] && (i.pop(), e = "rgb("), e + i.join() + ")"
                    },
                    toHslaString: function() {
                        var e = "hsla(",
                            i = t.map(this.hsla(), function(e, t) {
                                return null == e && (e = t > 2 ? 1 : 0), t && 3 > t && (e = Math.round(100 * e) + "%"), e
                            });
                        return 1 === i[3] && (i.pop(), e = "hsl("), e + i.join() + ")"
                    },
                    toHexString: function(e) {
                        var i = this._rgba.slice(),
                            n = i.pop();
                        return e && i.push(~~(255 * n)), "#" + t.map(i, function(e) {
                            return e = (e || 0).toString(16), 1 === e.length ? "0" + e : e
                        }).join("")
                    },
                    toString: function() {
                        return 0 === this._rgba[3] ? "transparent" : this.toRgbaString()
                    }
                }), u.fn.parse.prototype = u.fn, d.hsla.to = function(e) {
                    if (null == e[0] || null == e[1] || null == e[2]) return [null, null, null, e[3]];
                    var t, i, n = e[0] / 255,
                        a = e[1] / 255,
                        s = e[2] / 255,
                        o = e[3],
                        r = Math.max(n, a, s),
                        l = Math.min(n, a, s),
                        c = r - l,
                        u = r + l,
                        d = .5 * u;
                    return t = l === r ? 0 : n === r ? 60 * (a - s) / c + 360 : a === r ? 60 * (s - n) / c + 120 : 60 * (n - a) / c + 240, i = 0 === d || 1 === d ? d : .5 >= d ? c / u : c / (2 - u), [Math.round(t) % 360, i, d, null == o ? 1 : o]
                }, d.hsla.from = function(e) {
                    if (null == e[0] || null == e[1] || null == e[2]) return [null, null, null, e[3]];
                    var t = e[0] / 360,
                        i = e[1],
                        n = e[2],
                        a = e[3],
                        o = .5 >= n ? n * (1 + i) : n + i - n * i,
                        r = 2 * n - o;
                    return [Math.round(255 * s(r, o, t + 1 / 3)), Math.round(255 * s(r, o, t)), Math.round(255 * s(r, o, t - 1 / 3)), a]
                }, m(d, function(e, a) {
                    var s = a.props,
                        o = a.cache,
                        r = a.to,
                        c = a.from;
                    u.fn[e] = function(e) {
                        if (r && !this[o] && (this[o] = r(this._rgba)), e === i) return this[o].slice();
                        var a, l = t.type(e),
                            d = "array" === l || "object" === l ? e : arguments,
                            h = this[o].slice();
                        return m(s, function(e, t) {
                            var i = d["object" === l ? e : t.idx];
                            null == i && (i = h[t.idx]), h[t.idx] = n(i, t)
                        }), c ? (a = u(c(h)), a[o] = h, a) : u(h)
                    }, m(s, function(i, n) {
                        u.fn[i] || (u.fn[i] = function(a) {
                            var s, o = t.type(a),
                                r = "alpha" === i ? this._hsla ? "hsla" : "rgba" : e,
                                c = this[r](),
                                u = c[n.idx];
                            return "undefined" === o ? u : ("function" === o && (a = a.call(this, u), o = t.type(a)), null == a && n.empty ? this : ("string" === o && (s = l.exec(a), s && (a = u + parseFloat(s[2]) * ("+" === s[1] ? 1 : -1))), c[n.idx] = a, this[r](c)))
                        })
                    })
                }), m(r, function(e, i) {
                    t.cssHooks[i] = {
                        set: function(e, n) {
                            var s, o, r = "";
                            if ("string" !== t.type(n) || (s = a(n))) {
                                if (n = u(s || n), !p.rgba && 1 !== n._rgba[3]) {
                                    for (o = "backgroundColor" === i ? e.parentNode : e;
                                        ("" === r || "transparent" === r) && o && o.style;) try {
                                        r = t.css(o, "backgroundColor"), o = o.parentNode
                                    } catch (l) {}
                                    n = n.blend(r && "transparent" !== r ? r : "_default")
                                }
                                n = n.toRgbaString()
                            }
                            try {
                                e.style[i] = n
                            } catch (c) {}
                        }
                    }, t.fx.step[i] = function(e) {
                        e.colorInit || (e.start = u(e.elem, i), e.end = u(e.end), e.colorInit = !0), t.cssHooks[i].set(e.elem, e.start.transition(e.end, e.pos))
                    }
                }), t.cssHooks.borderColor = {
                    expand: function(e) {
                        var t = {};
                        return m(["Top", "Right", "Bottom", "Left"], function(i, n) {
                            t["border" + n + "Color"] = e
                        }), t
                    }
                }, o = t.Color.names = {
                    aqua: "#00ffff",
                    black: "#000000",
                    blue: "#0000ff",
                    fuchsia: "#ff00ff",
                    gray: "#808080",
                    green: "#008000",
                    lime: "#00ff00",
                    maroon: "#800000",
                    navy: "#000080",
                    olive: "#808000",
                    purple: "#800080",
                    red: "#ff0000",
                    silver: "#c0c0c0",
                    teal: "#008080",
                    white: "#ffffff",
                    yellow: "#ffff00",
                    transparent: [null, null, null, 0],
                    _default: "#ffffff"
                }
            }(jQuery),
            function() {
                function i() {
                    var t, i, n = this.ownerDocument.defaultView ? this.ownerDocument.defaultView.getComputedStyle(this, null) : this.currentStyle,
                        a = {};
                    if (n && n.length && n[0] && n[n[0]])
                        for (i = n.length; i--;) t = n[i], "string" == typeof n[t] && (a[e.camelCase(t)] = n[t]);
                    else
                        for (t in n) "string" == typeof n[t] && (a[t] = n[t]);
                    return a
                }
                function n(t, i) {
                    var n, a, o = {};
                    for (n in i) a = i[n], t[n] !== a && (s[n] || (e.fx.step[n] || !isNaN(parseFloat(a))) && (o[n] = a));
                    return o
                }
                var a = ["add", "remove", "toggle"],
                    s = {
                        border: 1,
                        borderBottom: 1,
                        borderColor: 1,
                        borderLeft: 1,
                        borderRight: 1,
                        borderTop: 1,
                        borderWidth: 1,
                        margin: 1,
                        padding: 1
                    };
                e.each(["borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle"], function(t, i) {
                    e.fx.step[i] = function(e) {
                        ("none" !== e.end && !e.setAttr || 1 === e.pos && !e.setAttr) && (jQuery.style(e.elem, i, e.end), e.setAttr = !0)
                    }
                }), e.effects.animateClass = function(t, s, o, r) {
                    var l = e.speed(s, o, r);
                    return this.queue(function() {
                        var s, o = e(this),
                            r = o.attr("class") || "",
                            c = l.children ? o.find("*").andSelf() : o;
                        c = c.map(function() {
                            var t = e(this);
                            return {
                                el: t,
                                start: i.call(this)
                            }
                        }), s = function() {
                            e.each(a, function(e, i) {
                                t[i] && o[i + "Class"](t[i])
                            })
                        }, s(), c = c.map(function() {
                            return this.end = i.call(this.el[0]), this.diff = n(this.start, this.end), this
                        }), o.attr("class", r), c = c.map(function() {
                            var t = this,
                                i = e.Deferred(),
                                n = jQuery.extend({}, l, {
                                    queue: !1,
                                    complete: function() {
                                        i.resolve(t)
                                    }
                                });
                            return this.el.animate(this.diff, n), i.promise()
                        }), e.when.apply(e, c.get()).done(function() {
                            s(), e.each(arguments, function() {
                                var t = this.el;
                                e.each(this.diff, function(e) {
                                    t.css(e, "")
                                })
                            }), l.complete.call(o[0])
                        })
                    })
                }, e.fn.extend({
                    _addClass: e.fn.addClass,
                    addClass: function(t, i, n, a) {
                        return i ? e.effects.animateClass.call(this, {
                            add: t
                        }, i, n, a) : this._addClass(t)
                    },
                    _removeClass: e.fn.removeClass,
                    removeClass: function(t, i, n, a) {
                        return i ? e.effects.animateClass.call(this, {
                            remove: t
                        }, i, n, a) : this._removeClass(t)
                    },
                    _toggleClass: e.fn.toggleClass,
                    toggleClass: function(i, n, a, s, o) {
                        return "boolean" == typeof n || n === t ? a ? e.effects.animateClass.call(this, n ? {
                            add: i
                        } : {
                            remove: i
                        }, a, s, o) : this._toggleClass(i, n) : e.effects.animateClass.call(this, {
                            toggle: i
                        }, n, a, s)
                    },
                    switchClass: function(t, i, n, a, s) {
                        return e.effects.animateClass.call(this, {
                            add: i,
                            remove: t
                        }, n, a, s)
                    }
                })
            }(),
            function() {
                function a(t, i, n, a) {
                    return e.isPlainObject(t) && (i = t, t = t.effect), t = {
                        effect: t
                    }, null == i && (i = {}), e.isFunction(i) && (a = i, n = null, i = {}), ("number" == typeof i || e.fx.speeds[i]) && (a = n, n = i, i = {}), e.isFunction(n) && (a = n, n = null), i && e.extend(t, i), n = n || i.duration, t.duration = e.fx.off ? 0 : "number" == typeof n ? n : n in e.fx.speeds ? e.fx.speeds[n] : e.fx.speeds._default, t.complete = a || i.complete, t
                }
                function s(t) {
                    return !t || "number" == typeof t || e.fx.speeds[t] ? !0 : "string" != typeof t || e.effects.effect[t] ? !1 : i && e.effects[t] ? !1 : !0
                }
                e.extend(e.effects, {
                    version: "1.9.2",
                    save: function(e, t) {
                        for (var i = 0; t.length > i; i++) null !== t[i] && e.data(n + t[i], e[0].style[t[i]])
                    },
                    restore: function(e, i) {
                        var a, s;
                        for (s = 0; i.length > s; s++) null !== i[s] && (a = e.data(n + i[s]), a === t && (a = ""), e.css(i[s], a))
                    },
                    setMode: function(e, t) {
                        return "toggle" === t && (t = e.is(":hidden") ? "show" : "hide"), t
                    },
                    getBaseline: function(e, t) {
                        var i, n;
                        switch (e[0]) {
                            case "top":
                                i = 0;
                                break;
                            case "middle":
                                i = .5;
                                break;
                            case "bottom":
                                i = 1;
                                break;
                            default:
                                i = e[0] / t.height
                        }
                        switch (e[1]) {
                            case "left":
                                n = 0;
                                break;
                            case "center":
                                n = .5;
                                break;
                            case "right":
                                n = 1;
                                break;
                            default:
                                n = e[1] / t.width
                        }
                        return {
                            x: n,
                            y: i
                        }
                    },
                    createWrapper: function(t) {
                        if (t.parent().is(".ui-effects-wrapper")) return t.parent();
                        var i = {
                                width: t.outerWidth(!0),
                                height: t.outerHeight(!0),
                                "float": t.css("float")
                            },
                            n = e("<div></div>").addClass("ui-effects-wrapper").css({
                                fontSize: "100%",
                                background: "transparent",
                                border: "none",
                                margin: 0,
                                padding: 0
                            }),
                            a = {
                                width: t.width(),
                                height: t.height()
                            },
                            s = document.activeElement;
                        try {
                            s.id
                        } catch (o) {
                            s = document.body
                        }
                        return t.wrap(n), (t[0] === s || e.contains(t[0], s)) && e(s).focus(), n = t.parent(), "static" === t.css("position") ? (n.css({
                            position: "relative"
                        }), t.css({
                            position: "relative"
                        })) : (e.extend(i, {
                            position: t.css("position"),
                            zIndex: t.css("z-index")
                        }), e.each(["top", "left", "bottom", "right"], function(e, n) {
                            i[n] = t.css(n), isNaN(parseInt(i[n], 10)) && (i[n] = "auto")
                        }), t.css({
                            position: "relative",
                            top: 0,
                            left: 0,
                            right: "auto",
                            bottom: "auto"
                        })), t.css(a), n.css(i).show()
                    },
                    removeWrapper: function(t) {
                        var i = document.activeElement;
                        return t.parent().is(".ui-effects-wrapper") && (t.parent().replaceWith(t), (t[0] === i || e.contains(t[0], i)) && e(i).focus()), t
                    },
                    setTransition: function(t, i, n, a) {
                        return a = a || {}, e.each(i, function(e, i) {
                            var s = t.cssUnit(i);
                            s[0] > 0 && (a[i] = s[0] * n + s[1])
                        }), a
                    }
                }), e.fn.extend({
                    effect: function() {
                        function t(t) {
                            function i() {
                                e.isFunction(s) && s.call(a[0]), e.isFunction(t) && t()
                            }
                            var a = e(this),
                                s = n.complete,
                                o = n.mode;
                            (a.is(":hidden") ? "hide" === o : "show" === o) ? i(): r.call(a[0], n, i)
                        }
                        var n = a.apply(this, arguments),
                            s = n.mode,
                            o = n.queue,
                            r = e.effects.effect[n.effect],
                            l = !r && i && e.effects[n.effect];
                        return e.fx.off || !r && !l ? s ? this[s](n.duration, n.complete) : this.each(function() {
                            n.complete && n.complete.call(this)
                        }) : r ? o === !1 ? this.each(t) : this.queue(o || "fx", t) : l.call(this, {
                            options: n,
                            duration: n.duration,
                            callback: n.complete,
                            mode: n.mode
                        })
                    },
                    _show: e.fn.show,
                    show: function(e) {
                        if (s(e)) return this._show.apply(this, arguments);
                        var t = a.apply(this, arguments);
                        return t.mode = "show", this.effect.call(this, t)
                    },
                    _hide: e.fn.hide,
                    hide: function(e) {
                        if (s(e)) return this._hide.apply(this, arguments);
                        var t = a.apply(this, arguments);
                        return t.mode = "hide", this.effect.call(this, t)
                    },
                    __toggle: e.fn.toggle,
                    toggle: function(t) {
                        if (s(t) || "boolean" == typeof t || e.isFunction(t)) return this.__toggle.apply(this, arguments);
                        var i = a.apply(this, arguments);
                        return i.mode = "toggle", this.effect.call(this, i)
                    },
                    cssUnit: function(t) {
                        var i = this.css(t),
                            n = [];
                        return e.each(["em", "px", "%", "pt"], function(e, t) {
                            i.indexOf(t) > 0 && (n = [parseFloat(i), t])
                        }), n
                    }
                })
            }(),
            function() {
                var t = {};
                e.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function(e, i) {
                    t[i] = function(t) {
                        return Math.pow(t, e + 2)
                    }
                }), e.extend(t, {
                    Sine: function(e) {
                        return 1 - Math.cos(e * Math.PI / 2)
                    },
                    Circ: function(e) {
                        return 1 - Math.sqrt(1 - e * e)
                    },
                    Elastic: function(e) {
                        return 0 === e || 1 === e ? e : -Math.pow(2, 8 * (e - 1)) * Math.sin((80 * (e - 1) - 7.5) * Math.PI / 15)
                    },
                    Back: function(e) {
                        return e * e * (3 * e - 2)
                    },
                    Bounce: function(e) {
                        for (var t, i = 4;
                            ((t = Math.pow(2, --i)) - 1) / 11 > e;);
                        return 1 / Math.pow(4, 3 - i) - 7.5625 * Math.pow((3 * t - 2) / 22 - e, 2)
                    }
                }), e.each(t, function(t, i) {
                    e.easing["easeIn" + t] = i, e.easing["easeOut" + t] = function(e) {
                        return 1 - i(1 - e)
                    }, e.easing["easeInOut" + t] = function(e) {
                        return .5 > e ? i(2 * e) / 2 : 1 - i(-2 * e + 2) / 2
                    }
                })
            }()
    }(jQuery),
    function(e) {
        e.effects.effect.pulsate = function(t, i) {
            var n, a = e(this),
                s = e.effects.setMode(a, t.mode || "show"),
                o = "show" === s,
                r = "hide" === s,
                l = o || "hide" === s,
                c = 2 * (t.times || 5) + (l ? 1 : 0),
                u = t.duration / c,
                d = 0,
                h = a.queue(),
                p = h.length;
            for ((o || !a.is(":visible")) && (a.css("opacity", 0).show(), d = 1), n = 1; c > n; n++) a.animate({
                opacity: d
            }, u, t.easing), d = 1 - d;
            a.animate({
                opacity: d
            }, u, t.easing), a.queue(function() {
                r && a.hide(), i()
            }), p > 1 && h.splice.apply(h, [1, 0].concat(h.splice(p, c + 1))), a.dequeue()
        }
    }(jQuery),
    function(e) {
        "use strict";
        var t = function(t, i, n) {
            function a(e) {
                return r.body ? e() : (setTimeout(function() {
                    a(e)
                }), void 0)
            }
            function s() {
                l.addEventListener && l.removeEventListener("load", s), l.media = n || "all"
            }
            var o, r = e.document,
                l = r.createElement("link");
            if (i) o = i;
            else {
                var c = (r.body || r.getElementsByTagName("head")[0]).childNodes;
                o = c[c.length - 1]
            }
            var u = r.styleSheets;
            l.rel = "stylesheet", l.href = t, l.media = "only x", a(function() {
                o.parentNode.insertBefore(l, i ? o : o.nextSibling)
            });
            var d = function(e) {
                for (var t = l.href, i = u.length; i--;)
                    if (u[i].href === t) return e();
                setTimeout(function() {
                    d(e)
                })
            };
            return l.addEventListener && l.addEventListener("load", s), l.onloadcssdefined = d, d(s), l
        };
        "undefined" != typeof exports ? exports.loadCSS = t : e.loadCSS = t
    }("undefined" != typeof global ? global : this), $(function() {
        $("#footer-Make a").click(function() {
            trackEvents("CarSearch", "Footer - ByMake", $(this).attr("id").split("_")[1])
        }), $("#footer-City a").click(function() {
            trackEvents("CarSearch", "Footer - ByCity", $(this).attr("id").split("_")[1])
        })
    }), $(function() {
        $(".used-car-search-results .related_searches a").live("click", function() {
            trackEvents("CarSearch", "Related Searches", $(this).text())
        }), $(".used-bike-search-results .related_searches a").live("click", function() {
            trackEvents("BikeSearch", "Related Searches", $(this).text())
        }), $(".accessory-search-results .related_searches a").live("click", function() {
            trackEvents("AccessorySearch", "Related Searches", $(this).text())
        }), $(".accessory-search-results .breadcrumb a").click(function() {
            trackEvents("AccessorySearch", "BreadCrumb - Search", $(this).text())
        }), $(".used-bike-search-results .breadcrumb a").click(function() {
            trackEvents("BikeSearch", "BreadCrumb - Search", $(this).text().replace(" ", "-"))
        }), $(".used-car-search-results .breadcrumb a").click(function() {
            trackEvents("CarSearch", "BreadCrumb - Search", $(this).text().replace(" ", "-"))
        }), $(".used-car-refine-search #price_range").live("change", function() {
            priceRefineSearch("CarSearch")
        }), $(".used-bike-refine-search #price_range").live("change", function() {
            priceRefineSearch("BikeSearch")
        }), $(".accessory-refine-search #price_range").live("change", function() {
            priceRefineSearch("AccessorySearch")
        }), $(".used-car-refine-search .accordion-group li .filter-check a").live("click", function() {
            applyEventOnRefineSearch($(this), "CarSearch")
        }), $(".used-bike-refine-search .accordion-group li .filter-check a").live("click", function() {
            applyEventOnRefineSearch($(this), "BikeSearch")
        }), $(".accessory-refine-search .accordion-group li .filter-check a").live("click", function() {
            applyEventOnRefineSearch($(this), "AccessorySearch")
        }), $(".accessory-refine-search .expandable a").live("click", function() {
            applyEventOnRefineSearch($(this), "AccessorySearch")
        }), $(".accessory-refine-search .collapsable ul li a").live("click", function() {
            applyEventOnAccessoriesSubcategory($(this), "AccessorySearch")
        }), $(".accessory-search-results a:not(.fitmen-listing a):not(.accessory-search-results .related_searches a)").live("click", function() {
            var e = "Free";
            $(this).closest("li").hasClass("featured-listing") && (e = "Featured");
            var t = $(this).attr("href");
            $(this).hasClass("ct_text") || ($(this).hasClass("rel-cat") ? trackEvents("AccessorySearch", "Related Searches", $(this).data("label")) : t && !javascript_link(t) ? trackEvents("Accessories", "From - Search", e) : $(this).hasClass("not-saved-list") && $(this).hasClass("logged-in-user") ? trackEvents("Accessories", "Add - SavedAds", "Search") : $(this).hasClass("saved-list") && trackEvents("Accessories", "Remove - SavedAds", "Search"))
        }), $(".bike-search-results a").live("click", function() {
            var e = "Free";
            $(this).closest("li").hasClass("featured-listing") && (e = "Featured");
            var t = $(this).attr("href");
            $(this).hasClass("ct_text") || (t && !javascript_link(t) ? trackEvents("UsedBikes", "From - Search", e) : $(this).hasClass("not-saved-list") && $(this).hasClass("logged-in-user") ? trackEvents("UsedBikes", "Add - SavedAds", "Search") : $(this).hasClass("saved-list") && trackEvents("UsedBikes", "Remove - SavedAds", "Search"))
        }), $(".car-search-results a").live("click", function() {
            var e = "Free";
            $(this).closest("li").hasClass("featured-listing") && (e = "Featured");
            var t = $(this).attr("href");
            $(this).hasClass("ct_text") || (t && !javascript_link(t) ? trackEvents("UsedCars", "From - Search", e) : $(this).hasClass("not-saved-list") && $(this).hasClass("logged-in-user") ? trackEvents("UsedCars", "Add - SavedAds", "Search") : $(this).hasClass("saved-list") && trackEvents("UsedCars", "Remove - SavedAds", "Search"))
        })
    }),
    /* ========================================================================
     * Bootstrap: modal.js v3.3.6
     * http://getbootstrap.com/javascript/#modals
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t, n) {
            return this.each(function() {
                var a = e(this),
                    s = a.data("bs.modal"),
                    o = e.extend({}, i.DEFAULTS, a.data(), "object" == typeof t && t);
                s || a.data("bs.modal", s = new i(this, o)), "string" == typeof t ? s[t](n) : o.show && s.show(n)
            })
        }
        var i = function(t, i) {
            this.options = i, this.$body = e(document.body), this.$element = e(t), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, e.proxy(function() {
                this.$element.trigger("loaded.bs.modal")
            }, this))
        };
        i.VERSION = "3.3.6", i.TRANSITION_DURATION = 300, i.BACKDROP_TRANSITION_DURATION = 150, i.DEFAULTS = {
            backdrop: !0,
            keyboard: !0,
            show: !0
        }, i.prototype.toggle = function(e) {
            return this.isShown ? this.hide() : this.show(e)
        }, i.prototype.show = function(t) {
            var n = this,
                a = e.Event("show.bs.modal", {
                    relatedTarget: t
                });
            this.$element.trigger(a), this.isShown || a.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', e.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function() {
                n.$element.one("mouseup.dismiss.bs.modal", function(t) {
                    e(t.target).is(n.$element) && (n.ignoreBackdropClick = !0)
                })
            }), this.backdrop(function() {
                var a = e.support.transition && n.$element.hasClass("fade");
                n.$element.parent().length || n.$element.appendTo(n.$body), n.$element.show().scrollTop(0), n.adjustDialog(), a && n.$element[0].offsetWidth, n.$element.addClass("in"), n.enforceFocus();
                var s = e.Event("shown.bs.modal", {
                    relatedTarget: t
                });
                a ? n.$dialog.one("bsTransitionEnd", function() {
                    n.$element.trigger("focus").trigger(s)
                }).emulateTransitionEnd(i.TRANSITION_DURATION) : n.$element.trigger("focus").trigger(s)
            }))
        }, i.prototype.hide = function(t) {
            t && t.preventDefault(), t = e.Event("hide.bs.modal"), this.$element.trigger(t), this.isShown && !t.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), e(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), e.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", e.proxy(this.hideModal, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : this.hideModal())
        }, i.prototype.enforceFocus = function() {
            e(document).off("focusin.bs.modal").on("focusin.bs.modal", e.proxy(function(e) {
                this.$element[0] === e.target || this.$element.has(e.target).length || this.$element.trigger("focus")
            }, this))
        }, i.prototype.escape = function() {
            this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", e.proxy(function(e) {
                27 == e.which && this.hide()
            }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
        }, i.prototype.resize = function() {
            this.isShown ? e(window).on("resize.bs.modal", e.proxy(this.handleUpdate, this)) : e(window).off("resize.bs.modal")
        }, i.prototype.hideModal = function() {
            var e = this;
            this.$element.hide(), this.backdrop(function() {
                e.$body.removeClass("modal-open"), e.resetAdjustments(), e.resetScrollbar(), e.$element.trigger("hidden.bs.modal")
            })
        }, i.prototype.removeBackdrop = function() {
            this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
        }, i.prototype.backdrop = function(t) {
            var n = this,
                a = this.$element.hasClass("fade") ? "fade" : "";
            if (this.isShown && this.options.backdrop) {
                var s = e.support.transition && a;
                if (this.$backdrop = e(document.createElement("div")).addClass("modal-backdrop " + a).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", e.proxy(function(e) {
                        return this.ignoreBackdropClick ? (this.ignoreBackdropClick = !1, void 0) : (e.target === e.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()), void 0)
                    }, this)), s && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !t) return;
                s ? this.$backdrop.one("bsTransitionEnd", t).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : t()
            } else if (!this.isShown && this.$backdrop) {
                this.$backdrop.removeClass("in");
                var o = function() {
                    n.removeBackdrop(), t && t()
                };
                e.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", o).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : o()
            } else t && t()
        }, i.prototype.handleUpdate = function() {
            this.adjustDialog()
        }, i.prototype.adjustDialog = function() {
            var e = this.$element[0].scrollHeight > document.documentElement.clientHeight;
            this.$element.css({
                paddingLeft: !this.bodyIsOverflowing && e ? this.scrollbarWidth : "",
                paddingRight: this.bodyIsOverflowing && !e ? this.scrollbarWidth : ""
            })
        }, i.prototype.resetAdjustments = function() {
            this.$element.css({
                paddingLeft: "",
                paddingRight: ""
            })
        }, i.prototype.checkScrollbar = function() {
            var e = window.innerWidth;
            if (!e) {
                var t = document.documentElement.getBoundingClientRect();
                e = t.right - Math.abs(t.left)
            }
            this.bodyIsOverflowing = document.body.clientWidth < e, this.scrollbarWidth = this.measureScrollbar()
        }, i.prototype.setScrollbar = function() {
            var e = parseInt(this.$body.css("padding-right") || 0, 10);
            this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", e + this.scrollbarWidth)
        }, i.prototype.resetScrollbar = function() {
            this.$body.css("padding-right", this.originalBodyPad)
        }, i.prototype.measureScrollbar = function() {
            var e = document.createElement("div");
            e.className = "modal-scrollbar-measure", this.$body.append(e);
            var t = e.offsetWidth - e.clientWidth;
            return this.$body[0].removeChild(e), t
        };
        var n = e.fn.modal;
        e.fn.modal = t, e.fn.modal.Constructor = i, e.fn.modal.noConflict = function() {
            return e.fn.modal = n, this
        }, e(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(i) {
            var n = e(this),
                a = n.attr("href"),
                s = e(n.attr("data-target") || a && a.replace(/.*(?=#[^\s]+$)/, "")),
                o = s.data("bs.modal") ? "toggle" : e.extend({
                    remote: !/#/.test(a) && a
                }, s.data(), n.data());
            n.is("a") && i.preventDefault(), s.one("show.bs.modal", function(e) {
                e.isDefaultPrevented() || s.one("hidden.bs.modal", function() {
                    n.is(":visible") && n.trigger("focus")
                })
            }), t.call(s, o, this)
        })
    }(jQuery),
    /* ========================================================================
     * Bootstrap: collapse.js v3.3.6
     * http://getbootstrap.com/javascript/#collapse
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t) {
            var i, n = t.attr("data-target") || (i = t.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "");
            return e(n)
        }
        function i(t) {
            return this.each(function() {
                var i = e(this),
                    a = i.data("bs.collapse"),
                    s = e.extend({}, n.DEFAULTS, i.data(), "object" == typeof t && t);
                !a && s.toggle && /show|hide/.test(t) && (s.toggle = !1), a || i.data("bs.collapse", a = new n(this, s)), "string" == typeof t && a[t]()
            })
        }
        var n = function(t, i) {
            this.$element = e(t), this.options = e.extend({}, n.DEFAULTS, i), this.$trigger = e('[data-toggle="collapse"][href="#' + t.id + '"],' + '[data-toggle="collapse"][data-target="#' + t.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
        };
        n.VERSION = "3.3.6", n.TRANSITION_DURATION = 350, n.DEFAULTS = {
            toggle: !0
        }, n.prototype.dimension = function() {
            var e = this.$element.hasClass("width");
            return e ? "width" : "height"
        }, n.prototype.show = function() {
            if (!this.transitioning && !this.$element.hasClass("in")) {
                var t, a = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                if (!(a && a.length && (t = a.data("bs.collapse"), t && t.transitioning))) {
                    var s = e.Event("show.bs.collapse");
                    if (this.$element.trigger(s), !s.isDefaultPrevented()) {
                        a && a.length && (i.call(a, "hide"), t || a.data("bs.collapse", null));
                        var o = this.dimension();
                        this.$element.removeClass("collapse").addClass("collapsing")[o](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                        var r = function() {
                            this.$element.removeClass("collapsing").addClass("collapse in")[o](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                        };
                        if (!e.support.transition) return r.call(this);
                        var l = e.camelCase(["scroll", o].join("-"));
                        this.$element.one("bsTransitionEnd", e.proxy(r, this)).emulateTransitionEnd(n.TRANSITION_DURATION)[o](this.$element[0][l])
                    }
                }
            }
        }, n.prototype.hide = function() {
            if (!this.transitioning && this.$element.hasClass("in")) {
                var t = e.Event("hide.bs.collapse");
                if (this.$element.trigger(t), !t.isDefaultPrevented()) {
                    var i = this.dimension();
                    this.$element[i](this.$element[i]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                    var a = function() {
                        this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                    };
                    return e.support.transition ? (this.$element[i](0).one("bsTransitionEnd", e.proxy(a, this)).emulateTransitionEnd(n.TRANSITION_DURATION), void 0) : a.call(this)
                }
            }
        }, n.prototype.toggle = function() {
            this[this.$element.hasClass("in") ? "hide" : "show"]()
        }, n.prototype.getParent = function() {
            return e(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(e.proxy(function(i, n) {
                var a = e(n);
                this.addAriaAndCollapsedClass(t(a), a)
            }, this)).end()
        }, n.prototype.addAriaAndCollapsedClass = function(e, t) {
            var i = e.hasClass("in");
            e.attr("aria-expanded", i), t.toggleClass("collapsed", !i).attr("aria-expanded", i)
        };
        var a = e.fn.collapse;
        e.fn.collapse = i, e.fn.collapse.Constructor = n, e.fn.collapse.noConflict = function() {
            return e.fn.collapse = a, this
        }, e(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(n) {
            var a = e(this);
            a.attr("data-target") || n.preventDefault();
            var s = t(a),
                o = s.data("bs.collapse"),
                r = o ? "toggle" : a.data();
            i.call(s, r)
        })
    }(jQuery),
    /*!
     * Lazy Load - jQuery plugin for lazy loading images
     *
     * Copyright (c) 2007-2015 Mika Tuupola
     *
     * Licensed under the MIT license:
     *   http://www.opensource.org/licenses/mit-license.php
     *
     * Project home:
     *   http://www.appelsiini.net/projects/lazyload
     *
     * Version:  1.9.7
     *
     */
    function(e, t, i, n) {
        var a = e(t);
        e.fn.lazyload = function(s) {
            function o() {
                var t = 0;
                l.each(function() {
                    var i = e(this);
                    if (!c.skip_invisible || i.is(":visible"))
                        if (e.abovethetop(this, c) || e.leftofbegin(this, c));
                        else if (e.belowthefold(this, c) || e.rightoffold(this, c)) {
                        if (++t > c.failure_limit) return !1
                    } else i.trigger("appear"), t = 0
                })
            }
            var r, l = this,
                c = {
                    threshold: 0,
                    failure_limit: 0,
                    event: "scroll",
                    effect: "show",
                    container: t,
                    data_attribute: "original",
                    skip_invisible: !1,
                    appear: null,
                    load: null,
                    placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                };
            return s && (n !== s.failurelimit && (s.failure_limit = s.failurelimit, delete s.failurelimit), n !== s.effectspeed && (s.effect_speed = s.effectspeed, delete s.effectspeed), e.extend(c, s)), r = c.container === n || c.container === t ? a : e(c.container), 0 === c.event.indexOf("scroll") && r.bind(c.event, function() {
                return o()
            }), this.each(function() {
                var t = this,
                    i = e(t);
                t.loaded = !1, (i.attr("src") === n || i.attr("src") === !1) && i.is("img") && i.attr("src", c.placeholder), i.one("appear", function() {
                    if (!this.loaded) {
                        if (c.appear) {
                            var n = l.length;
                            c.appear.call(t, n, c)
                        }
                        e("<img />").bind("load", function() {
                            var n = i.attr("data-" + c.data_attribute);
                            i.hide(), i.is("img") ? i.attr("src", n) : i.css("background-image", "url('" + n + "')"), i[c.effect](c.effect_speed), t.loaded = !0;
                            var a = e.grep(l, function(e) {
                                return !e.loaded
                            });
                            if (l = e(a), c.load) {
                                var s = l.length;
                                c.load.call(t, s, c)
                            }
                        }).attr("src", i.attr("data-" + c.data_attribute))
                    }
                }), 0 !== c.event.indexOf("scroll") && i.bind(c.event, function() {
                    t.loaded || i.trigger("appear")
                })
            }), a.bind("resize", function() {
                o()
            }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && a.bind("pageshow", function(t) {
                t.originalEvent && t.originalEvent.persisted && l.each(function() {
                    e(this).trigger("appear")
                })
            }), e(i).ready(function() {
                o()
            }), this
        }, e.belowthefold = function(i, s) {
            var o;
            return o = s.container === n || s.container === t ? (t.innerHeight ? t.innerHeight : a.height()) + a.scrollTop() : e(s.container).offset().top + e(s.container).height(), o <= e(i).offset().top - s.threshold
        }, e.rightoffold = function(i, s) {
            var o;
            return o = s.container === n || s.container === t ? a.width() + a.scrollLeft() : e(s.container).offset().left + e(s.container).width(), o <= e(i).offset().left - s.threshold
        }, e.abovethetop = function(i, s) {
            var o;
            return o = s.container === n || s.container === t ? a.scrollTop() : e(s.container).offset().top, o >= e(i).offset().top + s.threshold + e(i).height()
        }, e.leftofbegin = function(i, s) {
            var o;
            return o = s.container === n || s.container === t ? a.scrollLeft() : e(s.container).offset().left, o >= e(i).offset().left + s.threshold + e(i).width()
        }, e.inviewport = function(t, i) {
            return !(e.rightoffold(t, i) || e.leftofbegin(t, i) || e.belowthefold(t, i) || e.abovethetop(t, i))
        }, e.extend(e.expr[":"], {
            "below-the-fold": function(t) {
                return e.belowthefold(t, {
                    threshold: 0
                })
            },
            "above-the-top": function(t) {
                return !e.belowthefold(t, {
                    threshold: 0
                })
            },
            "right-of-screen": function(t) {
                return e.rightoffold(t, {
                    threshold: 0
                })
            },
            "left-of-screen": function(t) {
                return !e.rightoffold(t, {
                    threshold: 0
                })
            },
            "in-viewport": function(t) {
                return e.inviewport(t, {
                    threshold: 0
                })
            },
            "above-the-fold": function(t) {
                return !e.belowthefold(t, {
                    threshold: 0
                })
            },
            "right-of-fold": function(t) {
                return e.rightoffold(t, {
                    threshold: 0
                })
            },
            "left-of-fold": function(t) {
                return !e.rightoffold(t, {
                    threshold: 0
                })
            }
        })
    }(jQuery, window, document), $(function() {
        $(".carousel").on("slide.bs.carousel", function(e) {
            var t = $(e.relatedTarget).find("img");
            $.each(t, function(e, t) {
                $(t).attr("src", $(t).data("original"))
            })
        });
        var e = $(".carousel.lazy-slider");
        $.each(e, function(e, t) {
            var i = $(t).data("per-slide") ? $(t).data("per-slide") : 4;
            applyImagesLazyLoad($(t).find("img").slice(0, i))
        })
    }),
    /*!
     * jQuery Cookie Plugin v1.4.0
     * https://github.com/carhartl/jquery-cookie
     *
     * Copyright 2013 Klaus Hartl
     * Released under the MIT license
     */
    function(e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
    }(function(e) {
        function t(e) {
            return r.raw ? e : encodeURIComponent(e)
        }
        function i(e) {
            return r.raw ? e : decodeURIComponent(e)
        }
        function n(e) {
            return t(r.json ? JSON.stringify(e) : String(e))
        }
        function a(e) {
            0 === e.indexOf('"') && (e = e.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                return e = decodeURIComponent(e.replace(o, " ")), r.json ? JSON.parse(e) : e
            } catch (t) {}
        }
        function s(t, i) {
            var n = r.raw ? t : a(t);
            return e.isFunction(i) ? i(n) : n
        }
        var o = /\+/g,
            r = e.cookie = function(a, o, l) {
                if (void 0 !== o && !e.isFunction(o)) {
                    if (l = e.extend({}, r.defaults, l), "number" == typeof l.expires) {
                        var c = l.expires,
                            u = l.expires = new Date;
                        u.setTime(+u + 864e5 * c)
                    }
                    return document.cookie = [t(a), "=", n(o), l.expires ? "; expires=" + l.expires.toUTCString() : "", l.path ? "; path=" + l.path : "", l.domain ? "; domain=" + l.domain : "", l.secure ? "; secure" : ""].join("")
                }
                for (var d = a ? void 0 : {}, h = document.cookie ? document.cookie.split("; ") : [], p = 0, f = h.length; f > p; p++) {
                    var m = h[p].split("="),
                        v = i(m.shift()),
                        g = m.join("=");
                    if (a && a === v) {
                        d = s(g, o);
                        break
                    }
                    a || void 0 === (g = s(g)) || (d[v] = g)
                }
                return d
            };
        r.defaults = {}, e.removeCookie = function(t, i) {
            return void 0 === e.cookie(t) ? !1 : (e.cookie(t, "", e.extend({}, i, {
                expires: -1
            })), !e.cookie(t))
        }
    }),
    /* ========================================================================
     * Bootstrap: tooltip.js v3.3.6
     * http://getbootstrap.com/javascript/#tooltip
     * Inspired by the original jQuery.tipsy by Jason Frame
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t) {
            return this.each(function() {
                var n = e(this),
                    a = n.data("bs.tooltip"),
                    s = "object" == typeof t && t;
                (a || !/destroy|hide/.test(t)) && (a || n.data("bs.tooltip", a = new i(this, s)), "string" == typeof t && a[t]())
            })
        }
        var i = function(e, t) {
            this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", e, t)
        };
        i.VERSION = "3.3.6", i.TRANSITION_DURATION = 150, i.DEFAULTS = {
            animation: !0,
            placement: "top",
            selector: !1,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            container: !1,
            viewport: {
                selector: "body",
                padding: 0
            }
        }, i.prototype.init = function(t, i, n) {
            if (this.enabled = !0, this.type = t, this.$element = e(i), this.options = this.getOptions(n), this.$viewport = this.options.viewport && e(e.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
                    click: !1,
                    hover: !1,
                    focus: !1
                }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
            for (var a = this.options.trigger.split(" "), s = a.length; s--;) {
                var o = a[s];
                if ("click" == o) this.$element.on("click." + this.type, this.options.selector, e.proxy(this.toggle, this));
                else if ("manual" != o) {
                    var r = "hover" == o ? "mouseenter" : "focusin",
                        l = "hover" == o ? "mouseleave" : "focusout";
                    this.$element.on(r + "." + this.type, this.options.selector, e.proxy(this.enter, this)), this.$element.on(l + "." + this.type, this.options.selector, e.proxy(this.leave, this))
                }
            }
            this.options.selector ? this._options = e.extend({}, this.options, {
                trigger: "manual",
                selector: ""
            }) : this.fixTitle()
        }, i.prototype.getDefaults = function() {
            return i.DEFAULTS
        }, i.prototype.getOptions = function(t) {
            return t = e.extend({}, this.getDefaults(), this.$element.data(), t), t.delay && "number" == typeof t.delay && (t.delay = {
                show: t.delay,
                hide: t.delay
            }), t
        }, i.prototype.getDelegateOptions = function() {
            var t = {},
                i = this.getDefaults();
            return this._options && e.each(this._options, function(e, n) {
                i[e] != n && (t[e] = n)
            }), t
        }, i.prototype.enter = function(t) {
            var i = t instanceof this.constructor ? t : e(t.currentTarget).data("bs." + this.type);
            return i || (i = new this.constructor(t.currentTarget, this.getDelegateOptions()), e(t.currentTarget).data("bs." + this.type, i)), t instanceof e.Event && (i.inState["focusin" == t.type ? "focus" : "hover"] = !0), i.tip().hasClass("in") || "in" == i.hoverState ? (i.hoverState = "in", void 0) : (clearTimeout(i.timeout), i.hoverState = "in", i.options.delay && i.options.delay.show ? (i.timeout = setTimeout(function() {
                "in" == i.hoverState && i.show()
            }, i.options.delay.show), void 0) : i.show())
        }, i.prototype.isInStateTrue = function() {
            for (var e in this.inState)
                if (this.inState[e]) return !0;
            return !1
        }, i.prototype.leave = function(t) {
            var i = t instanceof this.constructor ? t : e(t.currentTarget).data("bs." + this.type);
            return i || (i = new this.constructor(t.currentTarget, this.getDelegateOptions()), e(t.currentTarget).data("bs." + this.type, i)), t instanceof e.Event && (i.inState["focusout" == t.type ? "focus" : "hover"] = !1), i.isInStateTrue() ? void 0 : (clearTimeout(i.timeout), i.hoverState = "out", i.options.delay && i.options.delay.hide ? (i.timeout = setTimeout(function() {
                "out" == i.hoverState && i.hide()
            }, i.options.delay.hide), void 0) : i.hide())
        }, i.prototype.show = function() {
            var t = e.Event("show.bs." + this.type);
            if (this.hasContent() && this.enabled) {
                this.$element.trigger(t);
                var n = e.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
                if (t.isDefaultPrevented() || !n) return;
                var a = this,
                    s = this.tip(),
                    o = this.getUID(this.type);
                this.setContent(), s.attr("id", o), this.$element.attr("aria-describedby", o), this.options.animation && s.addClass("fade");
                var r = "function" == typeof this.options.placement ? this.options.placement.call(this, s[0], this.$element[0]) : this.options.placement,
                    l = /\s?auto?\s?/i,
                    c = l.test(r);
                c && (r = r.replace(l, "") || "top"), s.detach().css({
                    top: 0,
                    left: 0,
                    display: "block"
                }).addClass(r).data("bs." + this.type, this), this.options.container ? s.appendTo(this.options.container) : s.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
                var u = this.getPosition(),
                    d = s[0].offsetWidth,
                    h = s[0].offsetHeight;
                if (c) {
                    var p = r,
                        f = this.getPosition(this.$viewport);
                    r = "bottom" == r && u.bottom + h > f.bottom ? "top" : "top" == r && u.top - h < f.top ? "bottom" : "right" == r && u.right + d > f.width ? "left" : "left" == r && u.left - d < f.left ? "right" : r, s.removeClass(p).addClass(r)
                }
                var m = this.getCalculatedOffset(r, u, d, h);
                this.applyPlacement(m, r);
                var v = function() {
                    var e = a.hoverState;
                    a.$element.trigger("shown.bs." + a.type), a.hoverState = null, "out" == e && a.leave(a)
                };
                e.support.transition && this.$tip.hasClass("fade") ? s.one("bsTransitionEnd", v).emulateTransitionEnd(i.TRANSITION_DURATION) : v()
            }
        }, i.prototype.applyPlacement = function(t, i) {
            var n = this.tip(),
                a = n[0].offsetWidth,
                s = n[0].offsetHeight,
                o = parseInt(n.css("margin-top"), 10),
                r = parseInt(n.css("margin-left"), 10);
            isNaN(o) && (o = 0), isNaN(r) && (r = 0), t.top += o, t.left += r, e.offset.setOffset(n[0], e.extend({
                using: function(e) {
                    n.css({
                        top: Math.round(e.top),
                        left: Math.round(e.left)
                    })
                }
            }, t), 0), n.addClass("in");
            var l = n[0].offsetWidth,
                c = n[0].offsetHeight;
            "top" == i && c != s && (t.top = t.top + s - c);
            var u = this.getViewportAdjustedDelta(i, t, l, c);
            u.left ? t.left += u.left : t.top += u.top;
            var d = /top|bottom/.test(i),
                h = d ? 2 * u.left - a + l : 2 * u.top - s + c,
                p = d ? "offsetWidth" : "offsetHeight";
            n.offset(t), this.replaceArrow(h, n[0][p], d)
        }, i.prototype.replaceArrow = function(e, t, i) {
            this.arrow().css(i ? "left" : "top", 50 * (1 - e / t) + "%").css(i ? "top" : "left", "")
        }, i.prototype.setContent = function() {
            var e = this.tip(),
                t = this.getTitle();
            e.find(".tooltip-inner")[this.options.html ? "html" : "text"](t), e.removeClass("fade in top bottom left right")
        }, i.prototype.hide = function(t) {
            function n() {
                "in" != a.hoverState && s.detach(), a.$element.removeAttr("aria-describedby").trigger("hidden.bs." + a.type), t && t()
            }
            var a = this,
                s = e(this.$tip),
                o = e.Event("hide.bs." + this.type);
            return this.$element.trigger(o), o.isDefaultPrevented() ? void 0 : (s.removeClass("in"), e.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", n).emulateTransitionEnd(i.TRANSITION_DURATION) : n(), this.hoverState = null, this)
        }, i.prototype.fixTitle = function() {
            var e = this.$element;
            (e.attr("title") || "string" != typeof e.attr("data-original-title")) && e.attr("data-original-title", e.attr("title") || "").attr("title", "")
        }, i.prototype.hasContent = function() {
            return this.getTitle()
        }, i.prototype.getPosition = function(t) {
            t = t || this.$element;
            var i = t[0],
                n = "BODY" == i.tagName,
                a = i.getBoundingClientRect();
            null == a.width && (a = e.extend({}, a, {
                width: a.right - a.left,
                height: a.bottom - a.top
            }));
            var s = n ? {
                    top: 0,
                    left: 0
                } : t.offset(),
                o = {
                    scroll: n ? document.documentElement.scrollTop || document.body.scrollTop : t.scrollTop()
                },
                r = n ? {
                    width: e(window).width(),
                    height: e(window).height()
                } : null;
            return e.extend({}, a, o, r, s)
        }, i.prototype.getCalculatedOffset = function(e, t, i, n) {
            return "bottom" == e ? {
                top: t.top + t.height,
                left: t.left + t.width / 2 - i / 2
            } : "top" == e ? {
                top: t.top - n,
                left: t.left + t.width / 2 - i / 2
            } : "left" == e ? {
                top: t.top + t.height / 2 - n / 2,
                left: t.left - i
            } : {
                top: t.top + t.height / 2 - n / 2,
                left: t.left + t.width
            }
        }, i.prototype.getViewportAdjustedDelta = function(e, t, i, n) {
            var a = {
                top: 0,
                left: 0
            };
            if (!this.$viewport) return a;
            var s = this.options.viewport && this.options.viewport.padding || 0,
                o = this.getPosition(this.$viewport);
            if (/right|left/.test(e)) {
                var r = t.top - s - o.scroll,
                    l = t.top + s - o.scroll + n;
                r < o.top ? a.top = o.top - r : l > o.top + o.height && (a.top = o.top + o.height - l)
            } else {
                var c = t.left - s,
                    u = t.left + s + i;
                c < o.left ? a.left = o.left - c : u > o.right && (a.left = o.left + o.width - u)
            }
            return a
        }, i.prototype.getTitle = function() {
            var e, t = this.$element,
                i = this.options;
            return e = t.attr("data-original-title") || ("function" == typeof i.title ? i.title.call(t[0]) : i.title)
        }, i.prototype.getUID = function(e) {
            do e += ~~(1e6 * Math.random()); while (document.getElementById(e));
            return e
        }, i.prototype.tip = function() {
            if (!this.$tip && (this.$tip = e(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
            return this.$tip
        }, i.prototype.arrow = function() {
            return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
        }, i.prototype.enable = function() {
            this.enabled = !0
        }, i.prototype.disable = function() {
            this.enabled = !1
        }, i.prototype.toggleEnabled = function() {
            this.enabled = !this.enabled
        }, i.prototype.toggle = function(t) {
            var i = this;
            t && (i = e(t.currentTarget).data("bs." + this.type), i || (i = new this.constructor(t.currentTarget, this.getDelegateOptions()), e(t.currentTarget).data("bs." + this.type, i))), t ? (i.inState.click = !i.inState.click, i.isInStateTrue() ? i.enter(i) : i.leave(i)) : i.tip().hasClass("in") ? i.leave(i) : i.enter(i)
        }, i.prototype.destroy = function() {
            var e = this;
            clearTimeout(this.timeout), this.hide(function() {
                e.$element.off("." + e.type).removeData("bs." + e.type), e.$tip && e.$tip.detach(), e.$tip = null, e.$arrow = null, e.$viewport = null
            })
        };
        var n = e.fn.tooltip;
        e.fn.tooltip = t, e.fn.tooltip.Constructor = i, e.fn.tooltip.noConflict = function() {
            return e.fn.tooltip = n, this
        }
    }(jQuery),
    /* ========================================================================
     * Bootstrap: popover.js v3.3.6
     * http://getbootstrap.com/javascript/#popovers
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t) {
            return this.each(function() {
                var n = e(this),
                    a = n.data("bs.popover"),
                    s = "object" == typeof t && t;
                (a || !/destroy|hide/.test(t)) && (a || n.data("bs.popover", a = new i(this, s)), "string" == typeof t && a[t]())
            })
        }
        var i = function(e, t) {
            this.init("popover", e, t)
        };
        if (!e.fn.tooltip) throw new Error("Popover requires tooltip.js");
        i.VERSION = "3.3.6", i.DEFAULTS = e.extend({}, e.fn.tooltip.Constructor.DEFAULTS, {
            placement: "right",
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
        }), i.prototype = e.extend({}, e.fn.tooltip.Constructor.prototype), i.prototype.constructor = i, i.prototype.getDefaults = function() {
            return i.DEFAULTS
        }, i.prototype.setContent = function() {
            var e = this.tip(),
                t = this.getTitle(),
                i = this.getContent();
            e.find(".popover-title")[this.options.html ? "html" : "text"](t), e.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof i ? "html" : "append" : "text"](i), e.removeClass("fade top bottom left right in"), e.find(".popover-title").html() || e.find(".popover-title").hide()
        }, i.prototype.hasContent = function() {
            return this.getTitle() || this.getContent()
        }, i.prototype.getContent = function() {
            var e = this.$element,
                t = this.options;
            return e.attr("data-content") || ("function" == typeof t.content ? t.content.call(e[0]) : t.content)
        }, i.prototype.arrow = function() {
            return this.$arrow = this.$arrow || this.tip().find(".arrow")
        };
        var n = e.fn.popover;
        e.fn.popover = t, e.fn.popover.Constructor = i, e.fn.popover.noConflict = function() {
            return e.fn.popover = n, this
        }
    }(jQuery), $(window).on("load pjax:complete", function() {
        $(".add-cart-item").click(function() {
            var e = $(this).data("quantityId"),
                t = $("#" + e).val(),
                i = $(this).data("productId"),
                n = $(this).next().length > 0 ? $(this).next() : $(this).parent().next(),
                a = $(this),
                s = change_url_for_urdu("/carts/add_to_cart");
            $.ajax({
                type: "POST",
                data: {
                    product_id: i,
                    quantity: t,
                    authencity_token: $('meta[name="csrf-token"]').attr("content")
                },
                url: s,
                success: function(e) {
                    "" == e.error && ($("#cart-count").html(e.cart_count), $("#cart-url").attr("href", change_url_for_urdu("/buy/checkout")), $("#cart-count").css("display", "inline-block"), $(a).closest(".quantizer-info").html("").append($(n).show().on("click", function(e) {
                        e.stopPropagation()
                    })))
                }
            })
        })
    }), window.addEventListener("load", function() {
        OneSignal.on("subscriptionChange", function(e) {
            e && (setOneSignalUserIdInCookies(), $.ajax({
                url: "/users/register_onesignal_web_token",
                type: "GET",
                retryLimit: 3
            }))
        }), setOneSignalUserIdInCookies()
    }, !1), $.listen && $.listen("parsley:form:validated", function(e) {
        e.isValid() || parsley_scroll_to_first_error(), "" == $("#used_bike_bike_model_id").val() && $("#bike-info").children(".parsley-errors-list").html('<li class="parsley-custom-error-message">' + $("#ManModYrId").data("parsley-error-message") + "</li>"), "" == $("#used_car_car_model_id").val() && $("#car-info").children(".parsley-errors-list").html('<li class="parsley-custom-error-message">' + $("#ManModYrId").data("parsley-error-message") + "</li>")
    }), $(window).load(function() {
        initPopover(), $(window).on("pjax:complete", function() {
            initPopover()
        })
    }), "function" != typeof String.prototype.trim && (String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g, "")
    });
var makeN = "",
    modelN = "",
    versionN = "",
    priceN = "",
    yearN = "",
    cityN = "",
    cityR = "",
    cityA = "",
    engineN = "",
    transN = "",
    postedN = "",
    pictureN = "",
    statusN = "",
    userN = "",
    mlN = "",
    capacityN = "",
    carAssembly = "",
    featuredN = "",
    sellerN = "",
    colorN = "",
    certifiedN = "",
    bodyTypeN = "",
    versionGroupN = ""; // copyright chris wanstrath
pjax_handle_pop_state = !0, pageLoadStart = 0,
    function(e) {
        function t(t, n, a) {
            var s = this;
            return this.on("click.pjax", t, function(t) {
                var o = e.extend({}, h(n, a));
                o.container || (o.container = e(this).attr("data-pjax") || s), i(t, o)
            })
        }
        function i(t, i, n) {
            n = h(i, n);
            var s = t.currentTarget;
            if ("A" !== s.tagName.toUpperCase()) throw "$.fn.pjax or $.pjax.click requires an anchor element";
            if (!(t.which > 1 || t.metaKey || t.ctrlKey || t.shiftKey || t.altKey || location.protocol !== s.protocol || location.host !== s.host || s.hash && s.href.replace(s.hash, "") === location.href.replace(location.hash, "") || s.href === location.href + "#")) {
                var o = {
                    url: s.href,
                    container: e(s).attr("data-pjax"),
                    target: s,
                    fragment: null
                };
                a(e.extend({}, o, n)), t.preventDefault()
            }
        }
        function n(t, i, n) {
            n = h(i, n);
            var s = t.currentTarget;
            if ("FORM" !== s.tagName.toUpperCase()) throw "$.pjax.submit requires a form element";
            var o = {
                type: s.method,
                url: s.action,
                data: e(s).serializeArray(),
                container: e(s).attr("data-pjax"),
                target: s,
                fragment: null
            };
            a(e.extend({}, o, n)), t.preventDefault()
        }
        function a(t) {
            function i(t, i) {
                var a = e.Event(t, {
                    relatedTarget: n
                });
                return r.trigger(a, i), !a.isDefaultPrevented()
            }
            t = e.extend(!0, {}, e.ajaxSettings, a.defaults, t), e.isFunction(t.url) && (t.url = t.url());
            var n = t.target,
                s = d(t.url).hash,
                r = t.context = p(t.container);
            t.data || (t.data = {}), t.data._pjax = r.selector;
            var l;
            t.beforeSend = function(e, n) {
                return "GET" !== n.type && (n.timeout = 0), e.setRequestHeader("X-PJAX", "true"), e.setRequestHeader("X-PJAX-Container", r.selector), i("pjax:beforeSend", [e, n]) ? (n.timeout > 0 && (l = setTimeout(function() {
                    i("pjax:timeout", [e, t]) && e.abort("timeout")
                }, n.timeout), n.timeout = 0), t.requestUrl = d(n.url).href, void 0) : !1
            }, t.complete = function(e, n) {
                l && clearTimeout(l), i("pjax:complete", [e, n, t]), i("pjax:end", [e, t])
            }, t.error = function(e, n, a) {
                var s = m("", e, t),
                    r = i("pjax:error", [e, n, a, t]);
                "GET" == t.type && "abort" !== n && r && o(s.url)
            }, t.success = function(n, l, u) {
                var h = m(n, u, t);
                if (!h.contents) return o(h.url), void 0;
                if (a.state = {
                        id: t.id || c(),
                        url: h.url,
                        title: h.title,
                        container: r.selector,
                        fragment: t.fragment,
                        timeout: t.timeout
                    }, (t.push || t.replace) && window.history.replaceState(a.state, h.title, h.url), i("pjax:before:content", [n, l, u, t]), h.title && (document.title = h.title), r.html(h.contents), "number" == typeof t.scrollTo && e(window).scrollTop(t.scrollTo), window.dataLayer && (dataLayer.push({
                        event: "ga-pageview",
                        pageLoadTime: Date.now() - pageLoadStart
                    }), pageLoadStart = 0), "" !== s) {
                    var p = d(h.url);
                    p.hash = s, a.state.url = p.href, window.history.replaceState(a.state, h.title, p.href);
                    var f = e(p.hash);
                    f.length && e(window).scrollTop(f.offset().top)
                }
                i("pjax:success", [n, l, u, t])
            }, a.state || (a.state = {
                id: c(),
                url: window.location.href,
                title: document.title,
                container: r.selector,
                fragment: t.fragment,
                timeout: t.timeout
            }, window.history.replaceState(a.state, document.title));
            var h = a.xhr;
            h && h.readyState < 4 && (h.onreadystatechange = e.noop, h.abort()), a.options = t;
            var h = a.xhr = e.ajax(t);
            return h.readyState > 0 && (t.push && !t.replace && (v(a.state.id, r.clone().contents()), window.history.pushState(null, "", u(t.requestUrl))), i("pjax:start", [h, t]), pageLoadStart = Date.now(), i("pjax:send", [h, t])), a.xhr
        }
        function s(t, i) {
            var n = {
                url: window.location.href,
                push: !1,
                replace: !0,
                scrollTo: !1
            };
            return a(e.extend(n, h(t, i)))
        }
        function o(e) {
            window.history.replaceState(null, "", "#"), window.location.replace(e)
        }
        function r(t) {
            if (!pjax_handle_pop_state) return pjax_handle_pop_state = !0, void 0;
            var i = t.state;
            if (i && i.container) {
                var n = e(i.container);
                if (n.length) {
                    var s = b[i.id];
                    if (!a.state) return a.state = i, void 0;
                    var r = a.state.id < i.id ? "forward" : "back";
                    g(r, a.state.id, n.clone().contents());
                    var l = e.Event("pjax:popstate", {
                        state: i,
                        direction: r
                    });
                    n.trigger(l);
                    var c = {
                        id: i.id,
                        url: i.url,
                        container: n,
                        push: !1,
                        fragment: i.fragment,
                        timeout: i.timeout,
                        scrollTo: !1
                    };
                    s ? (n.trigger("pjax:start", [null, c]), i.title && (document.title = i.title), n.html(s), a.state = i, n.trigger("pjax:end", [null, c])) : a(c), n[0].offsetHeight
                } else o(location.href)
            }
        }
        function l(t) {
            var i = e.isFunction(t.url) ? t.url() : t.url,
                n = t.type ? t.type.toUpperCase() : "GET",
                a = i.split("?");
            if ("" != a[0] && void 0 != a[0]) return window.location.href = i, void 0;
            var s = e("<form>", {
                method: "GET" === n ? "GET" : "POST",
                action: i,
                style: "display:none"
            });
            "GET" !== n && "POST" !== n && s.append(e("<input>", {
                type: "hidden",
                name: "_method",
                value: n.toLowerCase()
            }));
            var o = t.data;
            if ("string" == typeof o) e.each(o.split("&"), function(t, i) {
                var n = i.split("=");
                s.append(e("<input>", {
                    type: "hidden",
                    name: n[0],
                    value: n[1]
                }))
            });
            else if ("object" == typeof o)
                for (key in o) s.append(e("<input>", {
                    type: "hidden",
                    name: key,
                    value: o[key]
                }));
            e(document.body).append(s), s.submit()
        }
        function c() {
            return (new Date).getTime()
        }
        function u(e) {
            return e.replace(/\?_pjax=[^&]+&?/, "?").replace(/_pjax=[^&]+&?/, "").replace(/[\?&]$/, "")
        }
        function d(e) {
            var t = document.createElement("a");
            return t.href = e, t
        }
        function h(t, i) {
            return t && i ? i.container = t : i = e.isPlainObject(t) ? t : {
                container: t
            }, i.container && (i.container = p(i.container)), i
        }
        function p(t) {
            if (t = e(t), t.length) {
                if ("" !== t.selector && t.context === document) return t;
                if (t.attr("id")) return e("#" + t.attr("id"));
                throw "cant get selector for pjax container!"
            }
            throw "no pjax container for " + t.selector
        }
        function f(e, t) {
            return e.filter(t).add(e.find(t))
        }
        function m(t, i, n) {
            var a = {};
            if (url = u(i.getResponseHeader("X-PJAX-URL") || n.requestUrl), split_url = url.split("?"), url = split_url[0], !/\/$/.test(split_url[0]) && /\/search(\/.*)?$/.test(split_url[0]) && (url = split_url[0].concat("/")), split_url.length > 1 && (url = url.concat("?").concat(split_url[1])), a.url = url, /<html/i.test(t)) var s = e(t.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0]),
                o = e(t.match(/<body[^>]*>([\s\S.]*)<\/body>/i)[0]);
            else var s = o = e(t);
            if (0 === o.length) return a;
            if (a.title = f(s, "title").last().text(), n.fragment) {
                if ("body" === n.fragment) var r = o;
                else var r = f(o, n.fragment).first();
                r.length && (a.contents = r.contents(), a.title || (a.title = r.attr("title") || r.data("title")))
            } else /<html/i.test(t) || (a.contents = o);
            return a.contents && (a.contents = a.contents.not("title"), a.contents.find("title").remove()), a.title && (a.title = e.trim(a.title)), a
        }
        function v(e, t) {
            for (b[e] = t, C.push(e); w.length;) delete b[w.shift()];
            for (; C.length > a.defaults.maxCacheLength;) delete b[C.shift()]
        }
        function g(e, t, i) {
            var n, a;
            b[t] = i, "forward" === e ? (n = C, a = w) : (n = w, a = C), n.push(t), (t = a.pop()) && delete b[t]
        }
        function y() {
            e.fn.pjax = t, e.pjax = a, e.pjax.enable = e.noop, e.pjax.disable = _, e.pjax.click = i, e.pjax.submit = n, e.pjax.reload = s, e.pjax.defaults = {
                timeout: 650,
                push: !0,
                replace: !1,
                type: "GET",
                dataType: "html",
                scrollTo: 0,
                maxCacheLength: 20
            }, e(window).bind("popstate.pjax", r)
        }
        function _() {
            e.fn.pjax = function() {
                return this
            }, e.pjax = l, e.pjax.enable = y, e.pjax.disable = e.noop, e.pjax.click = e.noop, e.pjax.submit = e.noop, e.pjax.reload = function() {
                window.location.reload()
            }, e(window).unbind("popstate.pjax", r)
        }
        var b = {},
            w = [],
            C = [];
        e.inArray("state", e.event.props) < 0 && e.event.props.push("state"), e.support.pjax = window.history && window.history.pushState && window.history.replaceState && !navigator.userAgent.match(/((iPod|iPhone|iPad).+\bOS\s+[1-4]|WebApps\/.+CFNetwork)/), e.support.pjax ? y() : _()
    }(jQuery),
    /*
     * ----------------------------- JSTORAGE -------------------------------------
     * Simple local storage wrapper to save data on the browser side, supporting
     * all major browsers - IE6+, Firefox2+, Safari4+, Chrome4+ and Opera 10.5+
     *
     * Copyright (c) 2010 - 2012 Andris Reinman, andris.reinman@gmail.com
     * Project homepage: www.jstorage.info
     *
     * Licensed under MIT-style license:
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy
     * of this software and associated documentation files (the "Software"), to deal
     * in the Software without restriction, including without limitation the rights
     * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
     * copies of the Software, and to permit persons to whom the Software is
     * furnished to do so, subject to the following conditions:
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
     * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
     * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
     * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
     * SOFTWARE.
     */
    function() {
        function e() {
            var e = !1;
            if ("localStorage" in window) try {
                window.localStorage.setItem("_tmptest", "tmpval"), e = !0, window.localStorage.removeItem("_tmptest")
            } catch (t) {}
            if (e) try {
                window.localStorage && (w = window.localStorage, S = "localStorage", T = w.jStorage_update)
            } catch (a) {} else if ("globalStorage" in window) try {
                window.globalStorage && (w = "localhost" == window.location.hostname ? window.globalStorage["localhost.localdomain"] : window.globalStorage[window.location.hostname], S = "globalStorage", T = w.jStorage_update)
            } catch (s) {} else {
                if (C = document.createElement("link"), !C.addBehavior) return C = null, void 0;
                C.style.behavior = "url(#default#userData)", document.getElementsByTagName("head")[0].appendChild(C);
                try {
                    C.load("jStorage")
                } catch (o) {
                    C.setAttribute("jStorage", "{}"), C.save("jStorage"), C.load("jStorage")
                }
                var l = "{}";
                try {
                    l = C.getAttribute("jStorage")
                } catch (c) {}
                try {
                    T = C.getAttribute("jStorage_update")
                } catch (h) {}
                w.jStorage = l, S = "userDataBehavior"
            }
            r(), u(), i(), d(), "addEventListener" in window && window.addEventListener("pageshow", function(e) {
                e.persisted && n()
            }, !1)
        }
        function t() {
            var e = "{}";
            if ("userDataBehavior" == S) {
                C.load("jStorage");
                try {
                    e = C.getAttribute("jStorage")
                } catch (t) {}
                try {
                    T = C.getAttribute("jStorage_update")
                } catch (i) {}
                w.jStorage = e
            }
            r(), u(), d()
        }
        function i() {
            "localStorage" == S || "globalStorage" == S ? "addEventListener" in window ? window.addEventListener("storage", n, !1) : document.attachEvent("onstorage", n) : "userDataBehavior" == S && setInterval(n, 1e3)
        }
        function n() {
            var e;
            clearTimeout(x), x = setTimeout(function() {
                if ("localStorage" == S || "globalStorage" == S) e = w.jStorage_update;
                else if ("userDataBehavior" == S) {
                    C.load("jStorage");
                    try {
                        e = C.getAttribute("jStorage_update")
                    } catch (t) {}
                }
                e && e != T && (T = e, a())
            }, 25)
        }
        function a() {
            var e, i = y.parse(y.stringify(b.__jstorage_meta.CRC32));
            t(), e = y.parse(y.stringify(b.__jstorage_meta.CRC32));
            var n, a = [],
                o = [];
            for (n in i)
                if (i.hasOwnProperty(n)) {
                    if (!e[n]) {
                        o.push(n);
                        continue
                    }
                    i[n] != e[n] && "2." == String(i[n]).substr(0, 2) && a.push(n)
                } for (n in e) e.hasOwnProperty(n) && (i[n] || a.push(n));
            s(a, "updated"), s(o, "deleted")
        }
        function s(e, t) {
            if (e = [].concat(e || []), "flushed" == t) {
                e = [];
                for (var i in $) $.hasOwnProperty(i) && e.push(i);
                t = "deleted"
            }
            for (var n = 0, a = e.length; a > n; n++) {
                if ($[e[n]])
                    for (var s = 0, o = $[e[n]].length; o > s; s++) $[e[n]][s](e[n], t);
                if ($["*"])
                    for (var s = 0, o = $["*"].length; o > s; s++) $["*"][s](e[n], t)
            }
        }
        function o() {
            var e = (+new Date).toString();
            "localStorage" == S || "globalStorage" == S ? w.jStorage_update = e : "userDataBehavior" == S && (C.setAttribute("jStorage_update", e), C.save("jStorage")), n()
        }
        function r() {
            if (w.jStorage) try {
                b = y.parse(String(w.jStorage))
            } catch (e) {
                w.jStorage = "{}"
            } else w.jStorage = "{}";
            k = w.jStorage ? String(w.jStorage).length : 0, b.__jstorage_meta || (b.__jstorage_meta = {}), b.__jstorage_meta.CRC32 || (b.__jstorage_meta.CRC32 = {})
        }
        function l() {
            p();
            try {
                w.jStorage = y.stringify(b), C && (C.setAttribute("jStorage", w.jStorage), C.save("jStorage")), k = w.jStorage ? String(w.jStorage).length : 0
            } catch (e) {}
        }
        function c(e) {
            if (!e || "string" != typeof e && "number" != typeof e) throw new TypeError("Key name must be string or numeric");
            if ("__jstorage_meta" == e) throw new TypeError("Reserved key name");
            return !0
        }
        function u() {
            var e, t, i, n, a = 1 / 0,
                r = !1,
                c = [];
            if (clearTimeout(_), b.__jstorage_meta && "object" == typeof b.__jstorage_meta.TTL) {
                e = +new Date, i = b.__jstorage_meta.TTL, n = b.__jstorage_meta.CRC32;
                for (t in i) i.hasOwnProperty(t) && (i[t] <= e ? (delete i[t], delete n[t], delete b[t], r = !0, c.push(t)) : i[t] < a && (a = i[t]));
                1 / 0 != a && (_ = setTimeout(u, a - e)), r && (l(), o(), s(c, "deleted"))
            }
        }
        function d() {
            var e, t;
            if (b.__jstorage_meta.PubSub) {
                var i, n = E;
                for (e = t = b.__jstorage_meta.PubSub.length - 1; e >= 0; e--) i = b.__jstorage_meta.PubSub[e], i[0] > E && (n = i[0], h(i[1], i[2]));
                E = n
            }
        }
        function h(e, t) {
            if (A[e])
                for (var i = 0, n = A[e].length; n > i; i++) A[e][i](e, y.parse(y.stringify(t)))
        }
        function p() {
            if (b.__jstorage_meta.PubSub) {
                for (var e = +new Date - 2e3, t = 0, i = b.__jstorage_meta.PubSub.length; i > t; t++)
                    if (b.__jstorage_meta.PubSub[t][0] <= e) {
                        b.__jstorage_meta.PubSub.splice(t, b.__jstorage_meta.PubSub.length - t);
                        break
                    } b.__jstorage_meta.PubSub.length || delete b.__jstorage_meta.PubSub
            }
        }
        function f(e, t) {
            b.__jstorage_meta || (b.__jstorage_meta = {}), b.__jstorage_meta.PubSub || (b.__jstorage_meta.PubSub = []), b.__jstorage_meta.PubSub.unshift([+new Date, e, t]), l(), o()
        }
        function m(e, t) {
            for (var i, n = e.length, a = t ^ n, s = 0; n >= 4;) i = 255 & e.charCodeAt(s) | (255 & e.charCodeAt(++s)) << 8 | (255 & e.charCodeAt(++s)) << 16 | (255 & e.charCodeAt(++s)) << 24, i = 1540483477 * (65535 & i) + ((65535 & 1540483477 * (i >>> 16)) << 16), i ^= i >>> 24, i = 1540483477 * (65535 & i) + ((65535 & 1540483477 * (i >>> 16)) << 16), a = 1540483477 * (65535 & a) + ((65535 & 1540483477 * (a >>> 16)) << 16) ^ i, n -= 4, ++s;
            switch (n) {
                case 3:
                    a ^= (255 & e.charCodeAt(s + 2)) << 16;
                case 2:
                    a ^= (255 & e.charCodeAt(s + 1)) << 8;
                case 1:
                    a ^= 255 & e.charCodeAt(s), a = 1540483477 * (65535 & a) + ((65535 & 1540483477 * (a >>> 16)) << 16)
            }
            return a ^= a >>> 13, a = 1540483477 * (65535 & a) + ((65535 & 1540483477 * (a >>> 16)) << 16), a ^= a >>> 15, a >>> 0
        }
        var v = "0.4.3",
            g = window.jQuery || window.$ || (window.$ = {}),
            y = {
                parse: window.JSON && (window.JSON.parse || window.JSON.decode) || String.prototype.evalJSON && function(e) {
                    return String(e).evalJSON()
                } || g.parseJSON || g.evalJSON,
                stringify: Object.toJSON || window.JSON && (window.JSON.stringify || window.JSON.encode) || g.toJSON
            };
        if (!("parse" in y && "stringify" in y)) throw new Error("No JSON support found, include //cdnjs.cloudflare.com/ajax/libs/json2/20110223/json2.js to page");
        var _, b = {
                __jstorage_meta: {
                    CRC32: {}
                }
            },
            w = {
                jStorage: "{}"
            },
            C = null,
            k = 0,
            S = !1,
            $ = {},
            x = !1,
            T = 0,
            A = {},
            E = +new Date,
            M = {
                isXML: function(e) {
                    var t = (e ? e.ownerDocument || e : 0).documentElement;
                    return t ? "HTML" !== t.nodeName : !1
                },
                encode: function(e) {
                    if (!this.isXML(e)) return !1;
                    try {
                        return (new XMLSerializer).serializeToString(e)
                    } catch (t) {
                        try {
                            return e.xml
                        } catch (i) {}
                    }
                    return !1
                },
                decode: function(e) {
                    var t, i = "DOMParser" in window && (new DOMParser).parseFromString || window.ActiveXObject && function(e) {
                        var t = new ActiveXObject("Microsoft.XMLDOM");
                        return t.async = "false", t.loadXML(e), t
                    };
                    return i ? (t = i.call("DOMParser" in window && new DOMParser || window, e, "text/xml"), this.isXML(t) ? t : !1) : !1
                }
            };
        g.jStorage = {
            version: v,
            set: function(e, t, i) {
                if (c(e), i = i || {}, "undefined" == typeof t) return this.deleteKey(e), t;
                if (M.isXML(t)) t = {
                    _is_xml: !0,
                    xml: M.encode(t)
                };
                else {
                    if ("function" == typeof t) return void 0;
                    t && "object" == typeof t && (t = y.parse(y.stringify(t)))
                }
                return b[e] = t, b.__jstorage_meta.CRC32[e] = "2." + m(y.stringify(t), 2538058380), this.setTTL(e, i.TTL || 0), s(e, "updated"), t
            },
            get: function(e, t) {
                return c(e), e in b ? b[e] && "object" == typeof b[e] && b[e]._is_xml ? M.decode(b[e].xml) : b[e] : "undefined" == typeof t ? null : t
            },
            deleteKey: function(e) {
                return c(e), e in b ? (delete b[e], "object" == typeof b.__jstorage_meta.TTL && e in b.__jstorage_meta.TTL && delete b.__jstorage_meta.TTL[e], delete b.__jstorage_meta.CRC32[e], l(), o(), s(e, "deleted"), !0) : !1
            },
            setTTL: function(e, t) {
                var i = +new Date;
                return c(e), t = Number(t) || 0, e in b ? (b.__jstorage_meta.TTL || (b.__jstorage_meta.TTL = {}), t > 0 ? b.__jstorage_meta.TTL[e] = i + t : delete b.__jstorage_meta.TTL[e], l(), u(), o(), !0) : !1
            },
            getTTL: function(e) {
                var t, i = +new Date;
                return c(e), e in b && b.__jstorage_meta.TTL && b.__jstorage_meta.TTL[e] ? (t = b.__jstorage_meta.TTL[e] - i, t || 0) : 0
            },
            flush: function() {
                return b = {
                    __jstorage_meta: {
                        CRC32: {}
                    }
                }, l(), o(), s(null, "flushed"), !0
            },
            storageObj: function() {
                function e() {}
                return e.prototype = b, new e
            },
            index: function() {
                var e, t = [];
                for (e in b) b.hasOwnProperty(e) && "__jstorage_meta" != e && t.push(e);
                return t
            },
            storageSize: function() {
                return k
            },
            currentBackend: function() {
                return S
            },
            storageAvailable: function() {
                return !!S
            },
            listenKeyChange: function(e, t) {
                c(e), $[e] || ($[e] = []), $[e].push(t)
            },
            stopListening: function(e, t) {
                if (c(e), $[e]) {
                    if (!t) return delete $[e], void 0;
                    for (var i = $[e].length - 1; i >= 0; i--) $[e][i] == t && $[e].splice(i, 1)
                }
            },
            subscribe: function(e, t) {
                if (e = (e || "").toString(), !e) throw new TypeError("Channel not defined");
                A[e] || (A[e] = []), A[e].push(t)
            },
            publish: function(e, t) {
                if (e = (e || "").toString(), !e) throw new TypeError("Channel not defined");
                f(e, t)
            },
            reInit: function() {
                t()
            }
        }, e()
    }(),
    /* ========================================================================
     * Bootstrap: alert.js v3.3.6
     * http://getbootstrap.com/javascript/#alerts
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t) {
            return this.each(function() {
                var i = e(this),
                    a = i.data("bs.alert");
                a || i.data("bs.alert", a = new n(this)), "string" == typeof t && a[t].call(i)
            })
        }
        var i = '[data-dismiss="alert"]',
            n = function(t) {
                e(t).on("click", i, this.close)
            };
        n.VERSION = "3.3.6", n.TRANSITION_DURATION = 150, n.prototype.close = function(t) {
            function i() {
                o.detach().trigger("closed.bs.alert").remove()
            }
            var a = e(this),
                s = a.attr("data-target");
            s || (s = a.attr("href"), s = s && s.replace(/.*(?=#[^\s]*$)/, ""));
            var o = e(s);
            t && t.preventDefault(), o.length || (o = a.closest(".alert")), o.trigger(t = e.Event("close.bs.alert")), t.isDefaultPrevented() || (o.removeClass("in"), e.support.transition && o.hasClass("fade") ? o.one("bsTransitionEnd", i).emulateTransitionEnd(n.TRANSITION_DURATION) : i())
        };
        var a = e.fn.alert;
        e.fn.alert = t, e.fn.alert.Constructor = n, e.fn.alert.noConflict = function() {
            return e.fn.alert = a, this
        }, e(document).on("click.bs.alert.data-api", i, n.prototype.close)
    }(jQuery), ! function(e) {
        "use strict";
        e.fn.lightGallery = function(t) {
            var i, n, a, s, o, r, l, c, u, d, h, p = {
                    mode: "slide",
                    useCSS: !0,
                    cssEasing: "ease",
                    easing: "linear",
                    speed: 600,
                    addClass: "",
                    closable: !0,
                    loop: !1,
                    auto: !1,
                    pause: 4e3,
                    escKey: !0,
                    controls: !0,
                    hideControlOnEnd: !1,
                    preload: 1,
                    showAfterLoad: !0,
                    selector: null,
                    index: !1,
                    lang: {
                        allPhotos: "All photos"
                    },
                    counter: !1,
                    exThumbImage: !1,
                    thumbnail: !0,
                    showThumbByDefault: !1,
                    animateThumb: !0,
                    currentPagerPosition: "middle",
                    thumbWidth: 100,
                    thumbMargin: 5,
                    mobileSrc: !1,
                    mobileSrcMaxWidth: 640,
                    swipeThreshold: 50,
                    enableTouch: !0,
                    enableDrag: !0,
                    vimeoColor: "CCCCCC",
                    youtubePlayerParams: !1,
                    videoAutoplay: !0,
                    videoMaxWidth: "855px",
                    dynamic: !1,
                    dynamicEl: [],
                    onOpen: function() {},
                    onSlideBefore: function() {},
                    onSlideAfter: function() {},
                    onSlideNext: function() {},
                    onSlidePrev: function() {},
                    onBeforeClose: function() {},
                    onCloseAfter: function() {}
                },
                f = e(this),
                m = this,
                v = null,
                g = 0,
                y = !1,
                _ = !1,
                b = void 0 !== document.createTouch || "ontouchstart" in window || "onmsgesturechange" in window || navigator.msMaxTouchPoints,
                w = !1,
                C = !1,
                k = !1,
                S = e.extend(!0, {}, p, t),
                $ = {
                    init: function() {
                        f.each(function() {
                            var t = e(this);
                            S.dynamic ? (v = S.dynamicEl, g = 0, l = g, x.init(g)) : (v = null !== S.selector ? e(S.selector) : t.children(), v.on("click", function(i) {
                                v = null !== S.selector ? e(S.selector) : t.children(), i.preventDefault(), i.stopPropagation(), g = v.index(this), l = g, x.init(g)
                            }))
                        })
                    }
                },
                x = {
                    init: function() {
                        y = !0, this.structure(), this.getWidth(), this.closeSlide(), this.autoStart(), this.counter(), this.slideTo(), this.buildThumbnail(), this.keyPress(), S.index ? (this.slide(S.index), this.animateThumb(S.index)) : (this.slide(g), this.animateThumb(g)), S.enableDrag && this.touch(), S.enableTouch && this.enableTouch(), setTimeout(function() {
                            i.addClass("opacity")
                        }, 50)
                    },
                    structure: function() {
                        e("body").append('<div id="lg-outer" class="' + S.addClass + '"><div id="lg-gallery"><div id="lg-slider"></div><a id="lg-close" class="close"></a></div></div>').addClass("light-gallery"), n = e("#lg-outer"), i = e("#lg-gallery"), S.showAfterLoad === !0 && i.addClass("show-after-load"), a = i.find("#lg-slider");
                        var t = "";
                        if (S.dynamic)
                            for (var o = 0; o < S.dynamicEl.length; o++) t += '<div class="lg-slide"></div>';
                        else v.each(function() {
                            t += '<div class="lg-slide"></div>'
                        });
                        a.append(t), s = i.find(".lg-slide")
                    },
                    closeSlide: function() {
                        S.closable && e("#lg-outer").on("click", function(t) {
                            e(t.target).is(".lg-slide") && m.destroy(!1)
                        }), e("#lg-close").bind("click touchend", function() {
                            m.destroy(!1)
                        })
                    },
                    getWidth: function() {
                        var t = function() {
                            d = e(window).width()
                        };
                        e(window).bind("resize.lightGallery", t())
                    },
                    doCss: function() {
                        var e = function() {
                            for (var e = ["transition", "MozTransition", "WebkitTransition", "OTransition", "msTransition", "KhtmlTransition"], t = document.documentElement, i = 0; i < e.length; i++)
                                if (e[i] in t.style) return !0
                        };
                        return S.useCSS && e() ? !0 : !1
                    },
                    enableTouch: function() {
                        var t = this;
                        if (b) {
                            var i = {},
                                n = {};
                            e("body").on("touchstart.lightGallery", function(e) {
                                n = e.originalEvent.targetTouches[0], i.pageX = e.originalEvent.targetTouches[0].pageX, i.pageY = e.originalEvent.targetTouches[0].pageY
                            }), e("body").on("touchmove.lightGallery", function(e) {
                                var t = e.originalEvent;
                                n = t.targetTouches[0], e.preventDefault()
                            }), e("body").on("touchend.lightGallery", function() {
                                var e = n.pageX - i.pageX,
                                    a = S.swipeThreshold;
                                e >= a ? (t.prevSlide(), clearInterval(h)) : -a >= e && (t.nextSlide(), clearInterval(h))
                            })
                        }
                    },
                    touch: function() {
                        var t, i, n = this;
                        e(".light-gallery").bind("mousedown", function(e) {
                            e.stopPropagation(), e.preventDefault(), t = e.pageX
                        }), e(".light-gallery").bind("mouseup", function(e) {
                            e.stopPropagation(), e.preventDefault(), i = e.pageX, i - t > 20 ? n.prevSlide() : t - i > 20 && n.nextSlide()
                        })
                    },
                    isVideo: function(e, t) {
                        var i = e.match(/\/\/(?:www\.)?youtu(?:\.be|be\.com)\/(?:watch\?v=|embed\/)?([a-z0-9_\-]+)/i),
                            n = e.match(/\/\/(?:www\.)?vimeo.com\/([0-9a-z\-_]+)/i),
                            a = !1;
                        return S.dynamic ? "true" == S.dynamicEl[t].iframe && (a = !0) : "true" == v.eq(t).attr("data-iframe") && (a = !0), i || n || a ? !0 : void 0
                    },
                    loadVideo: function(t, i) {
                        var n = t.match(/\/\/(?:www\.)?youtu(?:\.be|be\.com)\/(?:watch\?v=|embed\/)?([a-z0-9_\-]+)/i),
                            a = t.match(/\/\/(?:www\.)?vimeo.com\/([0-9a-z\-_]+)/i),
                            s = "",
                            o = "";
                        if (n) {
                            if (o = S.videoAutoplay === !0 && _ === !1 ? "?autoplay=1&rel=0&wmode=opaque" : "?wmode=opaque", S.youtubePlayerParams) {
                                var r = e.param(S.youtubePlayerParams);
                                o = o + "&" + r
                            }
                            s = '<iframe class="object" width="560" height="315" src="//www.youtube.com/embed/' + n[1] + o + '" frameborder="0" allowfullscreen></iframe>'
                        } else a ? (o = S.videoAutoplay === !0 && _ === !1 ? "autoplay=1&amp;" : "", s = '<iframe class="object" id="video' + i + '" width="560" height="315"  src="http://player.vimeo.com/video/' + a[1] + "?" + o + "byline=0&amp;portrait=0&amp;color=" + S.vimeoColor + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>') : s = '<iframe class="object" frameborder="0" src="' + t + '"  allowfullscreen="true"></iframe>';
                        return '<div class="video-cont" style="max-width:' + S.videoMaxWidth + ' !important;"><div class="video">' + s + "</div></div>"
                    },
                    addHtml: function(t) {
                        var i = null;
                        if (i = S.dynamic ? S.dynamicEl[t]["sub-html"] : v.eq(t).attr("data-sub-html"), "undefined" != typeof i && null !== i) {
                            var n = i.substring(0, 1);
                            i = "." == n || "#" == n ? e(i).html() : i, s.eq(t).append(i)
                        }
                    },
                    preload: function(e) {
                        for (var t = e, i = 0; i <= S.preload && !(i >= v.length - e); i++) this.loadContent(t + i, !0);
                        for (var n = 0; n <= S.preload && !(0 > t - n); n++) this.loadContent(t - n, !0)
                    },
                    loadObj: function(e, t) {
                        var i = this;
                        s.eq(t).find(".object").on("load error", function() {
                            s.eq(t).addClass("complete")
                        }), e === !1 && (s.eq(t).hasClass("complete") ? i.preload(t) : s.eq(t).find(".object").on("load error", function() {
                            i.preload(t)
                        }))
                    },
                    loadContent: function(t, i) {
                        var n, a = this;
                        v.length - t, S.preload > v.length && (S.preload = v.length), S.mobileSrc === !0 && d <= S.mobileSrcMaxWidth && (n = S.dynamic ? S.dynamicEl[t].mobileSrc : v.eq(t).attr("data-responsive-src")), n || (n = S.dynamic ? S.dynamicEl[t].src : v.eq(t).attr("data-src"));
                        var o = 0;
                        i === !0 && (o = S.speed + 400), "undefined" != typeof n && "" !== n ? a.isVideo(n, t) ? setTimeout(function() {
                            s.eq(t).hasClass("loaded") || (s.eq(t).prepend(a.loadVideo(n, t)), a.addHtml(t), s.eq(t).addClass("loaded"), S.auto && S.videoAutoplay === !0 && clearInterval(h)), a.loadObj(i, t)
                        }, o) : setTimeout(function() {
                            s.eq(t).hasClass("loaded") || (s.eq(t).prepend('<img class="object" src="' + n + '" />'), a.addHtml(t), s.eq(t).addClass("loaded")), a.loadObj(i, t)
                        }, o) : setTimeout(function() {
                            if (!s.eq(t).hasClass("loaded")) {
                                var n = null;
                                if (n = S.dynamic ? S.dynamicEl[t].html : v.eq(t).attr("data-html"), "undefined" != typeof n && null !== n) {
                                    var o = n.substring(0, 1);
                                    n = "." == o || "#" == o ? e(n).html() : n
                                }
                                "undefined" != typeof n && null !== n && s.eq(t).append('<div class="video-cont" style="max-width:' + S.videoMaxWidth + ' !important;"><div class="video">' + n + "</div></div>"), a.addHtml(t), s.eq(t).addClass("loaded complete"), S.auto && S.videoAutoplay === !0 && clearInterval(h)
                            }
                            a.loadObj(i, t)
                        }, o)
                    },
                    counter: function() {
                        if (S.counter === !0) {
                            var t = e("#lg-slider > div").length;
                            i.append("<div id='lg-counter'><span id='lg-counter-current'></span> / <span id='lg-counter-all'>" + t + "</span></div>")
                        }
                    },
                    buildThumbnail: function() {
                        if (S.thumbnail === !0 && v.length > 1) {
                            var t = this,
                                n = "";
                            S.showThumbByDefault || (n = '<span class="close ib"><i class="bUi-iCn-rMv-16" aria-hidden="true"></i></span>'), i.append('<div class="thumb-cont"><div class="thumb-info">' + n + '</div><div class="thumb-inner"></div></div>'), c = i.find(".thumb-cont"), o.after('<a class="cl-thumb"></a>'), o.parent().addClass("has-thumb"), i.find(".cl-thumb").bind("click touchend", function() {
                                i.addClass("open"), t.doCss() && "slide" === S.mode && (s.eq(g).prevAll().removeClass("next-slide").addClass("prev-slide"), s.eq(g).nextAll().removeClass("prev-slide").addClass("next-slide"))
                            }), i.find(".thumb-cont .close").bind("click touchend", function() {
                                i.removeClass("open")
                            });
                            var a, r = i.find(".thumb-info"),
                                l = i.find(".thumb-inner"),
                                d = "";
                            if (S.dynamic)
                                for (var p = 0; p < S.dynamicEl.length; p++) a = S.dynamicEl[p].thumb, d += '<div class="thumb img-box"><div class="img-content img-valign"><img src="' + a + '" class="lazy" /></div></div>';
                            else v.each(function() {
                                a = S.exThumbImage === !1 || "undefined" == typeof e(this).attr(S.exThumbImage) || null === e(this).attr(S.exThumbImage) ? e(this).find("img").attr("src") : e(this).attr(S.exThumbImage), d += '<div class="thumb img-box"><div class="img-content img-valign"><img src="' + a + '" class="lazy" /></div></div>'
                            });
                            if (l.append(d), u = l.find(".thumb"), u.css({
                                    "margin-right": S.thumbMargin + "px",
                                    width: S.thumbWidth + "px"
                                }), S.animateThumb === !0) {
                                var f = v.length * (S.thumbWidth + S.thumbMargin);
                                i.find(".thumb-inner").css({
                                    width: f + "px",
                                    position: "relative",
                                    "transition-duration": S.speed + "ms"
                                })
                            }
                            u.bind("click touchend", function() {
                                w = !0;
                                var i = e(this).index();
                                u.removeClass("active"), e(this).addClass("active"), t.slide(i), t.animateThumb(i), clearInterval(h)
                            }), r.prepend('<span class="ib count">' + S.lang.allPhotos + " (" + u.length + ")</span>"), S.showThumbByDefault && i.addClass("open")
                        }
                    },
                    animateThumb: function(e) {
                        if (S.animateThumb === !0) {
                            var t, n = i.find(".thumb-cont").width();
                            switch (S.currentPagerPosition) {
                                case "left":
                                    t = 0;
                                    break;
                                case "middle":
                                    t = n / 2 - S.thumbWidth / 2;
                                    break;
                                case "right":
                                    t = n - S.thumbWidth
                            }
                            var a = (S.thumbWidth + S.thumbMargin) * e - 1 - t,
                                s = v.length * (S.thumbWidth + S.thumbMargin);
                            a > s - n && (a = s - n), 0 > a && (a = 0), this.doCss() ? i.find(".thumb-inner").css("transform", "translate3d(-" + a + "px, 0px, 0px)") : i.find(".thumb-inner").animate({
                                left: -a + "px"
                            }, S.speed)
                        }
                    },
                    slideTo: function() {
                        var e = this;
                        S.controls === !0 && v.length > 1 && (i.append('<div id="lg-action"><a id="lg-prev"></a><a id="lg-next"></a></div>'), o = i.find("#lg-prev"), r = i.find("#lg-next"), o.bind("click", function() {
                            e.prevSlide(), clearInterval(h)
                        }), r.bind("click", function() {
                            e.nextSlide(), clearInterval(h)
                        }))
                    },
                    autoStart: function() {
                        var e = this;
                        S.auto === !0 && (h = setInterval(function() {
                            g = g + 1 < v.length ? g : -1, g++, e.slide(g)
                        }, S.pause))
                    },
                    keyPress: function() {
                        var t = this;
                        e(window).bind("keyup.lightGallery", function(e) {
                            e.preventDefault(), e.stopPropagation(), 37 === e.keyCode && (t.prevSlide(), clearInterval(h)), 38 === e.keyCode && S.thumbnail === !0 && v.length > 1 ? i.hasClass("open") || (t.doCss() && "slide" === S.mode && (s.eq(g).prevAll().removeClass("next-slide").addClass("prev-slide"), s.eq(g).nextAll().removeClass("prev-slide").addClass("next-slide")), i.addClass("open")) : 39 === e.keyCode && (t.nextSlide(), clearInterval(h)), 40 === e.keyCode && S.thumbnail === !0 && v.length > 1 && !S.showThumbByDefault ? i.hasClass("open") && i.removeClass("open") : S.escKey === !0 && 27 === e.keyCode && (!S.showThumbByDefault && i.hasClass("open") ? i.removeClass("open") : m.destroy(!1))
                        })
                    },
                    nextSlide: function() {
                        var e = this;
                        g = s.index(s.eq(l)), g + 1 < v.length ? (g++, e.slide(g)) : S.loop ? (g = 0, e.slide(g)) : S.thumbnail === !0 && v.length > 1 && !S.showThumbByDefault ? i.addClass("open") : (s.eq(g).find(".object").addClass("right-end"), setTimeout(function() {
                            s.find(".object").removeClass("right-end")
                        }, 400)), e.animateThumb(g), S.onSlideNext.call(this, m)
                    },
                    prevSlide: function() {
                        var e = this;
                        g = s.index(s.eq(l)), g > 0 ? (g--, e.slide(g)) : S.loop ? (g = v.length - 1, e.slide(g)) : S.thumbnail === !0 && v.length > 1 && !S.showThumbByDefault ? i.addClass("open") : (s.eq(g).find(".object").addClass("left-end"), setTimeout(function() {
                            s.find(".object").removeClass("left-end")
                        }, 400)), e.animateThumb(g), S.onSlidePrev.call(this, m)
                    },
                    slide: function(t) {
                        var i = this;
                        if (_ ? (setTimeout(function() {
                                i.loadContent(t, !1)
                            }, S.speed + 400), a.hasClass("on") || a.addClass("on"), this.doCss() && "" !== S.speed && (a.hasClass("speed") || a.addClass("speed"), k === !1 && (a.css("transition-duration", S.speed + "ms"), k = !0)), this.doCss() && "" !== S.cssEasing && (a.hasClass("timing") || a.addClass("timing"), C === !1 && (a.css("transition-timing-function", S.cssEasing), C = !0)), S.onSlideBefore.call(this, m)) : i.loadContent(t, !1), "slide" === S.mode) {
                            var n = null !== navigator.userAgent.match(/iPad/i);
                            !this.doCss() || a.hasClass("slide") || n ? this.doCss() && !a.hasClass("use-left") && n && a.addClass("use-left") : a.addClass("slide"), this.doCss() || _ ? !this.doCss() && _ && a.animate({
                                left: 100 * -t + "%"
                            }, S.speed, S.easing) : a.css({
                                left: 100 * -t + "%"
                            })
                        } else "fade" === S.mode && (this.doCss() && !a.hasClass("fade-m") ? a.addClass("fade-m") : this.doCss() || a.hasClass("animate") || a.addClass("animate"), this.doCss() || _ ? !this.doCss() && _ && (s.eq(l).fadeOut(S.speed, S.easing), s.eq(t).fadeIn(S.speed, S.easing)) : (s.fadeOut(100), s.eq(t).fadeIn(100)));
                        if (t + 1 >= v.length && S.auto && S.loop === !1 && clearInterval(h), s.eq(l).removeClass("current"), s.eq(t).addClass("current"), this.doCss() && "slide" === S.mode && (w === !1 ? (e(".prev-slide").removeClass("prev-slide"), e(".next-slide").removeClass("next-slide"), s.eq(t - 1).addClass("prev-slide"), s.eq(t + 1).addClass("next-slide")) : (s.eq(t).prevAll().removeClass("next-slide").addClass("prev-slide"), s.eq(t).nextAll().removeClass("prev-slide").addClass("next-slide"))), S.thumbnail === !0 && v.length > 1 && (u.removeClass("active"), u.eq(t).addClass("active")), S.controls && S.hideControlOnEnd && S.loop === !1 && v.length > 1) {
                            var c = v.length;
                            c = parseInt(c) - 1, 0 === t ? (o.addClass("disabled"), r.removeClass("disabled")) : t === c ? (o.removeClass("disabled"), r.addClass("disabled")) : o.add(r).removeClass("disabled")
                        }
                        l = t, _ === !1 ? S.onOpen.call(this, m) : S.onSlideAfter.call(this, m), setTimeout(function() {
                            _ = !0
                        }), w = !1, S.counter && e("#lg-counter-current").text(t + 1), e(window).bind("resize.lightGallery", function() {
                            setTimeout(function() {
                                i.animateThumb(t)
                            }, 200)
                        })
                    }
                };
            return m.isActive = function() {
                return y === !0 ? !0 : !1
            }, m.destroy = function(t) {
                y = !1, t = "undefined" != typeof t ? !1 : !0, S.onBeforeClose.call(this, m);
                var a = _;
                _ = !1, C = !1, k = !1, w = !1, clearInterval(h), t === !0 && v.off("click touch touchstart"), e(".light-gallery").off("mousedown mouseup"), e("body").off("touchstart.lightGallery touchmove.lightGallery touchend.lightGallery"), e(window).off("resize.lightGallery keyup.lightGallery"), a === !0 && (i.addClass("fade-m"), setTimeout(function() {
                    n.remove(), e("body").removeClass("light-gallery")
                }, 500)), S.onCloseAfter.call(this, m)
            }, $.init(), this
        }
    }(jQuery), $(function() {
        var e = function() {
            0 != $(".chzn-select").length && $(".chzn-select").chosen({
                no_results_text: "No results matched",
                search_contains: !0
            })
        };
        $.fn.chosen ? e() : $(document).on("pw:chosen:loaded", e), $.fn.tooltip && $("[data-toggle=tooltip]").tooltip()
    }), $(window).submit(function(e) {
        var t = $(e.target);
        "true" != t.data("allow-multi-clicks") && t.find("[type=submit]").attr("disabled", !0)
    }), $(function() {
        $("[type=submit]").attr("disabled", !1)
    }), $(document).ready(function() {
        $("#subscribe_newsletter button").click(function() {
            trackEvents("Newsletter", "Subscribe", "From - Footer"), $(".error-message").hide();
            var e = $("#subscribe_newsletter input").val();
            return $.ajax({
                url: "/subscribe_newsletter",
                data: {
                    email: e
                },
                type: "GET",
                success: function(e) {
                    e.success ? ($("#newsletter-message").html(e.success), $("#subscribe_newsletter .form-fields").hide(), $("#newsletter-message").show(), window.setTimeout(function() {
                        $("#newsletter-message").hide(), $(".error-message").hide(), $("#subscribe_newsletter input").val(""), $("#subscribe_newsletter .form-fields").show()
                    }, 5e3)) : ($(".error-message").html(e.error), $(".error-message").show())
                }
            }), !1
        })
    }), $.listen && $.listen("parsley:form:validated", function(e) {
        e.isValid() || parsley_scroll_to_first_error()
    }), $(".modal").on("shown", function() {
        $("body").css({
            overflow: "hidden"
        }), $(".modal").focus()
    }).on("hidden", function() {
        $("body").css({
            overflow: ""
        })
    }), $(".modal").attr("tabindex", "-1"), $(function() {
        $(".modal-header .close").click(function() {
            $(".modal.in").modal("hide")
        })
    }),
    /** Notify.js - v0.3.1 - 2013/07/05
     * http://notifyjs.com/
     * Copyright (c) 2013 Jaime Pillora - MIT
     */
    function(e, t, i, n) {
        "use strict";
        var a, s, o, r, l, c, u, d, h, p, f, m, v, g, y, _, b, w, C, k, S, $, x, T, A, E, M, R = [].indexOf || function(e) {
            for (var t = 0, i = this.length; i > t; t++)
                if (t in this && this[t] === e) return t;
            return -1
        };
        S = "notify", k = S + "js", o = S + "!blank", x = {
            t: "top",
            m: "middle",
            b: "bottom",
            l: "left",
            c: "center",
            r: "right"
        }, v = ["l", "c", "r"], M = ["t", "m", "b"], b = ["t", "b", "l", "r"], w = {
            t: "b",
            m: null,
            b: "t",
            l: "r",
            c: null,
            r: "l"
        }, C = function(e) {
            var t;
            return t = [], i.each(e.split(/\W+/), function(e, i) {
                var a;
                return a = i.toLowerCase().charAt(0), x[a] ? t.push(a) : n
            }), t
        }, E = {}, r = {
            name: "core",
            html: '<div class="' + k + '-wrapper">\n  <div class="' + k + '-arrow"></div>\n  <div class="' + k + '-container"></div>\n</div>',
            css: "." + k + "-corner {\n  position: fixed;\n  margin: 5px;\n  z-index: 1050;\n}\n\n." + k + "-corner ." + k + "-wrapper,\n." + k + "-corner ." + k + "-container {\n  position: relative;\n  display: block;\n  height: inherit;\n  width: inherit;\n  margin: 3px;\n}\n\n." + k + "-wrapper {\n  z-index: 1;\n  position: absolute;\n  display: inline-block;\n  height: 0;\n  width: 0;\n}\n\n." + k + "-container {\n  display: none;\n  z-index: 1;\n  position: absolute;\n  cursor: pointer;\n}\n\n[data-notify-text],[data-notify-html] {\n  position: relative;\n}\n\n." + k + "-arrow {\n  position: absolute;\n  z-index: 2;\n  width: 0;\n  height: 0;\n}"
        }, A = {
            "border-radius": ["-webkit-", "-moz-"]
        }, f = function(e) {
            return E[e]
        }, s = function(t, n) {
            var a, s, o, r;
            if (!t) throw "Missing Style name";
            if (!n) throw "Missing Style definition";
            if (!n.html) throw "Missing Style HTML";
            return (null != (r = E[t]) ? r.cssElem : void 0) && (e.console && console.warn("" + S + ": overwriting style '" + t + "'"), E[t].cssElem.remove()), n.name = t, E[t] = n, a = "", n.classes && i.each(n.classes, function(e, t) {
                return a += "." + k + "-" + n.name + "-" + e + " {\n", i.each(t, function(e, t) {
                    return A[e] && i.each(A[e], function(i, n) {
                        return a += "  " + n + e + ": " + t + ";\n"
                    }), a += "  " + e + ": " + t + ";\n"
                }), a += "}\n"
            }), n.css && (a += "/* styles for " + n.name + " */\n" + n.css), a && (n.cssElem = _(a), n.cssElem.attr("id", "notify-" + n.name)), o = {}, s = i(n.html), h("html", s, o), h("text", s, o), n.fields = o
        }, _ = function(e) {
            var t;
            t = l("style"), t.attr("type", "text/css"), i("head").append(t);
            try {
                t.html(e)
            } catch (n) {
                t[0].styleSheet.cssText = e
            }
            return t
        }, h = function(e, t, n) {
            var a;
            return "html" !== e && (e = "text"), a = "data-notify-" + e, d(t, "[" + a + "]").each(function() {
                var t;
                return t = i(this).attr(a), t || (t = o), n[t] = e
            })
        }, d = function(e, t) {
            return e.is(t) ? e : e.find(t)
        }, $ = {
            clickToHide: !0,
            autoHide: !0,
            autoHideDelay: 5e3,
            arrowShow: !0,
            arrowSize: 5,
            breakNewLines: !0,
            elementPosition: "bottom",
            globalPosition: "top right",
            style: "bootstrap",
            className: "error",
            showAnimation: "slideDown",
            showDuration: 400,
            hideAnimation: "slideUp",
            hideDuration: 200,
            gap: 5
        }, y = function(e, t) {
            var n;
            return n = function() {}, n.prototype = e, i.extend(!0, new n, t)
        }, c = function(e) {
            return i.extend($, e)
        }, l = function(e) {
            return i("<" + e + "></" + e + ">")
        }, m = {}, p = function(e) {
            var t;
            return e.is("[type=radio]") && (t = e.parents("form:first").find("[type=radio]").filter(function(t, n) {
                return i(n).attr("name") === e.attr("name")
            }), e = t.first()), e
        }, g = function(e, t, i) {
            var a, s;
            if ("string" == typeof i) i = parseInt(i, 10);
            else if ("number" != typeof i) return;
            return isNaN(i) ? void 0 : (a = x[w[t.charAt(0)]], s = t, e[a] !== n && (t = x[a.charAt(0)], i = -i), e[t] === n ? e[t] = i : e[t] += i, null)
        }, T = function(e, t, i) {
            if ("l" === e || "t" === e) return 0;
            if ("c" === e || "m" === e) return i / 2 - t / 2;
            if ("r" === e || "b" === e) return i - t;
            throw "Invalid alignment"
        }, u = function(e) {
            return u.e = u.e || l("div"), u.e.text(e).html()
        }, a = function() {
            function e(e, t, n) {
                "string" == typeof n && (n = {
                    className: n
                }), this.options = y($, i.isPlainObject(n) ? n : {}), this.loadHTML(), this.wrapper = i(r.html), this.wrapper.data(k, this), this.arrow = this.wrapper.find("." + k + "-arrow"), this.container = this.wrapper.find("." + k + "-container"), this.container.append(this.userContainer), e && e.length && (this.elementType = e.attr("type"), this.originalElement = e, this.elem = p(e), this.elem.data(k, this), this.elem.before(this.wrapper)), this.container.hide(), this.run(t)
            }
            return e.prototype.loadHTML = function() {
                var e;
                return e = this.getStyle(), this.userContainer = i(e.html), this.userFields = e.fields
            }, e.prototype.show = function(e, t) {
                var i, a, s, o, r, l = this;
                if (a = function() {
                        return e || l.elem || l.destroy(), t ? t() : n
                    }, r = this.container.parent().parents(":hidden").length > 0, s = this.container.add(this.arrow), i = [], r && e) o = "show";
                else if (r && !e) o = "hide";
                else if (!r && e) o = this.options.showAnimation, i.push(this.options.showDuration);
                else {
                    if (r || e) return a();
                    o = this.options.hideAnimation, i.push(this.options.hideDuration)
                }
                return i.push(a), s[o].apply(s, i)
            }, e.prototype.setGlobalPosition = function() {
                var e, t, n, a, s, o, r, c;
                return c = this.getPosition(), r = c[0], o = c[1], s = x[r], e = x[o], a = r + "|" + o, t = m[a], t || (t = m[a] = l("div"), n = {}, n[s] = 0, "middle" === e ? n.top = "45%" : "center" === e ? n.left = "45%" : n[e] = 0, t.css(n).addClass("" + k + "-corner"), i("body").append(t)), t.prepend(this.wrapper)
            }, e.prototype.setElementPosition = function() {
                var e, t, a, s, o, r, l, c, u, d, h, p, f, m, y, _, C, k, S, $, A, E, D, I, O, B, N, P, F;
                for (D = this.getPosition(), $ = D[0], k = D[1], S = D[2], h = this.elem.position(), c = this.elem.outerHeight(), p = this.elem.outerWidth(), u = this.elem.innerHeight(), d = this.elem.innerWidth(), I = this.wrapper.position(), o = this.container.height(), r = this.container.width(), m = x[$], _ = w[$], C = x[_], l = {}, l[C] = "b" === $ ? c : "r" === $ ? p : 0, g(l, "top", h.top - I.top), g(l, "left", h.left - I.left), F = ["top", "left"], O = 0, N = F.length; N > O; O++) A = F[O], y = parseInt(this.elem.css("margin-" + A), 10), y && g(l, A, y);
                if (f = Math.max(0, this.options.gap - (this.options.arrowShow ? a : 0)), g(l, C, f), this.options.arrowShow) {
                    for (a = this.options.arrowSize, t = i.extend({}, l), e = this.userContainer.css("border-color") || this.userContainer.css("background-color") || "white", B = 0, P = b.length; P > B; B++) A = b[B], E = x[A], A !== _ && (s = E === m ? e : "transparent", t["border-" + E] = "" + a + "px solid " + s);
                    g(l, x[_], a), R.call(b, k) >= 0 && g(t, x[k], 2 * a)
                } else this.arrow.hide();
                return R.call(M, $) >= 0 ? (g(l, "left", T(k, r, p)), t && g(t, "left", T(k, a, d))) : R.call(v, $) >= 0 && (g(l, "top", T(k, o, c)), t && g(t, "top", T(k, a, u))), this.container.is(":visible") && (l.display = "block"), this.container.removeAttr("style").css(l), t ? this.arrow.removeAttr("style").css(t) : n
            }, e.prototype.getPosition = function() {
                var e, t, i, n, a, s, o, r;
                if (t = this.options.position || (this.elem ? this.options.elementPosition : this.options.globalPosition), e = C(t), 0 === e.length && (e[0] = "b"), i = e[0], 0 > R.call(b, i)) throw "Must be one of [" + b + "]";
                return (1 === e.length || (n = e[0], R.call(M, n) >= 0 && (a = e[1], 0 > R.call(v, a))) || (s = e[0], R.call(v, s) >= 0 && (o = e[1], 0 > R.call(M, o)))) && (e[1] = (r = e[0], R.call(v, r) >= 0 ? "m" : "l")), 2 === e.length && (e[2] = e[1]), e
            }, e.prototype.getStyle = function(e) {
                var t;
                if (e || (e = this.options.style), e || (e = "default"), t = E[e], !t) throw "Missing style: " + e;
                return t
            }, e.prototype.updateClasses = function() {
                var e, t;
                return e = ["base"], i.isArray(this.options.className) ? e = e.concat(this.options.className) : this.options.className && e.push(this.options.className), t = this.getStyle(), e = i.map(e, function(e) {
                    return "" + k + "-" + t.name + "-" + e
                }).join(" "), this.userContainer.attr("class", e)
            }, e.prototype.run = function(e, t) {
                var a, s, r, l, c, h = this;
                if (i.isPlainObject(t) ? i.extend(this.options, t) : "string" === i.type(t) && (this.options.color = t), this.container && !e) return this.show(!1), n;
                if (this.container || e) {
                    s = {}, i.isPlainObject(e) ? s = e : s[o] = e;
                    for (r in s) a = s[r], l = this.userFields[r], l && ("text" === l && (a = u(a), this.options.breakNewLines && (a = a.replace(/\n/g, "<br/>"))), c = r === o ? "" : "=" + r, d(this.userContainer, "[data-notify-" + l + c + "]").html(a));
                    return this.updateClasses(), this.elem ? this.setElementPosition() : this.setGlobalPosition(), this.show(!0), this.options.autoHide ? (clearTimeout(this.autohideTimer), this.autohideTimer = setTimeout(function() {
                        return h.show(!1)
                    }, this.options.autoHideDelay)) : n
                }
            }, e.prototype.destroy = function() {
                return this.wrapper.remove()
            }, e
        }(), i[S] = function(e, t, n) {
            return e && e.nodeName || e.jquery ? i(e)[S](t, n) : (n = t, t = e, new a(null, t, n)), e
        }, i.fn[S] = function(e, t) {
            return i(this).each(function() {
                var n;
                return n = p(i(this)).data(k), n ? n.run(e, t) : new a(i(this), e, t)
            }), this
        }, i.extend(i[S], {
            defaults: c,
            addStyle: s,
            pluginOptions: $,
            getStyle: f,
            insertCSS: _
        }), i(function() {
            return _(r.css).attr("id", "core-notify"), i(t).on("click notify-hide", "." + k + "-wrapper", function(e) {
                var t;
                return t = i(this).data(k), t && (t.options.clickToHide || "notify-hide" === e.type) ? t.show(!1) : n
            })
        })
    }(window, document, jQuery), $.notify.addStyle("bootstrap", {
        html: "<div>\n<span data-notify-text></span>\n</div>",
        classes: {
            base: {
                "font-weight": "bold",
                padding: "8px 15px 8px 14px",
                "text-shadow": "0 1px 0 rgba(255, 255, 255, 0.5)",
                "background-color": "#fcf8e3",
                border: "1px solid #fbeed5",
                "border-radius": "4px",
                "white-space": "nowrap",
                "padding-left": "25px",
                "background-repeat": "no-repeat",
                "background-position": "3px 7px"
            },
            error: {
                color: "#B94A48",
                "background-color": "#F2DEDE",
                "border-color": "#EED3D7",
                "background-image": "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAtRJREFUeNqkVc1u00AQHq+dOD+0poIQfkIjalW0SEGqRMuRnHos3DjwAH0ArlyQeANOOSMeAA5VjyBxKBQhgSpVUKKQNGloFdw4cWw2jtfMOna6JOUArDTazXi/b3dm55socPqQhFka++aHBsI8GsopRJERNFlY88FCEk9Yiwf8RhgRyaHFQpPHCDmZG5oX2ui2yilkcTT1AcDsbYC1NMAyOi7zTX2Agx7A9luAl88BauiiQ/cJaZQfIpAlngDcvZZMrl8vFPK5+XktrWlx3/ehZ5r9+t6e+WVnp1pxnNIjgBe4/6dAysQc8dsmHwPcW9C0h3fW1hans1ltwJhy0GxK7XZbUlMp5Ww2eyan6+ft/f2FAqXGK4CvQk5HueFz7D6GOZtIrK+srupdx1GRBBqNBtzc2AiMr7nPplRdKhb1q6q6zjFhrklEFOUutoQ50xcX86ZlqaZpQrfbBdu2R6/G19zX6XSgh6RX5ubyHCM8nqSID6ICrGiZjGYYxojEsiw4PDwMSL5VKsC8Yf4VRYFzMzMaxwjlJSlCyAQ9l0CW44PBADzXhe7xMdi9HtTrdYjFYkDQL0cn4Xdq2/EAE+InCnvADTf2eah4Sx9vExQjkqXT6aAERICMewd/UAp/IeYANM2joxt+q5VI+ieq2i0Wg3l6DNzHwTERPgo1ko7XBXj3vdlsT2F+UuhIhYkp7u7CarkcrFOCtR3H5JiwbAIeImjT/YQKKBtGjRFCU5IUgFRe7fF4cCNVIPMYo3VKqxwjyNAXNepuopyqnld602qVsfRpEkkz+GFL1wPj6ySXBpJtWVa5xlhpcyhBNwpZHmtX8AGgfIExo0ZpzkWVTBGiXCSEaHh62/PoR0p/vHaczxXGnj4bSo+G78lELU80h1uogBwWLf5YlsPmgDEd4M236xjm+8nm4IuE/9u+/PH2JXZfbwz4zw1WbO+SQPpXfwG/BBgAhCNZiSb/pOQAAAAASUVORK5CYII=)"
            },
            success: {
                color: "#468847",
                "background-color": "#DFF0D8",
                "border-color": "#D6E9C6",
                "background-image": "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAutJREFUeNq0lctPE0Ecx38zu/RFS1EryqtgJFA08YCiMZIAQQ4eRG8eDGdPJiYeTIwHTfwPiAcvXIwXLwoXPaDxkWgQ6islKlJLSQWLUraPLTv7Gme32zoF9KSTfLO7v53vZ3d/M7/fIth+IO6INt2jjoA7bjHCJoAlzCRw59YwHYjBnfMPqAKWQYKjGkfCJqAF0xwZjipQtA3MxeSG87VhOOYegVrUCy7UZM9S6TLIdAamySTclZdYhFhRHloGYg7mgZv1Zzztvgud7V1tbQ2twYA34LJmF4p5dXF1KTufnE+SxeJtuCZNsLDCQU0+RyKTF27Unw101l8e6hns3u0PBalORVVVkcaEKBJDgV3+cGM4tKKmI+ohlIGnygKX00rSBfszz/n2uXv81wd6+rt1orsZCHRdr1Imk2F2Kob3hutSxW8thsd8AXNaln9D7CTfA6O+0UgkMuwVvEFFUbbAcrkcTA8+AtOk8E6KiQiDmMFSDqZItAzEVQviRkdDdaFgPp8HSZKAEAL5Qh7Sq2lIJBJwv2scUqkUnKoZgNhcDKhKg5aH+1IkcouCAdFGAQsuWZYhOjwFHQ96oagWgRoUov1T9kRBEODAwxM2QtEUl+Wp+Ln9VRo6BcMw4ErHRYjH4/B26AlQoQQTRdHWwcd9AH57+UAXddvDD37DmrBBV34WfqiXPl61g+vr6xA9zsGeM9gOdsNXkgpEtTwVvwOklXLKm6+/p5ezwk4B+j6droBs2CsGa/gNs6RIxazl4Tc25mpTgw/apPR1LYlNRFAzgsOxkyXYLIM1V8NMwyAkJSctD1eGVKiq5wWjSPdjmeTkiKvVW4f2YPHWl3GAVq6ymcyCTgovM3FzyRiDe2TaKcEKsLpJvNHjZgPNqEtyi6mZIm4SRFyLMUsONSSdkPeFtY1n0mczoY3BHTLhwPRy9/lzcziCw9ACI+yql0VLzcGAZbYSM5CCSZg1/9oc/nn7+i8N9p/8An4JMADxhH+xHfuiKwAAAABJRU5ErkJggg==)"
            },
            info: {
                color: "#3A87AD",
                "background-color": "#D9EDF7",
                "border-color": "#BCE8F1",
                "background-image": "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QYFAhkSsdes/QAAA8dJREFUOMvVlGtMW2UYx//POaWHXg6lLaW0ypAtw1UCgbniNOLcVOLmAjHZolOYlxmTGXVZdAnRfXQm+7SoU4mXaOaiZsEpC9FkiQs6Z6bdCnNYruM6KNBw6YWewzl9z+sHImEWv+vz7XmT95f/+3/+7wP814v+efDOV3/SoX3lHAA+6ODeUFfMfjOWMADgdk+eEKz0pF7aQdMAcOKLLjrcVMVX3xdWN29/GhYP7SvnP0cWfS8caSkfHZsPE9Fgnt02JNutQ0QYHB2dDz9/pKX8QjjuO9xUxd/66HdxTeCHZ3rojQObGQBcuNjfplkD3b19Y/6MrimSaKgSMmpGU5WevmE/swa6Oy73tQHA0Rdr2Mmv/6A1n9w9suQ7097Z9lM4FlTgTDrzZTu4StXVfpiI48rVcUDM5cmEksrFnHxfpTtU/3BFQzCQF/2bYVoNbH7zmItbSoMj40JSzmMyX5qDvriA7QdrIIpA+3cdsMpu0nXI8cV0MtKXCPZev+gCEM1S2NHPvWfP/hL+7FSr3+0p5RBEyhEN5JCKYr8XnASMT0xBNyzQGQeI8fjsGD39RMPk7se2bd5ZtTyoFYXftF6y37gx7NeUtJJOTFlAHDZLDuILU3j3+H5oOrD3yWbIztugaAzgnBKJuBLpGfQrS8wO4FZgV+c1IxaLgWVU0tMLEETCos4xMzEIv9cJXQcyagIwigDGwJgOAtHAwAhisQUjy0ORGERiELgG4iakkzo4MYAxcM5hAMi1WWG1yYCJIcMUaBkVRLdGeSU2995TLWzcUAzONJ7J6FBVBYIggMzmFbvdBV44Corg8vjhzC+EJEl8U1kJtgYrhCzgc/vvTwXKSib1paRFVRVORDAJAsw5FuTaJEhWM2SHB3mOAlhkNxwuLzeJsGwqWzf5TFNdKgtY5qHp6ZFf67Y/sAVadCaVY5YACDDb3Oi4NIjLnWMw2QthCBIsVhsUTU9tvXsjeq9+X1d75/KEs4LNOfcdf/+HthMnvwxOD0wmHaXr7ZItn2wuH2SnBzbZAbPJwpPx+VQuzcm7dgRCB57a1uBzUDRL4bfnI0RE0eaXd9W89mpjqHZnUI5Hh2l2dkZZUhOqpi2qSmpOmZ64Tuu9qlz/SEXo6MEHa3wOip46F1n7633eekV8ds8Wxjn37Wl63VVa+ej5oeEZ/82ZBETJjpJ1Rbij2D3Z/1trXUvLsblCK0XfOx0SX2kMsn9dX+d+7Kf6h8o4AIykuffjT8L20LU+w4AZd5VvEPY+XpWqLV327HR7DzXuDnD8r+ovkBehJ8i+y8YAAAAASUVORK5CYII=)"
            },
            warn: {
                color: "#C09853",
                "background-color": "#FCF8E3",
                "border-color": "#FBEED5",
                "background-image": "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAABJlBMVEXr6eb/2oD/wi7/xjr/0mP/ykf/tQD/vBj/3o7/uQ//vyL/twebhgD/4pzX1K3z8e349vK6tHCilCWbiQymn0jGworr6dXQza3HxcKkn1vWvV/5uRfk4dXZ1bD18+/52YebiAmyr5S9mhCzrWq5t6ufjRH54aLs0oS+qD751XqPhAybhwXsujG3sm+Zk0PTwG6Shg+PhhObhwOPgQL4zV2nlyrf27uLfgCPhRHu7OmLgAafkyiWkD3l49ibiAfTs0C+lgCniwD4sgDJxqOilzDWowWFfAH08uebig6qpFHBvH/aw26FfQTQzsvy8OyEfz20r3jAvaKbhgG9q0nc2LbZxXanoUu/u5WSggCtp1anpJKdmFz/zlX/1nGJiYmuq5Dx7+sAAADoPUZSAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfdBgUBGhh4aah5AAAAlklEQVQY02NgoBIIE8EUcwn1FkIXM1Tj5dDUQhPU502Mi7XXQxGz5uVIjGOJUUUW81HnYEyMi2HVcUOICQZzMMYmxrEyMylJwgUt5BljWRLjmJm4pI1hYp5SQLGYxDgmLnZOVxuooClIDKgXKMbN5ggV1ACLJcaBxNgcoiGCBiZwdWxOETBDrTyEFey0jYJ4eHjMGWgEAIpRFRCUt08qAAAAAElFTkSuQmCC)"
            }
        }
    }),
    /* ========================================================================
     * Bootstrap: carousel.js v3.3.6
     * http://getbootstrap.com/javascript/#carousel
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t(t) {
            return this.each(function() {
                var n = e(this),
                    a = n.data("bs.carousel"),
                    s = e.extend({}, i.DEFAULTS, n.data(), "object" == typeof t && t),
                    o = "string" == typeof t ? t : s.slide;
                a || n.data("bs.carousel", a = new i(this, s)), "number" == typeof t ? a.to(t) : o ? a[o]() : s.interval && a.pause().cycle()
            })
        }
        var i = function(t, i) {
            this.$element = e(t), this.$indicators = this.$element.find(".carousel-indicators"), this.options = i, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", e.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", e.proxy(this.pause, this)).on("mouseleave.bs.carousel", e.proxy(this.cycle, this))
        };
        i.VERSION = "3.3.6", i.TRANSITION_DURATION = 600, i.DEFAULTS = {
            interval: 5e3,
            pause: "hover",
            wrap: !0,
            keyboard: !0
        }, i.prototype.keydown = function(e) {
            if (!/input|textarea/i.test(e.target.tagName)) {
                switch (e.which) {
                    case 37:
                        this.prev();
                        break;
                    case 39:
                        this.next();
                        break;
                    default:
                        return
                }
                e.preventDefault()
            }
        }, i.prototype.cycle = function(t) {
            return t || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(e.proxy(this.next, this), this.options.interval)), this
        }, i.prototype.getItemIndex = function(e) {
            return this.$items = e.parent().children(".item"), this.$items.index(e || this.$active)
        }, i.prototype.getItemForDirection = function(e, t) {
            var i = this.getItemIndex(t),
                n = "prev" == e && 0 === i || "next" == e && i == this.$items.length - 1;
            if (n && !this.options.wrap) return t;
            var a = "prev" == e ? -1 : 1,
                s = (i + a) % this.$items.length;
            return this.$items.eq(s)
        }, i.prototype.to = function(e) {
            var t = this,
                i = this.getItemIndex(this.$active = this.$element.find(".item.active"));
            return e > this.$items.length - 1 || 0 > e ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function() {
                t.to(e)
            }) : i == e ? this.pause().cycle() : this.slide(e > i ? "next" : "prev", this.$items.eq(e))
        }, i.prototype.pause = function(t) {
            return t || (this.paused = !0), this.$element.find(".next, .prev").length && e.support.transition && (this.$element.trigger(e.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
        }, i.prototype.next = function() {
            return this.sliding ? void 0 : this.slide("next")
        }, i.prototype.prev = function() {
            return this.sliding ? void 0 : this.slide("prev")
        }, i.prototype.slide = function(t, n) {
            var a = this.$element.find(".item.active"),
                s = n || this.getItemForDirection(t, a),
                o = this.interval,
                r = "next" == t ? "left" : "right",
                l = this;
            if (s.hasClass("active")) return this.sliding = !1;
            var c = s[0],
                u = e.Event("slide.bs.carousel", {
                    relatedTarget: c,
                    direction: r
                });
            if (this.$element.trigger(u), !u.isDefaultPrevented()) {
                if (this.sliding = !0, o && this.pause(), this.$indicators.length) {
                    this.$indicators.find(".active").removeClass("active");
                    var d = e(this.$indicators.children()[this.getItemIndex(s)]);
                    d && d.addClass("active")
                }
                var h = e.Event("slid.bs.carousel", {
                    relatedTarget: c,
                    direction: r
                });
                return e.support.transition && this.$element.hasClass("slide") ? (s.addClass(t), s[0].offsetWidth, a.addClass(r), s.addClass(r), a.one("bsTransitionEnd", function() {
                    s.removeClass([t, r].join(" ")).addClass("active"), a.removeClass(["active", r].join(" ")), l.sliding = !1, setTimeout(function() {
                        l.$element.trigger(h)
                    }, 0)
                }).emulateTransitionEnd(i.TRANSITION_DURATION)) : (a.removeClass("active"), s.addClass("active"), this.sliding = !1, this.$element.trigger(h)), o && this.cycle(), this
            }
        };
        var n = e.fn.carousel;
        e.fn.carousel = t, e.fn.carousel.Constructor = i, e.fn.carousel.noConflict = function() {
            return e.fn.carousel = n, this
        };
        var a = function(i) {
            var n, a = e(this),
                s = e(a.attr("data-target") || (n = a.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, ""));
            if (s.hasClass("carousel")) {
                var o = e.extend({}, s.data(), a.data()),
                    r = a.attr("data-slide-to");
                r && (o.interval = !1), t.call(s, o), r && s.data("bs.carousel").to(r), i.preventDefault()
            }
        };
        e(document).on("click.bs.carousel.data-api", "[data-slide]", a).on("click.bs.carousel.data-api", "[data-slide-to]", a), e(window).on("load", function() {
            e('[data-ride="carousel"]').each(function() {
                var i = e(this);
                t.call(i, i.data())
            })
        })
    }(jQuery), $(document).ready(function() {
        $(".carousel").carousel().on("slide.bs.carousel", function(e) {
            $(e.relatedTarget).show();
            var t = $(e.relatedTarget).height();
            $(e.relatedTarget).css("display", ""), $(this).find(".active").parent().animate({
                height: t
            }, 600)
        })
    }), $(document).on("pjax:complete", function() {
        $(".carousel").carousel().on("slide.bs.carousel", function(e) {
            $(e.relatedTarget).show();
            var t = $(e.relatedTarget).height();
            $(e.relatedTarget).css("display", ""), $(this).find(".active").parent().animate({
                height: t
            }, 600)
        })
    }),
    /* ========================================================================
     * Bootstrap: transition.js v3.3.6
     * http://getbootstrap.com/javascript/#transitions
     * ========================================================================
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     * ======================================================================== */
    + function(e) {
        "use strict";
        function t() {
            var e = document.createElement("bootstrap"),
                t = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend"
                };
            for (var i in t)
                if (void 0 !== e.style[i]) return {
                    end: t[i]
                };
            return !1
        }
        e.fn.emulateTransitionEnd = function(t) {
            var i = !1,
                n = this;
            e(this).one("bsTransitionEnd", function() {
                i = !0
            });
            var a = function() {
                i || e(n).trigger(e.support.transition.end)
            };
            return setTimeout(a, t), this
        }, e(function() {
            e.support.transition = t(), e.support.transition && (e.event.special.bsTransitionEnd = {
                bindType: e.support.transition.end,
                delegateType: e.support.transition.end,
                handle: function(t) {
                    return e(t.target).is(this) ? t.handleObj.handler.apply(this, arguments) : void 0
                }
            })
        })
    }(jQuery),
    /*!
     * headroom.js v0.9.4 - Give your page some headroom. Hide your header until you need it
     * Copyright (c) 2017 Nick Williams - http://wicky.nillia.ms/headroom.js
     * License: MIT
     */
    ! function(e, t) {
        "use strict";
        "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? module.exports = t() : e.Headroom = t()
    }(this, function() {
        "use strict";
        function e(e) {
            this.callback = e, this.ticking = !1
        }
        function t(e) {
            return e && "undefined" != typeof window && (e === window || e.nodeType)
        }
        function i(e) {
            if (arguments.length <= 0) throw new Error("Missing arguments in extend function");
            var n, a, s = e || {};
            for (a = 1; a < arguments.length; a++) {
                var o = arguments[a] || {};
                for (n in o) s[n] = "object" != typeof s[n] || t(s[n]) ? s[n] || o[n] : i(s[n], o[n])
            }
            return s
        }
        function n(e) {
            return e === Object(e) ? e : {
                down: e,
                up: e
            }
        }
        function a(e, t) {
            t = i(t, a.options), this.lastKnownScrollY = 0, this.elem = e, this.tolerance = n(t.tolerance), this.classes = t.classes, this.offset = t.offset, this.scroller = t.scroller, this.initialised = !1, this.onPin = t.onPin, this.onUnpin = t.onUnpin, this.onTop = t.onTop, this.onNotTop = t.onNotTop, this.onBottom = t.onBottom, this.onNotBottom = t.onNotBottom
        }
        var s = {
            bind: !! function() {}.bind,
            classList: "classList" in document.documentElement,
            rAF: !!(window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame)
        };
        return window.requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame, e.prototype = {
            constructor: e,
            update: function() {
                this.callback && this.callback(), this.ticking = !1
            },
            requestTick: function() {
                this.ticking || (requestAnimationFrame(this.rafCallback || (this.rafCallback = this.update.bind(this))), this.ticking = !0)
            },
            handleEvent: function() {
                this.requestTick()
            }
        }, a.prototype = {
            constructor: a,
            init: function() {
                return a.cutsTheMustard ? (this.debouncer = new e(this.update.bind(this)), this.elem.classList.add(this.classes.initial), setTimeout(this.attachEvent.bind(this), 100), this) : void 0
            },
            destroy: function() {
                var e = this.classes;
                this.initialised = !1;
                for (var t in e) e.hasOwnProperty(t) && this.elem.classList.remove(e[t]);
                this.scroller.removeEventListener("scroll", this.debouncer, !1)
            },
            attachEvent: function() {
                this.initialised || (this.lastKnownScrollY = this.getScrollY(), this.initialised = !0, this.scroller.addEventListener("scroll", this.debouncer, !1), this.debouncer.handleEvent())
            },
            unpin: function() {
                var e = this.elem.classList,
                    t = this.classes;
                !e.contains(t.pinned) && e.contains(t.unpinned) || (e.add(t.unpinned), e.remove(t.pinned), this.onUnpin && this.onUnpin.call(this))
            },
            pin: function() {
                var e = this.elem.classList,
                    t = this.classes;
                e.contains(t.unpinned) && (e.remove(t.unpinned), e.add(t.pinned), this.onPin && this.onPin.call(this))
            },
            top: function() {
                var e = this.elem.classList,
                    t = this.classes;
                e.contains(t.top) || (e.add(t.top), e.remove(t.notTop), this.onTop && this.onTop.call(this))
            },
            notTop: function() {
                var e = this.elem.classList,
                    t = this.classes;
                e.contains(t.notTop) || (e.add(t.notTop), e.remove(t.top), this.onNotTop && this.onNotTop.call(this))
            },
            bottom: function() {
                var e = this.elem.classList,
                    t = this.classes;
                e.contains(t.bottom) || (e.add(t.bottom), e.remove(t.notBottom), this.onBottom && this.onBottom.call(this))
            },
            notBottom: function() {
                var e = this.elem.classList,
                    t = this.classes;
                e.contains(t.notBottom) || (e.add(t.notBottom), e.remove(t.bottom), this.onNotBottom && this.onNotBottom.call(this))
            },
            getScrollY: function() {
                return void 0 !== this.scroller.pageYOffset ? this.scroller.pageYOffset : void 0 !== this.scroller.scrollTop ? this.scroller.scrollTop : (document.documentElement || document.body.parentNode || document.body).scrollTop
            },
            getViewportHeight: function() {
                return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
            },
            getElementPhysicalHeight: function(e) {
                return Math.max(e.offsetHeight, e.clientHeight)
            },
            getScrollerPhysicalHeight: function() {
                return this.scroller === window || this.scroller === document.body ? this.getViewportHeight() : this.getElementPhysicalHeight(this.scroller)
            },
            getDocumentHeight: function() {
                var e = document.body,
                    t = document.documentElement;
                return Math.max(e.scrollHeight, t.scrollHeight, e.offsetHeight, t.offsetHeight, e.clientHeight, t.clientHeight)
            },
            getElementHeight: function(e) {
                return Math.max(e.scrollHeight, e.offsetHeight, e.clientHeight)
            },
            getScrollerHeight: function() {
                return this.scroller === window || this.scroller === document.body ? this.getDocumentHeight() : this.getElementHeight(this.scroller)
            },
            isOutOfBounds: function(e) {
                var t = 0 > e,
                    i = e + this.getScrollerPhysicalHeight() > this.getScrollerHeight();
                return t || i
            },
            toleranceExceeded: function(e, t) {
                return Math.abs(e - this.lastKnownScrollY) >= this.tolerance[t]
            },
            shouldUnpin: function(e, t) {
                var i = e > this.lastKnownScrollY,
                    n = e >= this.offset;
                return i && n && t
            },
            shouldPin: function(e, t) {
                var i = e < this.lastKnownScrollY,
                    n = e <= this.offset;
                return i && t || n
            },
            update: function() {
                var e = this.getScrollY(),
                    t = e > this.lastKnownScrollY ? "down" : "up",
                    i = this.toleranceExceeded(e, t);
                this.isOutOfBounds(e) || (e <= this.offset ? this.top() : this.notTop(), e + this.getViewportHeight() >= this.getScrollerHeight() ? this.bottom() : this.notBottom(), this.shouldUnpin(e, i) ? this.unpin() : this.shouldPin(e, i) && this.pin(), this.lastKnownScrollY = e)
            }
        }, a.options = {
            tolerance: {
                up: 0,
                down: 0
            },
            offset: 0,
            scroller: window,
            classes: {
                pinned: "headroom--pinned",
                unpinned: "headroom--unpinned",
                top: "headroom--top",
                notTop: "headroom--not-top",
                bottom: "headroom--bottom",
                notBottom: "headroom--not-bottom",
                initial: "headroom"
            }
        }, a.cutsTheMustard = "undefined" != typeof s && s.rAF && s.bind && s.classList, a
    }), $(window).on("load pjax:complete", function() {
        $(".range-filter .btn-primary").on("click", function() {
            var e = $(this).data();
            doSubmitRangeSearch(e.alias, e.name, e.minText, e.maxText)
        }), $(".filter-check a").live("click", function() {
            var e = $(this).children("input[type=checkbox]");
            e.is(":checked") || e.attr("checked", "checked")
        }), $(".filter-uncheck a").live("click", function() {
            var e = $(this).children("input[type=checkbox]");
            e.is(":checked") && e.removeAttr("checked")
        }), $(".filter-check input[type=checkbox]").live("change", function() {
            var e = $(this).parent();
            $(this).is(":checked") && e.get(0) && e.get(0).click()
        }), $(".filter-uncheck input[type=checkbox]").live("change", function() {
            var e = $(this).parent();
            !$(this).is(":checked") && e.get(0) && e.get(0).click()
        }), $("#search_key_form").submit(function() {
            return -1 != window.location.href.indexOf("?") ? (q_params = $("#query_params").val(), "" != q_params ? (q_params = q_params.replace(/\?_pjax=[^&]+&?/, "?").replace(/_pjax=[^&]+&?/, "").replace(/[\?&]$/, ""), url = $(this).attr("action") + "?q=" + $("#q").val() + "&" + q_params) : url = $(this).attr("action") + "?q=" + $("#q").val()) : url = $(this).attr("action") + "?q=" + $("#q").val(), window.location.href = url, !1
        })
    }), $(document).on("pw:typeahead:loaded", initializeRangeFilters), $(window).on("pjax:complete", initializeRangeFilters), $(document).ready(function() {
        $("#search_key_form").submit(function() {
            return -1 != window.location.href.indexOf("?") ? (q_params = $("#query_params").val(), "" != q_params ? (q_params = q_params.replace(/\?_pjax=[^&]+&?/, "?").replace(/_pjax=[^&]+&?/, "").replace(/[\?&]$/, ""), url = $(this).attr("action") + "?q=" + $("#q").val() + "&" + q_params) : url = $(this).attr("action") + "?q=" + $("#q").val()) : url = $(this).attr("action") + "?q=" + $("#q").val(), window.location.href = url, !1
        })
    }),
    function(e) {
        e.extend(e.fn, {
            swapClass: function(e, t) {
                var i = this.filter("." + e);
                return this.filter("." + t).removeClass(t).addClass(e), i.removeClass(e).addClass(t), this
            },
            replaceClass: function(e, t) {
                return this.filter("." + e).removeClass(e).addClass(t).end()
            },
            hoverClass: function(t) {
                return t = t || "hover", this.hover(function() {
                    e(this).addClass(t)
                }, function() {
                    e(this).removeClass(t)
                })
            },
            heightToggle: function(e, t) {
                e ? this.animate({
                    height: "toggle"
                }, e, t) : this.each(function() {
                    jQuery(this)[jQuery(this).is(":hidden") ? "show" : "hide"](), t && t.apply(this, arguments)
                })
            },
            heightHide: function(e, t) {
                e ? this.animate({
                    height: "hide"
                }, e, t) : (this.hide(), t && this.each(t))
            },
            prepareBranches: function(e) {
                return e.prerendered || (this.filter(":last-child:not(ul)").addClass(t.last), this.filter((e.collapsed ? "" : "." + t.closed) + ":not(." + t.open + ")").find(">ul").hide()), this.filter(":has(>ul)")
            },
            applyClasses: function(i, n) {
                if (this.filter(":has(>ul):not(:has(>a))").find(">span").unbind("click.treeview").bind("click.treeview", function(t) {
                        this == t.target && n.apply(e(this).next())
                    }).add(e("a", this)).hoverClass(), !i.prerendered) {
                    this.filter(":has(>ul:hidden)").addClass(t.expandable).replaceClass(t.last, t.lastExpandable), this.not(":has(>ul:hidden)").addClass(t.collapsable).replaceClass(t.last, t.lastCollapsable);
                    var a = this.find("div." + t.hitarea);
                    a.length || (a = this.prepend('<div class="' + t.hitarea + '"/>').find("div." + t.hitarea)), a.removeClass().addClass(t.hitarea).each(function() {
                        var t = "";
                        e.each(e(this).parent().attr("class").split(" "), function() {
                            t += this + "-hitarea "
                        }), e(this).addClass(t)
                    })
                }
                this.find("div." + t.hitarea).click(n)
            },
            treeview: function(i) {
                function n(i, n) {
                    function s(n) {
                        return function() {
                            return a.apply(e("div." + t.hitarea, i).filter(function() {
                                return n ? e(this).parent("." + n).length : !0
                            })), !1
                        }
                    }
                    e("a:eq(0)", n).click(s(t.collapsable)), e("a:eq(1)", n).click(s(t.expandable)), e("a:eq(2)", n).click(s())
                }
                function a() {
                    e(this).parent().find(">.hitarea").swapClass(t.collapsableHitarea, t.expandableHitarea).swapClass(t.lastCollapsableHitarea, t.lastExpandableHitarea).end().swapClass(t.collapsable, t.expandable).swapClass(t.lastCollapsable, t.lastExpandable).find(">ul").heightToggle(i.animated, i.toggle), i.unique && e(this).parent().siblings().find(">.hitarea").replaceClass(t.collapsableHitarea, t.expandableHitarea).replaceClass(t.lastCollapsableHitarea, t.lastExpandableHitarea).end().replaceClass(t.collapsable, t.expandable).replaceClass(t.lastCollapsable, t.lastExpandable).find(">ul").heightHide(i.animated, i.toggle)
                }
                function s() {
                    var t = [];
                    l.each(function(i, n) {
                        t[i] = e(n).is(":has(>ul:visible)") ? 1 : 0
                    }), e.cookie(i.cookieId, t.join(""), i.cookieOptions)
                }
                function o() {
                    var t = e.cookie(i.cookieId);
                    if (t) {
                        var n = t.split("");
                        l.each(function(t, i) {
                            e(i).find(">ul")[parseInt(n[t]) ? "show" : "hide"]()
                        })
                    }
                }
                if (i = e.extend({
                        cookieId: "treeview"
                    }, i), i.toggle) {
                    var r = i.toggle;
                    i.toggle = function() {
                        return r.apply(e(this).parent()[0], arguments)
                    }
                }
                this.data("toggler", a), this.addClass("treeview");
                var l = this.find("li").prepareBranches(i);
                switch (i.persist) {
                    case "cookie":
                        var c = i.toggle;
                        i.toggle = function() {
                            s(), c && c.apply(this, arguments)
                        }, o();
                        break;
                    case "location":
                        var u = this.find("a").filter(function() {
                            return this.href.toLowerCase() == location.href.toLowerCase()
                        });
                        if (u.length) {
                            var d = u.addClass("selected").parents("ul, li").add(u.next()).show();
                            i.prerendered && d.filter("li").swapClass(t.collapsable, t.expandable).swapClass(t.lastCollapsable, t.lastExpandable).find(">.hitarea").swapClass(t.collapsableHitarea, t.expandableHitarea).swapClass(t.lastCollapsableHitarea, t.lastExpandableHitarea)
                        }
                }
                return l.applyClasses(i, a), i.control && (n(this, i.control), e(i.control).show()), this
            }
        }), e.treeview = {};
        var t = e.treeview.classes = {
            open: "open",
            closed: "closed",
            expandable: "expandable",
            expandableHitarea: "expandable-hitarea",
            lastExpandableHitarea: "lastExpandable-hitarea",
            collapsable: "collapsable",
            collapsableHitarea: "collapsable-hitarea",
            lastCollapsableHitarea: "lastCollapsable-hitarea",
            lastCollapsable: "lastCollapsable",
            lastExpandable: "lastExpandable",
            last: "last",
            hitarea: "hitarea"
        }
    }(jQuery), $(function() {
        $("#tree").treeview()
    });