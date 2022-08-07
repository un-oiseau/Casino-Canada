jQuery(document).ready(function($) {
var toc = function (options) {
    return this.each(function () {
        var root = $(this),
            data = root.data(),
            thisOptions,
            stack = [root], // The upside-down stack keeps track of list elements
            listTag = this.tagName,
            currentLevel = 0,
            headingSelectors;

        // Defaults: plugin parameters override data attributes, which override our defaults
        thisOptions = $.extend(
            {content: "body", headings: "h2"},
            {content: data.toc || undefined, headings: data.tocHeadings || undefined},
            options
        );
        headingSelectors = thisOptions.headings.split(",");

        // Set up some automatic IDs if we do not already have them
        $(thisOptions.content).find(thisOptions.headings).attr("id", function (index, attr) {
            // In HTML5, the id attribute must be at least one character long and must not
            // contain any space characters.
            //
            // We just use the HTML5 spec now because all browsers work fine with it.
            // https://mathiasbynens.be/notes/html5-id-class
            var generateUniqueId = function (text) {
                // Generate a valid ID. Spaces are replaced with underscores. We also check if
                // the ID already exists in the document. If so, we append "_1", "_2", etc.
                // until we find an unused ID.

                if (text.length === 0) {
                    text = "?";
                }

                text = $.trim(text);
                text = text.replace(/[^ A-Za-z\d]/g, '').toLowerCase();
                var baseId = text.replace(/\s+/g, "-"), suffix = "", count = 1;

                while (document.getElementById(baseId + suffix) !== null) {
                    suffix = "_" + count++;
                }

                return baseId + suffix;
            };

            return attr || generateUniqueId($(this).text());
        }).each(function () {
            // What level is the current heading?
            var elem = $(this), level = $.map(headingSelectors, function (selector, index) {
                return elem.is(selector) ? index : undefined;
            })[0];



            if (elem.attr("id") !== 'summary') {
            // Add the list item
                $("<li/>").appendTo(stack[0]).append(
                    $("<a/>").text(elem.text()).attr("href", "#" + elem.attr("id"))
                );
            }

            currentLevel = level;
        });

         let count = 1;
        $('.wp-block-gutenberg-blocks-toc ol li').each(function() {
            $(this).prepend('<span>' + count + '. <span>');
            count++;
        });
    });
    }, old = $.fn.toc;

    $.fn.toc = toc;

    $.fn.toc.noConflict = function () {
        $.fn.toc = old;
        return this;
    };


    // Data API
    $(function () {
        $('.wp-block-gutenberg-blocks-toc').addClass('summary-box');
        $('.wp-block-gutenberg-blocks-toc').prepend('<ul></ul>')
        $('.wp-block-gutenberg-blocks-toc').prepend('<h6 id="summary">Auf dieser Seite</h6>')
        toc.call($(".wp-block-gutenberg-blocks-toc ul"));
    });
});
