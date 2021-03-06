<?php

/*
    "Contact Form to Database" Copyright (C) 2011-2016 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This file is part of Contact Form to Database.

    Contact Form to Database is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Contact Form to Database is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contact Form to Database.
    If not, see <http://www.gnu.org/licenses/>.
*/

require_once('BaseTransform.php');

class SplitField extends BaseTransform {

    /**
     * @var string
     */
    var $delimiter;

    /**
     * @var string
     */
    var $field;

    /**
     * SplitField constructor.
     * @param $delimiter string
     * @param $field string
     */
    public function __construct($delimiter, $field) {
        $this->delimiter = $delimiter;
        $this->field = $field;
    }

    public function addEntry(&$entry) {
        if ($this->delimiter && $this->field && isset($entry[$this->field])) {
            $values = explode($this->delimiter, $entry[$this->field]);
            $count = 1;
            foreach ($values as $value) {
                $entry["{$this->field}-$count"] = $value;
                $count++;
            }
            unset($entry[$this->field]);
        }
        $this->data[] = $entry;
    }

}