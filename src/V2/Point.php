<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_metrics.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single data point in a time series.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.Point</code>
 */
class Point extends \Google\Protobuf\Internal\Message
{
    /**
     * The time interval to which the data point applies.  For `GAUGE` metrics,
     * the start time does not need to be supplied, but if it is supplied, it must
     * equal the end time.  For `DELTA` metrics, the start and end time should
     * specify a non-zero interval, with subsequent points specifying contiguous
     * and non-overlapping intervals.  For `CUMULATIVE` metrics, the start and end
     * time should specify a non-zero interval, with subsequent points specifying
     * the same start time and increasing end times, until an event resets the
     * cumulative value to zero and sets a new start time for the following
     * points.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TimeInterval interval = 1;</code>
     */
    protected $interval = null;
    /**
     * The value of the data point.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TypedValue value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Migration\V2\TimeInterval $interval
     *           The time interval to which the data point applies.  For `GAUGE` metrics,
     *           the start time does not need to be supplied, but if it is supplied, it must
     *           equal the end time.  For `DELTA` metrics, the start and end time should
     *           specify a non-zero interval, with subsequent points specifying contiguous
     *           and non-overlapping intervals.  For `CUMULATIVE` metrics, the start and end
     *           time should specify a non-zero interval, with subsequent points specifying
     *           the same start time and increasing end times, until an event resets the
     *           cumulative value to zero and sets a new start time for the following
     *           points.
     *     @type \Google\Cloud\BigQuery\Migration\V2\TypedValue $value
     *           The value of the data point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationMetrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The time interval to which the data point applies.  For `GAUGE` metrics,
     * the start time does not need to be supplied, but if it is supplied, it must
     * equal the end time.  For `DELTA` metrics, the start and end time should
     * specify a non-zero interval, with subsequent points specifying contiguous
     * and non-overlapping intervals.  For `CUMULATIVE` metrics, the start and end
     * time should specify a non-zero interval, with subsequent points specifying
     * the same start time and increasing end times, until an event resets the
     * cumulative value to zero and sets a new start time for the following
     * points.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TimeInterval interval = 1;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TimeInterval|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * The time interval to which the data point applies.  For `GAUGE` metrics,
     * the start time does not need to be supplied, but if it is supplied, it must
     * equal the end time.  For `DELTA` metrics, the start and end time should
     * specify a non-zero interval, with subsequent points specifying contiguous
     * and non-overlapping intervals.  For `CUMULATIVE` metrics, the start and end
     * time should specify a non-zero interval, with subsequent points specifying
     * the same start time and increasing end times, until an event resets the
     * cumulative value to zero and sets a new start time for the following
     * points.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TimeInterval interval = 1;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TimeInterval $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TimeInterval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * The value of the data point.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TypedValue value = 2;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TypedValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * The value of the data point.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TypedValue value = 2;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TypedValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TypedValue::class);
        $this->value = $var;

        return $this;
    }

}

