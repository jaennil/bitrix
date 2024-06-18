<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Книжный магазин");
?><p>
	 Наш магазин существует на Российском рынке с 1992 года. За это время «Книжный магазин» прошёл большой путь от маленькой торговой точки до одного из крупнейших поставщиков книг в России.
</p>
<p>
	 «Книжный магазин» осуществляет продажу книг, отобранных с учётом высоких стандартов качества, что позволяет обеспечить наших клиентов лучшей литературой. Налажен процесс как массовых, так и индивидуальных заказов, что с одной стороны позволяет обеспечить постоянное наличие популярных книг, а с другой – индивидуальный подход к каждому клиенту.
</p>
<h3>Наша продукция</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "section",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products"
	)
);?>
<h3>Наши услуги</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "products"
	)
);?>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>