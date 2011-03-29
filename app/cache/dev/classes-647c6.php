<?php
namespace Symfony\Component\HttpFoundation
{
use Symfony\Component\HttpFoundation\SessionStorage\SessionStorageInterface;
class Session implements \Serializable
{
    protected $storage;
    protected $attributes;
    protected $oldFlashes;
    protected $started;
    protected $options;
    public function __construct(SessionStorageInterface $storage, array $options = array())
    {
        $this->storage = $storage;
        $this->options = $options;
        $this->attributes = array('_flash' => array(), '_locale' => $this->getDefaultLocale());
        $this->started = false;
    }
    public function start()
    {
        if (true === $this->started) {
            return;
        }
        $this->storage->start();
        $this->attributes = $this->storage->read('_symfony2');
        if (!isset($this->attributes['_flash'])) {
            $this->attributes['_flash'] = array();
        }
        if (!isset($this->attributes['_locale'])) {
            $this->attributes['_locale'] = $this->getDefaultLocale();
        }
                $this->oldFlashes = array_flip(array_keys($this->attributes['_flash']));
        $this->started = true;
    }
    public function has($name)
    {
        return array_key_exists($name, $this->attributes);
    }
    public function get($name, $default = null)
    {
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : $default;
    }
    public function set($name, $value)
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes[$name] = $value;
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
    public function setAttributes(array $attributes)
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes = $attributes;
    }
    public function remove($name)
    {
        if (false === $this->started) {
            $this->start();
        }
        if (array_key_exists($name, $this->attributes)) {
            unset($this->attributes[$name]);
        }
    }
    public function clear()
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes = array();
    }
    public function invalidate()
    {
        $this->clear();
        $this->storage->regenerate();
    }
    public function migrate()
    {
        $this->storage->regenerate();
    }
    public function getId()
    {
        return $this->storage->getId();
    }
    public function getLocale()
    {
        return $this->attributes['_locale'];
    }
    public function setLocale($locale)
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes['_locale'] = $locale;
    }
    public function getFlashes()
    {
        return isset($this->attributes['_flash']) ? $this->attributes['_flash'] : array();
    }
    public function setFlashes($values)
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes['_flash'] = $values;
        $this->oldFlashes = array();
    }
    public function getFlash($name, $default = null)
    {
        return array_key_exists($name, $this->attributes['_flash']) ? $this->attributes['_flash'][$name] : $default;
    }
    public function setFlash($name, $value)
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes['_flash'][$name] = $value;
        unset($this->oldFlashes[$name]);
    }
    public function hasFlash($name)
    {
        if (false === $this->started) {
            $this->start();
        }
        return array_key_exists($name, $this->attributes['_flash']);
    }
    public function removeFlash($name)
    {
        if (false === $this->started) {
            $this->start();
        }
        unset($this->attributes['_flash'][$name]);
    }
    public function clearFlashes()
    {
        if (false === $this->started) {
            $this->start();
        }
        $this->attributes['_flash'] = array();
        $this->oldFlashes = array();
    }
    public function save()
    {
        if (false === $this->started) {
            $this->start();
        }
        if (isset($this->attributes['_flash'])) {
            $this->attributes['_flash'] = array_diff_key($this->attributes['_flash'], $this->oldFlashes);
        }
        $this->storage->write('_symfony2', $this->attributes);
    }
    public function __destruct()
    {
        $this->save();
    }
    public function serialize()
    {
        return serialize(array($this->storage, $this->options));
    }
    public function unserialize($serialized)
    {
        list($this->storage, $this->options) = unserialize($serialized);
        $this->attributes = array();
        $this->started = false;
    }
    protected function getDefaultLocale()
    {
        return isset($this->options['default_locale']) ? $this->options['default_locale'] : 'en';
    }
}
}
namespace Symfony\Component\HttpFoundation\SessionStorage
{
interface SessionStorageInterface
{
    function start();
    function getId();
    function read($key);
    function remove($key);
    function write($key, $data);
    function regenerate($destroy = false);
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\EngineInterface as BaseEngineInterface;
use Symfony\Component\HttpFoundation\Response;
interface EngineInterface extends BaseEngineInterface
{
    function renderResponse($view, array $parameters = array(), Response $response = null);
}
}
namespace Symfony\Component\Templating
{
interface EngineInterface
{
    function render($name, array $parameters = array());
    function exists($name);
    function supports($name);
}
}
namespace Symfony\Component\HttpFoundation
{
class Response
{
    public $headers;
    protected $content;
    protected $version;
    protected $statusCode;
    protected $statusText;
    protected $charset;
    static public $statusTexts = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
    );
    public function __construct($content = '', $status = 200, $headers = array())
    {
        $this->setContent($content);
        $this->setStatusCode($status);
        $this->setProtocolVersion('1.0');
        $this->headers = new ResponseHeaderBag($headers);
    }
    public function __toString()
    {
        $content = '';
        if (!$this->headers->has('Content-Type')) {
            $this->headers->set('Content-Type', 'text/html; charset='.(null === $this->charset ? 'UTF-8' : $this->charset));
        }
                $content .= sprintf('HTTP/%s %s %s', $this->version, $this->statusCode, $this->statusText)."\n";
                foreach ($this->headers->all() as $name => $values) {
            foreach ($values as $value) {
                $content .= "$name: $value\n";
            }
        }
        $content .= "\n".$this->getContent();
        return $content;
    }
    public function __clone()
    {
        $this->headers = clone $this->headers;
    }
    public function sendHeaders()
    {
        if (!$this->headers->has('Content-Type')) {
            $this->headers->set('Content-Type', 'text/html; charset='.(null === $this->charset ? 'UTF-8' : $this->charset));
        }
                header(sprintf('HTTP/%s %s %s', $this->version, $this->statusCode, $this->statusText));
                foreach ($this->headers->all() as $name => $values) {
            foreach ($values as $value) {
                header($name.': '.$value);
            }
        }
                foreach ($this->headers->getCookies() as $cookie) {
            setcookie($cookie->getName(), $cookie->getValue(), $cookie->getExpire(), $cookie->getPath(), $cookie->getDomain(), $cookie->isSecure(), $cookie->isHttpOnly());
        }
    }
    public function sendContent()
    {
        echo $this->content;
    }
    public function send()
    {
        $this->sendHeaders();
        $this->sendContent();
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setProtocolVersion($version)
    {
        $this->version = $version;
    }
    public function getProtocolVersion()
    {
        return $this->version;
    }
    public function setStatusCode($code, $text = null)
    {
        $this->statusCode = (int) $code;
        if ($this->isInvalid()) {
            throw new \InvalidArgumentException(sprintf('The HTTP status code "%s" is not valid.', $code));
        }
        $this->statusText = false === $text ? '' : (null === $text ? self::$statusTexts[$this->statusCode] : $text);
    }
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }
    public function getCharset()
    {
        return $this->charset;
    }
    public function isCacheable()
    {
        if (!in_array($this->statusCode, array(200, 203, 300, 301, 302, 404, 410))) {
            return false;
        }
        if ($this->headers->hasCacheControlDirective('no-store') || $this->headers->getCacheControlDirective('private')) {
            return false;
        }
        return $this->isValidateable() || $this->isFresh();
    }
    public function isFresh()
    {
        return $this->getTtl() > 0;
    }
    public function isValidateable()
    {
        return $this->headers->has('Last-Modified') || $this->headers->has('ETag');
    }
    public function setPrivate()
    {
        $this->headers->removeCacheControlDirective('public');
        $this->headers->addCacheControlDirective('private');
    }
    public function setPublic()
    {
        $this->headers->addCacheControlDirective('public');
        $this->headers->removeCacheControlDirective('private');
    }
    public function mustRevalidate()
    {
        return $this->headers->hasCacheControlDirective('must-revalidate') || $this->headers->has('must-proxy-revalidate');
    }
    public function getDate()
    {
        if (null === $date = $this->headers->getDate('Date')) {
            $date = new \DateTime(null, new \DateTimeZone('UTC'));
            $this->headers->set('Date', $date->format('D, d M Y H:i:s').' GMT');
        }
        return $date;
    }
    public function getAge()
    {
        if ($age = $this->headers->get('Age')) {
            return $age;
        }
        return max(time() - $this->getDate()->format('U'), 0);
    }
    public function expire()
    {
        if ($this->isFresh()) {
            $this->headers->set('Age', $this->getMaxAge());
        }
    }
    public function getExpires()
    {
        return $this->headers->getDate('Expires');
    }
    public function setExpires(\DateTime $date = null)
    {
        if (null === $date) {
            $this->headers->remove('Expires');
        } else {
            $date = clone $date;
            $date->setTimezone(new \DateTimeZone('UTC'));
            $this->headers->set('Expires', $date->format('D, d M Y H:i:s').' GMT');
        }
    }
    public function getMaxAge()
    {
        if ($age = $this->headers->getCacheControlDirective('s-maxage')) {
            return $age;
        }
        if ($age = $this->headers->getCacheControlDirective('max-age')) {
            return $age;
        }
        if (null !== $this->getExpires()) {
            return $this->getExpires()->format('U') - $this->getDate()->format('U');
        }
        return null;
    }
    public function setMaxAge($value)
    {
        $this->headers->addCacheControlDirective('max-age', $value);
    }
    public function setSharedMaxAge($value)
    {
        $this->headers->addCacheControlDirective('s-maxage', $value);
    }
    public function getTtl()
    {
        if ($maxAge = $this->getMaxAge()) {
            return $maxAge - $this->getAge();
        }
        return null;
    }
    public function setTtl($seconds)
    {
        $this->setSharedMaxAge($this->getAge() + $seconds);
    }
    public function setClientTtl($seconds)
    {
        $this->setMaxAge($this->getAge() + $seconds);
    }
    public function getLastModified()
    {
        return $this->headers->getDate('Last-Modified');
    }
    public function setLastModified(\DateTime $date = null)
    {
        if (null === $date) {
            $this->headers->remove('Last-Modified');
        } else {
            $date = clone $date;
            $date->setTimezone(new \DateTimeZone('UTC'));
            $this->headers->set('Last-Modified', $date->format('D, d M Y H:i:s').' GMT');
        }
    }
    public function getEtag()
    {
        return $this->headers->get('ETag');
    }
    public function setEtag($etag = null, $weak = false)
    {
        if (null === $etag) {
            $this->headers->remove('Etag');
        } else {
            if (0 !== strpos($etag, '"')) {
                $etag = '"'.$etag.'"';
            }
            $this->headers->set('ETag', (true === $weak ? 'W/' : '').$etag);
        }
    }
    public function setCache(array $options)
    {
        if ($diff = array_diff(array_keys($options), array('etag', 'last_modified', 'max_age', 's_maxage', 'private', 'public'))) {
            throw new \InvalidArgumentException(sprintf('Response does not support the following options: "%s".', implode('", "', array_keys($diff))));
        }
        if (isset($options['etag'])) {
            $this->setEtag($options['etag']);
        }
        if (isset($options['last_modified'])) {
            $this->setLastModified($options['last_modified']);
        }
        if (isset($options['max_age'])) {
            $this->setMaxAge($options['max_age']);
        }
        if (isset($options['s_maxage'])) {
            $this->setSharedMaxAge($options['s_maxage']);
        }
        if (isset($options['public'])) {
            if ($options['public']) {
                $this->setPublic();
            } else {
                $this->setPrivate();
            }
        }
        if (isset($options['private'])) {
            if ($options['private']) {
                $this->setPrivate();
            } else {
                $this->setPublic();
            }
        }
    }
    public function setNotModified()
    {
        $this->setStatusCode(304);
        $this->setContent(null);
                foreach (array('Allow', 'Content-Encoding', 'Content-Language', 'Content-Length', 'Content-MD5', 'Content-Type', 'Last-Modified') as $header) {
            $this->headers->remove($header);
        }
    }
    public function hasVary()
    {
        return (Boolean) $this->headers->get('Vary');
    }
    public function getVary()
    {
        if (!$vary = $this->headers->get('Vary')) {
            return array();
        }
        return is_array($vary) ? $vary : preg_split('/[\s,]+/', $vary);
    }
    public function setVary($headers, $replace = true)
    {
        $this->headers->set('Vary', $headers, $replace);
    }
    public function isNotModified(Request $request)
    {
        $lastModified = $request->headers->get('If-Modified-Since');
        $notModified = false;
        if ($etags = $request->getEtags()) {
            $notModified = (in_array($this->getEtag(), $etags) || in_array('*', $etags)) && (!$lastModified || $this->headers->get('Last-Modified') == $lastModified);
        } elseif ($lastModified) {
            $notModified = $lastModified == $this->headers->get('Last-Modified');
        }
        if ($notModified) {
            $this->setNotModified();
        }
        return $notModified;
    }
        public function isInvalid()
    {
        return $this->statusCode < 100 || $this->statusCode >= 600;
    }
    public function isInformational()
    {
        return $this->statusCode >= 100 && $this->statusCode < 200;
    }
    public function isSuccessful()
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }
    public function isRedirection()
    {
        return $this->statusCode >= 300 && $this->statusCode < 400;
    }
    public function isClientError()
    {
        return $this->statusCode >= 400 && $this->statusCode < 500;
    }
    public function isServerError()
    {
        return $this->statusCode >= 500 && $this->statusCode < 600;
    }
    public function isOk()
    {
        return 200 === $this->statusCode;
    }
    public function isForbidden()
    {
        return 403 === $this->statusCode;
    }
    public function isNotFound()
    {
        return 404 === $this->statusCode;
    }
    public function isRedirect()
    {
        return in_array($this->statusCode, array(301, 302, 303, 307));
    }
    public function isEmpty()
    {
        return in_array($this->statusCode, array(201, 204, 304));
    }
    public function isRedirected($location)
    {
        return $this->isRedirect() && $location == $this->headers->get('Location');
    }
}
}
namespace Symfony\Component\HttpFoundation
{
class ResponseHeaderBag extends HeaderBag
{
    protected $computedCacheControl = array();
    public function __construct(array $headers = array())
    {
        parent::__construct($headers);
        if (!isset($this->headers['cache-control'])) {
            $this->set('cache-control', '');
        }
    }
    public function replace(array $headers = array())
    {
        parent::replace($headers);
        if (!isset($this->headers['cache-control'])) {
            $this->set('cache-control', '');
        }
    }
    public function set($key, $values, $replace = true)
    {
        parent::set($key, $values, $replace);
                if (in_array(strtr(strtolower($key), '_', '-'), array('cache-control', 'etag', 'last-modified', 'expires'))) {
            $computed = $this->computeCacheControlValue();
            $this->headers['cache-control'] = array($computed);
            $this->computedCacheControl = $this->parseCacheControl($computed);
        }
    }
    public function remove($key)
    {
        parent::remove($key);
        if ('cache-control' === strtr(strtolower($key), '_', '-')) {
            $this->computedCacheControl = array();
        }
    }
    public function hasCacheControlDirective($key)
    {
        return array_key_exists($key, $this->computedCacheControl);
    }
    public function getCacheControlDirective($key)
    {
        return array_key_exists($key, $this->computedCacheControl) ? $this->computedCacheControl[$key] : null;
    }
    public function clearCookie($name, $path = null, $domain = null)
    {
        $this->setCookie(new Cookie($name, null, 1, $path, $domain));
    }
    protected function computeCacheControlValue()
    {
        if (!$this->cacheControl && !$this->has('ETag') && !$this->has('Last-Modified') && !$this->has('Expires')) {
            return 'no-cache';
        }
        if (!$this->cacheControl) {
                        return 'private, must-revalidate';
        }
        $header = $this->getCacheControlHeader();
        if (isset($this->cacheControl['public']) || isset($this->cacheControl['private'])) {
            return $header;
        }
                if (!isset($this->cacheControl['s-maxage'])) {
            return $header.', private';
        }
        return $header;
    }
}}
namespace Symfony\Component\EventDispatcher
{
interface EventDispatcherInterface
{
    function dispatch($eventName, Event $event = null);
    function addListener($eventNames, $listener, $priority = 0);
    function addSubscriber(EventSubscriberInterface $subscriber, $priority = 0);
    function removeListener($eventNames, $listener);
    function removeSubscriber(EventSubscriberInterface $subscriber);
    function getListeners($eventName = null);
    function hasListeners($eventName = null);
}
}
namespace Symfony\Component\EventDispatcher
{
class EventDispatcher implements EventDispatcherInterface
{
    private $listeners = array();
    private $sorted = array();
    public function dispatch($eventName, Event $event = null)
    {
        if (!isset($this->listeners[$eventName])) {
            return;
        }
        if (null === $event) {
            $event = new Event();
        }
        foreach ($this->getListeners($eventName) as $listener) {
            $this->triggerListener($listener, $eventName, $event);
            if ($event->isPropagationStopped()) {
                break;
            }
        }
    }
    public function getListeners($eventName = null)
    {
        if (null !== $eventName) {
            if (!isset($this->sorted[$eventName])) {
                $this->sortListeners($eventName);
            }
            return $this->sorted[$eventName];
        }
        $sorted = array();
        foreach (array_keys($this->listeners) as $eventName) {
            if (!isset($this->sorted[$eventName])) {
                $this->sortListeners($eventName);
            }
            if ($this->sorted[$eventName]) {
                $sorted[$eventName] = $this->sorted[$eventName];
            }
        }
        return $sorted;
    }
    public function hasListeners($eventName = null)
    {
        return (Boolean) count($this->getListeners($eventName));
    }
    public function addListener($eventNames, $listener, $priority = 0)
    {
        foreach ((array) $eventNames as $eventName) {
            if (!isset($this->listeners[$eventName][$priority])) {
                if (!isset($this->listeners[$eventName])) {
                    $this->listeners[$eventName] = array();
                }
                $this->listeners[$eventName][$priority] = new \SplObjectStorage();
            }
            $this->listeners[$eventName][$priority]->attach($listener);
            unset($this->sorted[$eventName]);
        }
    }
    public function removeListener($eventNames, $listener)
    {
        foreach ((array) $eventNames as $eventName) {
            if (!isset($this->listeners[$eventName])) {
                continue;
            }
            foreach (array_keys($this->listeners[$eventName]) as $priority) {
                if (isset($this->listeners[$eventName][$priority][$listener])) {
                    unset($this->listeners[$eventName][$priority][$listener], $this->sorted[$eventName]);
                }
            }
        }
    }
    public function addSubscriber(EventSubscriberInterface $subscriber, $priority = 0)
    {
        $this->addListener($subscriber->getSubscribedEvents(), $subscriber, $priority);
    }
    public function removeSubscriber(EventSubscriberInterface $subscriber)
    {
        $this->removeListener($subscriber->getSubscribedEvents(), $subscriber);
    }
    protected function triggerListener($listener, $eventName, Event $event)
    {
        if ($listener instanceof \Closure) {
            $listener->__invoke($event);
        } else {
            $listener->$eventName($event);
        }
    }
    private function sortListeners($eventName)
    {
        $this->sorted[$eventName] = array();
        if (isset($this->listeners[$eventName])) {
            krsort($this->listeners[$eventName]);
            foreach ($this->listeners[$eventName] as $listeners) {
                foreach ($listeners as $listener) {
                    $this->sorted[$eventName][] = $listener;
                }
            }
        }
    }
}
}
namespace Symfony\Component\EventDispatcher
{
class Event
{
    private $propagationStopped = false;
    public function isPropagationStopped()
    {
        return $this->propagationStopped;
    }
    public function stopPropagation()
    {
        $this->propagationStopped = true;
    }
}
}
namespace Symfony\Component\EventDispatcher
{
interface EventSubscriberInterface
{
    static function getSubscribedEvents();
}
}
namespace Symfony\Component\HttpKernel
{
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\Response;
class ResponseListener
{
    private $charset;
    public function __construct($charset)
    {
        $this->charset = $charset;
    }
    public function onCoreResponse(FilterResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
            return;
        }
        $response = $event->getResponse();
        if (null === $response->getCharset()) {
            $response->setCharset($this->charset);
        }
        if ($response->headers->has('Content-Type')) {
            return;
        }
        $request = $event->getRequest();
        $format = $request->getRequestFormat();
        if ((null !== $format) && $mimeType = $request->getMimeType($format)) {
            $response->headers->set('Content-Type', $mimeType);
        }
    }
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
class ControllerResolver implements ControllerResolverInterface
{
    private $logger;
    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }
    public function getController(Request $request)
    {
        if (!$controller = $request->attributes->get('_controller')) {
            if (null !== $this->logger) {
                $this->logger->err('Unable to look for the controller as the "_controller" parameter is missing');
            }
            return false;
        }
        if ($controller instanceof \Closure) {
            return $controller;
        }
        list($controller, $method) = $this->createController($controller);
        if (!method_exists($controller, $method)) {
            throw new \InvalidArgumentException(sprintf('Method "%s::%s" does not exist.', get_class($controller), $method));
        }
        if (null !== $this->logger) {
            $this->logger->info(sprintf('Using controller "%s::%s"', get_class($controller), $method));
        }
        return array($controller, $method);
    }
    public function getArguments(Request $request, $controller)
    {
        $attributes = $request->attributes->all();
        if (is_array($controller)) {
            $r = new \ReflectionMethod($controller[0], $controller[1]);
            $repr = sprintf('%s::%s()', get_class($controller[0]), $controller[1]);
        } else {
            $r = new \ReflectionFunction($controller);
            $repr = 'Closure';
        }
        $arguments = array();
        foreach ($r->getParameters() as $param) {
            if (array_key_exists($param->getName(), $attributes)) {
                $arguments[] = $attributes[$param->getName()];
            } elseif ($param->isDefaultValueAvailable()) {
                $arguments[] = $param->getDefaultValue();
            } else {
                throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument (because there is no default value or because there is a non optional argument after this one).', $repr, $param->getName()));
            }
        }
        return $arguments;
    }
    protected function createController($controller)
    {
        if (false === strpos($controller, '::')) {
            throw new \InvalidArgumentException(sprintf('Unable to find controller "%s".', $controller));
        }
        list($class, $method) = explode('::', $controller);
        if (!class_exists($class)) {
            throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
        }
        return array(new $class(), $method);
    }
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ControllerResolverInterface
{
    function getController(Request $request);
    function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;
class KernelEvent extends Event
{
    private $kernel;
    private $request;
    private $requestType;
    public function __construct(HttpKernelInterface $kernel, Request $request, $requestType)
    {
        $this->kernel = $kernel;
        $this->request = $request;
        $this->requestType = $requestType;
    }
    public function getKernel()
    {
        return $this->kernel;
    }
    public function getRequest()
    {
        return $this->request;
    }
    public function getRequestType()
    {
        return $this->requestType;
    }
}}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class FilterControllerEvent extends KernelEvent
{
    private $controller;
    public function __construct(HttpKernelInterface $kernel, $controller, Request $request, $requestType)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setController($controller);
    }
    public function getController()
    {
        return $this->controller;
    }
    public function setController($controller)
    {
                if (!is_callable($controller)) {
            throw new \LogicException(sprintf('The controller must be a callable (%s given).', $this->varToString($controller)));
        }
        $this->controller = $controller;
    }
    private function varToString($var)
    {
        if (is_object($var)) {
            return sprintf('[object](%s)', get_class($var));
        }
        if (is_array($var)) {
            $a = array();
            foreach ($var as $k => $v) {
                $a[] = sprintf('%s => %s', $k, $this->varToString($v));
            }
            return sprintf("[array](%s)", implode(', ', $a));
        }
        if (is_resource($var)) {
            return '[resource]';
        }
        return str_replace("\n", '', var_export((string) $var, true));
    }
}}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class FilterResponseEvent extends KernelEvent
{
    private $response;
    public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, Response $response)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setResponse($response);
    }
    public function getResponse()
    {
        return $this->response;
    }
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }
}}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class GetResponseEvent extends KernelEvent
{
    private $response;
    public function getResponse()
    {
        return $this->response;
    }
    public function setResponse(Response $response)
    {
        $this->response = $response;
        $this->stopPropagation();
    }
    public function hasResponse()
    {
        return null !== $this->response;
    }
}}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForControllerResultEvent extends GetResponseEvent
{
    private $controllerResult;
    public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, $controllerResult)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->controllerResult = $controllerResult;
    }
    public function getControllerResult()
    {
        return $this->controllerResult;
    }
}}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForExceptionEvent extends GetResponseEvent
{
    private $exception;
    public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, \Exception $e)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setException($e);
    }
    public function getException()
    {
        return $this->exception;
    }
    public function setException(\Exception $exception)
    {
        $this->exception = $exception;
    }
}}
namespace Symfony\Component\HttpKernel
{
final class Events
{
    const onCoreRequest = 'onCoreRequest';
    const onCoreException = 'onCoreException';
    const onCoreView = 'onCoreView';
    const onCoreController = 'onCoreController';
    const onCoreResponse = 'onCoreResponse';
}}
namespace Symfony\Bundle\FrameworkBundle
{
use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;
use Symfony\Component\Routing\RouterInterface;
class RequestListener
{
    protected $router;
    protected $logger;
    protected $container;
    public function __construct(ContainerInterface $container, RouterInterface $router, LoggerInterface $logger = null)
    {
        $this->container = $container;
        $this->router = $router;
        $this->logger = $logger;
    }
    public function onCoreRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        $master = HttpKernelInterface::MASTER_REQUEST === $event->getRequestType();
        $this->initializeSession($request, $master);
        $this->initializeRequestAttributes($request, $master);
    }
    protected function initializeSession(Request $request, $master)
    {
        if (!$master) {
            return;
        }
                if (null === $request->getSession() && $this->container->has('session')) {
            $request->setSession($this->container->get('session'));
        }
                if ($request->hasSession()) {
            $request->getSession()->start();
        }
    }
    protected function initializeRequestAttributes(Request $request, $master)
    {
        if ($master) {
                                    $this->router->setContext(array(
                'base_url'  => $request->getBaseUrl(),
                'method'    => $request->getMethod(),
                'host'      => $request->getHost(),
                'port'      => $request->getPort(),
                'is_secure' => $request->isSecure(),
            ));
        }
        if ($request->attributes->has('_controller')) {
                        return;
        }
                try {
            $parameters = $this->router->match($request->getPathInfo());
            if (null !== $this->logger) {
                $this->logger->info(sprintf('Matched route "%s" (parameters: %s)', $parameters['_route'], json_encode($parameters)));
            }
            $request->attributes->add($parameters);
            if ($locale = $request->attributes->get('_locale')) {
                $request->getSession()->setLocale($locale);
            }
        } catch (NotFoundException $e) {
            $message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());
            if (null !== $this->logger) {
                $this->logger->err($message);
            }
            throw new NotFoundHttpException($message, $e);
        } catch (MethodNotAllowedException $e) {
            $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getPathInfo(), strtoupper(implode(', ', $e->getAllowedMethods())));
            if (null !== $this->logger) {
                $this->logger->err($message);
            }
            throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);
        }
    }
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as BaseControllerResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
class ControllerResolver extends BaseControllerResolver
{
    protected $container;
    protected $parser;
    public function __construct(ContainerInterface $container, ControllerNameParser $parser, LoggerInterface $logger = null)
    {
        $this->container = $container;
        $this->parser = $parser;
        parent::__construct($logger);
    }
    protected function createController($controller)
    {
        if (false === strpos($controller, '::')) {
            $count = substr_count($controller, ':');
            if (2 == $count) {
                                $controller = $this->parser->parse($controller);
            } elseif (1 == $count) {
                                list($service, $method) = explode(':', $controller);
                return array($this->container->get($service), $method);
            } else {
                throw new \LogicException(sprintf('Unable to parse the controller name "%s".', $controller));
            }
        }
        list($class, $method) = explode('::', $controller);
        if (!class_exists($class)) {
            throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
        }
        $controller = new $class();
        if ($controller instanceof ContainerAwareInterface) {
            $controller->setContainer($this->container);
        }
        return array($controller, $method);
    }
}
}
namespace Symfony\Bundle\FrameworkBundle
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;
class ContainerAwareEventDispatcher extends EventDispatcher
{
    private $container;
    private $listenerIds;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    public function addListenerService($events, $serviceId, $priority = 0)
    {
        if (!is_string($serviceId)) {
            throw new \InvalidArgumentException('Expected a string argument');
        }
        foreach ((array)$events as $event) {
                        $this->listenerIds[$event][$serviceId] = $priority;
        }
    }
    public function dispatch($eventName, Event $event = null)
    {
        if (isset($this->listenerIds[$eventName])) {
            foreach ($this->listenerIds[$eventName] as $serviceId => $priority) {
                $this->addListener($eventName, $this->container->get($serviceId), $priority);
            }
        }
        parent::dispatch($eventName, $event);
    }
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Events;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
class Firewall
{
    private $map;
    private $dispatcher;
    private $currentListeners;
    public function __construct(FirewallMapInterface $map, EventDispatcherInterface $dispatcher)
    {
        $this->map = $map;
        $this->dispatcher = $dispatcher;
        $this->currentListeners = array();
    }
    public function onCoreRequest(GetResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
            return;
        }
                list($listeners, $exception) = $this->map->getListeners($event->getRequest());
        if (null !== $exception) {
            $exception->register($this->dispatcher);
        }
                foreach ($listeners as $listener) {
            $response = $listener->handle($event);
            if ($event->hasResponse()) {
                break;
            }
        }
    }
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface FirewallMapInterface
{
    function getListeners(Request $request);
}}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
class FirewallMap implements FirewallMapInterface
{
    protected $container;
    protected $map;
    public function __construct(ContainerInterface $container, array $map)
    {
        $this->container = $container;
        $this->map = $map;
    }
    public function getListeners(Request $request)
    {
        foreach ($this->map as $contextId => $requestMatcher) {
            if (null === $requestMatcher || $requestMatcher->matches($request)) {
                return $this->container->get($contextId)->getContext();
            }
        }
        return array(array(), null);
    }
}}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
class FirewallContext
{
    private $listeners;
    private $exceptionListener;
    public function __construct(array $listeners, ExceptionListener $exceptionListener = null)
    {
        $this->listeners = $listeners;
        $this->exceptionListener = $exceptionListener;
    }
    public function getContext()
    {
        return array($this->listeners, $this->exceptionListener);
    }
}
}
namespace Symfony\Component\HttpFoundation
{
class RequestMatcher implements RequestMatcherInterface
{
    protected $path;
    protected $host;
    protected $methods;
    protected $ip;
    protected $attributes;
    public function __construct($path = null, $host = null, $methods = null, $ip = null, array $attributes = array())
    {
        $this->path = $path;
        $this->host = $host;
        $this->methods = $methods;
        $this->ip = $ip;
        $this->attributes = $attributes;
    }
    public function matchHost($regexp)
    {
        $this->host = $regexp;
    }
    public function matchPath($regexp)
    {
        $this->path = $regexp;
    }
    public function matchIp($ip)
    {
        $this->ip = $ip;
    }
    public function matchMethod($method)
    {
        $this->methods = array_map(
            function ($m)
            {
                return strtolower($m);
            },
            is_array($method) ? $method : array($method)
        );
    }
    public function matchAttribute($key, $regexp)
    {
        $this->attributes[$key] = $regexp;
    }
    public function matches(Request $request)
    {
        if (null !== $this->methods && !in_array(strtolower($request->getMethod()), $this->methods)) {
            return false;
        }
        foreach ($this->attributes as $key => $pattern) {
            if (!preg_match('#'.str_replace('#', '\\#', $pattern).'#', $request->attributes->get($key))) {
                return false;
            }
        }
        if (null !== $this->path && !preg_match('#'.str_replace('#', '\\#', $this->path).'#', $request->getPathInfo())) {
            return false;
        }
        if (null !== $this->host && !preg_match('#'.str_replace('#', '\\#', $this->host).'#', $request->getHost())) {
            return false;
        }
        if (null !== $this->ip && !$this->checkIp($request->getClientIp())) {
            return false;
        }
        return true;
    }
    protected function checkIp($ip)
    {
        if (false !== strpos($this->ip, '/')) {
            list($address, $netmask) = explode('/', $this->ip);
            if ($netmask < 1 || $netmask > 32) {
                return false;
            }
        } else {
            $address = $this->ip;
            $netmask = 32;
        }
        return 0 === substr_compare(sprintf('%032b', ip2long($ip)), sprintf('%032b', ip2long($address)), 0, $netmask);
    }
}
}
namespace Symfony\Component\HttpFoundation
{
interface RequestMatcherInterface
{
    function matches(Request $request);
}
}
namespace
{
class Twig_Markup
{
    protected $content;
    public function __construct($content)
    {
        $this->content = (string) $content;
    }
    public function __toString()
    {
        return $this->content;
    }
}
}
namespace
{
abstract class Twig_Template implements Twig_TemplateInterface
{
    static protected $cache = array();
    protected $env;
    protected $blocks;
    public function __construct(Twig_Environment $env)
    {
        $this->env = $env;
        $this->blocks = array();
    }
    public function getTemplateName()
    {
        return null;
    }
    public function getEnvironment()
    {
        return $this->env;
    }
    public function getParent(array $context)
    {
        return false;
    }
    public function displayParentBlock($name, array $context, array $blocks = array())
    {
        if (false !== $parent = $this->getParent($context)) {
            $parent->displayBlock($name, $context, $blocks);
        } else {
            throw new Twig_Error_Runtime('This template has no parent', -1, $this->getTemplateName());
        }
    }
    public function displayBlock($name, array $context, array $blocks = array())
    {
        if (isset($blocks[$name])) {
            $b = $blocks;
            unset($b[$name]);
            call_user_func($blocks[$name], $context, $b);
        } elseif (isset($this->blocks[$name])) {
            call_user_func($this->blocks[$name], $context, $blocks);
        } elseif (false !== $parent = $this->getParent($context)) {
            $parent->displayBlock($name, $context, array_merge($this->blocks, $blocks));
        }
    }
    public function renderParentBlock($name, array $context, array $blocks = array())
    {
        ob_start();
        $this->displayParentBlock($name, $context, $blocks);
        return new Twig_Markup(ob_get_clean());
    }
    public function renderBlock($name, array $context, array $blocks = array())
    {
        ob_start();
        $this->displayBlock($name, $context, $blocks);
        return new Twig_Markup(ob_get_clean());
    }
    public function hasBlock($name)
    {
        return isset($this->blocks[$name]);
    }
    public function getBlockNames()
    {
        return array_keys($this->blocks);
    }
    public function render(array $context)
    {
        ob_start();
        try {
            $this->display($context);
        } catch (Exception $e) {
                                                $count = 100;
            while (ob_get_level() && --$count) {
                ob_end_clean();
            }
            throw $e;
        }
        return ob_get_clean();
    }
    protected function getContext($context, $item, $line = -1)
    {
        if (!array_key_exists($item, $context)) {
            throw new Twig_Error_Runtime(sprintf('Variable "%s" does not exist', $item), $line, $this->getTemplateName());
        }
        return $context[$item];
    }
    protected function getAttribute($object, $item, array $arguments = array(), $type = Twig_TemplateInterface::ANY_CALL, $noStrictCheck = false, $line = -1)
    {
                if (Twig_TemplateInterface::METHOD_CALL !== $type) {
            if ((is_array($object) || is_object($object) && $object instanceof ArrayAccess) && isset($object[$item])) {
                return $object[$item];
            }
            if (Twig_TemplateInterface::ARRAY_CALL === $type) {
                if (!$this->env->isStrictVariables() || $noStrictCheck) {
                    return null;
                }
                if (is_object($object)) {
                    throw new Twig_Error_Runtime(sprintf('Key "%s" in object (with ArrayAccess) of type "%s" does not exist', $item, get_class($object)), $line, $this->getTemplateName());
                                } else {
                    throw new Twig_Error_Runtime(sprintf('Key "%s" for array with keys "%s" does not exist', $item, implode(', ', array_keys($object))), $line, $this->getTemplateName());
                }
            }
        }
        if (!is_object($object)) {
            if (!$this->env->isStrictVariables() || $noStrictCheck) {
                return null;
            }
            throw new Twig_Error_Runtime(sprintf('Item "%s" for "%s" does not exist', $item, $object), $line, $this->getTemplateName());
        }
                $class = get_class($object);
        if (!isset(self::$cache[$class])) {
            $r = new ReflectionClass($class);
            self::$cache[$class] = array('methods' => array(), 'properties' => array());
            foreach ($r->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                self::$cache[$class]['methods'][strtolower($method->getName())] = true;
            }
            foreach ($r->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
                self::$cache[$class]['properties'][$property->getName()] = true;
            }
        }
                if (Twig_TemplateInterface::METHOD_CALL !== $type) {
            if (isset(self::$cache[$class]['properties'][$item]) || isset($object->$item)) {
                if ($this->env->hasExtension('sandbox')) {
                    $this->env->getExtension('sandbox')->checkPropertyAllowed($object, $item);
                }
                return $object->$item;
            }
        }
                $lcItem = strtolower($item);
        if (isset(self::$cache[$class]['methods'][$lcItem])) {
            $method = $item;
        } elseif (isset(self::$cache[$class]['methods']['get'.$lcItem])) {
            $method = 'get'.$item;
        } elseif (isset(self::$cache[$class]['methods']['is'.$lcItem])) {
            $method = 'is'.$item;
        } elseif (isset(self::$cache[$class]['methods']['__call'])) {
            $method = $item;
        } else {
            if (!$this->env->isStrictVariables() || $noStrictCheck) {
                return null;
            }
            throw new Twig_Error_Runtime(sprintf('Method "%s" for object "%s" does not exist', $item, get_class($object)), $line, $this->getTemplateName());
        }
        if ($this->env->hasExtension('sandbox')) {
            $this->env->getExtension('sandbox')->checkMethodAllowed($object, $method);
        }
        $ret = call_user_func_array(array($object, $method), $arguments);
        if ($object instanceof Twig_TemplateInterface) {
            return new Twig_Markup($ret);
        }
        return $ret;
    }
}
}
namespace JMS\SecurityExtraBundle\Controller
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use JMS\SecurityExtraBundle\Mapping\Driver\AnnotationConverter;
use JMS\SecurityExtraBundle\Mapping\MethodMetadata;
use JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodInvocation;
use JMS\SecurityExtraBundle\Annotation\Secure;
use JMS\SecurityExtraBundle\Mapping\Driver\AnnotationReader;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
class ControllerListener
{
    private $reader;
    private $converter;
    private $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->reader = new AnnotationReader();
        $this->converter = new AnnotationConverter();
    }
    public function onCoreController(FilterControllerEvent $event)
    {
        if (!is_array($controller = $event->getController())) {
            return;
        }
        $method = new MethodInvocation($controller[0], $controller[1], $controller[0]);
        if (!$annotations = $this->reader->getMethodAnnotations($method)) {
            return;
        }
        $closureCode = 'return function(';
        $params = $paramNames = array();
        foreach ($method->getParameters() as $param) {
            $name = $param->getName();
            $paramNames[] = '$'.$name;
            $parameter = '';
            if (null !== $class = $param->getClass()) {
                $parameter .= '\\'.$class->getName().' ';
            } else if ($param->isArray()) {
                $parameter .= 'array ';
            }
            $parameter .= '$'.$name;
            if ($param->isDefaultValueAvailable()) {
                $parameter .= ' = '.var_export($param->getDefaultValue(), true);
            }
            $params[] = $parameter;
        }
        $params = implode(', ', $params);
        $closureCode .= $params.') ';
        $jmsSecurityExtra__metadata = $this->converter->convertMethodAnnotations($method, $annotations)->getAsArray();
        $jmsSecurityExtra__interceptor = $this->container->get('security.access.method_interceptor');
        $jmsSecurityExtra__method = $method;
        $closureCode .= 'use ($jmsSecurityExtra__metadata, $jmsSecurityExtra__interceptor, $jmsSecurityExtra__method) {';
        $closureCode .= '$jmsSecurityExtra__method->setArguments(array('.implode(', ', $paramNames).'));';
        $closureCode .= 'return $jmsSecurityExtra__interceptor->invoke($jmsSecurityExtra__method, $jmsSecurityExtra__metadata);';
        $closureCode .= '};';
        $event->setController(eval($closureCode));
    }
}
}
namespace JMS\SecurityExtraBundle\Mapping\Driver
{
use Doctrine\Common\Annotations\Lexer;
use Doctrine\Common\Annotations\Parser;
class AnnotationParser extends Parser
{
    private static $strippedTags = array(
        "{@internal", "{@inheritdoc", "{@link"
    );
    public function parse($docBlockString, $context='')
    {
                $input = str_replace(self::$strippedTags, '', $docBlockString);
                if (!preg_match('/^\s*\*\s*(@.*)/ms', $input, $match)) {
            return array();
        }
        return parent::parse($match[1], $context);
    }
    public function Annotations()
    {
        $this->isNestedAnnotation = false;
        $annotations = array();
        $annot = $this->Annotation();
        if ($annot !== false) {
            $annotations[] = $annot;
            $this->getLexer()->skipUntil(Lexer::T_AT);
        }
        while ($this->getLexer()->lookahead !== null && $this->getLexer()->isNextToken(Lexer::T_AT)) {
            $this->isNestedAnnotation = false;
            $annot = $this->Annotation();
            if ($annot !== false) {
                $annotations[] = $annot;
                $this->getLexer()->skipUntil(Lexer::T_AT);
            }
        }
        return $annotations;
    }
}}
namespace JMS\SecurityExtraBundle\Mapping\Driver
{
use JMS\SecurityExtraBundle\Annotation\RunAs;
use JMS\SecurityExtraBundle\Annotation\SatisfiesParentSecurityPolicy;
use JMS\SecurityExtraBundle\Annotation\SecureReturn;
use JMS\SecurityExtraBundle\Annotation\SecureParam;
use JMS\SecurityExtraBundle\Annotation\Secure;
use JMS\SecurityExtraBundle\Mapping\MethodMetadata;
class AnnotationConverter
{
    public function convertMethodAnnotations(\ReflectionMethod $method, array $annotations)
    {
        $parameters = array();
        foreach ($method->getParameters() as $index => $parameter) {
            $parameters[$parameter->getName()] = $index;
        }
        $methodMetadata = new MethodMetadata($method);
        foreach ($annotations as $annotation) {
            if ($annotation instanceof Secure) {
                $methodMetadata->setRoles($annotation->getRoles());
            } else if ($annotation instanceof SecureParam) {
                if (!isset($parameters[$annotation->getName()])) {
                    throw new \InvalidArgumentException(sprintf('The parameter "%s" does not exist for method "%s".', $annotation->getName(), $method->getName()));
                }
                $methodMetadata->addParamPermissions($parameters[$annotation->getName()], $annotation->getPermissions());
            } else if ($annotation instanceof SecureReturn) {
                $methodMetadata->addReturnPermissions($annotation->getPermissions());
            } else if ($annotation instanceof SatisfiesParentSecurityPolicy) {
                $methodMetadata->setSatisfiesParentSecurityPolicy();
            } else if ($annotation instanceof RunAs) {
                $methodMetadata->setRunAsRoles($annotation->getRoles());
            }
        }
        return $methodMetadata;
    }
}}
namespace JMS\SecurityExtraBundle\Security\Authorization\Interception
{
class MethodInvocation extends \ReflectionMethod
{
    private $arguments;
    private $object;
    public function __construct($class, $name, $object, array $arguments = array())
    {
        parent::__construct($class, $name);
        if (!is_object($object)) {
            throw new \InvalidArgumentException('$object must be an object.');
        }
        $this->arguments = $arguments;
        $this->object = $object;
    }
    public function setArguments(array $arguments)
    {
        $this->arguments = $arguments;
    }
    public function getArguments()
    {
        return $this->arguments;
    }
    public function getThis()
    {
        return $this->object;
    }
}}
