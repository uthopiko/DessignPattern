<?php
namespace observer;

class GorkaEmisor implements \SplSubject {

    /**
     * An array of SplObserver objects
     * to notify of Exceptions.
     *
     * @var array
     */
    private $observers = array();

    /**
     * GorkaEmisor constructor.
     * @param array $observers
     */
    public function __construct()
    {
        $this->observers = $_SESSION['observers'];
    }


    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
        $_SESSION['observers'] = $this->observers;

    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        var_dump($id);
        unset($_SESSION['observers'][$id]);
        unset($this->observers[$id]);
    }

    /**
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach($this->observers as $obs)
        {
            $obs->update($this);
        }
    }

    /**
     * @return array
     */
    public function getObservers()
    {
        return $this->observers;
    }
}