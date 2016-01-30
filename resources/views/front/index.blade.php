<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>記事一覧 | Tanakalab</title>
    <link rel="stylesheet" href="{{ elixir("css/vendor.css") }}">
    <link rel="stylesheet" href="{{ elixir("css/common.css") }}">
    <link rel="stylesheet" href="{{ elixir("css/pc.css") }}">
    <link rel="stylesheet" href="{{ elixir("css/sp.css") }}">
    <script src="{{ elixir("js/vendor.js") }}"></script>
    <script src="{{ elixir("js/app.js") }}"></script>
    <script>
      redirectIfNotLogin();
    </script>
  </head>
  <body>

  <header id="header">
    <!-- <div id="search"> -->
    <i class="fa fa-search"></i>
    <input type="text" id="search-text-box" name="search_query" value="" placeholder="Search">
    <!-- </div> -->
  </header>

  <div id="nav">
    <ul id="nav-ul">
      <li>
        <a href="#">
          <i class="fa fa-pencil fa-2x"></i>
          <!-- <span>NEW</span> -->
        </a>
      </li>
      <li class="current">
        <a href="#">
          <i class="fa fa-home fa-2x"></i>
          <!-- <span>HOME</span> -->
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-tag fa-2x"></i>
          <!-- <span>TAGS</span> -->
        </a>
      </li>
    </ul>
  </div>

  <div id="content">
    <h3 id="content-title">
      <i class="fa fa-file-text-o"></i>
      Articles
    </h3>

    <div id="article-filter">
      <ul>
        <li><a href="#">All <span>10</span></a></li>
        <li><a href="#"><i class="fa fa-thumb-tack"></i> Clips <span>5</span></a></li>
        <li><a href="#"><i class="fa fa-user"></i> You <span>3</span></a></li>
      </ul>
    </div>

    <div id="article-list">
      <ul>
      </ul>
    </div>

  </div>



  <script>
    $(function() {
      Article.all().then(function(data) {
        var articles = data.response;
        var articleList = ArticleView.renderList(articles);
        $('#article-list').append(articleList);
      })
    })
  </script>
</body>
</html>