
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:SimpleLogger" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SimpleLogger.html">SimpleLogger</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:SimpleLogger_Utils" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="SimpleLogger/Utils.html">Utils</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:SimpleLogger_Utils_Logger" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="SimpleLogger/Utils/Logger.html">Logger</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:SimpleLogger_Colours" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="SimpleLogger/Colours.html">Colours</a>                    </div>                </li>                            <li data-name="class:SimpleLogger_Configuration" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="SimpleLogger/Configuration.html">Configuration</a>                    </div>                </li>                            <li data-name="class:SimpleLogger_LogLevelMap" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="SimpleLogger/LogLevelMap.html">LogLevelMap</a>                    </div>                </li>                            <li data-name="class:SimpleLogger_SimpleLogger" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="SimpleLogger/SimpleLogger.html">SimpleLogger</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "SimpleLogger.html", "name": "SimpleLogger", "doc": "Namespace SimpleLogger"},{"type": "Namespace", "link": "SimpleLogger/Utils.html", "name": "SimpleLogger\\Utils", "doc": "Namespace SimpleLogger\\Utils"},
            
            {"type": "Class", "fromName": "SimpleLogger", "fromLink": "SimpleLogger.html", "link": "SimpleLogger/Colours.html", "name": "SimpleLogger\\Colours", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "SimpleLogger\\Colours", "fromLink": "SimpleLogger/Colours.html", "link": "SimpleLogger/Colours.html#method_setColour", "name": "SimpleLogger\\Colours::setColour", "doc": "&quot;Colourize string.&quot;"},
            
            {"type": "Class", "fromName": "SimpleLogger", "fromLink": "SimpleLogger.html", "link": "SimpleLogger/Configuration.html", "name": "SimpleLogger\\Configuration", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_setLogfile", "name": "SimpleLogger\\Configuration::setLogfile", "doc": "&quot;Sets log file name.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_setVerbosity", "name": "SimpleLogger\\Configuration::setVerbosity", "doc": "&quot;Sets log level verbosity.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_setConsoleVerbosity", "name": "SimpleLogger\\Configuration::setConsoleVerbosity", "doc": "&quot;Sets log level verbosity.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_setLoggerConsoleFormat", "name": "SimpleLogger\\Configuration::setLoggerConsoleFormat", "doc": "&quot;Sets console log line format.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_setLoggerFileFormat", "name": "SimpleLogger\\Configuration::setLoggerFileFormat", "doc": "&quot;Sets file log line format.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getLogfile", "name": "SimpleLogger\\Configuration::getLogfile", "doc": "&quot;Gets log file name.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getVerbosity", "name": "SimpleLogger\\Configuration::getVerbosity", "doc": "&quot;Gets log level verbosity.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getConsoleVerbosity", "name": "SimpleLogger\\Configuration::getConsoleVerbosity", "doc": "&quot;Gets log level verbosity.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getLoggerConsoleFormat", "name": "SimpleLogger\\Configuration::getLoggerConsoleFormat", "doc": "&quot;Gets log line format.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getLoggerFileFormat", "name": "SimpleLogger\\Configuration::getLoggerFileFormat", "doc": "&quot;Gets log line format.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getLevel", "name": "SimpleLogger\\Configuration::getLevel", "doc": "&quot;Gets numerical log level value.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\Configuration", "fromLink": "SimpleLogger/Configuration.html", "link": "SimpleLogger/Configuration.html#method_getColours", "name": "SimpleLogger\\Configuration::getColours", "doc": "&quot;Gets colour.&quot;"},
            
            {"type": "Class", "fromName": "SimpleLogger", "fromLink": "SimpleLogger.html", "link": "SimpleLogger/LogLevelMap.html", "name": "SimpleLogger\\LogLevelMap", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "SimpleLogger\\LogLevelMap", "fromLink": "SimpleLogger/LogLevelMap.html", "link": "SimpleLogger/LogLevelMap.html#method_getLevel", "name": "SimpleLogger\\LogLevelMap::getLevel", "doc": "&quot;Gets numerical log level value.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\LogLevelMap", "fromLink": "SimpleLogger/LogLevelMap.html", "link": "SimpleLogger/LogLevelMap.html#method_getColours", "name": "SimpleLogger\\LogLevelMap::getColours", "doc": "&quot;Gets colour.&quot;"},
            
            {"type": "Class", "fromName": "SimpleLogger", "fromLink": "SimpleLogger.html", "link": "SimpleLogger/SimpleLogger.html", "name": "SimpleLogger\\SimpleLogger", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "SimpleLogger\\SimpleLogger", "fromLink": "SimpleLogger/SimpleLogger.html", "link": "SimpleLogger/SimpleLogger.html#method___construct", "name": "SimpleLogger\\SimpleLogger::__construct", "doc": "&quot;Constructor.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\SimpleLogger", "fromLink": "SimpleLogger/SimpleLogger.html", "link": "SimpleLogger/SimpleLogger.html#method_formatter", "name": "SimpleLogger\\SimpleLogger::formatter", "doc": "&quot;Format log line output.&quot;"},
                    {"type": "Method", "fromName": "SimpleLogger\\SimpleLogger", "fromLink": "SimpleLogger/SimpleLogger.html", "link": "SimpleLogger/SimpleLogger.html#method_log", "name": "SimpleLogger\\SimpleLogger::log", "doc": "&quot;{@inheritdoc}&quot;"},
            
            {"type": "Class", "fromName": "SimpleLogger\\Utils", "fromLink": "SimpleLogger/Utils.html", "link": "SimpleLogger/Utils/Logger.html", "name": "SimpleLogger\\Utils\\Logger", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "SimpleLogger\\Utils\\Logger", "fromLink": "SimpleLogger/Utils/Logger.html", "link": "SimpleLogger/Utils/Logger.html#method___construct", "name": "SimpleLogger\\Utils\\Logger::__construct", "doc": "&quot;Constructor.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


