<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class BigtableTableAdmin
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
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a99350a33676f6f676c652f6269677461626c652f61646d696e2f76322f" .
            "6269677461626c655f7461626c655f61646d696e2e70726f746f1218676f" .
            "6f676c652e6269677461626c652e61646d696e2e76321a17676f6f676c65" .
            "2f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f" .
            "6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f61" .
            "70692f7265736f757263652e70726f746f1a24676f6f676c652f62696774" .
            "61626c652f61646d696e2f76322f7461626c652e70726f746f1a1e676f6f" .
            "676c652f69616d2f76312f69616d5f706f6c6963792e70726f746f1a1a67" .
            "6f6f676c652f69616d2f76312f706f6c6963792e70726f746f1a23676f6f" .
            "676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f" .
            "746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70" .
            "726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e7072" .
            "6f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f22fc010a124372656174655461626c655265717565737412" .
            "380a06706172656e741801200128094228e04102fa41220a206269677461" .
            "626c652e676f6f676c65617069732e636f6d2f496e7374616e636512150a" .
            "087461626c655f69641802200128094203e0410212330a057461626c6518" .
            "032001280b321f2e676f6f676c652e6269677461626c652e61646d696e2e" .
            "76322e5461626c654203e04102124a0a0e696e697469616c5f73706c6974" .
            "7318042003280b32322e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e4372656174655461626c65526571756573742e53706c69741a" .
            "140a0553706c6974120b0a036b657918012001280c22b4010a1e43726561" .
            "74655461626c6546726f6d536e617073686f745265717565737412380a06" .
            "706172656e741801200128094228e04102fa41220a206269677461626c65" .
            "2e676f6f676c65617069732e636f6d2f496e7374616e636512150a087461" .
            "626c655f69641802200128094203e0410212410a0f736f757263655f736e" .
            "617073686f741803200128094228e04102fa41220a206269677461626c65" .
            "2e676f6f676c65617069732e636f6d2f536e617073686f742294010a1344" .
            "726f70526f7752616e67655265717565737412330a046e616d6518012001" .
            "28094225e04102fa411f0a1d6269677461626c652e676f6f676c65617069" .
            "732e636f6d2f5461626c6512180a0e726f775f6b65795f70726566697818" .
            "022001280c480012240a1a64656c6574655f616c6c5f646174615f66726f" .
            "6d5f7461626c65180320012808480042080a0674617267657422a8010a11" .
            "4c6973745461626c65735265717565737412380a06706172656e74180120" .
            "0128094228e04102fa41220a206269677461626c652e676f6f676c656170" .
            "69732e636f6d2f496e7374616e636512320a047669657718022001280e32" .
            "242e676f6f676c652e6269677461626c652e61646d696e2e76322e546162" .
            "6c652e5669657712110a09706167655f73697a6518042001280512120a0a" .
            "706167655f746f6b656e180320012809225e0a124c6973745461626c6573" .
            "526573706f6e7365122f0a067461626c657318012003280b321f2e676f6f" .
            "676c652e6269677461626c652e61646d696e2e76322e5461626c6512170a" .
            "0f6e6578745f706167655f746f6b656e180220012809227a0a0f47657454" .
            "61626c655265717565737412330a046e616d651801200128094225e04102" .
            "fa411f0a1d6269677461626c652e676f6f676c65617069732e636f6d2f54" .
            "61626c6512320a047669657718022001280e32242e676f6f676c652e6269" .
            "677461626c652e61646d696e2e76322e5461626c652e5669657722490a12" .
            "44656c6574655461626c655265717565737412330a046e616d6518012001" .
            "28094225e04102fa411f0a1d6269677461626c652e676f6f676c65617069" .
            "732e636f6d2f5461626c6522da020a1b4d6f64696679436f6c756d6e4661" .
            "6d696c6965735265717565737412330a046e616d651801200128094225e0" .
            "4102fa411f0a1d6269677461626c652e676f6f676c65617069732e636f6d" .
            "2f5461626c65125e0a0d6d6f64696669636174696f6e7318022003280b32" .
            "422e676f6f676c652e6269677461626c652e61646d696e2e76322e4d6f64" .
            "696679436f6c756d6e46616d696c696573526571756573742e4d6f646966" .
            "69636174696f6e4203e041021aa5010a0c4d6f64696669636174696f6e12" .
            "0a0a02696418012001280912380a0663726561746518022001280b32262e" .
            "676f6f676c652e6269677461626c652e61646d696e2e76322e436f6c756d" .
            "6e46616d696c79480012380a0675706461746518032001280b32262e676f" .
            "6f676c652e6269677461626c652e61646d696e2e76322e436f6c756d6e46" .
            "616d696c794800120e0a0464726f70180420012808480042050a036d6f64" .
            "22560a1f47656e6572617465436f6e73697374656e6379546f6b656e5265" .
            "717565737412330a046e616d651801200128094225e04102fa411f0a1d62" .
            "69677461626c652e676f6f676c65617069732e636f6d2f5461626c65223d" .
            "0a2047656e6572617465436f6e73697374656e6379546f6b656e52657370" .
            "6f6e736512190a11636f6e73697374656e63795f746f6b656e1801200128" .
            "09226e0a17436865636b436f6e73697374656e6379526571756573741233" .
            "0a046e616d651801200128094225e04102fa411f0a1d6269677461626c65" .
            "2e676f6f676c65617069732e636f6d2f5461626c65121e0a11636f6e7369" .
            "7374656e63795f746f6b656e1802200128094203e04102222e0a18436865" .
            "636b436f6e73697374656e6379526573706f6e736512120a0a636f6e7369" .
            "7374656e741801200128082287010a14536e617073686f745461626c6552" .
            "657175657374120c0a046e616d65180120012809120f0a07636c75737465" .
            "7218022001280912130a0b736e617073686f745f69641803200128091226" .
            "0a0374746c18042001280b32192e676f6f676c652e70726f746f6275662e" .
            "4475726174696f6e12130a0b6465736372697074696f6e18052001280922" .
            "4c0a12476574536e617073686f745265717565737412360a046e616d6518" .
            "01200128094228e04102fa41220a206269677461626c652e676f6f676c65" .
            "617069732e636f6d2f536e617073686f7422760a144c697374536e617073" .
            "686f74735265717565737412370a06706172656e741801200128094227e0" .
            "4102fa41210a1f6269677461626c652e676f6f676c65617069732e636f6d" .
            "2f436c757374657212110a09706167655f73697a6518022001280512120a" .
            "0a706167655f746f6b656e18032001280922670a154c697374536e617073" .
            "686f7473526573706f6e736512350a09736e617073686f74731801200328" .
            "0b32222e676f6f676c652e6269677461626c652e61646d696e2e76322e53" .
            "6e617073686f7412170a0f6e6578745f706167655f746f6b656e18022001" .
            "2809224f0a1544656c657465536e617073686f745265717565737412360a" .
            "046e616d651801200128094228e04102fa41220a206269677461626c652e" .
            "676f6f676c65617069732e636f6d2f536e617073686f7422c4010a15536e" .
            "617073686f745461626c654d6574616461746112480a106f726967696e61" .
            "6c5f7265717565737418012001280b322e2e676f6f676c652e6269677461" .
            "626c652e61646d696e2e76322e536e617073686f745461626c6552657175" .
            "65737412300a0c726571756573745f74696d6518022001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d70122f0a0b66696e" .
            "6973685f74696d6518032001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7022d8010a1f4372656174655461626c654672" .
            "6f6d536e617073686f744d6574616461746112520a106f726967696e616c" .
            "5f7265717565737418012001280b32382e676f6f676c652e626967746162" .
            "6c652e61646d696e2e76322e4372656174655461626c6546726f6d536e61" .
            "7073686f745265717565737412300a0c726571756573745f74696d651802" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70122f0a0b66696e6973685f74696d6518032001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d7032e91b0a1242696774" .
            "61626c655461626c6541646d696e12ab010a0b4372656174655461626c65" .
            "122c2e676f6f676c652e6269677461626c652e61646d696e2e76322e4372" .
            "656174655461626c65526571756573741a1f2e676f6f676c652e62696774" .
            "61626c652e61646d696e2e76322e5461626c65224d82d3e493022f222a2f" .
            "76322f7b706172656e743d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a7d2f7461626c65733a012ada4115706172656e742c7461626c655f" .
            "69642c7461626c65128a020a174372656174655461626c6546726f6d536e" .
            "617073686f7412382e676f6f676c652e6269677461626c652e61646d696e" .
            "2e76322e4372656174655461626c6546726f6d536e617073686f74526571" .
            "756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572" .
            "6174696f6e22950182d3e4930242223d2f76322f7b706172656e743d7072" .
            "6f6a656374732f2a2f696e7374616e6365732f2a7d2f7461626c65733a63" .
            "726561746546726f6d536e617073686f743a012ada411f706172656e742c" .
            "7461626c655f69642c736f757263655f736e617073686f74ca41280a0554" .
            "61626c65121f4372656174655461626c6546726f6d536e617073686f744d" .
            "6574616461746112a4010a0a4c6973745461626c6573122b2e676f6f676c" .
            "652e6269677461626c652e61646d696e2e76322e4c6973745461626c6573" .
            "526571756573741a2c2e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e4c6973745461626c6573526573706f6e7365223b82d3e49302" .
            "2c122a2f76322f7b706172656e743d70726f6a656374732f2a2f696e7374" .
            "616e6365732f2a7d2f7461626c6573da4106706172656e741291010a0847" .
            "65745461626c6512292e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e4765745461626c65526571756573741a1f2e676f6f676c652e" .
            "6269677461626c652e61646d696e2e76322e5461626c65223982d3e49302" .
            "2c122a2f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e" .
            "6365732f2a2f7461626c65732f2a7dda41046e616d65128e010a0b44656c" .
            "6574655461626c65122c2e676f6f676c652e6269677461626c652e61646d" .
            "696e2e76322e44656c6574655461626c65526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479223982d3e493022c2a2a2f76" .
            "322f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a" .
            "2f7461626c65732f2a7dda41046e616d6512cf010a144d6f64696679436f" .
            "6c756d6e46616d696c69657312352e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e4d6f64696679436f6c756d6e46616d696c696573" .
            "526571756573741a1f2e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e5461626c65225f82d3e4930244223f2f76322f7b6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f" .
            "2a7d3a6d6f64696679436f6c756d6e46616d696c6965733a012ada41126e" .
            "616d652c6d6f64696669636174696f6e731299010a0c44726f70526f7752" .
            "616e6765122d2e676f6f676c652e6269677461626c652e61646d696e2e76" .
            "322e44726f70526f7752616e6765526571756573741a162e676f6f676c65" .
            "2e70726f746f6275662e456d707479224282d3e493023c22372f76322f7b" .
            "6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f7461" .
            "626c65732f2a7d3a64726f70526f7752616e67653a012a12e8010a184765" .
            "6e6572617465436f6e73697374656e6379546f6b656e12392e676f6f676c" .
            "652e6269677461626c652e61646d696e2e76322e47656e6572617465436f" .
            "6e73697374656e6379546f6b656e526571756573741a3a2e676f6f676c65" .
            "2e6269677461626c652e61646d696e2e76322e47656e6572617465436f6e" .
            "73697374656e6379546f6b656e526573706f6e7365225582d3e493024822" .
            "432f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f7461626c65732f2a7d3a67656e6572617465436f6e7369737465" .
            "6e6379546f6b656e3a012ada41046e616d6512da010a10436865636b436f" .
            "6e73697374656e637912312e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e436865636b436f6e73697374656e637952657175657374" .
            "1a322e676f6f676c652e6269677461626c652e61646d696e2e76322e4368" .
            "65636b436f6e73697374656e6379526573706f6e7365225f82d3e4930240" .
            "223b2f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e63" .
            "65732f2a2f7461626c65732f2a7d3a636865636b436f6e73697374656e63" .
            "793a012ada41166e616d652c636f6e73697374656e63795f746f6b656e12" .
            "ea010a0d536e617073686f745461626c65122e2e676f6f676c652e626967" .
            "7461626c652e61646d696e2e76322e536e617073686f745461626c655265" .
            "71756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065" .
            "726174696f6e22890182d3e493023822332f76322f7b6e616d653d70726f" .
            "6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d3a" .
            "736e617073686f743a012ada41246e616d652c636c75737465722c736e61" .
            "7073686f745f69642c6465736372697074696f6eca41210a08536e617073" .
            "686f741215536e617073686f745461626c654d6574616461746112a8010a" .
            "0b476574536e617073686f74122c2e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e476574536e617073686f74526571756573741a22" .
            "2e676f6f676c652e6269677461626c652e61646d696e2e76322e536e6170" .
            "73686f74224782d3e493023a12382f76322f7b6e616d653d70726f6a6563" .
            "74732f2a2f696e7374616e6365732f2a2f636c7573746572732f2a2f736e" .
            "617073686f74732f2a7dda41046e616d6512bb010a0d4c697374536e6170" .
            "73686f7473122e2e676f6f676c652e6269677461626c652e61646d696e2e" .
            "76322e4c697374536e617073686f7473526571756573741a2f2e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e76322e4c697374536e617073" .
            "686f7473526573706f6e7365224982d3e493023a12382f76322f7b706172" .
            "656e743d70726f6a656374732f2a2f696e7374616e6365732f2a2f636c75" .
            "73746572732f2a7d2f736e617073686f7473da4106706172656e7412a201" .
            "0a0e44656c657465536e617073686f74122f2e676f6f676c652e62696774" .
            "61626c652e61646d696e2e76322e44656c657465536e617073686f745265" .
            "71756573741a162e676f6f676c652e70726f746f6275662e456d70747922" .
            "4782d3e493023a2a382f76322f7b6e616d653d70726f6a656374732f2a2f" .
            "696e7374616e6365732f2a2f636c7573746572732f2a2f736e617073686f" .
            "74732f2a7dda41046e616d65129c010a0c47657449616d506f6c69637912" .
            "222e676f6f676c652e69616d2e76312e47657449616d506f6c6963795265" .
            "71756573741a152e676f6f676c652e69616d2e76312e506f6c6963792251" .
            "82d3e4930240223b2f76322f7b7265736f757263653d70726f6a65637473" .
            "2f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d3a6765744961" .
            "6d506f6c6963793a012ada41087265736f7572636512f3010a0c53657449" .
            "616d506f6c69637912222e676f6f676c652e69616d2e76312e5365744961" .
            "6d506f6c696379526571756573741a152e676f6f676c652e69616d2e7631" .
            "2e506f6c69637922a70182d3e493028e01223b2f76322f7b7265736f7572" .
            "63653d70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c" .
            "65732f2a7d3a73657449616d506f6c6963793a012a5a4c22472f76322f7b" .
            "7265736f757263653d70726f6a656374732f2a2f696e7374616e6365732f" .
            "2a2f636c7573746572732f2a2f6261636b7570732f2a7d3a73657449616d" .
            "506f6c6963793a012ada410f7265736f757263652c706f6c69637912a402" .
            "0a125465737449616d5065726d697373696f6e7312282e676f6f676c652e" .
            "69616d2e76312e5465737449616d5065726d697373696f6e735265717565" .
            "73741a292e676f6f676c652e69616d2e76312e5465737449616d5065726d" .
            "697373696f6e73526573706f6e736522b80182d3e493029a0122412f7632" .
            "2f7b7265736f757263653d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f7461626c65732f2a7d3a7465737449616d5065726d697373696f" .
            "6e733a012a5a52224d2f76322f7b7265736f757263653d70726f6a656374" .
            "732f2a2f696e7374616e6365732f2a2f636c7573746572732f2a2f626163" .
            "6b7570732f2a7d3a7465737449616d5065726d697373696f6e733a012ada" .
            "41147265736f757263652c7065726d697373696f6e731ade02ca411c6269" .
            "677461626c6561646d696e2e676f6f676c65617069732e636f6dd241bb02" .
            "68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574" .
            "682f6269677461626c652e61646d696e2c68747470733a2f2f7777772e67" .
            "6f6f676c65617069732e636f6d2f617574682f6269677461626c652e6164" .
            "6d696e2e7461626c652c68747470733a2f2f7777772e676f6f676c656170" .
            "69732e636f6d2f617574682f636c6f75642d6269677461626c652e61646d" .
            "696e2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f636c6f75642d6269677461626c652e61646d696e2e7461626c" .
            "652c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61" .
            "7574682f636c6f75642d706c6174666f726d2c68747470733a2f2f777777" .
            "2e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c61" .
            "74666f726d2e726561642d6f6e6c7942ba010a1c636f6d2e676f6f676c65" .
            "2e6269677461626c652e61646d696e2e763242174269677461626c655461" .
            "626c6541646d696e50726f746f50015a3d676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6269677461" .
            "626c652f61646d696e2f76323b61646d696eaa021e476f6f676c652e436c" .
            "6f75642e4269677461626c652e41646d696e2e5632ca021e476f6f676c65" .
            "5c436c6f75645c4269677461626c655c41646d696e5c5632620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}
