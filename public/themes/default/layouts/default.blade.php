<!DOCTYPE html>
<html>
<head>
    <title>{!! Theme::get('title') !!}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{!! Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>
<style>
    html,body,.container-content{height: 100%; width: 100%;padding: 0;margin: 0}
    .side-bar,.body-content{height: inherit;}
    .side-bar{
        width: 15%;
        -webkit-box-shadow: 1px 0 5px 0 #DEDEDE;
        box-shadow: 1px 0 5px 0 #DEDEDE;
        display: block;
        position: fixed;
    }
    .body-content{width: 85%;float: right}
    .user-data{text-align: center;padding-top: 50px}
    .user-data img{
        height: 70px;
        width: 70px;
        border-radius: 50%;
    }
    .user-data .user-name {
        padding: 10px 0px;

    }

    .report-container ul{
        padding: 0;
        margin: 0;
    }
    .report-container ul li{
       list-style-type: none;
        padding: 5px 0px 5px 30px;
        background: #f7f7f7;
    }
    .report-container ul li p{
        display: inline-block;
        margin-bottom: 0px;
        font-size: 11px;
        color: #919191;

    }
    .report-container ul li span{
        float: right;
        padding-right: 30px;
        color: #ef575c;
    }

    .side-bar-nav ul{
        margin: 0;
        padding: 20px 0px;

    }

    .side-bar-nav ul li{
        list-style-type: none;
        padding: 10px 0px;
        text-align: center;
        cursor: pointer;
    }

    .side-bar-nav ul li img{
        height: 40px;
        width: 40px;
    }

    .side-bar-nav ul li p{
        margin: 0;
        font-size: 11px;
        color: #ef575c;
        padding-top: 5px;
    }

    .side-bar-nav ul li:hover{
        border-right: 5px solid  #ef575c;
    }

    .logo{
        height: 100%;
        text-align: center;

    }

    .body-content .header{height: 10%}
    .body-content .header div{
        display: inline-block;
    }

    .body-content .header .notification-settings{
        float: right;
        margin-right: 18px;
        padding-top: 20px;
        color: #919191;
    }
    .body-content .header .notification-settings .fa-bell{
        font-size: 1.777777em;
    }

    .body-content .header .notification-settings .badge{
        position: absolute;
        top: 13px;
        right: 30px;
        background-color:#ef575c;
        color: white;

    }
    .fa.fa-ellipsis-v{
        padding-left: 10px;
    }

    .container-fluid{
        height: 90%;
    }


</style>
<body>
<div class="container-content">
    <div class="side-bar">
        <div class="user-data">
            <img class="img-circle" src="../assets/img/ayus1.png">
            <div class="user-name">
                Jeremy John Doe Sr.
            </div>
        </div>

        <div class="report-container">
            <ul>
                <li>
                    <p>Clients</p>
                    <span>36</span>
                </li>
                <li>
                    <p>Appointments</p>
                    <span>12</span>
                </li>
            </ul>
        </div>
        <div class="side-bar-nav">
            <ul>
                <li>
                    <img src="">
                    <p>Dashboard</p>
                </li>
                <li>
                    <img src="">
                    <p>Calendar</p>
                </li>
                <li>
                    <img src="">
                    <p>Calendar</p>
                </li>
            </ul>
        </div>
        <div class="logo">
            <img src="../../../assets/img/svg/Calendar_orange.svg" alt=""/>
        </div>
    </div>
    <div class="body-content">
        <div class="header">
            <div class="notification-settings">
                <i class="fa fa-bell fa-lg"></i>
                <span class="badge badge-notify">3</span>
                <i class=" fa fa-ellipsis-v fa-lg"></i>
            </div>
        </div>
        <div class="container-fluid">
            {!! Theme::content() !!}
        </div>

    </div>

</div>
</body>
</html>
