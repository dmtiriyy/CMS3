<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
            body {
                flex-direction: column;
                display: flex;
                font-family: 'Nunito';
                margin: 0;
                padding: 0;
                letter-spacing: 1px;
                justify-content: space-between;
                min-height: 100vh;
                background-color:#FAEBD7;
                color:#5F9EA0;
            }
            a {
                text-decoration: none;
                color:#5F9EA0;
                font-weight:500;
            }
            .footer {
                width: 100%;
                height:100px;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                color:blue;
                background-color:#fadad7;
                margin-top:40px;
            }
            .title {
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                width:100%;
            }
            .main-content {
                width:100%;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
            }
            .text {
                padding:0 16px;
                border-left: 6px solid #7B8898;
                color: #7B8898;
                font-size: 1.1875em;
                font-weight: 400;
                font-style: normal;
                font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
                line-height: 1.5;
                animation: fadeInLorem 1000ms linear
            }
            .sidebar {
                width: 300%;
                
            }
            .sidebar ul {
                color: #7B8898;
                font-size: 1.1875em;
                font-weight: 400;
                font-style: normal;
                font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
                line-height: 1.5;
                list-style-type:none;
                animation: fadeInLorem 1000ms linear;
                margin: 100px 0 0 25px;
                padding: 0;
                margin-right: 16px;

            }
            ul li {
                margin-bottom:12px;
                border-bottom: 2px solid black;
            }

            .content {
                display:flex;

            }

            
        </style>
    </head>
    <body>
       
       <div style="height: 60px;width: 100%;display: flex;justify-content: center;align-items: center;align-content:center;margin-bottom:20px;border-bottom: 1px solid #d4d2d2;text-align:center;">
            <span>Династии</span>
       </div>

       <div class="content">
            <div class="sidebar"> 
                <ul style='margin-top: 100px;'>
                <li>СОДЕРЖАНИЕ</li>
                <li><a href="{{url($page->url)}}?sort=createdDate">по дате</a></li>
                <li><a href="{{url($page->url)}}?sort=orderNum">по порядку</a></li>
                @foreach($children as $child)
                @if($child->url !='default')<li><a href="{{url($child->url)}}">{{$child->caption}}</a></li>@endif
                @endforeach
                </ul>
            </div>
            <div style="margin-right: 140px;">
                <h1 class="title">{{$page->caption}}</h1>
                <div class="main-content text">
                    <?php echo($page->content) ?>
                </div>
            </div>    
       </div>

        <div class="footer">
                Прочее
        </div>
    </body>
</html>
