
window.projectVersion = 'develop';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:AuthBucket" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket.html">AuthBucket</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle.html">Bundle</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle.html">OAuth2Bundle</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_Controller" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/Controller.html">Controller</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Controller_AuthorizationController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Controller/AuthorizationController.html">AuthorizationController</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Controller_DebugController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Controller/DebugController.html">DebugController</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Controller_TokenController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Controller/TokenController.html">TokenController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection.html">DependencyInjection</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security" >                    <div style="padding-left:72px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security.html">Security</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory" >                    <div style="padding-left:90px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory.html">Factory</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory_ResourceFactory" >                    <div style="padding-left:116px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html">ResourceFactory</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Security_Factory_TokenFactory" >                    <div style="padding-left:116px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html">TokenFactory</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_AuthBucketOAuth2Extension" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html">AuthBucketOAuth2Extension</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_DependencyInjection_Configuration" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Configuration.html">Configuration</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:AuthBucket_Bundle_OAuth2Bundle_Entity" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="AuthBucket/Bundle/OAuth2Bundle/Entity.html">Entity</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AbstractEntityRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html">AbstractEntityRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AccessToken" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html">AccessToken</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AccessTokenRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AccessTokenRepository.html">AccessTokenRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Authorize" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html">Authorize</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_AuthorizeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/AuthorizeRepository.html">AuthorizeRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Client" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ClientRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ClientRepository.html">ClientRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Code" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html">Code</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_CodeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/CodeRepository.html">CodeRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ModelManagerFactory" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html">ModelManagerFactory</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_RefreshToken" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html">RefreshToken</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_RefreshTokenRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshTokenRepository.html">RefreshTokenRepository</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_Scope" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html">Scope</a>                    </div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_Entity_ScopeRepository" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/Entity/ScopeRepository.html">ScopeRepository</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:AuthBucket_Bundle_OAuth2Bundle_AuthBucketOAuth2Bundle" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html">AuthBucketOAuth2Bundle</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "AuthBucket.html", "name": "AuthBucket", "doc": "Namespace AuthBucket"},{"type": "Namespace", "link": "AuthBucket/Bundle.html", "name": "AuthBucket\\Bundle", "doc": "Namespace AuthBucket\\Bundle"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle\\Controller"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory"},{"type": "Namespace", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "doc": "Namespace AuthBucket\\Bundle\\OAuth2Bundle\\Entity"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle", "fromLink": "AuthBucket/Bundle/OAuth2Bundle.html", "link": "AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\AuthBucketOAuth2Bundle", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\AuthBucketOAuth2Bundle", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html", "link": "AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html#method___construct", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\AuthBucketOAuth2Bundle::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\AuthBucketOAuth2Bundle", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html", "link": "AuthBucket/Bundle/OAuth2Bundle/AuthBucketOAuth2Bundle.html#method_build", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\AuthBucketOAuth2Bundle::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/AuthorizationController.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller/AuthorizationController.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/AuthorizationController.html#method_indexAction", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController::indexAction", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/DebugController.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\DebugController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\DebugController", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller/DebugController.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/DebugController.html#method_indexAction", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\DebugController::indexAction", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/TokenController.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\TokenController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\TokenController", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Controller/TokenController.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Controller/TokenController.html#method_indexAction", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Controller\\TokenController::indexAction", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\AuthBucketOAuth2Extension", "doc": "&quot;This is the class that loads and manages your bundle configuration.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\AuthBucketOAuth2Extension", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html#method_load", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\AuthBucketOAuth2Extension::load", "doc": "&quot;{@inheritdoc}&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\AuthBucketOAuth2Extension", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/AuthBucketOAuth2Extension.html#method_getAlias", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\AuthBucketOAuth2Extension::getAlias", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Configuration.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Configuration", "doc": "&quot;This is the class that validates and merges configuration from your app\/config files.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Configuration", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Configuration.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Configuration.html#method_getConfigTreeBuilder", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Configuration::getConfigTreeBuilder", "doc": "&quot;{@inheritdoc}&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html#method_create", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory::create", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html#method_getPosition", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory::getPosition", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html#method_getKey", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory::getKey", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/ResourceFactory.html#method_addConfiguration", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\ResourceFactory::addConfiguration", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html#method_create", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory::create", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html#method_getPosition", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory::getPosition", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html#method_getKey", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory::getKey", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/DependencyInjection/Security/Factory/TokenFactory.html#method_addConfiguration", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\DependencyInjection\\Security\\Factory\\TokenFactory::addConfiguration", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "doc": "&quot;AbstractEntityRepository.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_createModel", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::createModel", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_readModelAll", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::readModelAll", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_readModelBy", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::readModelBy", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_readModelOneBy", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::readModelOneBy", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_updateModel", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::updateModel", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AbstractEntityRepository.html#method_deleteModel", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AbstractEntityRepository::deleteModel", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "doc": "&quot;AccessToken.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setAccessToken", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setAccessToken", "doc": "&quot;Set access_token.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getAccessToken", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getAccessToken", "doc": "&quot;Get access_token.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setTokenType", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setTokenType", "doc": "&quot;Set token_type.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getTokenType", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getTokenType", "doc": "&quot;Get token_type.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setClientId", "doc": "&quot;Set client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getClientId", "doc": "&quot;Get client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setUsername", "doc": "&quot;Set username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getUsername", "doc": "&quot;Get username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setExpires", "doc": "&quot;Set expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getExpires", "doc": "&quot;Get expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_setScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::setScope", "doc": "&quot;Set scope.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessToken.html#method_getScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessToken::getScope", "doc": "&quot;Get scope.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AccessTokenRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AccessTokenRepository", "doc": "&quot;AccessTokenRepository.&quot;"},
                    
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "doc": "&quot;Authorize.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_setClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::setClientId", "doc": "&quot;Set client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_getClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::getClientId", "doc": "&quot;Get client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_setUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::setUsername", "doc": "&quot;Set username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_getUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::getUsername", "doc": "&quot;Get username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_setScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::setScope", "doc": "&quot;Set scope.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Authorize.html#method_getScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Authorize::getScope", "doc": "&quot;Get scope.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/AuthorizeRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\AuthorizeRepository", "doc": "&quot;AuthorizeRepository.&quot;"},
                    
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "doc": "&quot;Client.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_setClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::setClientId", "doc": "&quot;Set client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_getClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::getClientId", "doc": "&quot;Get client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_setClientSecret", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::setClientSecret", "doc": "&quot;Set client_secret.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_getClientSecret", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::getClientSecret", "doc": "&quot;Get client_secret.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_setRedirectUri", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::setRedirectUri", "doc": "&quot;Set redirect_uri.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Client.html#method_getRedirectUri", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Client::getRedirectUri", "doc": "&quot;Get redirect_uri.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/ClientRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ClientRepository", "doc": "&quot;ClientRepository.&quot;"},
                    
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "doc": "&quot;Code.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setCode", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setCode", "doc": "&quot;Set code.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getCode", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getCode", "doc": "&quot;Get code.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setClientId", "doc": "&quot;Set client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getClientId", "doc": "&quot;Get client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setUsername", "doc": "&quot;Set username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getUsername", "doc": "&quot;Get username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setRedirectUri", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setRedirectUri", "doc": "&quot;Set redirect_uri.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getRedirectUri", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getRedirectUri", "doc": "&quot;Get redirect_uri.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setExpires", "doc": "&quot;Set expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getExpires", "doc": "&quot;Get expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_setScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::setScope", "doc": "&quot;Set scope.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Code.html#method_getScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Code::getScope", "doc": "&quot;Get scope.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/CodeRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\CodeRepository", "doc": "&quot;CodeRepository.&quot;"},
                    
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ModelManagerFactory", "doc": "&quot;OAuth2 model manager factory implemention.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ModelManagerFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html#method___construct", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ModelManagerFactory::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ModelManagerFactory", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/ModelManagerFactory.html#method_getModelManager", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ModelManagerFactory::getModelManager", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "doc": "&quot;RefreshToken.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_setRefreshToken", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::setRefreshToken", "doc": "&quot;Set refresh_token.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_getRefreshToken", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::getRefreshToken", "doc": "&quot;Get refresh_token.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_setClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::setClientId", "doc": "&quot;Set client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_getClientId", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::getClientId", "doc": "&quot;Get client_id.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_setUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::setUsername", "doc": "&quot;Set username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_getUsername", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::getUsername", "doc": "&quot;Get username.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_setExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::setExpires", "doc": "&quot;Set expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_getExpires", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::getExpires", "doc": "&quot;Get expires.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_setScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::setScope", "doc": "&quot;Set scope.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshToken.html#method_getScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshToken::getScope", "doc": "&quot;Get scope.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/RefreshTokenRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\RefreshTokenRepository", "doc": "&quot;RefreshTokenRepository.&quot;"},
                    
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Scope", "doc": "&quot;Scope.&quot;"},
                                                        {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Scope", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html#method_setScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Scope::setScope", "doc": "&quot;Set scope.&quot;"},
                    {"type": "Method", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Scope", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/Scope.html#method_getScope", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\Scope::getScope", "doc": "&quot;Get scope.&quot;"},
            
            {"type": "Class", "fromName": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity", "fromLink": "AuthBucket/Bundle/OAuth2Bundle/Entity.html", "link": "AuthBucket/Bundle/OAuth2Bundle/Entity/ScopeRepository.html", "name": "AuthBucket\\Bundle\\OAuth2Bundle\\Entity\\ScopeRepository", "doc": "&quot;ScopeRepository.&quot;"},
                    
            
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


