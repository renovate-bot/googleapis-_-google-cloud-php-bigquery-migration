<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/translation_details.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents one path to the location that holds source data.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.SourceSpec</code>
 */
class SourceSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The optional field to specify the encoding of the sql bytes.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encoding = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_uri
     *           The base URI for all files to be read in as sources for translation.
     *     @type \Google\Cloud\BigQuery\Migration\V2\Literal $literal
     *           Source literal.
     *     @type string $encoding
     *           Optional. The optional field to specify the encoding of the sql bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\TranslationDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The base URI for all files to be read in as sources for translation.
     *
     * Generated from protobuf field <code>string base_uri = 1;</code>
     * @return string
     */
    public function getBaseUri()
    {
        return $this->readOneof(1);
    }

    public function hasBaseUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The base URI for all files to be read in as sources for translation.
     *
     * Generated from protobuf field <code>string base_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Source literal.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.Literal literal = 2;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\Literal|null
     */
    public function getLiteral()
    {
        return $this->readOneof(2);
    }

    public function hasLiteral()
    {
        return $this->hasOneof(2);
    }

    /**
     * Source literal.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.Literal literal = 2;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\Literal $var
     * @return $this
     */
    public function setLiteral($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\Literal::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. The optional field to specify the encoding of the sql bytes.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Optional. The optional field to specify the encoding of the sql bytes.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
