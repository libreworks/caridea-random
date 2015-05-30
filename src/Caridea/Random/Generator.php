<?php
/**
 * Caridea
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 * 
 * @copyright 2015 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
namespace Caridea\Random;

/**
 * A provider of cryptographically-strong random bytes.
 * 
 * @copyright 2015 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
interface Generator
{
    /**
     * Generates some random bytes.
     * 
     * If `$length` is anything other than an integer greater than zero, this
     * method will return an empty string. 
     * 
     * If the cryptographic provider used by this generator isn't available,
     * this method will return a string full of null bytes of the length
     * required.
     * 
     * @param int $length The number of bytes required
     * @return string The generated bytes
     */
    public function generate($length);
}
