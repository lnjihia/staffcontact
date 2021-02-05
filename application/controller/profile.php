<?php

/**
 * Class Profile
 *
 * Display user profile information upon successful log in
 */
class Profile extends Controller
{
    /**
     * PAGE: index
     * Display information about the user
     */
    public function index()
    {
        // unique title of the page that will be displayed on the title bar
        $pageTitle = 'User Profile';

        require APP . 'view/profile/register.php';
    }
}
