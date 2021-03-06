<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Agents.RestoreAgent][google.cloud.dialogflow.v2.Agents.RestoreAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.RestoreAgentRequest</code>
 */
class RestoreAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to restore is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    protected $agent;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project that the agent to restore is associated with.
     *           Format: `projects/<Project ID>`.
     *     @type string $agent_uri
     *           The URI to a Google Cloud Storage file containing the agent to restore.
     *           Note: The URI must start with "gs://".
     *     @type string $agent_content
     *           The agent to restore.
     *           Example for how to restore an agent via the command line:
     *           <pre>curl \
     *             'https://dialogflow.googleapis.com/v2/projects/&lt;project_name&gt;/agent:restore\
     *              -X POST \
     *              -H 'Authorization: Bearer '$(gcloud auth application-default
     *              print-access-token) \
     *              -H 'Accept: application/json' \
     *              -H 'Content-Type: application/json' \
     *              --compressed \
     *              --data-binary "{
     *                  'agentContent': '$(cat &lt;agent zip file&gt; | base64 -w 0)'
     *              }"</pre>
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project that the agent to restore is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to restore is associated with.
     * Format: `projects/<Project ID>`.
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
     * The URI to a Google Cloud Storage file containing the agent to restore.
     * Note: The URI must start with "gs://".
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @return string
     */
    public function getAgentUri()
    {
        return $this->readOneof(2);
    }

    /**
     * The URI to a Google Cloud Storage file containing the agent to restore.
     * Note: The URI must start with "gs://".
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The agent to restore.
     * Example for how to restore an agent via the command line:
     * <pre>curl \
     *   'https://dialogflow.googleapis.com/v2/projects/&lt;project_name&gt;/agent:restore\
     *    -X POST \
     *    -H 'Authorization: Bearer '$(gcloud auth application-default
     *    print-access-token) \
     *    -H 'Accept: application/json' \
     *    -H 'Content-Type: application/json' \
     *    --compressed \
     *    --data-binary "{
     *        'agentContent': '$(cat &lt;agent zip file&gt; | base64 -w 0)'
     *    }"</pre>
     *
     * Generated from protobuf field <code>bytes agent_content = 3;</code>
     * @return string
     */
    public function getAgentContent()
    {
        return $this->readOneof(3);
    }

    /**
     * The agent to restore.
     * Example for how to restore an agent via the command line:
     * <pre>curl \
     *   'https://dialogflow.googleapis.com/v2/projects/&lt;project_name&gt;/agent:restore\
     *    -X POST \
     *    -H 'Authorization: Bearer '$(gcloud auth application-default
     *    print-access-token) \
     *    -H 'Accept: application/json' \
     *    -H 'Content-Type: application/json' \
     *    --compressed \
     *    --data-binary "{
     *        'agentContent': '$(cat &lt;agent zip file&gt; | base64 -w 0)'
     *    }"</pre>
     *
     * Generated from protobuf field <code>bytes agent_content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAgent()
    {
        return $this->whichOneof("agent");
    }

}

