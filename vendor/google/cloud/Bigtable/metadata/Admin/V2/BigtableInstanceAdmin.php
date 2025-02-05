<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class BigtableInstanceAdmin
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
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�D
6google/bigtable/admin/v2/bigtable_instance_admin.protogoogle.bigtable.admin.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/bigtable/admin/v2/instance.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateInstanceRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
instance_id (	B�A9
instance (2".google.bigtable.admin.v2.InstanceB�AT
clusters (2=.google.bigtable.admin.v2.CreateInstanceRequest.ClustersEntryB�AR
ClustersEntry
key (	0
value (2!.google.bigtable.admin.v2.Cluster:8"Q
GetInstanceRequest;
name (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance"o
ListInstancesRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

page_token (	"�
ListInstancesResponse5
	instances (2".google.bigtable.admin.v2.Instance
failed_locations (	
next_page_token (	"�
PartialUpdateInstanceRequest9
instance (2".google.bigtable.admin.v2.InstanceB�A4
update_mask (2.google.protobuf.FieldMaskB�A"T
DeleteInstanceRequest;
name (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance"�
CreateClusterRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance

cluster_id (	B�A7
cluster (2!.google.bigtable.admin.v2.ClusterB�A"O
GetClusterRequest:
name (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster"h
ListClustersRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance

page_token (	"~
ListClustersResponse3
clusters (2!.google.bigtable.admin.v2.Cluster
failed_locations (	
next_page_token (	"R
DeleteClusterRequest:
name (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster"�
CreateInstanceMetadataI
original_request (2/.google.bigtable.admin.v2.CreateInstanceRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
UpdateInstanceMetadataP
original_request (26.google.bigtable.admin.v2.PartialUpdateInstanceRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
CreateClusterMetadataH
original_request (2..google.bigtable.admin.v2.CreateClusterRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
UpdateClusterMetadata;
original_request (2!.google.bigtable.admin.v2.Cluster0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
PartialUpdateClusterMetadata0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.TimestampO
original_request (25.google.bigtable.admin.v2.PartialUpdateClusterRequest"�
PartialUpdateClusterRequest7
cluster (2!.google.bigtable.admin.v2.ClusterB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
CreateAppProfileRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
app_profile_id (	B�A>
app_profile (2$.google.bigtable.admin.v2.AppProfileB�A
ignore_warnings ("U
GetAppProfileRequest=
name (	B/�A�A)
\'bigtableadmin.googleapis.com/AppProfile"~
ListAppProfilesRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
	page_size (

page_token (	"�
ListAppProfilesResponse:
app_profiles (2$.google.bigtable.admin.v2.AppProfile
next_page_token (	
failed_locations (	"�
UpdateAppProfileRequest>
app_profile (2$.google.bigtable.admin.v2.AppProfileB�A4
update_mask (2.google.protobuf.FieldMaskB�A
ignore_warnings ("v
DeleteAppProfileRequest=
name (	B/�A�A)
\'bigtableadmin.googleapis.com/AppProfile
ignore_warnings (B�A"
UpdateAppProfileMetadata"�
ListHotTabletsRequest<
parent (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
	page_size (

page_token (	"k
ListHotTabletsResponse8
hot_tablets (2#.google.bigtable.admin.v2.HotTablet
next_page_token (	2�!
BigtableInstanceAdmin�
CreateInstance/.google.bigtable.admin.v2.CreateInstanceRequest.google.longrunning.Operation"x���&"!/v2/{parent=projects/*}/instances:*�A$parent,instance_id,instance,clusters�A"
InstanceCreateInstanceMetadata�
GetInstance,.google.bigtable.admin.v2.GetInstanceRequest".google.bigtable.admin.v2.Instance"0���#!/v2/{name=projects/*/instances/*}�Aname�
ListInstances..google.bigtable.admin.v2.ListInstancesRequest/.google.bigtable.admin.v2.ListInstancesResponse"2���#!/v2/{parent=projects/*}/instances�Aparent�
UpdateInstance".google.bigtable.admin.v2.Instance".google.bigtable.admin.v2.Instance",���&!/v2/{name=projects/*/instances/*}:*�
PartialUpdateInstance6.google.bigtable.admin.v2.PartialUpdateInstanceRequest.google.longrunning.Operation"x���62*/v2/{instance.name=projects/*/instances/*}:instance�Ainstance,update_mask�A"
InstanceUpdateInstanceMetadata�
DeleteInstance/.google.bigtable.admin.v2.DeleteInstanceRequest.google.protobuf.Empty"0���#*!/v2/{name=projects/*/instances/*}�Aname�
CreateCluster..google.bigtable.admin.v2.CreateClusterRequest.google.longrunning.Operation"|���7",/v2/{parent=projects/*/instances/*}/clusters:cluster�Aparent,cluster_id,cluster�A 
ClusterCreateClusterMetadata�

GetCluster+.google.bigtable.admin.v2.GetClusterRequest!.google.bigtable.admin.v2.Cluster";���.,/v2/{name=projects/*/instances/*/clusters/*}�Aname�
ListClusters-.google.bigtable.admin.v2.ListClustersRequest..google.bigtable.admin.v2.ListClustersResponse"=���.,/v2/{parent=projects/*/instances/*}/clusters�Aparent�
UpdateCluster!.google.bigtable.admin.v2.Cluster.google.longrunning.Operation"Z���1,/v2/{name=projects/*/instances/*/clusters/*}:*�A 
ClusterUpdateClusterMetadata�
PartialUpdateCluster5.google.bigtable.admin.v2.PartialUpdateClusterRequest.google.longrunning.Operation"����?24/v2/{cluster.name=projects/*/instances/*/clusters/*}:cluster�Acluster,update_mask�A\'
ClusterPartialUpdateClusterMetadata�
DeleteCluster..google.bigtable.admin.v2.DeleteClusterRequest.google.protobuf.Empty";���.*,/v2/{name=projects/*/instances/*/clusters/*}�Aname�
CreateAppProfile1.google.bigtable.admin.v2.CreateAppProfileRequest$.google.bigtable.admin.v2.AppProfile"h���>"//v2/{parent=projects/*/instances/*}/appProfiles:app_profile�A!parent,app_profile_id,app_profile�
GetAppProfile..google.bigtable.admin.v2.GetAppProfileRequest$.google.bigtable.admin.v2.AppProfile">���1//v2/{name=projects/*/instances/*/appProfiles/*}�Aname�
ListAppProfiles0.google.bigtable.admin.v2.ListAppProfilesRequest1.google.bigtable.admin.v2.ListAppProfilesResponse"@���1//v2/{parent=projects/*/instances/*}/appProfiles�Aparent�
UpdateAppProfile1.google.bigtable.admin.v2.UpdateAppProfileRequest.google.longrunning.Operation"����J2;/v2/{app_profile.name=projects/*/instances/*/appProfiles/*}:app_profile�Aapp_profile,update_mask�A&

AppProfileUpdateAppProfileMetadata�
DeleteAppProfile1.google.bigtable.admin.v2.DeleteAppProfileRequest.google.protobuf.Empty">���1*//v2/{name=projects/*/instances/*/appProfiles/*}�Aname�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"H���7"2/v2/{resource=projects/*/instances/*}:getIamPolicy:*�Aresource�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"O���7"2/v2/{resource=projects/*/instances/*}:setIamPolicy:*�Aresource,policy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"Z���="8/v2/{resource=projects/*/instances/*}:testIamPermissions:*�Aresource,permissions�
ListHotTablets/.google.bigtable.admin.v2.ListHotTabletsRequest0.google.bigtable.admin.v2.ListHotTabletsResponse"J���;9/v2/{parent=projects/*/instances/*/clusters/*}/hotTablets�Aparent��Abigtableadmin.googleapis.com�A�https://www.googleapis.com/auth/bigtable.admin,https://www.googleapis.com/auth/bigtable.admin.cluster,https://www.googleapis.com/auth/bigtable.admin.instance,https://www.googleapis.com/auth/cloud-bigtable.admin,https://www.googleapis.com/auth/cloud-bigtable.admin.cluster,https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
com.google.bigtable.admin.v2BBigtableInstanceAdminProtoPZ=google.golang.org/genproto/googleapis/bigtable/admin/v2;admin�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

