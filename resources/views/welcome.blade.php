<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feel Good Software Delivery</title>
        <style>
            html, body {
                color: #B8AA8E;
                font-family: 'Cousine', 'Raleway' sans-serif;
                font-display:fallback;
                font-size:1.4333rem;
                font-weight: 300;
                margin: 0;
                background: #99ccfa;
                height:100vh;
            }
            p {
                margin: .1em 0;
            }
            .flex-center {
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(rgb(255,250,240),rgb(255,250,240));
            }

            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
                font-size: 1.2rem;
                top:20px;
                width:100%;
            }

            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .footer {
                font-size: 1em;
                padding: .5rem 0;
            }

            .copyright {
                font-family:"Lobster", sans-serif
            }

            .footer-links {
                padding: .5em;
            }

            .footer-links > a {
                color: #636b6f;
                padding: 0 1em;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                line-height:1.8rem;
            }

            .top-wrapper { margin: 1em auto; }

            .form-group { padding-top:.4em; }

            .email-capture {
                background:rgb(0,0,0);
                padding : 1rem;
                color:#f9f9c0;
                clear:both;
            }
            .email-capture a{
                color:#f9f9c0;
                text-decoration: none;
            }
            .i-can-help {
                color: #F5F5F5;
                font-family:"Lobster", sans-serif;
                font-size:2em;
                padding:1em;
            }

            .input {
                width: 304px;
                border-radius: 0.5em;
                line-height: 1.5rem;
                padding:.5em;
                font-size: 16px;
            }

            .success, .errors {
                margin:0 auto;
                width: 304px;
                padding:.2rem 0;
                border-radius:0.5rem;
            }

            .errors{
                background: #f9f9c0;
                border: 1px solid #ffff00;
                font-size:1.0rem;
                font-weight:600;
            }

            .message-list-item { text-align: left; list-style-type: none;}

            .success {background: #acf99f; border: 1px solid #2e5d2e; }

            .btn-big {
                width: 320px;
                border-color: #99ccfa;
                background-color: #f9f9f9;
                color: rgba(48, 54, 55, 0.8);
                transition: all .2s;
                -webkit-transition: all .2s;
                transition-timing-function: linear;
                font-weight:600;
                text-transform: uppercase;
                font-size:1.2rem;
                letter-spacing:.5rem;
                padding:0;
            }
            .btn-big:hover, .btn-big:focus {
                border-color: #66c5ff;
                background-color: #f0f0f0;
                color: rgba(48, 54, 55, 0.9);
                transition: all .25s;
                -webkit-transition: all .2s;
                transition-timing-function: linear;
            }

            .g-recaptcha {display: inline-block;}

            .square {
                float:left;
                position: relative;
                width: 30%;
                padding-bottom : 30%; /* = width for a 1:1 aspect ratio */
                margin:1.66%;
                background-color:transparent;
                border-radius: 1em;
                overflow:hidden;
                color: #B8AA8E;

            }

            .square-content {
                position:absolute;
                height:90%; /* = 100% - 2*5% padding */
                width:90%; /* = 100% - 2*5% padding */
                padding: 5%;
                font-weight:300;
                transition: all .2s;
                -webkit-transition: all .2s;
            }

            .square-content:hover, .square-content:focus {
                font-size:1.15rem;
                transition: all .2s;
                -webkit-transition: all .2s;
                transition-timing-function: ease-in-out;

            }

            .make .square-content,
            .deliver .square-content,
            .learn .square-content,
            .change .square-content,
            .help .square-content {
                color: #ffffff;
                font-family:"Raleway", sans-serif;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 1.2rem;
                transition: all .2s;
                -webkit-transition: all .2s;
                transition-timing-function: linear;
            }
            .make .square-content:hover,
            .deliver .square-content:hover,
            .learn .square-content:hover,
            .change .square-content:hover,
            .help .square-content:hover,
            .make .square-content:focus,
            .deliver .square-content:focus,
            .learn .square-content:focus,
            .change .square-content:focus,
            .help .square-content:focus {
                color: #99ccfa;
                transition: all .2s;
                -webkit-transition: all .2s;
                transition-timing-function: linear;
            }

            .table{
                display:table;
                width:100%;
                height:100%;
            }
            .table-cell{
                display:table-cell;
                vertical-align:middle;
            }
            /*  For list */
            ul{
                text-align:left;
                padding:0;
                list-style-position:inside;
            }
            li{
                margin: 0 0 0 5%;
                padding:0;
            }

            /*  For responsive images as background */
            .bg {
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover;
                cursor: pointer;

            }

            /*  For responsive content images */
            /*.square-content .rs {*/
                /*width:auto;*/
                /*height:auto;*/
                /*max-height:90%;*/
                /*max-width:100%;*/
            /*}*/

            .make {
                background-image: url('/images/make.jpg');
            }
            .deliver {
                background-image: url('/images/deliver.jpg');
            }
            .help {
                background-image: url('/images/help.jpg');

            }
            .learn {
                background-image: url('/images/learn.jpg');
            }
            .change {
                background-image: url('/images/change.jpg');
            }

            .offerings {
                color: #fff;
                text-align:center;
            }
            /* Modal */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 50px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background:rgba(4,4,4, 0.95);
            }

            /* Modal Content */
            .modal-content {
                color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #666;
                border-radius: .5em;
                width: 88%;
                background-color:black;
                background-position:top center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #makeModal .modal-content {
                background-image: url('/images/make.jpg');
                background-position:top left;
            }
            #deliverModal .modal-content {
                background-position:center center;
                background-image: url('/images/deliver.jpg');
            }
            #helpModal .modal-content  {
                background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/images/help.jpg');
                background-position:bottom center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #learnModal .modal-content {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/learn.jpg');
                background-position:top center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #changeModal .modal-content {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/change.jpg');
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            .modal-content li{
                list-style-type: square;
                margin: 1em auto;
                text-align:justify;
            }
            /* Modal Close Button */
            .close {
                color: #cfcfcf;
                float: right;
                font-size: 32px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #fefefe;
                text-decoration: none;
                cursor: pointer;
            }
            .small {
                font-size:0.7em;
                font-family: "Raleway", sans-serif;
            }
            .copyright
            {
                float:left;
                padding:0 0 1em 1em;
            }

            .skills
            {
                margin:2em;
                display:inline-flexbox;
            }

            .skill
            {
                margin:1em;

                position:relative;
                display:inline-flex;
            }
            .skill img
            {
                min-width:60px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <div class="top-wrapper">
                    @if ($errors->count() >= 1)
                        <div class="errors">
                            <ul>
                                <li style="font-weight:600; color: black;" class="message-list-item">Scroll down&hellip;something is borked.</li>
                            </ul>
                        </div>
                    @elseif (session('success'))
                        <div class="success">
                            <ul>
                                <li style="font-weight:600; color: black;" class="message-list-item">
                                    {{ session('success') }}
                                </li>
                            </ul>
                        </div>
                    @else
                        <img src="images/copacetic-face-buff.png" />
                    @endif
                </div>
                <div class="offerings">
                    <!-- 1st row of service offerings grid -->
                    <div class="square bg make" id="make">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Make</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal" id="makeModal">
                        <div class="modal-content">
                            <span class="close" id="makeClose">&times;</span>
                            <div class="developmentServices">
                                <h2>Development</h2>
                                <ul>
                                    <li>Web systems generalist</li>
                                    <li>Fast is good. Small is fast. Small is good. </li>
                                    <li>Sufficiency-driven engineering</li>
                                    <li>Feature teams are the best</li>
                                    <li>Compliance and auditing experience</li>
                                    <li>GDPR, Privacy, i18n and a11y</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell">
                                    <p>There is no cake</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="square bg deliver" id="deliver">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                   <p>Deliver</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="deliverModal">
                        <div class="modal-content">
                            <span class="close" id="deliverClose">&times;</span>
                            <div class="operationsServices">
                                <h2>Operations</h2>
                                <ul>
                                    <li>Version Control Systems</li>
                                    <li>Developer Support Tooling</li>
                                    <li>Cloud Native Infrastructure</li>
                                    <li>Value Stream Mapping</li>
                                    <li>Constraint Mitigation</li>
                                    <li>Continuous Integration and Delivery</li>
                                    <li>Integrated Security Practices</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell">
                                    <p>Software that feels snuggly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="square bg help" id="help">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Help</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="helpModal">
                        <div class="modal-content">
                            <span class="close" id="helpClose">&times;</span>
                            <div class="continuityServices">
                                <h2>Service Continuity</h2>
                                <ul>
                                    <li>Outages happen; Practice recovery regularly</li>
                                    <li>Take a pragmatic approach to service delivery management</li>
                                    <li>Foster organizational security culture and training</li>
                                    <li>Learn from mistakes without blame or shame</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Security, quality <em>and</em> velocity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="square bg learn" id="learn">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                   <p>Learn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="learnModal">
                            <div class="modal-content">
                                <span class="close" id="learnClose">&times;</span>
                                <div class="reportingServices">
                                    <h2>Reporting</h2>
                                    <ul>
                                        <li>Monitoring and logging are essential</li>
                                        <li>Maistakes, failures and the unknown can be less costly.</li>
                                        <li>Act on feedback early and often</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Do it again</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="square bg change" id="change">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Change</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="changeModal">
                        <div class="modal-content">
                            <span class="close" id="changeClose">&times;</span>
                            <div class="disruptionServices">
                                <h2>Disruption as a Service</h2>
                                <ul>
                                    <li>Sometimes you have to cut bait</li>
                                    <li>You may feel a pinch</li>
                                    <li>Bullshit detector set to <em>gnat's ass</em></li>
                                    <li>I'm here to help</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills">
                    <div class="skill"><img src="/images/tech/javascript_1.svg" alt="JavaScript"></div>
                    <div class="skill"><img src="/images/tech/mysql.svg" alt="MySQL"></div>
                    <div class="skill"><img src="/images/tech/php.svg" alt="PHP"></div>
                    <div class="skill"><img src="/images/tech/ruby.svg" alt="Ruby"></div>
                    <div class="skill"><img src="/images/tech/aws.svg" alt="AWS"></div>
                    <div class="skill"><img src="/images/tech/redis.svg" alt="Redis"></div>
                    <div class="skill"><img src="/images/tech/laravel.svg" alt="Laravel"></div>
                </div>
                <div class="email-capture">
                    <div class="i-can-help">Jeremy Jacob Anderson</div>
                    <div><h3 style="color:white;">is measurably helpful<h3></div>
                <div class="skills">
                    <div class="skill"><a href="https://linkedin.com/jeremyjanderson">LinkedIn</a></div>
                    <div class="skill"><a href="https://stackoverflow.com/users/1031892/jeremy-anderson?tab=profile">Stack Overflow</a></div>
                    <div class="skill"><a href="https://github.com/defenestrator">Github</a></div>
                    <div class="skill"><a href="https://stackoverflow.com/cv/jeremy-anderson">C.V.</a></div>
                </div>
                    @if ($errors->count() >= 1)
                        <div class="errors">
                            @foreach($errors->all() as $error)
                                <ul>
                                    <li class="message-list-item">{{ $error }}</li>
                                </ul>
                            @endforeach
                        </div>
                    @else
                    @endif
                    <form method="POST" action="{{ route('contact-form') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="email"
                                   class="input email address"
                                   type="text"
                                   placeholder="your email"
                                   value="{{ old('email') }}"
                                   required
                            >
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="message" class="input email message" rows="8" required>{{ old('message') }}</textarea>
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-big">HELLO</button>
                        </div>

                    </form>
                </div>
                <hr>
                <div class="footer">
                    <div class="links">
                        @if (Route::has('login'))
                            <div class="footer-links">
                                @auth
                                <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>
                        @endif

                    </div>
                    <div class="copyright">
                        <p>&copy; Defenestrator Media </p>
                        <p class="small">{{ \Carbon\Carbon::now('America/Denver') }}</p>
                    </div>

                </div>
            </div>
        </div>
    <script>

        link=document.createElement('link');
        link.href='https://fonts.googleapis.com/css?family=Lobster|Cousine:300,600';
        link.rel='stylesheet';
        document.getElementsByTagName('head')[0].appendChild(link);

        const offerings = ["make", "deliver", "help", "learn", "change"];

        let toggleVisibility = function (targetName) {
            const target = document.getElementById(targetName);
            target.style.display = target.style.display == "block" ? "none" : "block";
        }

        let modalBuilder = function() {
            offerings.forEach( function(offering) {
                const listener = document.getElementById(offering).getAttribute("id")
                const modal = listener + "Modal";
                const close = listener + "Close";

                document.getElementById(listener).addEventListener("click", function () {
                        toggleVisibility(modal);
                });

                document.getElementById(modal).addEventListener("click", function () {
                    if (document.getElementById(event.target.id) == close) {
                        return toggleVisibility(modal);
                    }
                    else if (document.getElementById(event.target.id) == null) {
                        return;
                    }
                    toggleVisibility(modal);
                });
            });
        }
        window.onload = modalBuilder();
    </script>
    </body>
</html>
