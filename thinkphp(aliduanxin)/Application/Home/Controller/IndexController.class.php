<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // header('location:'.__MODULE__.'/Login/index');
        // die('');
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

            // 这里是利用vendor函数把相关的类引入进来
            vendor('Test.top.TopClient');
            vendor('Test.top.request.AlibabaAliqinFcSmsNumSendRequest');
            vendor('Test.top.ResultSet');
            vendor('Test.top.RequestCheckUtil');
            vendor('Test.top.TopLogger');//用变量时引入的 

            // 建立对象
            date_default_timezone_set('Asia/Shanghai');
            $c = new \TopClient();
            $c->appkey = '23530756';
            $c->secretKey = '97d40068ed2efb5967d8e3a883a248e9';
            $req = new \AlibabaAliqinFcSmsNumSendRequest();

            $req->setExtend("123456");
            $req->setSmsType("normal");
            $req->setSmsFreeSignName("ww网站");

            $name = '马武';
            $code = 'sjsff';
            $num = '13631461045';
            // $tmp = "{\"name\":\"$name\",\"code\":\"$code\"}";
            $req->setSmsParam("{\"name\":\"$name\",\"code\":\"$code\"}");
            $req->setRecNum("$num");
            $req->setSmsTemplateCode("SMS_26045427");
            $resp = $c->execute($req);
            
            // var_dump($req);
            // var_dump($resp);
            // var_dump($req);
            // 把对象转化成json格式然后再转化成数组
            $json_xml=json_encode($resp);
            $dejson_xml=json_decode($json_xml,true);
            var_dump($dejson_xml);
   
    }


    /**
     * [text 用于自身的测试]
     * @李伟健
     * @DateTime  2016-11-11T11:16:47+0800
     * @return    [type]                   [description]
     */
    public function text()
    {
        $save_path = isset($_GET['save_path'])?$_GET['save_path']:ROOT_PATH.'Public/qrcode/';
        $web_path = isset($_GET['save_path'])?$_GET['web_path']:'/Public/qrcode/';
        $qr_data = isset($_GET['qr_data'])?$_GET['qr_data']:'http://www.zetadata.com.cn/';
        $qr_level = isset($_GET['qr_level'])?$_GET['qr_level']:'H';
        $qr_size = isset($_GET['qr_size'])?$_GET['qr_size']:'8';
        $save_prefix = isset($_GET['save_prefix'])?$_GET['save_prefix']:'ZETA';

        if($filename = createQRcode($save_path,$qr_data,$qr_level,$qr_size,$save_prefix)){
            $pic = $web_path.$filename;
        }
        echo "<img src='".$pic."'>";
        echo '12235';
    }
}