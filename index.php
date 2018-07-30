<!doctype html>
<html lang="zh-cn">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />

</head>
  <body>
    <!-- 页面内容区域 -->
  <div class="container">
      <div class="header">
            <table>
                    <tr>
                        <td class="logo"></td>
                        <td class="title">Track事务管理系统</td>
                    </tr>
                </table>
      </div> 


 <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">主页</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">日常交接</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="dailyinform.php">工作交接</a>
        <a class="dropdown-item" href="personalinform.php">个人交接</a>
      </div>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">设备履历</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="alarmlist.php">Alarm</a>
        <a class="dropdown-item" href="glassbroken.php">Glass Broken</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">PM&备件</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="pmmanager.php">PM管理</a>
        <a class="dropdown-item" href="partsmanager.php">备件管理</a>
      </div>
    </li>
    <li class="search-box">
       <form class="form-search search-box">
				<input class="input-medium search-query" type="text" /><button class="btn" type="submit">查找</button>
			 </form> 
    </li>
  </ul>

  <table class="table table-bordered content-table">
				<thead class="thead-light">
					<tr>
						<th>
							编号
						</th>
						<th>
							产品
						</th>
						<th>
							交付时间
						</th>
						<th>
							状态
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="success">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="error">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="info">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
</div>





      <div class="footer" id="footer">Copyright & Copy 2018 BOE All Rights Reserved.</div>
    

  </div>

    <!-- /页面内容区域 -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <!-- 将下面这段代码放置在 </body> 之前 -->
    <script>
        var navigation = responsiveNav("#nav");
    </script>
  </body>
</html>
