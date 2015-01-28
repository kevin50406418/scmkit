<html>
    <head>
    <title>課表 - <% schoolname %> </title>
    <% header %>
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
        <% nav | curriculum %>
        <section class="content">
            <h1 class="title">課表</h1>
            <div class="breadcrumb">
                    <i class="fa fa-home"></i> <i class="fa fa-angle-right"></i> Curriculum
            </div>
            <form action="../modify/?id=<% id %>" method="post">
            <% data %>
            <input type="submit" value="送出" />
            </form>
        </section>    
    </div>
</body>
</html>