<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/translation_details.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Migration\V2;

class TranslationDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/bigquery/migration/v2/translation_details.proto"google.cloud.bigquery.migration.v2"�
TranslationDetailsV
source_target_mapping (27.google.cloud.bigquery.migration.v2.SourceTargetMapping
target_base_uri (	Q
source_environment (25.google.cloud.bigquery.migration.v2.SourceEnvironment
target_return_literals (	
target_types (	"�
SourceTargetMappingC
source_spec (2..google.cloud.bigquery.migration.v2.SourceSpecC
target_spec (2..google.cloud.bigquery.migration.v2.TargetSpec"�

SourceSpec
base_uri (	H >
literal (2+.google.cloud.bigquery.migration.v2.LiteralH 
encoding (	B�AB
source"#

TargetSpec
relative_path (	"h
Literal
literal_string (	H 
literal_bytes (H 
relative_path (	B�AB
literal_data"n
SourceEnvironment
default_database (	
schema_search_path (	#
metadata_store_dataset (	B�AB�
&com.google.cloud.bigquery.migration.v2BTranslationDetailsProtoPZDcloud.google.com/go/bigquery/migration/apiv2/migrationpb;migrationpb�"Google.Cloud.BigQuery.Migration.V2�"Google\\Cloud\\BigQuery\\Migration\\V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

