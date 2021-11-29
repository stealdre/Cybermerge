<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Profile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab32c0a29676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f70726f66696c652e70726f746f121b676f6f676c652e636c6f7564" .
            "2e74616c656e742e763462657461311a19676f6f676c652f6170692f7265" .
            "736f757263652e70726f746f1a28676f6f676c652f636c6f75642f74616c" .
            "656e742f763462657461312f636f6d6d6f6e2e70726f746f1a1e676f6f67" .
            "6c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f" .
            "6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a" .
            "1e676f6f676c652f70726f746f6275662f77726170706572732e70726f74" .
            "6f1a16676f6f676c652f747970652f646174652e70726f746f1a20676f6f" .
            "676c652f747970652f706f7374616c5f616464726573732e70726f746f1a" .
            "1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22" .
            "f60d0a0750726f66696c65120c0a046e616d6518012001280912130a0b65" .
            "787465726e616c5f6964180220012809120e0a06736f7572636518032001" .
            "2809120b0a0375726918042001280912100a0867726f75705f6964180520" .
            "012809122e0a0a69735f68697261626c6518062001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e426f6f6c56616c7565122f0a0b6372656174" .
            "655f74696d6518072001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70122f0a0b7570646174655f74696d651808200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012" .
            "390a1563616e6469646174655f7570646174655f74696d6518432001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d701236" .
            "0a12726573756d655f7570646174655f74696d6518442001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d7012330a067265" .
            "73756d6518352001280b32232e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e526573756d65123d0a0c706572736f6e5f6e61" .
            "6d6573180b2003280b32272e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e506572736f6e4e616d6512370a09616464726573" .
            "736573180c2003280b32242e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e41646472657373123b0a0f656d61696c5f616464" .
            "726573736573180d2003280b32222e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e456d61696c12390a0d70686f6e655f6e75" .
            "6d62657273180e2003280b32222e676f6f676c652e636c6f75642e74616c" .
            "656e742e763462657461312e50686f6e65123f0a0d706572736f6e616c5f" .
            "75726973180f2003280b32282e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e506572736f6e616c55726912530a1761646469" .
            "74696f6e616c5f636f6e746163745f696e666f18102003280b32322e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e41646469" .
            "74696f6e616c436f6e74616374496e666f12490a12656d706c6f796d656e" .
            "745f7265636f72647318112003280b322d2e676f6f676c652e636c6f7564" .
            "2e74616c656e742e763462657461312e456d706c6f796d656e745265636f" .
            "726412470a11656475636174696f6e5f7265636f72647318122003280b32" .
            "2c2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "456475636174696f6e5265636f726412320a06736b696c6c731813200328" .
            "0b32222e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e536b696c6c12390a0a6163746976697469657318142003280b32252e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e4163" .
            "746976697479123e0a0c7075626c69636174696f6e7318152003280b3228" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e50" .
            "75626c69636174696f6e12340a07706174656e747318162003280b32232e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e5061" .
            "74656e7412420a0e63657274696669636174696f6e7318172003280b322a" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e43" .
            "657274696669636174696f6e12190a0c6170706c69636174696f6e73182f" .
            "200328094203e0410312180a0b61737369676e6d656e7473183020032809" .
            "4203e0410312550a11637573746f6d5f61747472696275746573181a2003" .
            "280b323a2e676f6f676c652e636c6f75642e74616c656e742e7634626574" .
            "61312e50726f66696c652e437573746f6d41747472696275746573456e74" .
            "727912160a0970726f636573736564181b200128084203e04103121c0a0f" .
            "6b6579776f72645f736e6970706574181c200128094203e0410312520a14" .
            "617661696c6162696c6974795f7369676e616c7318462003280b322f2e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e417661" .
            "696c6162696c6974795369676e616c4203e0410312450a11646572697665" .
            "645f61646472657373657318402003280b32252e676f6f676c652e636c6f" .
            "75642e74616c656e742e763462657461312e4c6f636174696f6e4203e041" .
            "031a650a15437573746f6d41747472696275746573456e747279120b0a03" .
            "6b6579180120012809123b0a0576616c756518022001280b322c2e676f6f" .
            "676c652e636c6f75642e74616c656e742e763462657461312e437573746f" .
            "6d4174747269627574653a0238013a58ea41550a1b6a6f62732e676f6f67" .
            "6c65617069732e636f6d2f50726f66696c65123670726f6a656374732f7b" .
            "70726f6a6563747d2f74656e616e74732f7b74656e616e747d2f70726f66" .
            "696c65732f7b70726f66696c657d22c3010a12417661696c6162696c6974" .
            "795369676e616c12410a047479706518012001280e32332e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e417661696c616269" .
            "6c6974795369676e616c5479706512340a106c6173745f7570646174655f" .
            "74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54" .
            "696d657374616d7012340a1066696c7465725f7361746973666965641803" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c" .
            "756522b5010a06526573756d6512190a11737472756374757265645f7265" .
            "73756d6518012001280912430a0b726573756d655f747970651802200128" .
            "0e322e2e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e526573756d652e526573756d6554797065224b0a0a526573756d6554" .
            "797065121b0a17524553554d455f545950455f554e535045434946494544" .
            "100012090a054852584d4c100112150a114f544845525f524553554d455f" .
            "54595045100222bc020a0a506572736f6e4e616d6512180a0e666f726d61" .
            "747465645f6e616d65180120012809480012570a0f737472756374757265" .
            "645f6e616d6518022001280b323c2e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e506572736f6e4e616d652e506572736f6e" .
            "537472756374757265644e616d65480012160a0e7072656665727265645f" .
            "6e616d651803200128091a93010a14506572736f6e537472756374757265" .
            "644e616d6512120a0a676976656e5f6e616d6518012001280912160a0e70" .
            "72656665727265645f6e616d6518062001280912160a0e6d6964646c655f" .
            "696e697469616c18022001280912130a0b66616d696c795f6e616d651803" .
            "2001280912100a08737566666978657318042003280912100a0870726566" .
            "69786573180520032809420d0a0b706572736f6e5f6e616d6522d9010a07" .
            "41646472657373123c0a05757361676518012001280e322d2e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e436f6e74616374" .
            "496e666f5573616765121e0a14756e737472756374757265645f61646472" .
            "657373180220012809480012380a12737472756374757265645f61646472" .
            "65737318032001280b321a2e676f6f676c652e747970652e506f7374616c" .
            "416464726573734800122b0a0763757272656e7418042001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e426f6f6c56616c756542090a076164" .
            "6472657373225c0a05456d61696c123c0a05757361676518012001280e32" .
            "2d2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "436f6e74616374496e666f557361676512150a0d656d61696c5f61646472" .
            "65737318022001280922cf020a0550686f6e65123c0a0575736167651801" .
            "2001280e322d2e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e436f6e74616374496e666f5573616765123a0a047479706518" .
            "022001280e322c2e676f6f676c652e636c6f75642e74616c656e742e7634" .
            "62657461312e50686f6e652e50686f6e6554797065120e0a066e756d6265" .
            "7218032001280912160a0e7768656e5f617661696c61626c651804200128" .
            "0922a3010a0950686f6e6554797065121a0a1650484f4e455f545950455f" .
            "554e5350454349464945441000120c0a084c414e444c494e451001120a0a" .
            "064d4f42494c45100212070a03464158100312090a055041474552100412" .
            "0e0a0a5454595f4f525f5444441005120d0a09564f4943454d41494c1006" .
            "120b0a075649525455414c100712080a04564f4950100812160a124d4f42" .
            "494c455f4f525f4c414e444c494e451009221a0a0b506572736f6e616c55" .
            "7269120b0a0375726918012001280922770a154164646974696f6e616c43" .
            "6f6e74616374496e666f123c0a05757361676518012001280e322d2e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e436f6e74" .
            "616374496e666f5573616765120c0a046e616d6518022001280912120a0a" .
            "636f6e746163745f696418032001280922f2030a10456d706c6f796d656e" .
            "745265636f726412250a0a73746172745f6461746518012001280b32112e" .
            "676f6f676c652e747970652e4461746512230a08656e645f646174651802" .
            "2001280b32112e676f6f676c652e747970652e4461746512150a0d656d70" .
            "6c6f7965725f6e616d6518032001280912150a0d6469766973696f6e5f6e" .
            "616d6518042001280912350a076164647265737318052001280b32242e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e416464" .
            "7265737312110a096a6f625f7469746c6518062001280912170a0f6a6f62" .
            "5f6465736372697074696f6e18072001280912310a0d69735f7375706572" .
            "7669736f7218082001280b321a2e676f6f676c652e70726f746f6275662e" .
            "426f6f6c56616c756512340a1069735f73656c665f656d706c6f79656418" .
            "092001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c5661" .
            "6c7565122e0a0a69735f63757272656e74180a2001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e426f6f6c56616c7565121e0a116a6f625f74" .
            "69746c655f736e6970706574180b200128094203e0410312240a176a6f62" .
            "5f6465736372697074696f6e5f736e6970706574180c200128094203e041" .
            "0312220a15656d706c6f7965725f6e616d655f736e6970706574180d2001" .
            "28094203e0410322cc030a0f456475636174696f6e5265636f726412250a" .
            "0a73746172745f6461746518012001280b32112e676f6f676c652e747970" .
            "652e4461746512230a08656e645f6461746518022001280b32112e676f6f" .
            "676c652e747970652e4461746512330a1865787065637465645f67726164" .
            "756174696f6e5f6461746518032001280b32112e676f6f676c652e747970" .
            "652e4461746512130a0b7363686f6f6c5f6e616d6518042001280912350a" .
            "076164647265737318052001280b32242e676f6f676c652e636c6f75642e" .
            "74616c656e742e763462657461312e41646472657373121c0a1264656772" .
            "65655f6465736372697074696f6e180620012809480012400a1173747275" .
            "6374757265645f64656772656518072001280b32232e676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461312e44656772656548001213" .
            "0a0b6465736372697074696f6e180820012809122e0a0a69735f63757272" .
            "656e7418092001280b321a2e676f6f676c652e70726f746f6275662e426f" .
            "6f6c56616c756512200a137363686f6f6c5f6e616d655f736e6970706574" .
            "180a200128094203e04103121b0a0e6465677265655f736e697070657418" .
            "0b200128094203e0410342080a0664656772656522740a06446567726565" .
            "123c0a0b6465677265655f7479706518012001280e32272e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e4465677265655479" .
            "706512130a0b6465677265655f6e616d6518022001280912170a0f666965" .
            "6c64735f6f665f737475647918032003280922d2020a0841637469766974" .
            "7912140a0c646973706c61795f6e616d6518012001280912130a0b646573" .
            "6372697074696f6e180220012809120b0a0375726918032001280912260a" .
            "0b6372656174655f6461746518042001280b32112e676f6f676c652e7479" .
            "70652e4461746512260a0b7570646174655f6461746518052001280b3211" .
            "2e676f6f676c652e747970652e4461746512140a0c7465616d5f6d656d62" .
            "65727318062003280912370a0b736b696c6c735f7573656418072003280b" .
            "32222e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e536b696c6c12220a1561637469766974795f6e616d655f736e69707065" .
            "741808200128094203e0410312290a1c61637469766974795f6465736372" .
            "697074696f6e5f736e69707065741809200128094203e0410312200a1373" .
            "6b696c6c735f757365645f736e6970706574180a200328094203e0410322" .
            "cb010a0b5075626c69636174696f6e120f0a07617574686f727318012003" .
            "2809120d0a057469746c6518022001280912130a0b646573637269707469" .
            "6f6e180320012809120f0a076a6f75726e616c180420012809120e0a0676" .
            "6f6c756d6518052001280912110a097075626c6973686572180620012809" .
            "122b0a107075626c69636174696f6e5f6461746518072001280b32112e67" .
            "6f6f676c652e747970652e4461746512180a107075626c69636174696f6e" .
            "5f74797065180820012809120c0a046973626e18092001280922a9020a06" .
            "506174656e7412140a0c646973706c61795f6e616d651801200128091211" .
            "0a09696e76656e746f727318022003280912150a0d706174656e745f7374" .
            "61747573180320012809122d0a12706174656e745f7374617475735f6461" .
            "746518042001280b32112e676f6f676c652e747970652e44617465122d0a" .
            "12706174656e745f66696c696e675f6461746518052001280b32112e676f" .
            "6f676c652e747970652e4461746512150a0d706174656e745f6f66666963" .
            "6518062001280912150a0d706174656e745f6e756d626572180720012809" .
            "121a0a12706174656e745f6465736372697074696f6e1808200128091237" .
            "0a0b736b696c6c735f7573656418092003280b32222e676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461312e536b696c6c4282010a1f" .
            "636f6d2e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "31421450726f66696c655265736f7572636550726f746f50015a41676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f636c6f75642f74616c656e742f763462657461313b74616c65" .
            "6e74a20203435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
