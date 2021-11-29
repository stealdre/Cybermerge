<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class MetricService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af0260a29676f6f676c652f6d6f6e69746f72696e672f76332f6d657472" .
            "69635f736572766963652e70726f746f1214676f6f676c652e6d6f6e6974" .
            "6f72696e672e76331a17676f6f676c652f6170692f636c69656e742e7072" .
            "6f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f72" .
            "2e70726f746f1a17676f6f676c652f6170692f6d65747269632e70726f74" .
            "6f1a23676f6f676c652f6170692f6d6f6e69746f7265645f7265736f7572" .
            "63652e70726f746f1a19676f6f676c652f6170692f7265736f757263652e" .
            "70726f746f1a20676f6f676c652f6d6f6e69746f72696e672f76332f616c" .
            "6572742e70726f746f1a21676f6f676c652f6d6f6e69746f72696e672f76" .
            "332f636f6d6d6f6e2e70726f746f1a21676f6f676c652f6d6f6e69746f72" .
            "696e672f76332f6d65747269632e70726f746f1a1e676f6f676c652f7072" .
            "6f746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f" .
            "70726f746f6275662f656d7074792e70726f746f1a17676f6f676c652f72" .
            "70632f7374617475732e70726f746f22ad010a274c6973744d6f6e69746f" .
            "7265645265736f7572636544657363726970746f72735265717565737412" .
            "4b0a046e616d65180520012809423de04102fa413712356d6f6e69746f72" .
            "696e672e676f6f676c65617069732e636f6d2f4d6f6e69746f7265645265" .
            "736f7572636544657363726970746f72120e0a0666696c74657218022001" .
            "280912110a09706167655f73697a6518032001280512120a0a706167655f" .
            "746f6b656e180420012809228a010a284c6973744d6f6e69746f72656452" .
            "65736f7572636544657363726970746f7273526573706f6e736512450a14" .
            "7265736f757263655f64657363726970746f727318012003280b32272e67" .
            "6f6f676c652e6170692e4d6f6e69746f7265645265736f75726365446573" .
            "63726970746f7212170a0f6e6578745f706167655f746f6b656e18022001" .
            "280922740a254765744d6f6e69746f7265645265736f7572636544657363" .
            "726970746f7252657175657374124b0a046e616d65180320012809423de0" .
            "4102fa41370a356d6f6e69746f72696e672e676f6f676c65617069732e63" .
            "6f6d2f4d6f6e69746f7265645265736f7572636544657363726970746f72" .
            "2297010a1c4c6973744d657472696344657363726970746f727352657175" .
            "65737412400a046e616d651805200128094232e04102fa412c122a6d6f6e" .
            "69746f72696e672e676f6f676c65617069732e636f6d2f4d657472696344" .
            "657363726970746f72120e0a0666696c74657218022001280912110a0970" .
            "6167655f73697a6518032001280512120a0a706167655f746f6b656e1804" .
            "2001280922720a1d4c6973744d657472696344657363726970746f727352" .
            "6573706f6e736512380a126d65747269635f64657363726970746f727318" .
            "012003280b321c2e676f6f676c652e6170692e4d65747269634465736372" .
            "6970746f7212170a0f6e6578745f706167655f746f6b656e180220012809" .
            "225e0a1a4765744d657472696344657363726970746f7252657175657374" .
            "12400a046e616d651803200128094232e04102fa412c0a2a6d6f6e69746f" .
            "72696e672e676f6f676c65617069732e636f6d2f4d657472696344657363" .
            "726970746f72229f010a1d4372656174654d657472696344657363726970" .
            "746f725265717565737412400a046e616d651803200128094232e04102fa" .
            "412c122a6d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f" .
            "4d657472696344657363726970746f72123c0a116d65747269635f646573" .
            "63726970746f7218022001280b321c2e676f6f676c652e6170692e4d6574" .
            "72696344657363726970746f724203e0410222610a1d44656c6574654d65" .
            "7472696344657363726970746f725265717565737412400a046e616d6518" .
            "03200128094232e04102fa412c0a2a6d6f6e69746f72696e672e676f6f67" .
            "6c65617069732e636f6d2f4d657472696344657363726970746f72228c03" .
            "0a154c69737454696d6553657269657352657175657374123a0a046e616d" .
            "65180a20012809422ce04102fa412612246d6f6e69746f72696e672e676f" .
            "6f676c65617069732e636f6d2f54696d6553657269657312130a0666696c" .
            "7465721802200128094203e0410212390a08696e74657276616c18042001" .
            "280b32222e676f6f676c652e6d6f6e69746f72696e672e76332e54696d65" .
            "496e74657276616c4203e0410212360a0b6167677265676174696f6e1805" .
            "2001280b32212e676f6f676c652e6d6f6e69746f72696e672e76332e4167" .
            "677265676174696f6e12100a086f726465725f6279180620012809124d0a" .
            "047669657718072001280e323a2e676f6f676c652e6d6f6e69746f72696e" .
            "672e76332e4c69737454696d65536572696573526571756573742e54696d" .
            "65536572696573566965774203e0410212110a09706167655f73697a6518" .
            "082001280512120a0a706167655f746f6b656e18092001280922270a0e54" .
            "696d655365726965735669657712080a0446554c4c1000120b0a07484541" .
            "4445525310012296010a164c69737454696d65536572696573526573706f" .
            "6e736512350a0b74696d655f73657269657318012003280b32202e676f6f" .
            "676c652e6d6f6e69746f72696e672e76332e54696d655365726965731217" .
            "0a0f6e6578745f706167655f746f6b656e180220012809122c0a10657865" .
            "637574696f6e5f6572726f727318032003280b32122e676f6f676c652e72" .
            "70632e5374617475732291010a1743726561746554696d65536572696573" .
            "52657175657374123a0a046e616d65180320012809422ce04102fa412612" .
            "246d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f54696d" .
            "65536572696573123a0a0b74696d655f73657269657318022003280b3220" .
            "2e676f6f676c652e6d6f6e69746f72696e672e76332e54696d6553657269" .
            "65734203e04102227a0a1543726561746554696d65536572696573457272" .
            "6f7212390a0b74696d655f73657269657318012001280b32202e676f6f67" .
            "6c652e6d6f6e69746f72696e672e76332e54696d65536572696573420218" .
            "0112260a0673746174757318022001280b32122e676f6f676c652e727063" .
            "2e5374617475734202180122d8010a1743726561746554696d6553657269" .
            "657353756d6d61727912190a11746f74616c5f706f696e745f636f756e74" .
            "180120012805121b0a13737563636573735f706f696e745f636f756e7418" .
            "022001280512430a066572726f727318032003280b32332e676f6f676c65" .
            "2e6d6f6e69746f72696e672e76332e43726561746554696d655365726965" .
            "7353756d6d6172792e4572726f721a400a054572726f7212220a06737461" .
            "74757318012001280b32122e676f6f676c652e7270632e53746174757312" .
            "130a0b706f696e745f636f756e7418022001280532be0d0a0d4d65747269" .
            "635365727669636512e4010a204c6973744d6f6e69746f7265645265736f" .
            "7572636544657363726970746f7273123d2e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76332e4c6973744d6f6e69746f7265645265736f75726365" .
            "44657363726970746f7273526571756573741a3e2e676f6f676c652e6d6f" .
            "6e69746f72696e672e76332e4c6973744d6f6e69746f7265645265736f75" .
            "72636544657363726970746f7273526573706f6e7365224182d3e4930234" .
            "12322f76332f7b6e616d653d70726f6a656374732f2a7d2f6d6f6e69746f" .
            "7265645265736f7572636544657363726970746f7273da41046e616d6512" .
            "cc010a1e4765744d6f6e69746f7265645265736f75726365446573637269" .
            "70746f72123b2e676f6f676c652e6d6f6e69746f72696e672e76332e4765" .
            "744d6f6e69746f7265645265736f7572636544657363726970746f725265" .
            "71756573741a272e676f6f676c652e6170692e4d6f6e69746f7265645265" .
            "736f7572636544657363726970746f72224482d3e493023712352f76332f" .
            "7b6e616d653d70726f6a656374732f2a2f6d6f6e69746f7265645265736f" .
            "7572636544657363726970746f72732f2a2a7dda41046e616d6512b8010a" .
            "154c6973744d657472696344657363726970746f727312322e676f6f676c" .
            "652e6d6f6e69746f72696e672e76332e4c6973744d657472696344657363" .
            "726970746f7273526571756573741a332e676f6f676c652e6d6f6e69746f" .
            "72696e672e76332e4c6973744d657472696344657363726970746f727352" .
            "6573706f6e7365223682d3e493022912272f76332f7b6e616d653d70726f" .
            "6a656374732f2a7d2f6d657472696344657363726970746f7273da41046e" .
            "616d6512a0010a134765744d657472696344657363726970746f7212302e" .
            "676f6f676c652e6d6f6e69746f72696e672e76332e4765744d6574726963" .
            "44657363726970746f72526571756573741a1c2e676f6f676c652e617069" .
            "2e4d657472696344657363726970746f72223982d3e493022c122a2f7633" .
            "2f7b6e616d653d70726f6a656374732f2a2f6d6574726963446573637269" .
            "70746f72732f2a2a7dda41046e616d6512c8010a164372656174654d6574" .
            "72696344657363726970746f7212332e676f6f676c652e6d6f6e69746f72" .
            "696e672e76332e4372656174654d657472696344657363726970746f7252" .
            "6571756573741a1c2e676f6f676c652e6170692e4d657472696344657363" .
            "726970746f72225b82d3e493023c22272f76332f7b6e616d653d70726f6a" .
            "656374732f2a7d2f6d657472696344657363726970746f72733a116d6574" .
            "7269635f64657363726970746f72da41166e616d652c6d65747269635f64" .
            "657363726970746f7212a0010a1644656c6574654d657472696344657363" .
            "726970746f7212332e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "44656c6574654d657472696344657363726970746f72526571756573741a" .
            "162e676f6f676c652e70726f746f6275662e456d707479223982d3e49302" .
            "2c2a2a2f76332f7b6e616d653d70726f6a656374732f2a2f6d6574726963" .
            "44657363726970746f72732f2a2a7dda41046e616d6512b1010a0e4c6973" .
            "7454696d65536572696573122b2e676f6f676c652e6d6f6e69746f72696e" .
            "672e76332e4c69737454696d65536572696573526571756573741a2c2e67" .
            "6f6f676c652e6d6f6e69746f72696e672e76332e4c69737454696d655365" .
            "72696573526573706f6e7365224482d3e493022212202f76332f7b6e616d" .
            "653d70726f6a656374732f2a7d2f74696d65536572696573da41196e616d" .
            "652c66696c7465722c696e74657276616c2c766965771299010a10437265" .
            "61746554696d65536572696573122d2e676f6f676c652e6d6f6e69746f72" .
            "696e672e76332e43726561746554696d6553657269657352657175657374" .
            "1a162e676f6f676c652e70726f746f6275662e456d707479223e82d3e493" .
            "022522202f76332f7b6e616d653d70726f6a656374732f2a7d2f74696d65" .
            "5365726965733a012ada41106e616d652c74696d655f7365726965731ada" .
            "01ca41196d6f6e69746f72696e672e676f6f676c65617069732e636f6dd2" .
            "41ba0168747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777" .
            "772e676f6f676c65617069732e636f6d2f617574682f6d6f6e69746f7269" .
            "6e672c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f6d6f6e69746f72696e672e726561642c68747470733a2f2f77" .
            "77772e676f6f676c65617069732e636f6d2f617574682f6d6f6e69746f72" .
            "696e672e777269746542d9050a18636f6d2e676f6f676c652e6d6f6e6974" .
            "6f72696e672e763342124d65747269635365727669636550726f746f5001" .
            "5a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f67" .
            "6f6f676c65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f" .
            "72696e67aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e67" .
            "2e5633ca021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c" .
            "5633ea41f0010a2a6d6f6e69746f72696e672e676f6f676c65617069732e" .
            "636f6d2f4d657472696344657363726970746f72123b70726f6a65637473" .
            "2f7b70726f6a6563747d2f6d657472696344657363726970746f72732f7b" .
            "6d65747269635f64657363726970746f723d2a2a7d12456f7267616e697a" .
            "6174696f6e732f7b6f7267616e697a6174696f6e7d2f6d65747269634465" .
            "7363726970746f72732f7b6d65747269635f64657363726970746f723d2a" .
            "2a7d1239666f6c646572732f7b666f6c6465727d2f6d6574726963446573" .
            "63726970746f72732f7b6d65747269635f64657363726970746f723d2a2a" .
            "7d12012a2001ea41b7020a356d6f6e69746f72696e672e676f6f676c6561" .
            "7069732e636f6d2f4d6f6e69746f7265645265736f757263654465736372" .
            "6970746f72124f70726f6a656374732f7b70726f6a6563747d2f6d6f6e69" .
            "746f7265645265736f7572636544657363726970746f72732f7b6d6f6e69" .
            "746f7265645f7265736f757263655f64657363726970746f727d12596f72" .
            "67616e697a6174696f6e732f7b6f7267616e697a6174696f6e7d2f6d6f6e" .
            "69746f7265645265736f7572636544657363726970746f72732f7b6d6f6e" .
            "69746f7265645f7265736f757263655f64657363726970746f727d124d66" .
            "6f6c646572732f7b666f6c6465727d2f6d6f6e69746f7265645265736f75" .
            "72636544657363726970746f72732f7b6d6f6e69746f7265645f7265736f" .
            "757263655f64657363726970746f727d12012a2001620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

