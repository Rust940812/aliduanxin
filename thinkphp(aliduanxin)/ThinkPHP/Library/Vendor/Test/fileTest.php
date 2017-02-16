<?php
   include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $c = new TopClient;
    $c->appkey = '23530756';
    $c->secretKey = '97d40068ed2efb5967d8e3a883a248e9';
    $req = new AlibabaAliqinFcSmsNumSendRequest;
    var_dump($req);
    // $req->setExtend("123456");
    // $req->setSmsType("normal");
    // $req->setSmsFreeSignName("ww网站");
    // $req->setSmsParam("{\"name\":\"马钰杰\",\"code\":\"wo shi sha b\"}");
    // $req->setRecNum("13631461045");
    // $req->setSmsTemplateCode("SMS_26045427");
    // $resp = $c->execute($req);
    // var_dump($resp);

    // // 把对象转化成json格式然后再转化成数组
    // $json_xml=json_encode($resp);
    // $dejson_xml=json_decode($json_xml,true);
    // var_dump($dejson_xml);
?>