
(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">AuthBucket</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Bundle</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle.html">OAuth2Bundle</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_Controller" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/Controller.html">Controller</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Controller_OAuth2Controller" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Controller/OAuth2Controller.html">OAuth2Controller</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection.html">DependencyInjection</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:" >                    <div style="padding-left:72px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Security</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory" >                    <div style="padding-left:90px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory.html">Factory</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory_ResourceFactory" >                    <div style="padding-left:116px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html">ResourceFactory</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory_TokenFactory" >                    <div style="padding-left:116px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html">TokenFactory</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_AuthBucketOAuth2Extension" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html">AuthBucketOAuth2Extension</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Configuration" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Configuration.html">Configuration</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_Entity" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/Entity.html">Entity</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AbstractEntityRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html">AbstractEntityRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AccessToken" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html">AccessToken</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AccessTokenRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AccessTokenRepository.html">AccessTokenRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Authorize" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html">Authorize</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AuthorizeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AuthorizeRepository.html">AuthorizeRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Client" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ClientRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ClientRepository.html">ClientRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Code" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html">Code</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_CodeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/CodeRepository.html">CodeRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ModelManagerFactory" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html">ModelManagerFactory</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_RefreshToken" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html">RefreshToken</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_RefreshTokenRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshTokenRepository.html">RefreshTokenRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Scope" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html">Scope</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ScopeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ScopeRepository.html">ScopeRepository</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_AuthBucketOAuth2Bundle" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html">AuthBucketOAuth2Bundle</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            
            
            
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


