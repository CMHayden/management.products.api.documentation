
<!DOCTYPE html> <!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7">
    <![endif]--> <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8">
    <![endif]--> <!--[if IE 8]>
    <html class="no-js lt-ie9">
    <![endif]--> <!--[if IE 9]>
    <html class="no-js lt-ie10">
    <![endif]-->
    <html class=no-js lang=en-us>
    <head>
        <meta charset=utf-8>
        <title>PM API for Developers | Products.management</title>
        <meta content='If you are developer who wants to build applications on top of our Products Management platform, this APIs is all you need.' name=description>
        <meta content='humans.txt' name=author>
        <meta content='service desk apis, Product Management apis, products.management API for developers' name=keywords>
        <meta content=true name=HandheldFriendly>
        <meta content=320 name=MobileOptimized>
        <meta content='width=device-width, target-densitydpi=160dpi, initial-scale=1' name=viewport>
        <meta content=yes name=apple-mobile-web-app-capable>
        <meta content=black-translucent name=apple-mobile-web-app-status-bar-style>
        <meta content='telephone=no' name=format-detection>
        <meta content='address=no' name=format-detection>
        <link href='favicon.ico' rel=icon type='image/x-icon'>
        <link href='favicon.ico' rel='shortcut icon' type='image/x-icon'>
        <link href="http://products.management/css/documentation.css" media=all rel=stylesheet />
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,900,700,300,100" media=screen rel=stylesheet />

        <link rel="stylesheet" href="http://products.management/css/prettyfy.css" />
    </head>
    <body>
    <!--[if lt IE 8]>
    <p class=chromeframe>You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> or <a href="//www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div class=main role=main>
        <div class=inner-banner-strip>
            <div class=l-page>
                <h4 class="heading bold">API Reference</h4>
            </div>
        </div>
        <section class="fc l-page page-wrapper">
            <div class=anchorspy>
                <ul class="nav-main stick-to-body nav" id=scroll-nav>
                    <li>
                        <a href="#introduction" class=active>Introduction</a>
                        <ul class="nav-links active" id=introduction-panel>
                            <li> <a href="#intro" class=active> <span class=api-request-title>Overview</span> <span class="muted small light nav-center-url ellipsis"> What are APIs </span> </a> </li>
                            <li> <a href="#api_endpoint_and_ssl" class=""> <span class=api-request-title>API Endpoints and SSL</span> <span class="muted small light nav-center-url ellipsis"> API endpoints are mapped to your account domain: </span> </a> </li>
                            <li> <a href="#authentication" class=""> <span class=api-request-title>Authentication</span> <span class="muted small light nav-center-url ellipsis"> How does it work? Who can access my helpdesk? Can everybody see my data? </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#product" class="">Products</a>
                        <ul class="nav-links " id=product-panel>
                            <li> <a href="#product_attributes" class=active> <span class=api-request-title>Product</span> </a> </li>
                            <li> <a href="#add_product" class=""> <i class="label label-small label-post">post</i> <span class=api-request-title>Add New Product</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#order" class="">Orders</a>
                        <ul class="nav-links " id=customer-panel>
                            <li> <a href="#order_attributes" class=active> <span class=api-request-title>Order</span> </a> </li>
                            <li> <a href="#create_order" class=""> <i class="label label-small label-post">post</i> <span class=api-request-title>Create Order</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="fg-6 fg-6a omega api-content-wrapper">
                <div class=content>
                    <div id=api-content>
                        <!-- ------------------------------------ Introduction Section START ------------------------------------ -->
                        <div id=introduction class=scroll-spy-parent>
                            <div id=intro class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Overview</h2>
                                    <div id=api-overview>
                                        <h3 class=api-overview-heading>Products Management API</h3>
                                        <p class=api-info-text> This API belongs to the <b>Representational State Transfer (REST)</b> category. This allows you to perform "RESTful" operations like read, modify, add or delete data.</p>
                                        <h3 class=api-overview-heading>What can I do with the Products Management API?</h3>
                                        <p class=api-info-text> With the APIs, you can
                                        <h6 class="api-overview-heading small-head">Post</h6>
                                        <ol class=list-styled>
                                            <li>Send notifications about orders or products</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id=api_endpoint_and_ssl class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>API Endpoints and SSL</h2>
                                    <p class=api-info-text> API endpoints are mapped to your account domain: </p>
                                    <p class=notice-code-block> https://{yourstore}.api.products.management/ </p>
                                </div>
                            </div>

                            <div id=authentication class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Authentication</h2>
                                    <div id=api-authentication>
                                        <h3 class=api-overview-heading>How does it work? Who can access my products? Can everybody see my data?</h3>
                                        <p class=api-info-text> <b>"Thou shall not pass."</b> Unless you authenticate your ID </p>
                                        <p class=api-info-text> Before you can view or change the data, you need to "authenticate your ID" or "login" in the same way as you login into your helpdesk's web portal. </p>
                                        <p class=api-info-text> Products Management uses <a href="//en.wikipedia.org/wiki/Basic_access_authentication">Basic Authentication</a>. This means, for authentication, you can use the same username and password you use when logging into your portal.</p>

                                        <h3 class=api-overview-heading>Step 1</h3>
                                        <p class=notice-code-block> curl -u user@yourcompany.com:test -H "Content-Type: application/json"<br>
                                            -X GET http://user@demo.com:password@api.products.management/api/products </p>
                                        <p class=notice-block> <b>Note:</b><br/> If you are sure that your password and username are correct, but are still unable to access your helpdesk, make sure that your "username:password" is Base64-encoded. </p>


                                        <h3 class=api-overview-heading>Step 2</h3>
                                        <h3 class=api-overview-heading>Where can I find my API key?</h3>
                                        <ol class=list-styled>
                                            <li>Please contact your dedicated agent to create account for you.</li>
                                        </ol>
                                        <h3 class=api-overview-heading>How do I access the information? What are the resources available via the API? </h3>
                                        <p class=api-info-text> Every single piece of information or data - be it a product's ID or the total of a specific transaction - can be identified by its own unique identifier or "URI". If you want your data from the API, whether via your smartphone app or via a third party service, you need this identifier. All URIs follow a specific format and that format is:<br> <b>https://your_customer_name.api.products.management/api/resource_name</b> </p>
                                        <p class=api-info-text> <b>For example:</b> If you are Davy Jones and you are managing the drowned souls and their departments via your Products Management portal "thelocker", then to access products in your portal, the syntax would be<br> <b>https://thelocker.api.products.management/api/products<br></b> For transactions, it would be<br> <b>https://thelocker.api.products.management/api/transactions</b> </p>
                                        <p class=notice-block> <b>Note:</b><br/> We have shortened API resource URL throughout this document. Prefix your support domain name to the resource handle. <br/> Example: <br/><span class=small-head> /departments</span> is actually <span class=small-head>https://yourdomain.api.products.management/api/departments</span> </p>
                                        <h3 class=api-overview-heading>What API commands are used by StockManager?</h3>
                                        <p class=api-info-text>StockManager APIs have been implemented as JSON over HTTP and use the following REST Commands:</p>
                                        <table class="table table-bordered api-attributes-table">
                                            <thead>
                                            <tr>
                                                <th>Command</th>
                                                <th>Purpose</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>Create one or more items</td>
                                            </tr>
                                            <tr>
                                                <td>GET</td>
                                                <td>Fetch one or more items</td>
                                            </tr>
                                            <tr>
                                                <td>PUT</td>
                                                <td>Update one or more existing items</td>
                                            </tr>
                                            <tr>
                                                <td>DELETE</td>
                                                <td>Remove one or more items that already exist</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ------------------------------------ Introduction Section END ------------------------------------ -->

                                <!-- ------------------------------------ Product Section Start ------------------------------------ -->

                                <div id=product class=scroll-spy-parent>

                                    <div id=product_attributes class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Product</h2>
                                            <p class=api-info-text>With this API you can send notifications to subscribers on products</p>

                                            <table class="table table-bordered api-attributes-table">
                                                <thead>
                                                <tr>
                                                    <th>Attribute</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>sku</td>
                                                    <td>number</td>
                                                    <td>ID corresponding to the product/td>
                                                </tr>
                                                <tr>
                                                    <td>description</td>
                                                    <td>text</td>
                                                    <td>Text which describes the product</td>
                                                </tr>
                                                <tr>
                                                    <td>price</td>
                                                    <td>number</td>
                                                    <td>Price per unit of the product</i></td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id=add_product class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Add a New Product</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to add a new Product. </p>
                                            <div class=api-url>
                                                <i class="label label-post label-large">post</i> <span class=icon-globe></span>
                                                <h6> /api/products </h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "ok"
}
    </pre><a class=api-code-expand href="#">EXPAND &darr;</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="api-code-container api-sample api-code-curl">
                                                <h6> Sample code | Curl </h6>
                                                <div class=api-code-content>
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-curl">
curl -X POST \
https://api.products.management.coding.cab/api/products \
-H 'Accept: application/json' \
-H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI0NDcxOWU4ZmI2ZGEwZjY3OTA2MzUwOTFlMzNhYTYzYTUxNjY3ZjQ2MjYwN2E2NmUyNTQ4MjU3YjhjMTA0MDEwMDc2NDk3OGJjNTdiZTczIn0.eyJhdWQiOiI0IiwianRpIjoiMjQ0NzE5ZThmYjZkYTBmNjc5MDYzNTA5MWUzM2FhNjNhNTE2NjdmNDYyNjA3YTY2ZTI1NDgyNTdiOGMxMDQwMTAwNzY0OTc4YmM1N2JlNzMiLCJpYXQiOjE1NjEwMjA1MDAsIm5iZiI6MTU2MTAyMDUwMCwiZXhwIjoxNTkyNjQyOTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.vDAkKTusAsUMkYh3eQUuZs0FBA58gL2Y8pKxAZ_vVhEbD-h_zQX3YXRKC-DzsgRiP_dn7gb8ykaxbWqc3L2vd9R8EPu3lNZx4fWtrq3_LdDbwzFuED1CqZOoAsCjUBQNdJP5Wt7RAdnyzT9LV3wYF5AMzi321VZFA5Jh08DdE4fVk555JnNt5kwhbb5SRKm3PA5KooZPswWDxuTjGUnmY1_AEqjGFbcAZ-W75bJaFFEkVMOrQMxs4yhd3qdlFlWuAGVeosY4h1Vf_Wx9wkSnQM6i8hisiEpldBFmx63FMarxX7w09hVyGVZ0zaBFY0ZQEu8bMFm6h9ZG75vPLipDNTXiv0n8JeV0fZUMJ4LWHshcmEheErLW0tGFqDVYVGvU5QGqgMdBb80N-BeQ95MR-pNJTIPQ2zm06jvAsW6eZ-6rcAXp-6lzt943hMPIFGaBeQ3HiQttxJ-J5M6WdizQr76jJgHnO7CeL-T5mbfuJE2goGnW1WaMSM11aDRmzI3ylpnilweCXSNnn3EOJDQWK38_JFQaXyj8UM5eA7sTRxYdC0hzpUkmykBFh0fqSLW0JidC8PElpRgZX41nVAMy7yacn9WjQH7LxQE-csMrF5hJzinpig4IMraOyS6EltWUaSMGyzN0-asMn86MHhOnLWtyf3ocSK9AluemjufA-yA' \
-d '{
    "sku": "123456",
    "description": "Blue bag",
    "price": 78
}'
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                                </div>

                                <!-- ------------------------------------ Product Section END ------------------------------------ -->





                        <!-- ------------------------------------ Order Section Start ------------------------------------ -->


                            <div id=order_attributes class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Order</h2>
                                    <p class=api-info-text>With this API you can send notifications about orders</p>

                                    <table class="table table-bordered api-attributes-table">
                                        <thead>
                                        <tr>
                                            <th>Attribute</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>orderID</td>
                                            <td>number</td>
                                            <td>The ID corresponding to the order which is being posted</td>
                                        </tr>
                                        <tr>
                                            <td>sku</td>
                                            <td>string</td>
                                            <td>ID corresponding to the product</td>
                                        </tr>
                                        <tr>
                                            <td>quantity</td>
                                            <td>number</td>
                                            <td>Amount of units being ordered</td>
                                        </tr>
                                        <tr>
                                            <td>pricePerUnit</td>
                                            <td>number</td>
                                            <td>The price for the individual product</td>
                                        </tr>
                                        <tr>
                                            <td>priceTotal</td>
                                            <td>number</td>
                                            <td>Total price of the order (pricePerUnit * quantity)</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>


                            <div id=create_order class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Create new Order</h2>
                                    <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                    <p> This API helps you to create new order. </p>
                                    <div class=api-url>
                                        <i class="label label-post label-large">post</i> <span class=icon-globe></span>
                                        <h6> /api/orders</h6>
                                    </div>
                                    <div class=api-code-container>
                                        <h6> Response </h6>
                                        <div class="api-code-content expand-response-content">
                                            <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "ok"
}
    </pre><a class=api-code-expand href="#">EXPAND &darr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="api-code-container api-sample api-code-curl">
                                        <h6> Sample code | Curl </h6>
                                        <div class=api-code-content>
                                            <div class=code-wrapper>
                                                <pre class="highlight prettyprint linenums lang-curl">
