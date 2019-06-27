
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
        <link href="https://products.management/css/documentation.css" media=all rel=stylesheet />
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,900,700,300,100" media=screen rel=stylesheet />

        <link rel="stylesheet" href="https://products.management/css/prettyfy.css" />
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
                            <li> <a href="#ordering" class=""> <span class=api-request-title>Ordering</span> </a> </li>
                            <li> <a href="#filtering" class=""> <span class=api-request-title>Filtering</span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#department" class="">Departments</a>
                        <ul class="nav-links " id=department-panel>
                            <li> <a href="#department_attributes" class=active> <span class=api-request-title>Departments</span> </a> </li>
                            <li> <a href="#view_department_list" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Departments List</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#categories" class="">Categories</a>
                        <ul class="nav-links " id=categories-panel>
                            <li> <a href="#categories_attributes" class=active> <span class=api-request-title>Categories</span> </a> </li>
                            <li> <a href="#view_categories_list" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Categories List</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#product" class="">Products</a>
                        <ul class="nav-links " id=product-panel>
                            <li> <a href="#product_attributes" class=active> <span class=api-request-title>Product</span> </a> </li>
                            <li> <a href="#view_products_list" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Products List</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                            <li> <a href="#view_product" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Product</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#customer" class="">Customers</a>
                        <ul class="nav-links " id=customer-panel>
                            <li> <a href="#customer_attributes" class=active> <span class=api-request-title>Customer</span> </a> </li>
                            <li> <a href="#view_customer_list" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Customer List</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                            <li> <a href="#view_customer" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Customer</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                            <li> <a href="#create_customer" class=""> <i class="label label-small label-post">post</i> <span class=api-request-title>Create Customer</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#order" class="">Orders</a>
                        <ul class="nav-links " id=customer-panel>
                            <li> <a href="#order_attributes" class=active> <span class=api-request-title>Order</span> </a> </li>
                            <li> <a href="#view_order_list" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Order List</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
                            <li> <a href="#view_order" class=""> <i class="label label-small label-get">get</i> <span class=api-request-title>View Order</span> <span class="muted small light nav-center-url ellipsis"> /itil/departments/[id].json </span> </a> </li>
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
                                        <p class=api-info-text> This API belong to the <b>Representational State Transfer (REST)</b> category. This allows you to perform "RESTful" operations like read, modify, add or delete data.</p>
                                        <h3 class=api-overview-heading>What can I do with the Products Management API?</h3>
                                        <p class=api-info-text> With the APIs, you can
                                        <h6 class="api-overview-heading small-head">Read</h6>
                                        <ol class=list-styled>
                                            <li>Browse through products, departments, categories, transactions</li>
                                            <li>Apply Filters and get only the data that you want</li>
                                        </ol>
                                        <h6 class="api-overview-heading small-head">Write</h6>
                                        <ol class=list-styled>
                                            <li>Create new transactions</li>
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


                            <div id=ordering class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Ordering</h2>
                                    <div id=api-authentication>
                                        <h3 class=api-overview-heading>On all the collection results, you can specify ordering which should be applied</h3>

                                        <p class=api-info-text> See sample below, product list ordered ascending by db_change_stamp</p>
                                        <div class=api-url>
                                            <i class="label label-get label-large">get</i></span>
                                            <h6> /products?order_by=db_change_stamp:asc </h6>
                                        </div>
                                        <p class=api-info-text> You can sort result set by multiple columns</p>
                                        <div class=api-url>
                                            <i class="label label-get label-large">get</i></span>
                                            <h6> /products?order_by=price:desc,item_code:asc </h6>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div id=filtering class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Filtering</h2>
                                    <div id=api-filtering>
                                        <h3 class=api-overview-heading>On all the collection results, you can specify filters which should be applied</h3>

                                        <p class=api-info-text> Find products with db_change_stamp = 7743</p>
                                        <div class=api-url>
                                            <i class="label label-get label-large">get</i></span>
                                            <h6> /products?db_change_stamp=7743 </h6>
                                        </div>

                                        <p class=api-info-text> Find products with db_change_stamp > 7743 </p>
                                        <div class=api-url>
                                            <i class="label label-get label-large">get</i></span>
                                            <h6> /products?min:db_change_stamp=7743 </h6>
                                        </div>

                                        <p class=api-info-text> Find products with db_change_stamp < 7743</p>
                                        <div class=api-url>
                                            <i class="label label-get label-large">get</i></span>
                                            <h6> /products?max:db_change_stamp=7743 </h6>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- ------------------------------------ Introduction Section END ------------------------------------ -->



                                <!-- ------------------------------------ Department Section Start ------------------------------------ -->

                                <div id=department class=scroll-spy-parent>

                                    <div id=department_attributes class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Departments</h2>
                                            <p class=api-info-text>Departments helps you categorize products. With this API you can create, update and view departments in your company</p>

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
                                                    <td>db_change_stamp</td>
                                                    <td>number</td>
                                                    <td>Every change in DB increases this value, you can use it as last update Timestamp <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>number</td>
                                                    <td>ID specific to department <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td>string</td>
                                                    <td>Department name<i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>code</td>
                                                    <td>string</td>
                                                    <td>Short Department code<i class="label label-info label-small">unique</i><i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id=view_department_list class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Department List</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view Department. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /departments </h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "current_page": 1,
    "data": [
        {
            "db_change_stamp": 1610,
            "id": 1,
            "name": "Infant",
            "code": "100"
        },
        {
            "db_change_stamp": 1611,
            "id": 2,
            "name": "Action",
            "code": "200"
        },
        {
            "db_change_stamp": 1612,
            "id": 3,
            "name": "Dolls",
            "code": "300"
        },
        {
            "db_change_stamp": 1625,
            "id": 4,
            "name": "Sporting Goods",
            "code": "400"
        },
        {
            "db_change_stamp": 1627,
            "id": 5,
            "name": "Remote Control",
            "code": "500"
        },
        {
            "db_change_stamp": 1649,
            "id": 6,
            "name": "Misc",
            "code": "900"
        }
        ],
    "from": 1,
    "last_page": 1,
    "next_page_url": null,
    "path": "https://demo.products.management/api/departments",
    "per_page": 10,
    "prev_page_url": null,
    "to": 6,
    "total": 6
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
    curl -H "Content-Type: application/json;"
      -X GET https://username@demo.com:password@demo.api.products.management/api/departments?per_page=10&OrderBy=db_change_stamp:ASC&Mindb_change_stamp=1000
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                                </div>

                                <!-- ------------------------------------ Department Section END ------------------------------------ -->


                                <!-- ------------------------------------ Categories Section Start ------------------------------------ -->

                                <div id=categories class=scroll-spy-parent>

                                    <div id=categories_attributes class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Categories</h2>
                                            <p class=api-info-text>Categories helps you categorize products. With this API you can view Categories in your company</p>

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
                                                    <td>db_change_stamp</td>
                                                    <td>number</td>
                                                    <td>Every change in DB increases this value, you can use it as last update Timestamp <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>number</td>
                                                    <td>ID specific to department <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>department_id</td>
                                                    <td>number</td>
                                                    <td>ID specific to department, each category needs to be assigned to department <i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td>string</td>
                                                    <td>Category name<i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>code</td>
                                                    <td>string</td>
                                                    <td>Short Category code<i class="label label-info label-small">unique</i><i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id=view_categories_list class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Categories List</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view Categories. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /categories </h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "current_page": 1,
    "data": [
        {
            "db_change_stamp": 1615,
            "id": 1,
            "department_id": 5,
            "code": "TR",
            "name": "Train"
        },
        {
            "db_change_stamp": 1616,
            "id": 2,
            "department_id": 1,
            "code": "DV",
            "name": "Development"
        },
        {
            "db_change_stamp": 1618,
            "id": 3,
            "department_id": 1,
            "code": "CL",
            "name": "Clothing"
        },
        {
            "db_change_stamp": 1619,
            "id": 4,
            "department_id": 2,
            "code": "RS",
            "name": "Rescue"
        },
        {
            "db_change_stamp": 1621,
            "id": 6,
            "department_id": 3,
            "code": "BA",
            "name": "Baby"
        },
        {
            "db_change_stamp": 1623,
            "id": 8,
            "department_id": 4,
            "code": "SP",
            "name": "Sports"
        },
        {
            "db_change_stamp": 1626,
            "id": 9,
            "department_id": 5,
            "code": "AR",
            "name": "Airplane"
        },
        {
            "db_change_stamp": 1631,
            "id": 7,
            "department_id": 4,
            "code": "BY",
            "name": "Bicycle"
        },
        {
            "db_change_stamp": 1650,
            "id": 10,
            "department_id": 6,
            "code": "GC",
            "name": "Gift Cards"
        },
        {
            "db_change_stamp": 2625,
            "id": 5,
            "department_id": 2,
            "code": "HR",
            "name": "Heroes"
        }
    ],
    "from": 1,
    "last_page": 1,
    "next_page_url": null,
    "path": "https://demo.products.management/api/categories",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 10
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo@products.management:password@demo.api.products.management/api/categories?per_page=10&OrderBy=db_change_stamp:ASC&Mindb_change_stamp=1000
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                                </div>

                                <!-- ------------------------------------ Categories Section END ------------------------------------ -->

                                <!-- ------------------------------------ Product Section Start ------------------------------------ -->

                                <div id=product class=scroll-spy-parent>

                                    <div id=product_attributes class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Product</h2>
                                            <p class=api-info-text>With this API you can create, update and view products in your company</p>

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
                                                    <td>db_change_stamp</td>
                                                    <td>number</td>
                                                    <td>Every change in DB increases this value, you can use it as last update Timestamp <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>number</td>
                                                    <td>ID specific to product <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>item_code</td>
                                                    <td>string(25)</td>
                                                    <td>Short product code<i class="label label-info label-small">unique</i><i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>description</td>
                                                    <td>string(30)</td>
                                                    <td>Short product description <i class="label label-info label-small">mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>price</td>
                                                    <td>number</td>
                                                    <td>Full Retail Price</td>
                                                </tr>
                                                <tr>
                                                    <td>price_a</td>
                                                    <td>number</td>
                                                    <td>Retail PriceA - can be used to provide different pricing for ie Web</td>
                                                </tr>
                                                <tr>
                                                    <td>price_b</td>
                                                    <td>number</td>
                                                    <td>Retail Price B - can be used to provide different pricing for ie Web</td>
                                                </tr>
                                                <tr>
                                                    <td>price_c</td>
                                                    <td>number</td>
                                                    <td>Retail Price C - can be used to provide different pricing for ie Web</td>
                                                </tr>
                                                <tr>
                                                    <td>quantity_on_hand</td>
                                                    <td>number</td>
                                                    <td>Product current stock level</td>
                                                </tr>
                                                <tr>
                                                    <td>quantity_committed</td>
                                                    <td>number</td>
                                                    <td>Quantity reserved for current orders \ layaways etc.</td>
                                                </tr>
                                                <tr>
                                                    <td>quantity_available</td>
                                                    <td>number</td>
                                                    <td>Quantity currently available to sell <br>
                                                        <b>QuantityAvailable</b> = QuantityOnHand - QuantityCommitted</td>
                                                </tr>
                                                <tr>
                                                    <td>department_id</td>
                                                    <td>number</td>
                                                    <td>ID of department which product belongs to<i class="label label-info label-small">Mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>category_id</td>
                                                    <td>number</td>
                                                    <td>ID of category which product belongs to<i class="label label-info label-small">Mandatory</i></td>
                                                </tr>
                                                <tr>
                                                    <td>quantity_on_order</td>
                                                    <td>number</td>
                                                    <td>Quantity placed on supplier orders (Purchase Orders) - this will be going into stock when received</td>
                                                </tr>
                                                <tr>
                                                    <td>active</td>
                                                    <td>boolean</td>
                                                    <td>Describes if product is currently active</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id=view_products_list class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Products List</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view Products. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /products </h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "current_page": 1,
    "data": [
        {
            "id": 6,
            "db_change_stamp": 4199,
            "item_id": 6,
            "item_code": "25032",
            "description": "Infant Walker",
            "price": 15.99,
            "quantity_on_hand": 5,
            "quantity_committed": 0,
            "quantity_available": 5,
            "department_id": 1,
            "category_id": 2,
            "quantity_on_order": 12,
            "active": 1
        },
        {
            "id": 5,
            "db_change_stamp": 5100,
            "item_id": 5,
            "item_code": "GC",
            "description": "Gift Card",
            "price": 0,
            "quantity_on_hand": 97,
            "quantity_committed": 0,
            "quantity_available": 97,
            "department_id": 6,
            "category_id": 0,
            "quantity_on_order": 0,
            "active": 1
        },
        {
            "id": 2,
            "db_change_stamp": 6874,
            "item_id": 2,
            "item_code": "11212",
            "description": "R/C Train",
            "price": 94.99,
            "quantity_on_hand": 33,
            "quantity_committed": 0,
            "quantity_available": 33,
            "department_id": 5,
            "category_id": 1,
            "quantity_on_order": 12,
            "active": 1
        },
        {
            "id": 4,
            "db_change_stamp": 6879,
            "item_id": 4,
            "item_code": "15100",
            "description": "Football",
            "price": 9.99,
            "quantity_on_hand": 17,
            "quantity_committed": 0,
            "quantity_available": 17,
            "department_id": 4,
            "category_id": 8,
            "quantity_on_order": 6,
            "active": 1
        },
        {
            "id": 44,
            "db_change_stamp": 7438,
            "item_id": 44,
            "item_code": "15002",
            "description": "Girl's 15\" Bike",
            "price": 79.99,
            "quantity_on_hand": 4,
            "quantity_committed": 0,
            "quantity_available": 4,
            "department_id": 4,
            "category_id": 7,
            "quantity_on_order": 36,
            "active": 1
        },
        {
            "id": 1,
            "db_change_stamp": 7743,
            "item_id": 1,
            "item_code": "11200",
            "description": "R/C Glider",
            "price": 149.99,
            "quantity_on_hand": 39,
            "quantity_committed": 4,
            "quantity_available": 35,
            "department_id": 5,
            "category_id": 9,
            "quantity_on_order": 12,
            "active": 1
        },
        {
            "id": 48,
            "db_change_stamp": 7751,
            "item_id": 48,
            "item_code": "15110",
            "description": "Basketball",
            "price": 9.99,
            "quantity_on_hand": 17,
            "quantity_committed": 0,
            "quantity_available": 17,
            "department_id": 4,
            "category_id": 8,
            "quantity_on_order": 6,
            "active": 1
        },
        {
            "id": 49,
            "db_change_stamp": 7756,
            "item_id": 49,
            "item_code": "15120",
            "description": "Soccer ball",
            "price": 9.99,
            "quantity_on_hand": 8,
            "quantity_committed": 0,
            "quantity_available": 8,
            "department_id": 4,
            "category_id": 8,
            "quantity_on_order": 18,
            "active": 1
        },
        {
            "id": 45,
            "db_change_stamp": 7842,
            "item_id": 45,
            "item_code": "30020",
            "description": "Small Baby Doll",
            "price": 5.99,
            "quantity_on_hand": 81,
            "quantity_committed": 0,
            "quantity_available": 81,
            "department_id": 3,
            "category_id": 6,
            "quantity_on_order": 6,
            "active": 1
        },
        {
            "id": 47,
            "db_change_stamp": 7867,
            "item_id": 47,
            "item_code": "40010",
            "description": "Lolly Doll",
            "price": 5,
            "quantity_on_hand": 2,
            "quantity_committed": 0,
            "quantity_available": 2,
            "department_id": 3,
            "category_id": 6,
            "quantity_on_order": 0,
            "active": 1
        }
    ],
    "from": 1,
    "last_page": 5,
    "next_page_url": "https://demo.products.management/api/products?per_page=10&page=2",
    "path": "https://demo.products.management/api/products",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 49
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
    curl -H "Content-Type: application/json;"
      -X GET https://username@demo.com:password@demo.api.products.management/api/products?per_page=5&OrderBy=db_change_stamp:ASC&Mindb_change_stamp=1000
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id=view_product class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Product</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view product. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /products/[id]</h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
        "db_change_stamp": 4199,
        "id": 6,
        "item_id": 6,
        "department_id": 1,
        "category_id": 2,
        "supplier_id": 4,
        "item_code": "25032",
        "description": "Infant Walker",
        "price": 15.99,
        "price_a": 14.99,
        "price_b": 0,
        "price_c": 0,
        "quantity_on_hand": 5,
        "quantity_committed": 0,
        "quantity_available": 5,
        "active": 1
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo.api.products.management/api/products/6
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                                </div>

                                <!-- ------------------------------------ Product Section END ------------------------------------ -->


                                <!-- ------------------------------------ Customer Section Start ------------------------------------ -->

                                <div id=customer class=scroll-spy-parent>

                                    <div id=customer_attributes class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Customer</h2>
                                            <p class=api-info-text>With this API you can create, update and view your customers</p>

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
                                                    <td>db_change_stamp</td>
                                                    <td>number</td>
                                                    <td>Every change in DB increases this value, you can use it as last update Timestamp <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>number</td>
                                                    <td>ID specific to customer <i class="label label-info label-small">Read-Only</i></td>
                                                </tr>
                                                <tr>
                                                    <td>account_number</td>
                                                    <td>string</td>
                                                    <td>Customer unique account number<i class="label label-info label-small">unique</i></td>
                                                </tr>
                                                <tr>
                                                    <td>title</td>
                                                    <td>string</td>
                                                    <td>Customer title (Mr \ Ms etc)</td>
                                                </tr>
                                                <tr>
                                                    <td>first_name</td>
                                                    <td>string</td>
                                                    <td>Customers first name</td>
                                                </tr>
                                                <tr>
                                                    <td>last_name</td>
                                                    <td>string</td>
                                                    <td>Customers last name</td>
                                                </tr>
                                                <tr>
                                                    <td>company</td>
                                                    <td>string</td>
                                                    <td>Customers company name</td>
                                                </tr>
                                                <tr>
                                                    <td>address</td>
                                                    <td>string</td>
                                                    <td>First line of address</td>
                                                </tr>
                                                <tr>
                                                    <td>address2</td>
                                                    <td>string</td>
                                                    <td>Second line of address</td>
                                                </tr>
                                                <tr>
                                                    <td>city</td>
                                                    <td>string</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>state</td>
                                                    <td>string</td>
                                                    <td>State \ County</td>
                                                </tr>
                                                <tr>
                                                    <td>zip</td>
                                                    <td>string</td>
                                                    <td>Zip \ Post code</td>
                                                </tr>
                                                <tr>
                                                    <td>phone_number</td>
                                                    <td>string</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>fax_number</td>
                                                    <td>string</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>email_address</td>
                                                    <td>string</td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id=view_customer_list class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Customer List</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view Customers. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /customers </h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
    "current_page": 1,
    "data": [
        {
            "db_change_stamp": 7581,
            "id": 3,
            "account_number": "0000003",
            "title": "Mr.",
            "first_name": "David",
            "last_name": "Simpson",
            "company": " ",
            "address": "923 10th Street West",
            "address2": " ",
            "city": "Kirkland",
            "state": "WA",
            "zip": "89923",
            "country": " ",
            "phone_number": "(425) 555-1022",
            "fax_number": " ",
            "email_address": " "
        },
        {
            "db_change_stamp": 193335,
            "id": 2,
            "account_number": "0000002",
            "title": "Ms.",
            "first_name": "Diane",
            "last_name": "Tibbot",
            "company": " ",
            "address": "8283 West Cout",
            "address2": " ",
            "city": "Renton",
            "state": "WA",
            "zip": "93838",
            "country": " ",
            "phone_number": "(425) 555-0192",
            "fax_number": " ",
            "email_address": " "
        },
        {
            "db_change_stamp": 193369,
            "id": 1,
            "account_number": "0000001",
            "title": "Mr.",
            "first_name": "Gregory",
            "last_name": "Weber",
            "company": " ",
            "address": "9392 Ninth Ave.",
            "address2": " ",
            "city": "Redmond",
            "state": "WA",
            "zip": "93893",
            "country": " ",
            "phone_number": "(425) 555-0129",
            "fax_number": " ",
            "email_address": " "
        },
        {
            "db_change_stamp": 505316,
            "id": 4,
            "account_number": "0000004",
            "title": " ",
            "first_name": " ",
            "last_name": "New Customer",
            "company": " ",
            "address": " ",
            "address2": " ",
            "city": " ",
            "state": " ",
            "zip": " ",
            "country": " ",
            "phone_number": " ",
            "fax_number": " ",
            "email_address": " "
        },
        {
            "db_change_stamp": 505319,
            "id": 5,
            "account_number": "0000005",
            "title": " ",
            "first_name": " ",
            "last_name": "New Customer",
            "company": " ",
            "address": " ",
            "address2": " ",
            "city": " ",
            "state": " ",
            "zip": " ",
            "country": " ",
            "phone_number": " ",
            "fax_number": " ",
            "email_address": " "
        }
        ],
    "from": 1,
    "last_page": 18,
    "next_page_url": "https://demo.products.management/api/customers?per_page=5&page=2",
    "path": "https://demo.products.management/api/customers",
    "per_page": 5,
    "prev_page_url": null,
    "to": 5,
    "total": 88
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo.api.products.management/api/customers?per_page=5&order_by=db_change_stamp:ASC
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id=view_customer class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>View a Customer</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to view customer. </p>
                                            <div class=api-url>
                                                <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                                <h6> /customers/[id]</h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
        "db_change_stamp": 7581,
        "id": 3,
        "account_number": "0000003",
        "title": "Mr.",
        "first_name": "David",
        "last_name": "Simpson",
        "company": " ",
        "address": "923 10th Street West",
        "address2": " ",
        "city": "Kirkland",
        "state": "WA",
        "zip": "89923",
        "country": " ",
        "phone_number": "(425) 555-1022",
        "fax_number": " ",
        "email_address": " "
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo.api.products.management/api/customers/3
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=create_customer class=scroll-spy>
                                        <div class=api-content-main>
                                            <h2>Create new Customer</h2>
                                            <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                            <p> This API helps you to create new customer. </p>
                                            <div class=api-url>
                                                <i class="label label-post label-large">post</i> <span class=icon-globe></span>
                                                <h6> /customers</h6>
                                            </div>
                                            <div class=api-code-container>
                                                <h6> Response </h6>
                                                <div class="api-code-content expand-response-content">
                                                    <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
        "db_change_stamp": 9987,
        "id": 12,
        "account_number": "0000051",
        "title": "",
        "first_name": "David",
        "last_name": "Simpson",
        "company": " ",
        "address": "",
        "address2": " ",
        "city": "",
        "state": "",
        "zip": "",
        "country": " ",
        "phone_number": "",
        "fax_number": " ",
        "email_address": " "
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
    curl -H "Content-Type: application/json;"
      -X POST -d '{"first_name": "David","last_name":"Simpson"}' https://demo.api.products.management/api/customers
    </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ------------------------------------ EXTRA ABOVE THIS LINE ------------------------------------ -->

                                </div>

                                <!-- ------------------------------------ Customer Section END ------------------------------------ -->







                        <!-- ------------------------------------ Customer Section Start ------------------------------------ -->


                            <div id=order_attributes class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Order</h2>
                                    <p class=api-info-text>With this API you can create, update and view your orders</p>

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
                                            <td>db_change_stamp</td>
                                            <td>number</td>
                                            <td>Every change in DB increases this value, you can use it as last update Timestamp <i class="label label-info label-small">Read-Only</i></td>
                                        </tr>
                                        <tr>
                                            <td>id</td>
                                            <td>number</td>
                                            <td>ID specific to order <i class="label label-info label-small">Read-Only</i></td>
                                        </tr>
                                        <tr>
                                            <td>closed</td>
                                            <td>boolen</td>
                                            <td>True when orderd is completed<i class="label label-info label-small">Read-Only</i></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>DateTime</td>
                                            <td>Order creation time</td>
                                        </tr>
                                        <tr>
                                            <td>comment</td>
                                            <td>string</td>
                                            <td>Order comment</td>
                                        </tr>
                                        <tr>
                                            <td>customer_id</td>
                                            <td>Integer</td>
                                            <td>Customers ID</td>
                                        </tr>
                                        <tr>
                                            <td>deposit</td>
                                            <td>Double</td>
                                            <td>Total value of all deposits (payments) made</td>
                                        </tr>
                                        <tr>
                                            <td>total</td>
                                            <td>Double</td>
                                            <td>Order total value</td>
                                        </tr>
                                        <tr>
                                            <td>reference_number</td>
                                            <td>string</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>shipping_charge_on_order</td>
                                            <td>Double</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>shipping_address</td>
                                            <td>array of strings</td>
                                            <td>See list below for allowed attributes</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <p class=api-info-text>Shipping_address attributes</p>
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
                                        <td>id</td>
                                        <td>integer</td>
                                        <td><i class="label label-info label-small">Read-Only</i></td>
                                    </tr>
                                    <tr>
                                        <td>company</td>
                                        <td>string</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td>string</td>
                                        <td>Full customer name<i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>address</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>address2</td>
                                        <td>string</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>city</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>zip</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>country</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>state</td>
                                        <td>string</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>email_address</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>phone_number</td>
                                        <td>string</td>
                                        <td><i class="label label-info label-small">mandatory</i></td>
                                    </tr>
                                    <tr>
                                        <td>fax_number</td>
                                        <td>string</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div id=view_order_list class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>View Order List</h2>
                                    <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                    <p> This API helps you to view Orders. </p>
                                    <div class=api-url>
                                        <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                        <h6> /orders </h6>
                                    </div>
                                    <div class=api-code-container>
                                        <h6> Response </h6>
                                        <div class="api-code-content expand-response-content">
                                            <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
        "current_page": 1,
        "data": [
            {
                "db_change_stamp": 525015,
                "id": 169,
                "store_id": 0,
                "closed": 0,
                "time": "2017-10-02 13:59:37",
                "comment": "fdsa",
                "customer_id": 50,
                "deposit": 30,
                "total": 50,
                "reference_number": "1234",
                "shipping_charge_on_order": 0
            },
            {
                "db_change_stamp": 525002,
                "id": 168,
                "store_id": 0,
                "closed": 0,
                "time": "2017-10-02 13:59:29",
                "comment": "Test Transaction",
                "customer_id": 262,
                "deposit": 0,
                "total": 100,
                "reference_number": "Test",
                "shipping_charge_on_order": 0
            },
            {
                "db_change_stamp": 524982,
                "id": 167,
                "store_id": 0,
                "closed": 0,
                "time": "2017-10-02 13:59:27",
                "comment": "Testy",
                "customer_id": 257,
                "deposit": 0,
                "total": 100,
                "reference_number": "123456",
                "shipping_charge_on_order": 0
            },
            {
                "db_change_stamp": 524971,
                "id": 166,
                "store_id": 0,
                "closed": 0,
                "time": "2017-10-02 13:53:35",
                "comment": "Test Transaction",
                "customer_id": 255,
                "deposit": 0,
                "total": 100,
                "reference_number": "Test",
                "shipping_charge_on_order": 0
            },
            {
                "db_change_stamp": 524951,
                "id": 165,
                "store_id": 0,
                "closed": 0,
                "time": "2017-10-02 13:53:34",
                "comment": "Testy",
                "customer_id": 250,
                "deposit": 0,
                "total": 100,
                "reference_number": "123456",
                "shipping_charge_on_order": 0
            }
        ],
        "from": 1,
        "last_page": 6,
        "next_page_url": "http://api.products.management.dev/api/orders?per_page=5&page=2",
        "path": "http://api.products.management.dev/api/orders",
        "per_page": 5,
        "prev_page_url": null,
        "to": 5,
        "total": 28
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo.api.products.management/api/orders?per_page=5&order_by=db_change_stamp:asc
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id=view_order class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>View an Order</h2>
                                    <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                    <p> This API helps you to view order. </p>
                                    <div class=api-url>
                                        <i class="label label-get label-large">get</i> <span class=icon-globe></span>
                                        <h6> /orders/[id]</h6>
                                    </div>
                                    <div class=api-code-container>
                                        <h6> Response </h6>
                                        <div class="api-code-content expand-response-content">
                                            <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
        "db_change_stamp": 525015,
        "store_id": 0,
        "id": 169,
        "closed": 0,
        "time": "2017-10-02 13:59:37",
        "type": 5,
        "comment": "fdsa",
        "customer_id": 50,
        "ship_to_id": 0,
        "deposit_override": 0,
        "deposit": 30,
        "tax": 0,
        "total": 50,
        "expiration_or_due_date": "2017-10-02 13:59:37",
        "taxable": 1,
        "reference_number": "1234",
        "shipping_charge_on_order": 0,
        "shipping_charge_override": 0,
        "shipping_service_id": 0,
        "shipping_tracking_number": " ",
        "shipping_notes": " ",
        "reason_code_id": 0,
        "exchange_id": 0,
        "channel_type": 0,
        "default_discount_reason_code_i": 0,
        "default_return_reason_code_id": 0,
        "default_tax_change_reason_code": 0
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
    curl -H "Content-Type: application/json;"
      -X GET https://demo.api.products.management/api/orders/169
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=create_order class=scroll-spy>
                                <div class=api-content-main>
                                    <h2>Create new Order</h2>
                                    <!-- ------------------------------------------------------------------------------------------------------------------ -->
                                    <p> This API helps you to create new order. </p>
                                    <div class=api-url>
                                        <i class="label label-post label-large">post</i> <span class=icon-globe></span>
                                        <h6> /orders</h6>
                                    </div>
                                    <div class=api-code-container>
                                        <h6> Response </h6>
                                        <div class="api-code-content expand-response-content">
                                            <div class=code-wrapper>
                                                                        <pre class="highlight prettyprint linenums lang-json">{
      "comment": "fdsa",
      "reference_number": "1234",
      "customer_id": 50,
      "shipping_charge_on_order": 20,
      "products": [
        {
          "item_id": 11,
          "quantity": 5,
          "price": 10
        },
        {
          "item_id": 12,
          "quantity": 3,
          "price": 100
        }
      ],
      "deposits": [
        {
          "description": "PayPal",
          "total": 10
        },
            {
          "description": "Realex Payments",
          "total": 20
        }
      ]
      "shipping_address": {
           "company": "S company",
          "name": "S name",
          "address": "S Address",
          "address2": "S Address 2",
          "city": "S City",
          "zip": "S Address",
          "country": "S country",
          "state": "S state",
          "email_address": "x@y.z",
          "phone_number": "S Address",
        "fax_number": "S Address",
      }
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
    curl -H "Content-Type: application/json;"
      -X POST -d '{
        "comment": "fdsa",
        "reference_number": "1234",
        "customer_id": 50,
        "shipping_charge_on_order": 20,
        "products": [
            {"item_id": 11, "quantity": 5, "price": 10},
            {"item_id": 12, "quantity": 3, "price": 100}
        ],
        "deposits": [
            {"description": "PayPal", "total": 10},
            {"description": "Realex Payments", "total": 20}
        ]
    }' https://demo.api.products.management/api/customers
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
                    <li><a href="//StockManager.com/terms">TERMS OF SERVICE</a></li>
                    <li><a href="//StockManager.com/privacy">PRIVACY POLICY</a></li>
                    <li><a href="//StockManager.com/sitemap">SITEMAP</a></li>
                </ul>
            </div>
            <div class="fg-4 omega copy"> Copyright © Your IT Solutions Ltd. All Rights Reserved. </div>
        </div>
        <i id=back-to-top></i>
    </footer>

    <script src="https://products.management/js/head-b16c62e3.js"></script>
    <script src="https://products.management/js/all-api-bb086d55.js"></script>
    <script src="https://products.management/js/prettify.min.js"></script>
    <script src="https://products.management/js/run_prettify.js"></script>

    </body>
    </html>
