<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="permission", uniqueConstraints={@ORM\UniqueConstraint(name="permissionname_UNIQUE", columns={"permissionname"})})
 * @ORM\Entity
 */
class Permission
{
    /**
     * @var bool
     *
     * @ORM\Column(name="idpermission", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpermission;

    /**
     * @var string
     *
     * @ORM\Column(name="permissionname", type="string", length=45, nullable=false)
     */
    private $permissionname;

    /**
     * @var bool
     *
     * @ORM\Column(name="permissionrole", type="boolean", nullable=false, options={"comment"="0 => admin
1 => contributor
2 => commentator"})
     */
    private $permissionrole;


}
