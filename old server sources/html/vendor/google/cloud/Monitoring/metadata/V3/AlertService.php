<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class AlertService
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab2110a28676f6f676c652f6d6f6e69746f72696e672f76332f616c6572" .
            "745f736572766963652e70726f746f1214676f6f676c652e6d6f6e69746f" .
            "72696e672e76331a17676f6f676c652f6170692f636c69656e742e70726f" .
            "746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e" .
            "70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f" .
            "746f1a20676f6f676c652f6d6f6e69746f72696e672f76332f616c657274" .
            "2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e" .
            "70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d" .
            "61736b2e70726f746f2295010a18437265617465416c657274506f6c6963" .
            "7952657175657374123b0a046e616d65180320012809422de04102fa4127" .
            "12256d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f416c" .
            "657274506f6c696379123c0a0c616c6572745f706f6c6963791802200128" .
            "0b32212e676f6f676c652e6d6f6e69746f72696e672e76332e416c657274" .
            "506f6c6963794203e0410222540a15476574416c657274506f6c69637952" .
            "657175657374123b0a046e616d65180320012809422de04102fa41270a25" .
            "6d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f416c6572" .
            "74506f6c69637922a0010a184c697374416c657274506f6c696369657352" .
            "657175657374123b0a046e616d65180420012809422de04102fa41271225" .
            "6d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f416c6572" .
            "74506f6c696379120e0a0666696c74657218052001280912100a086f7264" .
            "65725f627918062001280912110a09706167655f73697a65180220012805" .
            "12120a0a706167655f746f6b656e180320012809226f0a194c697374416c" .
            "657274506f6c6963696573526573706f6e736512390a0e616c6572745f70" .
            "6f6c696369657318032003280b32212e676f6f676c652e6d6f6e69746f72" .
            "696e672e76332e416c657274506f6c69637912170a0f6e6578745f706167" .
            "655f746f6b656e1802200128092289010a18557064617465416c65727450" .
            "6f6c69637952657175657374122f0a0b7570646174655f6d61736b180220" .
            "01280b321a2e676f6f676c652e70726f746f6275662e4669656c644d6173" .
            "6b123c0a0c616c6572745f706f6c69637918032001280b32212e676f6f67" .
            "6c652e6d6f6e69746f72696e672e76332e416c657274506f6c6963794203" .
            "e0410222570a1844656c657465416c657274506f6c696379526571756573" .
            "74123b0a046e616d65180320012809422de04102fa41270a256d6f6e6974" .
            "6f72696e672e676f6f676c65617069732e636f6d2f416c657274506f6c69" .
            "6379329e080a12416c657274506f6c6963795365727669636512a8010a11" .
            "4c697374416c657274506f6c6963696573122e2e676f6f676c652e6d6f6e" .
            "69746f72696e672e76332e4c697374416c657274506f6c69636965735265" .
            "71756573741a2f2e676f6f676c652e6d6f6e69746f72696e672e76332e4c" .
            "697374416c657274506f6c6963696573526573706f6e7365223282d3e493" .
            "022512232f76332f7b6e616d653d70726f6a656374732f2a7d2f616c6572" .
            "74506f6c6963696573da41046e616d651296010a0e476574416c65727450" .
            "6f6c696379122b2e676f6f676c652e6d6f6e69746f72696e672e76332e47" .
            "6574416c657274506f6c696379526571756573741a212e676f6f676c652e" .
            "6d6f6e69746f72696e672e76332e416c657274506f6c696379223482d3e4" .
            "93022712252f76332f7b6e616d653d70726f6a656374732f2a2f616c6572" .
            "74506f6c69636965732f2a7dda41046e616d6512b5010a11437265617465" .
            "416c657274506f6c696379122e2e676f6f676c652e6d6f6e69746f72696e" .
            "672e76332e437265617465416c657274506f6c696379526571756573741a" .
            "212e676f6f676c652e6d6f6e69746f72696e672e76332e416c657274506f" .
            "6c696379224d82d3e493023322232f76332f7b6e616d653d70726f6a6563" .
            "74732f2a7d2f616c657274506f6c69636965733a0c616c6572745f706f6c" .
            "696379da41116e616d652c616c6572745f706f6c6963791291010a114465" .
            "6c657465416c657274506f6c696379122e2e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76332e44656c657465416c657274506f6c69637952657175" .
            "6573741a162e676f6f676c652e70726f746f6275662e456d707479223482" .
            "d3e49302272a252f76332f7b6e616d653d70726f6a656374732f2a2f616c" .
            "657274506f6c69636965732f2a7dda41046e616d6512cb010a1155706461" .
            "7465416c657274506f6c696379122e2e676f6f676c652e6d6f6e69746f72" .
            "696e672e76332e557064617465416c657274506f6c696379526571756573" .
            "741a212e676f6f676c652e6d6f6e69746f72696e672e76332e416c657274" .
            "506f6c696379226382d3e493024232322f76332f7b616c6572745f706f6c" .
            "6963792e6e616d653d70726f6a656374732f2a2f616c657274506f6c6963" .
            "6965732f2a7d3a0c616c6572745f706f6c696379da41187570646174655f" .
            "6d61736b2c616c6572745f706f6c6963791aa901ca41196d6f6e69746f72" .
            "696e672e676f6f676c65617069732e636f6dd241890168747470733a2f2f" .
            "7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d" .
            "706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069" .
            "732e636f6d2f617574682f6d6f6e69746f72696e672c68747470733a2f2f" .
            "7777772e676f6f676c65617069732e636f6d2f617574682f6d6f6e69746f" .
            "72696e672e7265616442a9010a18636f6d2e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76334211416c6572745365727669636550726f746f50015a" .
            "3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f72" .
            "696e67aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e672e" .
            "5633ca021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c56" .
            "33620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

