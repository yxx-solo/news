<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理后台</title>
    <!-- 引入Semantic-ui -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="../static/css/main.css">

    <script>
      function doDel(id){
        if(confirm("确定删除")){
          window.location='action.php?id='+id;
        }
      }
    </script>

    
</head>
<body>

    <!-- 导航 -->
    <nav class="ui inverted attached segment main-mini m-shadow-small">
      <div class="ui container">
        <div class="ui inverted secondary stackable menu">
          <h2 class="ui blue header item">管理后台</h2>
          <a href="#" class="m-item item m-mobile-hide"><i class="home icon"></i>博客</a>
          <a href="#" class="m-item item m-mobile-hide"><i class="idea icon"></i>分类</a>
          <a href="#" class="m-item item m-mobile-hide"><i class="tags icon"></i>标签</a>
          <a href="#" class="m-item item m-mobile-hide"><i class="info icon"></i>关于</a>
          <div class="right menu m-item">
            <div class="ui dropdown item">
              <div class="text">
                <img src="../static/img/5a4a272dd42a283428c0f8cf5ab5c9ea14cebfa7.gif" alt="" class="ui avatar image">
                嘿黑酱
              </div>
              <i class="dropdown icon"></i>
              <div class="menu">
                <a href="#" class="item">注销</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 手机按钮开关 -->
      <a href="" class="ui black icon button m-top-right m-mobile-show menu toggle">
        <i class="bars icon"></i>
      </a>

    </nav>
    <!-- 二级导航 -->
    <div class="ui attached pointing menu">
      <div class="ui container">
        <div class="right menu">
          <a href="#" class="item">发布</a>
          <a href="#" class="blue active item">列表</a>
        </div>
        
      </div>
      
    </div>
  <!-- 中间部分 -->
  
    <div class=" m-padded-tb-big ">
        <div class="ui container">
          <form action="" class="ui segment form" >
            <div class="inline fields ">
              <div class="field">
                <input type="text" class="" name="title" placeholder="标题">
              </div>
              <div class="field">
                <div class="ui selection dropdown">
                  <input type="hidden" name="type" >
                  <i class="dropdown icon"></i>
                  <div class="default text">类型</div>
                  <div class="menu">
                    <div class="item" data-value="1">游戏攻略</div>
                    <div class="item" data-value="2">高清壁纸</div>
                    <div class="item" data-value="3">BUG反馈</div>
                  </div>
                </div>
              </div>
              <div class="field">
                <div class="ui checkbox">
                  <input type="checkbox" name="recommend" id="recommend">
                  <label for="recommend">推荐</label>
                </div>
              </div>
              <div class="field">
                <button class="ui mini blue basic button "><i class="search icon"></i>搜索</button>
              </div>
              
              <a href="H_register.html" class="ui mini green basic  button"><i class="plus  large icon"></i>新增</a>
              
            </div>
            
          </form>
        <form action="action.php?action=del" >
          <table class="ui table">
            <thead>
              <tr>
                <th></th>
                <th>标题</th>
                <th>类型</th>
                <th>推荐</th>
                <th>更新时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>关于Dota2_蚂蚁_连击对守卫没有效果</td>
                <td>BUG反馈</td>
                <td>是</td>
                <td>2020-6-28 9:45</td>
                <td >
                  <a href="" class="ui mini blue basic button "><i class="sign in alternate large icon "></i></a>
                  <a href="" class="ui mini red basic button"><i class="close large icon"></i></a>
                </td>
              </tr>

              <?php
        try{
          $pdo = new PDO("mysql:host=localhost;dbname=test;","root","123456");
        }catch(PDOExecption $e){
          die("数据库连接失败".$e->getMessage());
        }
        $sql = "select * from register";
        foreach($pdo->query($sql) as $row){
          echo"<tr>";
          echo"<td>{$row['id']}</td>";
          echo"<td>{$row['username']}</td>";
          echo"<td>{$row['password']}</td>";
          echo"<td>{$row['email']}</td>";
          echo"<td></td>";
          echo"<td><a href='javascript:doDel({$row['id']})' class='ui mini red basic button'><i class='close large icon'></i></a></td>";
          echo"</tr>";
          

        }

        
        //创建一个结果集
        
        // 删除完跳转到新闻页
        
      
      ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="6">
                  <div class="ui pagination menu">
                    <a href="#" class="icon item">
                      <i class="left chevron icon"></i>
                    </a>
                    <a href="#" class="item">1</a>
                    <a href="#" class="item">2</a>
                    
                    <a href="#" class="item">...</a>
                    <a href="" class="icon item">
                      <i class="right chevron icon"></i>
                    </a>
                  </div>
                </th>
              </tr>
            </tfoot>
          </table>
        </form>
        </div>
    </div>
            
            
            

<br>
    <!-- 底部 -->
 <footer class="ui inverted segment vertical m-massive">
    <div class="ui center aligned container">
        <div class="ui inverted divided stackable grid">
          <div class="three wide column">
            <div class="ui inverted link item">
              <div class="item">
                <img src="../static/img/5a4a272dd42a283428c0f8cf5ab5c9ea14cebfa7.gif" class="ui rounded image" alt="" style="width: 80px;">
              </div>
            </div>
          </div>

          <div class="three wide column m-all-textcss">
              <h4 class="ui inverted header ">最新博客</h4>
              <div class="ui inverted link list">
                <a href="#" class="item">用户故事(User Story)</a>
                <a href="#" class="item">用户故事(User Story)</a>
                <a href="#" class="item">用户故事(User Story)</a>
              </div>
          </div>

          <div class="three wide column m-all-textcss">
            <h4 class="ui inverted header">最新博客</h4>
              <div class="ui inverted link list">
                <a href="#" class="item">用户故事(User Story)</a>
                <a href="#" class="item">用户故事(User Story)</a>
                <a href="#" class="item">用户故事(User Story)</a>
              </div>
          </div>
          <div class="seven wide column m-all-textcss">
            <h4 class="ui inverted header ">最新博客</h4>
            <p>这是我第一次做！！！</p>
          </div>
        </div>
        <div class="ui inverted section divider">
          <p class="m-p-text-thin m-text-spaced m-text-lined m-opacity">GY搬运站 最终版权归原网站所有。 本网站在翻译过程中若有任何侵权行为，请联系xxxxxxxxxx@qq.com，我们定将及时处理。</p>
        </div>
    </div>
      
 </footer>
    
</body>

<!-- 引入jquery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
<!-- 引入Semantic-ui -->
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>



<script>
  //赞助支付微信信息
  $('#payButton').popup({
     popup : $('.payQR.popup'),
       on : 'click',
     position : 'bottom center'
  });


  $('.ui.dropdown').dropdown({
    
  });


</script>




</html>