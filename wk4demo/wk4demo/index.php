<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 10/29/17
 * Time: 5:09 PM
 */

// Database driven app, so...
require_once ('assets/dbconn.php');
require_once ('assets/employees.php');
require_once ('assets/employeeViews.php');
require_once('assets/departments.php');
$db = getDB();

// get the data from user, if any
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ??
    filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? NULL;
$col = filter_input(INPUT_GET, 'col', FILTER_SANITIZE_STRING) ?? NULL;
$dir = filter_input(INPUT_GET, 'dir', FILTER_SANITIZE_STRING) ?? NULL;
include_once ('assets/header.php');
// control based on the action indicated by the user
switch ($action) {
    case 'sort':
        $sortable = true;
        $employees = getEmployeesAsSortedTable($db, $col, $dir);

        $cols = getColumnNames($db, 'employees');
        echo getEmployeesAsTable($db, $employees, $cols, $sortable);
        break;
    case 'Read':
        // pass the db and the id to getEmployeeDisplay (which in turns gets the employee first) and echo results
        // for search 'WHERE last_name LIKE %know%
        break;
    case 'New':

        $depts = getDepts($db);
        echo employeeForm($depts);
        // initialize button to Save
        // initialize an employee array and set each field to a blank form value
        // pass both to employeeForm()
        break;
    case 'Save':
        // pass the data to newEmployee()
        // initialize button to Save
        // initialize an employee array and set each field to a blank form value
        // pass both to employeeForm()
        break;
    case 'Edit':
        // getEmployee()
        // initialize button to Update
        // pass both to employeeForm()
        break;
    case 'Update':
        // pass the data to updateEmployee()
        // getEmployee()
        // initialize button to Update
        // pass both to employeeForm()
        break;
    case 'Delete':
        // deleteEmployee()
        break;
    default:
        $sortable = true;
        $employees = getEmployees($db);
        $cols = getColumnNames($db, 'employees');
        echo getEmployeesAsTable($db, $employees, $cols, $sortable);
        break;
}
include_once ('assets/footer.php');