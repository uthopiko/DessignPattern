<?php
namespace observer;

class ClassFileLoader implements LoaderInterface
{
    /**
     * @var
     */
    private $dir;

    /**
     * ClassFileLoader constructor.
     */
    public function __construct($dir = ".")
    {
        $this->dir = $dir;
    }

    function load()
    {
        $participants = [];
        if (is_dir($this->dir)) {
            if ($dh = opendir($this->dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (strpos($file, 'Observer')) {
                        $participants[$file] = str_replace('Observer.php', '', $file);
                    }
                }
                closedir($dh);
            }
        }

        return $participants;
    }
}