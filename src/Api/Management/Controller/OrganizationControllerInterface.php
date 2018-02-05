<?php

namespace Apigee\Edge\Api\Management\Controller;

use Apigee\Edge\Controller\EntityCrudOperationsControllerInterface;
use Apigee\Edge\Controller\NonCpsListingEntityControllerInterface;

/**
 * Interface OrganizationControllerInterface.
 *
 * Describes methods available on organizations.
 *
 * @see https://docs.apigee.com/api/organizations-0
 *
 * TODO
 * @see https://docs.apigee.com/management/apis/put/organizations/%7Borg_name%7D
 * @see https://docs.apigee.com/management/apis/get/organizations/%7Borg_name%7D/deployments-0
 * @see https://docs.apigee.com/management/apis/get/organizations/%7Borg_name%7D/pods
 * @see https://docs.apigee.com/management/apis/post/organizations/%7Borg_name%7D/pods
 * @see https://docs.apigee.com/management/apis/post/organizations/%7Borg_name%7D/pods-0
 *
 * @author Dezső Biczó <mxr576@gmail.com>
 */
interface OrganizationControllerInterface extends
    EntityCrudOperationsControllerInterface,
    NonCpsListingEntityControllerInterface
{
}
