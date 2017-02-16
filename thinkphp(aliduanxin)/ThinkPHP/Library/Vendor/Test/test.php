<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $httpdns = new HttpdnsGetRequest;
    $client = new ClusterTopClient("4272","0ebbcccfee18d7ad1aebc5b135ffa906");
    $client->gatewayUrl = "http://api.daily.taobao.net/router/rest";
    var_dump($client->execute($httpdns,"6100e23657fb0b2d0c78568e55a3031134be9a3a5d4b3a365753805"));

    // 下面的代码为验证码测试！
    $c = new TopClient;
	$c ->appkey = '23530756' ;
	$c ->secretKey = '97d40068ed2efb5967d8e3a883a248e9' ;
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req ->setExtend( "" );
	$req ->setSmsType( "normal" );
	$req ->setSmsFreeSignName( "" );
	$req ->setSmsParam( "" );
	$req ->setRecNum( "13631461045" );
	$req ->setSmsTemplateCode( "" );
	$resp = $c ->execute( $req );

?>