<?php

include("src/CBOR/CBOREncoder.php");
include("src/CBOR/CBORExceptions.php");
include("src/CBOR/Types/CBORByteString.php");

class CBOREncoderTest extends PHPUnit_Framework_TestCase
{
    public function testEncodeDecode()
    {
        //target for encode
        $target = array(true, array("variable1" => 100000, "variable2" => "Hello, World!", "Hello!"), 0.234, 0, null, 590834290589032580);

        //encoded string
        $encoded_data = \CBOR\CBOREncoder::encode($target);

        //decode
        $decoded_variable = \CBOR\CBOREncoder::decode($encoded_data);
        $this->assertEquals($decoded_variable, $target);
    }
}
