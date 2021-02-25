@extends('layouts.api_doc')

@section('sidebar')
    @parent

    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
    <div id="project">
        <div class="pull-left">
            <h1>apidoc-example</h1>
            <h2>apiDoc example project</h2>
        </div>
        <div class="pull-right">
            <div class="btn-group">
                <button id="version" class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">
                    <strong>0.3.0</strong>&nbsp;<span class="caret"></span>
                </button>
                <ul id="versions" class="dropdown-menu open-left">
                <li><a id="compareAllWithPredecessor" href="#">Compare all with predecessor</a></li>
                <li class="divider"></li>
                <li class="disabled"><a href="#">show up to version:</a></li>
                <li class="version"><a href="#">0.3.0</a></li>
                <li class="version"><a href="#">0.2.0</a></li>
                <li class="version"><a href="#">0.1.0</a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

        <div id="header">
      <div id="api-_" class="show-api-article show-api-_-article"><h2 id="welcome-to-apidoc">Welcome to apiDoc</h2>
  <p>Please visit <a href="http://apidocjs.com">apidocjs.com</a> with the full documentation.</p>
  </div>
  </div>
        <div id="sections">
    <section id="api-User" class="show-api-group show-api-User-group">
      <h1>User</h1>
        <div id="api-User-GetUser" class="show-api-article show-api-User-article show-api-User-GetUser-article ">

    <article id="api-User-GetUser-0.3.0" data-group="User" data-name="GetUser" data-version="0.3.0" class="">
      <div class="pull-left">
        <h1>User - Read data of a User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.3.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
            <li class="version"><a href="#">0.2.0</a></li>
            <li class="version"><a href="#">0.1.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>Compare Verison 0.3.0 with 0.2.0 and you will see the green markers with new items in version 0.3.0 and red markers with removed items since 0.2.0.</p> <p></p>
      <span class="type type__get">get</span>
      <pre data-type="get" class="  language-http"><code class="  language-http">/user/:id</code></pre>

        <p>
          Permission:
            admin
            <button type="button" class="btn btn-info btn-xs" data-title="Admin access rights needed." data-content="<p>Optionally you can write here further Informations about the permission.</p> <p>An &amp;quot;apiDefine&amp;quot;-block can have an &amp;quot;apiVersion&amp;quot;, so you can attach the block to a specific version.</p> " data-html="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-original-title="" title="">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            </button>
        </p>

        <ul class="nav nav-tabs nav-tabs-examples">
            <li class="active">
              <a href="#examples-User-GetUser-0_3_0-0">Example usage:</a>
            </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="examples-User-GetUser-0_3_0-0">
            <pre data-type="json" class="  language-json"><code class="  language-json">curl -i http<span class="token operator">:</span><span class="token comment">//localhost/user/4711</span></code></pre>
          </div>
        </div>




        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Success 200</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">registered</td>
                <td>
                  Date
                </td>
              <td>
              <p>Registration Date.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">name</td>
                <td>
                  Date
                </td>
              <td>
              <p>Fullname of the User.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">nicknames</td>
                <td>
                  String[]
                </td>
              <td>
              <p>List of Users nicknames (Array of Strings).</p>


                          </td>
            </tr>
            <tr>
              <td class="code">profile</td>
                <td>
                  Object
                </td>
              <td>
              <p>Profile data (example for an Object)</p>


                          </td>
            </tr>
            <tr>
              <td class="code">&nbsp;&nbsp;age</td>
                <td>
                  Number
                </td>
              <td>
              <p>Users age.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">&nbsp;&nbsp;image</td>
                <td>
                  String
                </td>
              <td>
              <p>Avatar-Image.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">options</td>
                <td>
                  Object[]
                </td>
              <td>
              <p>List of Users options (Array of Objects).</p>


                          </td>
            </tr>
            <tr>
              <td class="code">&nbsp;&nbsp;name</td>
                <td>
                  String
                </td>
              <td>
              <p>Option Name.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">&nbsp;&nbsp;value</td>
                <td>
                  String
                </td>
              <td>
              <p>Option Value.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">NoAccessRight</td>
              <td>
              <p>Only authenticated Admins can access the data.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">UserNotFound</td>
              <td>
              <p>The <code>id</code> of the User was not found.</p>


                          </td>
            </tr>
          </tbody>
        </table>
        <ul class="nav nav-tabs nav-tabs-examples">
          <li class="active">
            <a href="#error-examples-User-GetUser-0_3_0-0">Response (example):</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="error-examples-User-GetUser-0_3_0-0">
          <pre data-type="json" class="  language-json"><code class="  language-json">    HTTP/<span class="token number">1.1</span> <span class="token number">401</span> Not Authenticated
      <span class="token punctuation">{</span>
        <span class="token property">"error"</span><span class="token operator">:</span> <span class="token string">"NoAccessRight"</span>
      <span class="token punctuation">}</span></code></pre>
          </div>
        </div>



        <h2>Send a Sample Request</h2>
        <form class="form-horizontal">
          <fieldset>
              <div class="form-group">
                <label class="col-md-3 control-label" for="-sample-request-url"></label>
                <div class="input-group">
                  <input id="-sample-request-url" type="text" class="form-control sample-request-url" value="http://apidocjs.com/example/api_project.json">
                  <span class="input-group-addon">url</span>
                </div>
              </div>


            <h3>Parameters</h3>
              <h4><input type="checkbox" data-sample-request-param-group-id="sample-request-param-0" name="User-GetUser-0_3_0-sample-request-param" value="0" class="sample-request-param sample-request-switch" checked="">Parameter
                <select name="User-GetUser-0_3_0-sample-header-content-type" class="User-GetUser-0_3_0-sample-request-param-select sample-header-content-type sample-header-content-type-switch">
                  <option value="undefined" selected="">ajax-auto</option>
                  <option value="body-json">body/json</option>
                  <option value="body-form-data">body/form-data</option>
                </select>
              </h4>
              <div class="User-GetUser-0_3_0-sample-request-param-body User-GetUser-0_3_0-sample-header-content-type-body hide">
                <div class="form-group">
                  <div class="input-group">
                    <textarea id="sample-request-body-json" class="form-control sample-request-body" data-sample-request-body-group="sample-request-param-0" rows="6" style="OVERFLOW: visible"></textarea>
                    <div class="input-group-addon">json</div>
                  </div>
                </div>
              </div>
              <div class="User-GetUser-0_3_0-sample-request-param-fields User-GetUser-0_3_0-sample-header-content-type-fields">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="sample-request-param-field-id">id</label>
                  <div class="input-group">
                    <input id="sample-request-param-field-id" type="text" placeholder="id" class="form-control sample-request-param" data-sample-request-param-name="id" data-sample-request-param-group="sample-request-param-0">
                    <div class="input-group-addon">String</div>
                  </div>
                </div>
              </div>

            <div class="form-group">
              <div class="controls pull-right">
                <button class="btn btn-primary sample-request-send" data-sample-request-type="get">Send</button>
              </div>
            </div>
            <div class="form-group sample-request-response" style="display: none;">
              <h3>
                Response
                <button class="btn btn-default btn-xs pull-right sample-request-clear">X</button>
              </h3>
              <pre data-type="json" class="  language-json"><code class=" sample-request-response-json  language-json"></code></pre>
            </div>
          </fieldset>
        </form>

    </article>

        </div>
        <div id="api-User-GetUser" class="show-api-article show-api-User-article show-api-User-GetUser-article ">

    <article id="api-User-GetUser-0.2.0" class="hide" data-group="User" data-name="GetUser" data-version="0.2.0">
      <div class="pull-left">
        <h1>User - Read data of a User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.2.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
            <li class="version"><a href="#">0.2.0</a></li>
            <li class="version"><a href="#">0.1.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>Here you can describe the function. Multilines are possible.</p> <p></p>
      <span class="type type__get">get</span>
      <pre data-type="get" class="  language-http"><code class="  language-http">/user/:id</code></pre>

        <p>
          Permission:
            admin
            <button type="button" class="btn btn-info btn-xs" data-title="This title is visible in version 0.1.0 and 0.2.0" data-content="" data-html="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-original-title="" title="">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            </button>
        </p>





        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Success 200</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">name</td>
                <td>
                  Date
                </td>
              <td>
              <p>Fullname of the User.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">UserNotFound</td>
              <td>
              <p>The <code>id</code> of the User was not found.</p>


                          </td>
            </tr>
          </tbody>
        </table>




    </article>

        </div>
        <div id="api-User-GetUser" class="show-api-article show-api-User-article show-api-User-GetUser-article ">

    <article id="api-User-GetUser-0.1.0" class="hide" data-group="User" data-name="GetUser" data-version="0.1.0">
      <div class="pull-left">
        <h1>User - Read data of a User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.1.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
            <li class="version"><a href="#">0.2.0</a></li>
            <li class="version"><a href="#">0.1.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>Here you can describe the function. Multilines are possible.</p> <p></p>
      <span class="type type__get">get</span>
      <pre data-type="get" class="  language-http"><code class="  language-http">/user/:id</code></pre>

        <p>
          Permission:
            admin
            <button type="button" class="btn btn-info btn-xs" data-title="This title is visible in version 0.1.0 and 0.2.0" data-content="" data-html="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-original-title="" title="">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            </button>
        </p>





        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Success 200</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">name</td>
                <td>
                  Date
                </td>
              <td>
              <p>Fullname of the User.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">UserNotFound</td>
              <td>
              <p>The error description text in version 0.1.0.</p>


                          </td>
            </tr>
          </tbody>
        </table>




    </article>

        </div>
        <div id="api-User-PostUser" class="show-api-article show-api-User-article show-api-User-PostUser-article ">

    <article id="api-User-PostUser-0.3.0" data-group="User" data-name="PostUser" data-version="0.3.0" class="">
      <div class="pull-left">
        <h1>User - Create a new User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.3.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
            <li class="version"><a href="#">0.2.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>In this case "apiUse" is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p> <p></p>
      <span class="type type__post">post</span>
      <pre data-type="post" class="  language-http"><code class="  language-http">/user</code></pre>

        <p>
          Permission:
            none
        </p>





        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">name</td>
                <td>
                  String
                </td>
              <td>
              <p>Name of the User.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Success 200</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The new Users-ID.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">NoAccessRight</td>
              <td>
              <p>Only authenticated Admins can access the data.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">UserNameTooShort</td>
              <td>
              <p>Minimum of 5 characters required.</p>


                          </td>
            </tr>
          </tbody>
        </table>
        <ul class="nav nav-tabs nav-tabs-examples">
          <li class="active">
            <a href="#error-examples-User-PostUser-0_3_0-0">Response (example):</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="error-examples-User-PostUser-0_3_0-0">
          <pre data-type="json" class="  language-json"><code class="  language-json">    HTTP/<span class="token number">1.1</span> <span class="token number">400</span> Bad Request
      <span class="token punctuation">{</span>
        <span class="token property">"error"</span><span class="token operator">:</span> <span class="token string">"UserNameTooShort"</span>
      <span class="token punctuation">}</span></code></pre>
          </div>
        </div>




    </article>

        </div>
        <div id="api-User-PostUser" class="show-api-article show-api-User-article show-api-User-PostUser-article ">

    <article id="api-User-PostUser-0.2.0" class="hide" data-group="User" data-name="PostUser" data-version="0.2.0">
      <div class="pull-left">
        <h1>User - Create a User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.2.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
            <li class="version"><a href="#">0.2.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>In this case "apiUse" is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p> <p></p>
      <span class="type type__post">post</span>
      <pre data-type="post" class="  language-http"><code class="  language-http">/user</code></pre>

        <p>
          Permission:
            none
        </p>





        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">name</td>
                <td>
                  String
                </td>
              <td>
              <p>Name of the User.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Success 200</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">id</td>
                <td>
                  String
                </td>
              <td>
              <p>The Users-ID.</p>


                          </td>
            </tr>
          </tbody>
        </table>


        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">NoAccessRight</td>
              <td>
              <p>Only authenticated Admins can access the data.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">UserNameTooShort</td>
              <td>
              <p>Minimum of 5 characters required.</p>


                          </td>
            </tr>
          </tbody>
        </table>
        <ul class="nav nav-tabs nav-tabs-examples">
          <li class="active">
            <a href="#error-examples-User-PostUser-0_2_0-0">Response (example):</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="error-examples-User-PostUser-0_2_0-0">
          <pre data-type="json" class="  language-json"><code class="  language-json">    HTTP/<span class="token number">1.1</span> <span class="token number">400</span> Bad Request
      <span class="token punctuation">{</span>
        <span class="token property">"error"</span><span class="token operator">:</span> <span class="token string">"UserNameTooShort"</span>
      <span class="token punctuation">}</span></code></pre>
          </div>
        </div>




    </article>

        </div>
        <div id="api-User-PutUser" class="show-api-article show-api-User-article show-api-User-PutUser-article ">

    <article id="api-User-PutUser-0.3.0" data-group="User" data-name="PutUser" data-version="0.3.0" class="">
      <div class="pull-left">
        <h1>User - Change a new User</h1>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <button class="version btn btn-default dropdown-toggle" data-toggle="dropdown">
            <strong>0.3.0</strong>&nbsp;<span class="caret"></span>
          </button>
          <ul class="versions dropdown-menu open-left">
            <li class="disabled"><a href="#">compare changes to:</a></li>
            <li class="version"><a href="#">0.3.0</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>




        <p></p><p>This function has same errors like POST /user, but errors not defined again, they were included with "apiUse"</p> <p></p>
      <span class="type type__put">put</span>
      <pre data-type="put" class="  language-http"><code class="  language-http">/user/:id</code></pre>

        <p>
          Permission:
            none
        </p>





        <h2>Parameter</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Field</th>
              <th style="width: 10%">Type</th>
              <th style="width: 60%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">name</td>
                <td>
                  String
                </td>
              <td>
              <p>Name of the User.</p>


                          </td>
            </tr>
          </tbody>
        </table>




        <h2>Error 4xx</h2>
        <table>
          <thead>
            <tr>
            <th style="width: 30%">Name</th>

              <th style="width: 70%">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="code">NoAccessRight</td>
              <td>
              <p>Only authenticated Admins can access the data.</p>


                          </td>
            </tr>
            <tr>
              <td class="code">UserNameTooShort</td>
              <td>
              <p>Minimum of 5 characters required.</p>


                          </td>
            </tr>
          </tbody>
        </table>
        <ul class="nav nav-tabs nav-tabs-examples">
          <li class="active">
            <a href="#error-examples-User-PutUser-0_3_0-0">Response (example):</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="error-examples-User-PutUser-0_3_0-0">
          <pre data-type="json" class="  language-json"><code class="  language-json">    HTTP/<span class="token number">1.1</span> <span class="token number">400</span> Bad Request
      <span class="token punctuation">{</span>
        <span class="token property">"error"</span><span class="token operator">:</span> <span class="token string">"UserNameTooShort"</span>
      <span class="token punctuation">}</span></code></pre>
          </div>
        </div>




    </article>

        </div>
    </section>
  </div>
        <div id="footer">
      <div id="api-_footer" class="show-api-article show-api-_-article"><h2 id="epilogue">Epilogue</h2>
  <p>Suggestions, contact, support and error reporting on <a href="https://github.com/apidoc/apidoc/issues">GitHub</a></p>
  </div>
  </div>
        <div id="generator">
        <div class="content">
          Generated with <a href=""></a> 0.9.0 - 2014-11-28T14:51:50.677Z
        </div>
  </div>
@endsection
