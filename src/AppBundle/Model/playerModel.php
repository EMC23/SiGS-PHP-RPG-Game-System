<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 15-1-16
 * Time: 16:06
 */
namespace AppBundle\Model;

    /*
     * Example PHP implementation used for the index.html example
     */

// DataTables PHP library
include( "../../../vendor/datatables/DataTables.php" );

// Alias Editor classes so they are easy to use
use DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Join,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
    ->fields(
        Field::inst( 'first_name' )->validator( 'Validate::notEmpty' )

    )
    ->process( $_POST )
    ->json();