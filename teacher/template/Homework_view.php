<html>
<head>
    <title>檢視作業 - <% schoolname %> </title>
    <link rel="stylesheet" href="../stylesheets/style.css">
    <script src="../javascripts/jquery.min.js"></script>
    <script src="../javascripts/ajax_load.js"></script>
    <script src="../javascripts/basic.js"></script>
</head>
<body>
    <header class="head">
        <div class="folder">
            <i class="fa fa-bars"></i>
        </div>
        <h1 class="logo">
            <span class="logo-school"><% schoolname %></span>
        </h1>
        <div class="user">
            <div class="user-title">
                <% username %>
            </div>
            <div class="user-link">
                <a href="logout.php" class="link">Logout</a>
            </div>
        </div>
    </header>
    <div class="container">
        <% nav | homework %>
        <section class="content">
            <h1 class="title">作業</h1>
            <div class="breadcrumb">
                    <i class="fa fa-home"></i> <i class="fa fa-angle-right"></i> Homework
            </div>
            <div class="box">
                <p>作業名稱：<% name %></p>
                <p>開始允許繳交時間：<% start_date %></p>
                <p>最後允許繳交時間：<% end_date %></p>
                <p>簡介：<% description %></p>
                <p>繳交人數：<% num %></p>
                <a href="modify_homework.php?id=<% id %>"><button>修改作業</button></a>
                <% data %>
            </div>
        </section>    
    </div>
</body>
</html>  