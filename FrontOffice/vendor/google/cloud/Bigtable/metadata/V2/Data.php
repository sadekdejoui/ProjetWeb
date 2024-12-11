<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace GPBMetadata\Google\Bigtable\V2;

class Data
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Bigtable\V2\Types::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
google/bigtable/v2/data.protogoogle.bigtable.v2google/bigtable/v2/types.protogoogle/protobuf/timestamp.protogoogle/type/date.proto"@
Row
key (,
families (2.google.bigtable.v2.Family"C
Family
name (	+
columns (2.google.bigtable.v2.Column"D
Column
	qualifier (\'
cells (2.google.bigtable.v2.Cell"?
Cell
timestamp_micros (
value (
labels (	"�
Value&
type (2.google.bigtable.v2.Type
	raw_value (H 
raw_timestamp_micros	 (H 
bytes_value (H 
string_value (	H 
	int_value (H 

bool_value
 (H 
float_value (H 5
timestamp_value (2.google.protobuf.TimestampH \'

date_value (2.google.type.DateH 5
array_value (2.google.bigtable.v2.ArrayValueH B
kind"7

ArrayValue)
values (2.google.bigtable.v2.Value"�
RowRange
start_key_closed (H 
start_key_open (H 
end_key_open (H
end_key_closed (HB
	start_keyB	
end_key"L
RowSet
row_keys (0

row_ranges (2.google.bigtable.v2.RowRange"�
ColumnRange
family_name (	 
start_qualifier_closed (H 
start_qualifier_open (H 
end_qualifier_closed (H
end_qualifier_open (HB
start_qualifierB
end_qualifier"N
TimestampRange
start_timestamp_micros (
end_timestamp_micros ("�

ValueRange
start_value_closed (H 
start_value_open (H 
end_value_closed (H
end_value_open (HB
start_valueB
	end_value"�
	RowFilter4
chain (2#.google.bigtable.v2.RowFilter.ChainH >

interleave (2(.google.bigtable.v2.RowFilter.InterleaveH <
	condition (2\'.google.bigtable.v2.RowFilter.ConditionH 
sink (H 
pass_all_filter (H 
block_all_filter (H 
row_key_regex_filter (H 
row_sample_filter (H "
family_name_regex_filter (	H \'
column_qualifier_regex_filter (H >
column_range_filter (2.google.bigtable.v2.ColumnRangeH D
timestamp_range_filter (2".google.bigtable.v2.TimestampRangeH 
value_regex_filter	 (H <
value_range_filter (2.google.bigtable.v2.ValueRangeH %
cells_per_row_offset_filter
 (H $
cells_per_row_limit_filter (H \'
cells_per_column_limit_filter (H !
strip_value_transformer (H !
apply_label_transformer (	H 7
Chain.
filters (2.google.bigtable.v2.RowFilter<

Interleave.
filters (2.google.bigtable.v2.RowFilter�
	Condition7
predicate_filter (2.google.bigtable.v2.RowFilter2
true_filter (2.google.bigtable.v2.RowFilter3
false_filter (2.google.bigtable.v2.RowFilterB
filter"�
Mutation8
set_cell (2$.google.bigtable.v2.Mutation.SetCellH =
add_to_cell (2&.google.bigtable.v2.Mutation.AddToCellH A
merge_to_cell (2(.google.bigtable.v2.Mutation.MergeToCellH K
delete_from_column (2-.google.bigtable.v2.Mutation.DeleteFromColumnH K
delete_from_family (2-.google.bigtable.v2.Mutation.DeleteFromFamilyH E
delete_from_row (2*.google.bigtable.v2.Mutation.DeleteFromRowH a
SetCell
family_name (	
column_qualifier (
timestamp_micros (
value (�
	AddToCell
family_name (	3
column_qualifier (2.google.bigtable.v2.Value,
	timestamp (2.google.bigtable.v2.Value(
input (2.google.bigtable.v2.Value�
MergeToCell
family_name (	3
column_qualifier (2.google.bigtable.v2.Value,
	timestamp (2.google.bigtable.v2.Value(
input (2.google.bigtable.v2.Valuey
DeleteFromColumn
family_name (	
column_qualifier (6

time_range (2".google.bigtable.v2.TimestampRange\'
DeleteFromFamily
family_name (	
DeleteFromRowB

mutation"�
ReadModifyWriteRule
family_name (	
column_qualifier (
append_value (H 
increment_amount (H B
rule"B
StreamPartition/
	row_range (2.google.bigtable.v2.RowRange"W
StreamContinuationTokens;
tokens (2+.google.bigtable.v2.StreamContinuationToken"`
StreamContinuationToken6
	partition (2#.google.bigtable.v2.StreamPartition
token (	"
ProtoFormat"F
ColumnMetadata
name (	&
type (2.google.bigtable.v2.Type"B
ProtoSchema3
columns (2".google.bigtable.v2.ColumnMetadata"V
ResultSetMetadata7
proto_schema (2.google.bigtable.v2.ProtoSchemaH B
schema"6
	ProtoRows)
values (2.google.bigtable.v2.Value"$
ProtoRowsBatch

batch_data ("�
PartialResultSet>
proto_rows_batch (2".google.bigtable.v2.ProtoRowsBatchH 
resume_token (
estimated_batch_size (B
partial_rowsB�
com.google.bigtable.v2B	DataProtoPZ8cloud.google.com/go/bigtable/apiv2/bigtablepb;bigtablepb�Google.Cloud.Bigtable.V2�Google\\Cloud\\Bigtable\\V2�Google::Cloud::Bigtable::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

