<?php
/**
* Model User
* 
* Representation of data about users
*/
use Zizaco\Entrust\HasRole;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

/**
 * Class User
 *
 * Class representing users in database, using Zizaco/Entrust and Zizaco/Confide
 */
class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;
	use HasRole;
}