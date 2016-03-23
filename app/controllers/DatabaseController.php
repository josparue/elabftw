<?php
/**
 * app/controllers/DatabaseController.php
 *
 * @author Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @see http://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */

/**
 * Database
 *
 */
require_once '../../inc/common.php';

try {
    $database = new \Elabftw\Elabftw\Database($_POST['databaseId'], $_SESSION['team_id']);

    // UPDATE
    if (isset($_POST['databaseUpdate'])) {
        if ($database->update(
            $_POST['databaseUpdateTitle'],
            $_POST['databaseUpdateDate'],
            $_POST['databaseUpdateBody'],
            $_SESSION['userid']
        )) {
            echo 'ok';
            header("location: ../../database.php?mode=view&id=" . $_POST['databaseId']);
        } else {
            die(sprintf(_("There was an unexpected problem! Please %sopen an issue on GitHub%s if you think this is a bug."), "<a href='https://github.com/elabftw/elabftw/issues/'>", "</a>"));
        }
    }

} catch (Exception $e) {
    dblog('Error', $_SESSION['userid'], $e->getMessage());
}