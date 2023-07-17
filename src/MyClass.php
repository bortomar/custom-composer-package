<?php
namespace Bortomar\CustomPackage;


/**
 * This class handle the request to GitHub API only for get user information
 */
class MyClass
{
    /**
     * Get user profile
     * @return string
     */
    public function getMessage()
    {
        return 'Hi from ' + self::class;
    }
}
