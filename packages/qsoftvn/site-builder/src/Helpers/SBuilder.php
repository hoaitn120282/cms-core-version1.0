<?php

namespace Qsoftvn\SiteBuilder\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Session\SessionManager;

class SBuilder
{
    const DEFAULT_INSTANCE = 'default';
    const  DEFAULT_STEPS = array(
        'database',
        'ftp',
        'site',
        'theme'
    );

    /**
     * Instance of the session manager.
     *
     * @var \Illuminate\Session\SessionManager
     */
    private $session;

    /**
     * Holds the current cart instance.
     *
     * @var string
     */
    private $instance;

    /**  Location for overloaded data.  */
    protected $data = array();

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /**
     * Set the session store implementation.
     *
     * @param  \Illuminate\Contracts\Session\Session $session
     *
     * @return $this
     */
    public function setSessionStore(Session $session)
    {
        $this->session = $session;
        return $this;
    }

    /**
     * Compare constructor.
     *
     * @param \Illuminate\Session\SessionManager $session
     */
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
        $this->instance(self::DEFAULT_INSTANCE);
    }

    /**
     * Set the current cart instance.
     *
     * @param string|null $instance
     * @return \Checkout
     */
    public function instance($instance = null)
    {
        $instance = $instance ?: self::DEFAULT_INSTANCE;

        $this->instance = sprintf('%s.%s', 'site_builder', $instance);

        return $this;
    }

    /**
     * Get list of SiteBuilder's Steps
     *
     * @return mixed
     */
    public function getSteps()
    {
        $steps = $this->session->has($this->instance)
            ? $this->session->get($this->instance)
            : new Collection;

        if ($steps instanceof Collection) {
            return $steps;
        }

        return new Collection($steps);
    }

    /**
     * Set step data
     *
     * @param string $continue
     * @param array $data
     * @return mixed
     */
    public function setStepData($step = null, $data = null)
    {
        try {
            if (empty($step) || !in_array($step, self::DEFAULT_STEPS)) {
                throw new \Exception('Please supply a valid step.');
            }

            if (empty($data)) {
                throw new \Exception('Please supply a valid data.');
            }

            $steps = $this->getSteps();
            $data = is_array($data) ?: array($data);
            $steps[$step] = $data;
            $this->session->put($this->instance, $this->setAsCollection($steps));

            return array(
                'success' => true,
                'message' => 'Done'
            );
        } catch (\Exception $exception) {
            return array(
                'success' => false,
                'message' => $exception->getMessage()
            );
        }
    }

    /**
     * Destroy the current site builder instance.
     *
     * @return void
     */
    public function destroy()
    {
        $this->session->remove($this->instance);
    }

    /**
     * Get step's data
     *
     * @param string $step
     * @return mixed
     */
    public function getStepData($step = null)
    {
        $steps = $this->getSteps();
        if (is_null($step)) {
            return false;
        }

        if (!isset($steps[$step])) {
            return false;
        }

        return $steps[$step];

    }

    /**
     * Set Step's data as Collection
     *
     * @param {array} $data
     *
     * @return {Collection}
     */
    private function setAsCollection($data)
    {
        if ($data instanceof Collection) {
            return $data;
        }

        return new Collection($data);
    }
}