<?php

namespace Proxy\__CG__\Newscoop\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Language extends \Newscoop\Entity\Language implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setNativeName($native_name)
    {
        $this->__load();
        return parent::setNativeName($native_name);
    }

    public function getNativeName()
    {
        $this->__load();
        return parent::getNativeName();
    }

    public function setCodePage($code_page)
    {
        $this->__load();
        return parent::setCodePage($code_page);
    }

    public function getCodePage()
    {
        $this->__load();
        return parent::getCodePage();
    }

    public function setCode($code)
    {
        $this->__load();
        return parent::setCode($code);
    }

    public function getCode()
    {
        $this->__load();
        return parent::getCode();
    }

    public function setMonth1($month)
    {
        $this->__load();
        return parent::setMonth1($month);
    }

    public function getMonth1()
    {
        $this->__load();
        return parent::getMonth1();
    }

    public function setMonth2($month)
    {
        $this->__load();
        return parent::setMonth2($month);
    }

    public function getMonth2()
    {
        $this->__load();
        return parent::getMonth2();
    }

    public function setMonth3($month)
    {
        $this->__load();
        return parent::setMonth3($month);
    }

    public function getMonth3()
    {
        $this->__load();
        return parent::getMonth3();
    }

    public function setMonth4($month)
    {
        $this->__load();
        return parent::setMonth4($month);
    }

    public function getMonth4()
    {
        $this->__load();
        return parent::getMonth4();
    }

    public function setMonth5($month)
    {
        $this->__load();
        return parent::setMonth5($month);
    }

    public function getMonth5()
    {
        $this->__load();
        return parent::getMonth5();
    }

    public function setMonth6($month)
    {
        $this->__load();
        return parent::setMonth6($month);
    }

    public function getMonth6()
    {
        $this->__load();
        return parent::getMonth6();
    }

    public function setMonth7($month)
    {
        $this->__load();
        return parent::setMonth7($month);
    }

    public function getMonth7()
    {
        $this->__load();
        return parent::getMonth7();
    }

    public function setMonth8($month)
    {
        $this->__load();
        return parent::setMonth8($month);
    }

    public function getMonth8()
    {
        $this->__load();
        return parent::getMonth8();
    }

    public function setMonth9($month)
    {
        $this->__load();
        return parent::setMonth9($month);
    }

    public function getMonth9()
    {
        $this->__load();
        return parent::getMonth9();
    }

    public function setMonth10($month)
    {
        $this->__load();
        return parent::setMonth10($month);
    }

    public function getMonth10()
    {
        $this->__load();
        return parent::getMonth10();
    }

    public function setMonth11($month)
    {
        $this->__load();
        return parent::setMonth11($month);
    }

    public function getMonth11()
    {
        $this->__load();
        return parent::getMonth11();
    }

    public function setMonth12($month)
    {
        $this->__load();
        return parent::setMonth12($month);
    }

    public function getMonth12()
    {
        $this->__load();
        return parent::getMonth12();
    }

    public function setShortMonth1($month)
    {
        $this->__load();
        return parent::setShortMonth1($month);
    }

    public function getShortMonth1()
    {
        $this->__load();
        return parent::getShortMonth1();
    }

    public function setShortMonth2($month)
    {
        $this->__load();
        return parent::setShortMonth2($month);
    }

    public function getShortMonth2()
    {
        $this->__load();
        return parent::getShortMonth2();
    }

    public function setShortMonth3($month)
    {
        $this->__load();
        return parent::setShortMonth3($month);
    }

    public function getShortMonth3()
    {
        $this->__load();
        return parent::getShortMonth3();
    }

    public function setShortMonth4($month)
    {
        $this->__load();
        return parent::setShortMonth4($month);
    }

    public function getShortMonth4()
    {
        $this->__load();
        return parent::getShortMonth4();
    }

    public function setShortMonth5($month)
    {
        $this->__load();
        return parent::setShortMonth5($month);
    }

    public function getShortMonth5()
    {
        $this->__load();
        return parent::getShortMonth5();
    }

    public function setShortMonth6($month)
    {
        $this->__load();
        return parent::setShortMonth6($month);
    }

    public function getShortMonth6()
    {
        $this->__load();
        return parent::getShortMonth6();
    }

    public function setShortMonth7($month)
    {
        $this->__load();
        return parent::setShortMonth7($month);
    }

    public function getShortMonth7()
    {
        $this->__load();
        return parent::getShortMonth7();
    }

    public function setShortMonth8($month)
    {
        $this->__load();
        return parent::setShortMonth8($month);
    }

    public function getShortMonth8()
    {
        $this->__load();
        return parent::getShortMonth8();
    }

    public function setShortMonth9($month)
    {
        $this->__load();
        return parent::setShortMonth9($month);
    }

    public function getShortMonth9()
    {
        $this->__load();
        return parent::getShortMonth9();
    }

    public function setShortMonth10($month)
    {
        $this->__load();
        return parent::setShortMonth10($month);
    }

    public function getShortMonth10()
    {
        $this->__load();
        return parent::getShortMonth10();
    }

    public function setShortMonth11($month)
    {
        $this->__load();
        return parent::setShortMonth11($month);
    }

    public function getShortMonth11()
    {
        $this->__load();
        return parent::getShortMonth11();
    }

    public function setShortMonth12($month)
    {
        $this->__load();
        return parent::setShortMonth12($month);
    }

    public function getShortMonth12()
    {
        $this->__load();
        return parent::getShortMonth12();
    }

    public function setDay1($day)
    {
        $this->__load();
        return parent::setDay1($day);
    }

    public function getDay1()
    {
        $this->__load();
        return parent::getDay1();
    }

    public function setDay2($day)
    {
        $this->__load();
        return parent::setDay2($day);
    }

    public function getDay2()
    {
        $this->__load();
        return parent::getDay2();
    }

    public function setDay3($day)
    {
        $this->__load();
        return parent::setDay3($day);
    }

    public function getDay3()
    {
        $this->__load();
        return parent::getDay3();
    }

    public function setDay4($day)
    {
        $this->__load();
        return parent::setDay4($day);
    }

    public function getDay4()
    {
        $this->__load();
        return parent::getDay4();
    }

    public function setDay5($day)
    {
        $this->__load();
        return parent::setDay5($day);
    }

    public function getDay5()
    {
        $this->__load();
        return parent::getDay5();
    }

    public function setDay6($day)
    {
        $this->__load();
        return parent::setDay6($day);
    }

    public function getDay6()
    {
        $this->__load();
        return parent::getDay6();
    }

    public function setDay7($day)
    {
        $this->__load();
        return parent::setDay7($day);
    }

    public function getDay7()
    {
        $this->__load();
        return parent::getDay7();
    }

    public function setShortDay1($day)
    {
        $this->__load();
        return parent::setShortDay1($day);
    }

    public function getShortDay1()
    {
        $this->__load();
        return parent::getShortDay1();
    }

    public function setShortDay2($day)
    {
        $this->__load();
        return parent::setShortDay2($day);
    }

    public function getShortDay2()
    {
        $this->__load();
        return parent::getShortDay2();
    }

    public function setShortDay3($day)
    {
        $this->__load();
        return parent::setShortDay3($day);
    }

    public function getShortDay3()
    {
        $this->__load();
        return parent::getShortDay3();
    }

    public function setShortDay4($day)
    {
        $this->__load();
        return parent::setShortDay4($day);
    }

    public function getShortDay4()
    {
        $this->__load();
        return parent::getShortDay4();
    }

    public function setShortDay5($day)
    {
        $this->__load();
        return parent::setShortDay5($day);
    }

    public function getShortDay5()
    {
        $this->__load();
        return parent::getShortDay5();
    }

    public function setShortDay6($day)
    {
        $this->__load();
        return parent::setShortDay6($day);
    }

    public function getShortDay6()
    {
        $this->__load();
        return parent::getShortDay6();
    }

    public function setShortDay7($day)
    {
        $this->__load();
        return parent::setShortDay7($day);
    }

    public function getShortDay7()
    {
        $this->__load();
        return parent::getShortDay7();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'code_page', 'original_name', 'code', 'month1', 'month2', 'month3', 'month4', 'month5', 'month6', 'month7', 'month8', 'month9', 'month10', 'month11', 'month12', 'short_month1', 'short_month2', 'short_month3', 'short_month4', 'short_month5', 'short_month6', 'short_month7', 'short_month8', 'short_month9', 'short_month10', 'short_month11', 'short_month12', 'day1', 'day2', 'day3', 'day4', 'day5', 'day6', 'day7', 'short_day1', 'short_day2', 'short_day3', 'short_day4', 'short_day5', 'short_day6', 'short_day7');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}