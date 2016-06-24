<?php
function validate_update_employee(array $clean, array $raw)
{
    // Instantiate validation variable
    $return = array();
    $return['valid'] = true;
    $return['error'] = array();
    
    // Validate department
    if (empty($raw['department'])) {
        $return['valid'] = false;
        $return['error'][] = 'Department is missing';
    }
    if ($clean['department'] != $raw['department']) {
        $return['valid'] = false;
        $return['error'][] = 'Department contains illegal characters';
    }
    // Validate first name
    if (empty($raw['first_name'])) {
        $return['valid'] = false;
        $return['error'][] = 'First name is missing';
    }
    if ($clean['first_name'] != $raw['first_name']) {
        $return['valid'] = false;
        $return['error'][] = 'First name contains illegal characters';
    }
    // Validate middle name
    if ($clean['middle_name'] != $raw['middle_name']) {
        $return['valid'] = false;
        $return['error'][] = 'Middle name contains illegal characters';
    }
    // Validate last name
    if (empty($raw['last_name'])) {
        $return['valid'] = false;
        $return['error'][] = 'Last name is missing';
    }
    if ($clean['last_name'] != $raw['last_name']) {
        $return['valid'] = false;
        $return['error'][] = 'Last name contains illegal characters';
    }
    // Validate username
    if (empty($raw['username'])) {
        $return['valid'] = false;
        $return['error'][] = 'Username is missing';
    }
    if ($clean['username'] != $raw['username']) {
        $return['valid'] = false;
        $return['error'][] = 'Username contains illegal characters';
    }
    // Validate password
    if (empty($raw['password'])) {
        $return['valid'] = false;
        $return['error'][] = 'Password is missing';
    }
    if ($clean['password'] != $raw['password']) {
        $return['valid'] = false;
        $return['error'][] = 'Password contains illegal characters';
    }
    // Validate email
    if (!filter_var($clean['email'], FILTER_VALIDATE_EMAIL)) {
        $return['valid'] = false;
        $return['error'][] = 'Invalid email format';
    }
    if ($clean['email'] != $raw['email']) {
        $return['valid'] = false;
        $return['error'][] = 'Email contains illegal characters';
    }
    // Validate phone
    if (empty($raw['phone'])) {
        $return['valid'] = false;
        $return['error'][] = 'Phone is missing';
    }
    if ($clean['phone'] != $raw['phone']) {
        $return['valid'] = false;
        $return['error'][] = 'Phone contains illegal characters';
    }
    // Validate active
    if (!isset($raw['active']) || ($raw['active'] != '0' and $raw['active'] != '1')) {
        $return['valid'] = false;
        $return['error'][] = 'Active is missing';
    }
    if ($clean['active'] != $raw['active']) {
        $return['valid'] = false;
        $return['error'][] = 'Active contains illegal characters';
    }
    // Validate ID
    if (empty($raw['id'])) {
        $return['valid'] = false;
        $return['error'][] = 'ID is missing';
    }
    if ($clean['id'] != $raw['id']) {
        $return['valid'] = false;
        $return['error'][] = 'ID contains illegal characters';
    }
    
    // Return
    return $return;
}
