<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Question 1</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
            src="https://cdn.rtlcss.com/semantic-ui/2.4.1/semantic.min.js"
            integrity="sha384-6urqf2sgCGDfIXcoxTUOVIoQV+jFr/Zuc4O2wCRS6Rnd8w0OJ17C4Oo3PuXu8ZtF"
            crossorigin="anonymous"></script>
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link
            rel="stylesheet"
            href="https://cdn.rtlcss.com/semantic-ui/2.4.1/semantic.rtl.min.css"
            integrity="sha384-yXUIpeQfH3cuk6u6Mwu8uyJXB2R3UOLvcha1343UCMA2TA7lQ14BFmrudI6LAP8A"
            crossorigin="anonymous">
    <link
            rel="stylesheet"
            href="/css/app.css">

    <style type="text/css">
        body {
            background-image: linear-gradient(45deg, #ee2e3b, #ffd300);
            background-attachment: fixed;
            /*background-image: linear-gradient(45deg, #ffb953, #f226e1);*/
            /*background-image: linear-gradient(45deg, #76b3e4, #b76c7a);*/
            /*background-image: linear-gradient(45deg, #ffe88e, #e49ca8);*/
            /*background-image: linear-gradient(45deg, #abff00, #0099e2);*/
        }

        body > .grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
</head>
<body class="iransans">
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content iransans" style="color: white;">
                ارسال فایل برای داوری
            </div>
        </h2>
        <form class="ui large form" id="form" action="/judgment" method="post">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="username" placeholder="نام کاربری">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input class="iransans" type="password" name="password" placeholder="کلمه عبور">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="team_code" placeholder="کد تیم">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="team_name" placeholder="نام تیم">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="question_code" placeholder="کد سوال">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <select name="challenge_code" class="ui dropdown">
                            <option class="iransans" value="Java">Java</option>
                            <option class="iransans" value=".net">Net</option>
                            <option class="iransans" value="Php">PHP</option>
                            <option class="iransans" value="Python">Python</option>
                            <option class="iransans" value="Image">Image</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <input type="file" name="file" class="inputfile" id="embedpollfileinput" style="display: none;"/>
                    <label for="embedpollfileinput" class="ui fluid right orange button iransans" style="color: white;">
                        پرونده
                    </label>
                </div>

                <div class="ui fluid large orange submit button iransans" style="margin: 0"
                     onclick="document.getElementById('form').submit();">ارسال
                </div>
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            ICT Challenge, 2019
        </div>
    </div>
</div>


<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content iransans" style="color: white;">
                دریافت امتیازات
            </div>
        </h2>
        <form class="ui large form" id="form" action="/score" method="post">
            <div class="ui stacked segment">
                <div class="field required">
                    <label style="text-align: right">نام کاربری</label>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="username" placeholder="نام کاربری">
                    </div>
                </div>
                <div class="field required">
                    <label style="text-align: right">کلمه عبور</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input class="iransans" type="password" name="password" placeholder="کلمه عبور">
                    </div>
                </div>
                <div class="field">
                    <label style="text-align: right">کد تیم</label>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input class="iransans" type="text" name="team_code" placeholder="کد تیم">
                    </div>
                </div>
                <div class="field">
                    <label style="text-align: right">کد چالش</label>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <select name="challenge_code" class="ui dropdown">
                            <option class="iransans" value="Java">Java</option>
                            <option class="iransans" value=".net">Net</option>
                            <option class="iransans" value="Php">PHP</option>
                            <option class="iransans" value="Python">Python</option>
                            <option class="iransans" value="Image">Image</option>
                        </select>
                    </div>
                </div>
                <div class="ui fluid large orange submit button iransans" style="margin: 0"
                     onclick="document.getElementById('form').submit();">ارسال
                </div>
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            ICT Challenge, 2019
        </div>
    </div>
</div>


</body>
</html>
