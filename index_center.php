
<title> Краткая справка о предприятии</title>
<div
 <meta name="keywords" content="всплывающее окно, при загрузке сайта, модальное окно, css3, javascript" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
        <style type="text/css">
           
/* базовый контейнер, фон затемнения*/
#overlay {
    position: fixed;
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.65);
    z-index: 999;
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
    overflow: auto;
}
/* модальный блок */
.popup {
    top: 25%;
    left: 0;
    right: 0;       
    font-size: 14px;
    margin: auto;
    width: 85%;
    min-width: 420px;
    max-width: 700px;
    position: absolute;
    padding: 15px 20px;
    border: 1px solid #383838;
    background: #fefefe;
    z-index: 1000;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
/* кнопка закрытия */
.close {
    top: 10px;
    right: 10px;
    width: 32px;
    height: 32px;
    position: absolute;
    border: none;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: rgba(0, 131, 119, 0.9);
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    cursor: pointer;
    outline: none;

}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    font-family:  Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: normal;
    text-decoration: none;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
}
/* кнопка закрытия при наведении */
.close:hover {
    background-color: rgba(252, 20, 0, 0.8);
}
/* изображения в модальном окне */
.popup img {
    width: 100%;
    height: auto;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
/* миниатюры изображений */
.pl-left,
.pl-right {
    width: 25%;
    height: auto;
}
/* миниатюры справа */
.pl-right {
    float: right;
    margin: 5px 0 5px 15px;
}
/* миниатюры слева */
.pl-left {
    float: left;
    margin: 5px 18px 5px 0; 
}
/* анимация при появлении блоков с содержанием */
@-moz-keyframes fade {
    from { opacity: 0; }
    to { opacity: 1 }
}
@-webkit-keyframes fade {
    from { opacity: 0; }
    to { opacity: 1 } 
}
@keyframes fade {
    from { opacity: 0; }
    to { opacity: 1 }
}
</style>
    </head>
    <body>
		
        </div> 
                <div id="overlay">
            <div class="popup">
               <a class="back" href="http://35ks.ru/news/">Все новости</a>
                       <img src="http://35ks.ru/pop-up/akc11-.jpg">
                 
                <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
            </div>
        </div>
<script type="text/javascript">
	var delay_popup = 2000;	setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
</script>
    </body>

	

<div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>	
	<script type="text/javascript" language="javascript" src="jquery.carouFredSel-5.2.3-packed.js"></script>
	<script type="text/javascript" language="javascript">
		$(function() {

			$('#carousel ul').carouFredSel({
				prev: '#prev',
				next: '#next',
				pagination: "#pager",
				auto: true,
				scroll: 1000,
				pauseOnHover: true	
			});

		});
		</script>

		<style 	
		type="text/css" media="all">

			

			.wrapp {
				width: 1000px;
				margin: 40px auto;
				text-align:center;
			}
			#carousel {
				margin: 0 0 30px 0;
				width: 1000px;
				position:relative;
			}
			#carousel ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: block;
			}
			#carousel li {
				font-size: 40px;
				color: #999;
				text-align: center;
				width: 320px;
				height: 210px;
				padding: 0;
				margin: 6px;
				display: block;
				float: left;
				<!--background: transparent url('slider/images/carousel_polaroid.png') no-repeat 0 0;-->
				position:relative;
			}

			#carousel li img {
				width:320px;
				height:200px;
				margin-top:14px;
			}
			
			#carousel li a {
				width:320px;
				height:210px;
				position:absolute;
				display:block;
				z-index:2;
				top:14px;
				left:16px;
				background: transparent url('slider/images/carousel_shine.png') no-repeat 0 0;
				text-indent:-999em;
			}			

			.clearfix {
				float: none;
				clear: both;
			}
			
			#carousel .prev, #carousel .next {
				margin-left: 10px;
				width:15px;
				height:21px;			
				display:block;				
				text-indent:-999em;
				background: transparent url('slider/images/carousel_control.png') no-repeat 0 0;
				position:absolute;
				top:70px;				
			}
			#carousel .prev {
				background-position:0 0;
				left:-30px;
			}
				#carousel .prev:hover {
					left:-31px;
				}			
			#carousel .next {
				background-position: -18px 0;
				right:-20px;
			}
				#carousel .next:hover {
					right:-21px;
				}				
			#carousel .pager {
				margin:0 auto;
				text-align: center;
			}
			#carousel .pager a {
				margin: 0 5px 0 0;
				text-decoration: none;
				display:inline-block;
				width:8px;
				height:8px;
				background: transparent url('slider/images/carousel_control.png') no-repeat -2px -32px;
				text-indent:-999em;
			}
			#carousel .pager a.selected {
				text-decoration: underline;
				background: transparent url('slider/images/carousel_control.png') no-repeat -12px -32px;				
			}
		

		</style> 
	</head>
	<body>


		<div class="wrapp">
			
		


			<div id="carousel">
				<ul>
					<li><img src="slider/images/22.jpg" alt="" </li>	
					<li><img src="slider/images/21.jpg" alt="" </li>
					<li><img src="slider/images/20.jpg" alt="" </li>
					
					<li><img src="slider/images/1.jpg" alt="" </li>
					<li><img src="slider/images/6.jpg" alt="" </li>
					<li><img src="slider/images/17.jpg" alt="" </li>
					
					<li><img src="slider/images/3.jpg" alt="" </li>
					<li><img src="slider/images/18.jpg" alt="" </li>
					<li><img src="slider/images/4.jpg" alt="" </li>
					
					<li><img src="slider/images/11.jpg" alt="" </li>
					<li><img src="slider/images/5.jpg" alt="" </li>
					<li><img src="slider/images/12.jpg" alt="" </li>
					
					<li><img src="slider/images/14.jpg" alt="" </li>	
					<li><img src="slider/images/16.jpg" alt="" </li>
					<li><img src="slider/images/13.jpg" alt="" </li>
					
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev" href="#">&lt;</a>
				<a id="next" class="next" href="#">&gt;</a>
				<div id="pager" class="pager"></div>
			</div>
					</div>
</div>
	
	<br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
