<?php
namespace observer;
use SplSubject;

/**
 * Created by PhpStorm.
 * User: Asier
 * Date: 16/10/16
 * Time: 23:37
 */
class BelmezObserver implements \SplObserver
{

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
    }
}