curl -X POST \
http://api.products.management.coding.cab/api/products \
-H 'Accept: application/json' \
-H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI0NDcxOWU4ZmI2ZGEwZjY3OTA2MzUwOTFlMzNhYTYzYTUxNjY3ZjQ2MjYwN2E2NmUyNTQ4MjU3YjhjMTA0MDEwMDc2NDk3OGJjNTdiZTczIn0.eyJhdWQiOiI0IiwianRpIjoiMjQ0NzE5ZThmYjZkYTBmNjc5MDYzNTA5MWUzM2FhNjNhNTE2NjdmNDYyNjA3YTY2ZTI1NDgyNTdiOGMxMDQwMTAwNzY0OTc4YmM1N2JlNzMiLCJpYXQiOjE1NjEwMjA1MDAsIm5iZiI6MTU2MTAyMDUwMCwiZXhwIjoxNTkyNjQyOTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.vDAkKTusAsUMkYh3eQUuZs0FBA58gL2Y8pKxAZ_vVhEbD-h_zQX3YXRKC-DzsgRiP_dn7gb8ykaxbWqc3L2vd9R8EPu3lNZx4fWtrq3_LdDbwzFuED1CqZOoAsCjUBQNdJP5Wt7RAdnyzT9LV3wYF5AMzi321VZFA5Jh08DdE4fVk555JnNt5kwhbb5SRKm3PA5KooZPswWDxuTjGUnmY1_AEqjGFbcAZ-W75bJaFFEkVMOrQMxs4yhd3qdlFlWuAGVeosY4h1Vf_Wx9wkSnQM6i8hisiEpldBFmx63FMarxX7w09hVyGVZ0zaBFY0ZQEu8bMFm6h9ZG75vPLipDNTXiv0n8JeV0fZUMJ4LWHshcmEheErLW0tGFqDVYVGvU5QGqgMdBb80N-BeQ95MR-pNJTIPQ2zm06jvAsW6eZ-6rcAXp-6lzt943hMPIFGaBeQ3HiQttxJ-J5M6WdizQr76jJgHnO7CeL-T5mbfuJE2goGnW1WaMSM11aDRmzI3ylpnilweCXSNnn3EOJDQWK38_JFQaXyj8UM5eA7sTRxYdC0hzpUkmykBFh0fqSLW0JidC8PElpRgZX41nVAMy7yacn9WjQH7LxQE-csMrF5hJzinpig4IMraOyS6EltWUaSMGyzN0-asMn86MHhOnLWtyf3ocSK9AluemjufA-yA' \
-d '{
    "orderID": "001241",
    "sku": "123456",
    "quantity": 9,
    "pricePerUnit": 78,
    "priceTotal": 702
}'
    </pre><a class=api-code-expand href="#">EXPAND &darr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                        </div>

                        <!-- ------------------------------------ Order Section END ------------------------------------ -->


                        </div>

                    </div>
        </section>
    </div>

    <footer class=footer>
        <div class="l-page fc copy-separator">
            <div class="fg-6 footer-bottom-link">
                <ul class=clearfix>
                    <li><a href="#">TERMS OF SERVICE</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">SITEMAP</a></li>
                </ul>
            </div>
            <div class="fg-4 omega copy"> Copyright © Your IT Solutions Ltd. All Rights Reserved. </div>
        </div>
        <i id=back-to-top></i>
    </footer>

    <script src="http://products.management/js/head-b16c62e3.js"></script>
    <script src="http://products.management/js/all-api-bb086d55.js"></script>
    <script src="http://products.management/js/prettify.min.js"></script>
    <script src="http://products.management/js/run_prettify.js"></script>

    </body>
    </html>
