<!DOCTYPE html>
<!-- saved from url=(0031)http://buy-ac.kl.com.ua/<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Правила - Магазин аккаунтов и купонов</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="description" content="Описание для поисковика">
    <meta name="keywords" content="Купон Bosslike ad-social Turboliker Vtope Instagram Аккаунты ВК like4u ad-social Одноклассники">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width" /> -->
	
	<link rel="stylesheet" media="all" href="./Rules_files/style.css">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="http://buy-ac.kl.com.ua/">
	<link rel="shortcut icon" href=" " type="image/x-icon">
	<style>
	body{
		background: url(ec07a6169b1940c4a9fa000cc299437e.png) repeat center top;
	}
	}
	</style>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="./Rules_files/jquery.min.js.Без названия"></script>
    <link rel="stylesheet" href="./Rules_files/jquery-ui.css">
    <script src="./Rules_files/jquery-ui.min.js.Без названия"></script>
    <script src="./Rules_files/shop.new.js.Без названия"></script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip({html: true});
        });
        var shop_currency = 'rub';
    </script>
<style type="text/css">

		body {
			background: url('http://im-h.ru/uploads/2020/12/i944116brvsom.jpg');
			background-attachment:fixed;
		}
	</style></head>
    

<body class="b-shop">

    <h1 hidden="">Описание для поисковика</h1>

    <div id="overlay"></div>

	<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

	 <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
																		<li><a href="http://buy-ac.kl.com.ua/">Главная</a></li>
																							<li><a href="igrovie.php">Игровые аккаунты</a></li>
																								<li><a href="Rules.php">Правила</a></li>
									<li class="dropdown nav-item">
                    <a href="http://buy-ac.kl.com.ua/" class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img class="countryflag" style="width: 30px;" src="./Rules_files/RU.png"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" style="margin-left: 12px;" href="http://buy-ac.kl.com.ua/" title="Русский"><img class="countryflag" style="width: 30px;" src="./Rules_files/RU.png" alt="Русский"> Русский</a><br><br>
                        <a class="dropdown-item" style="margin-left: 12px;" http://buy-ac.kl.com.ua/" alt="English"><img class="countryflag" style="width: 30px;" src="./Rules_files/EN.png" alt="English"> English</a>
                    </div>	
                </li>
			</ul>
	
            <ul class="nav navbar-nav navbar-right col-md-3 col-xs-3 col-lg-2">
                <li>
                        
                </li>
            </ul>
        </div>
        </div>

</nav>		<div class="container">

	<style>
	.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
    z-index: 2;
    background-color: ;
    border-color: ;
}
</style>
<style>
table.shop_goods tr.separator {
    background: ;
}
</style>
<style>
table.shop_goods tr {
    background-color: ;
}
</style>
<style>
.buy_game {
    background-color: ;
}
</style>
<style>
.checkpaybtn {
    background-color: ;
}
</style>
<style>
.btn-success {
    color: #fff;
    background-color: ;
    border-color: ;
}
</style>
<style>
.navbar {
    background: ;
    color: #ccc;
    border-color: ;
}
</style>		
        <link rel="stylesheet" href="./Rules_files/lt.css">
        
	
<script src="./Rules_files/socket.js.Без названия"></script>

<online tag="" hidden="" ip="176.99.102.68" hash="f3df358e4b142f06ccf355123af9655d" ssid="110302" id="online_widget_data"></online>

<script>
	socket = {};

	function num2str(n, text_forms) {
	    n = Math.abs(n) % 100;
	    var n1 = n % 10;
	    if (n > 10 && n < 20) {
	        return text_forms[2]
	    } else if (n1 > 1 && n1 < 5) {
	        return text_forms[1]
	    } else if (n1 == 1) {
	        return text_forms[0]
	    } else {
	        return text_forms[2]
	    }
	}

	document.addEventListener("DOMContentLoaded", function(event) { 
		
		if (typeof(online_widget_count) !== 'undefined') {

			if (online_widget_count.innerText == '') online_widget_count.innerText = 0;

			online_offset = parseInt(online_widget_count.innerText);

		    setTimeout(() => {
		        socket = io.connect(':10', {
		            rejectUnauthorized: !1,
		            reconnect: !0,
		            secure: !0,
		            query: {
		                ip: online_widget_data.attributes['ip'].nodeValue,
		                hash: online_widget_data.attributes['hash'].nodeValue,
		                ssid: online_widget_data.attributes['ssid'].nodeValue,
		            }
		        });
		        socket.on('online', function(data) {
		            online_widget_count.innerText = data.online + online_offset;
		            if (typeof(online_widget_count_str) !== 'undefined' && online_widget_count_str.innerHTML.length) online_widget_count_str.innerText = num2str(parseInt(data.online + online_offset), ['клиент', 'клиента', 'клиентов'])
		        })
		    }, 220);

		} else console.log('!log')

	});
</script>
	<div class="row row-block row-block-footer">
		<div class="col-md-12">
		<h1>Правила</h1>
			<p style="text-align:center;"><span style="color:rgb(255,255,1);">
				</span></p><p>Покупая товар в магазине. Вы соглашаетесь на следующие правила:</p>

<p>1. Принятый товар, возврату не подлежит<br>
2. Проверка качества товара в течении 10 минут после покупки<br>
3. С нашей стороны мы гарантируем продажу товара в одни руки<br>
4. Незнание правил не освобождает от ответственности</p>
<p></p>
		</div>
	</div>
	</div>
	
	
			<footer id="footer">
	        <div class="container">
	        </div>
	    </footer>
		    <script src="./Rules_files/bootstrap.min.js.Без названия"></script>
		<script src="./Rules_files/clipboard.min.js.Без названия"></script>
		<script type="text/javascript">new ClipboardJS('.copyitem');</script>
	