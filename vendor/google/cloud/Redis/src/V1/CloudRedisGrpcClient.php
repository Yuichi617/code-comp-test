<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
//
namespace Google\Cloud\Redis\V1;

/**
 * Configures and manages Cloud Memorystore for Redis instances
 *
 * Google Cloud Memorystore for Redis v1
 *
 * The `redis.googleapis.com` service implements the Google Cloud Memorystore
 * for Redis API and defines the following resource model for managing Redis
 * instances:
 * * The service works with a collection of cloud projects, named: `/projects/*`
 * * Each project has a collection of available locations, named: `/locations/*`
 * * Each location has a collection of Redis instances, named: `/instances/*`
 * * As such, Redis instances are resources of the form:
 *   `/projects/{project_id}/locations/{location_id}/instances/{instance_id}`
 *
 * Note that location_id must be referring to a GCP `region`; for example:
 * * `projects/redpepper-1290/locations/us-central1/instances/my-redis`
 */
class CloudRedisGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists all Redis instances owned by a project in either the specified
     * location (region) or all locations.
     *
     * The location should have the following format:
     * * `projects/{project_id}/locations/{location_id}`
     *
     * If `location_id` is specified as `-` (wildcard), then all regions
     * available to the project are queried, and the results are aggregated.
     * @param \Google\Cloud\Redis\V1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Google\Cloud\Redis\V1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/ListInstances',
        $argument,
        ['\Google\Cloud\Redis\V1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the details of a specific Redis instance.
     * @param \Google\Cloud\Redis\V1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInstance(\Google\Cloud\Redis\V1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/GetInstance',
        $argument,
        ['\Google\Cloud\Redis\V1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a Redis instance based on the specified tier and memory size.
     *
     * By default, the instance is accessible from the project's
     * [default network](/compute/docs/networks-and-firewalls#networks).
     *
     * The creation is executed asynchronously and callers may check the returned
     * operation to track its progress. Once the operation is completed the Redis
     * instance will be fully functional. Completed longrunning.Operation will
     * contain the new instance object in the response field.
     *
     * The returned operation is automatically deleted after a few hours, so there
     * is no need to call DeleteOperation.
     * @param \Google\Cloud\Redis\V1\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstance(\Google\Cloud\Redis\V1\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/CreateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the metadata and configuration of a specific Redis instance.
     *
     * Completed longrunning.Operation will contain the new instance object
     * in the response field. The returned operation is automatically deleted
     * after a few hours, so there is no need to call DeleteOperation.
     * @param \Google\Cloud\Redis\V1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInstance(\Google\Cloud\Redis\V1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/UpdateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Failover the master role to current replica node against a specific
     * STANDARD tier redis instance.
     * @param \Google\Cloud\Redis\V1\FailoverInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FailoverInstance(\Google\Cloud\Redis\V1\FailoverInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/FailoverInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a specific Redis instance.  Instance stops serving and data is
     * deleted.
     * @param \Google\Cloud\Redis\V1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstance(\Google\Cloud\Redis\V1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.redis.v1.CloudRedis/DeleteInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
