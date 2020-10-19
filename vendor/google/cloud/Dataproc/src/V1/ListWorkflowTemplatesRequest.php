<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list workflow templates in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListWorkflowTemplatesRequest</code>
 */
class ListWorkflowTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The "resource name" of the region, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The "resource name" of the region, as described
     *           in https://cloud.google.com/apis/design/resource_names of the form
     *           `projects/{project_id}/regions/{region}`
     *     @type int $page_size
     *           Optional. The maximum number of results to return in each response.
     *     @type string $page_token
     *           Optional. The page token, returned by a previous call, to request the
     *           next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The "resource name" of the region, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The "resource name" of the region, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

