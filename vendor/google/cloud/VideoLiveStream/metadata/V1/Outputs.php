<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace GPBMetadata\Google\Cloud\Video\Livestream\V1;

class Outputs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/video/livestream/v1/outputs.proto google.cloud.video.livestream.v1google/api/field_behavior.protogoogle/protobuf/duration.proto"�
ElementaryStream
key (	E
video_stream (2-.google.cloud.video.livestream.v1.VideoStreamH E
audio_stream (2-.google.cloud.video.livestream.v1.AudioStreamH C
text_stream (2,.google.cloud.video.livestream.v1.TextStreamH B
elementary_stream"�
	MuxStream
key (	
	container (	
elementary_streams (	K
segment_settings (21.google.cloud.video.livestream.v1.SegmentSettings"�
Manifest
	file_name (	J
type (27.google.cloud.video.livestream.v1.Manifest.ManifestTypeB�A
mux_streams (	B�A
max_segment_count (8
segment_keep_duration (2.google.protobuf.Duration"@
ManifestType
MANIFEST_TYPE_UNSPECIFIED 
HLS
DASH"�
SpriteSheet
format (	
file_prefix (	B�A 
sprite_width_pixels (B�A!
sprite_height_pixels (B�A
column_count (
	row_count (+
interval (2.google.protobuf.Duration
quality ("�
PreprocessingConfigH
crop (2:.google.cloud.video.livestream.v1.PreprocessingConfig.CropF
pad (29.google.cloud.video.livestream.v1.PreprocessingConfig.Pad\\
Crop

top_pixels (
bottom_pixels (
left_pixels (
right_pixels ([
Pad

top_pixels (
bottom_pixels (
left_pixels (
right_pixels ("�
VideoStreamO
h264 (2?.google.cloud.video.livestream.v1.VideoStream.H264CodecSettingsH �
H264CodecSettings
width_pixels (
height_pixels (

frame_rate (B�A
bitrate_bps (B�A
allow_open_gop (
gop_frame_count (H 1
gop_duration (2.google.protobuf.DurationH 
vbv_size_bits	 (
vbv_fullness_bits
 (
entropy_coder (	
	b_pyramid (
b_frame_count (
aq_strength (
profile (	
tune (	B

gop_modeB
codec_settings"�
AudioStream
transmux (
codec (	
bitrate_bps (B�A
channel_count (
channel_layout (	K
mapping (2:.google.cloud.video.livestream.v1.AudioStream.AudioMapping
sample_rate_hertz (y
AudioMapping
	input_key (	B�A
input_track (B�A
input_channel (B�A
output_channel (B�A" 

TextStream
codec (	B�A"F
SegmentSettings3
segment_duration (2.google.protobuf.DurationB�
$com.google.cloud.video.livestream.v1BOutputsProtoPZJgoogle.golang.org/genproto/googleapis/cloud/video/livestream/v1;livestream� Google.Cloud.Video.LiveStream.V1� Google\\Cloud\\Video\\LiveStream\\V1�$Google::Cloud::Video::LiveStream::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

