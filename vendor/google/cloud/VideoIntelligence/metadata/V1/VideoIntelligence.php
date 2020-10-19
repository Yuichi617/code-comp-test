<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace GPBMetadata\Google\Cloud\Videointelligence\V1;

class VideoIntelligence
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae1340a3a676f6f676c652f636c6f75642f766964656f696e74656c6c69" .
            "67656e63652f76312f766964656f5f696e74656c6c6967656e63652e7072" .
            "6f746f1221676f6f676c652e636c6f75642e766964656f696e74656c6c69" .
            "67656e63652e76311a23676f6f676c652f6c6f6e6772756e6e696e672f6f" .
            "7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f746f62" .
            "75662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f72" .
            "70632f7374617475732e70726f746f22ef010a14416e6e6f746174655669" .
            "64656f5265717565737412110a09696e7075745f75726918012001280912" .
            "150a0d696e7075745f636f6e74656e7418062001280c123c0a0866656174" .
            "7572657318022003280e322a2e676f6f676c652e636c6f75642e76696465" .
            "6f696e74656c6c6967656e63652e76312e4665617475726512460a0d7669" .
            "64656f5f636f6e7465787418032001280b322f2e676f6f676c652e636c6f" .
            "75642e766964656f696e74656c6c6967656e63652e76312e566964656f43" .
            "6f6e7465787412120a0a6f75747075745f75726918042001280912130a0b" .
            "6c6f636174696f6e5f6964180520012809228d050a0c566964656f436f6e" .
            "7465787412410a087365676d656e747318012003280b322f2e676f6f676c" .
            "652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e56" .
            "6964656f5365676d656e7412570a166c6162656c5f646574656374696f6e" .
            "5f636f6e66696718022001280b32372e676f6f676c652e636c6f75642e76" .
            "6964656f696e74656c6c6967656e63652e76312e4c6162656c4465746563" .
            "74696f6e436f6e66696712620a1c73686f745f6368616e67655f64657465" .
            "6374696f6e5f636f6e66696718032001280b323c2e676f6f676c652e636c" .
            "6f75642e766964656f696e74656c6c6967656e63652e76312e53686f7443" .
            "68616e6765446574656374696f6e436f6e666967126c0a216578706c6963" .
            "69745f636f6e74656e745f646574656374696f6e5f636f6e666967180420" .
            "01280b32412e676f6f676c652e636c6f75642e766964656f696e74656c6c" .
            "6967656e63652e76312e4578706c69636974436f6e74656e744465746563" .
            "74696f6e436f6e66696712550a15666163655f646574656374696f6e5f63" .
            "6f6e66696718052001280b32362e676f6f676c652e636c6f75642e766964" .
            "656f696e74656c6c6967656e63652e76312e46616365446574656374696f" .
            "6e436f6e66696712610a1b7370656563685f7472616e736372697074696f" .
            "6e5f636f6e66696718062001280b323c2e676f6f676c652e636c6f75642e" .
            "766964656f696e74656c6c6967656e63652e76312e537065656368547261" .
            "6e736372697074696f6e436f6e66696712550a15746578745f6465746563" .
            "74696f6e5f636f6e66696718082001280b32362e676f6f676c652e636c6f" .
            "75642e766964656f696e74656c6c6967656e63652e76312e546578744465" .
            "74656374696f6e436f6e6669672295010a144c6162656c44657465637469" .
            "6f6e436f6e66696712530a146c6162656c5f646574656374696f6e5f6d6f" .
            "646518012001280e32352e676f6f676c652e636c6f75642e766964656f69" .
            "6e74656c6c6967656e63652e76312e4c6162656c446574656374696f6e4d" .
            "6f646512190a1173746174696f6e6172795f63616d657261180220012808" .
            "120d0a056d6f64656c180320012809222a0a1953686f744368616e676544" .
            "6574656374696f6e436f6e666967120d0a056d6f64656c18012001280922" .
            "2f0a1e4578706c69636974436f6e74656e74446574656374696f6e436f6e" .
            "666967120d0a056d6f64656c18012001280922440a134661636544657465" .
            "6374696f6e436f6e666967120d0a056d6f64656c180120012809121e0a16" .
            "696e636c7564655f626f756e64696e675f626f786573180220012808222d" .
            "0a1354657874446574656374696f6e436f6e66696712160a0e6c616e6775" .
            "6167655f68696e747318012003280922780a0c566964656f5365676d656e" .
            "7412340a1173746172745f74696d655f6f666673657418012001280b3219" .
            "2e676f6f676c652e70726f746f6275662e4475726174696f6e12320a0f65" .
            "6e645f74696d655f6f666673657418022001280b32192e676f6f676c652e" .
            "70726f746f6275662e4475726174696f6e22640a0c4c6162656c5365676d" .
            "656e7412400a077365676d656e7418012001280b322f2e676f6f676c652e" .
            "636c6f75642e766964656f696e74656c6c6967656e63652e76312e566964" .
            "656f5365676d656e7412120a0a636f6e666964656e636518022001280222" .
            "500a0a4c6162656c4672616d65122e0a0b74696d655f6f66667365741801" .
            "2001280b32192e676f6f676c652e70726f746f6275662e4475726174696f" .
            "6e12120a0a636f6e666964656e636518022001280222470a06456e746974" .
            "7912110a09656e746974795f696418012001280912130a0b646573637269" .
            "7074696f6e18022001280912150a0d6c616e67756167655f636f64651803" .
            "200128092294020a0f4c6162656c416e6e6f746174696f6e12390a06656e" .
            "7469747918012001280b32292e676f6f676c652e636c6f75642e76696465" .
            "6f696e74656c6c6967656e63652e76312e456e7469747912440a11636174" .
            "65676f72795f656e74697469657318022003280b32292e676f6f676c652e" .
            "636c6f75642e766964656f696e74656c6c6967656e63652e76312e456e74" .
            "69747912410a087365676d656e747318032003280b322f2e676f6f676c65" .
            "2e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4c61" .
            "62656c5365676d656e74123d0a066672616d657318042003280b322d2e67" .
            "6f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63652e" .
            "76312e4c6162656c4672616d652295010a144578706c69636974436f6e74" .
            "656e744672616d65122e0a0b74696d655f6f666673657418012001280b32" .
            "192e676f6f676c652e70726f746f6275662e4475726174696f6e124d0a16" .
            "706f726e6f6772617068795f6c696b656c69686f6f6418022001280e322d" .
            "2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967656e63" .
            "652e76312e4c696b656c69686f6f6422640a194578706c69636974436f6e" .
            "74656e74416e6e6f746174696f6e12470a066672616d657318012003280b" .
            "32372e676f6f676c652e636c6f75642e766964656f696e74656c6c696765" .
            "6e63652e76312e4578706c69636974436f6e74656e744672616d6522510a" .
            "154e6f726d616c697a6564426f756e64696e67426f78120c0a046c656674" .
            "180120012802120b0a03746f70180220012802120d0a0572696768741803" .
            "20012802120e0a06626f74746f6d180420012802224f0a0b466163655365" .
            "676d656e7412400a077365676d656e7418012001280b322f2e676f6f676c" .
            "652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e56" .
            "6964656f5365676d656e742298010a09466163654672616d65125b0a196e" .
            "6f726d616c697a65645f626f756e64696e675f626f78657318012003280b" .
            "32382e676f6f676c652e636c6f75642e766964656f696e74656c6c696765" .
            "6e63652e76312e4e6f726d616c697a6564426f756e64696e67426f78122e" .
            "0a0b74696d655f6f666673657418022001280b32192e676f6f676c652e70" .
            "726f746f6275662e4475726174696f6e22a3010a0e46616365416e6e6f74" .
            "6174696f6e12110a097468756d626e61696c18012001280c12400a087365" .
            "676d656e747318022003280b322e2e676f6f676c652e636c6f75642e7669" .
            "64656f696e74656c6c6967656e63652e76312e466163655365676d656e74" .
            "123c0a066672616d657318032003280b322c2e676f6f676c652e636c6f75" .
            "642e766964656f696e74656c6c6967656e63652e76312e46616365467261" .
            "6d6522be060a16566964656f416e6e6f746174696f6e526573756c747312" .
            "110a09696e7075745f75726918012001280912550a197365676d656e745f" .
            "6c6162656c5f616e6e6f746174696f6e7318022003280b32322e676f6f67" .
            "6c652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e" .
            "4c6162656c416e6e6f746174696f6e12520a1673686f745f6c6162656c5f" .
            "616e6e6f746174696f6e7318032003280b32322e676f6f676c652e636c6f" .
            "75642e766964656f696e74656c6c6967656e63652e76312e4c6162656c41" .
            "6e6e6f746174696f6e12530a176672616d655f6c6162656c5f616e6e6f74" .
            "6174696f6e7318042003280b32322e676f6f676c652e636c6f75642e7669" .
            "64656f696e74656c6c6967656e63652e76312e4c6162656c416e6e6f7461" .
            "74696f6e124b0a10666163655f616e6e6f746174696f6e7318052003280b" .
            "32312e676f6f676c652e636c6f75642e766964656f696e74656c6c696765" .
            "6e63652e76312e46616365416e6e6f746174696f6e12490a1073686f745f" .
            "616e6e6f746174696f6e7318062003280b322f2e676f6f676c652e636c6f" .
            "75642e766964656f696e74656c6c6967656e63652e76312e566964656f53" .
            "65676d656e7412590a136578706c696369745f616e6e6f746174696f6e18" .
            "072001280b323c2e676f6f676c652e636c6f75642e766964656f696e7465" .
            "6c6c6967656e63652e76312e4578706c69636974436f6e74656e74416e6e" .
            "6f746174696f6e12550a157370656563685f7472616e736372697074696f" .
            "6e73180b2003280b32362e676f6f676c652e636c6f75642e766964656f69" .
            "6e74656c6c6967656e63652e76312e5370656563685472616e7363726970" .
            "74696f6e124b0a10746578745f616e6e6f746174696f6e73180c2003280b" .
            "32312e676f6f676c652e636c6f75642e766964656f696e74656c6c696765" .
            "6e63652e76312e54657874416e6e6f746174696f6e12570a126f626a6563" .
            "745f616e6e6f746174696f6e73180e2003280b323b2e676f6f676c652e63" .
            "6c6f75642e766964656f696e74656c6c6967656e63652e76312e4f626a65" .
            "6374547261636b696e67416e6e6f746174696f6e12210a056572726f7218" .
            "092001280b32122e676f6f676c652e7270632e537461747573226e0a1541" .
            "6e6e6f74617465566964656f526573706f6e736512550a12616e6e6f7461" .
            "74696f6e5f726573756c747318012003280b32392e676f6f676c652e636c" .
            "6f75642e766964656f696e74656c6c6967656e63652e76312e566964656f" .
            "416e6e6f746174696f6e526573756c747322a7010a17566964656f416e6e" .
            "6f746174696f6e50726f677265737312110a09696e7075745f7572691801" .
            "2001280912180a1070726f67726573735f70657263656e74180220012805" .
            "122e0a0a73746172745f74696d6518032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70122f0a0b7570646174655f74" .
            "696d6518042001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7022700a15416e6e6f74617465566964656f50726f677265" .
            "737312570a13616e6e6f746174696f6e5f70726f67726573731801200328" .
            "0b323a2e676f6f676c652e636c6f75642e766964656f696e74656c6c6967" .
            "656e63652e76312e566964656f416e6e6f746174696f6e50726f67726573" .
            "7322d4020a195370656563685472616e736372697074696f6e436f6e6669" .
            "6712150a0d6c616e67756167655f636f646518012001280912180a106d61" .
            "785f616c7465726e61746976657318022001280512180a1066696c746572" .
            "5f70726f66616e69747918032001280812490a0f7370656563685f636f6e" .
            "746578747318042003280b32302e676f6f676c652e636c6f75642e766964" .
            "656f696e74656c6c6967656e63652e76312e537065656368436f6e746578" .
            "7412240a1c656e61626c655f6175746f6d617469635f70756e6374756174" .
            "696f6e18052001280812140a0c617564696f5f747261636b731806200328" .
            "0512220a1a656e61626c655f737065616b65725f64696172697a6174696f" .
            "6e18072001280812210a1964696172697a6174696f6e5f737065616b6572" .
            "5f636f756e74180820012805121e0a16656e61626c655f776f72645f636f" .
            "6e666964656e636518092001280822200a0d537065656368436f6e746578" .
            "74120f0a07706872617365731801200328092283010a1353706565636854" .
            "72616e736372697074696f6e12550a0c616c7465726e6174697665731801" .
            "2003280b323f2e676f6f676c652e636c6f75642e766964656f696e74656c" .
            "6c6967656e63652e76312e5370656563685265636f676e6974696f6e416c" .
            "7465726e617469766512150a0d6c616e67756167655f636f646518022001" .
            "28092282010a1c5370656563685265636f676e6974696f6e416c7465726e" .
            "617469766512120a0a7472616e73637269707418012001280912120a0a63" .
            "6f6e666964656e6365180220012802123a0a05776f72647318032003280b" .
            "322b2e676f6f676c652e636c6f75642e766964656f696e74656c6c696765" .
            "6e63652e76312e576f7264496e666f229d010a08576f7264496e666f122d" .
            "0a0a73746172745f74696d6518012001280b32192e676f6f676c652e7072" .
            "6f746f6275662e4475726174696f6e122b0a08656e645f74696d65180220" .
            "01280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e" .
            "120c0a04776f726418032001280912120a0a636f6e666964656e63651804" .
            "2001280212130a0b737065616b65725f74616718052001280522280a104e" .
            "6f726d616c697a656456657274657812090a017818012001280212090a01" .
            "79180220012802225f0a164e6f726d616c697a6564426f756e64696e6750" .
            "6f6c7912450a08766572746963657318012003280b32332e676f6f676c65" .
            "2e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4e6f" .
            "726d616c697a656456657274657822a1010a0b546578745365676d656e74" .
            "12400a077365676d656e7418012001280b322f2e676f6f676c652e636c6f" .
            "75642e766964656f696e74656c6c6967656e63652e76312e566964656f53" .
            "65676d656e7412120a0a636f6e666964656e6365180220012802123c0a06" .
            "6672616d657318032003280b322c2e676f6f676c652e636c6f75642e7669" .
            "64656f696e74656c6c6967656e63652e76312e546578744672616d652294" .
            "010a09546578744672616d6512570a14726f74617465645f626f756e6469" .
            "6e675f626f7818012001280b32392e676f6f676c652e636c6f75642e7669" .
            "64656f696e74656c6c6967656e63652e76312e4e6f726d616c697a656442" .
            "6f756e64696e67506f6c79122e0a0b74696d655f6f666673657418022001" .
            "280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e22" .
            "600a0e54657874416e6e6f746174696f6e120c0a04746578741801200128" .
            "0912400a087365676d656e747318022003280b322e2e676f6f676c652e63" .
            "6c6f75642e766964656f696e74656c6c6967656e63652e76312e54657874" .
            "5365676d656e7422a0010a134f626a656374547261636b696e674672616d" .
            "6512590a176e6f726d616c697a65645f626f756e64696e675f626f781801" .
            "2001280b32382e676f6f676c652e636c6f75642e766964656f696e74656c" .
            "6c6967656e63652e76312e4e6f726d616c697a6564426f756e64696e6742" .
            "6f78122e0a0b74696d655f6f666673657418022001280b32192e676f6f67" .
            "6c652e70726f746f6275662e4475726174696f6e2297020a184f626a6563" .
            "74547261636b696e67416e6e6f746174696f6e12420a077365676d656e74" .
            "18032001280b322f2e676f6f676c652e636c6f75642e766964656f696e74" .
            "656c6c6967656e63652e76312e566964656f5365676d656e74480012120a" .
            "08747261636b5f6964180520012803480012390a06656e74697479180120" .
            "01280b32292e676f6f676c652e636c6f75642e766964656f696e74656c6c" .
            "6967656e63652e76312e456e7469747912120a0a636f6e666964656e6365" .
            "18042001280212460a066672616d657318022003280b32362e676f6f676c" .
            "652e636c6f75642e766964656f696e74656c6c6967656e63652e76312e4f" .
            "626a656374547261636b696e674672616d65420c0a0a747261636b5f696e" .
            "666f2ac9010a074665617475726512170a13464541545552455f554e5350" .
            "45434946494544100012130a0f4c4142454c5f444554454354494f4e1001" .
            "12190a1553484f545f4348414e47455f444554454354494f4e1002121e0a" .
            "1a4558504c494349545f434f4e54454e545f444554454354494f4e100312" .
            "120a0e464143455f444554454354494f4e100412180a145350454543485f" .
            "5452414e534352495054494f4e100612120a0e544558545f444554454354" .
            "494f4e100712130a0f4f424a4543545f545241434b494e4710092a720a12" .
            "4c6162656c446574656374696f6e4d6f646512240a204c4142454c5f4445" .
            "54454354494f4e5f4d4f44455f554e5350454349464945441000120d0a09" .
            "53484f545f4d4f44451001120e0a0a4652414d455f4d4f4445100212170a" .
            "1353484f545f414e445f4652414d455f4d4f444510032a740a0a4c696b65" .
            "6c69686f6f64121a0a164c494b454c49484f4f445f554e53504543494649" .
            "4544100012110a0d564552595f554e4c494b454c591001120c0a08554e4c" .
            "494b454c591002120c0a08504f535349424c451003120a0a064c494b454c" .
            "591004120f0a0b564552595f4c494b454c59100532a4010a18566964656f" .
            "496e74656c6c6967656e6365536572766963651287010a0d416e6e6f7461" .
            "7465566964656f12372e676f6f676c652e636c6f75642e766964656f696e" .
            "74656c6c6967656e63652e76312e416e6e6f74617465566964656f526571" .
            "756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572" .
            "6174696f6e221e82d3e493021822132f76312f766964656f733a616e6e6f" .
            "746174653a012a42e4010a25636f6d2e676f6f676c652e636c6f75642e76" .
            "6964656f696e74656c6c6967656e63652e7631421d566964656f496e7465" .
            "6c6c6967656e63655365727669636550726f746f50015a52676f6f676c65" .
            "2e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069" .
            "732f636c6f75642f766964656f696e74656c6c6967656e63652f76313b76" .
            "6964656f696e74656c6c6967656e6365aa0221476f6f676c652e436c6f75" .
            "642e566964656f496e74656c6c6967656e63652e5631ca0221476f6f676c" .
            "655c436c6f75645c566964656f496e74656c6c6967656e63655c56316206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

